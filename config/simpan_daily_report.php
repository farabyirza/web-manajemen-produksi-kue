<?php
 error_reporting(0);
// include 'konek.php';


// Include / load file koneksi.php
include "konek.php";

// Ambil data yang dikirim dari form
$nis = $_POST['nis']; // Ambil data nis dan masukkan ke variabel nis
$tgl = $_POST['tgl']; // Ambil data nama dan masukkan ke variabel nama
$soa_ori = $_POST['soa_ori']; // Ambil data telp dan masukkan ke variabel telp
$soa_cho = $_POST['soa_cho']; // Ambil data alamat dan masukkan ke variabel alamat
$soa_che = $_POST['soa_che'];
$soa_tb = $_POST['soa_tb'];
$soa_pb = $_POST['soa_pb'];
$soa_kk = $_POST['soa_kk'];
$soa_kv = $_POST['soa_kv'];
$soa_tc = $_POST['soa_tc'];
$pen_ori = $_POST['pen_ori'];
$pen_cho = $_POST['pen_cho'];
$pen_che = $_POST['pen_che'];
$pen_tb = $_POST['pen_tb'];
$pen_pb = $_POST['pen_pb'];
$pen_kk = $_POST['pen_kk'];
$pen_kv = $_POST['pen_kv'];
$pen_tc = $_POST['pen_tc'];
$pst_tgl = $_POST['pst_tgl'];
$pst_tb = $_POST['pst_tb'];
$pst_pb = $_POST['pst_pb'];
$pst_tc = $_POST['pst_tc'];
$so = $_POST['so'];
$rencana_tb = $_POST['rencana_tb'];
$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
$rencana_tc = $_POST['rencana_tc'];
$tgl_ambil_tc = $_POST['tgl_ambil_tc'];
$rencana_pb = $_POST['rencana_pb'];
$tgl_ambil_pb = $_POST['tgl_ambil_pb'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO tbl_daily VALUES(:nis,:tgl,:soa_ori,:soa_cho,:soa_che,:soa_tb,:soa_pb,:soa_kk,:soa_kv,:soa_tc,:pen_ori,:pen_cho,:pen_che,:pen_tb,:pen_pb,:pen_kk,:pen_kv,:pen_tc,:pst_tgl,:pst_tb,:pst_pb,:pst_tc,:so,:rencana_tb,:tgl_ambil_tb,:rencana_tc,:tgl_ambil_tc,:rencana_pb,:tgl_ambil_pb)");

$index = 0; // Set index array awal dengan 0
foreach($nis as $datanis){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$sql->bindParam(':nis', $datanis); // Set data nis
	$sql->bindParam(':tgl', $tgl[$index]); // Ambil dan set data nama sesuai index array dari $index
	$sql->bindParam(':soa_ori', $soa_ori[$index]); // Ambil dan set data telepon sesuai index array dari $index
	$sql->bindParam(':soa_cho', $soa_cho[$index]); // Ambil dan set data alamat sesuai index array dari $index
	$sql->bindParam(':soa_che', $soa_che[$index]);
	$sql->bindParam(':soa_tb', $soa_tb[$index]);
	$sql->bindParam(':soa_pb', $soa_pb[$index]);
	$sql->bindParam(':soa_kk', $soa_kk[$index]);
	$sql->bindParam(':soa_kv', $soa_kv[$index]);
	$sql->bindParam(':soa_tc', $soa_tc[$index]);
	$sql->bindParam(':pen_ori', $pen_ori[$index]);
	$sql->bindParam(':pen_cho', $pen_cho[$index]);
	$sql->bindParam(':pen_che', $pen_che[$index]);
	$sql->bindParam(':pen_tb', $pen_tb[$index]);
	$sql->bindParam(':pen_pb', $pen_pb[$index]);
	$sql->bindParam(':pen_kk', $pen_kk[$index]);
	$sql->bindParam(':pen_kv', $pen_kv[$index]);
	$sql->bindParam(':pen_tc', $pen_tc[$index]);
	$sql->bindParam(':pst_tgl', $pst_tgl[$index]);
	$sql->bindParam(':pst_tb', $pst_tb[$index]);
	$sql->bindParam(':pst_pb', $pst_pb[$index]);
	$sql->bindParam(':pst_tc', $pst_tc[$index]);
	$sql->bindParam(':so', $so[$index]);
	$sql->bindParam(':rencana_tb', $rencana_tb[$index]);
	$sql->bindParam(':tgl_ambil_tb', $tgl_ambil_tb[$index]);
	$sql->bindParam(':rencana_tc', $rencana_tc[$index]);
	$sql->bindParam(':tgl_ambil_tc', $tgl_ambil_tc[$index]);
	$sql->bindParam(':rencana_pb', $rencana_pb[$index]);
	$sql->bindParam(':tgl_ambil_pb', $tgl_ambil_pb[$index]);
	$sql->execute(); // Eksekusi query insert
	$index++; // Tambah 1 setiap kali looping
}

// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)



 echo "<script>alert('Data berhasil disimpan');window.location = '../index.php?halaman=daily_report';</script>";











// 	$nis = $_POST['nis'];
// 	$tanggal_daily_report	= $_POST['tanggal_daily_report'];
// 	$so 					= $_POST['so'];

// 	$soa_ori        	= $_POST['soa_ori'];
// 	$soa_cho      		= $_POST['soa_cho'];
// 	$soa_che      		= $_POST['soa_che'];
// 	$soa_tb				= $_POST['soa_tb'];
// 	$soa_pb      		= $_POST['soa_pb'];
// 	$soa_kk      		= $_POST['soa_kk'];
// 	$soa_kv   			= $_POST['soa_kv'];
// 	$soa_tc     		= $_POST['soa_tc'];
// 	$soa_jml      		= $_POST['soa_jml'];

// 	$pen_ori      		= $_POST['pen_ori'];
// 	$pen_cho      		= $_POST['pen_cho'];
// 	$pen_che      		= $_POST['pen_che'];
// 	$pen_tb      		= $_POST['pen_tb'];
// 	$pen_pb      		= $_POST['pen_pb'];
// 	$pen_kk      		= $_POST['pen_kk'];
// 	$pen_kv      		= $_POST['pen_kv'];
// 	$pen_tc      		= $_POST['pen_tc'];
// 	$pen_jml      		= $_POST['pen_jml'];

// 	$pst_tgl			= $_POST['pst_tgl'];
// 	$pst_ori      		= $_POST['pst_ori'];
// 	$pst_cho      		= $_POST['pst_cho'];
// 	$pst_che      		= $_POST['pst_che'];
// 	$pst_tb      		= $_POST['pst_tb'];
// 	$pst_pb      		= $_POST['pst_pb'];
// 	$pst_kk      		= $_POST['pst_kk'];
// 	$pst_kv      		= $_POST['pst_kv'];
// 	$pst_tc      		= $_POST['pst_tc'];
// 	$pst_jml      		= $_POST['pst_jml'];

// 	$keterangan      	= $_POST['keterangan'];


// 	$sql = $pdo->prepare("INSERT INTO daily_report_tbl VALUES(:nis,:tanggal_daily_report,:so,:soa_ori,:soa_cho,:soa_che,:soa_tb,:soa_pb,:soa_kk,:soa_kv,:soa_tc,:soa_jml,:pen_ori,:pen_cho,:pen_che,:pen_tb,:pen_pb,:pen_kk,:pen_kv,:pen_tc,:pen_jml,:pst_tgl,:pst_ori,:pst_cho,:pst_che,:pst_tb,:pst_pb,:pst_kk,:pst_kv,:pst_tc,:pst_jml,:pst_keterangan)");


// 	$index = 0; // Set index array awal dengan 0'
// if(is_array($nis)){
// //foreach($id_daily_report as $dataid_daily_report=>$index){ // Kita buat perulangan berdasarkan nis sampai data terakhir

// 	foreach($nis as $datanis => $index){ // Kita buat perulangan berdasarkan nis sampai data terakhir
// 	$sql->bindParam(':nis', $datanis); // Set data nis
// 	$sql->bindParam(':tanggal_daily_report', $tanggal_daily[$index]);
// 	$sql->bindParam(':so', $so[$index]);
// 	$sql->bindParam(':soa_ori', $soa_ori[$index]); // Ambil dan set data nama sesuai index array dari $index
// 	$sql->bindParam(':soa_cho', $soa_cho[$index]); // Ambil dan set data telepon sesuai index array dari $index
// 	$sql->bindParam(':soa_che', $soa_che[$index]); // Ambil dan set data alamat sesuai index array dari $index
// 	$sql->bindParam(':soa_tb', $soa_tb[$index]);
// 	$sql->bindParam(':soa_pb', $soa_pb[$index]);
// 	$sql->bindParam(':soa_kk', $soa_kk[$index]);
// 	$sql->bindParam(':soa_kv', $soa_kv[$index]);
// 	$sql->bindParam(':soa_tc', $soa_tc[$index]);
// 	$sql->bindParam(':soa_jml', $soa_jml[$index]);
// 	$sql->bindParam(':pen_ori', $pen_ori[$index]);
// 	$sql->bindParam(':pen_cho', $pen_cho[$index]);
// 	$sql->bindParam(':pen_che', $pen_che[$index]);
// 	$sql->bindParam(':pen_tb', $pen_tb[$index]);
// 	$sql->bindParam(':pen_pb', $pen_pb[$index]);
// 	$sql->bindParam(':pen_kk', $pen_kk[$index]);
// 	$sql->bindParam(':pen_kv', $pen_kv[$index]);
// 	$sql->bindParam(':pen_tc', $pen_tc[$index]);
// 	$sql->bindParam(':pen_jml', $pen_jml[$index]);
// 	$sql->bindParam(':pst_tgl', $pst_tgl[$index]);
// 	$sql->bindParam(':pst_ori', $pst_ori[$index]);
// 	$sql->bindParam(':pst_cho', $pst_cho[$index]);
// 	$sql->bindParam(':pst_che', $pst_che[$index]);
// 	$sql->bindParam(':pst_tb', $pst_tb[$index]);
// 	$sql->bindParam(':pst_pb', $pst_pb[$index]);
// 	$sql->bindParam(':pst_kk', $pst_kk[$index]);
// 	$sql->bindParam(':pst_kv', $pst_kv[$index]);
// 	$sql->bindParam(':pst_tc', $pst_tc[$index]);
// 	$sql->bindParam(':pst_jml', $pst_jml[$index]);
// 	$sql->bindParam(':keterangan', $keterangan[$index]);
// 	$sql->execute(); // Eksekusi query insert
	
// 	$index++; // Tambah 1 setiap kali looping
// }
// }
//  echo "<script>alert('Data berhasil disimpan');window.location = '../index.php?halaman=daily_report';</script>";
// // echo "<i>Data telah berhasil diinput.</i>";
// // echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=page1">';			

?>

