<?php

class User{
   
    private $firstName, $lastName, $userName, $emailAddress, $theme, $teamRanking, $permission;
    
    public function __construct($firstName, $lastName, $userName, $emailAddress, $theme, $teamRanking, $permission) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->emailAddress = $emailAddress;
        $this->theme = $theme;
        $this->teamRanking = $teamRanking;
        $this->permission = $permission;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getEmailAddress() {
        return $this->emailAddress;
    }

    public function getTheme() {
        return $this->theme;
    }

    public function getTeamRanking() {
        return $this->teamRanking;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setEmailAddress($emailAddress) {
        $this->emailAddress = $emailAddress;
    }

    public function setTheme($theme) {
        $this->theme = $theme;
    }

    public function setTeamRanking($teamRanking) {
        $this->teamRanking = $teamRanking;
    }
    
    public function setPermission($permission) {
        $this->permission = $permission;
    }
    
    public function getPermission() {
        return $this->permission;
    }


}
?>