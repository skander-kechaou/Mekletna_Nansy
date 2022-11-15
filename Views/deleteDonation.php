<?php
include '../Controller/Donation_core.php';
$Donation_core = new Don();
$Donation_core->deleteDonation($_GET["id_Donation"]);
header('Location:ListDonations.php');