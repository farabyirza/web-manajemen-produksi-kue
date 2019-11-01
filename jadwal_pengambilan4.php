<h5 style="text-align: right; font-family: Blackletter"><b><u>3</u></b></h5>
                     <h2 style="text-align: center; font-family: Blagovest">JADWAL PENGAMBILAN PESANAN</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menampilkan <b>Jadwal Pengambilan</b> setiap <i>Sales Outlet </i> perhari.<br> Anda dapat mengubah datanya dengan meng-<i>click</i> <i>Edit</i> dan <i>Delete</i> pada <i>Action</i>.</h4>
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
  <li><a href="index.php?halaman=jadwal_pengambilan5">Jumat</a></li>
  <li><a href="index.php?halaman=jadwal_pengambilan6">Sabtu</a></li>
<!--   <li><a href="index.php?halaman=jadwal_pengambilan7">Minggu</a></li> -->
  <li><a href="index.php?halaman=jadwal_pengambilan">Senin</a></li>
  <li><a href="index.php?halaman=jadwal_pengambilan2">Selasa</a></li>
  <li><a href="index.php?halaman=jadwal_pengambilan3">Rabu</a></li>
  <li class="active"><a href="index.php?halaman=jadwal_pengambilan4">Kamis</a></li>
<!--   <li><a href="index.php?halaman=jadwal_pengambilan8">Jumat</a></li> -->
</ul> 
      <tr>
        <th>No</th>
        <th>Sales Outlet</th>
        <th>Tanggal Pengambilan</th>
        <th>Total Kue</th>
        <th>Total Krim</th>
        <th>Box</th>

        
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                        $query = mysqli_query($connect, "SELECT id,so,tgl_ambil_tb,rata, rata_pb, rata_tc FROM jadwal_pengambilan WHERE tgl_ambil_tb LIKE '%Kamis%'")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['tgl_ambil_tb'].'</td>';
                                                echo '<td>'.$data['rata'].'</td>';
                                                echo '<td>'.$data['rata_tc'].'</td>';
                                                echo '<td>'.$data['rata_pb'].'</td>';
                                                // echo '<td>'.$data['ambil_tb'].'</td>';
                                                // echo '<td>'.$data['ambil_vanila'].'</td>';
                                                // echo '<td>'.$data['ambil_kopi'].'</td>';
                                                // echo '<td>'.$data['ambil_tc'].'</td>';
                                                // echo '<td>'.$data['ambil_pb'].'</td>';
                                                
                                               echo '<td><a href=index.php?halaman=edit_pengambilan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_pengambilan5.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                                echo '</tr>';
                                                $no++;  
                                            }
                                        }
                             
                                ?>


                                 </tbody>

                            </table>
                </tr>
<tr>
            <!--     <ul class="pagination" style="align-items: center">
  
  <li class="page-item active"><a class="page-link" href="index.php?halaman=jadwal_pengambilan4">Jadwal Pengambilan</a></li>
  <li class="page-item"><a class="page-link" href="index.php?halaman=draft4">Draft</a></li>

</ul> -->
</tr>

</ul></form>

                        </tr>
                        </tr>
                        <!-- <ul class="pagination">
 						<li class="active"><a href="index.php?halaman=jadwal_pesanan_mingguan">Bun</a></li>
              <li><a href="index.php?halaman=jadwal_pesanan_mingguan_cream">Cream</a></li>
              <li><a href="index.php?halaman=jadwal_pesanan_mingguan_pb">Box</a></li>
						</ul> -->
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
    