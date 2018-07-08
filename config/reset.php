<?php
require_once "koneksi.php";

$reset=mysqli_query($koneksi,"DELETE FROM customer");

if ($reset) {
  echo "<script>alert('data berhasil direset');window.location='../view/datacustomer.php'</script>";
}else {
  echo "<script>alert('data gagal di reset');window.location='../view/datacustomer.php'</script>";
}
 ?>
