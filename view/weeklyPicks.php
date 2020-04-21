<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Weekly Picks</title>
    </head>
    <body>
        <?php include 'nav.php'; ?>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="weeklyPicksSubmit" />
        <table>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    
                    
                    <th>Home Team     </th>
                    <th></th>
                    <th></th>
                    <th>Away Team</th>
                    
                    
                    
                </tr>
                
                <?php foreach ($games as $game) : ?>
                    <tr>
                        <td><?php echo $game->getDate(); ?></td>
                        <td><?php echo $game->getTime(); ?></td>
                        <td><?php echo $game->getHomeID(); ?></td>
                        <td> <input type="radio" id="<?php echo $game->getHomeID(); ?>" name="<?php echo $game->getGameID() ; ?>" value="<?php echo $game->getHomeID(); ?>" ></td>
                        <td><input type="radio" id="<?php echo $game->getVisitorID(); ?>" name="<?php echo $game->getGameID() ; ?>" value="<?php echo $game->getVisitorID(); ?>" ></td>
                        <td><?php echo $game->getVisitorID(); ?></td>
                        
                        
                       
                        
                    </tr>
                <?php endforeach; ?>       
                     
            </table>
            <button type="submit" value="SEND">Submit</button>
            </form>
        
        <div id="bottom">
             <a href='index.php?action=weeklyPicks&week=1'>1</a> &nbsp; <a href='index.php?action=weeklyPicks&week=2'>2</a>
            
           <!-- <td><a href = 'index.php?action=otherProfile&user=< ?php echo $user->getUsername(); ?>'> < ?php echo $user->getUsername(); ?></a></td>-->
        </div>
    </body>
</html>
