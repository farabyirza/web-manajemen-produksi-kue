 <?php

include 'config/koneksi.php';

$id  = $_GET['id'];

$edit    = "SELECT id,tgl,so,rencana_tb,tgl_ambil_tb,rata_ori,rata_cho,rata_che,rata,rata_kk,rata_kv,rata_tc,rata_pb,pst_tgl FROM tbl_daily WHERE id = '$id'";
$hasil   = mysqli_query($connect, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);
?>
 
<div class="col-md-12">
                      <h2 style="text-align: center; font-family: Blagovest">HITUNG JADWAL PENGAMBILAN</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menghitung <b>jadwal pengambilan</b> sesuai dengan rencana penjualan kuantitas pengiriman terakhir.</h4>
                        
                 
                        <form method="post" action="index.php?halaman=proses10">
                        <input type="hidden" value="<?php echo $id ?>">
                             <table>
                        <tr>
                        
                        <td>  <input class="form-control" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        </td>
                        </tr>
                         <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Tanggal </td>
                        <td>  <input class="form-control" type="text" name="pst_tgl" value="<?php echo $data['pst_tgl']; ?>">
                        </td>
                        </tr>
                         <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> SO </td>
                        <td>  <input class="form-control" type="text"  value="<?php echo $data['so']; ?>">
                        </td>
                        </tr>
                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Rencana </td>
                        <td>  <input class="form-control" type="text" name="hari" value="<?php echo $data['rencana_tb']; ?>">
                        </td>
                        </tr>
                        <tr>
                           
                        </td>
                        </tr>
                        </td>
                        </tr>
                        </tr>
                            
                            
                            <tr>
                            <tr>

                            <td colspan= "2" align="center">
                            <input type="submit" value="input" class="btn btn-primary">
                             

                            
                            </td>
                         
                        </tr>
                        </tr> 
                        
                        </table>