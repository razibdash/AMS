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
            
   <div class="gallery">
               <div class="title bg-sky-900 mb-5 p-5 rounded-lg shadow-2xl">                 
                  <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Gall</span>ery</h1>
                  <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Discover inspiration around every corner in our MU World</p>

               </div>
        <div class="add-photo">
            <div class="form-section bg-white p-5 mb-5 shadow-lg rounded-lg">
            <h1 class="mb-4 p-2 text-2xl font-extrabold text-gray-900 dark:text-white md:text-3xl lg:text-3xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Edit Image</span></h1>

            <!-- this is insert section -->
                  <?php

                     require("../config/configer.php");

                     if(!$connect){
                        echo mysqli_connect_error();
                     }
                    
                     if(isset($_GET['user_id'])){
                        $user_id = $_GET['user_id'];
                     }

                     if(isset($_GET["edit"])){
                        $getId=$_GET["edit"];

                        $editInfo = "SELECT * FROM `gallery` WHERE id=$getId";
                        $sql_query= mysqli_query($connect,$editInfo);
            
                        $data = mysqli_fetch_array($sql_query);

                         $id=$data["id"];
                         $E_title=$data['title'];
                         $E_des=$data['des'];
                         $E_photo=$data['photo'];
                        
                
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
                         echo "UpDated";
                        }else{
                        echo "Not Upload";
                        }                          
                     }

                     ?>
             <!-- INSER SECTION END -->
               <form class="mx-auto flex  flex-wrap" action="gallery_edit.php?user_id=<?php echo $user_id;?>&edit=<?php echo $id ?>" method="POST" enctype="multipart/form-data"> 
                        <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">Image Title: </label>
                        <input type="text" value="<?php echo $E_title;  ?>" id="title" name="title"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="image title" requied>

                        <label for="photo" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Select Image: </label>

                        <input class="block w-full  bg-gray-50 text-sm text-gray-900 border border-gray-300 rounded-lg  cursor-pointer dark:text-gray-400 focus:outline-none " aria-describedby="user_avatar_help" value="<?php echo $E_photo;  ?>" name="image" id="user_avatar" type="file" required>

                        <label for="des" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Describtion: </label>
                        <input type="text" id="des" value="<?php echo $E_des;  ?>" name="des"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="Describtion " required>

                        <input type="submit" value="submit" name="submit" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"></input>
                        
                     </form>
               </div>
              
     </div>
  
   </div>
</div>


