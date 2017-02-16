<?php
    include 'DBHelper.php';
    function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
	$id=_post("id");
	$number=_post("number");
	session_start();
	$account = $_SESSION["account"];
	$checkSql = "select product from cart where account='$account'";
	$array = query($checkSql)[0];
	$new_pro= json_decode($array->product);
	if($number>1){
		$new_pro->$id =$number;
	}
	if($number<=1){
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