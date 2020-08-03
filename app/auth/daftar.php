<?php 
  // Membersihkan data POST
  // $_POST = array();
  unset($_POST); 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
  <link rel="stylesheet" href="../../styles/bootstrap.css">
  <link rel="stylesheet" href="../../styles/login.css">
</head>
<body class="text-center">

  <form class="mx-auto px-4" style="width: 530px;" action="proses-daftar.php" method="post">

    <h2 class="h2 font-weight-bold">Web Application</h2>
    <img class="mb-4" src="../../assets/img/ex-logo.png" alt="logo" width="72" height="72">
    <h2 class="h4 mb-3 font-weight-normal">Buat Akun</h2>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label class="small float-left" for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap..." required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label class="small float-left" for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email..." required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="small float-left" for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password..." required>
        </div>
        <div class="form-group col-md-6">
          <label class="small float-left" for="konfirm_password">Konfirmasi Password</label>
          <input type="password" class="form-control" id="konfirm_password" name="konfirm_password" placeholder="Masukan Ulang Password..." required>
        </div>
      </div>
      <input class="btn btn-primary btn-block" type="submit" value="Daftar" name="daftar_form">
      <!-- <a href="../../index.php" class="btn btn-lg btn-primary btn-block" type="submit">Daftar</a> -->
    <div class="mt-2">
      <p class="mb-0"><a href="login.php" class="small">Sudah Punya Akun? Pergi ke Login</a></p>
    </div>

    <?php if ( isset($_GET['status']) ) : ?>

      <div id="alert" class="alert alert-danger" role="alert">  
        <?php
          if ($_GET['status'] == 'err_01') {
            echo "Nama atau Email yang Anda masukan sudah terdaftar!";
          } elseif ($_GET['status'] == 'err_02') {
            echo "Password yang Anda masukan tidak sama!";
          } elseif ($_GET['status'] == 'gagal') {
            echo "Proses Pendaftaran Gagal!";
          }
        ?>
      </div>
      
    <?php endif; ?>

    <p class="mt-5 mb-3 text-muted">&copy; Ikhsan 2020</p>

  </form>

</body>
</html>