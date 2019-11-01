<h5 style="text-align: right; font-family: Blackletter"><b><u>5</u></b></h5>
                     <h2 style="text-align: center; font-family: Blagovest">SURAT JALAN (TERINPUT)</h2>   
                         <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman yang menampilkan <b>Surat Jalan</b> yang telah di-<i>input</i> dengan kuantitasnya.</b><br> Anda dapat mengubah datanya dengan meng-<i>click</i> <i>Edit</i> dan <i>Delete</i> dan mencetak surat jalan dengan <i>click Print</i> pada Action </h4> 
                        <form method="POST" name="postform">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
    
<tr>  
        <th>No</th>
        <th>SO</th>
        <th>Tanggal Pengambilan</th>
        <th>Tanggal Surat</th>
        <th>Lokasi</th>
        <th>Original</th>
        <th>Stoberi</th>
        <th>Coklat</th>
        <th>Total</th>
        <th>Krim Kacang</th>
        <th>Krim Pisang</th>
        <th>Total Krim</th>
        <th>Box</th>
        <th>PIC</th>

        <th colspan="3">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php 

                        include 'config/koneksi.php';
                        

                        $query = mysqli_query($connect, "SELECT * FROM surat_jalan")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['tgl_surat'].'</td>';
                                                echo '<td>'.$data['lokasi'].'</td>';
                                                echo '<td>'.$data['rata_ori'].'</td>';
                                                echo '<td>'.$data['rata_cho'].'</td>';
                                                echo '<td>'.$data['rata_che'].'</td>';
                                                echo '<td>'.$data['rata'].'</td>';
                                                echo '<td>'.$data['rata_kk'].'</td>';
                                                echo '<td>'.$data['rata_kv'].'</td>';
                                                echo '<td>'.$data['rata_tc'].'</td>';
                                                echo '<td>'.$data['rata_pb'].'</td>';
                                                echo '<td>'.$data['pic'].'</td>';

                                                
                                                echo '<td><a href=index.php?halaman=edit_surat_jalan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_surat_jalan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                                echo '<td><a href=cetak_surat_jalan.php?id='.$data['id'].'><span class="glyphicon glyphicon-print"></span></a></td>';
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
                        <li><a href="index.php?halaman=surat_jalan">Input Surat Jalan</a></li>
                        <li class="active"><a href="index.php?halaman=surat_jalan_terinput">List Surat Ter-input</a></li>
                        </ul>
                        
                        </table>
                 
                    </div>


                </div>
                 
                 <hr />
               
    </div>
             
            </div>
         
        </div>
    