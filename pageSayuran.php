<?php include_once 'Koneksi/cekLogin.php';?>
<!DOCTYPE HTML>
<html>
<head>
  <title>PT. SALAM INDONESIA - Pemesanan Hasil Sayuran</title>
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link rel="shortcut icon" href="images/ico/logos.png">
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!--webfonts--->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function display() {
      alert("Apakah anda yakin");
    }

    function onStartDate() {
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth()+1;
      var years = date.getFullYear();

      var tt = years + "-" + month + "-" + day;

      document.getElementById('deadlineAkad').setAttribute("min", tt);
    }

    function cekHarga2() {
      var a = document.getElementById('nama_brg');
      var b = document.getElementById('nominalHarga');

      if(a.selectedIndex == 0) {
        b.value = 2000;
      }
      else if(a.selectedIndex == 1) {
        b.value = 1700;
      }
      else if(a.selectedIndex == 2) {
        b.value = 2000;
      }
    }

    function cekTotal() {
      var a = document.getElementById('nominalHarga').value;
      var b = document.getElementById('jumlahBarang').value;
      var c = document.getElementById('totalHarga');

      c.value = a * b;
    }
  </script>
  <style>
    .wid_blog-desc{
      margin-left:100px;
    }
    .h6{
      margin-left:0px;
    }
    .col-md-12 widget_1_box2{
      margin-left:150px;
    }
    .coffee{
      margin-left:20px;
    }
  </style>
</head>
<body onload="onStartDate(); cekHarga2()">
<div id="wrapper">
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PT. SALAM INDONESIA</a>
            </div>
                </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                            <i class="fa fa-laptop nav_icon"></i><font color="40E0D0" style="font-weight: bold;">USER</font><span class="fa arrow"></span>
                            <!-- /.nav-second-level -->
                            <li><a href="#"><i class="fa fa-indent nav_icon"></i><font color="40E0D0" style="font-weight: bold;">MENU</font><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <!-- /.nav-second-level -->
                                <li><a href="tambahPermintaan.php"><font color="40E0D0" style="font-weight: bold;"> Tambah Permintaan </font></a></li>
                                <li><a href="statusPermintaan.php"><font color="40E0D0" style="font-weight: bold;"> List Permintaan </font></a></li>
                                <li><a href="Klaim.php"> <font color="40E0D0" style="font-weight: bold;">Klaim</font></a></li>
                                <li><a href="pageUser.php"><font color="40E0D0" style="font-weight: bold;"> User </font></a></li>
                                <li><a href="Koneksi/logout.php"><font color="40E0D0" style="font-weight: bold;" onclick="display()">Keluar</font></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
        <div class="widget_4">
         <div class="col-md-12 widget_1_box1">
          <div class="coffee">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <ul class="nav navbar-nav">
                  <li><a href="pageUser.php">Home</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Peternakan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="pageSapi.php">Sapi</a></li>
                      <li><a href="pageKambing.php">Kambing</a></li>
                      <li><a href="pageAyam.php">Ayam</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="pagePerkebunan.php">Perkebunan
                    </a>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pertanian <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="pageSayuran.php"><font style="font-weight: bold;">Sayuran</font></a></li>
                      <li><a href="pageBuah.php"><font style="font-weight: bold;">Buah</font></a></li>
                      <li><a href="pagePangan.php"><font style="font-weight: bold;">Pangan</font></a></li>
                    </ul>
                  </li>
                </div>
              </div>
            </nav>
    <div class="data">
          <div class="data_1" >
            <table border="0" cellspacing="2" cellpadding="20" style="margin-left:50px">
          <tbody>
        <tr>
    <div class="form-group">
  </tr>
    </tbody>
      </table>
        </div>
          </div>

    <div class="data">
      <html>
        <div class="form-group">
            <fieldset>
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
         <div class="panel-heading">
          <h2>PEMESANAN SAYURAN</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
            <div class="panel-body no-padding">
              <form class="" action="Koneksi/tambahPermintaan.php" method="post">
              <input type="text" name="kategori" id="kategori" value="Pertanian" readonly="true" hidden="true">
              <table class="table table-striped" style="margin-left:0px ">
                     <tr>
                       <tr>
                         <td width="50">Jenis Sayuran</td>
                         <td>
                           <label>
                             <select id="nama_brg" name="nama_brg" style="width: 150px" onchange="cekHarga2()">
                               <option value="Kol">Kol</option>
                               <option value="Lobak">Lobak</option>
                               <option value="Terong">Terong</option>
                             </select>
                           </label>
                         </td>
                       </tr>
                     <tr>
                     <td width="50">Harga/Satuan</td>
                       <td>
                        <label>
                          Rp. <input type="textfield" id="nominalHarga" name="nominalHarga" placeholder="Harga Satuan" readonly="true" required="true"> /kg
                        </label>
                       </td>
                     </tr>
                     <tr>
                     <td width="50">Jumlah</td>
                       <td>
                        <label>
                          <input type="number" id="jumlahBarang" name="jumlahBarang" onchange="cekTotal()" placeholder="Jumlah" min="50" max="10000" required="true">
                        </label>
                       </td>
                     </tr>
                     <tr>
                       <td>Masa Berakhir Akad</td>
                       <td>
                         <input type="date" id="deadlineAkad" name="deadlineAkad" onload="onStartDate()" required="true">
                       </td>
                     </tr>
                     <tr>
                       <td> Spesifikasi </td>
                       <td>
                         <textarea placeholder="Spesifikasi (Kosongkan jika tidak ada)" style="width: 250px; height: 100px"></textarea>
                       </td>
                     </tr>
                     <tr>
                     <td width="50">Total Harga</td>
                       <td>
                        <label>
                          Rp. <input type="textfield" id="totalHarga" name="totalHarga" placeholder="Total Harga" readonly="true" required="true">
                        </label>
                       </td>
                     </tr>
                     <br>
                     <tr>
                     <td><a href=""><button class="btn-success btn" style="margin-left: 50px;" name="submit">Tambah Permintaan</button></a></td><td><a href=""><button class="btn-success btn" style="margin-left: 50px;">Batal</button></a></td>
                     </tr>
              </table>
            </fieldset>
          </form>
          </div>
        </div>
      </div>
  </div>
       <div class="copy_layout" bgcolor="blue">
            <p>Copyright © 2015 Modern. All Rights Reserved | Design by Ginfa Ghifary</a> </p>
           </div>
    </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
