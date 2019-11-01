<?php
 error_reporting(0);
// include 'konek.php';


// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis
$so = $_POST['so'];
$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
$ambil_ori = $_POST['ambil_ori'];
$ambil_cho = $_POST['ambil_cho'];
$ambil_che = $_POST['ambil_che'];
$ambil_tb = $_POST['ambil_tb'];




// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)
 $querydaily		= "INSERT INTO pesanan_mingguan_bun VALUES ('id','$so','$tgl_ambil_tb','$ambil_ori','$ambil_cho','$ambil_che','$ambil_tb')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));

// $edit = mysqli_query($connect,"UPDATE jadwal_produksi SET id='$id', tgl='$tgl', so='$so', sisa_ori='$sisa_ori', sisa_cho='$sisa_cho', sisa_che='$sisa_che', sisa_tb='$sisa_tb', sisa_pb='$sisa_pb', sisa_kk='$sisa_kk', sisa_kv='$sisa_kv', sisa_tc='$sisa_tc', pesan_ori='$pesan_ori',pesan_cho='$pesan_cho',pesan_che='$pesan_che',pesan_tb='$pesan_tb',pesan_pb='$pesan_pb',pesan_kk='$pesan_kk',pesan_kv='$pesan_kv',pesan_tc='$pesan_tc', ngadon_ori='$ngadon_ori', ngadon_cho='$ngadon_cho', ngadon_che='$ngadon_che', ngadon_tb='$ngadon_tb', ngadon_pb='$ngadon_pb', ngadon_kk='$ngadon_kk', ngadon_kv='$ngadon_kv', ngadon_tc='$ngadon_tc' WHERE id='$id'");


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=pesanan_mingguan">';

// Proses simpan ke Database
// $sql = $pdo->prepare("INSERT INTO jadwal_ngadon VALUES(:nis,:tgl,:sisa_ori,:sisa_cho,:sisa_che,:sisa_tb,:sisa_pb,:sisa_kk,:sisa_kv,:sisa_tc,:pesan_ori,:pesan_cho,:pesan_che,:pesan_tb,:pesan_pb,:pesan_kk,:pesan_kv,:pesan_tc,:ngadon_ori,:ngadon_cho,:ngadon_che,:ngadon_tb,:ngadon_pb,:ngadon_kk,:ngadon_kv,:ngadon_tc)");

// $index = 0; // Set index array awal dengan 0
// foreach($nis as $datanis){ // Kita buat perulangan berdasarkan nis sampai data terakhir
// 	$sql->bindParam(':nis', $datanis); // Set data nis
// 	$sql->bindParam(':tgl', $tgl[$index]); // Ambil dan set data nama sesuai index array dari $index
// 	$sql->bindParam(':so', $so[$index]);

// 	$sql->bindParam(':sisa_ori', $sisa_ori[$index]); // Ambil dan set data telepon sesuai index array dari $index
// 	$sql->bindParam(':sisa_cho', $sisa_cho[$index]); // Ambil dan set data alamat sesuai index array dari $index
// 	$sql->bindParam(':sisa_che', $sisa_che[$index]);
// 	$sql->bindParam(':sisa_tb', $sisa_tb[$index]);
// 	$sql->bindParam(':sisa_pb', $sisa_pb[$index]);
// 	$sql->bindParam(':sisa_kk', $sisa_kk[$index]);
// 	$sql->bindParam(':sisa_kv', $sisa_kv[$index]);
// 	$sql->bindParam(':sisa_tc', $sisa_tc[$index]);

// 	$sql->bindParam(':pesan_ori', $pesan_ori[$index]);
// 	$sql->bindParam(':pesan_cho', $pesan_cho[$index]);
// 	$sql->bindParam(':pesan_che', $pesan_che[$index]);
// 	$sql->bindParam(':pesan_tb', $pesan_tb[$index]);
// 	$sql->bindParam(':pesan_pb', $pesan_pb[$index]);
// 	$sql->bindParam(':pesan_kk', $pesan_kk[$index]);
// 	$sql->bindParam(':pesan_kv', $pesan_kv[$index]);
// 	$sql->bindParam(':pesan_tc', $pesan_tc[$index]);

// 	$sql->bindParam(':ngadon_ori', $ngadon_ori[$index]);
// 	$sql->bindParam(':ngadon_cho', $ngadon_cho[$index]);
// 	$sql->bindParam(':ngadon_che', $ngadon_che[$index]);
// 	$sql->bindParam(':ngadon_tb', $ngadon_tb[$index]);
// 	$sql->bindParam(':ngadon_pb', $ngadon_pb[$index]);
// 	$sql->bindParam(':ngadon_kk', $ngadon_kk[$index]);
// 	$sql->bindParam(':ngadon_kv', $ngadon_kv[$index]);
// 	$sql->bindParam(':ngadon_tc', $ngadon_tc[$index]);

// 	$sql->execute(); // Eksekusi query insert
// 	$index++; // Tambah 1 setiap kali looping
// }

 // echo "<script>alert('Data berhasil disimpan');window.location = '../index.php?halaman=input_ngadon';</script>";
?>

