<?php
  session_start();
  $con = mysqli_connect("localhost:3306", "root", "", "dbproject_salam");

  if($con) {
    if(isset($_POST['userID']) && isset($_POST['password'])) {
      $user = $_POST['userID'];
      $pass = $_POST['password'];

      $sql = mysqli_query($con, "select * from tb_datauser where username = '$user' && password = '$pass'");

      if($row = mysqli_fetch_array($sql)) {
        $_SESSION['username'] = $row[0];
        $_SESSION['fullname'] = $row[1];
        $_SESSION['jabatan'] = $row[8];

        if($_SESSION['jabatan'] == "Admin") {
          header("location: ../pageAdmin.php");
        }
        else if($_SESSION['jabatan'] == "User") {
          $_SESSION['no_ktp'] = $row[2];
          $_SESSION['alamat'] = $row[3];
          $_SESSION['no_telp'] = $row[4];
          $_SESSION['tgl_lahir'] = $row[5];
          $_SESSION['nama_ibu'] = $row[6];
          $_SESSION['password'] = $row[7];

          echo $user;
          $sql2 = mysqli_query($con, "select * from tb_namausaha where username_pj = '$user'");

          while($row2 = mysqli_fetch_array($sql2)) {
            $_SESSION['id_usaha'] = $row2[0];
            $_SESSION['namausaha'] = $row2[1];
            $_SESSION['npwp'] = $row2[3];
            $_SESSION['alamat'] = $row2[4];
            $_SESSION['jenisjasa'] = $row2[5];
            $_SESSION['no_telp'] = $row2[6];
          }
          header("location: ../pageUser.php");
        }
        else {
          echo "Akun ini tidak valid. Silahkan kembali ke halaman utama";
          session_destroy();
        }
      } else {
        header("location: ../#services?error=1");
      }
    }
    mysqli_close($con);
  }
 ?>
