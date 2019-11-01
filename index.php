
<?php
    error_reporting(0);
    session_start();

    if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; 
        else $halaman = "index";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Produksi</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/img/textt.png"></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;
background : #202020;"> 
<?
 
$last_modified = filemtime("index.php");
 
fprint("Last Modified ");
 
print(date("m/j/y h:i", $last_modified));
 
?>




 <a href="loginn.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/ava.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="index.php?halaman=daily_report"><i class="fa fa-bar-chart-o fa-3x"></i> Laporan Harian </a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=penjadwalan"><i class="fa fa-edit fa-3x"></i> Input Pengambilan </a>
                    </li>
                      <li>
                         <a  href="index.php?halaman=jadwal_pengambilan5"><i class="fa fa-desktop fa-3x"></i> Jadwal Pengambilan </a>
                    </li>
						   <li  >
                        <a  href="index.php?halaman=produksi5"><i class="fa fa-table fa-3x"></i> Jadwal Produksi </a>
                    </li>	
                      <li  >
                        <a  href="index.php?halaman=surat_jalan"><i class="fa fa-edit fa-3x"></i>  Surat Jalan </a> 
                     </li>
                     <li>
                        <a  href="index.php?halaman=so"><i class="fa fa-sitemap fa-3x"></i> Sales Outlet </a>
                    </li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                     <?php

                        if ($halaman=='edit')
                            include 'edit.php';
                      
                        elseif ($halaman=='edit_pengambilan')
                            include 'edit_pengambilan.php';
                        elseif ($halaman=='daily_report')
                            include 'daily.php';
                        elseif ($halaman=='data_daily')
                            include 'data_daily.php';
                        elseif ($halaman=='data_daily2')
                            include 'data_daily2.php';
                        elseif ($halaman=='data_daily3')
                            include 'data_daily3.php';
                        elseif ($halaman=='data_daily4')
                            include 'data_daily4.php';
                        elseif ($halaman=='penjadwalan')
                            include 'penjadwalan.php';
                        elseif ($halaman=='perencanaan3')
                            include 'perencanaan3.php';
                        elseif ($halaman=='input_produksi')
                            include 'input_produksi.php';
                        elseif ($halaman=='input_produksi2')
                            include 'input_produksi2.php';
                        elseif ($halaman=='input_produksi3')
                            include 'input_produksi3.php';
                        elseif ($halaman=='input_produksi4')
                            include 'input_produksi4.php';
                        elseif ($halaman=='input_produksi5')
                            include 'input_produksi5.php';
                        elseif ($halaman=='input_produksi6')
                            include 'input_produksi6.php';
                        elseif ($halaman=='input_produksi7')
                            include 'input_produksi7.php';
                        elseif ($halaman=='produksi')
                            include 'produksi.php';
                        elseif ($halaman=='produksi2')
                            include 'produksi2.php';
                        elseif ($halaman=='produksi3')
                            include 'produksi3.php';
                        elseif ($halaman=='produksi4')
                            include 'produksi4.php';
                        elseif ($halaman=='produksi5')
                            include 'produksi5.php';
                        elseif ($halaman=='produksi6')
                            include 'produksi6.php';
                        elseif ($halaman=='produksi7')
                            include 'produksi7.php';
                        elseif ($halaman=='jadwal_produksi')
                            include 'jadwal_produksi.php';
                         elseif ($halaman=='jadwal_produksi2')
                            include 'jadwal_produksi2.php';
                        elseif ($halaman=='jadwal_produksi3')
                            include 'jadwal_produksi3.php';
                        elseif ($halaman=='jadwal_produksi4')
                            include 'jadwal_produksi4.php';
                        elseif ($halaman=='jadwal_produksi5')
                            include 'jadwal_produksi5.php';
                        elseif ($halaman=='jadwal_produksi6')
                            include 'jadwal_produksi6.php';
                        elseif ($halaman=='jadwal_produksi7')
                            include 'jadwal_produksi7.php';
                        elseif ($halaman=='edit_produksi')
                            include 'edit_produksi.php';
                        elseif ($halaman=='surat_jalan')
                            include 'surat_jalan.php';
                        elseif ($halaman=='input_surat_jalan')
                            include 'input_surat_jalan.php';
                        elseif ($halaman=='surat_jalan_terinput')
                            include 'surat_jalan_terinput.php';
                        elseif ($halaman=='edit_surat_jalan')
                            include 'edit_surat_jalan.php';
                        elseif ($halaman=='jadwal_pengambilan')
                            include 'jadwal_pengambilan.php';  
                        elseif ($halaman=='jadwal_pengambilan2')
                            include 'jadwal_pengambilan2.php'; 
                        elseif ($halaman=='jadwal_pengambilan3')
                            include 'jadwal_pengambilan3.php'; 
                        elseif ($halaman=='jadwal_pengambilan4')
                            include 'jadwal_pengambilan4.php'; 
                        elseif ($halaman=='jadwal_pengambilan5')
                            include 'jadwal_pengambilan5.php'; 
                        elseif ($halaman=='jadwal_pengambilan6')
                            include 'jadwal_pengambilan6.php';
                        elseif ($halaman=='draft')
                            include 'draft.php';
                        elseif ($halaman=='draft2')
                            include 'draft2.php';
                        elseif ($halaman=='draft3')
                            include 'draft3.php';
                        elseif ($halaman=='draft4')
                            include 'draft4.php';
                        elseif ($halaman=='draft5')
                            include 'draft5.php';
                        elseif ($halaman=='draft6')
                            include 'draft6.php';
                        elseif ($halaman=='act_pengambilan')
                            include 'act_pengambilan.php'; 
                        elseif ($halaman=='produksi')
                            include 'produksi.php';
                        elseif ($halaman=='jadwal_terinput')
                            include 'jadwal_terinput.php';
                        elseif ($halaman=='pengambilan_hari')
                            include 'pengambilan_hari.php';   
                        elseif ($halaman=='pengambilan_hari2')
                            include 'pengambilan_hari2.php';   
                        elseif ($halaman=='pengambilan_hari3')
                            include 'pengambilan_hari3.php';   
                        elseif ($halaman=='pengambilan_hari4')
                            include 'pengambilan_hari4.php';   
                        elseif ($halaman=='pengambilan_hari5')
                            include 'pengambilan_hari5.php';   
                        elseif ($halaman=='pengambilan_hari6')
                            include 'pengambilan_hari6.php';   
                        elseif ($halaman=='proses10')
                            include 'proses10.php';
                        elseif ($halaman=='jadwal_produksi_full')
                            include 'jadwal_produksi_full.php';
                        elseif ($halaman=='so')
                            include 'so.php';
                        elseif ($halaman=='input_so')
                            include 'input_so.php';
                         elseif ($halaman=='edit_so')
                            include 'edit_so.php';
                         elseif ($halaman=='input_grafik')
                            include 'input_grafik.php';
                         elseif ($halaman=='input_grafik2')
                            include 'input_grafik2.php';
                         elseif ($halaman=='grafik_produksi3')
                            include 'grafik_produksi3.php';
                     ?>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
