<?php
  session_start();
  $con = mysqli_connect("localhost:3306", "root", "", "dbproject_salam");

  if($con) {
    //cek pesanan
    $result = mysqli_query($con, "select * from tb_pemesanan");
    $getNumber = mysqli_num_rows($result);

    if($getNumber == 0) {
      echo $id_pesan = "PS1";
    }
    else {
      echo $id_pesan = "PS" . ($getNumber + 1);
    }

    if(isset($_POST['nama_brg']) && isset($_POST['kategori']) && isset($_POST['jumlahBarang']) && isset($_POST['totalHarga']) && isset($_POST['deadlineAkad'])) {
      if(isset($_POST['umur']) && isset($_POST['berat'])) {
        echo $umur = $_POST['umur'];
        echo $berat = $_POST['berat'];
      }
      else {
        echo $umur = 1;
        echo $berat = 1;
      }
      if(isset($_POST['spesifikasi'])) {
        echo $spesifikasi = $_POST['spesifikasi'];
      }
      else {
        echo $spesifikasi = "-";
      }
      
      echo $nama_brg = $_POST['nama_brg'];
      echo $kategori = $_POST['kategori'];
      echo $id_usaha = $_SESSION['id_usaha'];
      echo $id_pemesan = $_SESSION['username'];
      echo $jumlah = $_POST['jumlahBarang'];
      echo $total = $_POST['totalHarga'];
      echo $status_pembayaran = "Belum lunas";
      echo $status_pengiriman = "Belum dikirim";
      echo $waktu_akad = $_POST['deadlineAkad'];
      echo $est_waktu_kirim = "-";

      $sql = mysqli_query($con, "INSERT INTO tb_pemesanan VALUES ('$id_pesan' ,'$nama_brg', '$id_usaha',
        '$id_pemesan', '$kategori', $umur, $berat, '$spesifikasi', $jumlah, $total, curdate(),
        '$status_pembayaran', '$status_pengiriman', '$waktu_akad', '$est_waktu_kirim', 'Valid')");

        if($sql) {
          header("location: ../statusPermintaan.php");
        }
        else {
          echo "Transaksi gagal";
        }
    }
    mysqli_close($con);
  }
 ?>
