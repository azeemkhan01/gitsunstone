<?php
/*Post Values from Inquery  Form Saved in This Module */
include('db.php');
echo "<pre>";print_r($_POST);die;
    if ($_POST) {
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('d-m-Y,g:i a');
       $name = $_POST['name'];
       $email = $_POST['email'];
       $msg = $_POST['msg'];
       $query = "INSERT INTO query_table(name,email,msg,created_on)
                  VALUES('$name','$email','$msg','$created_on')";
       $result = mysql_query($query); 
  }    
  ?>        
