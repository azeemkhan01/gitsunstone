<?php
$host_name="localhost";
$user_name="taogreen_edit";
$password="Editsoft@123";
$data_base="taogreen_certificate";



$con = mysql_connect($host_name,$user_name,$password);
if ($con)
  {
	$link=mysql_select_db($data_base);
	if($link)
		$msg="";
	    
	else
		echo $msg="data base not selected";
	
  }
else
 {
	echo $msg="connection is not created";
  }
  

?>