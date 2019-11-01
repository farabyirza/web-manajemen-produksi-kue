<h5 style="text-align: right; font-family: Blackletter"><b><u>4</u></b></h5>
                     <h2 style="text-align: center; font-family: Blagovest">JADWAL PRODUKSI</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menampilkan <b>Jadwal Produksi</b> yang telah di-<i>input</i>.<br> Anda dapat mengubah datanya dengan meng-<i>click</i> <i>Edit</i> dan <i>Delete</i> pada <i>Action</i>.</h4>
                        <form action="edit.php" method="POST">
                        <ul class="nav nav-tabs">
<a href="laporan_produksi.php" class="btn btn-default" role="button">Eksport to PDF</a>
</ul>
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal Produksi</th>
        <th>Original</th>
        <th>Stroberi</th>
        <th>Coklat</th>
        <th>Total Produksi</th>
        <th>Krim Kacang</th>
        <th>Krim Pisang</th>
        <th>Total Produksi</th>
<!--         <th>Status produksi</th> -->
        <th colspan="3">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                       
                       
                         $query = mysqli_query($connect, "SELECT * FROM jadwal_produksi")or die(mysqli_error($connect));
                                        if(mysqli_num_rows($query) == 0){   
                                            echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                                        }
                                            else
                                        {   
                                            $no = 1;                
                                            while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['tgl_produksi'].'</td>';
                                                echo '<td>'.$data['produksi_ori'].'</td>';
                                                echo '<td>'.$data['produksi_cho'].'</td>';
                                                echo '<td>'.$data['produksi_che'].'</td>';
                                                echo '<td>'.$data['produksi_tb'].'</td>';
                                                echo '<td>'.$data['produksi_kk'].'</td>';
                                                echo '<td>'.$data['produksi_kv'].'</td>';
                                                echo '<td>'.$data['produksi_tc'].'</td>';
                                                // echo '<td>'.$data['status_produksi'].'</td>';

                                                // echo '<td><a href=index.php?halaman=cek_status&&id='.$data['id'].'><span class="glyphicon glyphicon-refresh"></span></a></td>';
                                                echo '<td><a href=index.php?halaman=edit_produksi&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_produksi.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                               echo '<td><a href=index.php?halaman=input_grafik2&&id='.$data['id'].'><span class="glyphicon glyphicon-print"></a></td>';
                                                echo '</tr>';
                                                $no++;  
                                            }
                                        }
                            
                                ?>


                                 </tbody>

                            </table>
                             <ul class="pagination">
                        <li><a href="index.php?halaman=produksi5">Input Produksi</a></li>
                        <li class="active"><a href="index.php?halaman=jadwal_produksi_full">Jadwal Keseluruhan</a></li>
                        <li><a href="index.php?halaman=jadwal_produksi5">Jadwal Harian</a></li>
                        </ul>
                </tr>

</form>

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
    