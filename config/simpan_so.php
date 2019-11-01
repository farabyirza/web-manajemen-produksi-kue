<?php
 error_reporting(0);

include "koneksi.php";

$id = $_POST['id']; 

$so = $_POST['so']; 
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];




 $querydaily		= "INSERT INTO sales_outlet VALUES ('$id','$so','$alamat','$no_telp')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=so">';

?>

