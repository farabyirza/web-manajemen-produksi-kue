<h5 style="text-align: right; font-family: Blackletter"><b><u>1</u></b></h5>   
                <h2 style="text-align: center; font-family: Blagovest">DATA DAILY REPORT</h2>   
                       <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menampilkan data <b><i>Daily Report</i></b> yang telah di-<i>input</i>. <br> Anda dapat mengubah datanya dengan meng-<i>klik</i> <i>Edit</i> dan <i>Delete</i> pada <i>Action</i>.</h4> 
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
  <li><a href="index.php?halaman=data_daily">Stok Awal</a></li>
  <li class="active"><a href="index.php?halaman=data_daily2">Penjualan Hari ini</a></li>
  <li><a href="index.php?halaman=data_daily3">Pengambilan Stok Terakhir</a></li>
  <li><a href="index.php?halaman=data_daily4">Stok Akhir</a></li>
</ul>
      <tr>
        <th>No</th>
        <th>Outlet</th>
        <th>Tanggal Input</th>
        <th>Original</th>
        <th>Stroberi</th>
        <th>Coklat</th>
        <th>Total Kue</th>
        <th>Box</th>
        <th>Krim Kacang</th>
        <th>Krim Pisang</th>
        <th>Total Krim</th>
        <th colspan="4">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';

                        $query = mysqli_query($connect, "SELECT id,so,tgl,pen_ori,pen_cho,pen_che,pen_tb,pen_pb,pen_kk,pen_kv,pen_tc FROM tbl_daily")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['pen_ori'].'</td>';
                                                echo '<td>'.$data['pen_cho'].'</td>';
                                                echo '<td>'.$data['pen_che'].'</td>';
                                                echo '<td>'.$data['pen_tb'].'</td>';
                                                echo '<td>'.$data['pen_pb'].'</td>';
                                                echo '<td>'.$data['pen_kk'].'</td>';
                                                echo '<td>'.$data['pen_kv'].'</td>';
                                                echo '<td>'.$data['pen_tc'].'</td>';
                                           
                                               echo '<td><a href=index.php?halaman=edit&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                
                                                echo '<td><a href=config/hapus.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                                
                                                $no++;  
                                            }
                                        }
                            
                                ?>


                                 </tbody>

                            </table>
                            
                </tr>


</ul></form>

                        </tr>
                        </tr>
                        
                        </table>
                    </div>


                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    