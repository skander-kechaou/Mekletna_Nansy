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
