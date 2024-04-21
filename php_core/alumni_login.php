<?php

require("../config/configer.php");


if(isset($_POST['id']) && isset($_POST['password']) ){
    $s_id=$_POST['id'];
    $password=$_POST['password'];
   if(!empty($s_id) && !empty($password)){
         
     $sql="SELECT id FROM `alumni` WHERE id='$s_id' AND password='$password'";

     $sql_query=mysqli_query($connect,$sql);

     $mysqli_num_rows=mysqli_num_rows($sql_query);

     if($mysqli_num_rows){

       if(!headers_sent()){
         header("Location:../Alumni/dashboard.php?user_id=$s_id");
     }else{
         echo '<script type="text/javascript">window.location.href="../Alumni/dashboard.php?user_id=$s_id"</script>';
         
     }
      
    }else{
        echo "<h2>invalid Student is or password</h2>";
    }

   }else{
      echo "invalid Student is or password";
   }
  }

?>