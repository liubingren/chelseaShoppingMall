<?php
    include 'DBHelper.php';
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
	$deleteid=_post("id");
	session_start();
	$account = $_SESSION["account"];
	$checkSql = "select product from cart where account='$account'";
	$array = query($checkSql)[0];
	print_r($array);
	$new_pro= json_decode($array->product,true);
	print_r($new_pro);
//第一种做法
//	function array_remove($data, $key){  
//	    if(!array_key_exists($key, $data)){  
//	        return $data;  
//	    }  
//	    $keys = array_keys($data);  
//	    $index = array_search($key, $keys);  
//	    if($index !== FALSE){  
//	        array_splice($data, $index, 1);  
//	    }  
//	    return $data;  
//	  
//	} 
//	$result = array_remove($new_pro,$deleteid); 
//	var_dump($result);
//	if(count($result)==0){
//		$product = '{}';
//	}else{
//		$product = json_encode((object)$result);
//	}

//另一种方法
    $keys = array_keys($new_pro);  
	$index = array_search($deleteid,$keys);   
	array_splice($new_pro,$index,1);
	if(count($new_pro)==0){
		$product = '{}';
	}else{
		$product = json_encode((object)$new_pro);
	}
	print_r($product);
	$sql="update cart set product='$product' where account='$account'";
	$result=excute($sql);
	if($result){
		echo '{"state": true, "message":"add success!"}';
	}else{
		echo '{"state": false, "message": "add fail!"}';
	} 
?>