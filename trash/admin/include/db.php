<?php
$host_name="localhost";
$user_name="editsoft_team";
$password="Team@123";
$data_base="editsoft_sunstone_new";

// $host_name="localhost";
// $user_name="root";
// $password="";
// $data_base="sunstone_new";


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
  $base_url = $_SERVER['HTTP_HOST'].'/final-7-sunstone/admin/';

?>