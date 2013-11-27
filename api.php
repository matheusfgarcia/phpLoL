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


class API{

	var $champions;
	var $items;
	var $client;
	var $spells = array();
	
	var $user;
	var $userName;

	public function __construct($userName){
	
		$this->userName = $userName;
		  
		$this->client = new LoLClient('mfgsk', 'mafiga182', 'BR');		
		$this->user = $this->client->getSummonerByName($userName);
		
	}

	function getRecentGames(){
	
		echo "oi";
		
		include_once("champions.php");
		include_once("items.php");
		
		$this->champions 	= new Champions();
		$this->items	 	= new Items();
		$statistics 		= array();
		$result 			= array();
		$i					=0;
		
		$value = $this->client->getRecentGames($this->user["acctId"]);
		
		foreach(iterator_to_array($value["gameStatistics"]) as $array){
			//print_r($array);
			//$result[$i]["champion"] = $array->amfData["skinName"];
			$result[$i]["gameMode"] 	= $array->amfData["gameMode"];
			$result[$i]["subType"] 		= $array->amfData["subType"];
			$result[$i]["createDate"] 	= $array->amfData["createDate"];
			$result[$i]["championId"] 	= $array->amfData["championId"];
			$result[$i]["championImage"]= "http://lkimg.zamimg.com/shared/riot/images/champions/{$array->amfData["championId"]}_92.png";
			$result[$i]["champion"] 	= $this->champions->getChampById($array->amfData["championId"]);
			$result[$i]["spell1"] 		= $array->amfData["spell1"];
			$result[$i]["spell2"] 		= $array->amfData["spell2"];
				
			foreach($array->amfData["fellowPlayers"]->data as $data){
			
				if(!isset($result[$i]["fellowPlayers"][$data->amfData["teamId"]]) OR !is_array($result[$i]["fellowPlayers"][$data->amfData["teamId"]]))
					$result[$i]["fellowPlayers"][$data->amfData["teamId"]] = array();
									
				array_push($result[$i]["fellowPlayers"][$data->amfData["teamId"]],array(
					"summonerId" 	=> $data->amfData["summonerId"],
					"summonerName"	=> utf8_decode($this->client->getSummonerName( $data->amfData["summonerId"])),
					"championId" 	=> $data->amfData["championId"],
					"championImage" => "http://lkimg.zamimg.com/shared/riot/images/champions/{$data->amfData["championId"]}_32.png",
					"champion"		=> $this->champions->getChampById($data->amfData["championId"])
				));
			
			}
			
			foreach($array->amfData["statistics"]->data as $data){
				$statistics[$data->amfData["statType"]] = $data->amfData["value"];
			
			}
			
			if(isset($statistics["ITEM0"])){
				$result[$i]["ITEM0"]["NAME"] 	= $this->items->getItemNameById($statistics["ITEM0"]);
				$result[$i]["ITEM0"]["IMAGE"] 	= $this->items->getItemImageById($statistics["ITEM0"]);
			}
			if(isset($statistics["ITEM1"])){
				$result[$i]["ITEM1"]["NAME"] 	= $this->items->getItemNameById($statistics["ITEM1"]);
				$result[$i]["ITEM1"]["IMAGE"] 	= $this->items->getItemImageById($statistics["ITEM1"]);
			}
			if(isset($statistics["ITEM2"])){
				$result[$i]["ITEM2"]["NAME"] 	= $this->items->getItemNameById($statistics["ITEM2"]);
				$result[$i]["ITEM2"]["IMAGE"] 	= $this->items->getItemImageById($statistics["ITEM2"]);
			}
			if(isset($statistics["ITEM3"])){
				$result[$i]["ITEM3"]["NAME"] 	= $this->items->getItemNameById($statistics["ITEM3"]);
				$result[$i]["ITEM3"]["IMAGE"] 	= $this->items->getItemImageById($statistics["ITEM3"]);
			}
			if(isset($statistics["ITEM4"])){
				$result[$i]["ITEM4"]["NAME"] 	= $this->items->getItemNameById($statistics["ITEM4"]);
				$result[$i]["ITEM4"]["IMAGE"] 	= $this->items->getItemImageById($statistics["ITEM4"]);
			}
			if(isset($statistics["ITEM5"])){
				$result[$i]["ITEM5"]["NAME"] 	= $this->items->getItemNameById($statistics["ITEM5"]);
				$result[$i]["ITEM5"]["IMAGE"] 	= $this->items->getItemImageById($statistics["ITEM5"]);
			}
			
			$result[$i]["KILLS"] 	= (isset($statistics["CHAMPIONS_KILLED"])) ? $statistics["CHAMPIONS_KILLED"] 	: 0;
			$result[$i]["DEATH"] 	= (isset($statistics["NUM_DEATHS"])) 		? $statistics["NUM_DEATHS"]			: 0;
			$result[$i]["ASSISTS"] 	= (isset($statistics["ASSISTS"])) 			? $statistics["ASSISTS"] 			: 0;
			$result[$i]["GOLD"] 	= (isset($statistics["GOLD_EARNED"])) 		? $statistics["GOLD_EARNED"] 		: 0;
			$result[$i]["MINIONS"] 	= (isset($statistics["MINIONS_KILLED"])) 	? $statistics["MINIONS_KILLED"]		: 0;
			$result[$i]["WIN"]		= (isset($statistics["WIN"])) 				? true 								: false;
			
			foreach($statistics as $key=>$stats){
				if($key != "TOTAL_DAMAGE_DEALT" || $key != "TOTAL_DAMAGE_TAKEN" || $key != "TOTAL_HEAL" || $key != "LARGEST_KILLING_SPREE" || $key != "TURRETS_KILLED" || $key != "TOTAL_TIME_SPENT_DEAD" )
					unset($statistics[$key]);
			}
			
			if(!isset($result[$i]["fellowPlayers"][$array->amfData["teamId"]]))
				$result[$i]["fellowPlayers"][$array->amfData["teamId"]] = array();
			
			array_push($result[$i]["fellowPlayers"][$array->amfData["teamId"]],array(
				"summonerId" 	=> $array->amfData["summonerId"],
				"summonerName" 	=> utf8_decode($this->client->getSummonerName( $array->amfData["summonerId"])),
				"championId" 	=> $array->amfData["championId"],
				"championImage" => "http://lkimg.zamimg.com/shared/riot/images/champions/{$array->amfData["championId"]}_32.png",
				"champion"		=> $this->champions->getChampById($array->amfData["championId"]),
				"statistics" 	=> $statistics
			));
				
			$i++;

		}
		
		uasort($result, array($this,'cmp'));
		return $result;
	}

}
die();
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

print_r($stats);

