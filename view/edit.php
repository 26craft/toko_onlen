<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="datacustomer.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
    require_once '../config/koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM customer where id_customer='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="../config/editcustomer.php" method="post">
		<table>
			<tr>
				<td>ID</td>
				<td>
					<input type="text" name="id_customer" value="<?php echo $data['id_customer'] ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_customer" value="<?php echo $data['nama_customer'] ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
			</tr>
      <tr>
				<td>No Tlp</td>
				<td><input type="text" name="no_tlp" value="<?php echo $data['no_tlp'] ?>"></td>
			</tr>
      <tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>
