<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class db_select {

    public static function select_user_pass($username) {
        $db = Database::getDB();

        $query = 'Select * from users where username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        $password = $row['password'];
        
        return $password;
    }
    
    public static function select_user($username) {
        $db = Database::getDB();

        $query = 'Select * from users where username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        $user = new User($row['firstName'], $row['lastName'], $row['username'], $row['emailAddress'], $row['TeamTheme'], $row['TeamRanking'], $row['permission']);
        
        return $user;
    }

    public static function select_all() {
        $db = Database::getDB();

        $query = 'SELECT * FROM registration';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        $users = array();
        foreach ($results as $row) {
            $user = new User($row['fName'], $row['lName'], $row['username'], $row['email'], $row['filePath']);
            $users[] = $user;
        }
        return $users;
    }

    public static function check_email($email) {

        $db = database::getDB();

        $query = 'SELECT * FROM registration where email = :user_email;';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_email', $email);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    public static function check_username($username) {

        $db = database::getDB();

        $query = 'SELECT * FROM registration where username = :user_name;';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_name', $username);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }
    
    public static function select_weekly_games($week) {
        $db = Database::getDB();

        $query = 'Select * from schedule where week = :week';
        $statement = $db->prepare($query);
        $statement->bindValue(':week', $week);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        $games = array();
        foreach ($results as $row) {
            $game = new Game($row['GameID'], $row['Week'], $row['Date'], $row['Time'], $row['VisitorID'], $row['VisitorScore'], $row['HomeID'], $row['HomeScore']);
            $games[] = $game;
        }
        return $games;
    }
    
        public static function select_game($gameID) {
        $db = Database::getDB();

        $query = 'Select * from schedule where gameID = :gameID';
        $statement = $db->prepare($query);
        $statement->bindValue(':gameID', $gameID);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        
        $game = new Game($row['GameID'], $row['Week'], $row['Date'], $row['Time'], $row['VisitorID'], $row['VisitorScore'], $row['HomeID'], $row['HomeScore']);
        //$game = new Game($row['GameID'], $row['Week'], $row['Date'], $row['Time'], $row['VisitorID'], $row['HomeID']);
            
        
        
        //$game = new Game('GameID', 'Week', 'Date', 'Time', 'VisitorID', 'HomeID');
            
        
        return $game;
    }
    
    public static function select_pick($username, $GameID) {

        $db = database::getDB();

        $query = 'SELECT Pick FROM weeklyPicks where username = :user_name AND GameID = :game_id;';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_name', $username);
        $statement->bindValue(':game_id', $GameID);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }
    
        public static function select_picks($username, $GameID) {

        $db = database::getDB();

        $query = 'SELECT Pick FROM weeklyPicks where username = :user_name AND GameID = :game_id;';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_name', $username);
        $statement->bindValue(':game_id', $GameID);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }
    

}