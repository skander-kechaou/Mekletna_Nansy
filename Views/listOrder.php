<?PHP
include "../controller/orderC.php";
include "../Model/order.php";
$orderC=new orderC();
$list=$orderC->listorder();


?>
<table border="1">
<tr>
<td>idMenu</td>
<td>nborder</td>
<td>idClient</td>
<td>priceorder</td>
<td>dateorder</td>
<td>idorder</td>
<td>statusorder</td>
<td>delete</td>
<td>update</td>
</tr>

<?PHP
foreach($list as $order){
	?>
	<tr>
	<td><?PHP echo $order['idMenu']; ?></td>
	<td><?PHP echo $order['nborder']; ?></td>
	<td><?PHP echo $order['idClient']; ?></td>
	<td><?PHP echo $order['priceorder']; ?></td>
	<td><?PHP echo $order['dateorder']; ?></td>
    <td><?PHP echo $order['idorder']; ?></td>
    <td><?PHP echo $order['statusorder']; ?></td>
	<td><form method="POST" action="deleteorder.php">
	<input type="submit" name="delete" value="delete">
	<input type="hidden" value="<?PHP echo $order['idorder']; ?>" name="idorder">
	</form>
	</td>
	<td><a href="updateorder.php?idorder=<?PHP echo $order['idorder']; ?>">
	update</a></td>
	</tr>
	<?PHP
}
?>
</table>


