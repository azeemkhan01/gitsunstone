<?php
include('../include/db.php');
   if($_POST['id'])
    {
      $id = $_POST['id'];
      $query = "DELETE FROM counselling_form WHERE id = '$id'";
      $result = mysql_query($query);

    }
?>