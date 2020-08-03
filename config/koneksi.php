<?php

  $host = "localhost:3306";
  $username = "root";
  $pass = "";
  $dbname = "ujikom_latihan2";

  $koneksi = new mysqli($host, $username, $pass, $dbname);

  if (!$koneksi) {
    die( "Gagal Terhubung Dengan Database". mysqli_connect_error() );
  }

?>