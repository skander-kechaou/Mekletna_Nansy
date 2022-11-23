<HTML>
<head>
</head>
<body>
<?PHP
include "../Model/fooditem.php";
include "../Controller/fooditemC.php";

if (isset($_GET['idfooditem']))
{
	$fooditemC=new fooditemC();
    $result=$fooditemC->retrievefooditem($_GET['idfooditem']);
    foreach($result as $row)
    {
		$idfooditem=$row['idfooditem'];
		$Namefooditem=$row['Namefooditem'];
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
<td>Pricefooditem</td>
<td><input type="number" name="Pricefooditem" value="<?PHP echo $Price ?>"></td>
</tr>
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
	$fooditem=new fooditem($_POST['idfooditem'],$_POST['Namefooditem'],$_POST['Pricefooditem']);
	$fooditemC->updatefooditem($fooditem,$_POST['idfooditem_INIT']);
	echo $_POST['idfooditem_INIT'];
	header('Location: displayfooditem.php');
}
?>
</body>
</HTMl>