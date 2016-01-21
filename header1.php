<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php 
error_reporting(0);
ob_start();
session_start();
include("submit.php");
$pageName = basename($_SERVER['PHP_SELF']);
$pageName = preg_replace('/\\.[^.\\s]{3,4}$/', '', $pageName);
$checkpages="SELECT * FROM pages WHERE page_name = '$pageName'";
$rspages = mysql_query($checkpages);
$datapages = mysql_num_rows($rspages);
$valuescheck = mysql_fetch_array($rspages);
$form_status = $valuescheck['contact_form_status'];
$_SESSION["contact_form_status"] = $form_status;
if($datapages > 0 ) {
    
}

else
{
   
    $newpage ="INSERT INTO pages(page_name)values('$pageName')";
    if (mysql_query($newpage))
    {
       
    }
    else
    {
        echo "Error adding Page in database<br/>";
    }
}
 // echo '<pre>';print_r($_SESSION);die;
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sunstone Business School-India's largest management program for working professionals</title>
        <meta name="description" content="">
        <meta name="google-signin-client_id" content="235714740019-uf2n0vqn3403ji3smjqmn1lac62pnk5a.apps.googleusercontent.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">		    
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
         
		
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700"> -->
        <link rel="stylesheet" href="css/animate.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/flexslider.css">
        
        <script src="js/modernizr.js"></script>
        <script src="js/modernizr.custom.25376.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/google.js"></script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$(".loader").fadeOut("slow");
			})
        </script>    
           
    