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
     
     <?php
            require("../config/configer.php");
            $readData = "SELECT * FROM `jobs`";

            $query=mysqli_query($connect,$readData);

      ?>
<div class="p-4 sm:ml-64 bg-[#DFF6FF]">
   <div class="p-4  border-gray-200  rounded-lg  mt-14">
            
   <div class="jobs mt-5 mb-5">
          <div class="total-jobs bg-sky-900 p-5 rounded-lg shadow-2xl">
             <div class="heading-event max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
               <div class="event-list-text">
                  <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Posted</span>Jobs</h1>
              </div>

        </div>
          <div class="event-items mt-5">
             <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
         <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
             <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr>
                 <th scope="col" class="px-6 py-3">
                    ID
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Job Title
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Des
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Location
                 </th>
                 <th scope="col" class="px-6 py-3">
                 Experience
                 </th>
                 <th scope="col" class="px-6 py-3">
                 Salary
                 </th>
                 <th scope="col" class="px-6 py-3">
                 Employment Status
                 </th>
                 
               </tr>
             </thead>
           <tbody>
           <?php
            while($data = mysqli_fetch_assoc($query)){
               $id=$data['id'];
               $title=$data['job_title'];
               $des=$data['des'];
               $location=$data['location'];
               $experience=$data['experience'];
               $salary=$data['salary'];
               $employment_status=$data['employment_status'];
            ?>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4">
                        <h2><?php echo $id; ?></h2>
                    </td>
                
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        <?php echo $title; ?>
                    </td>
                    <td class="px-6 py-4">
                    <?php echo $des; ?>
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    <?php echo $location ?>
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    <?php echo $experience ?>
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    <?php echo $salary ?>
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    <?php echo $employment_status ?>
                    </td>

               </tr>
          <?php
            }
           ?>             
           </tbody>
        </table>
 
        </div>

        </div>
        </div>
      </div>
   </div>
   <div class="Job-section rounded-lg shadow-lg p-5 bg-white">
    <div class="container container-lg container-md container-sm mx-auto">
        <div class="job-section-heading">
         <h1 class="mb-4 p-5 mt-6 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">job for fresher </h1>
        </div>
        <div class="job-card flex justify-center flex-wrap ">
        <?php
                require("../config/configer.php");
                $readData = "SELECT * FROM `jobs`";

                $query=mysqli_query($connect,$readData);
            while($data = mysqli_fetch_assoc($query)){
               $id=$data['id'];
               $title=$data['job_title'];
               $des=$data['des'];
               $location=$data['location'];
               $experience=$data['experience'];
               $salary=$data['salary'];
               $employment_status=$data['employment_status'];
            ?>
            <!-- job ONE -->
            <div class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $title; ?></h5>
                </a>
                <div class="job-describtion">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <?php echo $des;?></p>
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
                        <span><?php echo $experience;?></span>
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
                        <span>Employment status: <span class="font-semibold text-gray-900 dark:text-white"><?php echo $employment_status?></span></span>
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
    </div>
   </div>
  
   </div>
</div>


