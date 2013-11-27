<?php

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

$api = new api();

//use zlokomatic\phpLoL\examples\LOLProfiler;

$client = new LoLClient('mfgsk', 'mafiga182', 'BR' );

$summonerName = $_GET['user'];

$summoner = $client->getSummonerByName($summonerName);

$publicSummonerData = $client->getAllPublicSummonerDataByAccount($summoner->getAcctId());

$names = $client->getSummonerNames(array($summoner->getAcctId()));

$games = $client->getRecentGames($summoner->getAcctId());

// print_r($games);
$content = $api->getRecentGames($games);

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


?>

<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<script>
function enable_tooltip(portrait){

	var dir = "";
	var color = "";
	if(portrait == "top"){
		dir = "top";
		color = "transparent transparent black transparent";
	}else{
		if(portrait == "bottom"){
			dir = "bottom";
			color = "black transparent transparent transparent";
		}else
			return false;
	}		
	
	$("#tooltip_arrow").css({"border-color":color});
	$("#tooltip_arrow").css({dir:"-20"});
	$("#tooltip_box").show();

}

function close_tooltip(){
	
	$("#tooltip_box").hide();

}

function MousePosition( e ) {
	var oEvent = e || window.event;

	this.screenX = oEvent.screenX;
	this.screenY = oEvent.screenY;
	this.clientX = oEvent.clientX;
	this.clientY = oEvent.clientY;
	this.pageX = oEvent.pageX || this.clientX + doc.scrollLeft || 0;
	this.pageY = oEvent.pageY || this.clientY + doc.scrollTop || 0;

	// Aqui você exibe os dados que quiser...
	console.log( this.screenX);

}
$(document).ready(function(){
	$(".matchGame").click(function(e){$(this).next("div").slideToggle(300)});
});
</script>
<style>

.clearfix{
	clear:both;
}

.matchGame div{

	display:table-cell;



}

body{
	
background-image: url(http://cdn.leagueoflegends.com/lolkit/1.0.37/resources/images/bg-default.jpg);
background-position: top center;
background-repeat: no-repeat;
background-color: #000000;
}

*{
	font-family:Arial, Helvetica, sans-serif;

	margin: 0;

	padding: 0;

	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;


}

.Content{
	margin-left: auto;
	margin-right: auto;
	width: 912px;
}

.fellowPlayerStat{

	display:inline-block;
	width:200px;
	height:40px;
	overflow:hidden;

}

.team100,.team200{
	
	float:left;
	width:200px;

}

.matchGame,.gameStats{
	display:block;
	margin:10px;
	padding:5px;
	background-color: rgba(255, 255, 255, 0.8);
	border: solid 1px #eaeaea;	
	-webkit-border-radius: 4px;
    border-radius: 4px;
	-webkit-box-shadow:  0px 2px 5px 0px rgba(0, 0, 0, 0.5);
    box-shadow:  0px 2px 5px 0px rgba(0, 0, 0, 0.5);
}

.matchGame{
	height:93px;
}

.championImage img{
	-webkit-box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.3);
    box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.3);
	-webkit-border-radius: 4px;
    border-radius: 4px;
}
.spells img, .itemsGame img{
	margin:2px;
	background-color: rgba(255, 255, 255, 0.8);
	color: rgba(255, 255, 255, 0.8);	
	-webkit-box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.3);
    box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.3);
	-webkit-border-radius: 4px;
    border-radius: 4px;
}
</style>

</head>

<body>


<div class="Content">
<?php

