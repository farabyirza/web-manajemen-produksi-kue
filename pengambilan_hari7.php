<h5 style="text-align: right; font-family: Blackletter"><b><u>2</u></b></h5>
 <h2 style="text-align: center; font-family: Blagovest">JADWAL PENGAMBILAN (HARI)</h2>   
                         <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman yang menampilkan tanggal pengambilan perhari yang sudah di-<i>input</i> pada halaman <b><br><i>Input</i> Jadwal Pengambilan.</b>.<br> Anda dapat mengubah datanya dengan meng-<i>click</i> <i>Edit</i> dan <i>Delete</i> pada <i>Action</i>.</h4> 
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
      <ul class="nav nav-tabs">
  <li><a href="index.php?halaman=pengambilan_hari5">Jumat</a></li>
  <li><a href="index.php?halaman=pengambilan_hari6">Sabtu</a></li>
<!--   <li class="active"><a href="index.php?halaman=pengambilan_hari7">Minggu</a></li> -->
  <li><a href="index.php?halaman=pengambilan_hari">Senin</a></li>
  <li><a href="index.php?halaman=pengambilan_hari2">Selasa</a></li>
  <li><a href="index.php?halaman=pengambilan_hari3">Rabu</a></li>
  <li><a href="index.php?halaman=pengambilan_hari4">Kamis</a></li>
<!--   <li><a href="index.php?halaman=pengambilan_hari8">Jumat</a></li> -->
</ul> 
      <tr>
        <th>No</th>
        <th>Tanggal Pengambilan</th>
        <th>Sales Outlet</th>
        <th>Original</th>
        <th>Chocolate</th>
        <th>Cheese</th>
        <th>Total Produksi</th>
        <th>Krim Kopi</th>
        <th>Krim Vanila</th>
        <th>Total Krim</th>
        <th>Box</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                       
                        // $query = mysqli_query($connect, "SELECT tbl_daily.nis,jadwal_produksi.id, tbl_daily.so, tbl_daily.tgl_ambil_tb,tbl_daily.tgl_ambil_tc,tbl_daily.tgl_ambil_pb,jadwal_produksi.Produksi_ori,jadwal_produksi.Produksi_cho,jadwal_produksi.Produksi_che,jadwal_produksi.Produksi_tb,jadwal_produksi.Produksi_kk,jadwal_produksi.Produksi_kv,jadwal_produksi.Produksi_tc,jadwal_produksi.Produksi_pb FROM tbl_daily, jadwal_produksi")or die(mysqli_error($connect));
                        // $query = mysqli_query($connect, "SELECT tbl_daily.nis, jadwal_produksi.id, tbl_daily.so FROM tbl_daily JOIN jadwal_produksi ON jadwal_produksi.id = tbl_daily.nis WHERE jadwal_produksi.so = tbl_daily.so")or die(mysqli_error($connect));
                         $query = mysqli_query($connect, "SELECT * FROM jadwal_pengambilan WHERE tgl_ambil_tb LIKE '%Minggu%'")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['so'].'</td>';
                                                echo '<td>'.$data['rata_ori'].'</td>';
                                                echo '<td>'.$data['rata_cho'].'</td>';
                                                echo '<td>'.$data['rata_che'].'</td>';
                                                echo '<td>'.$data['rata'].'</td>';
                                                echo '<td>'.$data['rata_kk'].'</td>';
                                                echo '<td>'.$data['rata_kv'].'</td>';
                                                echo '<td>'.$data['rata_tc'].'</td>';
                                                echo '<td>'.$data['rata_pb'].'</td>';

                                                echo '<td><a href=index.php?halaman=edit_pengambilan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                 //echo '<td><a href=index.php?halaman=proses_generate_tgl_produksi&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                 echo '<td><a href=config/hapus_pengambilan_hari.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                               
                                                $no++;  
                                            }
                                        }
                            
                                ?>


                                 </tbody>

                            </table>
                </tr>

</form>

                        </tr>
                        </tr>
                        <ul class="pagination">
                        <li><a href="index.php?halaman=penjadwalan">Input Pengambilan</a></li>
                        <li><a href="index.php?halaman=jadwal_terinput">Jadwal Ter-input</a></li>
                        <li class="active"><a href="index.php?halaman=pengambilan_hari5">Jadwal Ter-input (Hari)</a></li>
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
    