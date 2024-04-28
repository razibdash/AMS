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
      <?php
      require("../config/configer.php");
      $readData = "SELECT * FROM `success_story`";

      $query=mysqli_query($connect,$readData);

      ?>
  <div class="p-4 sm:ml-64 bg-[#DFF6FF]">
     <div class="p-1 border-gray-200 rounded-lg dark:border-gray-700">
       <div class="events mt-20 mb-5">
          <div class="total-event bg-sky-900 p-5 rounded-lg shadow-2xl">
             <div class="heading-event max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
               <div class="event-list-text">
                  <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Success</span> Story</h1>
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
                    Image
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Title
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Describe
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Action
                 </th>
               </tr>
             </thead>
           <tbody>
           <?php
            while($data = mysqli_fetch_assoc($query)){
               $id=$data['id'];
               $title=$data['fullName'];
               $photo=$data['Photo'];
               $des=$data['Bio'];
              
            ?>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4">
                    <h2><?php echo $id ?></h2>
                </td>
                <td class="p-4">
                    <img src="<?php echo "../image/".$photo ?>" class="w-16 md:w-32 max-w-full max-h-full" alt="not found">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    <?php echo $title ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $des ?>
                </td>
                <td class="px-6 py-4 ">
                  
                    <a href="edit/success_edit.php?edit=<?php echo $id?>" class="font-medium bg-blue-600 px-5 py-2 rounded-lg text-white dark:text-white-500 hover:underline">Edit</a>
                    <a href="../php_core/success_del.php?del=<?php echo $id?>" class="font-medium bg-red-600 mt-5 text-white dark:text-white-600 inline-block p-2 rounded-lg  hover:underline">Remove</a>
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
   <div class="upcomingEvent p-5 bg-white rounded-lg shadow-lg">
    <div class="upComingContent mb-5 mt-2">   
    <h1 class="text-center  text-black-500 font-extrabold  dark:text-black-400 text-4xl">Success <span class="text-blue-800 bold">Story</span></h1>
    <p class="font-normal text-center text-gray-500 dark:text-gray-400">Our Alumni Is Our Mirror</p>
    </div>
    <div class="eventCard container flex justify-center flex-wrap gap-2">
          <?php
            $readData = "SELECT * FROM `success_story`";
            $query=mysqli_query($connect,$readData);

            while($data = mysqli_fetch_assoc($query)){
                $title=$data['fullName'];
                $photo=$data['Photo'];
                $des=$data['Bio'];
            ?>
            <div class=" mb-8 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="p-1">
                    <img class="rounded-t-lg min-h-60" src="
                    <?php echo"../image/".$photo ?>
                    " alt="not Found" />
                </div>
                <div class="p-5">
                    <div class="p-1">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                           <?php echo $title ?>
                        </h5>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                       <?php echo $des ?>
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