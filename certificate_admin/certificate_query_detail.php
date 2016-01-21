<?php ob_start();?>
<?php 
include('include/db.php');
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
<script type="text/javascript" src="js/hideSearchBox.js"></script>
<script type="text/javascript" src="js/delCert.js"></script>
</head>
<body>
  
  <div id="wrapper">
    <?php 
      include 'include/admin_nav.php';
    ?>
    <div id="page-wrapper">
      <div class="col-lg-12 pd-t-20">
              <span style="font-size:30px;" class="page-header">CERTIFICATE</span>
              <span style="float:right;"><a href="csv/certificate_detail_csv.php"style="color:#fff;" ><button class="btn btn-danger" id="download"/>Download CSV</a></span>
          </div>
            <div class="row">
                <div class="col-lg-12">
                        <span style="font-size:30px;" class="page-header"> </span>
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
                          QUERY  
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
                                            <th>MOBILE</th>
                                            <th>QUERY</th> 
                                            <th>PAGE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        
                                        $query = "SELECT * FROM certificate_query_tbl";
                                        $result = mysql_query($query);
                                        $i=1;
                                        while($values = mysql_fetch_array($result)){
                                                                
                                      ?>
                      <tr class="odd gradeX">
                          <td><?php echo $i; ?></td>
                          <td><?php echo strtoupper($values['fname'].' '.$values['lname']); ?></td>
                          <td><?php echo strtoupper($values['email']); ?></td>
                          <td><?php echo strtoupper($values['mobile']); ?></td>
                          <td><?php echo strtoupper($values['query']); ?></td>
                           <td><?php echo $values['query_from_page']; ?></td>
                           <td>
                            <a name="<?php echo $values['id']; ?>" class="deleteCert" style="cursor:pointer"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></button></a>
                            <!-- <a href="edit_payment.php?id=<?php echo $values['id'];?>" style="cursor:pointer"><button type="button" class="btn btn-success btn-circle"><i class="fa  fa-pencil"></i></button></a> -->
                            </td> 
                          
                         
                          
                                                           
                      </tr>
                   <?php  $i++ ; }  ?>  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
     
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

