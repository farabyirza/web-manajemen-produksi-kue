<?php
 error_reporting(0);
// include 'konek.php';


// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis // Ambil data nis dan masukkan ke variabel nis

$so = $_POST['so']; // Ambil data nama dan masukkan ke variabel nama
$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
$tgl_surat = $_POST['tgl_surat'];
$lokasi = $_POST['lokasi'];
$pic = $_POST['pic'];

$rata_ori = $_POST['rata_ori'];
$rata_cho = $_POST['rata_cho'];
$rata_che = $_POST['rata_che'];
$rata = $_POST['rata'];
$rata_kk = $_POST['rata_kk'];
$rata_kv = $_POST['rata_kv'];
$rata_tc = $_POST['rata_tc'];
$rata_pb = $_POST['rata_pb'];

// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)
 $querysj		= "INSERT INTO surat_jalan VALUES (
 'id',
 '$so',
 '$tgl_ambil_tb',
 '$tgl_surat',
 '$lokasi',
 '$pic',
 
 '$rata_ori',
 '$rata_cho',
 '$rata_che',
 '$rata',
 '$rata_kk',
 '$rata_kv',
 '$rata_tc',
 '$rata_pb')";
 $simpansj		= mysqli_query($connect,$querysj)or die(mysqli_error($connect));

// $edit = mysqli_query($connect,"UPDATE jadwal_produksi SET id='$id', tgl='$tgl', so='$so', sisa_ori='$sisa_ori', sisa_cho='$sisa_cho', sisa_che='$sisa_che', sisa_tb='$sisa_tb', sisa_pb='$sisa_pb', sisa_kk='$sisa_kk', sisa_kv='$sisa_kv', sisa_tc='$sisa_tc', pesan_ori='$pesan_ori',pesan_cho='$pesan_cho',pesan_che='$pesan_che',pesan_tb='$pesan_tb',pesan_pb='$pesan_pb',pesan_kk='$pesan_kk',pesan_kv='$pesan_kv',pesan_tc='$pesan_tc', ngadon_ori='$ngadon_ori', ngadon_cho='$ngadon_cho', ngadon_che='$ngadon_che', ngadon_tb='$ngadon_tb', ngadon_pb='$ngadon_pb', ngadon_kk='$ngadon_kk', ngadon_kv='$ngadon_kv', ngadon_tc='$ngadon_tc' WHERE id='$id'");


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=surat_jalan">';

?>

