<?
  // Memeanggil Base URL
  require "../../../config/base-url.php";

  // Memanggil Koneksi Database
  require "../../../config/koneksi.php";

  if ( isset($_GET['id']) ) {
    
    // Mengambil Id dari URL
    $id = $_GET['id'];

    // Query untuk menghapus data
    $query = "DELETE FROM tb_posts WHERE id LIKE '$id'";

    // Eksekusi Query
    $sql = mysqli_query($koneksi, $query);

    // Pengkondisian untuk status Query
    if ($sql) {

      // Redirect dengan status sukses
      header('location: '. $base . 'app/pages/post/posts.php?status=sukses_delete');
    
    } else {

      // Redirect dengan status gagal
      header('location: '. $base . 'app/pages/post/posts.php?status=gagal_delete');

    }

  } else {
  
    // Redirect untuk perlindungan URL
    header('location: '. $base . 'app/pages/post/posts.php');
  
  }
?>