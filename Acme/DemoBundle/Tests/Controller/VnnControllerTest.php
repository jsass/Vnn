<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VnnControllerTest extends WebTestCase
{
    public function testPlayerParsing()
    {
        // test the page that reads in the data for highest scores
        // read in file
        $htmlData = new PlayerHtml();
        $html = $htmlData->getHtml();
        // parse it
        // set values
        $scoresList = new TopScores;
        $player = $scoresList->parseTopData($html);
        // check against known values
        $this->assertEquals(5, $scoresList->getCount());
        $this->assertEquals("- Bluiett, Trevon", $player[1]['name']);
        $this->assertEquals("- Faubion, JC", $player[2]['name']);
        $this->assertEquals("- Korn, Aaron", $player[3]['name']);
        $this->assertEquals("- Mahurin, Lane", $player[4]['name']);
        $this->assertEquals("- Johnson, Taishaun", $player[5]['name']);
        // test urls
     }
    
    public function testGameParsing()
    {    
        // test the page that reads in the data for the games for a player
    }

    public function testNoData2014()
    {    
        // test the case where 2014 data is not available
    }

}
