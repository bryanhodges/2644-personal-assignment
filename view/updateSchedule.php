<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>update schedule</title>
    </head>
    <body>
        <?php include 'nav.php'; ?>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="updateScheduleSubmit" />
            <table>
                <tr>
                    <th>Date</th>
                    <th>Time</th>


                    <th>Home Team</th>

                    <th>Away Team</th>



                </tr>


                <tr>
                    <td><input type="text" name="date"value="<?php echo $game->getDate(); ?>"></td>
                    <td><input type="text" name="time"value="<?php echo $game->getTime(); ?>"></td>
                    <td><input type="text" name="homeID"value="<?php echo $game->getHomeID(); ?>"></td>
                    <td><input type="text" name="visitorID"value="<?php echo $game->getVisitorID(); ?>"></td>
                <input type='hidden' name="gameID" value='<?php echo $game->getGameID(); ?>'>
                </tr>

                <button type="submit" value="SEND">Submit</button>

            </table>
    </body>
</html>
