<?php include_once 'Koneksi/cekLogin.php';?>
<!DOCTYPE HTML>
<html>
<head>
<title>PT. SALAM INDONESIA - User</title>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">PT. SALAM INDONESIA</a>
    </div>
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
    </div>
  </nav>
    <div id="page-wrapper">
      <div class="graphs">
	      <div class="widget_4">
		      <div class="col-md-12 widget_1_box1">
		   	 	   <div class="coffee">
				        <div class="coffeetop">
                  Hello, <?php echo $_SESSION['fullname']; ?>
                  <br><br>
                  Nama PT : <?php echo $_SESSION['namausaha']; ?>
				        </div>
		            <tbody>
			            <div class="data">
				            <html>
	                    <div class="data_1">
		                    <table border="0" cellspacing="0" cellpadding="20" style="margin-left:50px";>
	                        <tbody>
	                        </tbody>
	                      </table>
	                     </div>
                    </html>
					        </div>
			            <div class="right" style="margin-left:60px";>
                  </div>
                </tbody>
		          </div>
            </div>
            <div class="clearfix"> </div>
		      </div>
		      <div class="widget_5"> </div>
		      <div class="clearfix"> </div>
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
