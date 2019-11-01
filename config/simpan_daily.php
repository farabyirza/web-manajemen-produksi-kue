<?php
error_reporting(0);
include 'koneksi.php';

	$querytambahfield = "ALTER TABLE daily_report 
	ADD (so13_soa_ori INT(30) NOT NULL,
		so13_soa_cho INT(30) NOT NULL)";
	$insert           = mysqli_query($connect,$querytambahfield)or die(mysqli_error($connect));

// menyimpan data kedalam variabel
	$id_daily				= $_POST['id_daily'];
	$tanggal_daily			= $_POST['tanggal_daily'];

	$so1_soa_ori        	= $_POST['so1_soa_ori'];
	$so1_soa_cho      		= $_POST['so1_soa_cho'];
	$so1_soa_che      		= $_POST['so1_soa_che'];
	$so1_soa_tb				= $_POST['so1_soa_tb'];
	$so1_soa_pb      		= $_POST['so1_soa_pb'];
	$so1_soa_kk      		= $_POST['so1_soa_kk'];
	$so1_soa_kv   			= $_POST['so1_soa_kv'];
	$so1_soa_tc     		= $_POST['so1_soa_tc'];
	$so1_soa_jml      		= $_POST['so1_soa_jml'];

	$so1_pen_ori      		= $_POST['so1_pen_ori'];
	$so1_pen_cho      		= $_POST['so1_pen_cho'];
	$so1_pen_che      		= $_POST['so1_pen_che'];
	$so1_pen_tb      		= $_POST['so1_pen_tb'];
	$so1_pen_pb      		= $_POST['so1_pen_pb'];
	$so1_pen_kk      		= $_POST['so1_pen_kk'];
	$so1_pen_kv      		= $_POST['so1_pen_kv'];
	$so1_pen_tc      		= $_POST['so1_pen_tc'];
	$so1_pen_jml      		= $_POST['so1_pen_jml'];

	$so1_pst_tgl			= $_POST['so1_pst_tgl'];
	$so1_pst_ori      		= $_POST['so1_pst_ori'];
	$so1_pst_cho      		= $_POST['so1_pst_cho'];
	$so1_pst_che      		= $_POST['so1_pst_che'];
	$so1_pst_tb      		= $_POST['so1_pst_tb'];
	$so1_pst_pb      		= $_POST['so1_pst_pb'];
	$so1_pst_kk      		= $_POST['so1_pst_kk'];
	$so1_pst_kv      		= $_POST['so1_pst_kv'];
	$so1_pst_tc      		= $_POST['so1_pst_tc'];
	$so1_pst_jml      		= $_POST['so1_pst_jml'];

	$so1_keterangan      	= $_POST['so1_keterangan'];


	$so2_soa_ori        	= $_POST['so2_soa_ori'];
	$so2_soa_cho      		= $_POST['so2_soa_cho'];
	$so2_soa_che      		= $_POST['so2_soa_che'];
	$so2_soa_tb				= $_POST['so2_soa_tb'];
	$so2_soa_pb      		= $_POST['so2_soa_pb'];
	$so2_soa_kk      		= $_POST['so2_soa_kk'];
	$so2_soa_kv   			= $_POST['so2_soa_kv'];
	$so2_soa_tc     		= $_POST['so2_soa_tc'];
	$so2_soa_jml      		= $_POST['so2_soa_jml'];	

	$so2_pen_ori      		= $_POST['so2_pen_ori'];
	$so2_pen_cho      		= $_POST['so2_pen_cho'];
	$so2_pen_che      		= $_POST['so2_pen_che'];
	$so2_pen_tb      		= $_POST['so2_pen_tb'];
	$so2_pen_pb      		= $_POST['so2_pen_pb'];
	$so2_pen_kk      		= $_POST['so2_pen_kk'];
	$so2_pen_kv      		= $_POST['so2_pen_kv'];
	$so2_pen_tc      		= $_POST['so2_pen_tc'];
	$so2_pen_jml      		= $_POST['so2_pen_jml'];

	$so2_pst_tgl			= $_POST['so2_pst_tgl'];
	$so2_pst_ori      		= $_POST['so2_pst_ori'];
	$so2_pst_cho      		= $_POST['so2_pst_cho'];
	$so2_pst_che      		= $_POST['so2_pst_che'];
	$so2_pst_tb      		= $_POST['so2_pst_tb'];
	$so2_pst_pb      		= $_POST['so2_pst_pb'];
	$so2_pst_kk      		= $_POST['so2_pst_kk'];
	$so2_pst_kv      		= $_POST['so2_pst_kv'];
	$so2_pst_tc      		= $_POST['so2_pst_tc'];
	$so2_pst_jml      		= $_POST['so2_pst_jml'];

	$so2_keterangan      	= $_POST['so2_keterangan'];

	$so3_soa_ori        	= $_POST['so3_soa_ori'];
	$so3_soa_cho      		= $_POST['so3_soa_cho'];
	$so3_soa_che      		= $_POST['so3_soa_che'];
	$so3_soa_tb				= $_POST['so3_soa_tb'];
	$so3_soa_pb      		= $_POST['so3_soa_pb'];
	$so3_soa_kk      		= $_POST['so3_soa_kk'];
	$so3_soa_kv   			= $_POST['so3_soa_kv'];
	$so3_soa_tc     		= $_POST['so3_soa_tc'];
	$so3_soa_jml      		= $_POST['so3_soa_jml'];

	$so3_pen_ori      		= $_POST['so3_pen_ori'];
	$so3_pen_cho      		= $_POST['so3_pen_cho'];
	$so3_pen_che      		= $_POST['so3_pen_che'];
	$so3_pen_tb      		= $_POST['so3_pen_tb'];
	$so3_pen_pb      		= $_POST['so3_pen_pb'];
	$so3_pen_kk      		= $_POST['so3_pen_kk'];
	$so3_pen_kv      		= $_POST['so3_pen_kv'];
	$so3_pen_tc      		= $_POST['so3_pen_tc'];
	$so3_pen_jml      		= $_POST['so3_pen_jml'];

	$so3_pst_tgl			= $_POST['so3_pst_tgl'];
	$so3_pst_ori      		= $_POST['so3_pst_ori'];
	$so3_pst_cho      		= $_POST['so3_pst_cho'];
	$so3_pst_che      		= $_POST['so3_pst_che'];
	$so3_pst_tb      		= $_POST['so3_pst_tb'];
	$so3_pst_pb      		= $_POST['so3_pst_pb'];
	$so3_pst_kk      		= $_POST['so3_pst_kk'];
	$so3_pst_kv      		= $_POST['so3_pst_kv'];
	$so3_pst_tc      		= $_POST['so3_pst_tc'];
	$so3_pst_jml      		= $_POST['so3_pst_jml'];

	$so3_keterangan      	= $_POST['so3_keterangan'];


	$so4_soa_ori        	= $_POST['so4_soa_ori'];
	$so4_soa_cho      		= $_POST['so4_soa_cho'];
	$so4_soa_che      		= $_POST['so4_soa_che'];
	$so4_soa_tb				= $_POST['so4_soa_tb'];
	$so4_soa_pb      		= $_POST['so4_soa_pb'];
	$so4_soa_kk      		= $_POST['so4_soa_kk'];
	$so4_soa_kv   			= $_POST['so4_soa_kv'];
	$so4_soa_tc     		= $_POST['so4_soa_tc'];
	$so4_soa_jml      		= $_POST['so4_soa_jml'];

	$so4_pen_ori      		= $_POST['so4_pen_ori'];
	$so4_pen_cho      		= $_POST['so4_pen_cho'];
	$so4_pen_che      		= $_POST['so4_pen_che'];
	$so4_pen_tb      		= $_POST['so4_pen_tb'];
	$so4_pen_pb      		= $_POST['so4_pen_pb'];
	$so4_pen_kk      		= $_POST['so4_pen_kk'];
	$so4_pen_kv      		= $_POST['so4_pen_kv'];
	$so4_pen_tc      		= $_POST['so4_pen_tc'];
	$so4_pen_jml      		= $_POST['so4_pen_jml'];

	$so4_pst_tgl			= $_POST['so4_pst_tgl'];
	$so4_pst_ori      		= $_POST['so4_pst_ori'];
	$so4_pst_cho      		= $_POST['so4_pst_cho'];
	$so4_pst_che      		= $_POST['so4_pst_che'];
	$so4_pst_tb      		= $_POST['so4_pst_tb'];
	$so4_pst_pb      		= $_POST['so4_pst_pb'];
	$so4_pst_kk      		= $_POST['so4_pst_kk'];
	$so4_pst_kv      		= $_POST['so4_pst_kv'];
	$so4_pst_tc      		= $_POST['so4_pst_tc'];
	$so4_pst_jml      		= $_POST['so4_pst_jml'];

	$so4_keterangan      	= $_POST['so4_keterangan'];


	$so5_soa_ori        	= $_POST['so5_soa_ori'];
	$so5_soa_cho      		= $_POST['so5_soa_cho'];
	$so5_soa_che      		= $_POST['so5_soa_che'];
	$so5_soa_tb				= $_POST['so5_soa_tb'];
	$so5_soa_pb      		= $_POST['so5_soa_pb'];
	$so5_soa_kk      		= $_POST['so5_soa_kk'];
	$so5_soa_kv   			= $_POST['so5_soa_kv'];
	$so5_soa_tc     		= $_POST['so5_soa_tc'];
	$so5_soa_jml      		= $_POST['so5_soa_jml'];

	$so5_pen_ori      		= $_POST['so5_pen_ori'];
	$so5_pen_cho      		= $_POST['so5_pen_cho'];
	$so5_pen_che      		= $_POST['so5_pen_che'];
	$so5_pen_tb      		= $_POST['so5_pen_tb'];
	$so5_pen_pb      		= $_POST['so5_pen_pb'];
	$so5_pen_kk      		= $_POST['so5_pen_kk'];
	$so5_pen_kv      		= $_POST['so5_pen_kv'];
	$so5_pen_tc      		= $_POST['so5_pen_tc'];
	$so5_pen_jml      		= $_POST['so5_pen_jml'];

	$so5_pst_tgl			= $_POST['so5_pst_tgl'];
	$so5_pst_ori      		= $_POST['so5_pst_ori'];
	$so5_pst_cho      		= $_POST['so5_pst_cho'];
	$so5_pst_che      		= $_POST['so5_pst_che'];
	$so5_pst_tb      		= $_POST['so5_pst_tb'];
	$so5_pst_pb      		= $_POST['so5_pst_pb'];
	$so5_pst_kk      		= $_POST['so5_pst_kk'];
	$so5_pst_kv      		= $_POST['so5_pst_kv'];
	$so5_pst_tc      		= $_POST['so5_pst_tc'];
	$so5_pst_jml      		= $_POST['so5_pst_jml'];

	$so5_keterangan      	= $_POST['so5_keterangan'];


	$so6_soa_ori        	= $_POST['so6_soa_ori'];
	$so6_soa_cho      		= $_POST['so6_soa_cho'];
	$so6_soa_che      		= $_POST['so6_soa_che'];
	$so6_soa_tb				= $_POST['so6_soa_tb'];
	$so6_soa_pb      		= $_POST['so6_soa_pb'];
	$so6_soa_kk      		= $_POST['so6_soa_kk'];
	$so6_soa_kv   			= $_POST['so6_soa_kv'];
	$so6_soa_tc     		= $_POST['so6_soa_tc'];
	$so6_soa_jml      		= $_POST['so6_soa_jml'];

	$so6_pen_ori      		= $_POST['so6_pen_ori'];
	$so6_pen_cho      		= $_POST['so6_pen_cho'];
	$so6_pen_che      		= $_POST['so6_pen_che'];
	$so6_pen_tb      		= $_POST['so6_pen_tb'];
	$so6_pen_pb      		= $_POST['so6_pen_pb'];
	$so6_pen_kk      		= $_POST['so6_pen_kk'];
	$so6_pen_kv      		= $_POST['so6_pen_kv'];
	$so6_pen_tc      		= $_POST['so6_pen_tc'];
	$so6_pen_jml      		= $_POST['so6_pen_jml'];

	$so6_pst_tgl			= $_POST['so6_pst_tgl'];
	$so6_pst_ori      		= $_POST['so6_pst_ori'];
	$so6_pst_cho      		= $_POST['so6_pst_cho'];
	$so6_pst_che      		= $_POST['so6_pst_che'];
	$so6_pst_tb      		= $_POST['so6_pst_tb'];
	$so6_pst_pb      		= $_POST['so6_pst_pb'];
	$so6_pst_kv      		= $_POST['so6_pst_kv'];
	$so6_pst_kk      		= $_POST['so6_pst_kk'];
	$so6_pst_tc      		= $_POST['so6_pst_tc'];
	$so6_pst_jml      		= $_POST['so6_pst_jml'];

	$so6_keterangan      	= $_POST['so6_keterangan'];


	$so7_soa_ori        	= $_POST['so7_soa_ori'];
	$so7_soa_cho      		= $_POST['so7_soa_cho'];
	$so7_soa_che      		= $_POST['so7_soa_che'];
	$so7_soa_tb				= $_POST['so7_soa_tb'];
	$so7_soa_pb      		= $_POST['so7_soa_pb'];
	$so7_soa_kk      		= $_POST['so7_soa_kk'];
	$so7_soa_kv   			= $_POST['so7_soa_kv'];
	$so7_soa_tc     		= $_POST['so7_soa_tc'];
	$so7_soa_jml      		= $_POST['so7_soa_jml'];

	$so7_pen_ori      		= $_POST['so7_pen_ori'];
	$so7_pen_cho      		= $_POST['so7_pen_cho'];
	$so7_pen_che      		= $_POST['so7_pen_che'];
	$so7_pen_tb      		= $_POST['so7_pen_tb'];
	$so7_pen_pb      		= $_POST['so7_pen_pb'];
	$so7_pen_kk      		= $_POST['so7_pen_kk'];
	$so7_pen_kv      		= $_POST['so7_pen_kv'];
	$so7_pen_tc      		= $_POST['so7_pen_tc'];
	$so7_pen_jml      		= $_POST['so7_pen_jml'];

	$so7_pst_tgl			= $_POST['so7_pst_tgl'];
	$so7_pst_ori      		= $_POST['so7_pst_ori'];
	$so7_pst_cho      		= $_POST['so7_pst_cho'];
	$so7_pst_che      		= $_POST['so7_pst_che'];
	$so7_pst_tb      		= $_POST['so7_pst_tb'];
	$so7_pst_pb      		= $_POST['so7_pst_pb'];
	$so7_pst_kk      		= $_POST['so7_pst_kk'];
	$so7_pst_kv      		= $_POST['so7_pst_kv'];
	$so7_pst_tc      		= $_POST['so7_pst_tc'];
	$so7_pst_jml      		= $_POST['so7_pst_jml'];

	$so7_keterangan      	= $_POST['so7_keterangan'];


	$so8_soa_ori        	= $_POST['so8_soa_ori'];
	$so8_soa_cho      		= $_POST['so8_soa_cho'];
	$so8_soa_che      		= $_POST['so8_soa_che'];
	$so8_soa_tb				= $_POST['so8_soa_tb'];
	$so8_soa_pb      		= $_POST['so8_soa_pb'];
	$so8_soa_kk      		= $_POST['so8_soa_kk'];
	$so8_soa_kv   			= $_POST['so8_soa_kv'];
	$so8_soa_tc     		= $_POST['so8_soa_tc'];
	$so8_soa_jml      		= $_POST['so8_soa_jml'];

	$so8_pen_ori      		= $_POST['so8_pen_ori'];
	$so8_pen_cho      		= $_POST['so8_pen_cho'];
	$so8_pen_che      		= $_POST['so8_pen_che'];
	$so8_pen_tb      		= $_POST['so8_pen_tb'];
	$so8_pen_pb      		= $_POST['so8_pen_pb'];
	$so8_pen_kk      		= $_POST['so8_pen_kk'];
	$so8_pen_kv      		= $_POST['so8_pen_kv'];
	$so8_pen_tc      		= $_POST['so8_pen_tc'];
	$so8_pen_jml      		= $_POST['so8_pen_jml'];

	$so8_pst_tgl			= $_POST['so8_pst_tgl'];
	$so8_pst_ori      		= $_POST['so8_pst_ori'];
	$so8_pst_cho      		= $_POST['so8_pst_cho'];
	$so8_pst_che      		= $_POST['so8_pst_che'];
	$so8_pst_tb      		= $_POST['so8_pst_tb'];
	$so8_pst_pb      		= $_POST['so8_pst_pb'];
	$so8_pst_kk      		= $_POST['so8_pst_kk'];
	$so8_pst_kv      		= $_POST['so8_pst_kv'];
	$so8_pst_tc      		= $_POST['so8_pst_tc'];
	$so8_pst_jml      		= $_POST['so8_pst_jml'];

	$so8_keterangan      	= $_POST['so8_keterangan'];


	$so9_soa_ori        	= $_POST['so9_soa_ori'];
	$so9_soa_cho      		= $_POST['so9_soa_cho'];
	$so9_soa_che      		= $_POST['so9_soa_che'];
	$so9_soa_tb				= $_POST['so9_soa_tb'];
	$so9_soa_pb      		= $_POST['so9_soa_pb'];
	$so9_soa_kk      		= $_POST['so9_soa_kk'];
	$so9_soa_kv   			= $_POST['so9_soa_kv'];
	$so9_soa_tc     		= $_POST['so9_soa_tc'];
	$so9_soa_jml      		= $_POST['so9_soa_jml'];

	$so9_pen_ori      		= $_POST['so9_pen_ori'];
	$so9_pen_cho      		= $_POST['so9_pen_cho'];
	$so9_pen_che      		= $_POST['so9_pen_che'];
	$so9_pen_tb      		= $_POST['so9_pen_tb'];
	$so9_pen_pb      		= $_POST['so9_pen_pb'];
	$so9_pen_kk      		= $_POST['so9_pen_kk'];
	$so9_pen_kv      		= $_POST['so9_pen_kv'];
	$so9_pen_tc      		= $_POST['so9_pen_tc'];
	$so9_pen_jml      		= $_POST['so9_pen_jml'];

	$so9_pst_tgl			= $_POST['so9_pst_tgl'];
	$so9_pst_ori      		= $_POST['so9_pst_ori'];
	$so9_pst_cho      		= $_POST['so9_pst_cho'];
	$so9_pst_che      		= $_POST['so9_pst_che'];
	$so9_pst_tb      		= $_POST['so9_pst_tb'];
	$so9_pst_pb      		= $_POST['so9_pst_pb'];
	$so9_pst_kk      		= $_POST['so9_pst_kk'];
	$so9_pst_kv      		= $_POST['so9_pst_kv'];
	$so9_pst_tc      		= $_POST['so9_pst_tc'];
	$so9_pst_jml      		= $_POST['so9_pst_jml'];

	$so9_keterangan      	= $_POST['so9_keterangan'];


	$so10_soa_ori        	= $_POST['so10_soa_ori'];
	$so10_soa_cho      		= $_POST['so10_soa_cho'];
	$so10_soa_che      		= $_POST['so10_soa_che'];
	$so10_soa_tb			= $_POST['so10_soa_tb'];
	$so10_soa_pb      		= $_POST['so10_soa_pb'];
	$so10_soa_kk      		= $_POST['so10_soa_kk'];
	$so10_soa_kv   			= $_POST['so10_soa_kv'];
	$so10_soa_tc     		= $_POST['so10_soa_tc'];
	$so10_soa_jml      		= $_POST['so10_soa_jml'];

	$so10_pen_ori      		= $_POST['so10_pen_ori'];
	$so10_pen_cho      		= $_POST['so10_pen_cho'];
	$so10_pen_che      		= $_POST['so10_pen_che'];
	$so10_pen_tb      		= $_POST['so10_pen_tb'];
	$so10_pen_pb      		= $_POST['so10_pen_pb'];
	$so10_pen_kk      		= $_POST['so10_pen_kk'];
	$so10_pen_kv      		= $_POST['so10_pen_kv'];
	$so10_pen_tc      		= $_POST['so10_pen_tc'];
	$so10_pen_jml      		= $_POST['so10_pen_jml'];

	$so10_pst_tgl			= $_POST['so10_pst_tgl'];
	$so10_pst_ori      		= $_POST['so10_pst_ori'];
	$so10_pst_cho      		= $_POST['so10_pst_cho'];
	$so10_pst_che      		= $_POST['so10_pst_che'];
	$so10_pst_tb      		= $_POST['so10_pst_tb'];
	$so10_pst_pb      		= $_POST['so10_pst_pb'];
	$so10_pst_kk      		= $_POST['so10_pst_kk'];
	$so10_pst_kv      		= $_POST['so10_pst_kv'];
	$so10_pst_tc      		= $_POST['so10_pst_tc'];
	$so10_pst_jml      		= $_POST['so10_pst_jml'];

	$so10_keterangan      	= $_POST['so10_keterangan'];


	$so11_soa_ori        	= $_POST['so11_soa_ori'];
	$so11_soa_cho      		= $_POST['so11_soa_cho'];
	$so11_soa_che      		= $_POST['so11_soa_che'];
	$so11_soa_tb			= $_POST['so11_soa_tb'];
	$so11_soa_pb      		= $_POST['so11_soa_pb'];
	$so11_soa_kk      		= $_POST['so11_soa_kk'];
	$so11_soa_kv   			= $_POST['so11_soa_kv'];
	$so11_soa_tc     		= $_POST['so11_soa_tc'];
	$so11_soa_jml      		= $_POST['so11_soa_jml'];

	$so11_pen_ori      		= $_POST['so11_pen_ori'];
	$so11_pen_cho      		= $_POST['so11_pen_cho'];
	$so11_pen_che      		= $_POST['so11_pen_che'];
	$so11_pen_tb      		= $_POST['so11_pen_tb'];
	$so11_pen_pb      		= $_POST['so11_pen_pb'];
	$so11_pen_kk      		= $_POST['so11_pen_kk'];
	$so11_pen_kv      		= $_POST['so11_pen_kv'];
	$so11_pen_tc      		= $_POST['so11_pen_tc'];
	$so11_pen_jml      		= $_POST['so11_pen_jml'];

	$so11_pst_tgl			= $_POST['so11_pst_tgl'];
	$so11_pst_ori      		= $_POST['so11_pst_ori'];
	$so11_pst_cho      		= $_POST['so11_pst_cho'];
	$so11_pst_che      		= $_POST['so11_pst_che'];
	$so11_pst_tb      		= $_POST['so11_pst_tb'];
	$so11_pst_pb      		= $_POST['so11_pst_pb'];
	$so11_pst_kk      		= $_POST['so11_pst_kk'];
	$so11_pst_kv      		= $_POST['so11_pst_kv'];
	$so11_pst_tc      		= $_POST['so11_pst_tc'];
	$so11_pst_jml      		= $_POST['so11_pst_jml'];

	$so11_keterangan      	= $_POST['so11_keterangan'];


	$so12_soa_ori        	= $_POST['so12_soa_ori'];
	$so12_soa_cho      		= $_POST['so12_soa_cho'];
	$so12_soa_che      		= $_POST['so12_soa_che'];
	$so12_soa_tb			= $_POST['so12_soa_tb'];
	$so12_soa_pb      		= $_POST['so12_soa_pb'];
	$so12_soa_kk      		= $_POST['so12_soa_kk'];
	$so12_soa_kv   			= $_POST['so12_soa_kv'];
	$so12_soa_tc     		= $_POST['so12_soa_tc'];
	$so12_soa_jml      		= $_POST['so12_soa_jml'];

	$so12_pen_ori      		= $_POST['so12_pen_ori'];
	$so12_pen_cho      		= $_POST['so12_pen_cho'];
	$so12_pen_che      		= $_POST['so12_pen_che'];
	$so12_pen_tb      		= $_POST['so12_pen_tb'];
	$so12_pen_pb      		= $_POST['so12_pen_pb'];
	$so12_pen_kk      		= $_POST['so12_pen_kk'];
	$so12_pen_kv      		= $_POST['so12_pen_kv'];
	$so12_pen_tc      		= $_POST['so12_pen_tc'];
	$so12_pen_jml      		= $_POST['so12_pen_jml'];

	$so12_pst_tgl			= $_POST['so12_pst_tgl'];
	$so12_pst_ori      		= $_POST['so12_pst_ori'];
	$so12_pst_cho      		= $_POST['so12_pst_cho'];
	$so12_pst_che      		= $_POST['so12_pst_che'];
	$so12_pst_tb      		= $_POST['so12_pst_tb'];
	$so12_pst_pb      		= $_POST['so12_pst_pb'];
	$so12_pst_kk      		= $_POST['so12_pst_kk'];
	$so12_pst_kv      		= $_POST['so12_pst_kv'];
	$so12_pst_tc      		= $_POST['so12_pst_tc'];
	$so12_pst_jml      		= $_POST['so12_pst_jml'];

	$so12_keterangan      	= $_POST['so12_keterangan'];


	$so_soa_ori  	      	= $_POST['so_soa_ori'];
	$so_soa_cho      		= $_POST['so_soa_cho'];
	$so_soa_che      		= $_POST['so_soa_che'];
	$so_soa_tb				= $_POST['so_soa_tb'];
	$so_soa_pb      		= $_POST['so_soa_pb'];
	$so_soa_kk      		= $_POST['so_soa_kk'];
	$so_soa_kv   			= $_POST['so_soa_kv'];
	$so_soa_tc     			= $_POST['so_soa_tc'];
	$so_soa_jml      		= $_POST['so_soa_jml'];

	$so_pen_ori      		= $_POST['so_pen_ori'];
	$so_pen_cho      		= $_POST['so_pen_cho'];
	$so_pen_che      		= $_POST['so_pen_che'];
	$so_pen_tb      		= $_POST['so_pen_tb'];
	$so_pen_pb      		= $_POST['so_pen_pb'];
	$so_pen_kk      		= $_POST['so_pen_kk'];
	$so_pen_kv      		= $_POST['so_pen_kv'];
	$so_pen_tc      		= $_POST['so_pen_tc'];
	$so_pen_jml      		= $_POST['so_pen_jml'];

	$so_pst_tgl				= $_POST['so_pst_tgl'];
	$so_pst_ori      		= $_POST['so_pst_ori'];
	$so_pst_cho      		= $_POST['so_pst_cho'];
	$so_pst_che      		= $_POST['so_pst_che'];
	$so_pst_tb      		= $_POST['so_pst_tb'];
	$so_pst_pb      		= $_POST['so_pst_pb'];
	$so_pst_kk      		= $_POST['so_pst_kk'];
	$so_pst_kv      		= $_POST['so_pst_kv'];
	$so_pst_tc      		= $_POST['so_pst_tc'];
	$so_pst_jml      		= $_POST['so_pst_jml'];

	$so_keterangan      	= $_POST['so_keterangan'];

