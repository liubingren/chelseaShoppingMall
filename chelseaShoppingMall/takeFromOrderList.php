<?php
	include 'DBHelper.php';
    session_start();
    $account=$_SESSION['account'];
    $checkSql="SELECT * FROM orderlist where account='$account';";
	  
	$array=query($checkSql);
    
    $new_array=json_encode($array);
    print_r($new_array);
?>