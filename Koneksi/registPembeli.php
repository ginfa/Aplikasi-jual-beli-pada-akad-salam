<?php
  $con = mysqli_connect("localhost:3306", "root", "", "dbproject_salam");

  if($con) {
    $namaUsaha = $_POST['namaUsaha'];
    $npwpUsaha = $_POST['npwpUsaha'];
    $alamatUsaha = $_POST['alamatUsaha'];
    $jenisUsaha = $_POST['jenisUsaha'];
    $noTelpUsaha = $_POST['noTelpUsaha'];
    $namaPj = $_POST['namaPj'];
    $noKtp = $_POST['noKtp'];
    $noTelp = $_POST['notelp'];
    $tglLahir = $_POST['tglLahir'];
    $alamat = $_POST['alamat'];
    $namaIbu = $_POST['namaIbu'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // select Number
      $getRowNumber = mysqli_query($con, "select * from tb_namausaha");
      $number = mysqli_num_rows($getRowNumber);
      if($number == 0) {
        $idUsaha = "CP1";
      }
      else {
        $idUsaha = "CP" . ($number + 1);
      }
    // end of select number

    $sql = mysqli_query($con, "insert into tb_datauser values ('$username', '$namaPj', '$noKtp', '$alamat', '$noTelp', '$tglLahir', '$namaIbu', '$password', 'User')");

    if($sql) {
      $sql2 = mysqli_query($con, "insert into tb_namausaha values('$idUsaha', '$namaUsaha', '$username', '$npwpUsaha', '$alamatUsaha', '$jenisUsaha', '$noTelpUsaha')");

      if($sql2) {
        header("location: ../index.php");
      }
      else {
        header("location: ../gagal.html");
      }
    }
    else {
      header("location: ../gagal.php");
    }
  }

 ?>
