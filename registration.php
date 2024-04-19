<?php
  require_once("header.php");
?>
  <div class="loginSection">
     <div class="container">
     <div class="login-part bg-[#015967] shadow-md max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
            <div class="ragi-form">
                <form action=""class="max-w-sm mx-auto">
                     <div class="fullName flex justufy-between gap-5">
                     <input class="rounded-lg" type="text" name="Fname" id="fname" placeholder="first name">
                     <input class="rounded-lg" type="text" name="Lname" id="lname" placeholder="last name">
                     </div>
                     <div class="dept-batch flex justufy-between gap-5 mt-5">
                     <input class="rounded-lg" type="text" name="department" id="department" placeholder="department">
                     <input class="rounded-lg" type="text" name="batch" id="batch" placeholder="batch">

                     </div>

                </form>
            </div>
       </div>
     </div>
  </div>
<?php 
  require_once("footer.php");
?>