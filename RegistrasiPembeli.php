<!DOCTYPE HTML>
<html>
<head>
<title> PT. SALAM INDONESIA - Registrasi Pembeli</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all,handheld" />
<script type="text/javascript" src="register.html"></script>
<script type="text/javascript" src="loading.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!--webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $("#hidden").css('display', 'block');
    $("#progress-bar").animate({width:"65%"}, 200); });
    $(window).bind('load', function() {
    $("#progress-bar").stop().animate({width:"100%"}, 200, function() {
    $("#hidden").fadeOut(300); }); });
</script>
</head>
<body id="login">
  <div class="login-logo">

  </div>
  <h2 class="form-heading">PT SALAM INDONESIA</h2>
  <form class="form-signin app-cam" method="post" action="Koneksi/registPembeli.php">
	  <p> Enter your account details below</p>
    <input type="text" name="namaUsaha" class="form-control1" placeholder="Nama Usaha" required="true">
    <input type="text" name="npwpUsaha" class="form-control1" placeholder="NPWP Usaha" required="true">
    <textarea name="alamatUsaha" rows="3" cols="30" placeholder="Alamat Usaha" class="form-control1" required="true"></textarea>
    <br><br>
    <select name="jenisUsaha" class="form-control1" required="true">
      <option value="Pertambangan">Pertambangan</option>
      <option value="Pabrikasi">Pabrikasi</option>
      <option value="Konstruksi">Konstruksi</option>
      <option value="Perorangan">Perorangan</option>
      <option value="Perdagangan">Perdagangan</option>
    </select>
    <br><br>
    <input type="text" name="noTelpUsaha" placeholder="Nomor Telpon Usaha" required="true">
    <hr size="30">
      <input type="text" name="namaPj" class="form-control1" placeholder="Nama Penanggung Jawab" required="true">
      <input type="text" name="noKtp" class="form-control1" placeholder="Nomor KTP Penanggung Jawab" required="true">
      <input type="text" name="notelp" class="form-control1" placeholder="Nomor Telfon Penanggung Jawab" required="true">
      <input type="date" name="tglLahir" class="form-control1" placeholder="Tanggal Lahir" required="true" min="1900-01-01" max="2050-01-01"><br><br>
      <textarea class="form-control1" name="alamat" cols="30" rows="3" placeholder="Alamat Lengkap Penanggung Jawab" required="true"></textarea>
      <br><br>
      <input type="text" name="namaIbu" class="form-control1" placeholder="Nama Ibu" required="true">
      <input type="text" name="username" class="form-control1" placeholder="User Name" required="true">
      <input type="password" name="password" class="form-control1" placeholder="Password" required="true">
      <input type="password" name="cpass" class="form-control1" placeholder="Re-type Password" required="true">
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" name="checkbox1" required="true"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit"><a href="index.php">Submit</a></button>
      <div class="registration">
          <div id="hidden">
            <div id="progress-bar">
              <br><br><br>
              <h2 style="margin-left: 10px;"><font style="font-weight: bold;">SELAMAT DATANG</font></h2>
            </div>
            <div id="loading">
          <a class="" href="login.php">
          </a>
            </div>
          </div>
      </div>
  </form>
   <div class="copy_layout login register">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by Ginfa Ghifary</a> </p>
   </div>
</body>
</html>
