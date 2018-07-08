<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Toko Onlen</title>
  </head>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <td>Id Customer</td>
                  <td>Nama</td>
                  <td>e-mail</td>
                  <td>Password</td>
                  <td>Nomer Telepon</td>
                  <td colspan="2">Aksi</td>
                </tr>
                <?php
                  require_once '../config/koneksi.php';
                  $con=mysqli_query($koneksi, "SELECT*FROM customer");
                  while ($data =mysqli_fetch_array($con)) {
                  ?>
                  <tr>
                    <td><?php echo $data['id_customer']?></td>
                    <td><?php echo $data['nama_customer']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['password']?></td>
                    <td><?php echo $data['no_tlp']?></td>
                    <td><a href="../config/deletecustomer.php?d=<?= $data['id_customer'] ?>">Hapus</a>
                        || <a href="edit.php?d=<?= $data['id_customer'] ?>"
                          data-toggle="modal" data-target="#exampleModal">Edit</a>
                  </tr>
                <?php } ?>
              </table>
             </div>
        </div>
      </div>

    </div>

       <form action="../config/reset.php" method="post">
         <input type="submit" name="submit" class="btn btn-danger" value="Reset">
       </form>

       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
