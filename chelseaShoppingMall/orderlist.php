<?php
	include "DBHelper.php";
	
    session_start();
    $obj = $_SESSION['obj'];;
    
	foreach($obj as $key => $value) 
	{
		$sql_se = "select * from listpage where id='$key';";
		$product = query($sql_se)[0];
		$product->number= $value;
		$products[] =  $product;
	} 
	$products=json_encode($products);
	echo $products;
?>