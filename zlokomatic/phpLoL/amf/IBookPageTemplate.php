<?php

namespace zlokomatic\phpLoL\amf;


abstract class IBookPageTemplate extends LoLAMFBase
{
    protected $pageId;
    protected $name;
    protected $current;
    protected $createDate;
    protected $bookPagesJson;

    public function setPageId($pageId)
    {
        $this->pageId = $pageId;
    }

    public function getPageId()
    {
        return $this->pageId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCurrent($current)
    {
        $this->current = $current;
    }

    public function getCurrent()
    {
        return $this->current;
    }

    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    public function getCreateDate()
    {
        return $this->createDate;
    }

    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    }
    
    public function getSummonerId()
    {
        return $this->summonerId;
    }

    public function setBookPagesJson($bookPagesJson)
    {
        $this->bookPagesJson = $bookPagesJson;
    }

    public function getBookPagesJson()
    {
        return $this->bookPagesJson;
    }
}
