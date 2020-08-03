<?php

  // Memeanggil Base URL
  require "../../../config/base-url.php";

  // Memanggil Koneksi Database
  require "../../../config/koneksi.php";

  if ( isset($_POST['form_edit_post']) ) {
    
    // Assignment Nilai published menggunakan pengkondisian
    $published = isset( $_POST['published']) ? "yes" : "no";

    // Assignment Nilai updated_at diambil dengan fungsi date berformat Jakarta
    ini_set('date.timezone', 'Asia/Jakarta');
    $updated = date('Y-m-d H:i:s');

    // var_dump($updated);
    // die();
    
    // Assignment Nilai form lainnya
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $meta_tag = $_POST['meta_tag'];
    $meta_desc = $_POST['meta_desc'];

    // Query untuk update data
    $query = "UPDATE
                tb_posts
              SET
                judul = '$judul', 
                konten = '$konten', 
                meta_tag = '$meta_tag', 
                meta_description = '$meta_desc', 
                published = '$published', 
                updated_at = '$updated' 
              WHERE
                id LIKE '$id'";

    // Eksekusi Query
    $sql = mysqli_query($koneksi, $query);

    // Pengkondisian Status Query
    if ($sql) {

      // Redirect dengan status sukses
      header('location: '. $base . 'app/pages/post/posts.php?status=sukses_update');

    } else {
      
      // Redirect dengan status gagal
      header('location: '. $base . 'app/pages/post/posts.php?status=gagal_update');
    
    }

  } else {

    // Redirect untuk perlindungan URL
    header('location: '. $base .'app/pages/post/posts.php');
    
  } 

?>