$index = 15; // Set index array awal dengan 0
foreach($id_daily as $id_daily){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$querydaily->bindParam(':id_daily', $id_daily); // Set data nis
	$querydaily->bindParam(':tanggal_daily', $tanggal_daily);
	$querydaily->bindParam(':so_soa_ori', $so_soa_ori[$index]); // Ambil dan set data nama sesuai index array dari $index
	$querydaily->bindParam(':so_soa_cho', $so_soa_cho[$index]); // Ambil dan set data telepon sesuai index array dari $index
	$querydaily->bindParam(':so_soa_che', $so_soa_che[$index]); // Ambil dan set data alamat sesuai index array dari $index
	$querydaily->bindParam(':so_soa_tb', $so_soa_tb[$index]);
	$querydaily->bindParam(':so_soa_pb', $so_soa_pb[$index]);
	$querydaily->bindParam(':so_soa_kk', $so_soa_kk[$index]);
	$querydaily->bindParam(':so_soa_kv', $so_soa_kv[$index]);
	$querydaily->bindParam(':so_soa_tc', $so_soa_tc[$index]);
	$querydaily->bindParam(':so_soa_jml', $so_soa_jml[$index]);
	$querydaily->bindParam(':so_pen_ori', $so_pen_ori[$index]);
	$querydaily->bindParam(':so_pen_cho', $so_pen_cho[$index]);
	$querydaily->bindParam(':so_pen_che', $so_pen_che[$index]);
	$querydaily->bindParam(':so_pen_tb', $so_pen_tb[$index]);
	$querydaily->bindParam(':so_pen_pb', $so_pen_pb[$index]);
	$querydaily->bindParam(':so_pen_kk', $so_pen_kk[$index]);
	$querydaily->bindParam(':so_pen_kv', $so_pen_kv[$index]);
	$querydaily->bindParam(':so_pen_tc', $so_pen_tc[$index]);
	$querydaily->bindParam(':so_pen_jml', $so_pen_jml[$index]);
	$querydaily->bindParam(':so_pst_tgl', $so_pst_tgl[$index]);
	$querydaily->bindParam(':so_pst_ori', $so_pst_ori[$index]);
	$querydaily->bindParam(':so_pst_cho', $so_pst_cho[$index]);
	$querydaily->bindParam(':so_pst_che', $so_pst_che[$index]);
	$querydaily->bindParam(':so_pst_tb', $so_pst_tb[$index]);
	$querydaily->bindParam(':so_pst_pb', $so_pst_pb[$index]);
	$querydaily->bindParam(':so_pst_kk', $so_pst_kk[$index]);
	$querydaily->bindParam(':so_pst_kv', $so_pst_kv[$index]);
	$querydaily->bindParam(':so_pst_tc', $so_pst_tc[$index]);
	$querydaily->bindParam(':so_pst_jml', $so_pst_jml[$index]);
	$querydaily->bindParam(':so_keterangan', $so_keterangan[$index]);
	$querydaily->execute(); // Eksekusi query insert
	
	$index++; // Tambah 1 setiap kali looping
}



