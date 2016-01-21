<?php
include('../include/db.php');
   if($_POST['id'])
    {
      $id = $_POST['id'];
      $query = "DELETE FROM attend_web_session WHERE id = '$id'";
      $result = mysql_query($query);

    }
?>