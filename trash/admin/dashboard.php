<?php ob_start();?>
<?php 
include('include/db.php');
error_reporting(0);
session_start();
if($_SESSION['user_type'] != 'admin_sunstone'){
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
                    <a href="brochure_request.php">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query = "SELECT * FROM download_brochure";
                                            $result = mysql_query($query);
                                            $value = mysql_num_rows($result);
                                        ?>
                                        <div class="huge"><?php echo $value; ?></div>
                                        <div>BROCHURE REQ</div>
                                    </div>
                                </div>
                            </div>
                            <a href="brochure_request.php">
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
                    <a href="web_session.php">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $count_query = "SELECT * FROM attend_web_session";
                                            $count_result = mysql_query($count_query);
                                            $count_value = mysql_num_rows($count_result);
                                        ?>
                                        <div class="huge"><?php echo $count_value; ?></div>
                                        <div>WEB SESSION</div>
                                    </div>
                                </div>
                            </div>
                            <a href="web_session.php">
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
                    <a href="query_info.php">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query_info = "SELECT * FROM query_table";
                                            $result_info = mysql_query($query_info);
                                            $value_info = mysql_num_rows($result_info);
                                        ?>
                                        <div class="huge"><?php echo $value_info; ?></div>
                                        <div>QUERY INFO</div>
                                    </div>
                                </div>
                            </div>
                            <a href="query_info.php">
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
                    <a href="counselling_info.php">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query_con = "SELECT * FROM counselling_form";
                                            $result_con = mysql_query($query_con);
                                            $value_con = mysql_num_rows($result_con);
                                        ?>
                                        <div class="huge"><?php echo $value_con; ?></div>
                                        <div>COUNSELLING INFO</div>
                                    </div>
                                </div>
                            </div>
                            <a href="counselling_info.php">
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

