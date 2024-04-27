<?php

require("../config/configer.php");

session_start();
 $error="";
if(empty($_SESSION['user_id'])){

if(isset($_POST['id']) && isset($_POST['password']) ){

    $s_id=$_POST['id'];
    $password=$_POST['password'];

   if(!empty($s_id) && !empty($password)){
         
    //  $sql="SELECT id FROM `alumni` WHERE id='$s_id' AND password='$password'";
     $sql="SELECT * FROM `alumni` WHERE id='$s_id'";

     $sql_query=mysqli_query($connect,$sql);

      $num=mysqli_num_rows($sql_query);

     if($num==1){
        while($data=mysqli_fetch_assoc($sql_query)){

              $data['id'];
            if(password_verify($password,$data['password'])){

                $_SESSION['user_id']=$s_id;

                if(!headers_sent()){
                  header("Location:../Alumni/dashboard.php?user_id=$s_id");
                }else{
                  echo '<script type="text/javascript">window.location.href="../Alumni/dashboard.php?user_id=$s_id"</script>';     
                  }
            // }else{
            //   $error= "invalid Student ID or password";
            //   if(!headers_sent()){
            //     header("Location:../alumni_login.php?error=$error");
            // }else{
            //     echo '<script type="text/javascript">window.location.href="../alumni_login.php?error=$error"</script>';
                
            // }
      
          }
        }    
    }
   }else{
      echo "test";
   }
  }
}
?>