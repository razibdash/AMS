<?php
 require("../php_core/alumni_login.php");
 session_destroy();
  if(!headers_sent()){
    header("location:../alumni_login.php");
  }else{
    echo '<script type="text/javascript">window.location.href="../alumni_login.php"</script>';
         
  }

?>