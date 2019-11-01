<script src="jquery.min.js" type="text/javascript"></script>
<script>

 <?php

include 'config/koneksi.php';


$id  = $_GET['id'];
$tgl = date("d-m-Y");

$edit = "SELECT id,sum(produksi_ori),sum(produksi_cho),sum(produksi_che), sum(produksi_tb), sum(produksi_kk), sum(produksi_kv), sum(produksi_tc) FROM jadwal_produksi";



$hasil   = mysqli_query($connect, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);
?>
</script> 
<div class="col-md-12"> 
                                          <h2 style="text-align: center; font-family: Blagovest">GRAFIK PRODUKSI</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk meng-<i>edit</i> Rasa dan Tanggal Pengambilan pada <b> Jadwal Pengambilan</b></h4> 
                        
                 
                        <form method="post" action="config/input_grafik_produksi.php">
                        <input type="hidden" value="<?php echo $id ?>">
                        <table>
                        <tr>
                        <!-- <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> ID Daily </td> -->
                        <td>  <div class="col-xs-2"><input class="form-control" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        </td>
                        </tr>
                        
                       
                      
                        
                        <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="produksi_ori" id="rata_ori" onkeyup="hit3()" value="<?php echo $data['sum(produksi_ori)']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Chocolate</label>
                            <input class="form-control" type="text" name="produksi_cho"  id="rata_cho" onkeyup="hit3()" value="<?php echo $data['sum(produksi_cho)']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Cheese</label>
                            <input class="form-control" type="text" name="produksi_che"  id="rata_che" onkeyup="hit3()" value="<?php echo $data['sum(produksi_che)']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Bun</label>
                            <input class="form-control" type="text" name="produksi_tb"  id="rata" onfocus="hit3()" onkeyup="hitpb5()" value="<?php echo $data['sum(produksi_tb)']; ?>" placeholder="klik=hasil">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kopi</label>
                            <input class="form-control" type="text" name="produksi_kk"  id="rata_kk" onkeyup="hit4()" value="<?php echo $data['sum(produksi_kk)']; ?>" >
                            </div>
                            <div class="col-xs-2">
                            <label >KrimVanila</label>
                            <input class="form-control" type="text" name="produksi_kv"  id="rata_kv" onkeyup="hit4()" value="<?php echo $data['sum(produksi_kv)']; ?>">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="produksi_tc"  id="rata_tc" onfocus="hit4()" value="<?php echo $data['sum(produksi_tc)']; ?>" placeholder="klik=hasil">
                            </div>


                            
                            
                            <tr>
                            <td colspan= "2" align="center">
                            <input type="submit" class="btn btn-default" value="Submit">
                            </td>
                            </tr>
                            </table>
                            </form>