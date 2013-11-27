<?php 

error_reporting(-1);

class API{

	var $champions;
	var $items;
	var $client;
	var $spells = array();
	
	var $user;
	var $userName;

	public function __construct(){
			
	}

	function getRecentGames($data){
	
		include_once("champions.php");
		include_once("items.php");
		
		$this->champions 	= new Champions();
		$this->items	 	= new Items();
		$statistics 		= array();
		$result 			= array();
		$i					=0;
		
		$value = $data->toArray();
		print_r($value);
		
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
	
	function getAggregatedStats(){
		print_r($this->client->getAggregatedStats( intval($this->user["acctId"]), 'CLASSIC', 3));
	}
	
	function retrieveInProgressSpectatorGameInfo(){
			
		include_once("champions.php");
		
		$this->champions 	= new Champions();
	
		$value = $this->client->retrieveInProgressSpectatorGameInfo( $this->userName);
		
		
		$teamOne = array();
		$teamTwo = array();
		$champs  = array();
		$banneds = array();
		
		print_r($value["game"]->amfData); 	
			
		// TEAM ONE
		foreach($value["game"]->amfData["teamOne"] as $teamOneArray){
		
			array_push($teamOne,array(
				"summonerName"			=> $teamOneArray->amfData["summonerName"],
				"pickTurn"				=> $teamOneArray->amfData["pickTurn"],
				"summonerInternalName"	=> $teamOneArray->amfData["summonerInternalName"],
				"profileIconId"			=> $teamOneArray->amfData["profileIconId"],
				"lastSelectedSkinIndex"	=> $teamOneArray->amfData["lastSelectedSkinIndex"]
			));
			
		}
		foreach($value["game"]->amfData["teamTwo"] as $teamTwoArray){
				
			array_push($teamTwo,array(
				"summonerName"			=> $teamTwoArray->amfData["summonerName"],
				"pickTurn"				=> $teamTwoArray->amfData["pickTurn"],
				"summonerInternalName"	=> $teamTwoArray->amfData["summonerInternalName"],
				"profileIconId"			=> $teamTwoArray->amfData["profileIconId"],
				"lastSelectedSkinIndex"	=> $teamTwoArray->amfData["lastSelectedSkinIndex"]
				
			));
			
		}
		
		foreach($value["game"]->amfData["playerChampionSelections"] as $champSelection){
				
			array_push($champs,array(
				"spell2Id"				=> $champSelection->amfData["spell2Id"],
				"spell1Id"				=> $champSelection->amfData["spell1Id"],
				"summonerInternalName"	=> $champSelection->amfData["summonerInternalName"],
				"selectedSkinIndex"		=> $champSelection->amfData["selectedSkinIndex"],
				"championId"			=> $champSelection->amfData["championId"],
				"champion"				=> $this->champions->getChampById($champSelection->amfData["championId"]),
				"championImage"			=> "http://lkimg.zamimg.com/shared/riot/images/champions/{$champSelection->amfData["championId"]}_32.png"
				
			));
			
		}
		
		foreach($teamOne as $key=>$t1){
			foreach($champs as $ch){
				if($t1["summonerInternalName"] == $ch["summonerInternalName"]){
					foreach($ch as $k=>$c){
						$teamOne[$key][$k] = $c;
					}
					$find = 1;
					break;
				}
			}
		}
			
		foreach($teamTwo as $key=>$t1){
			foreach($champs as $ch){
				if($t1["summonerInternalName"] == $ch["summonerInternalName"]){
					foreach($ch as $k=>$c){
						$teamTwo[$key][$k] = $c;
					}
					$find = 1;
					break;
				}
			}			
		}
			
		foreach($value["game"]->amfData["bannedChampions"] as $banned){
		
			if(!isset($banneds[$banned->amfData["teamId"]]))
				$banneds[$banned->amfData["teamId"]] = array();
				
			array_push($banneds[$banned->amfData["teamId"]],array(
				"pickTurn"				=> $banned->amfData["pickTurn"],
				"championId"			=> $banned->amfData["championId"],
				"champion"				=> $this->champions->getChampById($banned->amfData["championId"]),
				"championImage"			=> "http://lkimg.zamimg.com/shared/riot/images/champions/{$banned->amfData["championId"]}_32.png"
			));
		}
			
			print_r($teamOne);
			print_r($teamTwo);
			print_r($banneds);
			
		
	}
	
	function cmp($a, $b) {
		if ($a['createDate'] == $b['createDate']) {
			return 0;
		}
		return ($a['createDate'] < $b['createDate']) ? 1 : -1;
	}
	
	function getSpell($id){
	
		if(!isset($spell[$id])){
				
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, "http://www.lolking.net/service/tooltips/spell?ids={$id}"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			@curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);	
			$data = curl_exec($ch); 
			$error_no = curl_errno($ch);
			curl_close($ch); 
			
			
			$data = json_decode($data);
			
			$spell[$id] = $data->data;
			$spell[$id]->$id->image = "http://lkimg.zamimg.com/images/spells/{$id}.png";
		}
		return $spell[$id];
	}
	
	function compare_dates($time){
		
		$time = time() - $time; // to get the time since that moment

		$tokens = array (
			31536000 => 'year',
			2592000 => 'month',
			604800 => 'week',
			86400 => 'day',
			3600 => 'hour',
			60 => 'minute',
			1 => 'second'
		);

		foreach ($tokens as $unit => $text) {
			if ($time < $unit) continue;
			$numberOfUnits = floor($time / $unit);
			return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
		}

    } 
}