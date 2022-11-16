<?PHP
include "../controller/menuC.php";
include "../Model/menu.php";
$menuC=new menuC();
$list=$menuC->listmenu();


?>
<table bmenu="1">
<tr>
<td>idMenu</td>
<td>priceMenu</td>
<td>chefMenu</td>
<td>regionMenu</td>
<td>itemsMenu</td>
<td>delete</td>
<td>update</td>
</tr>

<?PHP
foreach($list as $menu){
	?>
	<tr>
	<td><?PHP echo $menu['idMenu']; ?></td>
	<td><?PHP echo $menu['chefMenu']; ?></td>
	<td><?PHP echo $menu['regionMenu']; ?></td>
	<td><?PHP echo $menu['priceMenu']; ?></td>
	<td><?PHP echo $menu['itemsMenu']; ?></td>
	<td><form method="POST" action="deletemenu.php">
	<input type="submit" name="delete" value="delete">
	<input type="hidden" value="<?PHP echo $menu['idMenu']; ?>" name="idMenu">
	</form>
	</td>
	<td><a href="upitemsMenu.php?idMenu=<?PHP echo $menu['idMenu']; ?>">
	update</a></td>
	</tr>
	<?PHP
}
?>
</table>
