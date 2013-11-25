<?php

namespace zlokomatic\phpLoL\amf\summoner\spellbook;


use zlokomatic\phpLoL\amf\IBookPageTemplate;

class SpellBookPage extends IBookPageTemplate
{
    protected $slotEntries = array();
    
    public function __construct() {}
    
    public function setSlotEntries($slotEntries)
    {
        foreach($slotEntries as $entry){
            $this->slotEntries[] = $entry;
        }
    }

    public function getSlotEntries()
    {
        return $this->slotEntries;
    }
} 
