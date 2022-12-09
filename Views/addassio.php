<?php

include '../controller/assioC.php';
include '../model/Association.php';

$error = "";

$assio = null;

$assioC = new AssioC();
if ((
    isset($_POST["name_assio"]) &&
    isset($_POST["mail"]) &&
    isset($_POST["phone"]) &&
    isset($_POST["president"])&&
    isset($_POST["location"])
) 
    && (
        !empty($_POST["name_assio"]) &&
        !empty($_POST["mail"]) &&
        !empty($_POST["phone"]) &&
        !empty($_POST["president"]) &&
        !empty($_POST["location"])
    ) ){
        echo('name:'.$_POST['name_assio']);
        $assio = new Assio(
            null,
            $_POST["name_assio"],
            $_POST["mail"],
            $_POST["phone"], 
            $_POST["president"],
            $_POST["location"],
        );
        $assioC->addassio($assio);
        header('Location:listassio.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="assets\css\signupassio.css">
    
</head>
<body>

<div class="container">
  <div class="header">
    <h2>Register as an association</h2>
  </div>
  <form action="" method="POST" id="form" class="form">
    <div class="form-control">
      <label for="name_assio">Name</label>
      <input type="text" name="name_assio" id="name_assio" placeholder="Enter your association's name">
      <small>Error Message</small>
    </div>
    <div class="form-control">
      <label for="name_assio">Email</label>
      <input type="email" name="mail" id="mail" placeholder="Enter your email address">
      <small>Error Message</small>
    </div>
    <div class="form-control">
      <label for="name_assio">Phone Number</label>
      <input type="number" id="phone" name="phone" placeholder="12 345 678" title="Your Phone Number" />
      <small>Error Message</small>
    </div>
    <div class="form-control">
      <label for="name_assio">Client ID</label>
      <input type="number" name="president" id="president" placeholder="Enter your ID">
      <small>Error Message</small>
    </div>
    <div class="form-control">
      <label for="name_assio">Location</label>
      <select name="location" id="location" placeholder="location">
      <option value="Tunis"selected>Tunis</option>
        <option value="Sfax" >Sfax </option>
        <option value="Benzart">Benzart</option>
        <option value="Hammamet">Hammamet</option>
        <option value="Beja">Beja</option>
        <option value="Sousse">Sousse</option>
        <option value="Kairouan">Kairouan</option>
        <option value="Gabès">Gabès</option>
    </select>
      <small>Error Message</small>
    </div>
    <button>
      Submit
    </button>

    <p>Don't have an account? <a href="login.html">Log In</a> </p>
    <button type="submit" name="btn_mail">
    Request Your Id
    </button>
          <!-- <script src="assets\js\assio.js"></script> -->
  </form>
</div>
   
</body>
</html>