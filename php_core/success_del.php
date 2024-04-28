<?php
require("../config/configer.php");
 if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delData="DELETE FROM `success_story` WHERE id=$id";
         mysqli_query($connect,$delData);
        header("location:../Admin/success_story.php");
   
 }
?>