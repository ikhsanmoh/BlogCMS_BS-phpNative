<?php

  require "../../../config/koneksi.php";

  if ( isset( $_POST['form_add_post'] ) ) {
    
    // Assignment Nilai author diambil dari login session
    session_start();
    $author = (integer) $_SESSION['user_id'];
    
    // Assignment Nilai published menggunakan pengkondisian
    $published = isset( $_POST['published']) ? "yes" : "no";

    // Assignment Nilai created_at diambil dengan fungsi date berformat Jakarta
    ini_set('date.timezone', 'Asia/Jakarta');
    $created = date('Y-m-d H:i:s');
    
    // Assignment Nilai form lainnya
    $judul = $_POST['title'];
    $konten = $_POST['konten'];
    $meta_tag = $_POST['meta_tag'];
    $meta_desc = $_POST['meta_desc'];
    

    // Query untuk mengecek kesamaan Judul post
    $query_1 = "SELECT * FROM tb_posts WHERE judul LIKE '$judul'";

    // Eksekusi query 1
    $sql_1 = mysqli_query($koneksi, $query_1);

    // Pengkondisian untuk menghandle kesamaan judul Post
    if ( mysqli_num_rows($sql_1) == 0 ) {
      
      // Query untuk menginput data form post
      $query_2 = "INSERT INTO 
                    tb_posts (judul, author_id, konten, meta_tag, meta_description, published, created_at)
                  VALUE
                    ('$judul', '$author', '$konten', '$meta_tag', '$meta_desc', '$published', '$created')";

      // Eksekusi query 2
      $sql_2 = mysqli_query($koneksi, $query_2);

      if ($sql_2) {
        
        // Redirect dengan status input data sukses
        header('location: posts.php?status=sukses_add');
      
      } else {

        // Redirect dengan status input data gagal
        header('location: posts.php?status=gagal_add');
      
      }

    } else {

      // Redirect dengan status kesalahan judul
      header('location: create-post.php?status=err_title');
    
    }

  } else {

    // Redirect untuk url protection
    header('location: create-post.php');
  
  }
  

?>