<HTML>
<head>
</head>
<body>
<?PHP
include "../Model/order.php";
include "../Controller/menuC.php";

if (isset($_GET['idMenu']))
{
	$menuC=new menuC();
    $result=$menuC->recupererorder($_GET['idMenu']);
    foreach($result as $row)
    {
		$idMenu=$row['idMenu'];
		$nbOrder=$row['nbOrder'];
		$idClient=$row['idClient'];
		$priceOrder=$row['priceOrder'];
		$dateOrder=$row['dateOrder'];
		$idMenu=$row['idMenu'];
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
<td>idMenu</td>
<td><input type="number" name="idMenu" value="<?PHP echo $idMenu ?>"></td>
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
<td><input type="hidden" name="idMenu_INIT" value="<?PHP echo $_GET['idMenu'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['update'])){
	$order=new order($_POST['idMenu'],$_POST['nbOrder'],$_POST['idClient'],$_POST['priceOrder'],$_POST['dateOrder'],$_POST['idMenu'],$_POST['statusOrder']);
	$menuCore->updateOrder($order,$_POST['idMenu_INIT']);
	echo $_POST['idMenu_INIT'];
	header('Location: listOrder.php');
}
?>
</body>
</HTMl>