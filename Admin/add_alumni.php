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
     <div class="alumni-id">
        <div class="add-id">
        <div class="title bg-sky-900 mb-5 p-5 rounded-lg shadow-2xl">
                  
                  <h1 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">ADD </span>Alumni ID</h1>
                  

               </div>
               <div class="event-form bg-emerald-50 p-5 rounded-lg shadow-2xl">

                  <?php

                   require("../config/configer.php");

                   if(!$connect){
                     echo mysqli_connect_error();
                   }

                   if(isset($_POST["id"])){
                      
                     $id = $_POST["id"];

                     $dataSet = " INSERT INTO `student_id`(`id`) VALUES ('$id')";

                      $query = mysqli_query($connect,$dataSet);
                     // mysqli_query($connect,$dataSet);

                       if($query){
                        echo "Recorded";
                       }else{
                        echo "Not Upload";
                       }                          
                   }
                   
                  ?>
                  <form class="mx-auto" action="add_alumni.php" method="POST" enctype="multipart/form-data"> 
                     <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">Alumni ID: </label>
                     <input type="text" id="id" name="id"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="enter alumni id" required>
                      
                     <input type="submit" value="submit" name="submit" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" ></input>
                     
                  </form>
                </div>
             </div>
        </div>
     </div>
     <?php
     require("../config/configer.php");
     $readData = "SELECT * FROM `student_id`";

     $query=mysqli_query($connect,$readData);

     ?>
     <div class="event-items mt-5">
             <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
         <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
             <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr class="flex justify-between items-center">
                 <th scope="col" class="px-6 py-3">
                   Student ID
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
             
            ?>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 flex justify-between items-center">
                <td class="p-4">
                    <h2><?php echo $id ?></h2>
                </td>
               
                <td class="px-6 py-4 ">
                    <a href="../php_core/del_studentId.php?del=<?php echo $id;?>" class="font-medium bg-red-600 mt-5 text-white dark:text-white-600 inline-block p-2 rounded-lg  hover:underline">Remove</a>
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

</div>