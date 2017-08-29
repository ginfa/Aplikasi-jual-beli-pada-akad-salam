<?php include_once 'Koneksi/cekLogin.php';?>
<!DOCTYPE HTML>
<html>
<head>
<title>PT. SALAM INDONESIA - Pemesanan Hasil Kebun</title>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="images/ico/logos.png">
<link href="css/font-awesome.css" rel="stylesheet">
<!-- JQuery -->
<script src="js/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function display()
    {
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
        b.value = 25000;
      }
      else if(a.selectedIndex == 1) {
        b.value = 23000;
      }
      else if(a.selectedIndex == 2) {
        b.value = 20000;
      }
      else if(a.selectedIndex == 3) {
        b.value = 12000;
      }
      else if(a.selectedIndex == 4) {
        b.value = 11000;
      }
      else if(a.selectedIndex == 5) {
        b.value = 8000;
      }
      else if(a.selectedIndex == 6) {
        b.value = 9000;
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
      <form class="navbar-form navbar-right">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                            <i class="fa fa-laptop nav_icon"></i><font color="40E0D0" style="font-weight: bold;">USER</font><span class="fa arrow"></span>
                            <!-- /.nav-second-level -->

                            <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i><font color="40E0D0" style="font-weight: bold;">MENU</font><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <!-- /.nav-second-level -->
                                <li>
                                    <a href="tambahPermintaan.php"><font color="40E0D0" style="font-weight: bold;"> Tambah Permintaan </font></a>
                                </li>
                                <li>
                                    <a href="statusPermintaan.php"><font color="40E0D0" style="font-weight: bold;">List Permintaan </font></a>
                                </li>
                                <li>
                                    <a href="Klaim.php"> <font color="40E0D0" style="font-weight: bold;">Klaim</font></a>
                                </li>
                                <li>
                                    <a href="pageUser.php"><font color="40E0D0" style="font-weight: bold;"> User </font></a>
                                </li>
                                <li>
                                    <a href="Koneksi/logout.php"><font color="40E0D0" style="font-weight: bold;" onclick="display()">Keluar</font></a>
                                </li>
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
        <div class="coffeetop">
        </div>
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
</nav>
  <tbody>
    <div class="data">
        <html>
          <div class="data_1" >
            <table border="0" cellspacing="2" cellpadding="20" style="margin-left:50px";>
          <tbody>
        <tr>
      <form form="action" method="post">
      <form>
    <div class="form-group">
      <div class="col-xs-6">
         </div>
 <td>
  </tr>
    </tbody>
      </table>
        </form>
        </div>
          </div>
    <div class="data">
      <html>
        <div class="form-group">
            <fieldset>
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
         <div class="panel-heading">
          <h2>Permintaan Perkebunan</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
            <div class="panel-body no-padding">
              <form class="" action="Koneksi/tambahPermintaan.php" method="post">
                <table class="table table-striped" style="margin-left:0px ">
                       <tr>
                        <td width="50">Jenis Perkebunan</td>
                        <td>
                          <label>
                            <select id="nama_brg" name="nama_brg" onchange="cekHarga2()" style="width: 150px">
                              <option value="Sawit">Sawit</option>
                              <option value="Kelapa">Kelapa</option>
                              <option value="Kapuk">Kapuk</option>
                              <option value="Kapas">Kapas</option>
                              <option value="Kopi">Kopi</option>
                              <option value="Teh">Teh</option>
                              <option value="Tebu">Tebu</option>
                            </select>
                          </label>
                        </td>
                        </td>
                       </tr>
                       <tr>
                         <td width="50">Harga per Satuan</td>
                         <td>
                        <label>
                          Rp. <input type="text" id="nominalHarga" name="nominalHarga" placeholder="Nominal Harga" readonly="true"> / kg
                        </label>
                       </td>
                     </tr>
                     <tr>
                     <td width="50">Jumlah</td>
                       <td>
                        <label>
                          <input type="number" id="jumlahBarang" onchange="cekTotal()" name="jumlahBarang" placeholder="Jumlah" min="100" max="5000">
                        </label>
                       </td>
                     </tr>
                     <tr>
                       <td>Masa Berakhir Akad</td>
                       <td>
                         <input type="date" id="deadlineAkad" name="deadlineAkad" onload="onStartDate()">
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
                          Rp. <input type="text" id="totalHarga" name="totalHarga" placeholder="Total Harga" readonly="true">
                        </label>
                        <input type="text" name="kategori" value="Perkebunan" readonly="true" hidden="true">
                       </td>
                     </tr>
                     <br>
                     <tr>
                     <td><input type="submit" value="Tambah Permintaan" name="submit" class="btn-success btn" style="margin-left: 50px;"></td>
                     <td><a href=""><button class="btn-success btn" style="margin-left: 50px;">Batal</button></a></td>
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
