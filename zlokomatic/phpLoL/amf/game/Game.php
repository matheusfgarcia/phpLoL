<?php

namespace zlokomatic\phpLoL\amf\game;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class Game extends LoLAMFBase {
    protected $spectatorsAllowed;
    protected $passwordSet;
    protected $practiceGameRewardsDisabledReasons = array();
    protected $gameType;
    protected $gameTypeConfigId;
    protected $glmGameId;
    protected $gameState;
    protected $glmHost;
    protected $observers = array();
    protected $statusOfParticipants;
    protected $glmSecurePort;
    protected $id;
    protected $ownerSummary;
    protected $teamTwo = array();
    protected $bannedChampions = array();
    protected $roomName;
    protected $name;
    protected $spectatorDelay;
    protected $teamOne = array();
    protected $terminatedCondition;
    protected $queueTypeName;
    protected $glmPort;
    protected $passbackUrl;
    protected $roomPassword;
    protected $optimisticLock;
    protected $maxNumPlayers;
    protected $queuePosition;
    protected $gameMode;
    protected $expiryTime;
    protected $mapId;
    protected $banOrder;
    protected $pickTurn;
    protected $gameStateString;
    protected $playerChampionSelections;
    protected $joinTimerDuration;
    protected $passbackDataPacket;
    protected $teamOnePickOutcome;
    protected $teamTwoPickOutcome;
    protected $terminatedConditionString;

    /**
     * @param mixed $banOrder
     */
    public function setBanOrder($banOrder)
    {
        $this->banOrder = $banOrder;
    }

    /**
     * @return mixed
     */
    public function getBanOrder()
    {
        return $this->banOrder;
    }

    /**
     * @param array $bannedChampions
     */
    public function setBannedChampions($bannedChampions)
    {
        foreach($bannedChampions as $bannedChampion){
            $this->bannedChampions[] = $bannedChampion;
        }
    }

    /**
     * @return array
     */
    public function getBannedChampions()
    {
        return $this->bannedChampions;
    }

    /**
     * @param mixed $expiryTime
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime = $expiryTime;
    }

    /**
     * @return mixed
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * @param mixed $gameMode
     */
    public function setGameMode($gameMode)
    {
        $this->gameMode = $gameMode;
    }

    /**
     * @return mixed
     */
    public function getGameMode()
    {
        return $this->gameMode;
    }

    /**
     * @param mixed $gameState
     */
    public function setGameState($gameState)
    {
        $this->gameState = $gameState;
    }

    /**
     * @return mixed
     */
    public function getGameState()
    {
        return $this->gameState;
    }

    /**
     * @param mixed $gameStateString
     */
    public function setGameStateString($gameStateString)
    {
        $this->gameStateString = $gameStateString;
    }

    /**
     * @return mixed
     */
    public function getGameStateString()
    {
        return $this->gameStateString;
    }

    /**
     * @param mixed $gameType
     */
    public function setGameType($gameType)
    {
        $this->gameType = $gameType;
    }

    /**
     * @return mixed
     */
    public function getGameType()
    {
        return $this->gameType;
    }

    /**
     * @param mixed $gameTypeConfigId
     */
    public function setGameTypeConfigId($gameTypeConfigId)
    {
        $this->gameTypeConfigId = $gameTypeConfigId;
    }

    /**
     * @return mixed
     */
    public function getGameTypeConfigId()
    {
        return $this->gameTypeConfigId;
    }

    /**
     * @param mixed $glmGameId
     */
    public function setGlmGameId($glmGameId)
    {
        $this->glmGameId = $glmGameId;
    }

    /**
     * @return mixed
     */
    public function getGlmGameId()
    {
        return $this->glmGameId;
    }

    /**
     * @param mixed $glmHost
     */
    public function setGlmHost($glmHost)
    {
        $this->glmHost = $glmHost;
    }

    /**
     * @return mixed
     */
    public function getGlmHost()
    {
        return $this->glmHost;
    }