foreach($content as $cont){

	
	echo "<div class=\"game\">";
		echo "<div class=\"matchGame\">";

			echo "<div class=\"championImage\" style=\"float:left\">";

				echo "<img src=\"{$cont["championImage"]}\">";

			echo "</div>";

			echo "<div class=\"generalData\" style=\"padding:15px;height:70px;width:130px;float:left;\">";

				echo "<div class=\"gameType\" style=\"display:block;font-size:12;\">{$cont["subType"]} </div>";

				echo "<div class=\"gameResult\" style=\"display:block;\">";

					if($cont["WIN"]) echo "<span style=\"font-size:18;color:#66cc33;font-weight:bold\">Win</span>"; else echo "<span style=\"font-size:18;color:#dd7777;font-weight:bold\">Lose</span>";

				echo "</div>";

				echo "<div class=\"gameDate\" style=\"display:block;\">";

					// echo $api->compare_dates($cont["createDate"]->format('Y/m/d H:i:s'));

					echo "<span style=\"font-size:12;\">".$api->compare_dates($cont["createDate"]->format('U'))." ago</span>";

				echo "</div>";

			echo "</div>";

			echo "<div class=\"KDA\" style=\"padding:15px;height:70px;width:90px;float:left;\">";

				echo "<span style=\"display:block;font-size:12;\"><span style=\"font-size:18;font-weight:bold\">".$cont["KILLS"]."</span> Kills</span>";

				echo "<span style=\"display:block;font-size:12;\"><span style=\"font-size:18;font-weight:bold\">".$cont["DEATH"]."</span> Deaths</span>";

				echo "<span style=\"display:block;font-size:12;\"><span style=\"font-size:18;font-weight:bold\">".$cont["ASSISTS"]."</span> Assists</span>";

			echo "</div>";

			echo "<div class=\"goldEarned\" style=\"padding:25px;width:60px;float:left;\">";

				echo "<span style=\"display:block;font-size:18;font-weight:bold\">".$cont["GOLD"]."</span>" ;

				echo "<span style=\"font-size:12;\">Gold</span>";

			echo "</div>";

			echo "<div class=\"minionsKilled\" style=\"padding:25px;width:60px;float:left;\">";

				echo "<span style=\"display:block;font-size:18;font-weight:bold\">".$cont["MINIONS"]."</span>" ;

				echo "<span style=\"font-size:12;\">Minions</span>";

			echo "</div>";

			echo "<div class=\"spells\" style=\"float:left;width:30px;padding:10px\">";

				echo "<img height=\"32\" width=\"32\" alt=\"".$api->getSpell($cont["spell1"])->$cont["spell1"]->name."\" src=\"".$api->getSpell($cont["spell1"])->$cont["spell1"]->image."\"></img>";

				echo "<img height=\"32\" width=\"32\" alt=\"".$api->getSpell($cont["spell2"])->$cont["spell2"]->name."\" src=\"".$api->getSpell($cont["spell2"])->$cont["spell2"]->image."\"></img>";

			echo "</div>";

			echo "<div class=\"itemsGame\" style=\"width:110px;padding:10px\">";

				if(isset($cont["ITEM0"]["NAME"]) AND $cont["ITEM0"]["NAME"])

					echo "<img onmouseup=\"MousePosition( e )\" alt=\"".$cont["ITEM0"]["NAME"]."\" src=\"".$cont["ITEM0"]["IMAGE"]."\">";

				if(isset($cont["ITEM1"]["NAME"]) AND $cont["ITEM1"]["NAME"])

					echo "<img onmouseup=\"MousePosition( e )\" alt=\"".$cont["ITEM1"]["NAME"]."\" src=\"".$cont["ITEM1"]["IMAGE"]."\">";

				if(isset($cont["ITEM2"]["NAME"]) AND $cont["ITEM2"]["NAME"])

					echo "<img onmouseup=\"MousePosition( e )\" alt=\"".$cont["ITEM2"]["NAME"]."\" src=\"".$cont["ITEM2"]["IMAGE"]."\">";

				if(isset($cont["ITEM3"]["NAME"]) AND $cont["ITEM3"]["NAME"])

					echo "<img onmouseup=\"MousePosition( e )\" alt=\"".$cont["ITEM3"]["NAME"]."\" src=\"".$cont["ITEM3"]["IMAGE"]."\">";

				if(isset($cont["ITEM4"]["NAME"]) AND $cont["ITEM4"]["NAME"])

					echo "<img onmouseup=\"MousePosition( e )\" alt=\"".$cont["ITEM4"]["NAME"]."\" src=\"".$cont["ITEM4"]["IMAGE"]."\">";

				if(isset($cont["ITEM5"]["NAME"]) AND $cont["ITEM5"]["NAME"])

					echo "<img onmouseup=\"MousePosition( e )\" alt=\"".$cont["ITEM5"]["NAME"]."\" src=\"".$cont["ITEM5"]["IMAGE"]."\">";

			echo "</div>";

		echo "</div>";
		echo "<div class=\"gameStats\" style=\"display:none\">";
		
			echo "<div class=\"fellowPlayers\">";
				echo "<div class=\"team100\" style=\"float:left\">";
					foreach($cont["fellowPlayers"][100] as $player){
					
						$player["summonerName"] =  $client->getSummonerNames(array($player["summonerId"]));
						
						print_r($player["summonerName"]);
					
						echo "<a href=\"http://lolme.matheusgarcia.com/?user={$player["summonerName"]}\" class=\"fellowPlayerStat\">";
							echo "<div>";
									echo "<div class=\"championImage\" style=\"float:left\">";
										echo "<img src=\"{$player["championImage"]}\">";
									echo "</div>";
									echo "<div class=\"userName\">";
										echo "<span> {$player["summonerName"]} </span>";
									echo "</div>";
							echo "</div>";
						echo "</a>";
					
					}
					echo "<div class=\"clearfix\"></div>";
				echo "</div>";
				echo "<div class=\"team200\" style=\"float:left\">";
					foreach($cont["fellowPlayers"][200] as $player){
						echo "<a href=\"http://lolme.matheusgarcia.com/?user={$player["summonerName"]}\" class=\"fellowPlayerStat\">";
							echo "<div>";
									echo "<div class=\"championImage\" style=\"float:left\">";
										echo "<img src=\"{$player["championImage"]}\">";
									echo "</div>";
									echo "<div class=\"userName\">";
										echo "<span> {$player["summonerName"]} </span>";
									echo "</div>";
							echo "</div>";
						echo "</a>";
					
					}
					echo "<div class=\"clearfix\"></div>";
				echo "</div>";
				echo "<div class=\"clearfix\"></div>";
			echo "</div>";
			echo "<div class=\"myStats\">";
			
			echo "</div>";
			echo "<div class=\"clearfix\"></div>";
		echo "</div>";
	echo "</div>";
}


