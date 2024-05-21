<?php
require_once("header.php");
?>
<?php
   require("config/configer.php");
   $readData = "SELECT * FROM `gallery`";
             $query=mysqli_query($connect,$readData);
            
?>

<!-- GALLARY SECTION START -->
<div class="galLarySection  p-5">
            <div class="container">
                <div class="gallary-content">
                    <div class="gallary-heading">
                    <h1 class="mb-4 mt-6 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Gal<span class="text-blue-800 bold">lery</span></h1>
                <p class="mb-6 text-lg text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Discover inspiration around every corner in our MU World.</p>
                    </div>
                </div>
                <div class="gallary-images-section">   
                    <?php
                    $count=0;
                    $readData = "SELECT * FROM `gallery`";
                    $query=mysqli_query($connect,$readData); 
                    while($data = mysqli_fetch_assoc($query)){
                        $id=$data['id'];
                        $title=$data['title'];
                        $photo=$data['photo'];
                        $des=$data['des'];
                        $count++;
                        ?>
                     <div class=" m-2 bg-white rounded-lg shadow-lg md:flex-row md:max-w-xl hover:bg-white-100 dark:border-gray-700 dark:bg-white-800 dark:hover:bg-white-700">
                        <img class="object-cover m-2 max-h-56 box-border rounded-t-lg  md:h-auto  md:rounded-none md:rounded-s-lg" src="<?php echo"image/".$photo ?>" alt="">
                        <div class="p-2">
                            <h5 class="mb-2 text-1xl  tracking-tight text-black-900 dark:text-black"><?php echo $title ?></h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-600"><?php echo $des ?></p>
                        </div>
                    </div>
                        <?php
                        if($count==6){
                            break;
                        }
                    }
                    ?>            


                </div>
            </div>
        </div>
<!-- GALLARY SECTION END -->

<?php
require_once("footer.php");
?>