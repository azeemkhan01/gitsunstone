<?php ob_start();?>
<?php 
include('include/db.php');
// include('include/db1.php');
error_reporting(0);
session_start();
if($_SESSION['user_type'] != 'admin_sunstone_mp'){
header ('location:index.php');
}
?>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php 
include 'include/admin_header.php';
?>
</head>
<body>
	<div id="wrapper">
		<?php 
			include 'include/admin_nav.php';
		?>
		 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DASHBOARD</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="certificate_query_detail.php">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-question fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query = "SELECT * FROM certificate_query_tbl";
                                            $result = mysql_query($query);
                                            $value = mysql_num_rows($result);
                                        ?>
                                        <div class="huge"><?php echo $value; ?></div>
                                        <div>CERTIFICATE QUERY</div>
                                    </div>
                                </div>
                            </div>
                            <a href="certificate_query_detail.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="camp.php">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-briefcase fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $count_query = "SELECT * FROM campaign_tbl";
                                            $count_result = mysql_query($count_query);
                                            $count_value = mysql_num_rows($count_result);
                                        ?>
                                        <div class="huge"><?php echo $count_value; ?></div>
                                        <div>CAMPAIGN </div>
                                    </div>
                                </div>
                            </div>
                            <a href="camp.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="payment_detail.php">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-rupee fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $host_name="localhost";
                                            $user_name="taogreen_edit";
                                            $password="Editsoft@123";
                                            $data_base="taogreen_editsoft_sunstonenew";


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
                                            $co_query = "SELECT * FROM payment_info";
                                            $co_result = mysql_query($co_query);
                                            $co_value = mysql_num_rows($co_result);
                                        ?>
                                        <div class="huge"><?php echo $co_value; ?></div>
                                        <div>COURSE PAYMENT </div>
                                    </div>
                                </div>
                            </div>
                            <a href="payment_detail.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </a>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <a href="connectwithus.php">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comment  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $host_name="localhost";
                                            $user_name="taogreen_edit";
                                            $password="Editsoft@123";
                                            $data_base="taogreen_editsoft_sunstonenew";


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
                                            $coc_query = "SELECT * FROM connect_tbl";
                                            $coc_result = mysql_query($coc_query);
                                            $coc_value = mysql_num_rows($coc_result);
                                        ?>
                                        <div class="huge"><?php echo $coc_value; ?></div>
                                        <div>COURSE PAYMENT </div>
                                    </div>
                                </div>
                            </div>
                            <a href="connectwithus.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="prepaymentinfo.php">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-inr fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $host_name="localhost";
                                            $user_name="taogreen_edit";
                                            $password="Editsoft@123";
                                            $data_base="taogreen_editsoft_sunstonenew";


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
                                            $cop_query = "SELECT * FROM pre_payment_info";
                                            $cop_result = mysql_query($cop_query);
                                            $cop_value = mysql_num_rows($cop_result);
                                        ?>
                                        <div class="huge"><?php echo $cop_value; ?></div>
                                        <div>COURSE PRE PAYMENT </div>
                                    </div>
                                </div>
                            </div>
                            <a href="prepaymentinfo.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </a>
                </div>

    
               

            </div>


                

     
            <!-- /.row Area Chart -->
           
                
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->










            
        </div>
        <!-- /#page-wrapper -->
	
	</div>
	<?php 
	include 'include/admin_footer.php';
	?>
</body>
</html>

