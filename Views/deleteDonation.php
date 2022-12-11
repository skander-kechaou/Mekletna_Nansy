<?php
include '../Controller/donationC.php';
$donation= new donationC();
$donation->deletedonation($_GET["id_donation"]);
header('Location:listDonation.php');