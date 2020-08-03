<?php

  /* --- Pengkondisian Login Session ---
   * - Jika User Session Belum di-Set (Belum Login) maka akan redirect ke Login Page
   * Atau
   * - Jika Waktu Session timeout (15 Menit/900 Detik) maka Data Session dihapus dan redirect ke Login Page
   */
  
  // Membuka Session
  session_start();

  if ( !isset($_SESSION['user']) || time() - $_SESSION['login_time'] > 900 ) {

    // Menghapus semua Data Session
    session_destroy();

    // Redirect ke Login Page
    header('location: ' . $base .'app/auth/login.php'); 
  }

?>