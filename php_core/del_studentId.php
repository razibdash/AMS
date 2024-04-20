<?php
require("../config/configer.php");
 if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delData="DELETE FROM `student_id` WHERE id=$id";
         mysqli_query($connect,$delData);
        header("location:../Admin/add_alumni.php");
   
 }
?>