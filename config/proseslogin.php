<?php

	include "koneksi.php";

	$username  = $_POST["username"];
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM login WHERE username='$username' AND password='$password'";

	$login     = mysqli_query($connect,$query) or die(mysqli_error($connect));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$username  = $data['username'];
	$password  = $data['password'];
	
	$level	   = $data['level'];


if($jlhrecord > 0){

	session_start();
	$_SESSION['id']=$id;
	$_SESSION['username']=$username;

	$_SESSION['level']=$level;

	
		if($level == admin){
			echo "<br><br><br><strong><center><i>Anda Berhasil Login </strong></center></i>";
			header('Location:../index.php?halaman=daily_report');
		}
		
		
}

else{

	echo "<br><br><br><strong><center><i>Maaf anda gagal login.  Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../loginn.php">';  
}

?>