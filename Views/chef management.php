<?php
include '../Controller/ChefC.php';
$chefC = new ChefC();
$list = $chefC->listChefs();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <h1 class="tm-site-title mb-0">Chef Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link " href="#">
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
                                <a class="dropdown-item" href="#">User Management </a>
                                <a class="dropdown-item" href="#"> Association Management</a>
                                <a class="dropdown-item active " href="#">Chef Management</a>
                                <a class="dropdown-item" href="#">Menu Management</a>
                                <a class="dropdown-item" href="#">Orders Management</a>
                              </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">
                                <i class="fas fa-shopping-cart"></i>
                               Menu 
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
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
        <div class="container">
            <div class="row">
                <div class="col">
                <form class="form-inline" method="post" action="search by.php">
                <input type="text" name="search" class="form-control" placeholder="Search name .">
                <button type="submit" name="submit-search" class="btn btn-primary">Search</button>
               </form>
               
                <a class="btn "  style="color:white" href=" region management.php" role="button"> See  All Regions</a>
                <a class="btn "  style="color:white" href=" sortchef.php" role="button"> Sort</a>
                </div>
            </div>
            <!-- row -->
        
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Chefs List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id Chef.</th>
                                    <th scope="col">Name Chef.</th>
                                    <th scope="col">Address Chef</th>
                                    <th scope="col">Mail Chef</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Cv</th>
                                    <th scope="col">Reg</th>
                              
                                </tr>
                            </thead>
                            <tbody>
                                
                              
                                    <?php
                                    foreach ($list as $chef) {
                                    ?>
                                        <tr>
                                            <td><?= $chef['id_chef']; ?></td>
                                            <td><?= $chef['Name_chef']; ?></td>
                                            <td><?= $chef['Add_chef']; ?></td>
                                            <td><?= $chef['mail_chef']; ?></td>
                                            <td><?= $chef['Phone']; ?></td>
                                            <td><?= $chef['Date_Birth']; ?></td>
                                            <td><?= $chef['Cv']; ?></td>
                                            <td><?= $chef['Reg']; ?></td>
                                            <td align="center">
                                             <form method="POST" action="updateChef.php">
                                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                                                <input type="hidden" value=<?PHP echo $chef['id_chef']; ?> name="id_chef">
                                             </form>
                                             </td>
                                            <td>
                                                <a class="btn btn-primary" href="deleteChef.php?id_chef=<?php  echo $chef['id_chef']; ?>" >Delete Chef</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="add-chef.php?id_chef=<?php  echo $chef['id_chef']; ?>" >Add Chef</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
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
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>