<?php


//set default value of variables for initial page load
    if (!isset($firstName)) { $firstName = ''; } 
    if (!isset($lastName)) { $lastName = ''; }
    if (!isset($userName)) { $userName = ''; } 
    if (!isset($emailAddress)) { $emailAddress = ''; } 
    if (!isset($registerError)){ $registerError = '';}
    //var_dump($errorEmail);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Here</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        
         
        
        
        <h1 id="loginh2"><?php echo('NFL Weekly Pickem') ?></h1>
        <p class="error"><?php echo($registerError)?></p>
        <form id="inputform" action="index.php" method="get">
            <input type="hidden" name="action" value="validateLogin" />
            <p>Please login or click <a onclick="location.href = 'index.php?action=userSignUp'">Register</a> to sign up.</p>
                 <label>User Name</label>
                <input type="text" name="userName"
                       value="<?php echo htmlspecialchars($userName);?>">
                    <?php if (!empty($errorUName)) { ?>
                        <span class="error"><?php echo htmlspecialchars($errorUName); ?></span>
                    <?php } ?>
                <br>
                
                 <label>Password</label>
                <input type="password" name="password">
                    <?php if (!empty($errorEmail)) { ?>
                        <span class="error"><?php echo htmlspecialchars($errorEmail); ?></span>
                    <?php } ?>
                <br>
                
                <label>&nbsp;</label>
                <input type="submit" value="Submit"><br>
               
                
        </form> 
       
    </body>
</html>