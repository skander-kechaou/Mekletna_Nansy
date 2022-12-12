<?php
include '../Controller/UserFct.php';
$clientC = new ClientC();
$list = $clientC->SortAlpha();
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
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <form action="searchclient.php" method="POST" class="tm-login-form">
                        <div class="form-group">
                            <label for="username">Search</label>
                            <input name="search" type="text" class="form-control validate" id="search" value="" required />
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit-search">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-14 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                    <h2 class="tm-block-title">CLIENTS' LIST <a class="bi bi-sort-alpha-down" href="sortClient.php"></a></h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID NO.</th>
                                <th scope="col">FIRST NAME</th>
                                <th scope="col">LAST NAME</th>
                                <th scope="col">PHONE NUMBER</th>
                                <th scope="col">E-MAIL</th>
                                <th scope="col">PASSWORD</th>
                                <th scope="col">BIRTH DATE</th>
                                <th scope="col">POSTAL CODE</th>
                                <th scope="col">REGION</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">UPDATE</th>
                                <th scope="col">DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list as $client) {
                            ?>
                                <tr>
                                    <td><?= $client['idClient']; ?></td>
                                    <td><?= $client['fnameClient']; ?></td>
                                    <td><?= $client['lnameClient']; ?></td>
                                    <td><?= $client['pnbClient']; ?></td>
                                    <td><?= $client['mailClient']; ?></td>
                                    <td><?= $client['pwdClient']; ?></td>
                                    <td><?= $client['bdayClient']; ?></td>
                                    <td><?= $client['pcodeClient']; ?></td>
                                    <td><?= $client['regionClient']; ?></td>
                                    <td><?= $client['addressClient']; ?></td>
                                    <td align="center">
                                        <?php

                                        if ($client['statusClient'] == 0) {
                                            echo '<p><a href="enabledisable.php?idClient=' . $client['idClient'] . '&statusClient=1" class="btn btn-danger">Disable</a></p>';
                                        } else {
                                            echo '<p><a href="enabledisable.php?idClient=' . $client['idClient'] . '&statusClient=0" class="btn btn-success">Enable</a></p>';
                                        }

                                        ?>
                                    </td>
                                    <td align="center">
                                        <!-- <form method="GET" action="updateClient.php">
                                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                                                <input type="hidden" value= name="idClient">
                                            </form> -->
                                        <a class="btn btn-primary" href="updateClient.php?idClient=<?php echo $client['idClient']; ?>">Update</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="deleteClient.php?idClient=<?php echo $client['idClient']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
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
        $(function() {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function() {
                updateLineChart();
                updateBarChart();
            });
        })
    </script>
</body>

</html>