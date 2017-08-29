<?php include_once 'Koneksi/cekLogin.php';?>
<?php
  $con = mysqli_connect("localhost:3306", "root", "", "dbproject_salam");

  if($con) {
    $id_usaha = $_SESSION['id_usaha'];
    $username = $_SESSION['username'];
    $sql = mysqli_query($con, "select * from tb_pemesanan where id_usaha = '$id_usaha' and statusakad = 'Valid'");
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>PT. SALAM INDONESIA - List Permintaan</title>
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
    function display()
    {
      alert("Apakah anda yakin");
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
<body>
<div id="wrapper">
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
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
                                <li><a href="tambahPermintaan.php"><font color="40E0D0" style="font-weight: bold;">Tambah Permintaan </font></a></li>
                                <li><a href=""><font color="40E0D0" style="font-weight: bold;">List Permintaan </font></a></li>
                                <li><a href="Klaim.php"> <font color="40E0D0" style="font-weight: bold;">Klaim</font></a></li>
                                <li><a href="pageUser.php"><font color="40E0D0" style="font-weight: bold;">User </font></a></li>
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

    <div class="data">
          <div class="data_1" >
            <table border="0" cellspacing="2" cellpadding="20" style="margin-left:50px">
          <tbody>
        <tr>
    <div class="form-group">
      </div>
  </tr>
    </tbody>
  </table>
          </div>

    <div class="data">
      <html>
        <div class="form-group">
          <form>
            <fieldset>
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
            <div class="scroll">
         <div class="panel-heading">
          <h2>List Permintaan</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="scroll">
            <div class="panel-body no-padding">
              <table class="table table-striped">
    						<thead>
    							<tr class="warning">
    								<th>No Pesanan</th>
    								<th>Nama Barang</th>
    								<th>Kategori</th>
    								<th>Spesifikasi</th>
                    <th>Jumlah</th>
    								<th>Total Harga</th>
                    <th>Tanggal Permintaan</th>
                    <th>Status Pembayaran</th>
                    <th>Status Pengiriman</th>
    								<th>Waktu Akad</th>
                    <th>Estimasi Waktu Pengiriman</th>
                    <th>Edit</th>
    							</tr>
    						</thead>
    						<tbody>
                  <?php
                    if(!empty($sql)) {
                   ?>
                  <?php while($row = mysqli_fetch_array($sql)) { ?>
                  <th><?php echo $row[0]; ?></th>
                  <th><?php echo $row[1]; ?></th>
                  <?php
                    if($row[4] != "Peternakan") {
                      $row[5] = "-";
                      $row[6] = "-";
                    }
                   ?>
                  <th>Umur : <?php echo $row[5];?><br>Berat : <?php echo $row[6];?></th>
                  <th><?php echo $row[7]; ?></th>
                  <th><?php echo $row[8]; ?></th>
                  <th><?php echo $row[9]; ?></th>
                  <th><?php echo $row[10]; ?></th>
                  <th><?php echo $row[11]; ?></th>
                  <th><?php echo $row[12]; ?></th>
                  <th><?php echo $row[13]; ?></th>
                  <th><?php echo $row[14]; ?></th>
                  <th><a href="Koneksi/deleteTransact.php?id=<?php echo $row[0]; ?>">Hapus Transaksi</a></th>
                  <?php
                }
                   ?>
    						</tbody>
    					</table>
              <?php
                } else {
                  ?><h2 style="color:red"><?php echo "No data found";?></h2>
                  <?php } } ?>
            </fieldset>
          </form>
          </div>
          </div>
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
