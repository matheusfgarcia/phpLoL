<?php

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class MainSummoner extends LoLAMFBase
{
    protected $seasonTwoTier;
    protected $internalName;
    protected $previousSeasonHighestTier;
    protected $acctId;
    protected $helpFlag;
    protected $sumId;
    protected $profileIconId;
    protected $displayEloQuestionaire;
    protected $lastGameDate;
    protected $advancedTutorialFlag;
    protected $revisionDate;
    protected $revisionId;
    protected $name;
    protected $nameChangeFlag;
    protected $tutorialFlag;
    
    public function __construct(){}
    
    public function setSeasonTwoTier($seasonTwoTier)
    {
        $this->seasonTwoTier = $seasonTwoTier;
    }
    
    public function getSeasonTwoTier()
    {
        return $this->seasonTwoTier;
    }
    
    public function setInternalName($internalName)
    {
        $this->internalName = $internalName;
    }
    
    public function getInternalName()
    {
        return $this->internalName;
    }
    
    public function setPreviousSeasonHighestTier($previousSeasonHighestTier)
    {
        $this->previousSeasonHighestTier = $previousSeasonHighestTier;
    }
    
    public function getPreviousSeasonHighestTier()
    {
        return $this->previousSeasonHighestTier;
    }
    
    public function setAcctId($acctId)
    {
        $this->acctId = $acctId;
    }
    
    public function getAcctId()
    {
        return $this->acctId;
    }
    
    public function setHelpFlag($helpFlag)
    {
        $this->helpFlag = $helpFlag;
    }
    
    public function getHelpFlag()
    {
        return $this->helpFlag;
    }
    
    public function setSumId($sumId)
    {
        $this->sumId = $sumId;
    }
    
    public function getSumId()
    {
        return $this->sumId;
    }
    
    public function setProfileIconId($profileIconId)
    {
        $this->profileIconId = $profileIconId;
    }
    
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }
    
    public function setDisplayEloQuestionaire($displayEloQuestionaire)
    {
        $this->displayEloQuestionaire = $displayEloQuestionaire;
    }
    
    public function getDisplayEloQuestionaire()
    {
        return $this->displayEloQuestionaire;
    }
    
    public function setLastGameDate($lastGameDate)
    {
        $this->lastGameDate = $lastGameDate;
    }
    
    public function getLastGameDate()
    {
        return $this->lastGameDate;
    }
    
    public function setAdvancedTutorialFlag($advancedTutorialFlag)
    {
        $this->advancedTutorialFlag = $advancedTutorialFlag;
    }
    
    public function getAdvancedTutorialFlag()
    {
        return $this->advancedTutorialFlag;
    }
    
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;
    }
    
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }
    
    public function setRevisionId($revisionId)
    {
        $this->revisionId = $revisionId;
    }
    
    public function getRevisionId()
    {
        return $this->revisionId;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setNameChangeFlag($nameChangeFlag)
    {
        $this->nameChangeFlag = $nameChangeFlag;
    }
    
    public function getNameChangeFlag()
    {
        return $this->nameChangeFlag;
    }
    
    public function setTutorialFlag($tutorialFlag)
    {
        $this->tutorialFlag = $tutorialFlag;
    }
    
    public function getTutorialFlag()
    {
        return $this->tutorialFlag;
    }
    
}
