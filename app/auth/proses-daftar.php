<?php

  require "../../config/koneksi.php";

  if ( isset($_POST['daftar_form']) ) {
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirm_password = $_POST['konfirm_password'];

    // var_dump($nama, $email, $password, $konfirm_password);
    // die();

    // Query Select untuk mengecek kesamaan nama pendaftar baru
    $query_1 = "SELECT * FROM tb_users WHERE nama LIKE '$nama' OR email LIKE '$email'";

    // Eksekusi Query 1
    $sql_1 = mysqli_query($koneksi, $query_1);

    if ( mysqli_num_rows($sql_1) != 0 ) {
    
      // Redirect dengan status error kesamaan nama atau email
      header('location: daftar.php?status=err_01');      

    } else {
    
      if ($password <> $konfirm_password) {
        
        // Redirect dengan status error password
        header('location: daftar.php?status=err_02');

      } else {
    
        // Query Insert untuk menyimpan data pendaftar baru
        $query_2 = "INSERT INTO tb_users (nama, email, pass) VALUE ('$nama', '$email', '$password')";
        
        // Eksekusi Query 2
        $sql_2 = mysqli_query($koneksi, $query_2);

        // Kondisi proses penyimpanan data pendaftar
        if ($sql_2) {
          header('location: pendaftaran-sukses.php');
        } else {
          header('location: daftar.php?status=gagal');
        }
      
      }
      
    }

    // Membersihkan data POST
    $_POST = array();

  } else {
    // Redirect sebagai Perlindungan URL
    header('location: login.php');
  }
?>