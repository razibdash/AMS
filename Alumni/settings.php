<!-- this is flowbite link -->
<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.css" integrity="sha512-ttaKI7P6G+denBpzGujwqjguFDsmxcxfVY+KovsyIpQ3vWbVdilbohqij8ewk16HN3vLghlCAXUWsl0KYQo6pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.js" integrity="sha512-bUju8VkXhCQgW7zCHSdiIDpECo/lqzChkKrKoc1v2PL2XqO/0Q2Y8dhu07+q6Rk+1c1xr6cfE0VZnumgwy93Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- this is flowbite link -->

   <?php
     require_once("navigation.php");
   ?>

    <?php
    require_once("aside.php");
    ?>
     
<!-- READ THE ALUMNI DATA FORM DATABASE    -->
<?php
 require("../config/configer.php");
 if(isset($_GET['user_id'])){
  $user_id=$_GET['user_id'];
  $readData = "SELECT * FROM `alumni` WHERE id=$user_id";
  $query=mysqli_query($connect,$readData);
  $data = mysqli_fetch_assoc($query);

  $id=$data['id'];
  $fname=$data['fname'];
  $lname=$data['lname'];
  $photo=$data['photo'];
  $bio=$data['bio'];
  $dept=$data['dept'];
  $email=$data['email'];
  $phone=$data['phone'];
  $cgpa=$data['cgpa'];
  $pass=$data['password'];
  $password=str_replace($pass,"*********",$pass);

 }

