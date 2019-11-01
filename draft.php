<h5 style="text-align: right; font-family: Blackletter"><b><u>2</u></b></h5>
                    <h2 style="text-align: center; font-family: Blagovest">DRAFT</h2>   
                         <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menampilkan jumlah dari setiap rasa pada <b>Jadwal Pengambilan</b>.</h4> 
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
      <ul class="nav nav-tabs">
  <li><a href="index.php?halaman=draft5">Jumat</a></li>
  <li><a href="index.php?halaman=draft6">Sabtu</a></li>
  <li class="active"><a href="index.php?halaman=draft">Senin</a></li>
  <li><a href="index.php?halaman=draft2">Selasa</a></li>
  <li><a href="index.php?halaman=draft3">Rabu</a></li>
  <li><a href="index.php?halaman=draft4">Kamis</a></li>
</ul> 
      <tr>
        <th>No</th>
        <th>Tanggal Pengambilan</th>
        <th>Original</th>
        <th>Stroberi</th>
        <th>Coklat</th>
        <th>Total Produksi</th>
        <th>Krim Coklat</th>
        <th>Krim Pisang</th>
        <th>Total Krim</th>
        <th>Box</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                         $query = mysqli_query($connect, "SELECT id,tgl_ambil_tb,sum(rata_ori),sum(rata_cho),sum(rata_che), sum(rata), sum(rata_kk), sum(rata_kv), sum(rata_tc), sum(rata_pb) FROM jadwal_pengambilan WHERE tgl_ambil_tb LIKE '%Senin%'")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['sum(rata_ori)'].'</td>';
                                                echo '<td>'.$data['sum(rata_cho)'].'</td>';
                                                echo '<td>'.$data['sum(rata_che)'].'</td>';
                                                echo '<td>'.$data['sum(rata)'].'</td>';
                                                echo '<td>'.$data['sum(rata_kk)'].'</td>';
                                                echo '<td>'.$data['sum(rata_kv)'].'</td>';
                                                echo '<td>'.$data['sum(rata_tc)'].'</td>';
                                                echo '<td>'.$data['sum(rata_pb)'].'</td>';

                                              
                                               
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
                        <li><a href="index.php?halaman=pengambilan_hari">Jadwal Ter-input (Hari)</a></li>
                        <li class="active"><a href="index.php?halaman=draft5">Draft</a></li>
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
    