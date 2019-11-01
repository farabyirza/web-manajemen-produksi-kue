<h5 style="text-align: right; font-family: Blackletter"><b><u>2</u></b></h5>
                     <h2 style="text-align: center; font-family: Blagovest">JADWAL PENGAMBILAN (KESELURUHAN)</h2>   
                         <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman yang menampilkan kuantitas bahan dan tanggal pengambilan keseluruhan yang sudah di-<i>input</i> pada halaman <b><i>Input</i> Jadwal Pengambilan.</b><br> Anda dapat mengubah datanya dengan meng-<i>click</i> <i>Edit</i> dan <i>Delete</i> pada <i>Action</i>.</h4> 
                        <form method="POST" name="postform">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
<a href="laporan.php" class="btn btn-default" role="button">Eksport to PDF</a>
</ul>
      
<tr>  
        <th>No</th>
        <th>Sales Outlet</th>
        <th>Pengambilan Terakhir</th>
        <th>Original</th>
        <th>Stroberi</th>
        <th>Coklat</th>
        <th>Total Kue</th>
        <th>Krim Kacang</th>
        <th>Krim Pisang</th>
        <th>Total Krim</th>
        <th>Box</th>
        <th>Untuk Penjualan (hari)</th>
        <th>Tanggal Pengambilan</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php 

                        include 'config/koneksi.php';
                        

                        $query = mysqli_query($connect, "SELECT * FROM jadwal_pengambilan")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['tgl_ambil_tb'].'</td>';
                                       

                                                
                                                echo '<td><a href=index.php?halaman=edit_pengambilan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_pengambilan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                                // echo '<td><a href=cetak_jadwal_pengambilan.php><span class="glyphicon glyphicon-print"></span></a></td>';
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
                        <ul class="pagination">
                        <li><a href="index.php?halaman=penjadwalan">Input Pengambilan</a></li>
                        <li class="active"><a href="index.php?halaman=jadwal_terinput">Jadwal Ter-input</a></li>
                        <li><a href="index.php?halaman=pengambilan_hari5">Jadwal Ter-input (Hari)</a></li>
                        <li><a href="index.php?halaman=draft5">Draft</a></li>
                        </ul>
                        
                        </table>
                 <!--        <h5 style="text-align: left; font-family: Blackletter"><b>Note :</b> Setelah anda meng-<i>edit</i> <b>Tanggal Pengambilan</b>, harap untuk men-<i>generate</i> tanggal dengan mengklik <i>icon</i> <span class="glyphicon glyphicon-refresh"> diatas agar tanggal tersebut diberi nama hari dan dapat ditampilkan pada jadwal terinput (hari) </h5>  -->
                    </div>


                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    