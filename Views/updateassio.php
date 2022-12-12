<?php

// php update data in mysql database using PDO

if(isset($_POST['update']))
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "catering";
  
  $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // get values form input text and number
    
    $id_association = $_POST['id_association'];
    $name_assio = $_POST['name_assio'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $president = $_POST['president'];
    $location = $_POST['location'];
    
    // mysql query to Update data
    
    $query = "UPDATE `association` SET `name_assio`='".$name_assio."',`mail`='".$mail."',`phone`='".$phone."',`president`='".$president."',`location`='".$location."' WHERE `id_association` = '".$id_association."'";
    
    
    $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
       header('Location:listassio.php');
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <div class="" id="home">
    <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse  navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link  " href="index.php">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Modules <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="listassio.php">Association Managment</a>
                                <a class="dropdown-item" href="listDonation.php">Donation Managment</a>
                                <a class="dropdown-item" href="chef management.php">Chef Report</a>
                                <a class="dropdown-item" href="listOrder.php">orders Report</a>
                                <a class="dropdown-item" href="addRegion.php">Region managment</a>
                                <a class="dropdown-item" href="listBasket.php">Basket List</a>
                                <a class="dropdown-item" href="listRegions.php">List Regions</a>
                                
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span>
                                Products
                                </span>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="listfooditem2.php">food items</a>
                                <a class="dropdown-item" href="listmenu2.php">Menus</a>
                                <a class="dropdown-item" href="addfooditem.php">Food item managment</a>
                                <a class="dropdown-item" href="addMenu.php">Menu managment</a>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="listClients.php">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
      <div class="container mt-5">
        <div class="row tm-content-row ">
          <div class="col-12 tm-block-col">
          </div>
        </div>
        <!-- row -->
        <div class="row tm-content-row">

          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Update Asscosiation Settings</h2>
            
              <form action="updateassio.php" method="post">

            <label >Id to update</label> <input class="form-control validate" type="text" name="id_association" required><br><br>

            <label >New Name</label><input class="form-control validate" type="text" name="name_assio" required><br><br>

            <label >Mail</label><input class="form-control validate" type="text" name="mail" required><br><br>

            <label >Phone</label><input class="form-control validate" type="number" name="phone" required><br><br>
            
            <label>President</label><input class="form-control validate" type="number" name="president" required><br><br>

           <label >Location</label><input class="form-control validate" type="text" name="location" required><br><br>

            <input class="btn btn-primary btn-block text-uppercase" type="submit" name="update" value="Update Data">

        </form>
    
            </div>
          </div>
        </div>
      </div>
      <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
          </p>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
