<?php
 error_reporting(0);
// include 'konek.php';


// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis // Ambil data nis dan masukkan ke variabel nis

$produksi_ori = $_POST['produksi_ori'];
$produksi_cho = $_POST['produksi_cho'];
$produksi_che = $_POST['produksi_che'];
$produksi_tb = $_POST['produksi_tb'];
$produksi_kk = $_POST['produksi_kk'];
$produksi_kv = $_POST['produksi_kv'];
$produksi_tc = $_POST['produksi_tc'];

// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)
 $querysj		= "INSERT INTO grafik_produksi VALUES (
 'id',
 '$produksi_ori',
 '$produksi_cho',
 '$produksi_che',
 '$produksi_tb',
 '$produksi_kk',
 '$produksi_kv',
 '$produksi_tc'
)";
 $simpansj		= mysqli_query($connect,$querysj)or die(mysqli_error($connect));

// $edit = mysqli_query($connect,"UPDATE jadwal_produksi SET id='$id', tgl='$tgl', so='$so', sisa_ori='$sisa_ori', sisa_cho='$sisa_cho', sisa_che='$sisa_che', sisa_tb='$sisa_tb', sisa_pb='$sisa_pb', sisa_kk='$sisa_kk', sisa_kv='$sisa_kv', sisa_tc='$sisa_tc', pesan_ori='$pesan_ori',pesan_cho='$pesan_cho',pesan_che='$pesan_che',pesan_tb='$pesan_tb',pesan_pb='$pesan_pb',pesan_kk='$pesan_kk',pesan_kv='$pesan_kv',pesan_tc='$pesan_tc', ngadon_ori='$ngadon_ori', ngadon_cho='$ngadon_cho', ngadon_che='$ngadon_che', ngadon_tb='$ngadon_tb', ngadon_pb='$ngadon_pb', ngadon_kk='$ngadon_kk', ngadon_kv='$ngadon_kv', ngadon_tc='$ngadon_tc' WHERE id='$id'");


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=grafik_produksi3">';

?>

