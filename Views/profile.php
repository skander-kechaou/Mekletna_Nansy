<?php
require_once("../config.php");
include '../Controller/UserFct.php';
include '../Model/user.php';

if (!isset($_SESSION["login_sess"])) {
    echo "unsuccessful";
  } else {
    echo $_SESSION["login_sess"];
    echo "login success";
    echo $_SESSION["id"];
    $id=$_SESSION['id'];
    // $sql = "SELECT * FROM Client WHERE idClient=".$_SESSION['id'];
    //   $db = config::getConnexion();
    //   try {
    //         $query = $db->prepare($sql);
    //         $query->execute();
    //         $client=$query->fetch();
    //         return $client;
    //     }
    //     catch (Exception $e) {
    //         $e->getMessage();
    //     }
  }

$client = null;

$clientC = new ClientC();
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
            $_POST["pwdClient"],
            new DateTime($_POST["bdayClient"]),
            $_POST["pcodeClient"],
            $_POST["regionClient"],
            $_POST["addressClient"],
            $_POST["statusClient"]
        );
        $clientC->updateClient($client, $_POST["idClient"]);
        header('Location:profile.php');
    } else
        $error = "Missing information";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Meklitna - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="css/templatemo-style.css"> -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="home.php" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/mekletna.png" alt="mekletna logo" width="100" height="100">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="addOrder.php">Order</a></li>
                    <li><a href="Chef.php">Chefs</a></li>
                    <li><a href="addDonations.php">Donations</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <a class="bi-person-fill" href="profile.php"> User Profile</a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>
    <!-- End Header -->
    
    <section id="book-a-table" class="book-a-table">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-header">
                <p><span>Update</span> your personal information</p>
            </div>

            <div class="row g-0">

                <div class="col-lg-4 reservation-img aos-init aos-animate" style="background-image: url(assets/img/avatar.png);" data-aos="zoom-out" data-aos-delay="200">
                </div>
                <?php
    if (isset($id)) {
        $client = $clientC->showClients($id);
    }
    ?>
                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                    <form action="updateClient.php" method="post" role="form" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="fnameClient" class="form-control" id="fnameClient" value="<?php echo $client['fnameClient']; ?>">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="lnameClient" class="form-control" id="fnameClient" value="<?php echo $client['lnameClient']; ?>">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="number" name="pnbClient" class="form-control" id="pnbClient" value="<?php echo $client['pnbClient']; ?>">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="mailClient" class="form-control" id="mailClient" value="<?php echo $client['mailClient']; ?>">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="password" name="pwdClient" class="form-control" id="pwdClient" value="<?php echo $client['pwdClient']; ?>">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="date" name="bdayClient" class="form-control" id="bdayClient" value="<?php echo $client['bdayClient']; ?>">
                                <div class="validate"></div>
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="number" name="pcodeClient" class="form-control" id="pcodeClient" value="<?php echo $client['pcodeClient']; ?>">
                                <div class="validate"></div>
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="regionClient" class="form-control" id="regionClient" value="<?php echo $client['regionClient']; ?>">
                                <div class="validate"></div>
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="addressClient" class="form-control" id="addressClient" value="<?php echo $client['addressClient']; ?>">
                                <div class="validate"></div>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Update complete!</div>
                        </div>
                        <div class="text-center"><button type="submit">Update</button></div>
                    </form>
                </div><!-- End Reservation Form -->

            </div>

        </div>
    </section>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            Mohammed V Street <br />
                            Tunis, Tunis 1023<br />
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> +216 51 653 115<br />
                            <strong>Email:</strong> info@mekletna.com<br />
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 11PM<br />
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Mekletna</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Nansy</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>