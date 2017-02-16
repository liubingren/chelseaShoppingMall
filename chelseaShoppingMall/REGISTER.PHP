<?php 
  include "DBHelper.php";
  
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
  $account= _post('account');
  $pwd=_post('pwd');

  $sql="INSERT INTO student(account,password) VALUES('$account', '$pwd')";

  $checkSql="select * from student where account='$account';";
  
  $array=query($checkSql);
  
  if(count( $array)>0){
	  echo '{"state":false,"message":"account already exists!"}';
  }else{
	  $result=excute($sql);
	  if($result){
		 echo '{"state":true,"message":"register success!"}'; 
	  }else{
		  echo '{"state":false,"message":"register fail!"}';
	  }
  }
  ?>