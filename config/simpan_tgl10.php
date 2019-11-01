<?php
// Include / load file koneksi.php
include "konek.php";

// Ambil data yang dikirim dari form
// $nis = $_POST['nis']; // Ambil data nis dan masukkan ke variabel nis
// $nama = $_POST['nama']; // Ambil data nama dan masukkan ke variabel nama
// $telp = $_POST['telp']; // Ambil data telp dan masukkan ke variabel telp
// $alamat = $_POST['alamat']; // Ambil data alamat dan masukkan ke variabel alamat

$id = $_POST['id'];
$tgl = $_POST['tgl'];
$so = $_POST['so'];
$pst_tgl = $_POST['pst_tgl'];
$rencana_tb = $_POST['rencana_tb'];
$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
$rata_ori = $_POST['rata_ori'];
$rata_cho = $_POST['rata_cho'];
$rata_che = $_POST['rata_che'];
$rata = $_POST['rata'];
$rata_kk = $_POST['rata_kk'];
$rata_kv = $_POST['rata_kv'];
$rata_tc = $_POST['rata_tc'];
$rata_pb = $_POST['rata_pb'];
$pengambilan = $_POST['pengambilan'];
$tgl_produksi = $_POST['tgl_produksi'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO jadwal_pengambilan VALUES(:id,:tgl,:so,:pst_tgl,:rencana_tb,:tgl_ambil_tb,:rata_ori,:rata_cho,:rata_che,:rata,:rata_kk,:rata_kv,:rata_tc,:rata_pb,:pengambilan,:tgl_produksi)");

$index = 0; // Set index array awal dengan 0
foreach($id as $dataid){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$sql->bindParam(':id', $dataid); // Set data nis
	$sql->bindParam(':tgl', $tgl[$index]); // Ambil dan set data nama sesuai index array dari $index
	$sql->bindParam(':so', $so[$index]); // Ambil dan set data telepon sesuai index array dari $index
	$sql->bindParam(':pst_tgl', $pst_tgl[$index]); // Ambil dan set data alamat sesuai index array dari $index
	$sql->bindParam(':rencana_tb', $rencana_tb[$index]);
	$sql->bindParam(':tgl_ambil_tb', $tgl_ambil_tb[$index]);
	$sql->bindParam(':rata_ori', $rata_ori[$index]);
	$sql->bindParam(':rata_cho', $rata_cho[$index]);
	$sql->bindParam(':rata_che', $rata_che[$index]);
	$sql->bindParam(':rata', $rata[$index]);
	$sql->bindParam(':rata_kk', $rata_kk[$index]);
	$sql->bindParam(':rata_kv', $rata_kv[$index]);
	$sql->bindParam(':rata_tc', $rata_tc[$index]);
	$sql->bindParam(':rata_pb', $rata_pb[$index]);
	$sql->bindParam(':pengambilan', $pengambilan[$index]);
	$sql->bindParam(':tgl_produksi', $tgl_produksi[$index]);
	$sql->execute(); // Eksekusi query insert
	
	$index++; // Tambah 1 setiap kali looping
}

// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)
echo "Tanggal telah ditambah.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=penjadwalan">';
?>

