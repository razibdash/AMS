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

      <!-- EDIT SUCCESS STORY START -->
        <div class="p-4 sm:ml-64 bg-[#DFF6FF]">
         <div class="p-4  border-gray-200 rounded-lg dark:border-gray-700 mt-14">
            <div class="seccess">
               <div class="add-seccess">
                  <div class="title bg-sky-900 mb-5 p-5 rounded-lg shadow-2xl">
                  
                     <h1 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Update </span>Success Story</h1>
                     <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Unlock exclusive experiences  Dive into the Event Section for our signature events.</p>

                  </div>
                  <div class="succes-form bg-emerald-50 p-5 rounded-lg shadow-2xl">

                     <?php

                      require("../config/configer.php");

                      if(!$connect){
                        echo mysqli_connect_error();
                      }
                      
                      if(isset($_GET['edit'])){
                        $edit_id=$_GET['edit'];
                        $edit_info="SELECT * FROM `success_story` WHERE $edit_id";
                        $edit_query=mysqli_query($connect,$edit_info);
                        $edit_data=mysqli_fetch_array($edit_query);

                        $fullName=$edit_data['fullName'];
                        $Photo=$edit_data['Photo'];
                        $EditBio=$edit_data['Bio'];

                      }

                      if(isset($_POST["full_name"]) && isset($_FILES["photo"]) && isset($_POST["des"])){
                         
                        $full_name = $_POST["full_name"];
                        $photoName = $_FILES["photo"]["name"];
                        $photolocation = $_FILES["photo"]["tmp_name"];
                        $des = $_POST["des"];     
                        $upload_photo = "../image/".$photoName;
                        move_uploaded_file($photolocation,$upload_photo);    

                        $dataSet = "INSERT INTO `success_story`(`fullName`, `Photo`, `Bio`) VALUES ('$full_name','$photoName','$des')";
                        
                           

                         $query = mysqli_query($connect,$dataSet);

                          if($query){
                           echo "Recorded";
                          }else{
                           echo "Not Upload";
                          }                          
                      }
                      
                     ?>
                     <form class="mx-auto" action="add_success_story.php" method="POST" enctype="multipart/form-data"> 
                        <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">Full Name:  </label>
                        <input type="text" id="title" value="<?php echo $fullName; ?>" name="full_name"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="event title" requied>

                        <label for="photo" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Photo: </label>

                        <input class="block w-full  bg-gray-50 text-sm text-gray-900 border border-gray-300 rounded-lg  cursor-pointer dark:text-gray-400 focus:outline-none " aria-describedby="user_avatar_help" value="<?php echo $Photo; ?>" name="photo" id="user_avatar" type="file" required>

                        <label for="des" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Describtion: </label>
                        <input type="text" id="des" value="<?php echo $EditBio; ?>" name="des"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="Describtion " required>
                         
                        <input type="submit" value="submit" name="submit" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"></input>
                        
                     </form>
                   </div>
                </div>
              </div>
            </div>
         </div>
      </div>
   <!-- EDIT SUCCESS STORY END -->

</div>
            