<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 16.10.13
 * Time: 23:15
 */

namespace zlokomatic\phpLoL\amf\game;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class PlayerParticipant extends LoLAMFBase {
    protected $accountId;
    protected $queueRating;
    protected $botDifficulty;
    protected $minor;
    protected $locale;
    protected $partnerId;
    protected $lastSelectedSkinIndex;
    protected $profileIconId;
    protected $rankedTeamGuest;
    protected $summonerId;
    protected $selectedRole;
    protected $pickMode;
    protected $teamParticipantId;
    protected $timeAddedToQueue;
    protected $index;
    protected $originalAccountNumber;
    protected $summonerInternalName;
    protected $teamOwner;
    protected $badges;
    protected $pickTurn;
    protected $clientInSynch;
    protected $summonerName;
    protected $originalPlatformId;
    protected $selectedPosition;

    /**
     * @param mixed $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param mixed $badges
     */
    public function setbadges($badges)
    {
        $this->badges = $badges;
    }

    /**
     * @return mixed
     */
    public function getbadges()
    {
        return $this->badges;
    }

    /**
     * @param mixed $botDifficulty
     */
    public function setBotDifficulty($botDifficulty)
    {
        $this->botDifficulty = $botDifficulty;
    }

    /**
     * @return mixed
     */
    public function getBotDifficulty()
    {
        return $this->botDifficulty;
    }

    /**
     * @param mixed $clientInSynch
     */
    public function setClientInSynch($clientInSynch)
    {
        $this->clientInSynch = $clientInSynch;
    }

    /**
     * @return mixed
     */
    public function getClientInSynch()
    {
        return $this->clientInSynch;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
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
     * @param mixed $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param mixed $minor
     */
    public function setMinor($minor)
    {
        $this->minor = $minor;
    }

    /**
     * @return mixed
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * @param mixed $originalAccountNumber
     */
    public function setOriginalAccountNumber($originalAccountNumber)
    {
        $this->originalAccountNumber = $originalAccountNumber;
    }

    /**
     * @return mixed
     */
    public function getOriginalAccountNumber()
    {
        return $this->originalAccountNumber;
    }

    /**
     * @param mixed $originalPlatformId
     */
    public function setOriginalPlatformId($originalPlatformId)
    {
        $this->originalPlatformId = $originalPlatformId;
    }

    /**
     * @return mixed
     */
    public function getOriginalPlatformId()
    {
        return $this->originalPlatformId;
    }

    /**
     * @param mixed $partnerId
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
    }

    /**
     * @return mixed
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @param mixed $pickMode
     */
    public function setPickMode($pickMode)
    {
        $this->pickMode = $pickMode;
    }

    /**
     * @return mixed
     */
    public function getPickMode()
    {
        return $this->pickMode;
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
     * @param mixed $profileIconId
     */
    public function setProfileIconId($profileIconId)
    {
        $this->profileIconId = $profileIconId;
    }

    /**
     * @return mixed
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }

    /**
     * @param mixed $queueRating
     */
    public function setQueueRating($queueRating)
    {
        $this->queueRating = $queueRating;
    }

    /**
     * @return mixed
     */
    public function getQueueRating()
    {
        return $this->queueRating;
    }

    /**
     * @param mixed $rankedTeamGuest
     */
    public function setRankedTeamGuest($rankedTeamGuest)
    {
        $this->rankedTeamGuest = $rankedTeamGuest;
    }

    /**
     * @return mixed
     */
    public function getRankedTeamGuest()
    {
        return $this->rankedTeamGuest;
    }

    /**
     * @param mixed $selectedPosition
     */
    public function setSelectedPosition($selectedPosition)
    {
        $this->selectedPosition = $selectedPosition;
    }

    /**
     * @return mixed
     */
    public function getSelectedPosition()
    {
        return $this->selectedPosition;
    }

    /**
     * @param mixed $selectedRole
     */
    public function setSelectedRole($selectedRole)
    {
        $this->selectedRole = $selectedRole;
    }

    /**
     * @return mixed
     */
    public function getSelectedRole()
    {
        return $this->selectedRole;
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

    /**
     * @param mixed $teamOwner
     */
    public function setTeamOwner($teamOwner)
    {
        $this->teamOwner = $teamOwner;
    }

    /**
     * @return mixed
     */
    public function getTeamOwner()
    {
        return $this->teamOwner;
    }

    /**
     * @param mixed $teamParticipantId
     */
    public function setTeamParticipantId($teamParticipantId)
    {
        $this->teamParticipantId = $teamParticipantId;
    }

    /**
     * @return mixed
     */
    public function getTeamParticipantId()
    {
        return $this->teamParticipantId;
    }

    /**
     * @param mixed $timeAddedToQueue
     */
    public function setTimeAddedToQueue($timeAddedToQueue)
    {
        $this->timeAddedToQueue = $timeAddedToQueue;
    }

    /**
     * @return mixed
     */
    public function getTimeAddedToQueue()
    {
        return $this->timeAddedToQueue;
    }


} 