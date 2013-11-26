<?php

error_reporting(-1);

date_default_timezone_set("America/Los_Angeles");

spl_autoload_register(
    function($className)
    {
        $className = str_replace("_", "\\", $className);
        $className = ltrim($className, '\\');
        $fileName = '';
        $namespace = '';
        if ($lastNsPos = strripos($className, '\\'))
        {
            $namespace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        require $fileName;
    }
);

require_once 'vendor/autoload.php';

use zlokomatic\phpLoL\LoLClient;

//use zlokomatic\phpLoL\examples\LOLProfiler;

$client = new LoLClient('mfgsk', 'mafiga182', 'BR' );

$summonerName = $_GET['user'];

$summoner = $client->getSummonerByName($summonerName);

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


