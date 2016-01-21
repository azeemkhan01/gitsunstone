<?php
include('../include/db.php');
   if($_POST['id'])
    {
      $id = $_POST['id'];
     $query = "DELETE FROM certificate_query_tbl WHERE id = $id";
      $result = mysql_query($query);

    }
?>