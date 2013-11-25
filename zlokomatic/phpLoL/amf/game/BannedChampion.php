<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 16.10.13
 * Time: 23:23
 */

namespace zlokomatic\phpLoL\amf\game;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class BannedChampion extends LoLAMFBase {
    protected $pickTurn;
    protected $championId;
    protected $teamId;

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
     * @param mixed $pickTurn
     */
    public function setPickTurn($pickTurn)
    {
        $this->pickTurn = $pickTurn;
    }

    /**
     * @return mixed
     */
    public function getPickTurn()
    {
        return $this->pickTurn;
    }

    /**
     * @param mixed $teamId
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    }

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->teamId;
    }



} 