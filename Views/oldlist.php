<?PHP
include "../controller/basketC.php";
$basketC=new basketC();
$listBasket=$basketC->listBasket();


?>
<table border="1">
<tr>
<td>idProductt</td>
<td>nameOrder</td>
<td>idClient</td>
<td>priceOrder</td>
<td>dateOrder</td>
<td>idOrder</td>
<td>statusOrder</td>
<td>idBasket</td>
<td>delete</td>
<td>update</td>
</tr>

<?PHP
foreach($listBasket as $row){
	?>
	<tr>
	<td><?PHP echo $row['idProduct']; ?></td>
	<td><?PHP echo $row['nameOrder']; ?></td>
	<td><?PHP echo $row['idClient']; ?></td>
	<td><?PHP echo $row['priceOrder']; ?></td>
	<td><?PHP echo $row['dateOrder']; ?></td>
    <td><?PHP echo $row['idOrder']; ?></td>
	<td><?PHP echo $row['statusOrder']; ?></td>
	<td><?PHP echo $row['idBasket']; ?></td>
	<td><form method="POST" action="deleteBasket.php">
	<input type="submit" name="delete" value="delete">
	<input type="hidden" value="<?PHP echo $row['idBasket']; ?>" name="idBasket">
	</form>
	</td>
	<td><a href="updateBasket.php?idBasket=<?PHP echo $row['idBasket']; ?>">
	update</a></td>
	</tr>
	<?PHP
}
?>
</table>


