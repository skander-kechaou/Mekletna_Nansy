<HTML>
<head>
</head>
<body>
<?PHP
include "../Model/basket.php";
include "../Controller/basketC.php";

if (isset($_GET['idProduct']))
{
	$basketC=new basketC();
    $result=$basketC->retrievebasket($_GET['idProduct']);
    foreach($result as $row)
    {
		$idProduct=$row['idProduct'];
		$nameOrder=$row['nameOrder'];
		$idClient=$row['idClient'];
		$priceOrder=$row['priceOrder'];
        $idBasket=$row['idBasket'];
        $dateOrder=$row['dateOrder'];
?>
<form method="POST">
<table>
<caption>update basket</caption>
<tr>
<td>id of Product</td>
<td><input type="number" name="idProduct" value="<?PHP echo $idProduct ?>"></td>
</tr>
<tr>
<td>name of Order</td>
<td><input type="text" name="nameOrder" value="<?PHP echo $nameOrder ?>"></td>
</tr>
<tr>
<td>id Client</td>
<td><input type="number" name="idClient" value="<?PHP echo $idClient ?>"></td>
</tr>
<tr>
<td>price of Order</td>
<td><input type="number" name="priceOrder" value="<?PHP echo $priceOrder ?>"></td>
</tr>
<tr>
<td>date of Order</td>
<td><input type="date" name="dateOrder" value="<?PHP echo $dateOrder ?>"></td>
</tr>
<tr>
<td>id Order</td>
<td><input type="number" name="idOrder" value="<?PHP echo $idOrder ?>"></td>
</tr>
<tr>
<td>status Order</td>
<td><input type="number" name="statusOrder" value="<?PHP echo $statusOrder ?>"></td>
</tr>
<td>idOrder</td>
<td><input type="number" name="idOrder" value="<?PHP echo $idOrder ?>"></td>
</tr>
<td>Mail</td>
<td><input type="number" name="Mail" value="<?PHP echo $Mail ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="update" value="update"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idBasket_INIT" value="<?PHP echo $_GET['idBasket'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['update'])){
	$basket=new basket($_POST['idProduct'],$_POST['nameOrder'],$_POST['idClient'],$_POST['priceOrder'],$_POST['dateOrder'],$_POST['idOrder'],$_POST['statusOrder'],$_POST['idBasket'],$_POST['Mail']);
	$basketC->updatebasket($basket,$_POST['idBasket_INIT']);
	echo $_POST['idBasket_INIT'];
	header('Location: listBasket.php');
}
?>
</body>
</HTMl>