<?php
// Include / load file koneksi.php
include "konek.php";

// Ambil data yang dikirim dari form
// $nis = $_POST['nis']; // Ambil data nis dan masukkan ke variabel nis
// $nama = $_POST['nama']; // Ambil data nama dan masukkan ke variabel nama
// $telp = $_POST['telp']; // Ambil data telp dan masukkan ke variabel telp
// $alamat = $_POST['alamat']; // Ambil data alamat dan masukkan ke variabel alamat

$id = $_POST['id'];

$jumlah_produksi = $_POST['jumlah_produksi'];



// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO grafik_produksi VALUES(:id,:jumlah_produksi)");

$index = 0; // Set index array awal dengan 0
foreach($id as $dataid){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$sql->bindParam(':id', $dataid); // Set data nis
	$sql->bindParam(':jumlah_produksi', $jumlah_produksi[$index]); // Ambil dan set data nama sesuai index array dari $index
	
	$sql->execute(); // Eksekusi query insert
	
	$index++; // Tambah 1 setiap kali looping
}

// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)
echo "Tanggal telah ditambah.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=grafik_produksi3">';
?>

