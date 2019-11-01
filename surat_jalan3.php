                     <h2 style>PENGAMBILAAN SURAT JALAN</h2>   
                        <h5>Welcome! Love to see you back. </h5>
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
  <li><a href="index.php?halaman=surat_jalan">Senin</a></li>
  <li><a href="index.php?halaman=surat_jalan2">Selasa</a></li>
  <li class="active"><a href="index.php?halaman=surat_jalan3">Rabu</a></li>
  <li><a href="index.php?halaman=surat_jalan4">Kamis</a></li>
  <li><a href="index.php?halaman=surat_jalan5">Jumat</a></li>
  <li><a href="index.php?halaman=surat_jalan6">Sabtu</a></li>
  <li><a href="index.php?halaman=surat_jalan7">Minggu</a></li>
</ul> 
      <tr>
        <th>No</th>
        <th>Sales Outlet</th>
        <th>Original</th>
        <th>Chocolate</th>
        <th>Cheese</th>
        <th>Total Bun</th>
        <!-- <th>Cream Coffe</th>
        <th>Cream Vanila</th>
        <th>Total Cream</th>
        <th>Paper Bag</th> -->
        
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                        $query = mysqli_query($connect, "SELECT id,so,ambil_ori,ambil_cho,ambil_che,ambil_tb FROM pesanan_mingguan_bun WHERE tgl_ambil_tb LIKE '%Rabu%'")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['ambil_ori'].'</td>';
                                                echo '<td>'.$data['ambil_cho'].'</td>';
                                                echo '<td>'.$data['ambil_che'].'</td>';
                                                echo '<td>'.$data['ambil_tb'].'</td>';
                                                // echo '<td>'.$data['ambil_vanila'].'</td>';
                                                // echo '<td>'.$data['ambil_kopi'].'</td>';
                                                // echo '<td>'.$data['ambil_tc'].'</td>';
                                                // echo '<td>'.$data['ambil_pb'].'</td>';
                                                
                                                echo '<td><a href=index.php?halaman=tambah_surat_jalan&&id='.$data['id'].'><span class="glyphicon glyphicon-plus"></a></td>';
                                                echo '<td><a href=config/hapus_surat_jalan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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
 						<li class="active"><a href="index.php?halaman=surat_jalan">Bun</a></li>
  						<li><a href="index.php?halaman=surat_jalan_cream">Cream</a></li>
  						<li><a href="index.php?halaman=surat_jalan_pb">Paperbag</a></li>
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
    