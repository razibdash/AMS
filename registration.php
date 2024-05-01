<?php
  require_once("header.php");
  $error="";
?>
<h1><?php echo $error;?></h1>
<div class="loginSection">    
     <div class="container">
          <div class="login-part bg-[#015967] shadow-md max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
                <div class="ragi-form">
                  <div class="heading text-center">   
                        <h1 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-white md:text-4xl lg:text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Alumni</span> Registration</h1>
                  </div>
        <?php
           require("config/configer.php");
           if(!$connect){
            echo mysqli_connect_error();
          }
           
          if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['StudentId']) && isset($_POST['phone']) && isset($_POST['Department']) && isset($_POST['cgpa']) && isset($_FILES['photo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['bio'])){

            $fname= $_POST['first_name'];
            $lname=$_POST['last_name'];
            $studentId=$_POST['StudentId'];
            $phone=$_POST['phone'];
            $Department=$_POST['Department'];
            $cgpa=$_POST['cgpa'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $bio=$_POST['bio'];

            $PhotoName=$_FILES['photo']['name'];
            $Photolocation=$_FILES['photo']['tmp_name'];
            
            $up_photo = "image/".$PhotoName;
            move_uploaded_file($Photolocation,$up_photo);

            $hash=password_hash($password,PASSWORD_DEFAULT);

             $student_Id="SELECT * FROM `student_id`";
             $query=mysqli_query($connect,$student_Id);

            while($row = mysqli_fetch_assoc($query)){

              $std_id=$row['id'];

               if($studentId==$std_id){

                $dataInsert="INSERT INTO `alumni`(`id`, `fname`, `lname`, `phone`, `dept`, `cgpa`, `photo`, `email`, `password`, `bio`) VALUES ('$studentId','$fname','$lname','$phone','$Department','$cgpa','$PhotoName','$email','$hash','$bio')";
                $query = mysqli_query($connect,$dataInsert);
                    if($query){
                    if(!headers_sent()){
                        header('Location:alumni_login.php?regists');
                    }else{
                        echo '<script type="text/javascript">window.location.href="alumni_login.php"</script>';
                        
                    }
                 }else{
                    echo "Not Upload";
                    }   

               }else{
                 $error="Student Id Is Worng!";
               }
            }     

          }
        ?>
             
<form action="registration.php" method="POST" enctype="multipart/form-data" >
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
            <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="first name" required />
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
            <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="last name" required />
        </div>
        <div>
            <h1 class="m-1 text-red-600"><?php echo $error ;?></h1>
            <label for="Student" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student ID</label>
            <input type="text" name="StudentId" id="Student" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="221115075" required />
        </div>  
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
            <input type="tel" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" pattern="[0-9]{11}" placeholder="018xxxxxxxx"  required />
        </div>
        <div>
            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
            <input type="text" id="Department" name="Department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="B.Sc in CSE" required />
        </div>
        <div>
            <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CGPA</label>
            <input type="number" step="any" name="cgpa" id="cgpa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="cgpa" required />
        </div>
    </div>
    <div class="mb-6">      
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload photo</label>
          <input name="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
    </div> 
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xyz@company.com" required />
    </div> 
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
    </div> 
    <div class="mb-6">
        
      <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bio</label>
      <textarea id="bio" name="bio" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

    </div> 
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
        </div>
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

                </div>

          </div>
    </div>
</div>
<?php 
  require_once("footer.php");
?>