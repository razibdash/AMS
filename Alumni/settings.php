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
  $password=$data['password'];
 }

?>
<!-- READ THE ALUMNI DATA FORM DATABASE    -->
<div class="p-4 sm:ml-64 bg-[#DFF6FF]">
   <div class="p-4  border-gray-200  rounded-lg  mt-14">
            
        <div class="alumni flex justify-left gap-10  flex-wrap">
            <div class="info_alumni bg-[#FFF7E9] rounded-lg shadow-lg w-80">
               <div class="pro_pic flex  justify-center items-center">
                   <img class=" w-32 h-32 p-3 mt-4 rounded-full" src="../image/<?php echo $photo ?>" alt="image Not Found!!">
               </div>
               <div class="infomation p-3 m-3 border-box">
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
                    <h1 class="text-2xl text-center">profile update</h1>
                     <form action="" method="POST">
                        
                            <label class="block mb-2 text-sm font-medium text-black-900 dark:text-black" for="file_input">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                            <input type="submit" value="Update" class="text-white bg-blue-700 mt-3 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" />

                     </form>
                </div>

                 <div class="chnage-password bg-white rounded-lg shadow-lg p-5 mb-3">
                     <h1 class="text-2xl text-center">Change Password</h1>
                     <form action="">
                            <div>
                                <label for="prevpassword" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Preveous password</label>
                                <input type="password" name="prevpassword" id="prevpassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="preveous password" required />
                            </div>
                            <div>
                                <label for="currentPassword" name="currentPassword" class="block mb-2 mt-2 text-sm font-medium text-black-900 dark:text-black">Current Password</label>
                                <input type="password" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="current password" required />
                            </div>
                           <div>
                           <input type="submit" value="Update" class="text-white bg-blue-700 mt-3 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" />
                        </form>
                    </div>
                 </div>
            </div>
            <div class="info-update bg-[#FFF7E9] rounded-lg shadow-lg p-4">
                  <div class="form-section bg-white p-5 shadow-lg rounded-lg">
                  <h1 class="text-2xl text-center">Information Update</h1>
                            <form>
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="first_name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">First name</label>
                                        <input type="text" id="first_name" value="<?php echo $fname ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
                                    </div>
                                    <div>
                                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Last name</label>
                                        <input type="text" value="<?php echo $lname ?>" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
                                    </div>
                                    <div>
                                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Phone</label>
                                        <input type="text" value="<?php echo $phone ?>" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required />
                                    </div>  
                                    <div>
                                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Phone number</label>
                                        <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678"  required />
                                    </div>
                                    <div>
                                        <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Website URL</label>
                                        <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required />
                                    </div>
                                    <div>
                                        <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Unique visitors (per month)</label>
                                        <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email address</label>
                                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                                </div> 
                                <div class="mb-6">
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password</label>
                                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
                                </div> 
                                <div class="mb-6">
                                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Confirm password</label>
                                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
                                </div> 
                                <div class="flex items-start mb-6">
                                    <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
                                    </div>
                                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
                                </div>
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                            </form>

                  </div>
            </div>
            
        </div>
  
   </div>
</div>


