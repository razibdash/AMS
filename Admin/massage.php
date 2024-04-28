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
      $readData = "SELECT * FROM `contact`";

      $query=mysqli_query($connect,$readData);

      ?>
  <div class="p-4 sm:ml-64 bg-[#DFF6FF]">
     <div class="p-1 border-gray-200 rounded-lg dark:border-gray-700">
       <div class="massage mt-20 mb-5">
          <div class="total-massage bg-sky-900 p-5 rounded-lg shadow-2xl">
             <div class="heading-event max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
               <div class="event-list-text">
                  <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Total </span>Message</h1>
              </div>
        </div>
     <div class="massage-items mt-5">
             <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
         <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
             <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr>
                 <th scope="col" class="px-6 py-3">
                    ID
                 </th>
                 <th scope="col" class="px-6 py-3">
                    First Name
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Last Name
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Email
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Massage
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
               $fname=$data['fname'];
               $lname=$data['lname'];
               $email=$data['email'];
               $massage=$data['massage'];
            ?>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4">
                    <h2><?php echo $id ?></h2>
                </td>
                <td class="p-4">
                    <h1><?php echo $fname ?></h1>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    <?php echo $lname ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $email ?>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                 <?php echo $massage ?>
                </td>
                <td class="px-6 py-4 ">
                  
                    <a href="../php_core/massage_del.php?del=<?php echo $id;?>" class="font-medium bg-red-600 mt-5 text-white dark:text-white-600 inline-block p-2 rounded-lg  hover:underline">Remove</a>
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
 </div>
</div>