<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use  Acme\DemoBundle\DependencyInjection\TopScores;
use  Acme\DemoBundle\DependencyInjection\Charts;


class VnnController extends Controller
{
    /**
     * @Route("/", name="_vnn")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="_vnn_hello")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name."test");
    }
    
     /**
     * @Route("/scorer", name="_vnn_scorer")
     * @Template()
     */
    public function topScorerAction()
    {
        $scoresList = new TopScores;
        $player = $scoresList->parseTopData($scoresList->getSeasonData());
        return array('player' => $player, 'numberOfPlayers' => $scoresList->getCount());
    }

     /**
     * @Route("/team/player/{team_num}/{player_num}", name="_vnn_game")
     * @Template()
     */
    public function gameAction($team_num, $player_num)
    {
        $scoresList = new TopScores;
        $games = $scoresList->parsePlayerData('http://varvee.com/team/player/'.$team_num.'/'.$player_num);
        $name = $games[1]['name']; // only need team and name one time
        $team = $games[1]['team']; 
        $chart = $scoresList->getChart();
        return array('gameData' => $games, 'name' => $name, 'team' => $team, 'chart'=> $chart);
    }

}
