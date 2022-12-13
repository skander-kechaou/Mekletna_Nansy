<?php
// review the add chef
include '../Controller/ChefC.php';


$error = "";

// create chef
$chef = null;

// create an instance of the controller
$chefC = new ChefC();
if ((
    isset($_POST["Name_chef"]) &&
    isset($_POST["Add_chef"]) &&
    isset($_POST["mail_chef"])&&
    isset($_POST["Phone"])&&
    isset($_POST["Date_Birth"])&&
    isset($_POST["Cv"])&&
    isset($_POST["Reg"])

) &&(
        !empty($_POST["Name_chef"]) &&
        !empty($_POST["Add_chef"]) &&
        !empty($_POST["mail_chef"])&&
        !empty($_POST["Phone"])&&
        !empty($_POST["Date_Birth"])&&
        !empty($_POST["Cv"])&&
        !empty($_POST["Reg"])
    ) ){
        echo('Name : '. $_POST['Name_chef']);
        $chef = new chef(
           Null,
            $_POST['Name_chef'],
            $_POST['Add_chef'],
            $_POST['mail_chef'],
            $_POST['Phone'],
            new DateTime($_POST['Date_Birth']),
            $_POST['Cv'],
            $_POST['Reg'],
           
        );
        $chefC->addChef($chef);
        header('Location:chef management.php');
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
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
   
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="home.php"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
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

        <a class="bi-person-fill"  href="profile.php"> User Profile</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->

    <section id="region" class="region">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
         
          <p>Check Our <span> Chefs </span> By Region </p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="north.php">North</a></li>
              <li><a href="coastal.php">Coastal</a></li>
              <li><a href="south.php">South</a></li>
            </ul>
          </nav>
          

          
         
          </ul>
        
                   <!-- North -->
                  
                   <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="region-north">
     
                 <div class="tab-header text-center">
                   <p>Region</p>
                   <h3>North</h3>
                 </div>
     
                 <div class="row gy-5">
     
                   <iframe width="560" height="500" src="https://www.youtube.com/embed/lWbyHPWlXtg?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
     
                 <pre>
                    North Tunisia  is a breathtaking region where you can the greenery everywhere thanks to forests,mountains,.... 
                   If you're invited to a North Tunisian home for dinner, you'll be regaled with a variety of heartwarming 
                   and palate-pleasing delights such as Couscous,Lablabi,Tajine...
                 </pre>
     
                 <section id="chefs" class="chefs section-bg">
                   <div class="container" data-aos="fade-up">
                     <div class="section-header">
                       <p>See Our <span>Best</span> Chefs</p>
                       <pre>
                           <span>
                         This magical ,marvelous food on our plate,
                            the sustenance we absorb  has a story to tell. 
                      It has a journey.
                         </span>     
                         </pre>
                     </div>
             
                     <div class="row gy-4">
                       <div
                         class="col-lg-4 col-md-6 d-flex align-items-stretch"
                         data-aos="fade-up"
                         data-aos-delay="100"
                       >
                         <div class="chef-member">
                           <div class="member-img">
                             <img
                               src="assets/img/chefs/chefs-3.jpg"
                               class="img-fluid"
                               alt=""
                             />
                             <div class="social">
                               <a href=""><i class="bi bi-star"></i></a>
                               <a href=""><i class="bi bi-star"></i></a>
                               <a href=""><i class="bi bi-star"></i></a>
                               <a href=""><i class="bi bi-star"></i></a>
                               <a href=""><i class="bi bi-star"></i></a>
                             </div>
                           </div>
                           <div class="member-info">
                             <h4>Mohamed</h4>
                             <span
                               >Chef specialized in Tunisian north traditional food.</span
                             >
                           </div>
                         </div>
                       </div>
                     </section>
                       <!-- End Chefs Member -->

                       
    

     <!-- ======= Become A Chef Section ======= -->

     <section id="become-a-chef" class="become-a-chef">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          
          <p>Apply To become<span>A Chef</span></p>
        </div>
       
        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/cgef.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="Chef.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="Name_chef" class="form-control" id="Name_chef" placeholder=" Name"  data-msg="Please enter at least 4 chars" required/>
                  <div>
                    <p id="Errorname"> </p>
                </div>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="Add_chef" id="Add_chef" placeholder="Address" data-rule="text" >
                  <div class="validate"></div>
                </div>
               
                <div class="col-lg-4 col-md-6">
                  <input type="email" name="mail_chef" class="form-control" id="mail_chef" placeholder="mail "  data-msg="Please enter your mail with @" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" name="Phone" id="Phone" placeholder="Phone" data-msg="Please enter only numbers" required/>
                  <div>
                    <p id="ErrorPhone"> </p>
                </div>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" class="form-control" name="Date_Birth" id="Date_Birth" placeholder=" Date_Birth"  data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="Cv" id="Cv" placeholder="Cv">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="Reg" id="Reg" placeholder="Reg">
                  <div class="validate"></div>
                </div>
              </div>
              
              <button type="submit" >Add Chef Now</button>
            </form>
          </div><!-- End Reservation Form -->
        </div>
        </div>

      </div>
    </section><!-- End Become A Chef Section -->


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
          &copy; Copyright <strong><span>Mekletna</span></strong
          >. All Rights Reserved
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

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- <script src="scriptChef.js"></script> -->
  </body>
</html>
