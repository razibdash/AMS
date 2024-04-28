<?php
require("../config/configer.php");
 if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delData="DELETE FROM `contact` WHERE id=$id";
         mysqli_query($connect,$delData);
        header("location:../Admin/massage.php");
   
 }
?>