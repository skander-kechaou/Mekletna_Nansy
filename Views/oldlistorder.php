<?PHP
include "../controller/orderC.php";
// include "../Model/order.php";
$orderC= new orderC();
$list= $orderC->listorder();


?>
<center>
	<h1>list of orders</h1>
	<h2>
		<a href="addOrder.php">Add Order</a>
	</h2>
</center>
<table border="1" align="center" Width="70%">
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
	<td><?= $order['idMenu']; ?></td>
	<td><?= $order['nborder']; ?></td>
	<td><?= $order['idClient']; ?></td>
	<td><?= $order['priceorder']; ?></td>
	<td><?= $order['dateorder']; ?></td>
    <td><?= $order['idorder']; ?></td>
    <td><?= $order['statusorder']; ?></td>
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


