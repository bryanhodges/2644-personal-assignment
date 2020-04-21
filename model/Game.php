<?php

class Game{
    private $gameID, $week, $date, $time, $visitorID, $homeID, $homeScore, $visitorScore;
    public function __construct($gameID, $week, $date, $time, $visitorID,  $visitorScore, $homeID, $homeScore) {
        $this->gameID = $gameID;
        $this->week = $week;
        $this->date = $date;
        $this->time = $time;
        $this->visitorID = $visitorID;
        $this->homeID = $homeID;
        $this->homeScore = $homeScore;
        $this->visitorScore = $visitorScore;
    }
    public function getHomeScore() {
        return $this->homeScore;
    }

    public function getVisitorScore() {
        return $this->visitorScore;
    }

    public function setHomeScore($homeScore) {
        $this->homeScore = $homeScore;
    }

    public function setVisitorScore($visitorScore) {
        $this->visitorScore = $visitorScore;
    }

        public function getGameID() {
        return $this->gameID;
    }

    public function getWeek() {
        return $this->week;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTime() {
        return $this->time;
    }

    public function getVisitorID() {
        return $this->visitorID;
    }

    public function getHomeID() {
        return $this->homeID;
    }

    public function setGameID($gameID) {
        $this->gameID = $gameID;
    }

    public function setWeek($week) {
        $this->week = $week;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function setVisitorID($visitorID) {
        $this->visitorID = $visitorID;
    }

    public function setHomeID($homeID) {
        $this->homeID = $homeID;
    }



}
