<?php ob_start();?>
<?php
error_reporting(0);
include('include/db.php');
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
    <link rel="stylesheet" type="text/css" href="css/new.css" />
    <?php 
    include 'include/admin_header.php';
    ?>
   <!-- Script to delete category -->
    <script type="text/javascript" src="js/deleteQueryUser.js"></script>
    <!--  Script to hide Search Box -->
     <script type="text/javascript" src="js/hideSearchBox.js"></script>
     
    
</head>
<body>
  <div id="wrapper">
      <?php 
        include 'include/admin_nav.php';
      ?>
     <div id="page-wrapper">
          <div class="col-lg-12 pd-t-20">
              <span style="font-size:30px;" class="page-header">BROCHURE DOWNLOAD REQUEST</span>
              <span style="float:right;"><a href="csv/query_export.php"style="color:#fff;" ><button class="btn btn-danger" id="download"/>Download CSV</a></span>
          </div>
                <div class="row">
                    <div class="col-lg-12">
                          <span style="float:right;">
                            <a href="dashboard.php"style="color:#fff;" >
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
                                  <div style="font-family: fantasy;float:right;">
                                  </div>
                                  
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>MESSAGE</th>
                                                <th>CREATED</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $query = "SELECT * FROM query_table ORDER BY id ASC";
                                              $result = mysql_query($query);
                                              $i=1;
                                              while($values = mysql_fetch_array($result)){
                                            ?>
                                                  <tr class="odd gradeX">
                                                      <td><?php echo $i; ?></td>
                                                      <td><?php echo strtoupper($values['name']); ?></td>
                                                      <td><?php echo strtoupper($values['email']); ?></td>
                                                      <td><?php echo strtoupper($values['msg']); ?></td>                                    
                                                      <td><?php echo strtoupper($values['created_on']); ?></td>                                    
                                                      <td>
                                                        <a name="<?php echo $values['id']; ?>" class="deleteQueryUser" style="cursor:pointer">
                                                          <button type="button" class="btn btn-danger btn-circle">
                                                            <i class="fa fa-trash-o"></i>
                                                          </button>
                                                        </a>
                                                      </td>
                                                  </tr>
                                            <?php
                                                $i++;
                                              }
                                            ?>
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
  include 'include/admin_footer.php';
  ?>
</body>
</html>