<?PHP
include "../controller/fooditemC.php";
include "../Model/fooditem.php";
$fooditemC=new fooditemC();
$list=$fooditemC->listfooditem();


?>
<table bmenu="1">
<tr>
<td>idfooditem</td>
<td>Pricefooditem</td>
<td>Namefooditem</td>
<td>delete</td>
<td>update</td>
</tr>

<?PHP
foreach($list as $fooditem){
	?>
	<tr>
	<td><?PHP echo $fooditem['idfooditem']; ?></td>
	<td><?PHP echo $fooditem['Namefooditem']; ?></td>
	<td><?PHP echo $fooditem['Pricefooditem']; ?></td>
	<td><form method="POST" action="deletfooditem.php">
	<input type="submit" name="delete" value="delete">
	<input type="hidden" value="<?PHP echo $menu['idfooditem']; ?>" name="idfooditem">
	</form>
	</td>
	<td><a href="upitemsMenu.php?idfooditem=<?PHP echo $fooditem['idfooditem']; ?>">
	update</a></td>
	</tr>
	<?PHP
}
?>
</table>
