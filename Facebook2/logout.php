<?php
  session_start();
   session_destroy();

   header("location: home.php");
/*if (array_key_exists("logout", $_GET)) {
  
    echo "in logout with SESsion are present";
   // print_r($_SESSION);
    //die();
    //unset($_SESSION['id']);
    //unset($_SESSION['username']);
    //unset($_SESSION['oauth_provider']);
    
    session_destroy();
    unset($_SESSION);
    echo "after session _destroy";
    print_r($_SESSION);
       // die();
    header("location: home.php");
}*/
?>
