<?php

Class Champions{
    var $champ = array();
	
	public function __construct(){
	
		$this->champ[0] =  null; // represents a catch-all champion for stats
		$this->champ[1] = "Annie";
		$this->champ[2] = "Olaf";
		$this->champ[3] = "Galio";
		$this->champ[4] = "Twisted Fate";
		$this->champ[5] = "Xin Zhao";
		$this->champ[6] = "Urgot";
		$this->champ[7] = "LeBlanc";
		$this->champ[8] = "Vladimir";
		$this->champ[9] = "Fiddlesticks";
		$this->champ[10] = "Kayle";
		$this->champ[11] = "Master Yi";
		$this->champ[12] = "Alistar";
		$this->champ[13] = "Ryze";
		$this->champ[14] = "Sion";
		$this->champ[15] = "Sivir";
		$this->champ[16] = "Soraka";
		$this->champ[17] = "Teemo";
		$this->champ[18] = "Tristana";
		$this->champ[19] = "Warwick";
		$this->champ[20] = "Nunu";
		$this->champ[21] = "Miss Fortune";
		$this->champ[22] = "Ashe";
		$this->champ[23] = "Tryndamere";
		$this->champ[24] = "Jax";
		$this->champ[25] = "Morgana";
		$this->champ[26] = "Zilean";
		$this->champ[27] = "Singed";
		$this->champ[28] = "Evelynn";
		$this->champ[29] = "Twitch";
		$this->champ[30] = "Karthus";
		$this->champ[31] = "Cho'Gath";
		$this->champ[32] = "Amumu";
		$this->champ[33] = "Rammus";
		$this->champ[34] = "Anivia";
		$this->champ[35] = "Shaco";
		$this->champ[36] = "Dr. Mundo";
		$this->champ[37] = "Sona";
		$this->champ[38] = "Kassadin";
		$this->champ[39] = "Irelia";
		$this->champ[40] = "Janna";
		$this->champ[41] = "Gangplank";
		$this->champ[42] = "Corki";
		$this->champ[43] = "Karma";
		$this->champ[44] = "Taric";
		$this->champ[45] = "Veigar";
		$this->champ[48] = "Trundle";
		$this->champ[50] = "Swain";
		$this->champ[51] = "Caitlyn";
		$this->champ[53] = "Blitzcrank";
		$this->champ[54] = "Malphite";
		$this->champ[55] = "Katarina";
		$this->champ[56] = "Nocturne";
		$this->champ[57] = "Maokai";
		$this->champ[58] = "Renekton";
		$this->champ[59] = "Jarvan IV";
		$this->champ[61] = "Orianna";
		$this->champ[62] = "Wukong";
		$this->champ[63] = "Brand";
		$this->champ[64] = "Lee Sin";
		$this->champ[67] = "Vayne";
		$this->champ[68] = "Rumble";
		$this->champ[69] = "Cassiopeia";
		$this->champ[72] = "Skarner";
		$this->champ[74] = "Heimerdinger";
		$this->champ[75] = "Nasus";
		$this->champ[76] = "Nidalee";
		$this->champ[77] = "Udyr";
		$this->champ[78] = "Poppy";
		$this->champ[79] = "Gragas";
		$this->champ[80] = "Pantheon";
		$this->champ[81] = "Ezreal";
		$this->champ[82] = "Mordekaiser";
		$this->champ[83] = "Yorick";
		$this->champ[84] = "Akali";
		$this->champ[85] = "Kennen";
		$this->champ[86] = "Garen";
		$this->champ[89] = "Leona";
		$this->champ[90] = "Malzahar";
		$this->champ[91] = "Talon";
		$this->champ[92] = "Riven";
		$this->champ[96] = "Kog'Maw";
		$this->champ[98] = "Shen";
		$this->champ[99] = "Lux";
		$this->champ[101] = "Xerath";
		$this->champ[102] = "Shyvana";
		$this->champ[103] = "Ahri";
		$this->champ[104] = "Graves";
		$this->champ[105] = "Fizz";
		$this->champ[106] = "Volibear";
		$this->champ[110] = "Varus";
		$this->champ[111] = "Nautilus";
		$this->champ[112] = "Viktor";
		$this->champ[113] = "Sejuani";
		$this->champ[114] = "Fiora";
		$this->champ[115] = "Ziggs";
		$this->champ[117] = "Lulu";
		$this->champ[119] = "Draven";
		$this->champ[120] = "Hecarim";
		$this->champ[122] = "Darius";
		$this->champ[126] = "Jayce";
		$this->champ[143] = "Zyra";
		$this->champ[131] = "Diana";
		$this->champ[107] = "Rengar";
		$this->champ[134] = "Syndra";
		$this->champ[121] = "Kha'Zix";
		$this->champ[60] = "Elise";
		$this->champ[238] = "Zed";
		$this->champ[267] = "Nami";
		$this->champ[254] = "Vi";
		$this->champ[412] = "Thresh";
		$this->champ[133] = "Quinn";
		$this->champ[154] = "Zac";
		$this->champ[127] = "Lissandra";
		$this->champ[266] = "Aatrox";
		$this->champ[222] = "Jinx";
		$this->champ[236] = "Lucian";
	}
	
	function getChampById($id){
	
		return $this->champ[$id];
	}
		
}
		
?>