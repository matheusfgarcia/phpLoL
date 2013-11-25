<?php

namespace zlokomatic\phpLoL\amf;


abstract class IBookTemplate extends LoLAMFBase
{
    protected $bookPagesJson;
    protected $bookPages = array();
    protected $dateString;
    protected $summonerId;

    public function setBookPagesJson($bookPagesJson)
    {
        $this->bookPagesJson = $bookPagesJson;
    }

    public function getBookPagesJson()
    {
        return $this->bookPagesJson;
    }

    public function setBookPages($bookPages)
    {
        foreach($bookPages as $page){
            $this->bookPages[] = $page;
        }

    }

    public function getBookPages()
    {
        return $this->bookPages;
    }

    public function setDateString($dateString)
    {
        $this->dateString = $dateString;
    }

    public function getDateString()
    {
        return $this->dateString;
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
