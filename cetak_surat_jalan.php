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

                    <img src="assets/img/avatar.png" class="user-image img-responsive"/>
<?php
include 'config/koneksi.php';
                      $id  = $_GET['id'];
                       $cek    = "SELECT * FROM surat_jalan WHERE id = '$id'";
                       $hasil   = mysqli_query($connect, $cek)or die(mysqli_error($connect));
                       $data    = mysqli_fetch_array($hasil);
                       
                        
                echo '<h2 style="text-align: center; font-family: Blagovest">SURAT JALAN</h2>';  
                echo '<h4 style="text-align: center; font-family: Blackletter">PIC : <b>'.$data['pic'].'</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tanggal&emsp;: <b>'.$data['tgl_surat'].'</b>';
                echo '<h4 style="text-align: left; font-family: Blackletter">&emsp;&emsp;Sales Outlet : <b>'.$data['so'].'</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Lokasi&emsp;: <b>'.$data['lokasi'].'</b> </h4>';
                        ?>
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
 
      <tr>
        <th>No</th>
        <th>Tanggal Pengambilan</th>
        <th>Tanggal Surat</th>
        <th>Original</th>
        <th>Stroberi</th>
        <th>Coklat</th>
        <th>Total Kue</th>
        <th>Krim Kacang</th>
        <th>Krim Pisang</th>
        <th>Total Krim</th>
        <th>Box</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';

                       $query = mysqli_query($connect, "SELECT * FROM surat_jalan WHERE id = '$id'")or die(mysqli_error($connect));
                                        if(mysqli_num_rows($query) == 0){   
                                            echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                                        }
                                            else
                                        {   
                                            $no = 1;                
                                            while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['tgl_ambil_tb'].'</td>';
                                                echo '<td>'.$data['tgl_surat'].'</td>';
                                                echo '<td>'.$data['rata_ori'].'</td>';
                                                echo '<td>'.$data['rata_cho'].'</td>';
                                                echo '<td>'.$data['rata_che'].'</td>';
                                                echo '<td>'.$data['rata'].'</td>';
                                                echo '<td>'.$data['rata_kk'].'</td>';
                                                echo '<td>'.$data['rata_kv'].'</td>';
                                                echo '<td>'.$data['rata_tc'].'</td>';
                                                echo '<td>'.$data['rata_pb'].'</td>';

                                   
                                                $no++;  
                                            }
                                        }
                            
                                ?>


                                 </tbody>

                            </table>

                        
                         <br>
                         <h4 style="text-align: left; font-family: Blackletter">&emsp;&emsp;Tanda Terima &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Hormat Kami</h4> <br><br><br><br>
  <div>
    <script>
      window.print();
    </script>
<!--  <a href="cetak_report.php"> 
    <button onClick="window.print();">Cetak</button> 
    </a> --></div>
                    </div>


                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    </body>