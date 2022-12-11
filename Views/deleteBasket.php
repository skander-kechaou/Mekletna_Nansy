<?php
include '../Controller/basketC.php';
$basketC = new basketC();
$basketC->deleteBasket($_GET["nameOrder"]);
header('Location:listBasket.php');