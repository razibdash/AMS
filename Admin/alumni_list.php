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
      $readData = "SELECT * FROM `events`";

      $query=mysqli_query($connect,$readData);

      ?>
  <div class="p-4 sm:ml-64 bg-[#DFF6FF]">
     <div class="p-1 border-gray-200 rounded-lg dark:border-gray-700">
       <div class="alumni mt-20 mb-5">
          <div class="total-alumni bg-sky-900 p-5 rounded-lg shadow-2xl">
             <div class="heading-event max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
               <div class="event-list-text">
                  <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Alumni</span> Lists</h1>
              </div>
            <div class="search-event mt-5">   
                <form class="max-w-md mx-auto md:w-auto">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search event" required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                  
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
                    Name
                 </th>
                 <th scope="col" class="px-6 py-3">
                 Profession
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Bio
                 </th>
                 <th scope="col" class="px-6 py-3">
                   Contact
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
               $title=$data['title'];
               $photo=$data['photo'];
               $des=$data['des'];
               $date=$data['date'];
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
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                 <?php echo $date ?>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                 <?php echo $date ?>
                </td>
                <td class="px-6 py-4 ">
                  
                    <a href="editEvents.php?edit=<?php echo $id;?>" class="font-medium bg-blue-600 px-5 py-2 rounded-lg text-white dark:text-white-500 hover:underline">Edit</a>
                    <a href="../php_core/deleteEvent.php?del=<?php echo $id;?>" class="font-medium bg-red-600 mt-5 text-white dark:text-white-600 inline-block p-2 rounded-lg  hover:underline">Remove</a>
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
            <div class=" mb-8 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg min-h-60" src="
                    <?php echo"../image/".$photo ?>
                    " alt="not Found" />
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