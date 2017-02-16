<?php
  include "DBHelper.php";
  
    $id=$_POST['id'];
	 session_start();
	 $_SESSION['id']=$id;
?>