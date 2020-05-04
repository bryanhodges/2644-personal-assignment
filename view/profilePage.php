 <?php
if (!isset($errorThrown)) {
    $errorThrown = '';
if (!isset($errorType)){
    $errorType = 0;
}
if (!isset($newPasswordChange)){$newPasswordChange = '';}
if (!isset($confirmPasswordChange)){$confirmPasswordChange = '';}
if (!isset($newUsernameChange)){$newUsername = '';}
if (!isset($newEmailChange)){$newEmailChange = '';}


}
?>



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
    </head>
    <body>

        <!--display a table of products -->
<?php /* @var $user User */ ?>
        <h2 id="profileh2"><?php echo 'User Profile'; ?></h2>
        <div>
        <table id="proTable">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Profile Picture</th>


            </tr>


            <tr>
                <td><?php echo $_SESSION['fName']; ?></td>
                <td><?php echo $_SESSION['lName']; ?></td>
                <td><?php echo $_SESSION['uName']; ?></td>
                <td><?php echo $_SESSION['eMail']; ?></td>
<?php ?>
                <td><img src="<?php echo $_SESSION['pPath']; ?>" alt ="profile picture"><br>
                    <p>Change your profile picture!</p>
                    <form action="index.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="action" value="uploadImage"/>
                        <input type="file" name="image" />
                        <input type="submit"/>
                    </form></td>




            </tr>  

        </table>
            
              <div><?php include 'nav.php'; ?></div>
               <p><?php  ?></p>
        </div>
        <div id="accountManagement">
        <div id="managePass">

            <form id="passwordForm" action ="index.php" method="post">
                            <p><?php if($errorType === 1)
            {
                echo($errorThrown);
                }?></p>
                <h3>Change your password</h3>
                <input type="hidden" name="action" value="changePass"/>
                <label>Current Password</label>
                <input type="password" name="currentPass">
                <br>
                <label>New Password</label>
                <input type="password" name="newPass" 
                       value="<?php echo $newPasswordChange?>">
                <br>
                <label>Confirm Password</label>
                <input type="password" name="confirmPass"
                       value="<?php echo $confirmPasswordChange ?>">
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Send"><br>
            </form>
                
                </div>
        
        <div id ="manageUsername">
            <p><?php if($errorType === 2)
            {
                echo($errorThrown);
                }?></p>
            <form id="userNameForm" action ="index.php" method="post">
                <h3>Change your Username</h3>
                <input type="hidden" name="action" value="changeUserName"/>
                <label>New Username</label>
                <input type="text" name="newUsername">
                <br>
                <label>Current Password</label>
                <input type="password" name="pass">
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Send"><br>
            </form>
        </div>
        <div id ="manageEmail">
            <p><?php if($errorType === 3)
            {
                echo($errorThrown);
                }?></p>
            <form id="emailForm" action ="index.php" method="post">
                <h3>Change your Email</h3>
                <input type="hidden" name="action" value="changeEmail"/>
                <label>New Email</label>
                <input type="text" name="newEmail">
                <br>
                <label>Current Password</label>
                <input type="password" name="pass">
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Send"><br>
            </form>
        </div>
       </div>      
              

                </body>
                </html>



