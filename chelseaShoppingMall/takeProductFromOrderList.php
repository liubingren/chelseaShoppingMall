<?php
	include 'DBHelper.php';
    session_start();
	$account = $_SESSION['account'];
	$sql = "select product,account,ordernumber,total,length from orderlist where account = '$account';";
//	print_r(query($sql));
	$Big_products = array();
	$big_products = array();
	for($i=0;$i<count(query($sql));$i++){
		$array =json_decode(query($sql)[$i]->product);
		$products = array();
		foreach($array as $key => $value) 
		{
			$sql_se = "select * from listpage where id='$key';";
			$product = query($sql_se)[0];
			$product->number= $value;
			$products[] =  $product;
		} 
        $big_products['product']=$products;
	    $big_products['ordernumber']=query($sql)[$i]->ordernumber;
	    $big_products['total']=query($sql)[$i]->total;
	    $big_products['length']=query($sql)[$i]->length;
	    $Big_products[]=$big_products;
	}
	echo json_encode($Big_products);
//	print_r($big_products);
//	$array =json_decode(query($sql)[0]->product);
//	$products = array();
//	foreach($array as $key => $value) 
//	{
//		$sql_se = "select * from listpage where id='$key';";
//		$product = query($sql_se)[0];
//		$product->number= $value;
//		$products[] =  $product;
//	} 
//	$products=json_encode($products);
//	echo $products;
?>