<?php

Class Items{
    var $item = array();
		
	function getItemValue($id){
	
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, "http://www.lolking.net/service/tooltips/items?ids={$id}"); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
		$data = curl_exec($ch); 
		curl_close($ch); 
		
		$data = json_decode($data);
		return ($data->data) ? $data->data : false;
	}
		
	function getItemNameById($id){
		if(isset($id) and !empty($id))
			return $this->getItemValue($id)->$id->name;
		return false;
	}
	
	function getItemCostById($id){
		return $this->getItemValue($id)->$id->cost;
	}
	function getItemImageById($id){
		if(isset($id))
			return "http://lkimg.zamimg.com/shared/riot/images/items/{$id}_32.png";
		return false;
	}
	
}