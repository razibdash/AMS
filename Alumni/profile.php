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
 }

?>
<div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="../image/<?php echo$photo; ?>" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                  <?php echo $fname." ".$lname; ?>
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  <?php echo "ID: ".$id; ?>
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="dashboard.php?user_id=<?php echo $id; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="dashboard.php?user_id=<?php echo $id; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="dashboard.php?user_id=<?php echo $id; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">log out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>