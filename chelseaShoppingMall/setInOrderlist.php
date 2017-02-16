<?php
	include 'DBHelper.php';
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
    $total= _post('total');
    $length= _post('length');
    session_start();
    $obj=$_SESSION['obj'];
    $account=$_SESSION['account'];
    $new_obj=json_encode($obj);
    $time=time();
    $sql="INSERT INTO orderlist(ordernumber,account,product,total,length) VALUES('$time','$account','$new_obj','$total','$length');";
    excute($sql); 
    echo "set in orderlist succsse!";
?>