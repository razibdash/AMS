<?php
  require_once("header.php");
?>
  <div class="loginSection">
     <div class="container">
     <div class="login-part bg-[#015967] shadow-md max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
         <div class="admin-login bg-[#015967] p-10 rounded scroll-p-5 shadow-md">
            <svg class="w-20 h-20 m-auto text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M10 5a2 2 0 0 0-2 2v3h2.4A7.48 7.48 0 0 0 8 15.5a7.48 7.48 0 0 0 2.4 5.5H5a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1V7a4 4 0 1 1 8 0v1.15a7.446 7.446 0 0 0-1.943.685A.999.999 0 0 1 12 8.5V7a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M10 15.5a5.5 5.5 0 1 1 11 0 5.5 5.5 0 0 1-11 0Zm6.5-1.5a1 1 0 1 0-2 0v1.5a1 1 0 0 0 .293.707l1 1a1 1 0 0 0 1.414-1.414l-.707-.707V14Z" clip-rule="evenodd"/>
            </svg>

            <h1 class="mb-4 text-2xl text-center font-extrabold text-gray-900 dark:text-white md:text-3xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Verify Yo</span>ur Id</h1>
            <?php
              require("config/configer.php");
               if(isset($_POST['studentId'])){
                  $studentId=$_POST['studentId'];
                  if(!empty($studentId)){
                      
                    $sql="SELECT id FROM `student_id` WHERE id='$studentId'";

                    $sql_query=mysqli_query($connect,$sql);

                    $mysqli_num_rows=mysqli_num_rows($sql_query);

                    if($mysqli_num_rows){

                        if(!headers_sent()){
                            header('Location:registration.php?regists');
                        }else{
                            echo '<script type="text/javascript">window.location.href="registration.php"</script>';
                            
                        }
                      
                    }else{
                       echo "<p class='text-red-400 '>Wrong ID Try Again?</p>";
                    }
                  }else{
                    echo"Enter Your ID";
                  }
               }
            ?>

              <form class="max-w-sm mx-auto" action="check_id.php" method="POST">
              <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student ID</label>
              <div class="relative">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                      <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                      <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                  </div>
                  <input type="text" name="studentId" id="id" id="id-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Student Id" required>
                </div>

                <div class="submit flex justify-between items-center">
                <input type="submit" class="mt-4
                text-white bg-[#015967] hover:bg-[#015967] focus:ring-4 focus:bg-[#015967] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#015967] dark:hover:bg-[#015967] focus:outline-none dark:focus:ring-blue-800 border-solid border-2 border-sky-500" value="Check Now">
                <p class="text-gray-500 dark:text-gray-400"> <a class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline" href="alumni_login.php">Login</a></p>
                </div>               
              </form>
          </div>
         </div>
       </div>
     </div>
  </div>
<?php 
  require_once("footer.php");
?>