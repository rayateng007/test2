<?php
	session_start();
	require "connection.php";
	require "item.php";
	if (isset($_GET['Pronum']))
	{	
$result=mysqli_query($link,"select * from product where Pronum=".$_GET['Pronum']);
		$product =  mysqli_fetch_object($result);
		$item = new item();
		$item->pronum=$product->Pronum;
		$item->proname=$product->ProName;
		$item->price=$product->UP;
		$item->quantity=1;
//check product is existing in cart
		$index=-1;		
		$cart=unserialize(serialize($_SESSION['cart']));
		for($i=0; $i<count($cart); $i++)
			if($cart[$i]->pronum==$_GET['Pronum'])
			{	$index=$i;
				break;
			}
		if($index==-1)
		{	$_SESSION['cart'][]=$item;	
		}
		else
		{
			$cart[$index]->quantity++;
			$_SESSION['cart']=$cart;
		}
		
	}
//Delete product in cart
	if(isset($_GET['index']))
	{	$cart=unserialize(serialize($_SESSION['cart']));
		unset($cart[$_GET['index']]);
		$cart=array_values($cart);
		$_SESSION['cart']=$cart;
	}
?>
<h1>Shopping Cart</h1>
<table cellpadding="2" cellspacing="2" border="0">
	<tr><th>Option</th>	
    	<th>ProNum</th>
    	<th>ProName</th>
    	<th>Price</th>
    	<th>Quantity</th>
    	<th>Sub Total</th></tr>
	<?php
		$cart = unserialize(serialize($_SESSION['cart']));
		$s=0; $index=0;
		for($i=0; $i<count($cart); $i++){
	?>
    <tr><td><a href="cart.php?index=<?php echo $index;?>">Delete</a></td>
    	<td align="center"><?php echo $cart[$i]->pronum; ?></td>
    	<td align="left"><?php echo $cart[$i]->proname; ?></td>
        <td align="right"><?php echo $cart[$i]->price; ?></td>
        <td align="right"><?php echo $cart[$i]->quantity; ?></td>
        <td align="right"><?php echo $cart[$i]->price * $cart[$i]->quantity.'$';?></td>
    </tr>
    <?php 
		$index++;
		$s += $cart[$i]->price * $cart[$i]->quantity;
		}
	?>
    <tr><td colspan="5" align="right">Sum</td>	
    <td align="right"><?php echo $s.'$';?></td></tr>
</table>
<br>
<a href="index.php">Continue Shopping</a>
