 
 <?php

include 'config/koneksi.php';

$id  = $_GET['id'];

$edit    = "SELECT id,so,tgl_ambil_tb,tgl_surat,lokasi, ambil_ori, ambil_cho, ambil_che, ambil_tb FROM pesanan_mingguan_bun WHERE id = '$id'";
$hasil   = mysqli_query($connect, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);
?>

<div class="col-md-12">
                     <h2 style>INPUT SURAT JALAN</h2>   
                        <h5>Welcome! Love to see you back. </h5>
                         
                 <form method="post" action="config/tambah_surat_jalan.php">
                        <input type="hidden" value="<?php echo $id ?>">
                             <table>
                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> ID Daily </td>
                        <td>  <input class="form-control" type="text" name="id" value="<?php echo $data['id']; ?>">
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Sales Outlet </td>
                        <td>  <input class="form-control" type="text" name="so" value="<?php echo $data['so']; ?>">
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Tanggal Pengambilan </td>
                        <td>  <input class="form-control" type="text" name="tgl_ambil_tb" value="<?php echo $data['tgl_ambil_tb']; ?>">
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Tanggal Surat </td>
                        <td>  <input class="form-control" type="date" name="tgl_surat">
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Lokasi Outlet </td>
                        <td>  <input class="form-control" type="text" name="lokasi">
                        </td>
                        </tr>


                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Original </td>
                        <td>  <input class="form-control" type="text" name="ambil_ori" value="<?php echo $data['ambil_ori']; ?>">
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Chocolate </td>
                        <td>  <input class="form-control" type="text" name="ambil_cho" value="<?php echo $data['ambil_cho']; ?>">
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Cheese </td>
                        <td>  <input class="form-control" type="text" name="ambil_che" value="<?php echo $data['ambil_che']; ?>">
                        </td>
                        </tr>

                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Total Bun </td>
                        <td>  <input class="form-control" type="text" name="ambil_tb" value="<?php echo $data['ambil_tb']; ?>">
                        </td>
                        </tr>







                        </td>
                        </tr>
                        </tr>

                            
                            <tr>
                            <tr>
                            <td colspan= "2" align="center">
                            <input type="submit" value="input" class="btn btn-primary">
                            <!-- <a href="index.php?halaman=data_daily" class="btn btn-default" role="button">Process</a>  -->
                            </td>
                        </tr>
                        </tr> 
                        
                        </table>