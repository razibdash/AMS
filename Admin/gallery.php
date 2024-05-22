<link rel="stylesheet" href="../css/style.css">
<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.css" integrity="sha512-ttaKI7P6G+denBpzGujwqjguFDsmxcxfVY+KovsyIpQ3vWbVdilbohqij8ewk16HN3vLghlCAXUWsl0KYQo6pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.js" integrity="sha512-bUju8VkXhCQgW7zCHSdiIDpECo/lqzChkKrKoc1v2PL2XqO/0Q2Y8dhu07+q6Rk+1c1xr6cfE0VZnumgwy93Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<div class="admin">   
<?php
require_once("navigation.php");
?>
<?php
require_once("aside.php");
?>

<div class="p-4 sm:ml-64 bg-[#DFF6FF]">
   <div class="p-4  border-gray-200 rounded-lg dark:border-gray-700 mt-14">
     <div class="gallery">
               <div class="title bg-sky-900 mb-5 p-5 rounded-lg shadow-2xl">                 
                  <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Gall</span>ery</h1>
                  <p class="text-lg font-normal text-white-700 lg:text-xl dark:text-white-700">Discover inspiration around every corner in our MU World.</p>

               </div>
        <div class="add-photo">
            <div class="form-section bg-white p-5 mb-5 shadow-lg rounded-lg">
            <h1 class="mb-4 p-2 text-2xl font-extrabold text-gray-900 dark:text-white md:text-3xl lg:text-3xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Add Image</span></h1>

            <!-- this is insert section -->
                  <?php

                     require("../config/configer.php");

                     if(!$connect){
                        echo mysqli_connect_error();
                     }

                     if(isset($_POST["title"]) && isset($_FILES["image"]) && isset($_POST["des"])){
                        
                     $title = $_POST["title"];
                     $PhotoName = $_FILES["image"]["name"];
                     $Photolocation = $_FILES["image"]["tmp_name"];
                     $des = $_POST["des"];

                     $up_photo = "../image/".$PhotoName;

                     move_uploaded_file($Photolocation,$up_photo);

                     $dataSet = " INSERT INTO `gallery`(`photo`, `title`, `des`) VALUES ('$PhotoName','$title','$des')";

                        $query = mysqli_query($connect,$dataSet);
                     // mysqli_query($connect,$dataSet);

                        if($query){
                        echo "Recorded";
                        }else{
                        echo "Not Upload";
                        }                          
                     }

                     ?>
             <!-- INSER SECTION END -->
               <form class="mx-auto flex  flex-wrap" action="gallery.php" method="POST" enctype="multipart/form-data"> 
                        <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">Image Title: </label>
                        <input type="text" id="title" name="title"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="image title" requied>

                        <label for="photo" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Select Image: </label>

                        <input class="block w-full  bg-gray-50 text-sm text-gray-900 border border-gray-300 rounded-lg  cursor-pointer dark:text-gray-400 focus:outline-none " aria-describedby="user_avatar_help" name="image" id="user_avatar" type="file" required>

                        <label for="des" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Describtion: </label>
                        <input type="text" id="des" name="des"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="Describtion " required>

                        <input type="submit" value="submit" name="submit" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"></input>
                        
                     </form>
               </div>
               <div class="show-date-section bg-white p-5 rounded-lg shadow-lg">                  
               <div class="heading">
                  
                  <h1 class="mb-4 p-2 text-2xl font-extrabold text-gray-900 dark:text-white md:text-3xl lg:text-3xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Image List</span></h1>
             </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                   <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                       <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                              <th scope="col" class="px-6 py-3">
                                 Id
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

             $readData = "SELECT * FROM `gallery`";
             $query=mysqli_query($connect,$readData);
             while($data = mysqli_fetch_assoc($query)){
               $id=$data['id'];
               $title=$data['title'];
               $photo=$data['photo'];
               $des=$data['des'];
               
               ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4">
                    <h2><?php echo $id ?></h2>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                <img src="<?php echo "../image/".$photo ?>" class="w-16 md:w-32 max-w-full max-h-full" alt="not found">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                     <h1 ><?php echo $title ?></h1>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                   <p><?php echo $des ?></p>
                </td>
                <td class="px-6 py-4 ">
                    <a href="../php_core/deletePhoto.php?del=<?php echo $id ?>" class="font-medium bg-red-600 mt-5 text-white dark:text-white-600 inline-block p-2 rounded-lg  hover:underline">Remove</a>
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