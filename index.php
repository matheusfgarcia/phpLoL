<?php

error_reporting(-1);

require_once 'vendor/autoload.php';

use zlokomatic\phpLoL\LoLClient;

//use zlokomatic\phpLoL\examples\LOLProfiler;

$client = new LoLClient('mfgsk', 'mafiga182', 'BR' );

$summoner = $client->getSummonerByName("SummonerName");
$publicSummonerData = $client->getAllPublicSummonerDataByAccount($summoner->getAcctId());

$names = $client->getSummonerNames(array($summoner->getAcctId()));

$games = $client->getRecentGames($summoner->getAcctId());

print_r($games);



$stats = $client->getPlayerStatsByAccountId($summoner->getAcctId());

$aggStats = $client->getAggregatedStats($summoner->getAcctId(), 'CLASSIC', 3);

$leagues = $client->getAllLeaguesForPlayer($summoner->getSummonerId());

// 20-10
$masteries = $client->getMasteryBook($summoner->getSummonerId());

/*

$profiler = new LOLProfiler('Username','Password','NA');

$profiler->searchSummoner('SummonerName');

echo $profiler->name;

*/
