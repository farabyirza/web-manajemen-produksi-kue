
                     <h2 style>DATA DAILY REPORT</h2>   
                        <h5>Welcome! Love to see you back. </h5>
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
  <ul class="nav nav-tabs">
  <li><a href="index.php?halaman=data_daily">Senin</a></li>
  <li><a href="index.php?halaman=data_daily2">Selasa</a></li>
  <li><a href="index.php?halaman=data_daily3">Rabu</a></li>
  <li><a href="index.php?halaman=data_daily3">Kamis</a></li>
  <li><a href="index.php?halaman=data_daily3">Jumat</a></li>
  <li><a href="index.php?halaman=data_daily3">Sabtu</a></li>
  <li class="active"><a href="index.php?halaman=data_daily3">Minggu</a></li>
</ul> 
      <tr>
        <th>No</th>
        <th>Sales Outlet</th>
        <th>Tanggal Pengambilan</th>
        <th>Original</th>
        <th>Chocolate</th>
        <th>Cheese</th>
        <th>Total Bun</th>
        <th>Cream Coffe</th>
        <th>Cream Vanila</th>
        <th>Total Cream</th>
        <th>Paper Bag</th>
        
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                        $query = mysqli_query($connect, "SELECT id,so,tgl_ambil_tb, pst_tb FROM tbl_daily WHERE tgl_ambil_tb LIKE %Minggu%")or die(mysqli_error($connect));
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
                                                echo '<td>''</td>';
                                                echo '<td>''</td>';
                                                echo '<td>''</td>';
                                                echo '<td>''</td>';
                                                echo '<td>''</td>';
                                                echo '<td>''</td>';
                                                echo '<td>''</td>';
                                                echo '<td>''</td>';
                                                
                                                 echo '<td><a href=index.php?halaman=edit_daily&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
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
    