// query SQL untuk insert data
$querydaily		= "INSERT INTO daily_report VALUES ('id_daily','$tanggal_daily','$so1_soa_ori','$so1_soa_cho','$so1_soa_che','$so1_soa_tb','$so1_soa_pb','$so1_soa_kk','$so1_soa_kv','$so1_soa_tc','$so1_soa_jml','$so1_pen_ori','$so1_pen_cho','$so1_pen_che','$so1_pen_tb','$so1_pen_pb','$so1_pen_kk','$so1_pen_kv','$so1_pen_tc','$so1_pen_jml','$so1_pst_tgl','$so1_pst_ori','$so1_pst_cho','$so1_pst_che','$so1_pst_tb','$so1_pst_pb','$so1_pst_kk','$so1_pst_kv','$so1_pst_tc','$so1_pst_jml','$so1_keterangan','$so2_soa_ori','$so2_soa_cho','$so2_soa_che','$so2_soa_tb','$so2_soa_pb','$so2_soa_kk','$so2_soa_kv','$so2_soa_tc','$so2_soa_jml','$so2_pen_ori','$so2_pen_cho','$so2_pen_che','$so2_pen_tb','$so2_pen_pb','$so2_pen_kk','$so2_pen_kv','$so2_pen_tc','$so2_pen_jml','$so2_pst_tgl','$so2_pst_ori','$so2_pst_cho','$so2_pst_che','$so2_pst_tb','$so2_pst_pb','$so2_pst_kk','$so2_pst_kv','$so2_pst_tc','$so2_pst_jml','$so2_keterangan','$so3_soa_ori','$so3_soa_cho','$so3_soa_che','$so3_soa_tb','$so3_soa_pb','$so3_soa_kk','$so3_soa_kv','$so3_soa_tc','$so3_soa_jml','$so3_pen_ori','$so3_pen_cho','$so3_pen_che','$so3_pen_tb','$so3_pen_pb','$so3_pen_kk','$so3_pen_kv','$so3_pen_tc','$so3_pen_jml','$so3_pst_tgl','$so3_pst_ori','$so3_pst_cho','$so3_pst_che','$so3_pst_tb','$so3_pst_pb','$so3_pst_kk','$so3_pst_kv','$so3_pst_tc','$so3_pst_jml','$so3_keterangan','$so4_soa_ori','$so4_soa_cho','$so4_soa_che','$so4_soa_tb','$so4_soa_pb','$so4_soa_kk','$so4_soa_kv','$so4_soa_tc','$so4_soa_jml','$so4_pen_ori','$so4_pen_cho','$so4_pen_che','$so4_pen_tb','$so4_pen_pb','$so4_pen_kk','$so4_pen_kv','$so4_pen_tc','$so4_pen_jml','$so4_pst_tgl','$so4_pst_ori','$so4_pst_cho','$so4_pst_che','$so4_pst_tb','$so4_pst_pb','$so4_pst_kk','$so4_pst_kv','$so4_pst_tc','$so4_pst_jml','$so4_keterangan','$so5_soa_ori','$so5_soa_cho','$so5_soa_che','$so5_soa_tb','$so5_soa_pb','$so5_soa_kk','$so5_soa_kv','$so5_soa_tc','$so5_soa_jml','$so5_pen_ori','$so5_pen_cho','$so5_pen_che','$so5_pen_tb','$so5_pen_pb','$so5_pen_kk','$so5_pen_kv','$so5_pen_tc','$so5_pen_jml','$so5_pst_tgl','$so5_pst_ori','$so5_pst_cho','$so5_pst_che','$so5_pst_tb','$so5_pst_pb','$so5_pst_kk','$so5_pst_kv','$so5_pst_tc','$so5_pst_jml','$so5_keterangan','$so6_soa_ori','$so6_soa_cho','$so6_soa_che','$so6_soa_tb','$so6_soa_pb','$so6_soa_kk','$so6_soa_kv','$so6_soa_tc','$so6_soa_jml','$so6_pen_ori','$so6_pen_cho','$so6_pen_che','$so6_pen_tb','$so6_pen_pb','$so6_pen_kk','$so6_pen_kv','$so6_pen_tc','$so6_pen_jml','$so6_pst_tgl','$so6_pst_ori','$so6_pst_cho','$so6_pst_che','$so6_pst_tb','$so6_pst_pb','$so6_pst_kk','$so6_pst_kv','$so6_pst_tc','$so6_pst_jml','$so6_keterangan','$so7_soa_ori','$so7_soa_cho','$so7_soa_che','$so7_soa_tb','$so7_soa_pb','$so7_soa_kk','$so7_soa_kv','$so7_soa_tc','$so7_soa_jml','$so7_pen_ori','$so7_pen_cho','$so7_pen_che','$so7_pen_tb','$so7_pen_pb','$so7_pen_kk','$so7_pen_kv','$so7_pen_tc','$so7_pen_jml','$so7_pst_tgl','$so7_pst_ori','$so7_pst_cho','$so7_pst_che','$so7_pst_tb','$so7_pst_pb','$so7_pst_kk','$so7_pst_kv','$so7_pst_tc','$so7_pst_jml','$so7_keterangan','$so8_soa_ori','$so8_soa_cho','$so8_soa_che','$so8_soa_tb','$so8_soa_pb','$so8_soa_kk','$so8_soa_kv','$so8_soa_tc','$so8_soa_jml','$so8_pen_ori','$so8_pen_cho','$so8_pen_che','$so8_pen_tb','$so8_pen_pb','$so8_pen_kk','$so8_pen_kv','$so8_pen_tc','$so8_pen_jml','$so8_pst_tgl','$so8_pst_ori','$so8_pst_cho','$so8_pst_che','$so8_pst_tb','$so8_pst_pb','$so8_pst_kk','$so8_pst_kv','$so8_pst_tc','$so8_pst_jml','$so8_keterangan','$so9_soa_ori','$so9_soa_cho','$so9_soa_che','$so9_soa_tb','$so9_soa_pb','$so9_soa_kk','$so9_soa_kv','$so9_soa_tc','$so9_soa_jml','$so9_pen_ori','$so9_pen_cho','$so9_pen_che','$so9_pen_tb','$so9_pen_pb','$so9_pen_kk','$so9_pen_kv','$so9_pen_tc','$so9_pen_jml','$so9_pst_tgl','$so9_pst_ori','$so9_pst_cho','$so9_pst_che','$so9_pst_tb','$so9_pst_pb','$so9_pst_kk','$so9_pst_kv','$so9_pst_tc','$so9_pst_jml','$so9_keterangan','$so10_soa_ori','$so10_soa_cho','$so10_soa_che','$so10_soa_tb','$so10_soa_pb','$so10_soa_kk','$so10_soa_kv','$so10_soa_tc','$so10_soa_jml','$so10_pen_ori','$so10_pen_cho','$so10_pen_che','$so10_pen_tb','$so10_pen_pb','$so10_pen_kk','$so10_pen_kv','$so10_pen_tc','$so10_pen_jml','$so10_pst_tgl','$so10_pst_ori','$so10_pst_cho','$so10_pst_che','$so10_pst_tb','$so10_pst_pb','$so10_pst_kk','$so10_pst_kv','$so10_pst_tc','$so10_pst_jml','$so10_keterangan','$so11_soa_ori','$so11_soa_cho','$so11_soa_che','$so11_soa_tb','$so11_soa_pb','$so11_soa_kk','$so11_soa_kv','$so11_soa_tc','$so11_soa_jml','$so11_pen_ori','$so11_pen_cho','$so11_pen_che','$so11_pen_tb','$so11_pen_pb','$so11_pen_kk','$so11_pen_kv','$so11_pen_tc','$so11_pen_jml','$so11_pst_tgl','$so11_pst_ori','$so11_pst_cho','$so11_pst_che','$so11_pst_tb','$so11_pst_pb','$so11_pst_kk','$so11_pst_kv','$so11_pst_tc','$so11_pst_jml','$so11_keterangan','$so12_soa_ori','$so12_soa_cho','$so12_soa_che','$so12_soa_tb','$so12_soa_pb','$so12_soa_kk','$so12_soa_kv','$so12_soa_tc','$so12_soa_jml','$so12_pen_ori','$so12_pen_cho','$so12_pen_che','$so12_pen_tb','$so12_pen_pb','$so12_pen_kk','$so12_pen_kv','$so12_pen_tc','$so12_pen_jml','$so12_pst_tgl','$so12_pst_ori','$so12_pst_cho','$so12_pst_che','$so12_pst_tb','$so12_pst_pb','$so12_pst_kk','$so12_pst_kv','$so12_pst_tc','$so12_pst_jml','$so12_keterangan','$so_soa_ori','$so_soa_cho','$so_soa_che','$so_soa_tb','$so_soa_pb','$so_soa_kk','$so_soa_kv','$so_soa_tc','$so_soa_jml','$so_pen_ori','$so_pen_cho','$so_pen_che','$so_pen_tb','$so_pen_pb','$so_pen_kk','$so_pen_kv','$so_pen_tc','$so_pen_jml','$so_pst_tgl','$so_pst_ori','$so_pst_cho','$so_pst_che','$so_pst_tb','$so_pst_pb','$so_pst_kk','$so_pst_kv','$so_pst_tc','$so_pst_jml','$so_keterangan')";


//$sql = $pdo->prepare("INSERT INTO daily_report VALUES(:id_daily,:so_soa_ori,:so_soa_cho,:so_soa_che,:so_soa_tb,:so_soa_pb,:so_soa_kk,:so_soa_kv,:so_soa_tc,:so_soa_jml,:so_pen_ori,:so_pen_cho,:so_pen_che,:so_pen_tb,:so_pen_pb,:so_pen_kk,:so_pen_kv,:so_pen_tc,:so_pen_jml,:so_pst_tgl,:so_pst_ori,:so_pst_cho,:so_pst_che,:so_pst_tb,:so_pst_pb,:so_pst_kk,:so_pst_kv,:so_pst_tc,:so_pst_jml,:so_keterangan)");



$simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));

echo "<i>Data telah berhasil diinput.</i>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=page1">';			

// mysqli_query($connect, $querypemesanan);
// if($querypemesanan){
// 	echo"Tersimpan di Database";
// }else{
// 	echo"Gagal tersimpan di Database";
// }
// // mengalihkan ke halaman index.php
// header("location:../jadwal_pemesanan.php");
?>