<?php 
include("../config.php");
include '../Model/user.php';
$con=mysqli_connect("localhost","root","","catering");
$id = $_GET['idClient'];
$status = $_GET['statusClient'];
$updatequery1 = "UPDATE client SET statusClient=$status WHERE idClient=$id";
mysqli_query($con,$updatequery1);
header('location:listClients.php');
?>