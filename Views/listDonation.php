<?php
include '../Controller/donationc.php';
$Donation_core = new donationC ();
$list = $Donation_core ->listDonation();
$conn=mysqli_connect("localhost","root","","catering");
$query = "SELECT location, count(*) as number FROM donation GROUP BY location";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Location', 'Date'],
    <?php
        while($val=mysqli_fetch_assoc($result))
        {
            echo"['".$val['location']."',".$val['number']."],";
        }
    ?>
        ]);

        var options = {
          title: 'Based Location'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
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
                                <a class="dropdown-item" href="region management.php">List Regions</a>
                                
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
            <!-- row -->
            <div class="row mt-2">
            <div class="col-12">
             <div id="piechart" style="width: 1000px; height: 500px;"></div>
            </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="searchdon.php" method="POST" class="tm-login-form">
                  <div class="form-group">
                    <label for="username">Search</label>
                    <input
                      name="searchdon"
                      type="text"
                      class="form-control validate"
                      id="searchdon"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase"
                      name="submit-search-don"
                    >
                    Search Based On Location
                    </button>
                  </div>
                </form>
              </div>
            </div>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                    <h2 class="tm-block-title">Donation List <a class="bi bi-sort-down-alt" href="sortDonation.php"></a></h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID donation</th>
                                    <th scope="col">id menu</th>
                                    <th scope="col">date</th>
                                    <th scope="col">location</th>
                                    <th scope="col">reason</th>
                                    <th scope="col">ID Client</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list as $donation) {
                                ?>
                                    <tr>
                                        <td><?= $donation['id_donation']; ?></td>
                                        <td><?= $donation['id_menu']; ?></td>
                                        <td><?= $donation['date']; ?></td>
                                        <td><?= $donation['location']; ?></td>
                                        <td><?= $donation['reason']; ?></td>
                                        <td><?= $donation['id_client']; ?></td>
                                        <td align="center">
                                        <a class="btn btn-primary"  href="updateDonation.php">
                                                    UPDATE
                                                </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="deleteDonation.php?id_donation=<?php echo $donation['id_donation']; ?>">Delete</a>
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
                    Copyright &copy; <b>2022</b> All rights reserved. 
                    
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