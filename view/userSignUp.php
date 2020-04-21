<?php


//set default value of variables for initial page load
    if (!isset($fName)) { $fName = ''; } 
    if (!isset($lName)) { $lName = ''; }
    if (!isset($uName)) { $uName = ''; } 
    if (!isset($email)) { $email = ''; } 
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
        
        <h1><?php echo('NFL Pickem Signup') ?></h1>
        <p class="error"><?php echo($registerError)?></p>
        <form id="inputform" action="index.php" method="get">
            <input type="hidden" name="action" value="newUser" />

            <label>First Name</label>
            <input type="text" name="firstName" 
                   value="<?php echo htmlspecialchars($fName); ?>">
                   <?php if (!empty($errorFName)) { ?>
                <span class="error"><?php echo htmlspecialchars($errorFName); ?></span>
            <?php } ?>
            <br>
             <label>Last Name</label>
                <input type="text" name="lastName"
                       value="<?php echo htmlspecialchars($lName); ?>">
                    <?php if (!empty($errorLName)) { ?>
                        <span class="error"><?php echo htmlspecialchars($errorLName); ?></span>
                    <?php } ?>
                <br>
                
                 <label>User Name</label>
                <input type="text" name="userName"
                       value="<?php echo htmlspecialchars($uName); ?>">
                    <?php if (!empty($errorUName)) { ?>
                        <span class="error"><?php echo htmlspecialchars($errorUName); ?></span>
                    <?php } ?>
                <br>
                
                 <label>E-mail</label>
                <input type="text" name="emailAddress"
                       value="<?php echo htmlspecialchars($email); ?>">
                    <?php if (!empty($errorEmail)) { ?>
                        <span class="error"><?php echo htmlspecialchars($errorEmail); ?></span>
                    <?php } ?>
                <br>
                
                <label>Password</label>
                <input type="password" name="password">
                    <?php if (!empty($errorPass)) { ?>
                        <span class="error"><?php echo htmlspecialchars($errorPass); ?></span>
                    <?php } ?>
                <br>
                
                <label>&nbsp;</label>
                <input type="submit" value="Send"><br>
        </form>
      
    </body>
</html>
