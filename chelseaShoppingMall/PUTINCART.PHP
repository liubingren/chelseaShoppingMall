<?php
    include 'DBHelper.php';
	session_start();
	$account = $_SESSION["account"];
	$id=$_SESSION["id"];
	$checkSql = "select product from cart where account='$account'";
	$array = query($checkSql)[0];
	print_r($array);
	$new_pro= json_decode($array->product);
	print_r($new_pro);
	print_r($new_pro->$id);
	if(isset($new_pro->$id)){
		$new_pro->$id = $new_pro->$id + 1;
	}else{
		$new_pro->$id = 1;
	}
	$product = json_encode($new_pro);
	print_r($product);
	$sql="update cart set product='$product' where account='$account'";
	$result=excute($sql);
	if($result){
		echo '{"state": true, "message":"add success!"}';
	}else{
		echo '{"state": false, "message": "add fail!"}';
	} 
?>