    /**
     * @param mixed $glmPort
     */
    public function setGlmPort($glmPort)
    {
        $this->glmPort = $glmPort;
    }

    /**
     * @return mixed
     */
    public function getGlmPort()
    {
        return $this->glmPort;
    }

    /**
     * @param mixed $glmSecurePort
     */
    public function setGlmSecurePort($glmSecurePort)
    {
        $this->glmSecurePort = $glmSecurePort;
    }

    /**
     * @return mixed
     */
    public function getGlmSecurePort()
    {
        return $this->glmSecurePort;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $joinTimerDuration
     */
    public function setJoinTimerDuration($joinTimerDuration)
    {
        $this->joinTimerDuration = $joinTimerDuration;
    }

    /**
     * @return mixed
     */
    public function getJoinTimerDuration()
    {
        return $this->joinTimerDuration;
    }

    /**
     * @param mixed $mapId
     */
    public function setMapId($mapId)
    {
        $this->mapId = $mapId;
    }

    /**
     * @return mixed
     */
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * @param mixed $maxNumPlayers
     */
    public function setMaxNumPlayers($maxNumPlayers)
    {
        $this->maxNumPlayers = $maxNumPlayers;
    }

    /**
     * @return mixed
     */
    public function getMaxNumPlayers()
    {
        return $this->maxNumPlayers;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param array $observers
     */
    public function setObservers($observers)
    {
        foreach($observers as $observer){
            $this->observers[] = $observer;
        }
    }

    /**
     * @return array
     */
    public function getObservers()
    {
        return $this->observers;
    }

    /**
     * @param mixed $optimisticLock
     */
    public function setOptimisticLock($optimisticLock)
    {
        $this->optimisticLock = $optimisticLock;
    }

    /**
     * @return mixed
     */
    public function getOptimisticLock()
    {
        return $this->optimisticLock;
    }

    /**
     * @param mixed $ownerSummary
     */
    public function setOwnerSummary($ownerSummary)
    {
        $this->ownerSummary = $ownerSummary;
    }

    /**
     * @return mixed
     */
    public function getOwnerSummary()
    {
        return $this->ownerSummary;
    }

    /**
     * @param mixed $passbackDataPacket
     */
    public function setPassbackDataPacket($passbackDataPacket)
    {
        $this->passbackDataPacket = $passbackDataPacket;
    }

    /**
     * @return mixed
     */
    public function getPassbackDataPacket()
    {
        return $this->passbackDataPacket;
    }

    /**
     * @param mixed $passbackUrl
     */
    public function setPassbackUrl($passbackUrl)
    {
        $this->passbackUrl = $passbackUrl;
    }

    /**
     * @return mixed
     */
    public function getPassbackUrl()
    {
        return $this->passbackUrl;
    }

    /**
     * @param mixed $passwordSet
     */
    public function setPasswordSet($passwordSet)
    {
        $this->passwordSet = $passwordSet;
    }

    /**
     * @return mixed
     */
    public function getPasswordSet()
    {
        return $this->passwordSet;
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
     * @param mixed $playerChampionSelections
     */
    public function setPlayerChampionSelections($playerChampionSelections)
    {
        $this->playerChampionSelections = $playerChampionSelections;
    }

    /**
     * @return mixed
     */
    public function getPlayerChampionSelections()
    {
        return $this->playerChampionSelections;
    }

    /**
     * @param array $practiceGameRewardsDisabledReasons
     */
    public function setPracticeGameRewardsDisabledReasons($practiceGameRewardsDisabledReasons)
    {
        foreach($practiceGameRewardsDisabledReasons as $practiceGameRewardsDisabledReason){
            $this->practiceGameRewardsDisabledReasons[] = $practiceGameRewardsDisabledReason;
        }
    }

    /**
     * @return array
     */
    public function getPracticeGameRewardsDisabledReasons()
    {
        return $this->practiceGameRewardsDisabledReasons;
    }

    /**
     * @param mixed $queuePosition
     */
    public function setQueuePosition($queuePosition)
    {
        $this->queuePosition = $queuePosition;
    }

    /**
     * @return mixed
     */
    public function getQueuePosition()
    {
        return $this->queuePosition;
    }

    /**
     * @param mixed $queueTypeName
     */
    public function setQueueTypeName($queueTypeName)
    {
        $this->queueTypeName = $queueTypeName;
    }

    /**
     * @return mixed
     */
    public function getQueueTypeName()
    {
        return $this->queueTypeName;
    }

    /**
     * @param mixed $roomName
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;
    }

    /**
     * @return mixed
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * @param mixed $roomPassword
     */
    public function setRoomPassword($roomPassword)
    {
        $this->roomPassword = $roomPassword;
    }

    /**
     * @return mixed
     */
    public function getRoomPassword()
    {
        return $this->roomPassword;
    }

    /**
     * @param mixed $spectatorDelay
     */
    public function setSpectatorDelay($spectatorDelay)
    {
        $this->spectatorDelay = $spectatorDelay;
    }

    /**
     * @return mixed
     */
    public function getSpectatorDelay()
    {
        return $this->spectatorDelay;
    }

    /**
     * @param mixed $spectatorsAllowed
     */
    public function setSpectatorsAllowed($spectatorsAllowed)
    {
        $this->spectatorsAllowed = $spectatorsAllowed;
    }

    /**
     * @return mixed
     */
    public function getSpectatorsAllowed()
    {
        return $this->spectatorsAllowed;
    }

    /**
     * @param mixed $statusOfParticipants
     */
    public function setStatusOfParticipants($statusOfParticipants)
    {
        $this->statusOfParticipants = $statusOfParticipants;
    }

    /**
     * @return mixed
     */
    public function getStatusOfParticipants()
    {
        return $this->statusOfParticipants;
    }

    /**
     * @param array $teamOne
     */
    public function setTeamOne($teamOne)
    {
        foreach($teamOne as $player){
            $this->teamOne[] = $player;
        }
    }

    /**
     * @return array
     */
    public function getTeamOne()
    {
        return $this->teamOne;
    }

    /**
     * @param array $teamTwo
     */
    public function setTeamTwo($teamTwo)
    {
        foreach($teamTwo as $player){
            $this->teamTwo[] = $player;
        }
    }

    /**
     * @return array
     */
    public function getTeamTwo()
    {
        return $this->teamTwo;
    }

    /**
     * @param mixed $terminatedCondition
     */
    public function setTerminatedCondition($terminatedCondition)
    {
        $this->terminatedCondition = $terminatedCondition;
    }

    /**
     * @return mixed
     */
    public function getTerminatedCondition()
    {
        return $this->terminatedCondition;
    }

    /**
     * @param mixed $teamOnePickOutcome
     */
    public function setTeamOnePickOutcome($teamOnePickOutcome)
    {
        $this->teamOnePickOutcome = $teamOnePickOutcome;
    }

    /**
     * @return mixed
     */
    public function getTeamOnePickOutcome()
    {
        return $this->teamOnePickOutcome;
    }

    /**
     * @param mixed $teamTwoPickOutcome
     */
    public function setTeamTwoPickOutcome($teamTwoPickOutcome)
    {
        $this->teamTwoPickOutcome = $teamTwoPickOutcome;
    }

    /**
     * @return mixed
     */
    public function getTeamTwoPickOutcome()
    {
        return $this->teamTwoPickOutcome;
    }

    /**
     * @param mixed $terminatedConditionString
     */
    public function setTerminatedConditionString($terminatedConditionString)
    {
        $this->terminatedConditionString = $terminatedConditionString;
    }

    /**
     * @return mixed
     */
    public function getTerminatedConditionString()
    {
        return $this->terminatedConditionString;
    }
} 
