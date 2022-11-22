<?php
include '../controller/assioC.php';
$assioC = new AssioC();
$assioC->deleteassio($_GET["id_association"]);
header('Location:listassio.php');