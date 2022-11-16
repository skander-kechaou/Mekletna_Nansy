<HTML>
<head>
</head>
<body>
<?PHP
include "../Model/menu.php";
include "../Controller/menuC.php";

if (isset($_GET['itemsMenu']))
{
	$menuC=new menuC();
    $result=$menuC->recuperermenu($_GET['idMenu']);
    foreach($result as $row)
    {
		$idMenu=$row['idMenu'];
		$nbmenu=$row['nbmenu'];
		$priceMenu=$row['priceMenu'];
		$regionMenu=$row['regionMenu'];
		$chefMenu=$row['chefMenu'];
		$itemsMenu=$row['itemsMenu'];
?>
<form method="POST">
<table>
<caption>update menu</caption>
<tr>
<td>idMenu</td>
<td><input type="number" name="idMenu" value="<?PHP echo $idMenu ?>"></td>
</tr>
<tr>
<td>nbmenu</td>
<td><input type="text" name="nbmenu" value="<?PHP echo $nbmenu ?>"></td>
</tr>
<tr>
<td>priceMenu</td>
<td><input type="number" name="priceMenu" value="<?PHP echo $priceMenu ?>"></td>
</tr>
<tr>
<td>regionMenu</td>
<td><input type="number" name="regionMenu" value="<?PHP echo $regionMenu ?>"></td>
</tr>
<tr>
<td>chefMenu</td>
<td><input type="date" name="chefMenu" value="<?PHP echo $chefMenu ?>"></td>
</tr>
<tr>
<td>itemsMenu</td>
<td><input type="number" name="itemsMenu" value="<?PHP echo $itemsMenu ?>"></td>
</tr>
<tr>
<td>statusmenu</td>
<td><input type="number" name="statusmenu" value="<?PHP echo $statusmenu ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="update" value="update"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="itemsMenu_INIT" value="<?PHP echo $_GET['itemsMenu'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['update'])){
	$menu=new menu($_POST['idMenu'],$_POST['nbmenu'],$_POST['priceMenu'],$_POST['regionMenu'],$_POST['chefMenu'],$_POST['itemsMenu'],$_POST['statusmenu']);
	$menucore->upchefMenu($menu,$_POST['itemsMenu_INIT']);
	echo $_POST['itemsMenu_INIT'];
	header('Location: listmenu.php');
}
?>
</body>
</HTMl>