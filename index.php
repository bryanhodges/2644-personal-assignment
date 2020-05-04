<!DOCTYPE html>
<?php



session_start();

if (!isset($_SESSION['userName'])) {
    $_SESSION['userName'] = '';
}
if (!isset($_SESSION['firstName'])) {
    $_SESSION['firstName'] = '';
}
if (!isset($_SESSION['lastName'])) {
    $_SESSION['lastName'] = '';
}
if (!isset($_SESSION['permission'])) {
    $_SESSION['permission'] = '';
}
$errorThrown = '';
// get the data from the form
require_once('model/db_select.php');
require_once('model/db_insert.php');
require_once('model/Database.php');
require_once('model/User.php');
require_once('model/Game.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'HomePage';  // Change latter#############################
    }
}

switch ($action) {

    case 'HomePage':
        
        $result = 'verifyLogin';
        include 'view/login.php';
        //db_insert::insert_new_user('asdf','first','last','test@test.com','123456' );
        die();
        break;
    case 'userSignUp':
        include 'view/userSignUp.php';
        die();
        break;

    case 'validateLogin':
        $userName = filter_input(INPUT_GET, 'userName');
        $password = filter_input(INPUT_GET, 'password');
        $thisUser = db_select::select_user($userName);
        if ($thisUser->getUsername() === null) {
            $registerError = 'Bad username or password';
            include 'view/login.php';
        } else {
            $hash = db_select::select_user_pass($userName);
            
            if (password_verify($password, $hash)) {
                $_SESSION['userName'] = $thisUser->getUsername();
                $_SESSION['firstName'] = $thisUser->getFirstName();
                $_SESSION['lastName'] = $thisUser->getLastName();
                $_SESSION['theme'] = $thisUser->getTheme();
                $_SESSION['emailAddress'] = $thisUser->getEmailAddress();
                $_SESSION['permission'] = $thisUser->getPermission();
                $_SESSION['user_id'] = $thisUser->getUserID();
                $action = 'userHome';
                include 'view/userHome.php';
            } else {
                $registerError = 'Bad username or password';
                include 'view/login.php';
            }
        }
        die();
        break;

        
    case 'newUser':
        $pageTitle = 'New User';
        $firstName = filter_input(INPUT_GET, 'firstName');
        $lastName = filter_input(INPUT_GET, 'lastName');
        $userName = filter_input(INPUT_GET, 'userName');
        $emailAddress = filter_input(INPUT_GET, 'emailAddress', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_GET, 'password');
        
       
        $options = ['cost' => 12];
        $hash = password_hash($password, PASSWORD_BCRYPT, $options);
        db_insert::insert_new_user($userName,$firstName,$lastName ,$emailAddress,$hash );
        
        include('view/userHome.php');
        
        die();
        break;
 
    case 'verifyLogin':

        if ($_SESSION['userName'] != null) {
            include 'view/userHome.php';
        } else {

            include 'view/login.php';
        }

        die();
        break;
    case 'profilePage':
        
        include 'view/profilePage.php';
        die();
        break;
    case 'logout':
        $_SESSION = array();
        session_destroy();
        header('Location: index.php?action=HomePage');


        die();
        break;
    case 'weeklyPicks':
        $week = filter_input(INPUT_GET, 'week');
        $games = db_select::select_weekly_games($week);
        include 'view/weeklyPicks.php';
        //header('Location: index.php?action=weeklyPicks&week=1');
        die();
        break;
    
    case 'weeklyPicksSubmit':
        $game1 = $_POST['1'];
        $game2 = $_POST['2'];
        $game3 = $_POST['3'];
        $game4 = $_POST['4'];
        $game5 = $_POST['5'];
        $game6 = $_POST['6'];
        $game7 = $_POST['7'];
        $game8 = $_POST['8'];
        $game9 = $_POST['9'];
        $game10 = $_POST['10'];
        $game11 = $_POST['11'];
        $game12 = $_POST['12'];
        $game13 = $_POST['13'];
        $game14 = $_POST['14'];
        //$game1 = filter_input(INPUT_POST, '1');
        db_insert::insert_weekly_pick($_SESSION['userName'], 1, $game1);
        db_insert::insert_weekly_pick($_SESSION['userName'], 2, $game2);
        db_insert::insert_weekly_pick($_SESSION['userName'], 3, $game3);
        db_insert::insert_weekly_pick($_SESSION['userName'], 4, $game4);
        db_insert::insert_weekly_pick($_SESSION['userName'], 5, $game5);
        db_insert::insert_weekly_pick($_SESSION['userName'], 6, $game6);
        db_insert::insert_weekly_pick($_SESSION['userName'], 7, $game7);
        db_insert::insert_weekly_pick($_SESSION['userName'], 8, $game8);
        db_insert::insert_weekly_pick($_SESSION['userName'], 9, $game9);
        db_insert::insert_weekly_pick($_SESSION['userName'], 10, $game10);
        db_insert::insert_weekly_pick($_SESSION['userName'], 11, $game11);
        db_insert::insert_weekly_pick($_SESSION['userName'], 12, $game12);
        db_insert::insert_weekly_pick($_SESSION['userName'], 13, $game13);
        db_insert::insert_weekly_pick($_SESSION['userName'], 14, $game14);
        
        $games = db_select::select_weekly_games(1);
        include 'view/weeklyPicks.php';
        die();
        break;
    
        case 'userHome':
        
        $games = db_select::select_weekly_games(1);
        include 'view/userHome.php';
        die();
        break;
    
        case 'news':
        
        
        include 'view/news.php';
        die();
        break;
    
        case 'schedule':
        $week = filter_input(INPUT_GET, 'week');
        $games = db_select::select_weekly_games($week);
        include 'view/schedule.php';
            
        die();
        break;
    
        case 'updateSchedule':
        
        $games = db_select::select_weekly_games(1);
        
        $gameToUpdate = $_POST['gameToUpdate'];
        $game = db_select::select_game($gameToUpdate);
        include 'view/updateSchedule.php';
            
        die();
        break;
    
        case 'updateScheduleSubmit':
        $date = $_POST['date'];
        $time = $_POST['time'];
        $homeID = $_POST['homeID'];
        $visitorID = $_POST['visitorID'];
        $gameID = $_POST['gameID'];
        
        
        
        
        db_insert::update_schedule($gameID, $date, $time, $homeID, $visitorID);
        
        $games = db_select::select_weekly_games(1);
        header('Location: index.php?action=schedule');
        //include 'view/updateSchedule.php';
            
        die();
        break;
    
        case 'scores':
            

        $week = filter_input(INPUT_GET, 'week');
        $games = db_select::select_weekly_games($week);
        include 'view/scores.php';
            
        die();
        break;
    
        case 'submitScores':
        //$week = filter_input(INPUT_GET, 'week');
        $week = $_POST['week'];
        $games = db_select::select_weekly_games($week);
        
        
        $home1 = $_POST['homeScore1'];
        $away1 = $_POST['visitorScore1'];
        $home2 = $_POST['homeScore2'];
        $away2 = $_POST['visitorScore2'];
        $home3 = $_POST['homeScore3'];
        $away3 = $_POST['visitorScore3'];
        $home4 = $_POST['homeScore4'];
        $away4 = $_POST['visitorScore4'];
        $home5 = $_POST['homeScore5'];
        $away5 = $_POST['visitorScore5'];
        $home6 = $_POST['homeScore6'];
        $away6 = $_POST['visitorScore6'];
        $home7 = $_POST['homeScore7'];
        $away7 = $_POST['visitorScore7'];
        $home8 = $_POST['homeScore8'];
        $away8 = $_POST['visitorScore8'];
        $home9 = $_POST['homeScore9'];
        $away9 = $_POST['visitorScore9'];
        $home10 = $_POST['homeScore10'];
        $away10 = $_POST['visitorScore10'];
        $home11 = $_POST['homeScore11'];
        $away11 = $_POST['visitorScore11'];
        $home12 = $_POST['homeScore12'];
        $away12 = $_POST['visitorScore12'];
        $home13 = $_POST['homeScore13'];
        $away13 = $_POST['visitorScore13'];
        $home14 = $_POST['homeScore14'];
        $away14 = $_POST['visitorScore14'];
        
        db_insert::insert_scores(1, $home1, $away1);
        db_insert::insert_scores(2, $home2, $away2);
        db_insert::insert_scores(3, $home3, $away3);
        db_insert::insert_scores(4, $home4, $away4);
        db_insert::insert_scores(5, $home5, $away5);
        db_insert::insert_scores(6, $home6, $away6);
        db_insert::insert_scores(7, $home7, $away7);
        db_insert::insert_scores(8, $home8, $away8);
        db_insert::insert_scores(9, $home9, $away9);
        db_insert::insert_scores(10, $home10, $away10);
        db_insert::insert_scores(11, $home11, $away11);
        db_insert::insert_scores(12, $home12, $away12);
        db_insert::insert_scores(13, $home13, $away13);
        db_insert::insert_scores(14, $home14, $away14);
        
        foreach ($games as $game) {
        if($game->getHomeScore() > $game->getVisitorScore()){
            db_insert::insert_game_winner($game->getGameID(), $game->getHomeID());
        }else if($game->getVisitorScore() > $game->getHomeScore()){
            db_insert::insert_game_winner($game->getGameID(), $game->getVisitorID());
        } else {
            db_insert::insert_game_winner($game->getGameID(), 'Tie');
        }
        }
        
        
        
        include 'view/scores.php';
        die();
        break;
    
        case 'standings':
        $week = filter_input(INPUT_GET, 'week');
        $games = db_select::select_weekly_games($week); 

        foreach ($games as $game) {
        if($game->getHomeScore() > $game->getVisitorScore()){
            db_insert::insert_game_winner($game->getGameID(), $game->getHomeID());
        }else if($game->getVisitorScore() > $game->getHomeScore()){
            db_insert::insert_game_winner($game->getGameID(), $game->getVisitorID());
        } else {
            db_insert::insert_game_winner($game->getGameID(), 'Tie');
        }
        }
        
        
        $games = db_select::select_weekly_games(1);
        include 'view/standings.php';
            
        die();
        break;
        
}
?>
