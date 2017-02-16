<?php
   include "DBHelper.php";
  
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
  $totalprice= _post('totalprice');
  $obj= _post('obj');
  session_start();
  $_SESSION['totalprice']=$totalprice;
  $_SESSION['obj']=$obj;
  
  echo 'ok';
?>