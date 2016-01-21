<?php ob_start();?>
<?php 
include('include/db1.php');
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
    <link rel="stylesheet" type="text/css" href="css/new.css" />
    <?php 
    include 'include/admin_header.php';
   $getIdFromUrl = $_GET['id'];
 ?>
<input type="hidden" id="getId" value="<?php echo $getIdFromUrl; ?>">
<input type="hidden" id="getType" value="<?php echo $getTypeFromUrl; ?>">
  
     <script type="text/javascript" src="js/hideSearchBox.js"></script>
</head>
<body>
  <div id="wrapper">
      <?php 
        include 'include/admin_nav.php';
      ?>
      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:30px;" class="page-header">EDIT FUNTEXTUAL</span>
          <span style="float:right;"><a href="funtexual.php"style="color:#fff;" ><button class="btn btn-info  " /><i class="fa fa-arrow-left"></i></a></span>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form action="" method="post" id="meaning_update_form">
                                        <div class="form-group">
                                            <label>SELECT CATEGORY</label>
                                            <select class="form-control" name="sentence_category" id="sentence_category">
                                            <?php 
                                                $query = "SELECT * FROM category_tbl where status=1 ORDER BY category_name ASC";
                                                $result = mysql_query($query);
                                                while($values = mysql_fetch_array($result)){
                                            ?>
                                                <option value="<?php echo $values['category_name']; ?>" <?php if($values['category_name']== $getTypeFromUrl) echo 'selected="selected"'; ?>><?php echo strtoupper($values['category_name']); ?></option>
                                            <?php
                                              }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ENTER SENTENCE </label>
                                            <?php 
                                                $id_sentence = $getIdFromUrl;
                                                $table_type_sentence = $getTypeFromUrl;
                                                 $table_sentence = 'tbl_'.$table_type_sentence.'_sentence';
                                                 $query_sentence = "select * from  $table_sentence where id=$id_sentence";
                                                 $result_sentence =mysql_query($query_sentence);
                                                 $values_sentence = mysql_fetch_array($result_sentence);
                                            ?>
                                            <input class="form-control" id="sentence_edit"name="sentence" type="text" value="<?php echo $values_sentence['text_sentence']; ?>" >
                                        </div>
                                        <div id="divID">   
                                        </div>
                                        <button type="button" name="update_btn" id="update_btn" class="btn btn-primary">UPDATE SENTENCE  </button>
                                        <a href="funtexual.php"><button type="button"  class="btn btn-danger">CANCEL </button></a>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
  </div>
  <?php 
  include 'include/admin_footer.php';
  ?>
</body>
</html>
