<?php
	include 'DBHelper.php';
	session_start();
	$account = $_SESSION['account'];
	$sql = "select product from cart where account = '$account';";
	$array =json_decode(query($sql)[0]->product);
	$products = array();
	foreach($array as $key => $value) 
	{
		$sql_se = "select * from listpage where id='$key';";
		$product = query($sql_se)[0];
		$product->number= $value;
		$products[] =  $product;
	} 
	$products=json_encode($products);
	echo $products;
?>