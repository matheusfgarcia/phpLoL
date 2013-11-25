<?php

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class Talent extends LoLAMFBase
{
    protected $index;
    protected $tltId;
    protected $name;
    protected $minLevel;
    protected $maxRank;
    protected $minTier;
    protected $level1Desc;
    protected $level2Desc;
    protected $level3Desc;
    protected $level4Desc;
    protected $level5Desc;
    protected $talentGroupId;
    protected $gameCode;
    protected $prereqTalentGameCode;
    protected $talentRowId;
    
    public function __construct(){}
    
    public function setIndex($index)
    {
        $this->index = $index;
    }
    
    public function getIndex()
    {
        return $this->index;
    }
    
    public function setTltId($tltId)
    {
        $this->tltId = $tltId;
    }
    
    public function getTltId()
    {
        return $this->tltId;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setMinLevel($minLevel)
    {
        $this->minLevel = $minLevel;
    }
    
    public function getMinLevel()
    {
        return $this->minLevel;
    }
    
    public function setMaxRank($maxRank)
    {
        $this->maxRank = $maxRank;
    }
    
    public function getMaxRank()
    {
        return $this->maxRank;
    }
    
    public function setMinTier($minTier)
    {
        $this->minTier = $minTier;
    }
    
    public function getMinTier()
    {
        return $this->minTier;
    }
    
    public function setLevel1Desc($level1Desc)
    {
        $this->level1Desc = $level1Desc;
    }
    
    public function getLevel1Desc()
    {
        return $this->level1Desc;
    }
    
    public function setLevel2Desc($level2Desc)
    {
        $this->level2Desc = $level2Desc;
    }
    
    public function getLevel2Desc()
    {
        return $this->level2Desc;
    }
    
    public function setLevel3Desc($level3Desc)
    {
        $this->level3Desc = $level3Desc;
    }
    
    public function getLevel3Desc()
    {
        return $this->level3Desc;
    }
    
    public function setLevel4Desc($level4Desc)
    {
        $this->level4Desc = $level4Desc;
    }
    
    public function getLevel4Desc()
    {
        return $this->level4Desc;
    }
    
    public function setLevel5Desc($level5Desc)
    {
        $this->level5Desc = $level5Desc;
    }
    
    public function getLevel5Desc()
    {
        return $this->level5Desc;
    }
    
    public function setTalentGroupId($talentGroupId)
    {
        $this->talentGroupId = $talentGroupId;
    }
    
    public function getTalentGroupId()
    {
        return $this->talentGroupId;
    }
    
    public function setGameCode($gameCode)
    {
        $this->gameCode = $gameCode;
    }
    
    public function getGameCode()
    {
        return $this->gameCode;
    }
    
    public function setPrereqTalentGameCode($prereqTalentGameCode)
    {
        $this->prereqTalentGameCode = $prereqTalentGameCode;
    }
    
    public function getPrereqTalentGameCode()
    {
        return $this->prereqTalentGameCode;
    }
    
    public function setTalentRowId($talentRowId)
    {
        $this->talentRowId = $talentRowId;
    }
    
    public function getTalentRowId()
    {
        return $this->talentRowId;
    }
    
}
