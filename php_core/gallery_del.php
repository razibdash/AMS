<?php
require("../config/configer.php");
 if(isset($_GET['del']) && $_GET['user_id']){
    $id = $_GET['del'];
    $user_id=$_GET['user_id'];
    $delData="DELETE FROM `gallery` WHERE id=$id";
         mysqli_query($connect,$delData);
        header("location:../Alumni/gallery.php?user_id=$user_id");
   
 }
?>