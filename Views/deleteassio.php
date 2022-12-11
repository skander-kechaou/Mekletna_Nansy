<?php
include '../Controller/assioC.php';
$assioC = new AssioC();
$assioC->deleteassio($_GET["id_association"]);
header('Location:listassio.php');