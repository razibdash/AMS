    <?php
    require_once("header.php");
    ?>
    <?php 

    require_once("slider.php");
    ?>
    <?php
        require("config/configer.php");
    ?>
    <!-- UPCOMMING EVENT START -->
        <div class="upcomingEvent p-5">
            <div class="upComingContent">
            
                <h1 class="mb-4 mt-6 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Upcoming <span class="text-blue-800 bold">Events</span></h1>
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
                    <div class=" mb-8 max-w-sm  bg-white  rounded-lg shadow-lg dark:bg-white-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg min-h-96" src="<?php echo"image/".$photo ?>" alt="not Found" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                                    <?php echo $title ?>
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-600">
                                <?php echo $des ?>
                            </p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-600">
                                <?php echo $date?>
                            </p>
                        </div>
                    </div>
                <?php
                
            }
                ?>

            </div>
        </div>
    <!-- UPCOMMING EVENT END -->

     <!-- OBJECTIVE SECTION START-->
        <div class="objective flex justify-center items-center flex-wrap mt-10">
            <div class="our-objective m-4">            
                    <div class="max-w-lg p-6 bg-white rounded-lg shadow-lg dark:bg-white-800 dark:border-gray-700">
                        <svg class="w-7 h-7 text-blue-500 dark:text-blue-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                        </svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-black-900 dark:text-black">Preamble</h5>
                        </a>
                        <p class="mb-3 p-4 font-normal text-gray-500 dark:text-gray-500">
                            We, the Alumni of the MU—International University of Business Agriculture and Technology, develop mutual interest among ourselves, establish mutually beneficial relations between MU and its Alumni, and promote the interests of MU, do hereby form into an Association and adopt this constitution.</p>
                    
                    </div>
            </div>
            <div class="preamble m-4">
            <div class="max-w-lg p-6 bg-white rounded-lg shadow-lg dark:bg-white-800 dark:border-gray-700">
                        <svg class="w-7 h-7 text-blue-500 dark:text-blue-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                        </svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-black-900 dark:text-black">Objectives</h5>
                        </a>
                        <p class="mb-3 p-3 font-normal text-gray-500 dark:text-gray-500">MU Alumni Association plays a vital role by assisting the university in developing linkage with industries, multinational organizations as well as other firms and companies. Besides that, it assists the interns of MU in finding internship placement in different organizations. It also provides job opportunities to the students of MU.</p>
                    
                    </div>
        </div>
     <!-- OBJECTIVE SECTION END-->

<!-- GALLARY SECTION START -->
        <div class="galLarySection  p-5">
            <div class="container">
                <div class="gallary-content">
                    <div class="gallary-heading">
                    <h1 class="mb-4 mt-6 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Gel<span class="text-blue-800 bold">lery</span></h1>
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
                     <div class=" m-2 bg-white rounded-lg shadow-lg md:flex-row md:max-w-xl hover:bg-white-100 dark:border-gray-700 dark:bg-white-800 dark:hover:bg-white-700">
                        <img class="object-cover m-2 max-h-56 box-border rounded-t-lg  md:h-auto  md:rounded-none md:rounded-s-lg" src="<?php echo"image/".$photo ?>" alt="">
                        <div class="p-2">
                            <h5 class="mb-2 text-1xl  tracking-tight text-black-900 dark:text-black"><?php echo $title ?></h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-600"><?php echo $des ?></p>
                        </div>
                    </div>
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

  <!-- ABOUT SECTION START -->
     <div class="about-section container-md">
         <div class="about-text p-5">
            <p class=" text-2xl font-bold m-auto text-center  shadow rounded-lg">About</p>
            <h1 class="mb-3 text-center  text-black-500 font-extrabold  dark:text-black-400 text-4xl">MU ALUMNI <span class="text-blue-800 bold">ASSOCIATION</span></h1>
         </div>
          <div class="pic-content flex justify-center items-center flex-wrap ">
              <div class="pic  p-4">
                 <img class="rounded-lg max-h-96 w-full" src="image/image1.jpeg.jpg" alt="">
              </div>
              <div class="content w-3/6">
                    <div class="content-one p-4">
                        <h1 class="text-lg mb-2 text-black-500 text-2xl font-extrabold md:text-xl dark:text-black-400">Executive Committee</h1>
                        <p class="mb-6 font-normal text-gray-500 dark:text-gray-400">The Executive Committee shall consist of the Executive Secretary, the Finance Secretary, the Auditing Secretary, the Business Secretary, and the Press Secretary. The President shall serve as ex-officio member of the Executive Committee. The Executive Committee shall report to the Board of Managers.</p>
                    </div>
                  <div class="content-one p-4 ">
                    <h1 class="text-lg mb-2 text-black-500 text-2xl font-extrabold md:text-xl dark:text-black-400">Officers and Elections</h1>
                    <p class="mb-6 font-normal text-gray-500 dark:text-gray-400">The officers of the Association shall be classified into two categories: elected and appointed. The offices of the President and the Executive Secretary shall be filled by election and only degree/diploma holders of IUBAT University shall qualify to be elected to these positions.</p>
                  </div>
              </div>
          </div>
     </div>
  <!-- ABOUT SECTION END -->

<!-- JOB SECTION START -->
        <div class="Job-section p-5 w-full">
            <div class="container container-lg container-md container-sm mx-auto">
                <div class="job-section-heading">
                <h1 class=" text-center  text-black-500 font-extrabold  dark:text-black-400 text-4xl">Job For <span class="text-blue-800 bold">Fresher</span></h1>
                <p class="mb-3 w-58 m-auto text-center text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                    <div class="max-w-sm m-2 p-6 bg-white  rounded-lg shadow-lg dark:bg-white-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black-900 dark:text-black"><?php echo $job_title;?></h5>
                        </a>
                        <div class="job-describtion">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-600">\<?php echo $des;?></p>
                        </div>
                        <div class="job-requirment">
                        <ul class="space-y-4 text-left text-gray-600 dark:text-gray-600">
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

<!-- Success Story START -->
   <div class="success-story ">
      <div class="text-story">
            <h1 class="text-center  text-black-500 font-extrabold  dark:text-black-400 text-4xl">Success <span class="text-blue-800 bold">Story</span></h1>
            <p class="font-normal text-center text-gray-500 dark:text-gray-400">Our Alumni Is Our Mirror</p>
      </div>
      <div class="success-card flex justify-center items-center flex-wrap">
      <?php
            $readData = "SELECT * FROM `success_story`";
            $query=mysqli_query($connect,$readData);

            while($data = mysqli_fetch_assoc($query)){
                $title=$data['fullName'];
                $photo=$data['Photo'];
                $des=$data['Bio'];
            ?>
            <div class=" p-4 max-w-sm bg-white m-2 rounded-lg shadow-lg dark:bg-white-800 ">
               
                    <img class="rounded-t-lg max-h-72 w-72" src="image/<?php echo $photo ?>" alt="" />
                
                <div class="p-1">
                   
                        <h5 class="mt-2 text-1xl font-bold tracking-tight text-black-900 dark:text-black"><?php echo $title;?></h5>
                   
                    <p class="text-gray-700 dark:text-gray-600"><?php echo $des ?></p>
                </div>
            </div>
            <?php
            }
            ?>
      </div>

   </div>
<!-- Success Story START -->


<!-- FOOTER SECTION START -->
<div class="footer-section w-full">
    <?php
        require_once("footer.php");
    ?>
</div>
<!-- FOOTER SECTION END -->
</body>
</html>