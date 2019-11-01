<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Produksi - Tukang Roti.com</title>
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
  <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="assets/img/avatar.png" class="user-image img-responsive"/>
          </li>

                <h2 style="text-align: center; font-family: Blagovest">JADWAL PRODUKSI</h2>   
                       <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menampilkan data <b>JADWAL PRODUKSI</b> yang telah di-<i>input</i></h4> 
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal Produksi</th>
        <th>Original</th>
        <th>Chocolate</th>
        <th>Cheese</th>
        <th>Total Ngadon</th>
        <th>Krim Kopi</th>
        <th>Krim Vanila</th>
        <th>Total Ngadon</th>
        <th>Status Ngadon</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                       
                       
                         $query = mysqli_query($connect, "SELECT * FROM jadwal_produksi")or die(mysqli_error($connect));
                                        if(mysqli_num_rows($query) == 0){   
                                            echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                                        }
                                            else
                                        {   
                                            $no = 1;                
                                            while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['tgl_produksi'].'</td>';
                                                echo '<td>'.$data['ngadon_ori'].'</td>';
                                                echo '<td>'.$data['ngadon_cho'].'</td>';
                                                echo '<td>'.$data['ngadon_che'].'</td>';
                                                echo '<td>'.$data['ngadon_tb'].'</td>';
                                                echo '<td>'.$data['ngadon_kk'].'</td>';
                                                echo '<td>'.$data['ngadon_kv'].'</td>';
                                                echo '<td>'.$data['ngadon_tc'].'</td>';
                                                echo '<td>'.$data['status_ngadon'].'</td>';

                                           
                                                $no++;  
                                            }
                                        }
                            
                                ?>



                                 </tbody>

                            </table>

                        
                         <br>
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