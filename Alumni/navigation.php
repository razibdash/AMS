<?php
 require("../config/configer.php");
 if(isset($_GET['user_id'])){
  echo $user_id=$_GET['user_id'];
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
 }

?>
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
         <a href="dashboard.php?user_id=<?php echo $id;?>" class="flex ms-2 md:me-24">
          <img src="../image/logo.png" class="h-12 mt-1" alt="Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">MU Alumni</span>
        </a>
      </div>
      <?php
        require_once("profile.php");
      ?>
  </div>
</nav>