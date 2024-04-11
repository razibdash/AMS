 <!-- this is login system -->
 <?php
           require("../config/configer.php");

           session_start();

           if( empty($_SESSION['user_id'])){

              if(isset($_POST["email"]) && isset($_POST["password"])){

                 $email= $_POST["email"];
                 $password= $_POST["password"];

                 if(!empty($email) && !empty($password)){

                    $sql="SELECT ID FROM `admin` WHERE email='$email' AND password='$password'";

                    $sql_query=mysqli_query($connect,$sql);

                    $mysqli_num_rows=mysqli_num_rows($sql_query);

                    if($mysqli_num_rows){

                       $data= mysqli_fetch_array($sql_query);
                       $id = $data['id'];

                       $_SESSION['user_id']=$id;

                       header("location:../Admin/admin.php");
                    }else{
                        header("location:../login.php?invalid");
                    }

                 }else{
                   header("location:../login.php");
                 }
              }
            }else{
               header("location:../login.php");
            }
          ?>