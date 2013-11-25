<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 16.10.13
 * Time: 23:25
 */

namespace zlokomatic\phpLoL\amf\game;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class PlayerChampionSelection extends LoLAMFBase {
    protected $summonerInternalName;
    protected $selectedSkinIndex;
    protected $spell1Id;
    protected $spell2Id;
    protected $championId;

    /**
     * @param mixed $championId
     */
    public function setChampionId($championId)
    {
        $this->championId = $championId;
    }

    /**
     * @return mixed
     */
    public function getChampionId()
    {
        return $this->championId;
    }

    /**
     * @param mixed $selectedSkinIndex
     */
    public function setSelectedSkinIndex($selectedSkinIndex)
    {
        $this->selectedSkinIndex = $selectedSkinIndex;
    }

    /**
     * @return mixed
     */
    public function getSelectedSkinIndex()
    {
        return $this->selectedSkinIndex;
    }

    /**
     * @param mixed $spell1Id
     */
    public function setSpell1Id($spell1Id)
    {
        $this->spell1Id = $spell1Id;
    }

    /**
     * @return mixed
     */
    public function getSpell1Id()
    {
        return $this->spell1Id;
    }

    /**
     * @param mixed $spell2Id
     */
    public function setSpell2Id($spell2Id)
    {
        $this->spell2Id = $spell2Id;
    }

    /**
     * @return mixed
     */
    public function getSpell2Id()
    {
        return $this->spell2Id;
    }

    /**
     * @param mixed $summonerInternalName
     */
    public function setSummonerInternalName($summonerInternalName)
    {
        $this->summonerInternalName = $summonerInternalName;
    }

    /**
     * @return mixed
     */
    public function getSummonerInternalName()
    {
        return $this->summonerInternalName;
    }


} 