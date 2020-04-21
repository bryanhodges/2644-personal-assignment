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
    </head>
    <body>
       <?php include 'nav.php'; ?>
        
                <form action="index.php" method="POST">
            <input type="hidden" name="action" value="submitScores" />
        <table>
                <tr>
                    <th>Home Team</th>
                    <th>Home Score</th>
                    <th>Away Team</th>              
                    <th>Away Score</th>
                    
                    
                    
                </tr>
                
                <?php foreach ($games as $game) : ?>
                    <tr>
                        
                        <td><?php echo $game->getHomeID(); ?></td>
                        <td><input type="text" name="homeScore<?php echo $game->getGameID() ; ?>" value="<?php echo $game->getHomeScore() ; ?>"></td>
                        <td><?php echo $game->getVisitorID(); ?></td>
                        <td><input type="text" name="visitorScore<?php echo $game->getGameID() ; ?>" value="<?php echo $game->getVisitorScore() ; ?>"></td>
                        <input type='hidden' name="week" value='<?php echo $game->getWeek() ; ?>'>
                        
                       
                        
                    </tr>
                <?php endforeach; ?>       
                     
            </table>
            <button type="submit" value="SEND">Submit</button>
            <div id="bottom">
             <a href='index.php?action=scores&week=1'>1</a> &nbsp; <a href='index.php?action=scores&week=2'>2</a>
            
           
        </div>
            </form>
    </body>
</html>
