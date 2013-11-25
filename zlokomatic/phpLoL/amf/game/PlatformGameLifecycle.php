<?php

namespace zlokomatic\phpLoL\amf\game;

use zlokomatic\phpLoL\amf\LoLAMFBase;
use zlokomatic\phpLoL\amf\game\Game;

class PlatformGameLifecycle extends LoLAMFBase {
    protected $gameSpecificLoyaltyRewards;
    protected $reconnectDelay;
    protected $lastModifiedDate;
    protected $game;
    protected $playerCredentials;
    protected $gameName;
    protected $connectivityStateEnum;

    /**
     * @param mixed $connectivityStateEnum
     */
    public function setConnectivityStateEnum($connectivityStateEnum)
    {
        $this->connectivityStateEnum = $connectivityStateEnum;
    }

    /**
     * @return mixed
     */
    public function getConnectivityStateEnum()
    {
        return $this->connectivityStateEnum;
    }

    /**
     * @param Game $game
     */
    public function setGame(Game $game)
    {
        $this->game = $game;
    }

    /**
     * @return mixed
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param mixed $gameName
     */
    public function setGameName($gameName)
    {
        $this->gameName = $gameName;
    }

    /**
     * @return mixed
     */
    public function getGameName()
    {
        return $this->gameName;
    }

    /**
     * @param mixed $gameSpecificLoyaltyRewards
     */
    public function setGameSpecificLoyaltyRewards($gameSpecificLoyaltyRewards)
    {
        $this->gameSpecificLoyaltyRewards = $gameSpecificLoyaltyRewards;
    }

    /**
     * @return mixed
     */
    public function getGameSpecificLoyaltyRewards()
    {
        return $this->gameSpecificLoyaltyRewards;
    }

    /**
     * @param mixed $lastModifiedDate
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param mixed $playerCredentials
     */
    public function setPlayerCredentials($playerCredentials)
    {
        $this->playerCredentials = $playerCredentials;
    }

    /**
     * @return mixed
     */
    public function getPlayerCredentials()
    {
        return $this->playerCredentials;
    }

    /**
     * @param mixed $reconnectDelay
     */
    public function setReconnectDelay($reconnectDelay)
    {
        $this->reconnectDelay = $reconnectDelay;
    }

    /**
     * @return mixed
     */
    public function getReconnectDelay()
    {
        return $this->reconnectDelay;
    }


} 