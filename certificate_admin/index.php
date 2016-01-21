<?php ob_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
error_reporting(0);
include('include/db.php');

session_start();
if($_SESSION['user_type'] == 'admin_sunstone_mp')
{
	header ('location:dashboard.php');
}
		if(isset($_POST['login']))
		{
			$admin_user_name = $_POST['admin_user_name'];
			$admin_password = md5($_POST['admin_password']);
			
			$query_login =" SELECT * FROM admin_login where admin_user_name= '$admin_user_name' and admin_password='$admin_password' and user_type='admin_sunstone_mp'"; 
			$login_result =mysql_query($query_login);
			$row=mysql_fetch_array($login_result);
			// echo '<pre>';print_r($row);die;
			if($row)
			{
				$_SESSION['admin_user_name'] = $row['admin_user_name'];
				$_SESSION['user_type'] = $row['user_type'];
				header ('location:dashboard.php');
			}
			else
			{
				 $msg = 'Please Enter Correct Username and password ';
				
			}
		}
?>


<head>
<style>
.header1{
position: absolute;
top: calc(50% - 35px);
left: calc(50% - 255px);
z-index: 2;
color: #FFF;
font-family: "Exo",sans-serif;
font-size: 35px;
font-weight: 200;
}
.header1 div span {
color: #5379FA !important;
}
</style>
  <meta charset="UTF-8">

  <title>Admin Login</title>
  <link rel="stylesheet" href="css/adminLogin.css">
    <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header1">
			<div>Admin<span>Login</span></div>
		</div>
		<br>
		
		<div class="login">
		<span style="color:red;font-size:14px;"> <?php  echo $msg; ?></span>
			<form action="" method="post">
				<input type="text" placeholder="username" name="admin_user_name" value="<?php if(isset($_POST['admin_user_name'])) echo $_POST['admin_user_name'];?>" required><br>
				<input type="password" name="admin_password" placeholder="password" required><br>
				<input type="submit" name="login" value="Login" class="btnclass">
			</form>
		</div>

  
   <script src="js/jquery.js"></script>

</body>

</html>