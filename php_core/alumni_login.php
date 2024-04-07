 <!-- this is login system -->
 <?php
           require("../config/configer.php");

              if(isset($_POST["email"]) && isset($_POST["password"])){

                 $email= $_POST["email"];
                 $password= $_POST["password"];

                 if(!empty($email) && !empty($password)){

                    $sql="SELECT ID FROM `admin` WHERE email='$email' AND password='$password'";

                    $sql_query=mysqli_query($connect,$sql);

                    $mysqli_num_rows=mysqli_num_rows($sql_query);

                    if($mysqli_num_rows){
                       header("location:../Admin/admin.php");
                    }else{
                        header("location:../login.php");
                       echo "invalid email or password!";
                    }

                 }else{
                   header("location:../login.php");
                 }
              }
          ?>