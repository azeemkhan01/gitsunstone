<?php
include('../include/db1.php');
   if($_POST['id'])
    {
      $id = $_POST['id'];
     $query = "DELETE FROM connect_tbl WHERE id = $id";
      $result = mysql_query($query);

    }
?>