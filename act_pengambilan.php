<h5 style="text-align: right; font-family: Blackletter"><b><u>2</u></b></h5>
                    <h2 style="text-align: center; font-family: Blagovest">ACTION INPUT PENGAMBILAN</h2>   
                       <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menambah tanggal pengambilan dengan meng-klik "+" pada pengambilan, <i> edit</i> dan <i>delete</i> pada <i>Action</i> untuk Kuantitas Pesanan <i>(Daily Report)</i>.</h4> 
                        <form method="POST" name="postform">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
  <li><a href="index.php?halaman=penjadwalan">Jadwal Bun</a></li>

  <li class="active"><a href="index.php?halaman=act_pengambilan">Action</a></li>
</ul>
      
<tr>  
        <th>No</th>
        <th>Sales Outlet</th>
        <th>Tanggal Pengambilan Terakhir</th>
        <th>Untuk Penjualan (hari)</th>
        <th>Pengambilan</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                        

                        $query = mysqli_query($connect, "SELECT id,so,pst_tgl,rencana_tb,rata_ori,rata_cho,rata_che,rata FROM tbl_daily")or die(mysqli_error($connect));
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
                                             
                                                echo '<td>'.$data['rencana_tb'].'</td>';

                                                  echo '<td><a href=index.php?halaman=perencanaan3&&id='.$data['id'].'><span class="glyphicon glyphicon-plus-sign"></span></a></td>';
                                                

                                                echo '<td><a href=index.php?halaman=edit&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                               
                                                echo '<td><a href=config/hapus_tgl_pengambilan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                                
                                                echo '</tr>';
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
                            <ul class="pagination">
                        <li class="active"><a href="index.php?halaman=penjadwalan">Input Pengambilan</a></li>
                        <li><a href="index.php?halaman=jadwal_terinput">Jadwal Ter-input</a></li>
                        <li><a href="index.php?halaman=pengambilan_hari">Jadwal Ter-input (Hari)</a></li>
                        <li><a href="index.php?halaman=draft">Draft</a></li>
                        </ul>
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
    