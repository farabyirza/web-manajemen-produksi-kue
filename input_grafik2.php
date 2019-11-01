                     <h2  style="text-align: center; font-family: Blagovest">INPUT GRAFIK PRODUKSI</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk proses memasukkan jadwal produksi. Dibawah tanggal pengambilan yang ingin kita input.</h4>
<?php

include 'config/koneksi.php';

                            
                            $tgl    = "SELECT id,sum(produksi_ori),sum(produksi_cho),sum(produksi_che), sum(produksi_tb), sum(produksi_kk), sum(produksi_kv), sum(produksi_tc) FROM jadwal_produksi";
                            $hasil   = mysqli_query($connect, $tgl)or die(mysqli_error());
                            $data    = mysqli_fetch_array($hasil);



                                echo'<table>';
                                echo'<tr>';

                                echo '<form action="config/simpan_grafik.php" method="POST">';
                                echo '<input type="hidden" name="id[]" value="1">';
                                echo '<div class="col-xs-2">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Original';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="jumlah_produksi[]" value="'.$data['sum(produksi_ori)'].'">';
                                echo '</div>';

                                echo '<form action="config/simpan_grafik.php" method="POST">';
                                echo '<input type="hidden" name="id[]" value="2">';
                                echo '<div class="col-xs-2">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Stroberi';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="jumlah_produksi[]" value="'.$data['sum(produksi_cho)'].'">';
                                echo '</div>';

                                echo '<form action="config/simpan_grafik.php" method="POST">';
                                echo '<input type="hidden" name="id[]" value="3">';
                                echo '<div class="col-xs-2">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Coklat';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="jumlah_produksi[]" value="'.$data['sum(produksi_che)'].'">';
                                echo '</div>';

                                echo '<form action="config/simpan_grafik.php" method="POST">';
                                echo '<input type="hidden" name="id[]" value="4">';
                                echo '<div class="col-xs-2">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Total Bun';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="jumlah_produksi[]" value="'.$data['sum(produksi_tb)'].'">';
                                echo '</div>';

                                echo '<form action="config/simpan_grafik.php" method="POST">';
                                echo '<input type="hidden" name="id[]" value="5">';
                                echo '<div class="col-xs-2">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Krim Kacang';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="jumlah_produksi[]" value="'.$data['sum(produksi_kk)'].'">';
                                echo '</div>';

                                echo '<form action="config/simpan_grafik.php" method="POST">';
                                echo '<input type="hidden" name="id[]" value="6">';
                                echo '<div class="col-xs-2">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Krim Pisang';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="jumlah_produksi[]" value="'.$data['sum(produksi_kv)'].'">';
                                echo '</div>';

                                echo '<form action="config/simpan_grafik.php" method="POST">';
                                echo '<input type="hidden" name="id[]" value="7">';
                                echo '<div class="col-xs-2">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Total Krim';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="jumlah_produksi[]" value="'.$data['sum(produksi_tc)'].'">';
                                echo '</div>';
                                
                                echo '<tr>';
                                echo '<td colspan="2" align="center">';
                                echo '<br>';
                                echo '<input type="submit" class="btn btn-default" value="Submit">';
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';
                                
                                
                                
                                

                                