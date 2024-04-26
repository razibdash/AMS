<?php
require_once("header.php");
?>

<div class="alumni-section bg-[#DFF6FF]">
    <div class="container p-5">
        <div class="heading-search max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
            <div class="alumni-list-text">
                <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark">Alumni List</h1>
            </div>
            <div class="search-alumni">   
                <form class="max-w-md mx-auto md:w-auto" action="alumni.php" method="GET">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" name="search_alumni" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search alumni" required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

            </div>
        </div>
                <div class="search-alumni shadow-2xl bg-white rounded-lg mb-2 max-w-screen-xl flex flex-wrap items-center justify-left mx-auto p-4">
        <?php
                require("config/configer.php");
                if(isset($_GET["search_alumni"])){

                  $alumni = $_GET["search_alumni"];
                    $small= strtolower($alumni); 
                  $searchData = "SELECT * FROM `alumni` WHERE `fname` LIKE '%$small%'";
                   $queryData= mysqli_query($connect,$searchData);
                   if(mysqli_num_rows($queryData)>0){
                    while($data = mysqli_fetch_assoc($queryData)){
                       $id=$data['id'];
                       $fname=$data['fname'];
                       $lname=$data['lname'];
                        $photo=$data['photo'];
                        $bio=$data['bio'];
                        $dept=$data['dept'];
                        $email=$data['email'];
                        $phone=$data['phone'];
                        ?>
                                       <div class="alumni-items">
                                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow    dark:bg-gray-800 dark:border-gray-700 m-2">
                                                <a href="#">
                                                    <img class="rounded-t-lg p-2 h-70 rounded-full" src="image/<?php echo $photo; ?>" alt="" />
                                                </a>
                                                <div class="p-5">
                                                    <a href="#">
                                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $fname." ".$lname ?></h5>
                                                    </a>
                                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $bio ?></p>

                                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $email ?></p>
                                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $phone ?></p>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                     }
                     
                   }else{
                      echo "<h1>NOT FOUND!</h1>";
                   }
                   ?>
                      </div>
                     <?php
                }else{
                    ?>

        <div class="alumni-lists shadow-2xl bg-white rounded-lg mb-2 max-w-screen-xl flex flex-wrap items-center justify-left mx-auto p-4">
            <?php
             require("config/configer.php");
             $readData = "SELECT * FROM `alumni`";
      
             $query=mysqli_query($connect,$readData);
             while($data = mysqli_fetch_assoc($query)){
                $id=$data['id'];
                $fname=$data['fname'];
                $lname=$data['lname'];
                $photo=$data['photo'];
                $bio=$data['bio'];
                $dept=$data['dept'];
                $email=$data['email'];
                $phone=$data['phone'];

             
             ?>
           <div class="alumni-items">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow    dark:bg-gray-800 dark:border-gray-700 m-2">
                <a href="#">
                    <img class="rounded-t-lg p-2 h-70 rounded-full" src="image/<?php echo $photo; ?>" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $fname." ".$lname ?></h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $bio ?></p>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $email ?></p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $phone ?></p>
                </div>
             </div>
           </div>
           <?php
             }
             ?>
        </div>


                    <?php
                }
               
             ?>

    </div>
    <div class="pagination flex justify-center items-center">
                <nav aria-label="Page navigation example" class="mb-5">
                  <ul class="flex items-center -space-x-px h-10 text-base">
                      <li>
                      <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                          <span class="sr-only">Previous</span>
                          <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                          </svg>
                      </a>
                      </li>
                      <li>
                      <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                      </li>
                      <li>
                      <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                      </li>
                      <li>
                      <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white>3</a>
                      </li>
                      <li>
                      <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                      </li>
                      <li>
                      <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                      </li>
                      <li>
                      <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                          <span class="sr-only">Next</span>
                          <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                      </a>
                      </li>
                  </ul>
                </nav>

      </div>
</div>
<?php
require_once("footer.php");
?>
