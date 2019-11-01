
                     <h2 style>JADWAL PENGAMBILAN</h2>   
                        <h5>Welcome! Love to see you back. </h5>
                        <form method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
  <li class="active"><a href="index.php?halaman=penjadwalan">Jadwal Bun</a></li>
  <li><a href="index.php?halaman=penjadwalan2">Jadwal Cream</a></li>
  <li><a href="index.php?halaman=penjadwalan3">Jadwal Paperbag</a></li>
</ul>
      <tr>
        <th>No</th>
        <th>Sales Outlet</th>
        <th>Tanggal Pengambilan Terakhir</th>
        <!-- <th>Original</th>
        <th>Chocolate</th>
        <th>Cheese</th> -->
        <th>Total</th>
        <th>Untuk Penjualan (hari)</th>
        <th>Tanggal Pengambilan</th>

        
        
        
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                        

                        $query = mysqli_query($connect, "SELECT id,so,pst_tgl,rencana_tb,tgl_ambil_tb,rata_ori,rata_cho,rata_che,rata FROM tbl_daily")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['pst_tgl'].'</td>';
                                                echo '<td>'.$data['rata_ori'].'</td>';
                                                echo '<td>'.$data['rata_cho'].'</td>';
                                                echo '<td>'.$data['rata_che'].'</td>';
                                                // echo '<td>'.$data['rata'].'</td>';
                                               
                                                echo '<td>'.$data['rencana_tb'].'</td>';
                                                echo '<td>'.$data['tgl_ambil_tb'].'</td>';
                                                
                                               
                                                
                                                 echo '<td><a href=index.php?halaman=perencanaan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_daily.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                                echo '</tr>';
                                                $no++;  
                                            }
                                        }
                            
                                ?>


                                 </tbody>

                            </table>
                </tr>

<!--                 <ul class="pagination" style="align-items: center">
  
  <li class="page-item active"><a class="page-link" href="index.php?halaman=data_daily">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">4</a></li>
  <li class="page-item"><a class="page-link" href="#">5</a></li>
 -->

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
    