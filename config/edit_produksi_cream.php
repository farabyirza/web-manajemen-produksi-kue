<?php
error_reporting(0);
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis
$tgl = $_POST['tgl']; // Ambil data nama dan masukkan ke variabel nama
$so = $_POST['so'];
$sisa_kk = $_POST['sisa_kk']; // Ambil data telp dan masukkan ke variabel telp
$sisa_kv = $_POST['sisa_kv']; // Ambil data alamat dan masukkan ke variabel alamat
$sisa_tc = $_POST['sisa_tc'];
$tgl_ambil_tc = $_POST['tgl_ambil_tc'];
$pesan_kk = $_POST['pesan_kk'];
$pesan_kv = $_POST['pesan_kv'];
$pesan_tc = $_POST['pesan_tc'];
$ngadon_kk = $_POST['ngadon_kk'];
$ngadon_kv = $_POST['ngadon_kv'];
$ngadon_tc = $_POST['ngadon_tc'];


	
	

// query SQL untuk insert data

$edit = mysqli_query($connect,"UPDATE jadwal_produksi_cream SET id='$id', tgl='$tgl', so='$so', sisa_kk='$sisa_kk', sisa_kv='$sisa_kv', sisa_tc='$sisa_tc', tgl_ambil_tc='$tgl_ambil_tc', pesan_kk='$pesan_kk', pesan_kv='$pesan_kv', pesan_tc='$pesan_tc', ngadon_kk='$ngadon_kk', ngadon_kv='$ngadon_kv', ngadon_tc='$ngadon_tc' WHERE id='$id'");

echo "Data telah berhasil diedit.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=jadwal_produksi_cream2">';			


// $sql = $pdo->prepare("INSERT INTO tbl_daily VALUES(:nis,:tgl,:soa_ori,:soa_cho,:soa_che,:soa_tb,:soa_pb,:soa_kk,:soa_kv,:soa_tc,:soa_jml,:pen_ori,:pen_cho,:pen_che,:pen_tb,:pen_pb,:pen_kk,:pen_kv,:pen_tc,:pen_jml,:pst_tgl,:pst_ori,:pst_cho,:pst_che,:pst_tb,:pst_pb,:pst_kk,:pst_kv,:pst_tc,:pst_jml,:so,:keterangan)");
// $edit_proof		= mysqli_query($connect,"UPDATE proofingdanoven SET so='$so', jumlah1='$jumlah1', pukul1='$pukul1', jumlah2='$jumlah2', pukul2='$pukul2', jumlah3='$jumlah3', pukul3='$pukul3', jumlah4='$jumlah4', pukul4='$pukul4', jumlah5='$jumlah5', pukul5='$pukul5', jumlah6='$jumlah6', pukul6='$pukul6', jumlah7='$jumlah7', pukul7='$pukul7', jumlah8='$jumlah8', pukul8='$pukul8', jumlah9='$jumlah9', pukul9='$pukul9', jumlah10='$jumlah10', pukul10='$pukul10' WHERE id_proof='$id_proof'");
?>

                     