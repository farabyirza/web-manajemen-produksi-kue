<h5 style="text-align: right; font-family: Blackletter"><b><u>2</u></b></h5>   
                     <h2 style="text-align: center; font-family: Blagovest">INPUT JADWAL PENGAMBILAN</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk meng-<i>input</i> <b>Jadwal Pengambilan</b>. <br>Dibawah ini merupakan banyaknya kuantitas yang akan dikirim selanjutnya. Silahkan klik <i>action</i> untuk membuat tanggal pengambilan.</h4><br>
                        <h6 style="text-align: left;"> Berikut adalah kuantitas pengiriman berikutnya yang diinput dari halaman <b><i>Laporan Harian</i></b></h6>
                        <form method="POST" name="postform">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
  <li class="active"><a href="index.php?halaman=penjadwalan">Jadwal</a></li>

  <li><a href="index.php?halaman=act_pengambilan">Action</a></li>
</ul>
      
<tr>  
        <th>No</th>
        <th>Outlet</th>
        <th>Tanggal Pengambilan Terakhir</th>
        <th>Original</th>
        <th>Stroberi</th>
        <th>Coklat</th>
        <th>Total Kue</th>
        <th>Krim Kacang</th>
        <th>Krim Pisang</th>
        <th>Total Krim</th>
        <th>Box</th>
        <th>Untuk Penjualan (hari)</th>
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
                                                echo '<td>'.$data['pst_tgl'].'</td>';
                                                echo '<td>'.$data['rata_ori'].'</td>';
                                                echo '<td>'.$data['rata_cho'].'</td>';
                                                echo '<td>'.$data['rata_che'].'</td>';
                                                echo '<td>'.$data['rata'].'</td>';
                                                echo '<td>'.$data['rata_kk'].'</td>';
                                                echo '<td>'.$data['rata_kv'].'</td>';
                                                echo '<td>'.$data['rata_tc'].'</td>';
                                                echo '<td>'.$data['rata_pb'].'</td>';
                                                
                                                echo '<td>'.$data['rencana_tb'].'</td>';

                                                
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
                        <li><a href="index.php?halaman=pengambilan_hari5">Jadwal Ter-input (Hari)</a></li>
                        <li><a href="index.php?halaman=draft5">Draft</a></li>
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
    