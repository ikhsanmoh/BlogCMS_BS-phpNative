<?php

  if ( isset($_POST['logout']) ) {
    
    session_start();
    session_destroy();

    header('location: login.php');

  } else {

    header('location: ../../index.php');
  
  }

?>