<?php
class db_insert{
        function insert_new_user($userName, $firstName, $lastName, $emailAddress, $password){
        $db = database::getDB();
        $query = 'insert into users(userName, firstName, lastName, emailAddress, password)'
                 .'VALUES (:user_name, :first_name, :last_name, :email_Address, :user_password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_name',$userName);
        $statement->bindValue(':first_name',$firstName);
        $statement->bindValue(':last_name',$lastName);
        $statement->bindValue(':email_Address',$emailAddress);
        $statement->bindValue(':user_password',$password);
        
        $statement->execute();
        $statement->closeCursor();
                
    }
    
    function insert_weekly_pick($userName, $gameID, $pick){
        $db = database::getDB();
        $query = 'insert into weeklypicks(userName, gameID, pick)'
                .'Values (:user_name, :game_ID, :user_pick)';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_name',$userName);
        $statement->bindValue(':game_ID',$gameID);
        $statement->bindValue(':user_pick',$pick);
        
        $statement->execute();
        $statement->closeCursor();
    }
            

    
    function insert_new_password($username, $hash)
    {
        $db = database::getDB();
        $query = 'update registration set password = :user_pass' 
                .' where username = :userName';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_pass',$hash);
        $statement->bindValue(':userName',$username);
        $statement->execute();
        $statement->closeCursor();
    }
    
    function insert_scores($gameID, $homeScore, $visitorScore)
    {
        $db = database::getDB();
        $query = 'update schedule set homeScore = :home_score, visitorScore = :visitor_score' 
                .' where GameID = :game_id'; 
        $statement = $db->prepare($query);
        $statement->bindValue(':game_id',$gameID);
        $statement->bindValue(':home_score',$homeScore);
        $statement->bindValue(':visitor_score',$visitorScore);
        $statement->execute();
        $statement->closeCursor();
    }
    
    function update_schedule($gameID, $date, $time, $homeID, $visitorID)
    {
        $db = database::getDB();
        $query = 'update schedule set date = :this_date, time = :this_time, homeID = :this_homeID, visitorID = :this_visitorID' 
                .' where GameID = :game_id'; 
        $statement = $db->prepare($query);
        $statement->bindValue(':game_id',$gameID);
        $statement->bindValue(':this_date',$date);
        $statement->bindValue(':this_time',$time);
        $statement->bindValue(':this_homeID',$homeID);
        $statement->bindValue(':this_visitorID',$visitorID);
        $statement->execute();
        $statement->closeCursor();
    }
    
    function insert_game_winner($gameID, $winner)
    {
        $db = database::getDB();
        $query = 'update schedule set Result = :winner' 
                .' where GameID = :game_id'; 
        $statement = $db->prepare($query);
        $statement->bindValue(':game_id',$gameID);
        $statement->bindValue(':winner',$winner);
        $statement->execute();
        $statement->closeCursor();
    }
 
}
?>
