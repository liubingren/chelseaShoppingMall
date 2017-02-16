<?php
  include "DBHelper.php";

	 session_start();
	 $id=$_SESSION['id'];

	  $checkSql="SELECT * FROM listpage where id='$id';";
	  
	  $array=query($checkSql);
	  
	//	json转格式
	  echo json_encode($array, JSON_UNESCAPED_UNICODE);
?>