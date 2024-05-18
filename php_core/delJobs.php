<?php
require("../config/configer.php");
 if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delData="DELETE FROM `jobs` WHERE id=$id";
         mysqli_query($connect,$delData);
        header("location:../Admin/posted_job.php");
   
 }
?>