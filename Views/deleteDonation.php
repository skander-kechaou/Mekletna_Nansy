<?php
include '../controller/Donation_core.php';
$Donation_core = new donation_c();
$Donation_core->deleteDonation($_GET["id_donation"]);
header('Location:listDonation.php');