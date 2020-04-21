<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  
    <body>
        <?php include 'nav.php'; ?>
        
                <form action="index.php" method="POST">
            <input type="hidden" name="action" value="weeklyPicksSubmit" />
        <table>
                <tr>
                    <th>Date      </th>
                    <th>Time</th>
                    
                    
                    <th>Home Team</th>
               
                    <th>Away Team</th>
                    
                    
                    
                </tr>
                
                <?php foreach ($games as $game) : ?>
                    <tr>
                        <td contenteditable="true"><?php echo $game->getDate(); ?>   </td>
                        <td contenteditable="true"><?php echo $game->getTime(); ?></td>
                        <td contenteditable="true"><?php echo $game->getHomeID(); ?></td>
                        <td contenteditable="true"><?php echo $game->getVisitorID(); ?></td>
                        
                        <td><form action="index.php" method="POST">
                        <input type="hidden" name="action"
                       value="updateSchedule">
                        <input type="hidden" name="gameToUpdate"
                       value="<?php echo htmlspecialchars($game->getGameID()); ?>">
                        <input type="submit" value="change">
                            </form> </td>
                       
                        
                    </tr>
                <?php endforeach; ?>       
                     
            </table>
            <button type="submit" value="SEND">Submit</button>
            </form>
        <a href='index.php?action=schedule&week=1'>1</a> &nbsp; <a href='index.php?action=schedule&week=2'>2</a>
        
        
    </body>
</html>
