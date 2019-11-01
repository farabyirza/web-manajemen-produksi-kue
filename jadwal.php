
                     <h2 style>DATA DAILY REPORT</h2>   
                        <h5>Welcome! Love to see you back. </h5>
                        <form action="#" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
<!--   <ul class="nav nav-tabs">
  <li class="active"><a href="index.php?halaman=data_daily">Stock Opname Awal</a></li>
  <li><a href="index.php?halaman=data_daily2">Penjualan Hari ini</a></li>
  <li><a href="index.php?halaman=data_daily3">Pengambilan Stock Terakhir</a></li>
</ul> -->
      <tr>
        <th>No</th>
        <th>Sales Outlet </th>
        <th>Senin</th>
        <th>Selasa</th>
        <th>Rabu</th>
        <th>Kamis</th>
        <th>Jumat</th>
        <th>Sabtu</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';

                        $query = mysqli_query($connect, "SELECT nis,so,tgl,soa_ori,soa_cho,soa_che,soa_tb,soa_pb,soa_kk,soa_kv,soa_tc,soa_jml, keterangan FROM tbl_daily")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['soa_ori'].'</td>';
                                                echo '<td>'.$data['soa_cho'].'</td>';
                                                echo '<td>'.$data['soa_che'].'</td>';
                                                echo '<td>'.$data['soa_tb'].'</td>';
                                                echo '<td>'.$data['soa_pb'].'</td>';
                                                echo '<td>'.$data['soa_kk'].'</td>';
                                                echo '<td>'.$data['soa_kv'].'</td>';
                                                echo '<td>'.$data['soa_tc'].'</td>';
                                                echo '<td>'.$data['soa_jml'].'</td>';
                                                echo '<td>'.$data['keterangan'].'</td>';
                                                 echo '<td><a href=index.php?halaman=edit_daily&&nis='.$data['nis'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_daily.php?nis='.$data['nis'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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
    