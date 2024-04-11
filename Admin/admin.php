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

<div class="p-4 sm:ml-64">
   <div class="p-4 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
      <!-- this is frist card -->
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex shadow-md items-center justify-center h-40 rounded bg-gray-50 dark:bg-[#DFF6FF]">
           <div class="Event flex">
            <div class="count-text">
               <h1>0</h1>
               <p>Total Events</p>
            </div>
            <div class="event-icon">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd"/>
               </svg>

            </div>
           </div>
         </div>
          <!-- this is second card -->
         <div class="flex shadow-md items-center justify-center h-40 rounded bg-gray-50 dark:bg-[#DFF6F1]">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               HI
            </p>
         </div>
          <!-- this is third card -->
         <div class="flex shadow-md items-center justify-center h-40 rounded bg-gray-50 dark:bg-[#DFF6F3]">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               HELLO
            </p>
         </div>
      </div>
</div>
       <!-- this is founth card -->
      <div class="flex shadow-md items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-[#FFF7E9]">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            avronil rajib
         </p>
      </div>


   </div>
</div>

</div>