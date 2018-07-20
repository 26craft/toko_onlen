<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Toko Onlen</title>
  </head>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <body>

    <div class="container">
      <div class="row">

        <div class="sidenav">
            <a href="../index.php">Toko Onlen</a>
            <a href="#services">Data Barang</a>
            <a href="#clients">Clients</a>
            <a href="#contact">Contact</a>
          </div>

        <div class="col-md-12">
          <div class="main">
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
                          || <a href="../view/edit.php?d=<?= $data['id_customer'] ?>">Edit</a>
                    </tr>
                  <?php } ?>
                </table>
                <form action="../config/reset.php" method="post">
                  <input type="submit" name="submit" class="btn btn-danger" value="Reset">
                </form>
               </div>
          </div>
        </div>
      </div>

    </div>

    <div id="piechart" style="margin-left:300px"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
