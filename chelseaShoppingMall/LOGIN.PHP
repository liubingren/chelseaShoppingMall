<?php 
  include "DBHelper.php";
  
		function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
  $account= _post('account');
  $pwd=_post('pwd');

 
  $checkSql="select * from student where account='$account' and password='$pwd';";
  
  $array=query($checkSql);
  $sql="INSERT INTO cart(account) VALUES('$account');";
  if(count($array)>0){
	excute($sql);
	  echo '{"state":true,"message":"login success!"}';
  	session_start();
	  $_SESSION['account']=$account;
  }else{
	   echo '{"state":false,"message":"login fail!"}';
  }
  ?>