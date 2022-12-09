<?php

include '../Controller/UserFct.php';
include '../Model/user.php';

$error = "";

$client = null;

$ClientC = new ClientC();

if (
    isset($_POST["fnameClient"]) &&
    isset($_POST["lnameClient"]) &&
    isset($_POST["pnbClient"]) &&
    isset($_POST["mailClient"]) &&
    isset($_POST["pwdClient"]) &&
    isset($_POST["bdayClient"]) &&
    isset($_POST["pcodeClient"]) &&
    isset($_POST["regionClient"]) &&
    isset($_POST["addressClient"])
) {
    if (
        !empty($_POST["fnameClient"]) &&
        !empty($_POST["lnameClient"]) &&
        !empty($_POST["pnbClient"]) &&
        !empty($_POST["mailClient"]) &&
        !empty($_POST["pwdClient"]) &&
        !empty($_POST["bdayClient"]) &&
        !empty($_POST["pcodeClient"]) &&
        !empty($_POST["regionClient"]) &&
        !empty($_POST["addressClient"])
    ) {
        $client = new Client(
            null,
            $_POST["fnameClient"],
            $_POST["lnameClient"],
            $_POST["pnbClient"], 
            $_POST["mailClient"],
            md5($_POST["pwdClient"]),
            new DateTime($_POST["bdayClient"]),
            $_POST["pcodeClient"],
            $_POST["regionClient"],
            $_POST["addressClient"]
        );
        $ClientC->addClient($client);
        header('Location:listClients.php');
        ECHO "Registration is successful...";
    } else
        $error = "Missing information";
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="assets/css/signup.css"/>
  </head>
  <body>
    <!-- <div class="container">
        <img src="Views/assets/img/mekletna login.png" alt="logo">
        <p>Sign up to benefit from our services!</p>
    </div> -->
    
    <header>
    <div class="container">
      <div class="header">
        <h2>Create Account</h2>
      </div>
      <form action="" id="form" class="form" method="POST">
        <div class="form-control">
          <label for="fnameClient">First Name</label>
          <input type="text" placeholder="First Name (only characters)" id="fnameClient" name="fnameClient" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="lnameClient">Last Name</label>
          <input type="text" placeholder="Last Name (only characters)" id="lnameClient" name="lnameClient"/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="emailClient">Email</label>
          <input type="email" placeholder="username@gmail.com" id="mailClient" name="mailClient"/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="pnbClient">Phone Number</label>
          <input type="number" placeholder="123-456-78" id="pnbClient" name="pnbClient" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="pwdClient">Password</label>
          <input type="password" placeholder="Password (at least 8 characters)" id="pwdClient" name="pwdClient"/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="bdayClient">Date of Birth</label>
          <input type="date" id="bdayClient" name="bdayClient"/>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="pcodeClient">Postal Code</label>
          <input type="text" placeholder="Postal Code" id="pcodeClient" name="pcodeClient" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="regionClient">Region</label>
          <input type="text" placeholder="Region (Ariana, Tunis, Sousse, Sfax)" id="regionClient" name="regionClient" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="addressClient">Street Address</label>
          <input type="text" placeholder="Address (i.e : street 123, city)" id="addressClient" name="addressClient"/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <button onclick="checkInputs()">
          Submit
        </button>
        <p align="center">Already have an account ? <a href="login.php">Log In</a></p>
      </form>
    </div>


    <!-- SOCIAL PANEL HTML -->
    <div class="social-panel-container">
      <div class="social-panel">
        <p>Created with <i class="fa fa-heart"></i> by
          <a target="_blank" href="https://florin-pop.com">Florin Pop</a></p>
        <button class="close-btn"><i class="fas fa-times"></i></button>
        <h4>Get in touch on</h4>
        <ul>
          <li>
            <a href="https://www.patreon.com/florinpop17" target="_blank">
              <i class="fab fa-discord"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/florinpop1705" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="https://linkedin.com/in/florinpop17" target="_blank">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="https://facebook.com/florinpop17" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://instagram.com/florinpop17" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <button class="floating-btn">
      Get in Touch
    </button>
    </header>
    <script src="assets/js/signup.js"></script>
  </body>
</html>
