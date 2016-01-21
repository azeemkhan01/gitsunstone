<?php
error_reporting(0);
include('include/db.php');
session_start();
if($_SESSION['user_type'] != 'admin_sunstone'){
header ('location:admin.php');
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
    <script>

   $(document).ready(function(){
		$(".dataTables_filter").find(function(){
			$("#dataTables-example_filter").hide();
		});
    });


    </script>
</head>
<body>
	<div id="wrapper">
		<?php 
			include 'include/admin_nav.php';
		?>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                        <span style="font-size:30px;" class="page-header">USER</span>
                          <span style="float:right;">
                            <a href="counselling_info.php"style="color:#fff;" >
                              <button class="btn btn-info"/>
                              <i class="fa fa-arrow-left"></i>
                            </a>
                          </span>
                    </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                               Details
                            </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>CONTACT</th>
                                            <th>QUES 1</th>
                                            <th>QUES 2</th>
                                            <th>QUES 3</th>
                                            <th>COUNSELOR KNOW ABOUT YOU</th>
											<th>CREATED</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$id = $_GET['id'];
										$query = "SELECT * FROM counselling_form where id = '$id'";
										$result = mysql_query($query);
										$i=1;
										while($values = mysql_fetch_array($result)){
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo strtoupper($values['name']); ?></td>
                                            <td><?php echo strtoupper($values['email']); ?></td>
                                            <td><?php echo strtoupper($values['contact']); ?></td>
                                            <td><?php echo strtoupper($values['ques_1']); ?></td>
                                            <td><?php echo strtoupper($values['ques_2']); ?></td>                                         
                                            <td><?php echo strtoupper($values['ques_3']); ?></td>                                         
                                            <td><?php echo strtoupper($values['counselor_to_know_about_you']); ?></td>                                       
                                            <td><?php echo strtoupper($values['created_on']); ?></td>                                       
                                        </tr>
									 <?php }?>	
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->
	</div>
	<?php 
	include 'admin_footer.php';
	?>
</body>
</html>