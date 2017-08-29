<?php session_start();

  if(!isset($_SESSION['username']) || !isset($_SESSION['fullname']) || !isset($_SESSION['id_usaha']) || !isset($_SESSION['namausaha'])) {
    header("location: Koneksi/loginNotValid.html");
  }
 ?>
