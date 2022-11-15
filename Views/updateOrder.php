<HTML>
<head>
</head>
<body>
<?PHP
include "../Model/order.php";
include "../Controller/orderC.php";

if (isset($_GET['idOrder']))
{
	$orderC=new orderC();
    $result=$orderC->recupererorder($_GET['idMenu']);
    foreach($result as $row)
    {
		$idMenu=$row['idMenu'];
		$nbOrder=$row['nbOrder'];
		$idClient=$row['idClient'];
		$priceOrder=$row['priceOrder'];
		$dateOrder=$row['dateOrder'];
		$idOrder=$row['idOrder'];
?>
<form method="POST">
<table>
<caption>update order</caption>
<tr>
<td>idMenu</td>
<td><input type="number" name="idMenu" value="<?PHP echo $idMenu ?>"></td>
</tr>
<tr>
<td>nbOrder</td>
<td><input type="text" name="nbOrder" value="<?PHP echo $nbOrder ?>"></td>
</tr>
<tr>
<td>idClient</td>
<td><input type="number" name="idClient" value="<?PHP echo $idClient ?>"></td>
</tr>
<tr>
<td>priceOrder</td>
<td><input type="number" name="priceOrder" value="<?PHP echo $priceOrder ?>"></td>
</tr>
<tr>
<td>dateOrder</td>
<td><input type="date" name="dateOrder" value="<?PHP echo $dateOrder ?>"></td>
</tr>
<tr>
<td>idOrder</td>
<td><input type="number" name="idOrder" value="<?PHP echo $idOrder ?>"></td>
</tr>
<tr>
<td>statusOrder</td>
<td><input type="number" name="statusOrder" value="<?PHP echo $statusOrder ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="update" value="update"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idOrder_INIT" value="<?PHP echo $_GET['idOrder'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['update'])){
	$order=new order($_POST['idMenu'],$_POST['nbOrder'],$_POST['idClient'],$_POST['priceOrder'],$_POST['dateOrder'],$_POST['idOrder'],$_POST['statusOrder']);
	$ordercore->updateOrder($order,$_POST['idOrder_INIT']);
	echo $_POST['idOrder_INIT'];
	header('Location: listOrder.php');
}
?>
</body>
</HTMl>