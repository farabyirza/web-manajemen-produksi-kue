<script src="jquery.min.js" type="text/javascript">
     <?php

include 'config/koneksi.php';


$id  = $_GET['id'];


$edit = "SELECT *
FROM sales_outlet
WHERE id='$id'";



$hasil   = mysqli_query($connect, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);
?>
</script>
 
<div class="col-md-12"> 
                                          <h2 style="text-align: center; font-family: Blagovest">INPUT SURAT JALAN</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk meng-<i>input</i><b> Surat Jalan</b></h4> 
                        
                 
                        <form method="post" action="config/edit_so.php">
                        <input type="hidden" value="<?php echo $id ?>">
                        <table>
                        <tr>
                        <td>  <div class="col-xs-2"><input class="form-control" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Sales Outlet </td>
                        <td>  
                            <div class="col-xs-20"><input class="form-control" type="text" name="so" value="<?php echo $data['so']; ?>">
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Alamat </td>
                        <td>  
                            <div class="col-xs-20"><input class="form-control" rows="5" type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> No. Telpon </td>
                        <td>  
                            <div class="col-xs-20"><input class="form-control" type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>">
                            </div>
                        </td>
                        </tr>


                           
                            <tr>
                            <td colspan= "2" align="center">
                            <input type="submit" class="btn btn-default" value="Simpan">
                            </td>
                            </tr>
                            </table>
                            </form>