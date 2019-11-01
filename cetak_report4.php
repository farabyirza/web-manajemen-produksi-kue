<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Produksi - Baker Old</title>
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

                <h2 style="text-align: center; font-family: Blagovest">DATA DAILY REPORT</h2>   
                       <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menampilkan data <b>STOCK OPNAME AKHIR</b> pada <b><i>Daily Report</i></b> yang telah di-<i>input</i></h4> 
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
 
      <tr>
        <th>No</th>
        <th>Sales Outlet</th>
        <th>Tanggal Input</th>
        <th>Original</th>
        <th>Chocolate</th>
        <th>Cheese</th>
        <th>Total Bun</th>
        <th>Paper Bag</th>
        <th>Cream Coffe</th>
        <th>Cream Vanila</th>
        <th>Total Cream</th>
      </tr>
    </thead>

    <tbody>
   <?php

                        include 'config/koneksi.php';

                       $query = mysqli_query($connect, "SELECT * FROM tbl_daily")or die(mysqli_error($connect));
                                        if(mysqli_num_rows($query) == 0){   
                                            echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                                        }
                                            else
                                        {   
                                            $no = 1;                
                                            while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['so'].'</td>';
                                                echo '<td>'.$data['tgl'].'</td>';
                                                echo '<td>'.$data['akhir_ori'].'</td>';
                                                echo '<td>'.$data['akhir_cho'].'</td>';
                                                echo '<td>'.$data['akhir_che'].'</td>';
                                                echo '<td>'.$data['akhir_tb'].'</td>';
                                                echo '<td>'.$data['akhir_pb'].'</td>';
                                                echo '<td>'.$data['akhir_kk'].'</td>';
                                                echo '<td>'.$data['akhir_kv'].'</td>';
                                                echo '<td>'.$data['akhir_tc'].'</td>';
                                                

                                         
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