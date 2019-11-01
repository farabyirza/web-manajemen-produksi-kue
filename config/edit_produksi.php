<?php
error_reporting(0);
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis
 
$sisa_ori = $_POST['sisa_ori']; 
$sisa_cho = $_POST['sisa_cho']; 
$sisa_che = $_POST['sisa_che'];
$sisa_tb = $_POST['sisa_tb'];
$sisa_kk = $_POST['sisa_kk'];
$sisa_kv = $_POST['sisa_kv'];
$sisa_tc = $_POST['sisa_tc'];

$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
$tgl_produksi = $_POST['tgl_produksi'];
$rata_ori = $_POST['rata_ori'];
$rata_cho = $_POST['rata_cho'];
$rata_che = $_POST['rata_che'];
$rata_tb = $_POST['rata_tb'];
$rata_kk = $_POST['rata_kk'];
$rata_kv = $_POST['rata_kv'];
$rata_tc = $_POST['rata_tc'];

$produksi_ori = $_POST['produksi_ori'];
$produksi_cho = $_POST['produksi_cho'];
$produksi_che = $_POST['produksi_che'];
$produksi_tb = $_POST['produksi_tb'];
$produksi_kk = $_POST['produksi_kk'];
$produksi_kv = $_POST['produksi_kv'];
$produksi_tc = $_POST['produksi_tc'];
	

// query SQL untuk insert data

$edit = mysqli_query($connect,"UPDATE jadwal_produksi SET 
	id='$id', 
	sisa_ori='$sisa_ori', 
	sisa_cho='$sisa_cho', 
	sisa_che='$sisa_che', 
	sisa_tb='$sisa_tb', 
	sisa_kk='$sisa_kk', 
	sisa_kv='$sisa_kv', 
	sisa_tc='$sisa_tc', 

	tgl_ambil_tb='$tgl_ambil_tb',
	tgl_produksi='$tgl_produksi', 
	rata_ori='$rata_ori', 
	rata_cho='$rata_cho', 
	rata_che='$rata_che', 
	rata_tb='$rata_tb',  
	rata_kk='$rata_kk', 
	rata_kv='$rata_kv', 
	rata_tc='$rata_tc', 

	produksi_ori='$produksi_ori', 
	produksi_cho='$produksi_cho', 
	produksi_che='$produksi_che', 
	produksi_tb='$produksi_tb',  
	produksi_kk='$produksi_kk', 
	produksi_kv='$produksi_kv', 
	produksi_tc='$produksi_tc' WHERE id='$id'");

echo "Data telah berhasil diedit.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=jadwal_produksi5">';			


// $sql = $pdo->prepare("INSERT INTO tbl_daily VALUES(:nis,:tgl,:soa_ori,:soa_cho,:soa_che,:soa_tb,:soa_pb,:soa_kk,:soa_kv,:soa_tc,:soa_jml,:pen_ori,:pen_cho,:pen_che,:pen_tb,:pen_pb,:pen_kk,:pen_kv,:pen_tc,:pen_jml,:pst_tgl,:pst_ori,:pst_cho,:pst_che,:pst_tb,:pst_pb,:pst_kk,:pst_kv,:pst_tc,:pst_jml,:so,:keterangan)");
// $edit_proof		= mysqli_query($connect,"UPDATE proofingdanoven SET so='$so', jumlah1='$jumlah1', pukul1='$pukul1', jumlah2='$jumlah2', pukul2='$pukul2', jumlah3='$jumlah3', pukul3='$pukul3', jumlah4='$jumlah4', pukul4='$pukul4', jumlah5='$jumlah5', pukul5='$pukul5', jumlah6='$jumlah6', pukul6='$pukul6', jumlah7='$jumlah7', pukul7='$pukul7', jumlah8='$jumlah8', pukul8='$pukul8', jumlah9='$jumlah9', pukul9='$pukul9', jumlah10='$jumlah10', pukul10='$pukul10' WHERE id_proof='$id_proof'");
?>

                     