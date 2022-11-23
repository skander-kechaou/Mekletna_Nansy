<HTML>
<head>
</head>
<body>
<?PHP
include "../Model/fooditem.php";
include "../Controller/fooditemcore.php";

if (isset($_GET['idfooditem']))
{
	$fooditemcore=new fooditemcore();
    $result=$fooditemcore->retrievepanier($_GET['idfooditem']);
    foreach($result as $row)
    {
		$idfooditem=$row['idfooditem'];
		$Namefooditem=$row['Namefooditem'];
		$id_chef=$row['id_chef'];
		$Price=$row['Pricefooditem'];
?>
<form method="POST">
<table>
<caption>update fooditem</caption>
<tr>
<td>idfooditem</td>
<td><input type="number" name="idfooditem" value="<?PHP echo $idfooditem ?>"></td>
</tr>
<tr>
<td>Namefooditem</td>
<td><input type="text" name="Namefooditem" value="<?PHP echo $Namefooditem ?>"></td>
</tr>
<tr>
<td>id_chef</td>
<td><input type="number" name="id_chef" value="<?PHP echo $id_chef ?>"></td>
</tr>
<tr>
<td>Pricefooditem</td>
<td><input type="number" name="Pricefooditem" value="<?PHP echo $Price ?>"></td>
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
<td><input type="hidden" name="idfooditem_INIT" value="<?PHP echo $_GET['idfooditem'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['update'])){
	$fooditem=new fooditem($_POST['idfooditem'],$_POST['Namefooditem'],$_POST['id_chef'],$_POST['Pricefooditem']$_POST['Mail']);
	$fooditemcore->updatepanier($panier,$_POST['idfooditem_INIT']);
	echo $_POST['idfooditem_INIT'];
	header('Location: displaypanier.php');
}
?>
</body>
</HTMl>