<?php

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class AllSummonerData extends SummonerData
{
    protected $masteryBook;
    
    public function setMasteryBook($masteryBook)
    {
        $this->masteryBook = $masteryBook;
    }
    
    public function getMasteryBook()
    {
        return $this->masteryBook;
    }
}
