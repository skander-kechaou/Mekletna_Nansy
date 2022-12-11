<?php
include '../Controller/orderC.php';
$orderC = new orderC();
$orderC->deleteOrder($_GET["idOrder"]);
header('Location:listOrder.php');