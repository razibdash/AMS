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
            <div class="events">
               <div class="add-event">
                  <div class="title bg-sky-900 mb-5 p-5 rounded-lg shadow-2xl">
                  
                     <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Add</span>Event</h1>
                     <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Unlock exclusive experiences  Dive into the Event Section for our signature events..</p>

                  </div>
                  <div class="event-form bg-emerald-50 p-5 rounded-lg shadow-2xl">

                     <?php

                      require("../config/configer.php");

                      if(!$connect){
                        echo mysqli_connect_error();
                      }

                      if(isset($_POST["title"]) && isset($_FILES["eventPhoto"]) && isset($_POST["des"]) && isset($_POST["date"])){
                         
                        $title = $_POST["title"];
                        $eventPhotoName = $_FILES["eventPhoto"]["name"];
                        $eventPhotolocation = $_FILES["eventPhoto"]["tmp_name"];
                        $des = $_POST["des"];
                        $date = $_POST["date"];

                        $up_photo = "../image/".$eventPhotoName;

                        move_uploaded_file($eventPhotolocation,$up_photo);

                        $dataSet = "INSERT INTO `events` (`title`, `des`, `photo`, `date`) VALUES ('$title','$des','$eventPhotoName','$date')";

                         $query = mysqli_query($connect,$dataSet);
                        // mysqli_query($connect,$dataSet);

                          if($query){
                           echo "Recorded";
                          }else{
                           echo "Not Upload";
                          }                          
                      }
                      
                     ?>
                     <form class="mx-auto" action="add_events.php" method="POST" enctype="multipart/form-data"> 
                        <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">Event Title: </label>
                        <input type="text" id="title" name="title"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="event title" requied>

                        <label for="photo" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Event Photo: </label>

                        <input class="block w-full  bg-gray-50 text-sm text-gray-900 border border-gray-300 rounded-lg  cursor-pointer dark:text-gray-400 focus:outline-none " aria-describedby="user_avatar_help" name="eventPhoto" id="user_avatar" type="file" required>

                        <label for="des" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Describtion: </label>
                        <input type="text" id="des" name="des"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="Describtion " required>

                        <label for="date" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Date: </label>
                        <input type="date" id="date" name="date"  class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 w-full focus:ring-blue-500 p-2.5" placeholder="Date " required>
                         
                        <input type="submit" value="submit" name="submit" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"></input>
                        
                     </form>
                   </div>
                </div>
              </div>
            </div>
         </div>

</div>