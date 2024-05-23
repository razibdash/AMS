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
     
     
<div class="p-4 sm:ml-64 bg-[#DFF6FF]">
   <div class="p-4  border-gray-200  rounded-lg  mt-14">
            
   <div class="upcomingEvent p-5 bg-white rounded-lg shadow-lg">
    <div class="upComingContent">   
        <h1 class="mb-10 mt-6 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Upcoming Events</h1>
    </div>
    <div class="eventCard container flex justify-center flex-wrap gap-2">
          <?php
            $readData = "SELECT * FROM `events`";
            $query=mysqli_query($connect,$readData);

            while($data = mysqli_fetch_assoc($query)){
               $title = $data['title'];
               $photo = $data['photo'];
               $des = $data['des'];
               $date = $data['date'];
            ?>
            <div class=" mb-8 w-80 bg-white rounded-lg shadow-lg dark:bg-white-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg min-h-96" src="
                    <?php echo"../image/".$photo ?>
                    " alt="not Found" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray">
                           <?php echo $title ?>
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                       <?php echo $des ?>
                    </p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                       <?php echo $date ?>
                    </p>
                </div>
             </div>
            <?php
            }
            ?>


    </div>
   </div>
  
   </div>
</div>