?>
<!-- READ THE ALUMNI DATA FORM DATABASE    -->
<div class="p-4 sm:ml-64 bg-[#DFF6FF]">
   <div class="p-4  border-gray-200  rounded-lg  mt-14">
            
        <div class="alumni flex justify-left gap-10  flex-wrap">
            <div class="info_alumni bg-[#FFF7E9] rounded-lg shadow-lg w-80">
               <div class="pro_pic flex bg-white p-3 m-2 justify-center items-center">
                   <img class=" w-32 h-32 p-3 mt-4 rounded-full" src="../image/<?php echo $photo ?>" alt="image Not Found!!">
               </div>
               <div class="infomation bg-white rounded-lg shadow-lg p-5 m-2 border-box">
                  <h1 class="mt-4 text-2xl font-extrabold dark:text-black">ID : <?php echo $id; ?></h1>
                  <h1 class="mt-4 text-lg font-bold dark:text-black">Full Name : <span class="text-lg font-normal text-gray-500 dark:text-gray-700"><?php echo $fname." ".$lname; ?></span></h1>
                  <h1 class="mt-4 text-lg font-bold dark:text-black">Department : <span class="text-lg font-normal text-gray-500 dark:text-gray-700"><?php echo $dept; ?></span></h1>
                  <h1 class="mt-4 text-lg font-bold dark:text-black">Bio : <span class="text-lg font-normal text-gray-500 dark:text-gray-700"><?php echo $bio; ?></span></h1>
                  <h1 class="mt-4 text-lg font-bold dark:text-black">Email : <span class="text-lg font-normal text-gray-500 dark:text-gray-700"><?php echo $email; ?></span></h1>
                  <h1 class="mt-4 text-lg font-bold dark:text-black">Password : <span class="text-lg font-normal text-gray-500 dark:text-gray-700"> <?php echo $password; ?></span></h1>
                  <h1 class="mt-4 text-lg font-bold dark:text-black">Phone : <span class="text-lg font-normal text-gray-500 dark:text-gray-700"><?php echo $phone; ?></span></h1>
                  <h1 class="mt-4 text-lg font-bold dark:text-black">CGPA : <span class="text-lg font-normal text-gray-500 dark:text-gray-700"><?php echo $cgpa; ?></span></h1>
               </div>
            </div>
            <div class="info_update bg-[#FFF7E9] rounded-lg shadow-lg p-4">
                <div class="profile_update bg-white rounded-lg shadow-lg p-5 mb-3">
                    <h1 class="text-2xl text-center">Change profile</h1>
                    <!-- CHNAGE PROFILE PICTURE -->
                    <?php
                       if(isset($_FILES['photo'])){
                        $photoName = $_FILES["photo"]["name"];
                        $photolocation = $_FILES["photo"]["tmp_name"];
                        $up_photo = "../image/".$photoName;
                        move_uploaded_file($photolocation,$up_photo);
                        $update_sql="UPDATE `alumni` SET `photo`='$photoName' WHERE id='$user_id'";
                        $up_sql_query= mysqli_query($connect,$update_sql);
                        if($up_sql_query){
                           echo "Updated";            
                         }else{
                           echo "Not Updated!";
                         }
                       }
                    ?>
                    <!-- CHNAGE PROFILE PICTURE -->
                  
                     <form action="settings.php?user_id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">                        
                            <label class="block mb-2 text-sm font-medium text-black-900 dark:text-black" for="file_input">Upload file</label>
                            <input name="photo" class="block w-full text-sm text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-white-50 dark:text-black-400 focus:outline-none dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" required>

                            <input type="submit" value="Update" class="text-white bg-blue-700 mt-3 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" />

                     </form>
                </div>

                 <div class="chnage-password bg-white rounded-lg shadow-lg p-5 mb-3">
                    <!-- CHNAGE PASSWORD SECTION -->
                    <?php
                       require("../config/configer.php");
                       $msgForPassword="";
                      if(isset($_POST['currentPassword']) && isset($_POST['prevpassword'])){
                        $prevpassword = $_POST['prevpassword'];
                        $currentPassword = $_POST['currentPassword'];

                        $sql="SELECT * FROM `alumni` WHERE id='$user_id'";
                        $sql_query=mysqli_query($connect,$sql);
                        $Pass=mysqli_fetch_assoc($sql_query);
                        $hashPass=$Pass['password'];

                        if(password_verify($prevpassword,$hashPass)){

                          $hash=password_hash($currentPassword,PASSWORD_DEFAULT); 

                          $update_pass = "UPDATE `alumni` SET `password`='$hash' WHERE id='$user_id'";

                          $up_pass_query = mysqli_query($connect,$update_pass);
                          if($up_pass_query){
                            $msgForPassword= "Updated";            
                          }else{
                            $msgForPassword= "Not Updated!";
                          }
                        }else{
                          $msgForPassword="Worng Previous Password!";
                          
                        }
                      }

                    ?>
                    <!-- CHNAGE PASSWORD SECTION -->
                     <h1 class="text-2xl text-center">Change Password</h1>
                     <form action="settings.php?user_id=<?php echo $id;?>" method="POST">
                       <h1 class="mt-1 text-red-600"><?php echo $msgForPassword; ?></h1>
                            <div>
                                <label for="prevpassword" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Previous password</label>
                                <input type="password" name="prevpassword" id="prevpassword" class="bg-white-50 border border-white-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="previous password" required />
                            </div>
                            <div>
                                <label for="currentPassword" class="block mb-2 mt-2 text-sm font-medium text-black-900 dark:text-black">Current Password</label>
                                <input type="password" name="currentPassword"  id="last_name" class="bg-white-50 border border-white-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="current password" required />
                            </div>
                           <div>
                           <input type="submit" value="Update" class="text-white bg-blue-700 mt-3 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" />
                        </form>
                    </div>
                 </div>
            </div>
            <div class="info-update bg-[#FFF7E9] rounded-lg shadow-lg p-4">
                  <div class="form-section bg-white p-5 shadow-lg rounded-lg">
                    <!-- UPDATE INFORMATION -->
                     <?php
                       if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone']) && isset($_POST['dept']) && isset($_POST['cgpa']) && isset($_POST['email']) && isset($_POST['bio'])){

                        $fName=$_POST['first_name'];
                        $lName=$_POST['last_name'];
                        $phoneNumber=$_POST['phone'];
                        $deptment=$_POST['dept'];
                        $CGPA=$_POST['cgpa'];
                        $emailAdd=$_POST['email'];
                        $bioUser=$_POST['bio'];

                        $info_update_sql="UPDATE `alumni` SET `fname`='$fName',`lname`='$lName',`phone`='$phoneNumber',`dept`='$deptment',`cgpa`='$CGPA',`email`='$emailAdd',`bio`='$bioUser' WHERE id='$user_id'";

                        $update_sql_query= mysqli_query($connect,$info_update_sql);
                        if($update_sql_query){
                           echo "Updated";            
                         }else{
                           echo "Not Updated!";
                         }

                       }
                     ?>
                    <!-- UPDATE INFORMATION -->
                  <h1 class="text-2xl text-center">Information Update</h1>
                            <form action="settings.php?user_id=<?php echo $id; ?>" method="POST">
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="first_name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">First name</label>
                                        <input type="text" name="first_name" id="first_name" value="<?php echo $fname ?>" class="bg-white-500 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
                                    </div>
                                    <div>
                                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Last name</label>
                                        <input type="text" name="last_name" value="<?php echo $lname ?>" id="last_name" class="bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
                                    </div>
                                    <div>
                                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Phone</label>
                                        <input type="text" value="<?php echo $phone ?>" id="company" name="phone" class="bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="017xxxxxxxx" required />
                                    </div>  
                                    
                                    <div>
                                        <label for="dept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Department</label>
                                        <input type="text" name="dept" id="dept" value="<?php echo $dept; ?>" class="bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required />
                                    </div>
                                    <div>
                                        <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">CGPA</label>
                                        <input type="number" name="cgpa"  id="visitors" value="<?php echo $cgpa ?>" class="bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="cgpa" required />
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email address</label>
                                    <input type="email" name="email" value="<?php echo $email; ?>" id="email" class="bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                                </div> 
                                <div class="mb-6">
                                    <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Bio</label>
                                    <input type="text" name="bio" value="<?php echo $bio; ?>" id="bio" class="bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                                </div> 

                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                            </form>

                  </div>
            </div>
            
        </div>
  
   </div>
</div>


