<?php
  require_once("header.php");
?>
  <div class="loginSection">
     <div class="container">
       <div class="login-part flex">
         <div class="admin-login">
            <h1>Alumni Login</h1>
              <form action="php_core/alumni_login.php" method="POST">
                <input type="email" name="email" id="email" placeholder="email">
                <input type="password" name="password" id="password" placeholder="password">
                <input type="submit" value="login">
              </form>
          </div>
         <div class="alumni-login">
            <h1>Admin Login</h1>
            <a href="login.php">Login</a>
         </div>
       </div>
     </div>
  </div>
<?php 
  require_once("footer.php");
?>