<?php
include '../Controller/ChefC.php';
$chefC = new ChefC();
$chefC->deleteChef($_GET["id_chef"]);
header('Location:chef management.php');