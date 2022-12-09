<?php
include '../controller/fooditemC.php';
$fooditemC = new fooditemC();
$fooditemC->deletefooditem($_GET["idfooditem"]);
header('Location listfooditem.php');