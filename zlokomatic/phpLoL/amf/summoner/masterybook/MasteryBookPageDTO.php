<?php

namespace zlokomatic\phpLoL\amf\summoner\masterybook;


use zlokomatic\phpLoL\amf\IBookPageTemplate;

class MasteryBookPageDTO extends IBookPageTemplate
{
    protected $talentEntries = array();
    
    public function __construct() {}
    
    public function setTalentEntries($talentEntries)
    {
        foreach($talentEntries as $entry){
            $this->talentEntries[] = $entry;
        }
    }

    public function getTalentEntries()
    {
        return $this->talentEntries;
    }
}
