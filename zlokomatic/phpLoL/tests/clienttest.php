<?php

class ClientTest extends PHPUnit_Framework_TestCase
{
    public function testLogin(){
         $client = new zlokomatic\phpLoL\LoLClient('User', 'Password', 'EUW' );
         return $client;

    }

    /**
     * @depends testLogin
     */
    public function testSummonerByName($client){
        $client->getSummonerByName('Test');
    }

    /**
     * @depends testLogin
     */
    public function testAllPublicSummonerDataByAccount($client){
        $client->getAllPublicSummonerDataByAccount(28180279);
    }

    /**
     * @depends testLogin
     */
    public function testSummonerNames($client){
        $client->getSummonerNames(array(23949337));
    }

    /**
     * @depends testLogin
     */
    public function testRecentGames($client){
        $client->getRecentGames(23949337);
    }

    /**
     * @depends testLogin
     */
    public function testPlayerStatsByAccountId($client){
        $client->getPlayerStatsByAccountId(23949337);
    }

    /**
     * @depends testLogin
     */
    public function testAggregatedStats($client){
        $client->getAggregatedStats(23949337, 'CLASSIC', 1);
    }

    /**
     * @depends testLogin
     */
    public function testAllLeaguesForPlayer($client){
        $client->getAllLeaguesForPlayer(23949337);
    }

}
