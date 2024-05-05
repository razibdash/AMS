<?php
require_once("header.php");
?>
<div class="job-section p-5 bg-[#DFF6FF]">
      <div class="heading-job max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
            <div class="jobs-list-text">
                <h1 class="mb-2 mt-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark">Posted Jobs</h1>
            </div>
            <div class="search-job mt-5">   
                <form class="max-w-md mx-auto md:w-auto" action="job.php" method="GET">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" name="search_jobs" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search job" required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                  
            </div>
        </div>

         <div class="job-card m-5 shadow-2xl bg-white rounded-lg mb-5 max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
             
           <?php
                require("config/configer.php");
                if(isset($_GET["search_jobs"])){
 
                  $job = $_GET["search_jobs"];
                  $small= strtolower($job); 
                  $searchData = "SELECT * FROM `jobs` WHERE `job_title` LIKE '%$small%'";
                   $queryData= mysqli_query($connect,$searchData);
                   if(mysqli_num_rows($queryData)>0){
                    while($data = mysqli_fetch_assoc($queryData)){
                       $id=$data['id'];
                       $job_title = $data["job_title"];
                       $des = $data["des"];
                       $location = $data["location"];
                       $experiance = $data["experience"];
                       $salary = $data["salary"];
                       $employment_status = $data["employment_status"];
                       ?>
                           <div class="search-result">
                                                <div class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $job_title;?></h5>
                                        </a>
                                        <div class="job-describtion">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">\<?php echo $des;?></p>
                                        </div>
                                        <div class="job-requirment">
                                        <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                                            <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                                </svg>
                                                <span><?php echo $location;?></span>
                                            </li>

                                            <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                                </svg>
                                                <span>Experiance: <span class="font-semibold text-gray-900 dark:text-white"><?php echo $experiance ;?></span></span>
                                            </li>
                                            <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                                </svg>
                                                <span>Salary: <span class="font-semibold text-gray-900 dark:text-white"><?php echo $salary;?></span></span>
                                            </li>
                                            <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                                </svg>
                                                <span>Employment Status: <span class="font-semibold text-gray-900 dark:text-white"><?php echo $employment_status;?></span></span>
                                            </li>
                                        </ul>
                                        </div>

                                        <a href="#"  class="inline-flex mt-2 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Easy Apply
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>
                           </div>
                       <?php
                      }
                    }else{
                        echo "<h1>NOT FOUND!</h1>";
                    }
                    ?>
                    </div>
                    <?php


                }else{
                      ?>
                    <?php
                    require("config/configer.php");
                        $count=0;
                        $readData = "SELECT * FROM `jobs`";
                        $query=mysqli_query($connect,$readData); 
                        while($data = mysqli_fetch_assoc($query)){
                            $job_title = $data["job_title"];
                            $des = $data["des"];
                            $location = $data["location"];
                            $experiance = $data["experience"];
                            $salary = $data["salary"];
                            $employment_status = $data["employment_status"];
                            $count++;
                            ?>
            <div class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $job_title;?></h5>
                </a>
                <div class="job-describtion">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">\<?php echo $des;?></p>
                </div>
                <div class="job-requirment">
                <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span><?php echo $location;?></span>
                    </li>

                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Experiance: <span class="font-semibold text-gray-900 dark:text-white"><?php echo $experiance ;?></span></span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Salary: <span class="font-semibold text-gray-900 dark:text-white"><?php echo $salary;?></span></span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Employment status: <span class="font-semibold text-gray-900 dark:text-white"><?php echo $employment_status;?></span></span>
                    </li>
                </ul>
                </div>

                <a href="#"  class="inline-flex mt-2 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Easy Apply
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
            <?php
              }
              ?>
            <!-- job one -->

        </div>


                 <?php
                }
                        ?>
        <!-- Job search section end -->
       
     
</div>       
<?php
require_once("footer.php");
?>