<h5 style="text-align: right; font-family: Blackletter"><b><u>6</u></b></h5>
 <h2 style="text-align: center; font-family: Blagovest">SALES OUTLET</h2>   
                         <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman yang menampilkan <i>list Sales Outlet</i></h4> 
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class = "table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
     
      <tr>
        <th>No</th>
        <th>Sales Outlet</th>
        <th>Alamat</th>
        <th>Nomer Telepon</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>

    <tbody>
    <?php

                        include 'config/koneksi.php';
                       
                         $query = mysqli_query($connect, "SELECT * FROM sales_outlet")or die(mysqli_error($connect));
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
                                                echo '<td>'.$data['alamat'].'</td>';
                                                echo '<td>'.$data['no_telp'].'</td>';
                                                
                                                 echo '<td><a href=index.php?halaman=input_so><span class="glyphicon glyphicon-plus-sign"></span></a></td>';
                                                echo '<td><a href=index.php?halaman=edit_so&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                 //echo '<td><a href=index.php?halaman=proses_generate_tgl_produksi&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                 echo '<td><a href=config/hapus_so.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                               
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
    