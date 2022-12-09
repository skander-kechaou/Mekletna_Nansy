<?php
require '../config.php';
require '../Model/user.php';

if(isset($_POST['reset_link'])){

        $email = $_POST['mailClient'];
        $db = config::getConnexion();
        // Check if in the database
        $query = $db->prepare("SELECT mailClient FROM Client where mailClient = ?");
        $query->execute([$email]);
        $row = $query->rowCount();
    
        if($row == 1){
            // existing user, proceed with reset password
    
            // generate a random code
            $code = rand(999999, 111111);
    
            // Formulate the link
            $link = 'href="http://localhost/re/Views/changepwd.php?email='.$email.'&code='.$code.'"';
            
            $link2 = '<span style="width:100%;"><a style="padding:10px 100px;border-radius:30px;background:#a8edbc;" '.$link.' > Link </a></span>';
    
            //echo $code, $link; 
    
            $query_exist =  $db->prepare("SELECT * FROM reset where mailClient = ?");
            $query_exist->execute([$email]);
            $from_reset = $query_exist->fetch();
    
            if(empty($from_reset)){
                // Save code and INSERT email in a database
                $query_insert = $db->prepare("INSERT INTO reset(mailClient, codeClient) VALUES (?, ?)");
                $query_insert->execute([$email, $code]);
            } else {
                // Already exist reseting attempt, switch to UPDATE the reset table instead
                $query_insert = $db->prepare("UPDATE reset SET codeClient = ? WHERE mailClient = ?");
                $query_insert->execute([$code, $email]);
            }
    
    
          
            // Send email with the link
            $from = 'skander.kechaou.e@gmail.com';
            $to = $email;
            $subject = 'Reset password from Mekletna';
            $message = '
                <p>Dear '.$email.',</p>
                
                <p>Please click on this link to reset your password:</p> 
                <p>'.$link2.'</p>
    
                Best wishes,
                <br>
                <span>Mekletna</span>
            ';
    
             // Set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: '.$from."\r\n";
    
            mail($to, $subject, $message, $headers);
           
            // Notification
            $msg = '<h4 class="text-success">Please check your email (including spam) to see the password reset link.</h4>';
    
        } else {
            $error = '<h4 class="text-danger">Email does not exist!';
        }
    
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password reset</title>
    <link rel="stylesheet" href="assets/css/resetpwd.css" />
  </head>
  <body>
    <div class="website">
      <img src="assets/img/mekletna.png" width="150" alt="logo" />
    </div>
    <?php if(isset($msg)){echo $msg;}?>
    <?php if(isset($error)){echo $error;}?>
    <div class="container">
      <div class="header">
        <h2>Reset your password</h2>
      </div>  
      <form class="form" id="form" method="POST" action="resetpwd.php">
        <p>Please enter your email address so you can receive a password reset code in your inbox</p>
        <div class="form-control">
        <input
          type="text"
          name="mailClient"
          id="mailClient"
          placeholder="Email address"/>
        </div>
        <button name="reset_link">Send</button> 
      </div>
      </form>
    </div>
  </body>
</html>
