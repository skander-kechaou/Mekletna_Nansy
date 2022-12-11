<?php
include '../Controller/menuC.php';
$menuC = new menuC();
$menuC->deletemenu($_GET["idMenu"]);
header('Location:listmenu2.php');