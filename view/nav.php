<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <style>body{background-image: url('images/nfl.jpg');
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-size: cover;
             background-position: center;

            }</style>
        <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
    </head>
    <body>


        <div class="topnav">
            <a onclick = "location.href = 'index.php?action=userHome'">Home</a>
            <?php if ($_SESSION['permission'] == 1) { ?>
            <a onclick = "location.href = 'index.php?action=weeklyPicks'">Weekly Picks</a>
            <?php } ?>
            <a onclick = "location.href = 'index.php?action=standings'">Standings</a>
            <?php if ($_SESSION['permission'] == 1) { ?>
            <a onclick = "location.href = 'index.php?action=profilePage'">Profile</a>
            <?php } ?>
            <a onclick = "location.href = 'index.php?action=news'">News</a>
            <?php if ($_SESSION['permission'] == 2) { ?>
                <a href="#Administration">Administration</a>
                <a onclick = "location.href = 'index.php?action=schedule'">Schedule</a>
                <a onclick = "location.href = 'index.php?action=scores'">Scores</a>
            <?php } ?>
            <a class="logout" onclick = "location.href = 'index.php?action=logout'">Logout</a>
            <a class="greeting">Hello <?php echo $_SESSION['firstName'] ?></a>


        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>

