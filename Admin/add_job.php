<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.css" integrity="sha512-ttaKI7P6G+denBpzGujwqjguFDsmxcxfVY+KovsyIpQ3vWbVdilbohqij8ewk16HN3vLghlCAXUWsl0KYQo6pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.js" integrity="sha512-bUju8VkXhCQgW7zCHSdiIDpECo/lqzChkKrKoc1v2PL2XqO/0Q2Y8dhu07+q6Rk+1c1xr6cfE0VZnumgwy93Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/style.css">

<div class="admin">
   
<?php
require_once("navigation.php");
?>
<?php
require_once("aside.php");
?>

<div class="p-4 sm:ml-64 bg-[#DFF6FF]">
   <div class="p-4  border-gray-200 rounded-lg dark:border-gray-700 mt-14">
       <div class="jobs">
             <div class="add-jobs">
                  <div class="title bg-sky-900 mb-5 p-5 rounded-lg shadow-2xl">
                  
                     <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Add</span> JOBS</h1>
                     <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Discover entry-level positions perfect for fresh graduates eager to dive into career path</p>

                  </div>
                  <div class="jobs-form bg-emerald-50 p-5 rounded-lg shadow-2xl">

                     <?php

                      require("../config/configer.php");

                      if(!$connect){
                        echo mysqli_connect_error();
                      }else{
                        if(isset($_POST["job_title"]) && isset($_POST["des"]) && isset($_POST["location"]) && isset($_POST["experiance"]) && isset($_POST["salary"]) && isset($_POST["employment_status"]) ){
                         
                           $job_title = $_POST["job_title"];
                           $des = $_POST["des"];
                           $location = $_POST["location"];
                           $experiance = $_POST["experiance"];
                           $salary = $_POST["salary"];
                           $employment_status = $_POST["employment_status"];
     
                           $dataSet = "INSERT INTO `jobs`(`job_title`, `des`, `location`, `experience`, `salary`, `employment_status`) VALUES ('$job_title','$des','$location','$experiance','$salary','$employment_status')";
   
                            $query = mysqli_query($connect,$dataSet);
                           // mysqli_query($connect,$dataSet);
   
                             if($query){
                              echo "Recorded";
                             }else{
                              echo "Not Upload";
                             }                          
                         }
                      }
                     
                     ?>
                     <form class="mx-auto" action="add_job.php" method="POST" enctype="multipart/form-data"> 
                        <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">Job Title: </label>
                        <input type="text" id="title" name="job_title"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="Job title" requied>

                        <label for="des" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Describtion: </label>
                        <input type="text" id="des" name="des"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="Describtion " required>

                        <label for="date" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Location</label>
                        <input type="text" id="location" name="location"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="location " required>

                        <label for="date" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Experiance</label>
                        <input type="text" id="experiance" name="experiance"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="Experiance " required>

                        <label for="date" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Salary</label>
                        <input type="text" id="salry" name="salary"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="salary " required>

                        <label for="date" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Employment Status</label>
                        <input type="text" id="employment_status" name="employment_status"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="full time " required>
                         
                        <input type="submit" value="submit" name="submit" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"></input>
                        
                     </form>
                   </div>
                  </div>
              </div>
            </div>
   </div>
</div>

</div>