<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 16.10.13
 * Time: 20:07
 */

namespace zlokomatic\phpLoL\amf\game;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class PlayerCredentials extends LoLAMFBase {
    protected $encryptionKey;
    protected $gameId;
    protected $lastSelectedSkinIndex;
    protected $serverIp;
    protected $observer;
    protected $summonerId;
    protected $observerServerIp;
    protected $handshakeToken;
    protected $playerId;
    protected $serverPort;
    protected $observerServerPort;
    protected $summonerName;
    protected $observerEncryptionKey;
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
     * @param mixed $encryptionKey
     */
    public function setEncryptionKey($encryptionKey)
    {
        $this->encryptionKey = $encryptionKey;
    }

    /**
     * @return mixed
     */
    public function getEncryptionKey()
    {
        return $this->encryptionKey;
    }

    /**
     * @param mixed $gameId
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @param mixed $handshakeToken
     */
    public function setHandshakeToken($handshakeToken)
    {
        $this->handshakeToken = $handshakeToken;
    }

    /**
     * @return mixed
     */
    public function getHandshakeToken()
    {
        return $this->handshakeToken;
    }

    /**
     * @param mixed $lastSelectedSkinIndex
     */
    public function setLastSelectedSkinIndex($lastSelectedSkinIndex)
    {
        $this->lastSelectedSkinIndex = $lastSelectedSkinIndex;
    }

    /**
     * @return mixed
     */
    public function getLastSelectedSkinIndex()
    {
        return $this->lastSelectedSkinIndex;
    }

    /**
     * @param mixed $observer
     */
    public function setObserver($observer)
    {
        $this->observer = $observer;
    }

    /**
     * @return mixed
     */
    public function getObserver()
    {
        return $this->observer;
    }

    /**
     * @param mixed $observerEncryptionKey
     */
    public function setObserverEncryptionKey($observerEncryptionKey)
    {
        $this->observerEncryptionKey = $observerEncryptionKey;
    }

    /**
     * @return mixed
     */
    public function getObserverEncryptionKey()
    {
        return $this->observerEncryptionKey;
    }

    /**
     * @param mixed $observerServerIp
     */
    public function setObserverServerIp($observerServerIp)
    {
        $this->observerServerIp = $observerServerIp;
    }

    /**
     * @return mixed
     */
    public function getObserverServerIp()
    {
        return $this->observerServerIp;
    }

    /**
     * @param mixed $observerServerPort
     */
    public function setObserverServerPort($observerServerPort)
    {
        $this->observerServerPort = $observerServerPort;
    }

    /**
     * @return mixed
     */
    public function getObserverServerPort()
    {
        return $this->observerServerPort;
    }

    /**
     * @param mixed $playerId
     */
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;
    }

    /**
     * @return mixed
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * @param mixed $serverIp
     */
    public function setServerIp($serverIp)
    {
        $this->serverIp = $serverIp;
    }

    /**
     * @return mixed
     */
    public function getServerIp()
    {
        return $this->serverIp;
    }

    /**
     * @param mixed $serverPort
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
    }

    /**
     * @return mixed
     */
    public function getServerPort()
    {
        return $this->serverPort;
    }

    /**
     * @param mixed $summonerId
     */
    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    }

    /**
     * @return mixed
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }

    /**
     * @param mixed $summonerName
     */
    public function setSummonerName($summonerName)
    {
        $this->summonerName = $summonerName;
    }

    /**
     * @return mixed
     */
    public function getSummonerName()
    {
        return $this->summonerName;
    }


} 