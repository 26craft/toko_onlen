<?php

  require_once "koneksi.php";

  $id_customer=$_POST['id_customer'];
  $nama_customer=$_POST['nama_customer'];
  $password=$_POST['password'];
  $no_tlp=$_POST['no_tlp'];

  $con=mysqli_query($koneksi, "UPDATE customer SET id_customer='$id_customer', nama_customer='$nama_customer',
  password='$password', no_tlp='$no_tlp',  where id_customer='$id_customer'");

  if ($con) {
    echo "<script>alert('Data customer berhasil diubah');window.location='../view/datacustomer.php'</script>";
  }else {
    echo "<script>alert('gagal bro');window.location='../view/datacustomer.php'</script>";
  }

 ?>
