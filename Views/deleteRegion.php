<?php
include '../Controller/RegionC.php';
$regionC = new RegionC();
$regionC->deleteRegion($_GET["id_region"]);
header('Location:region management.php');