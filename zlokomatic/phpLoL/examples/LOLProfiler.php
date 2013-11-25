<?php

namespace zlokomatic\phpLoL\examples;

use zlokomatic\phpLoL\LoLClient;

class LOLProfiler extends LoLClient
{
    private $data = array();
    
    public function __construct($username, $password, $region = "EUW")
    {
        parent::__construct($username, $password, $region);
    }
    
    public function searchSummoner($summonerName)
    {
        $player = $this->getSummonerByName($summonerName);
        
        foreach($player->toArray() as $id => $value)
        {
            $this->data[$id] = $value;
        }
    }
    
    public function __get($name)
    {
        if(!array_key_exists($name,$this->data))
            throw new Exception('You are trying to access an undefined variable');
        else
            return $this->data[$name];
    }
    

}

