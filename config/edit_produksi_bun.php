<?php
error_reporting(0);
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis
$tgl = $_POST['tgl']; // Ambil data nama dan masukkan ke variabel nama
$so = $_POST['so'];
$sisa_ori = $_POST['sisa_ori']; // Ambil data telp dan masukkan ke variabel telp
$sisa_cho = $_POST['sisa_cho']; // Ambil data alamat dan masukkan ke variabel alamat
$sisa_che = $_POST['sisa_che'];
$sisa_tb = $_POST['sisa_tb'];
$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
$pesan_ori = $_POST['pesan_ori'];
$pesan_cho = $_POST['pesan_cho'];
$pesan_che = $_POST['pesan_che'];
$pesan_tb = $_POST['pesan_tb'];
$ngadon_ori = $_POST['ngadon_ori'];
$ngadon_cho = $_POST['ngadon_cho'];
$ngadon_che = $_POST['ngadon_che'];
$ngadon_tb = $_POST['ngadon_tb'];

	
	

// query SQL untuk insert data

$edit = mysqli_query($connect,"UPDATE jadwal_produksi_bun SET id='$id', tgl='$tgl', so='$so', sisa_ori='$sisa_ori', sisa_cho='$sisa_cho', sisa_che='$sisa_che', sisa_tb='$sisa_tb', tgl_ambil_tb='$tgl_ambil_tb', pesan_ori='$pesan_ori', pesan_cho='$pesan_cho', pesan_che='$pesan_che', pesan_tb='$pesan_tb', ngadon_ori='$ngadon_ori', ngadon_cho='$ngadon_cho', ngadon_che='$ngadon_che', ngadon_tb='$ngadon_tb'WHERE id='$id'");

echo "Data telah berhasil diedit.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=data_daily">';			


// $sql = $pdo->prepare("INSERT INTO tbl_daily VALUES(:nis,:tgl,:soa_ori,:soa_cho,:soa_che,:soa_tb,:soa_pb,:soa_kk,:soa_kv,:soa_tc,:soa_jml,:pen_ori,:pen_cho,:pen_che,:pen_tb,:pen_pb,:pen_kk,:pen_kv,:pen_tc,:pen_jml,:pst_tgl,:pst_ori,:pst_cho,:pst_che,:pst_tb,:pst_pb,:pst_kk,:pst_kv,:pst_tc,:pst_jml,:so,:keterangan)");
// $edit_proof		= mysqli_query($connect,"UPDATE proofingdanoven SET so='$so', jumlah1='$jumlah1', pukul1='$pukul1', jumlah2='$jumlah2', pukul2='$pukul2', jumlah3='$jumlah3', pukul3='$pukul3', jumlah4='$jumlah4', pukul4='$pukul4', jumlah5='$jumlah5', pukul5='$pukul5', jumlah6='$jumlah6', pukul6='$pukul6', jumlah7='$jumlah7', pukul7='$pukul7', jumlah8='$jumlah8', pukul8='$pukul8', jumlah9='$jumlah9', pukul9='$pukul9', jumlah10='$jumlah10', pukul10='$pukul10' WHERE id_proof='$id_proof'");
?>

                     