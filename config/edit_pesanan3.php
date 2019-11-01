<?php
error_reporting(0);
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis
$so = $_POST['so'];
$tgl_ambil_tb = $_POST['tgl_ambil_tb']; // Ambil data telp dan masukkan ke variabel telp
$ambil_ori = $_POST['ambil_ori']; // Ambil data alamat dan masukkan ke variabel alamat
$ambil_cho = $_POST['ambil_cho'];
$ambil_che = $_POST['ambil_che'];
$ambil_tb = $_POST['ambil_tb'];
// $ambil_vanila = $_POST['ambil_vanila'];
// $ambil_keju = $_POST['ambil_keju'];
// $ambil_tc = $_POST['ambil_tc'];
// $ambil_pb = $_POST['ambil_pb'];
	
	

// query SQL untuk insert data

$edit = mysqli_query($connect,"UPDATE pesanan_mingguan_bun SET id='$id', so='$so', tgl_ambil_tb='$tgl_ambil_tb', ambil_ori='$ambil_ori', ambil_cho='$ambil_cho', ambil_che='$ambil_che', ambil_tb='$ambil_tb' WHERE id='$id'");

echo "Data telah berhasil diedit.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=jadwal_pesanan_mingguan3">';			


// $sql = $pdo->prepare("INSERT INTO tbl_daily VALUES(:nis,:tgl,:soa_ori,:soa_cho,:soa_che,:soa_tb,:soa_pb,:soa_kk,:soa_kv,:soa_tc,:soa_jml,:pen_ori,:pen_cho,:pen_che,:pen_tb,:pen_pb,:pen_kk,:pen_kv,:pen_tc,:pen_jml,:pst_tgl,:pst_ori,:pst_cho,:pst_che,:pst_tb,:pst_pb,:pst_kk,:pst_kv,:pst_tc,:pst_jml,:so,:keterangan)");
// $edit_proof		= mysqli_query($connect,"UPDATE proofingdanoven SET so='$so', jumlah1='$jumlah1', pukul1='$pukul1', jumlah2='$jumlah2', pukul2='$pukul2', jumlah3='$jumlah3', pukul3='$pukul3', jumlah4='$jumlah4', pukul4='$pukul4', jumlah5='$jumlah5', pukul5='$pukul5', jumlah6='$jumlah6', pukul6='$pukul6', jumlah7='$jumlah7', pukul7='$pukul7', jumlah8='$jumlah8', pukul8='$pukul8', jumlah9='$jumlah9', pukul9='$pukul9', jumlah10='$jumlah10', pukul10='$pukul10' WHERE id_proof='$id_proof'");
?>

                     