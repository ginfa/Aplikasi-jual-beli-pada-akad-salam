<?php include_once 'Koneksi/cekLogin.php';?>
<!DOCTYPE HTML>
<html>
<head>
<title>PT. SALAM INDONESIA - Pemesanan Sapi</title>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="images/ico/logos.png">
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!--webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function display() {
      alert("Apakah anda yakin");
    }

    function cekHarga2() {
      var a = document.getElementById('u1');
      var b = document.getElementById('u2');
      var c = document.getElementById('u3');
      var d = document.getElementById('b1');
      var e = document.getElementById('b2');
      var f = document.getElementById('b3');
      var z = document.getElementById('nominalHarga');

      if(a.checked && d.checked) {
        z.value = 5000000;
      }
      else if(a.checked && e.checked) {
        z.value = 5500000;
      }
      else if(a.checked && f.checked) {
        z.value = 6000000;
      }
      else if(b.checked && d.checked) {
        z.value = 5750000;
      }
      else if(b.checked && e.checked) {
        z.value = 6250000;
      }
      else if(b.checked && f.checked) {
        z.value = 6750000;
      }
      else if(c.checked && d.checked) {
        z.value = 6750000;
      }
      else if(c.checked && e.checked) {
        z.value = 7250000;
      }
      else if(c.checked && f.checked) {
        z.value = 8250000;
      }
    }

    function cekTotal2() {
      if(document.getElementById('nominalHarga').value != null || document.getElementById('nominalHarga').value != "") {
        var a = document.getElementById('jumlahBarang').value;
        var b = document.getElementById('nominalHarga').value;
        var c = document.getElementById('totalHarga');

        c.value = a * b;
      }
      else{
        alert("Pilih spesifikasi sapi terlebih dahulu");
      }
    }

    function onStartDate() {
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth()+1;
      var years = date.getFullYear();

      var tt = years + "-" + month + "-" + day;

      document.getElementById('deadlineAkad').setAttribute("min", tt);
    }
  </script>
<style>
	.wid_blog-desc {
	   margin-left:100px;
	}
	.h6 {
		margin-left:0px;
	}
	.col-md-12 widget_1_box2 {
		margin-left:150px;
	}
	.coffee {
		margin-left:20px;
	}
</style>
</head>
<body onload="onStartDate()">
  <div id="wrapper">
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
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
                                <li><a href="tambahPermintaan.php"><font color="40E0D0" style="font-weight: bold;"> Tambah Permintaan </font></a></li>
                                <li><a href="statusPermintaan.php"> <font color="40E0D0" style="font-weight: bold;">List permintaan</font></a></li>
                                <li><a href="Klaim.php"><font color="40E0D0" style="font-weight: bold;"> Feedback </font></a></li>
                                <li><a href="pageUser.php"><font color="40E0D0" style="font-weight: bold;"> Edit permintaan </font></a></li>
                                <li><a href="Koneksi/logout.php"><font color="40E0D0" style="font-weight: bold;" onclick="display()">Keluar</font></a></li>
                            </ul>
                        </li>
                    </ul>
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
					<div class="data_1" >
						<table border="0" cellspacing="2" cellpadding="20" style="margin-left:50px";>
					<tbody>
				<tr>
			<form form="action" method="post">
			<form>
    <div class="form-group">
      <div class="col-xs-6">
         </div>
	</tr>
		</tbody>
			</table>
				</form>
				</div>
					</div>

		<div class="data">
				<div class="form-group">
            <fieldset>
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
         <div class="panel-heading">
          <h2>PEMESANAN SAPI</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
            <div class="panel-body no-padding">
              <form action="Koneksi/tambahPermintaan.php" method="post">
                <table class="table table-striped" style="margin-left:0px ">
                  <input type="text" name="kategori" value="Peternakan" readonly="true" hidden="true">
                      <input type="text" name="nama_brg" value="Sapi" readonly="true" hidden="true">
                       <tr>
                       <td width="120">Umur</td>
                       <td>
                        <input class="radio-inline" type="radio" name="umur" id="u1" value="1" onclick="cekHarga2()"> 1thn - 2thn
                        <input class="radio-inline" type="radio" name="umur" id="u2" value="2" onclick="cekHarga2()"> 2thn - 3thn
                        <input class="radio-inline" type="radio" name="umur" id="u3" value="3" onclick="cekHarga2()"> > 3thn
                       </td>
                       </tr>
                       <br>
                       <tr>
                       <td width="50">Berat</td>
                       <td>
                          <input class="radio-inline" type="radio" name="berat" id="b1" value="1" onclick="cekHarga2()"> < 100kg
                          <input class="radio-inline" type="radio" name="berat" id="b2" value="2" onclick="cekHarga2()"> 100kg - 250kg
                          <input class="radio-inline" type="radio" name="berat" id="b3" value="3" onclick="cekHarga2()"> 250kg - 500kg
                         </td>
                       </tr>
                       <tr>
                       <td width="50">Harga/Ekor</td>
                         <td>
                          <label>
                            Rp. <input type="textfield" id="nominalHarga" name="nominalHarga" placeholder="Nominal Harga" readonly="true" required="true"> / ekor
                          </label>
                         </td>
                       </tr>
                       <tr>
                       <td width="50">Jumlah</td>
                         <td>
                          <label>
                            <input type="number" onchange="cekTotal2()" id="jumlahBarang" name="jumlahBarang" placeholder="Jumlah" min="0" max="1000" required="true">
                          </label>
                         </td>
                       </tr>
                       <tr>
                         <td> Spesifikasi </td>
                         <td><textarea placeholder="Spesifikasi (Kosongkan jika tidak ada)" style="width: 250px; height: 100px"></textarea></td>
                       </tr>
                       <tr>
                         <td>Masa Berakhir Akad</td>
                         <td>
                           <input type="date" id="deadlineAkad" name="deadlineAkad" required="true">
                         </td>
                       </tr>
                       <tr>
                       <td width="50">Total Harga</td>
                         <td>Rp. <input type="textfield" id="totalHarga" name="totalHarga" placeholder="Total Harga" readonly="true" required="true"></td>
                       </tr>
                       <br>
                       <tr>
                        <td><input type="submit" class="btn-success btn" style="margin-left: 50px;" value="Tambahkan Permintaan" name="submit"/></td>
                        <td><a href="pageUser.php"><button class="btn-success btn" style="margin-left: 50px;">Batal</button></a></td>
                       </tr>
                </table>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
	</div>
		   <div class="clearfix"> </div>

		   </div>
		   <div class="widget_5">
		   	 </div>

		     <div class="clearfix"> </div>
		   </div>
		   <div class="copy_layout" bgcolor="blue">
            <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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
