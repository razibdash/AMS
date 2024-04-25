    <?php
    require_once("header.php");
    ?>
    <?php 

    require_once("slider.php");
    ?>
    <?php
        require("config/configer.php");
    ?>
<div class="upcomingEvent shadow-lg p-5">
    <div class="upComingContent">
       
        <h1 class="mb-4 mt-6 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Upcoming Events</h1>
        <p class="mb-6 text-lg text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>

    </div>
    <div class="eventCard container">
        <?php
       
        $readData = "SELECT * FROM `events`";
        $query=mysqli_query($connect,$readData);
        while($data = mysqli_fetch_assoc($query)){
            $title=$data['title'];
            $photo=$data['photo'];
            $des=$data['des'];
            $date=$data['date'];
           
        ?>
            <div class=" mb-8 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg min-h-96" src="<?php echo"image/".$photo ?>" alt="not Found" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <?php echo $title ?>
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <?php echo $des ?>
                    </p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <?php echo $date?>
                    </p>
                </div>
            </div>
        <?php
         
      }
        ?>

    </div>
</div>

<!-- GALLARY SECTION START -->
<div class="galLarySection shadow-2xl p-5">
    <div class="container">
        <div class="gallary-content">
            <div class="gallary-heading">
            <h1 class="mb-4 mt-6 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Gallery</h1>
        <p class="mb-6 text-lg text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            </div>
        </div>
        <div class="gallary-images-section">   
            <?php
             $count=0;
             $readData = "SELECT * FROM `gallery`";
             $query=mysqli_query($connect,$readData); 
              while($data = mysqli_fetch_assoc($query)){
                $id=$data['id'];
                $title=$data['title'];
                $photo=$data['photo'];
                $des=$data['des'];
                $count++;
                ?>
                <a href="#" class="flex m-2 flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover m-2 w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="<?php echo"image/".$photo ?>" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $title ?></h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $des ?></p>
                </div>
            </a>
                <?php
                if($count==6){
                    break;
                }
              }
            ?>            


         </div>
         <div class="more-button text-center">
            <button type="button" id="morePhoto" onclick="morePhote()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-1 ">explore more</button>

            </div>

       </div>
</div>
<!-- GALLARY SECTION END -->

<!-- JOB SECTION START -->
<div class="Job-section shadow-lg p-5">
    <div class="container container-lg container-md container-sm mx-auto">
        <div class="job-section-heading">
         <h1 class="mb-4 p-5 mt-6 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Job For Fresher </h1>
         <p class="mb-3 text-center text-lg text-gray-500 md:text-xl dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed recusandae quos ipsa architecto inventore voluptatibus atque facilis, doloribus nemo ex eaque obcaecati error at unde vero? Tempora, sed sint. Dolor.</p>
        </div>
        <div class="job-card">
            <!-- job ONE -->
            <?php
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
                        <span>Experiance<span class="font-semibold text-gray-900 dark:text-white"><?php echo $experiance ;?></span></span>
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
    </div>
</div>
<!-- JOB SECTION END -->

<!-- FOOTER SECTION START -->
<div class="footer-section">
    <?php
    require_once("footer.php");
    ?>
</div>
<!-- FOOTER SECTION END -->
</body>
</html>