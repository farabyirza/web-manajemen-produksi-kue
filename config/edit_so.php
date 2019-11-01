<?php
 error_reporting(0);

include "koneksi.php";

$id = $_POST['id']; 

$so = $_POST['so']; 
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];




 $edit = mysqli_query($connect,"UPDATE sales_outlet SET id='$id', so='$so', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'");

echo "Data telah berhasil diedit.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=so">';			

?>

