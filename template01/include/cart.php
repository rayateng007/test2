<?php
	session_start();
	require "db.php";
	require "item.php";
	if (isset($_GET['id']))
	{	
$result = mysqli_query($con,"select * from tb_products where id=".$_GET['id']);
		$data =  mysqli_fetch_object($result);
		$item = new item();
		$item->id=$data->id;
		$item->pro_name=$data->pro_name;
		$item->price=$data->price;
		$item->quantity=1;
//check product is existing in cart
		$index=-1;		
		$cart=unserialize(serialize($_SESSION['cart']));
		for($i=0; $i<count($cart); $i++)
			if($cart[$i]->id==$_GET['id'])
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
	<tr>
    	<th>Option</th>	
    	<th>ID</th>
    	<th>ProName</th>
    	<th>Price</th>
    	<th>Quantity</th>
    	<th>Sub Total</th>
    </tr>
	<?php
		$cart = unserialize(serialize($_SESSION['cart']));
		$s=0; $index=0;
		for($i=0; $i<count($cart); $i++){
	?>
    <tr><td><a href="cart.php?index=<?php echo $index;?>">Delete</a></td>
    	<td align="center"><?php echo $cart[$i]->id; ?></td>    
        <td align="left"><?php echo $cart[$i]->pro_name; ?></td>
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
<a href="../index.php">Continue Shopping</a>
