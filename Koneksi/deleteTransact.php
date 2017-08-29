<?php
  $con = mysqli_connect("localhost:3306", "root", "", "dbproject_salam");

  if($con) {
    $id_data = $_GET['id'];

    $sql = mysqli_query($con, "update tb_pemesanan set statusakad = 'Tidak Valid' where id_pesan = '$id_data'");

    if($sql) {
      header("location: ../statusPermintaan.php");
    }

    mysqli_close($con);
  }

 ?>
