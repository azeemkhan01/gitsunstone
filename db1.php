<?php
$host_name="localhost";
$user_name="azeemkha_team";
$password="Team@123";
$data_base="azeemkha_sunstone_certificate";




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