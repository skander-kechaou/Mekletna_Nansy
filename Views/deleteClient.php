<?php
include '../Controller/UserFct.php';

$clientC = new ClientC();
$clientC->deleteClient($_GET["idClient"]);
header('Location:listClients.php');