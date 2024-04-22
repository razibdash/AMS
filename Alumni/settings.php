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
     
<!-- READ THE ALUMNI DATA FORM DATABASE    -->
<?php
 require("../config/configer.php");
 if(isset($_GET['user_id'])){
  $user_id=$_GET['user_id'];
  $readData = "SELECT * FROM `alumni` WHERE id=$user_id";
  $query=mysqli_query($connect,$readData);
  $data = mysqli_fetch_assoc($query);

  $id=$data['id'];
  $fname=$data['fname'];
  $lname=$data['lname'];
  $photo=$data['photo'];
  $bio=$data['bio'];
  $dept=$data['dept'];
  $email=$data['email'];
  $phone=$data['phone'];
  $cgpa=$data['cgpa'];
  $password=$data['password'];
 }

?>
<!-- READ THE ALUMNI DATA FORM DATABASE    -->
<div class="p-4 sm:ml-64 bg-[#DFF6FF]">
   <div class="p-4  border-gray-200  rounded-lg  mt-14">
            
        <div class="alumni flex justify-between  flex-wrap">
            <div class="info_alumni bg-white rounded-lg shadow-lg w-80">
               <div class="pro_pic flex  justify-center items-center">
                   <img class=" w-32 h-32 p-3 mt-4 rounded-full" src="../image/<?php echo $photo ?>" alt="image Not Found!!">
               </div>
               <div class="infomation p-3 m-3 border-box">
                  <h1 class="mt-4">Student ID: <?php echo $id; ?></h1>
                  <h1 class="mt-4">Full Name : <?php echo $fname." ".$lname; ?></h1>
                  <h1 class="mt-4">Department : <?php echo $dept; ?></h1>
                  <h1 class="mt-4">Bio : <?php echo $bio; ?></h1>
                  <h1 class="mt-4">Email : <?php echo $email; ?></h1>
                  <h1 class="mt-4">Password : <?php echo $password; ?></h1>
                  <h1 class="mt-4">Phone : <?php echo $phone; ?></h1>
                  <h1 class="mt-4">CGPA : <?php echo $cgpa; ?></h1>
               </div>
            </div>
            <div class="info_update">
                <div class="profile_update">
                    <h1>profile update</h1>
                </div>
                <div class="info_update">
                    <h1>info update</h1>
                </div>
            </div>
        </div>
  
   </div>
</div>


