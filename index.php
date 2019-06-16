<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>APLIKASI MANAJEMEN KURIR</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Aplikasi Manajemen Kurir (Guest)</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="login.php">LOGIN ADMIN</a></li>
            <li><a href="index.php?page=crud/resi">CEK RESI</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <?php
		  if(!empty($_GET['page'])){
		  include('views/'.$_GET['page'].'.php');
		  }else{
	  ?>
      <div class="jumbotron">
      <p>Sistem Manajemen Kurir</p>
	 <div align="center"><img src="trheader.jpg"></div><br>
		Sistem Manajemen Kurir adalah solusi paling sederhana untuk Bisnis Kurir & Kargo Pelacakan. 
		Ini adalah Solusi Perangkat Lunak tercepat. Aplikasi ini Sangat mudah untuk mengatur dan mengelola 
		administrasi. Menyediakan sistem pelacakan online pengiriman dan detail pengiriman untuk pengiriman. 
		Kami telah membuat skrip ini, yang sangat sederhana.
		Baca Lebih Lanjut tentang Fitur. Terimakasih abang abang
		
	  </div>';
      <?php
	  }
      ?>
		
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
  </body>
</html>
