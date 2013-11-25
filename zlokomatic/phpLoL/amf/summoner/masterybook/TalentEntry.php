<?php

namespace zlokomatic\phpLoL\amf\summoner\masterybook;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class TalentEntry extends LoLAMFBase
{
    protected $rank;
    protected $talentId;
    protected $talent;
    protected $summonerId;
    
    public function __construct(){}
    
    public function setRank($rank)
    {
        $this->rank = $rank;
    }
    
    public function getRank()
    {
        return $this->rank;
    }
    
    public function setTalentId($talentId)
    {
        $this->talentId = $talentId;
    }
    
    public function getTalentId()
    {
        return $this->talentId;
    }
    
    public function setTalent($talent)
    {
        $this->talent = $talent;
    }
    
    public function getTalent()
    {
        return $this->talent;
    }
    
    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    }
    
    public function getSummonerId()
    {
        return $this->summonerId;
    }
}
