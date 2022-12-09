<?php
include '../Controller/UserFct.php';
include '../Model/user.php';
session_start();
// $_SESSION['idClient'] = $fetch['idClient'];

$Client = null;

$ClientC = new ClientC();

if (
  isset($_POST['mailClient']) &&
  isset($_POST['pwdClient'])
) {
  if (
    !empty($_POST['mailClient']) &&
    !empty($_POST['pwdClient']) &&
    !empty($_POST['g-recaptcha-response'])
  ) {
    $secret = '6Ld2hE4jAAAAAIeedXbNrpSgTp3ct8Oroa_oSx_C';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
      $idClient = $_POST['idClient'];
      $mail = $_POST['mailClient'];
      $pwd = $_POST['pwdClient'];
      $sql = "SELECT * FROM Client WHERE mailClient=? AND pwdClient=?";
      $db = config::getConnexion();
      $query = $db->prepare($sql);
      $query->execute(array($mail, $pwd));
      $row = $query->rowCount();
      $fetch = $query->fetch();
      $stat = $_fetch['statusClient'];
      $control= $query->fetch(PDO::FETCH_OBJ);
      if ($control > 0) {
        $_SESSION['idClient'] = $idClient;
      }
      if ($row > 0) {
        if ($stat == 0) {
          header("location: home.php");
        } else {
          header("location: restricted.php");
        }
        
      } else {
        echo "
            <script>alert('Invalid username or password')</script>
            <script>window.location = 'login.php'</script>
            ";
      }
    } else {
      echo "
            <script>alert('Please complete the required field!')</script>
            <script>window.location = 'login.php'</script>
        ";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="Views/assets/img/favicon.png" rel="icon" />
  <link href="Views/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="Views/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="Views/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="Views/assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="Views/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="Views/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/login.css" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <div class="website">
    <img src="assets/img/mekletna login.png" alt="logo" />
    <p>Mekletna keeps you connected <br /> to your cultural gastronomy</p>
  </div>

  <div class="container">
    <div class="header">
      <h2>Enter your credentials</h2>
    </div>
    <form class="form" id="form" method="POST">
      <div class="form-control">
        <input type="text" name="mailClient" id="mailClient" placeholder="Email address" />
      </div>
      <div class="form-control">
        <input type="password" name="pwdClient" id="pwdClient" placeholder="Password" />
      </div>
      <div class="g-recaptcha" data-sitekey="6Ld2hE4jAAAAADYB7CVhEbUmtG7qpu3GnSpyuWTb"></div>
      <button>Log In</button>
    </form>

    <div class="link1">
      <a href="#">Forgotten Password?</a>
    </div>
    <div class="footer">
      <div class="signup">
        <a href="addClient.php">Create New Account</a>
      </div>
    </div>
  </div>
</body>

</html>