                     <h2  style="text-align: center; font-family: Blagovest">INPUT JADWAL PENGAMBILAN & PRODUKSI</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk proses memasukkan jadwal produksi. Dibawah tanggal pengambilan yang ingin kita input.</h4>
<?php

include 'config/koneksi.php';



                            $id  = $_POST['id'];
                            
                            $tgl    = "SELECT id, pst_tgl,tgl,so,rencana_tb,tgl_ambil_tb,rata_ori,rata_cho,rata_che,rata,rata_kk,rata_kv,rata_tc,rata_pb FROM tbl_daily WHERE id = '$id'";
                            $hasil   = mysqli_query($connect, $tgl)or die(mysqli_error());
                            $data    = mysqli_fetch_array($hasil);


                            $hari = $_POST['hari']; 
                            
                            switch ($hari){
                                case 1:

                                echo'<table>';
                                echo'<tr>';

                                $tgl1 = $data['pst_tgl'];// pendefinisian tanggal awal
                                
                                $tgl2 = date('d-m-Y', strtotime('+0 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl2));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl2.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="1">';
                                
                                
                                $tgl3 = date('d-m-Y', strtotime('+0 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari


                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl3));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl3.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';




///////////////////////////////
                                echo '<tr>';
                                $tgl4 = date('d-m-Y', strtotime('+1 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl4));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl4.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="2">';
                                
                                
                                $tgl5 = date('d-m-Y', strtotime('+0 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl5));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl5.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';



///////////////////////////////
                                echo '<tr>';
                                $tgl6 = date('d-m-Y', strtotime('+2 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl6));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl6.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="3">';
                                
                                
                                $tgl7 = date('d-m-Y', strtotime('+1 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl7));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl7.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';


                                ///////////////////////////////
                                echo '<tr>';
                                $tgl8 = date('d-m-Y', strtotime('+3 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl8));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl8.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="4">';
                                
                                
                                $tgl9 = date('d-m-Y', strtotime('+2 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl9));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl9.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl10 = date('d-m-Y', strtotime('+4 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl10));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl10.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="5">';
                                
                                
                                $tgl11 = date('d-m-Y', strtotime('+3 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl11));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl11.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl12 = date('d-m-Y', strtotime('+5 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl12));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl12.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="6">';
                                
                                
                                $tgl13 = date('d-m-Y', strtotime('+4 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl13));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl13.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl14 = date('d-m-Y', strtotime('+6 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl14));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl14.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="7">';
                                
                                
                                $tgl15 = date('d-m-Y', strtotime('+5 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl15));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl15.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                echo '<br>';

                                echo '<tr>';
                                echo '<td colspan="2" align="center">';
                                echo '<br>';
                                echo '<input type="submit" class="btn btn-default" value="Submit">';
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';

                                break;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    case 2:

                                echo'<table>';
                                echo'<tr>';

                                $tgl1 = $data['pst_tgl'];// pendefinisian tanggal awal
                                
                                $tgl2 = date('d-m-Y', strtotime('+1 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl2));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl2.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="1">';
                                
                                
                                $tgl3 = date('d-m-Y', strtotime('+0 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari


                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl3));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl3.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';




///////////////////////////////
                                echo '<tr>';
                                $tgl4 = date('d-m-Y', strtotime('+2 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl4));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl4.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="2">';
                                
                                
                                $tgl5 = date('d-m-Y', strtotime('+1 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl5));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl5.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';



///////////////////////////////
                                echo '<tr>';
                                $tgl6 = date('d-m-Y', strtotime('+3 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl6));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl6.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="3">';
                                
                                
                                $tgl7 = date('d-m-Y', strtotime('+2 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl7));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl7.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';


                                ///////////////////////////////
                                echo '<tr>';
                                $tgl8 = date('d-m-Y', strtotime('+4 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl8));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl8.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="4">';
                                
                                
                                $tgl9 = date('d-m-Y', strtotime('+3 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl9));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl9.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl10 = date('d-m-Y', strtotime('+5 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl10));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl10.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="5">';
                                
                                
                                $tgl11 = date('d-m-Y', strtotime('+4 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl11));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl11.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl12 = date('d-m-Y', strtotime('+6 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl12));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl12.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="6">';
                                
                                
                                $tgl13 = date('d-m-Y', strtotime('+5 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl13));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl13.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl14 = date('d-m-Y', strtotime('+7 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl14));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl14.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="7">';
                                
                                
                                $tgl15 = date('d-m-Y', strtotime('+6 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl15));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl15.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                echo '<br>';

                                echo '<tr>';
                                echo '<td colspan="2" align="center">';
                                echo '<br>';
                                echo '<input type="submit" class="btn btn-default" value="Submit">';
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';

                                break;
/////////////////////////////////////////////////////////////////////
                                case 3:

                                echo'<table>';
                                echo'<tr>';

                                $tgl1 = $data['pst_tgl'];// pendefinisian tanggal awal
                                
                                $tgl2 = date('d-m-Y', strtotime('+2 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl2));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl2.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="1">';
                                
                                
                                $tgl3 = date('d-m-Y', strtotime('+1 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari


                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl3));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl3.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';




///////////////////////////////
                                echo '<tr>';
                                $tgl4 = date('d-m-Y', strtotime('+4 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl4));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl4.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="2">';
                                
                                
                                $tgl5 = date('d-m-Y', strtotime('+3 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl5));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl5.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';



///////////////////////////////
                                echo '<tr>';
                                $tgl6 = date('d-m-Y', strtotime('+6 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl6));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl6.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="3">';
                                
                                
                                $tgl7 = date('d-m-Y', strtotime('+5 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl7));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl7.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';


                                ///////////////////////////////
                                echo '<tr>';
                                $tgl8 = date('d-m-Y', strtotime('+8 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl8));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl8.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="4">';
                                
                                
                                $tgl9 = date('d-m-Y', strtotime('+7 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl9));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl9.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl10 = date('d-m-Y', strtotime('+10 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl10));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl10.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="5">';
                                
                                
                                $tgl11 = date('d-m-Y', strtotime('+9 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl11));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl11.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl12 = date('d-m-Y', strtotime('+12 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl12));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl12.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="6">';
                                
                                
                                $tgl13 = date('d-m-Y', strtotime('+11 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl13));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl13.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl14 = date('d-m-Y', strtotime('+14 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl14));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl14.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="7">';
                                
                                
                                $tgl15 = date('d-m-Y', strtotime('+13 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl15));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl15.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                echo '<br>';

                                echo '<tr>';
                                echo '<td colspan="2" align="center">';
                                echo '<br>';
                                echo '<input type="submit" class="btn btn-default" value="Submit">';
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';

                                break;
/////////////////////////////////////////////////////////////////////
                                  case 4:

                                echo'<table>';
                                echo'<tr>';

                                $tgl1 = $data['pst_tgl'];// pendefinisian tanggal awal
                                
                                $tgl2 = date('d-m-Y', strtotime('+3 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl2));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl2.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="1">';
                                
                                
                                $tgl3 = date('d-m-Y', strtotime('+2 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari


                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl3));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl3.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';




///////////////////////////////
                                echo '<tr>';
                                $tgl4 = date('d-m-Y', strtotime('+6 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl4));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl4.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="2">';
                                
                                
                                $tgl5 = date('d-m-Y', strtotime('+5 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl5));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl5.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';



///////////////////////////////
                                echo '<tr>';
                                $tgl6 = date('d-m-Y', strtotime('+9 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl6));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl6.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="3">';
                                
                                
                                $tgl7 = date('d-m-Y', strtotime('+8 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl7));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl7.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';


                                ///////////////////////////////
                                echo '<tr>';
                                $tgl8 = date('d-m-Y', strtotime('+12 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl8));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl8.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="4">';
                                
                                
                                $tgl9 = date('d-m-Y', strtotime('+11 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl9));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl9.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl10 = date('d-m-Y', strtotime('+15 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl10));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl10.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="5">';
                                
                                
                                $tgl11 = date('d-m-Y', strtotime('+14 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl11));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl11.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl12 = date('d-m-Y', strtotime('+18 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl12));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl12.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="6">';
                                
                                
                                $tgl13 = date('d-m-Y', strtotime('+17 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl13));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl13.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl14 = date('d-m-Y', strtotime('+21 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl14));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl14.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="7">';
                                
                                
                                $tgl15 = date('d-m-Y', strtotime('+20 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl15));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl15.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                echo '<br>';

                                echo '<tr>';
                                echo '<td colspan="2" align="center">';
                                echo '<br>';
                                echo '<input type="submit" class="btn btn-default" value="Submit">';
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';

                                break;
/////////////////////////////////////////////////////////////////////
                                case 5:

                                echo'<table>';
                                echo'<tr>';

                                $tgl1 = $data['pst_tgl'];// pendefinisian tanggal awal
                                
                                $tgl2 = date('d-m-Y', strtotime('+4 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl2));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl2.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="1">';
                                
                                
                                $tgl3 = date('d-m-Y', strtotime('+3 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari


                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl3));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl3.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';




///////////////////////////////
                                echo '<tr>';
                                $tgl4 = date('d-m-Y', strtotime('+8 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl4));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl4.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="2">';
                                
                                
                                $tgl5 = date('d-m-Y', strtotime('+7 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl5));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl5.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';



///////////////////////////////
                                echo '<tr>';
                                $tgl6 = date('d-m-Y', strtotime('+12 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl6));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl6.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="3">';
                                
                                
                                $tgl7 = date('d-m-Y', strtotime('+11 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl7));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl7.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';


                                ///////////////////////////////
                                echo '<tr>';
                                $tgl8 = date('d-m-Y', strtotime('+16 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl8));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl8.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="4">';
                                
                                
                                $tgl9 = date('d-m-Y', strtotime('+15 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl9));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl9.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl10 = date('d-m-Y', strtotime('+20 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl10));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl10.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="5">';
                                
                                
                                $tgl11 = date('d-m-Y', strtotime('+19 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl11));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl11.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl12 = date('d-m-Y', strtotime('+24 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl12));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl12.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="6">';
                                
                                
                                $tgl13 = date('d-m-Y', strtotime('+23 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl13));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl13.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl14 = date('d-m-Y', strtotime('+28 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl14));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl14.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="7">';
                                
                                
                                $tgl15 = date('d-m-Y', strtotime('+27 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl15));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl15.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                echo '<br>';

                                echo '<tr>';
                                echo '<td colspan="2" align="center">';
                                echo '<br>';
                                echo '<input type="submit" class="btn btn-default" value="Submit">';
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';

                                break;
/////////////////////////////////////////////////////////////////////
                                  case 6:

                                echo'<table>';
                                echo'<tr>';

                                $tgl1 = $data['pst_tgl'];// pendefinisian tanggal awal
                                
                                $tgl2 = date('d-m-Y', strtotime('+5 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl2));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl2.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="1">';
                                
                                
                                $tgl3 = date('d-m-Y', strtotime('+4 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari


                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl3));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl3.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';




///////////////////////////////
                                echo '<tr>';
                                $tgl4 = date('d-m-Y', strtotime('+10 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl4));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl4.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="2">';
                                
                                
                                $tgl5 = date('d-m-Y', strtotime('+9 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl5));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl5.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';



///////////////////////////////
                                echo '<tr>';
                                $tgl6 = date('d-m-Y', strtotime('+15 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl6));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl6.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="3">';
                                
                                
                                $tgl7 = date('d-m-Y', strtotime('+14 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl7));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl7.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';


                                ///////////////////////////////
                                echo '<tr>';
                                $tgl8 = date('d-m-Y', strtotime('+20 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl8));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl8.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="4">';
                                
                                
                                $tgl9 = date('d-m-Y', strtotime('+19 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl9));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl9.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl10 = date('d-m-Y', strtotime('+25 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl10));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl10.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="5">';
                                
                                
                                $tgl11 = date('d-m-Y', strtotime('+24 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl11));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl11.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl12 = date('d-m-Y', strtotime('+30 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl12));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl12.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="6">';
                                
                                
                                $tgl13 = date('d-m-Y', strtotime('+29 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl13));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl13.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl14 = date('d-m-Y', strtotime('+35 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl14));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl14.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="7">';
                                
                                
                                $tgl15 = date('d-m-Y', strtotime('+34 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl15));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl15.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                echo '<br>';

                                echo '<tr>';
                                echo '<td colspan="2" align="center">';
                                echo '<br>';
                                echo '<input type="submit" class="btn btn-default" value="Submit">';
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';

                                break;
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
                                  case 7:

                                echo'<table>';
                                echo'<tr>';

                                $tgl1 = $data['pst_tgl'];// pendefinisian tanggal awal
                                
                                $tgl2 = date('d-m-Y', strtotime('+6 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl2));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl2.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="1">';
                                
                                
                                $tgl3 = date('d-m-Y', strtotime('+5 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari


                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl3));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 1';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl3.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';




///////////////////////////////
                                echo '<tr>';
                                $tgl4 = date('d-m-Y', strtotime('+12 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl4));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl4.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="2">';
                                
                                
                                $tgl5 = date('d-m-Y', strtotime('+11 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl5));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 2';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl5.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';



///////////////////////////////
                                echo '<tr>';
                                $tgl6 = date('d-m-Y', strtotime('+18 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl6));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl6.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="3">';
                                
                                
                                $tgl7 = date('d-m-Y', strtotime('+17 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl7));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 3';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl7.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';


                                ///////////////////////////////
                                echo '<tr>';
                                $tgl8 = date('d-m-Y', strtotime('+24 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl8));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl8.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="4">';
                                
                                
                                $tgl9 = date('d-m-Y', strtotime('+23 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl9));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 4';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl9.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl10 = date('d-m-Y', strtotime('+30 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl10));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl10.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="5">';
                                
                                
                                $tgl11 = date('d-m-Y', strtotime('+29 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl11));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 5';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl11.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl12 = date('d-m-Y', strtotime('+36 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl12));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl12.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="6">';
                                
                                
                                $tgl13 = date('d-m-Y', strtotime('+25 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl13));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 6';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl13.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                                                                                                                ///////////////////////////////
                                echo '<tr>';
                                $tgl14 = date('d-m-Y', strtotime('+42 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                // echo '<form action="config/simpan_tgl10.php" method="POST">';
                                echo '<input type="hidden" name="id[]">';
                                echo '<input type="hidden" name="tgl[]" value="'.$data['tgl'].'">';
                                echo '<input type="hidden" name="pst_tgl[]" value="'.$data['pst_tgl'].'">';
                                echo '<input type="hidden" name="so[]" value="'.$data['so'].'">';
                                echo '<input type="hidden" name="rencana_tb[]" value="'.$data['rencana_tb'].'">';

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl14));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Pengambilan 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_ambil_tb[]" value="'.$tgl14.$dayList[$day].'">';
                                echo '</div>';
                                echo '<input type="hidden" name="rata_ori[]" value="'.$data['rata_ori'].'">';
                                echo '<input type="hidden" name="rata_cho[]" value="'.$data['rata_cho'].'">';
                                echo '<input type="hidden" name="rata_che[]" value="'.$data['rata_che'].'">';
                                echo '<input type="hidden" name="rata[]" value="'.$data['rata'].'">';
                                echo '<input type="hidden" name="rata_kk[]" value="'.$data['rata_kk'].'">';
                                echo '<input type="hidden" name="rata_kv[]" value="'.$data['rata_kv'].'">';
                                echo '<input type="hidden" name="rata_tc[]" value="'.$data['rata_tc'].'">';
                                echo '<input type="hidden" name="rata_pb[]" value="'.$data['rata_pb'].'">';
                                echo '<input type="hidden" name="pengambilan[]" value="7">';
                                
                                
                                $tgl15 = date('d-m-Y', strtotime('+41 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

                                date_default_timezone_set('Asia/Jakarta');
                                $day = date('l', strtotime($tgl15));
                                $dayList = array(
                                'Sunday' => ' (Minggu)',
                                'Monday' => ' (Senin)',
                                'Tuesday' => ' (Selasa)',
                                'Wednesday' => ' (Rabu)',
                                'Thursday' => ' (Kamis)',
                                'Friday' => ' (Jumat)',
                                'Saturday' => ' (Sabtu)'
                                 );
                                echo '<div class="col-xs-3">';
                                echo '<label style="text-align: center; font-family: Blagovest"> Jadwal Produksi 7';
                                echo '</label>';
                                echo '<input class="form-control" type="text" name="tgl_produksi[]" value="'.$tgl15.$dayList[$day].'">';
                                echo '</div>';
                                echo '</tr>';

                                echo '<br>';

                                echo '<tr>';
                                echo '<td colspan="2" align="center">';
                                echo '<br>';
                                echo '<input type="submit" class="btn btn-default" value="Submit">';
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';

                                break;
/////////////////////////////////////////////////////////////////////
                                default:
                                echo "Data yang diinput tidak benar. Silahkan input kembali!";
                                break;
                                
                            }
                                

                               
                            
                            ?>

                  