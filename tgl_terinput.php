
                     <h2 style="text-align: center; font-family: Blagovest">TANGGAL PENGAMBILAN</h2>   
                         <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman yang menampilkan Tanggal pengambilan yang sudah di-<i>input</i> pada halaman <b><i>input</i> jadwal pengambilan.</b></h4> 
                        <form method="POST" name="postform">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
  <li><a href="index.php?halaman=jadwal_terinput">Kuantitas Pengambilan</a></li>
  <li class="active"><a href="index.php?halaman=tgl_terinput">Tanggal Pengambilan</a></li>
  
</ul>
      
<tr>  
        <th>No</th>
        <th>SO</th>
        <th>Tanggal Pengambilan Terakhir</th>
        <th>Tanggal Pengambilan 1</th>
        <th>Tanggal Pengambilan 2</th>
        <th>Tanggal Pengambilan 3</th>
        <th>Tanggal Pengambilan 4</th>
        <th>Tanggal Pengambilan 5</th>
        <th>Tanggal Pengambilan 6</th>
        <th>Tanggal Pengambilan 7</th>
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
                                                echo '<td>'.$data['tgl_ambil_tb'].'</td>';
                                                echo '<td>'.$data['tgl_ambil_tb2'].'</td>';
                                                echo '<td>'.$data['tgl_ambil_tb3'].'</td>';
                                                echo '<td>'.$data['tgl_ambil_tb4'].'</td>';
                                                echo '<td>'.$data['tgl_ambil_tb5'].'</td>';
                                                echo '<td>'.$data['tgl_ambil_tb6'].'</td>';
                                                echo '<td>'.$data['tgl_ambil_tb7'].'</td>';

                                                
                                                echo '<td><a href=index.php?halaman=edit_pengambilan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_pengambilan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                                // echo '<td><a href=index.php?halaman=proses_generate_tgl_produksi2&&id='.$data['id'].'><span class="glyphicon glyphicon-refresh"></a></td>';
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
                        <h5 style="text-align: left; font-family: Blackletter"><b>Note :</b> Setelah anda meng-<i>edit</i> <b>Tanggal Pengambilan</b>, harap untuk men-<i>generate</i> tanggal dengan mengklik <i>icon</i> <span class="glyphicon glyphicon-refresh"> diatas agar tanggal tersebut diberi nama hari dan dapat ditampilkan pada jadwal terinput (hari) </h5> 
                    </div>


                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    