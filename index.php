<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Toko Onlen</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!--font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Toko Onlen</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Sementara <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="view/datacustomer.php">Lihat Data Customer Sementara</a></li>
            <li><a href="#">Fashion Pria</a></li>
            <li><a href="#">Fashion Wanita</a></li>
            <li><a href="#">Fashion Anak - Anak</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Olah Raga</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Kesehatan</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cari Barang" style="width:800px;">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="fa fa-shopping-cart fa-2x" title="Keranjang Belanja"></a></li>
        <!-- Button trigger modal -->
        <li><a href="#"  data-toggle="modal" data-target="#exampleModal">Daftar</a></li>
        <li><a href="#">Masuk</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <!-- Modal daftar -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="config/daftar.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            Masukan Nama : <input type="text" name="nama_customer" placeholder="nama" required />
          </div>
          <div class="form-group">
            Masukan e-mail : <input type="text" name="email" placeholder="email" required />
          </div>
          <div class="form-group">
            Masukan Password : <input type="text" name="password" placeholder="password" required />
          </div>
          <div class="form-group">
            Masukan No Tlp : <input type="number" name="no_tlp" placeholder="+62..." required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" value="simpan" class="btn btn-primary">
        </div>
      </div>
      </div>
      </div>

    <div class="container">
      <div class="row">
        </form>
        <h3>Gawai</h3>
        <?php
          for ($i=0; $i < 4; $i++) {
            ?>
            <div class="col-sm-3">
              <div class="thumbnail">
                <img src="img/sonyz5.jpg" alt="...">
                <p>nama barang</p>
                <p>harga</p>
              </div>
            </div>
         <?php } ?>
      </div>

      <div class="row">

        <h3>Fashion Pria</h3>
        <?php
          for ($i=0; $i < 4; $i++) {
            ?>
            <div class="col-sm-3">
              <div class="thumbnail">
                <img src="img/iphonese.jpeg" alt="...">
                <p>nama barang</p>
                <p>harga</p>
              </div>
            </div>
         <?php } ?>

      </div>

    </div>

    <div class="footer">
      Copyright &copy 2018 Copyright Holder All Rights Reserved.
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
