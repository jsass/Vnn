<?php

namespace Acme\DemoBundle\DependencyInjection;
use  Acme\DemoBundle\DependencyInjection\Charts;

 class TopScores {
 
    private $scoring_current_season = "http://www.varvee.com/team/individual_leaderboard/54/27/";
    private $topScoringURL = "http://www.varvee.com/team/individual_leaderboard/54/27//school-year:2013/flag:1/activeTable:7ddcf6228db4ee2edfe138c2b283968d#7ddcf6228db4ee2edfe138c2b283968d";
    private $numberOfPlayers = 5;
    private $baseurl = "http://www.varvee.com";
    private $site_baseurl = "/Symfony/web/app_dev.php/vnn";
 	
 	public function __construct(){
  		//error_reporting(E_ALL);
 	}
 	
 	/*
 	*   Place the first name last after a comma
 	*   If there are more than 2 names we put them first, do not check for middle name logic
 	*/
 	public function arrangeName($playerName) {
         // we need last name first
         // what if middle name or last name is 2 part?
        $nameArray = preg_split('/ /', $playerName);
        $lastNameFirst = "";
        for ($i = 1; $i < count($nameArray); $i++){
            $lastNameFirst .= $nameArray[$i];
            if ($i>1 && $i != count($nameArray)) {
                // add a space could be middle name
                $lastNameFirst .= " ";
            } 
        }       
        $lastNameFirst = trim($lastNameFirst).", ". $nameArray[0];
        return $lastNameFirst;
	}
 	
 	public function getCount() {
 	    return $this->numberOfPlayers;
 	}
 	
 	public function getChart() {
        $chart = new Charts;
        $valueArray = array(1, 20, 45);
        $title = "Title";
        $hAxisLabels = "X Label";
        $yUnit = "Y  Unit";
        $xUnit = "X unit";
        $bk_color = "white";
        $javascript =  $chart->GenerateLineAreaChartHtmlCode($valueArray, $title, $hAxisLabels, $yUnit, $xUnit, $bk_color);
        return "alert('test start');".$javascript;
    }
 	
 	public function checkThisSeason() {
  	    $dom = new \DOMDocument();
        $content  = file_get_contents($this->scoring_current_season);
        @$dom -> loadHTML($content);
                       
        $xpath = new \DOMXPath($dom);
        $rows = $xpath->query("//tr");   
        $resultInfo = $xpath->query('//tr[contains(@class,"empty-set")]');
        
        if ($resultInfo != null) {
            $rows = null;
        }
        return $rows;     
	}
 	
  	public function checkLastSeason() {
  	    $dom = new \DOMDocument();
        $content  = file_get_contents($this->topScoringURL);
        @$dom -> loadHTML($content);
                       
        $xpath = new \DOMXPath($dom);
        $rows = $xpath->query("//tr");        
        return $rows;     
	}
 
 	public function getSeasonData() {
        
        $rows = $this->checkThisSeason();
        if ($rows==null) { // this season is empty right now
            $rows = $this->checkLastSeason();
        }
        return $rows;
    }
        
	public function parseTopData($rows) {
        
        $rows = $this->checkThisSeason();
        if ($rows==null) { // this season is empty right now
            $rows = $this->checkLastSeason();
        }
 
       $player[] = null;       
      // 1st row is headers so start at line 2
        $startRow = 2;
        // want top X players
        $maxRows = $this->numberOfPlayers + $startRow - 1;
        
        if  ($rows->length < ($maxRows)) {
            $maxRows = $rows->length;
            $this->numberOfPlayers = $maxRows - $startRow ;
        }
        
        for ($j = $startRow; $j <= $maxRows; $j++){
            $colnum = 1;
            foreach( $rows->item($j)->childNodes as $k => $td) {
                switch ($colnum) {
                 case 1:
                    $rank = $td->nodeValue;
                    break;
                 case 4:
                    $playerName = $td->nodeValue;
                    $url =  $td->getElementsByTagName('a')->item(0)->getAttribute('href');
                    break;
                 case 5:
                   $team = $td->nodeValue;
                   break;                  
                case 7:
                   $pointsScored = $td->nodeValue;
                   break;                  
                 }
                 $colnum++;
            }
            
            $player[$rank]['name'] = '- '.$this->arrangeName($playerName);
            $player[$rank]['url'] = $this->site_baseurl.$url;
            $player[$rank]['team'] = $team;
        }
        return $player;
 	}
 	
 	public function parsePlayerData($url){    
 	    $dom = new \DOMDocument();
        $content  = file_get_contents($url);
        @$dom -> loadHTML($content);
                       
        $xpath = new \DOMXPath($dom);

        $team = '';
        $name = "";        
        $nameNodes = $xpath->query('//div[contains(@class,"profile-name")]');
        $teamNodes = $xpath->query('//div[contains(@class,"detail school")]');
        
        foreach( $nameNodes as $node) {
            foreach( $node->childNodes as $k => $div) {
                $name = $div->nodeValue;
            }
        }
        $name = $this->arrangeName($name);
        
        foreach( $teamNodes as $tnode) {
            foreach( $tnode->childNodes as $k => $div) {
                $team = $team.$div->nodeValue;
            }
        }
        $team = trim($team);
               
        $rows = $xpath->query("//tr");  
        $foundValidData = false;    
        $gameNum = 1;
        foreach( $rows as $row) {
          $rowData = $row->nodeValue;
          // first valid row is after DateOpponentResults
          if ($foundValidData) {
            $opponent = "";
            $winLose = "";
            $playerScored = 0;
            $opponentScore = 0;
            
            $colnum = 1;
            foreach( $row->childNodes as $k => $td) {
                switch ($colnum) {
                    case 2:
                        $opponent = $td->nodeValue;
                        break;
                    case 3:
                        $gameScore = $td->nodeValue;
                        // score comes after dash
                        $dashPosition = strpos($gameScore,'-');
                        if ( $dashPosition !== false) {
                            $opponentScore = substr($gameScore, $dashPosition+1);
                            $winLose = substr($gameScore, 0, 1);
                        }
                        break;               
                    case 4:
                        $playerScored = $td->nodeValue;
                        break;               
                }
                $colnum++;
            }        
        $game[$gameNum]['opponent']=$opponent;
        $game[$gameNum]['playerScore']=$playerScored;
        $game[$gameNum]['teamScore']=$opponentScore;
        $game[$gameNum]['winLose']=$winLose;
        $game[$gameNum]['team']=$team;
        $game[$gameNum]['name']=$name;
        $gameNum++;
          }
              
       if (strpos($rowData,'DateOpponentResults') !== false) {
            $foundValidData = true;
          }
        }
        return $game;
    }
 	
 	public function displayTop($player) {
 	    echo "Top ". $this->numberOfPlayers. " Players<BR><BR>";
 	    for ($rank = 1; $rank<=$this->numberOfPlayers; $rank++) {
 	        echo "<a href='".$player[$rank]['url']."'>".$player[$rank]['name']."</a>";
 	        echo "<BR><BR>";
 	    }
 	}

 	public function displayGame($game) {
 	    echo "<tr><td></td><td>Opponent</td><td>Player, Score</td><td>Team, Score</td><td>W,/L</td></tr><BR>";
 	    for ($gameNum = 1; $gameNum<=count($game); $gameNum++) {
 	        echo "<tr><td>Game,".$gameNum ."</td><td>".$game[$gameNum]['opponent']."</td><td>".$game[$gameNum]['playerScore']."</td><td>".$game[$gameNum]['opponentScore']."</td><td>".$game[$gameNum]['winLose']."</td></tr>";
 	        echo "<BR>";
 	    }
 	}


}

/*
$scoresList = new TopScores;
$players = $scoresList->parseTopData();
$scoresList->displayTop($players);
$game = $scoresList->parsePlayerData('http://varvee.com/team/player/27/56714');
$scoresList->displayGame($game);
*/

?>
