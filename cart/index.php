<?php
	require "connection.php";
	$query = "SELECT * FROM Product";
	if ($result = mysqli_query($link, $query)) {
?>

<table cellpadding="2" cellspacing="2" border="1">
	<tr><th>ProNum</th><th>ProName</th><th>UnitPrice</th><th>Buy</th></tr>
	<?php while($product = mysqli_fetch_object($result)){?>
		<tr><td><?php echo $product->Pronum; ?></td>
        	<td><?php echo $product->ProName; ?></td>
            <td><?php echo $product->UP; ?></td>
<td><a href="cart.php?Pronum=<?php echo $product->Pronum; ?>">Order Now</a></td></tr>
    <?php } ?>
</table>
<?php }?>