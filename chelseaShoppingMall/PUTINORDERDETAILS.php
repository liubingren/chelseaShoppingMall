<?php
    include 'DBHelper.php';
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
	$orderDetailsid=_post("id");
    $count=_post("count");
    session_start();
    $_SESSION['count']=$count;
    $_SESSION['orderDetailsid']=$orderDetailsid;
    
?>