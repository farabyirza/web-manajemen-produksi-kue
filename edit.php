 <?php

include 'config/koneksi.php';

$id  = $_GET['id'];

$edit    = "SELECT * FROM tbl_daily WHERE id = '$id'";
$hasil   = mysqli_query($connect, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);


?>
              
<script src="jquery.min.js" type="text/javascript"></script>
<script>
function rencana_penj(){
    var satu =  document.getElementById('soa_tb').value;
    var dua =  document.getElementById('pst_tb').value;
   
    var empat = document.getElementById('pen_tb').value;
  

    var result = (parseInt(satu) + parseInt(dua)) / parseInt(empat);
    if (!isNaN(result)) {
        bulat = result.toFixed(0);
        document.getElementById('rencana').value=bulat;
        }
}

function tb_akhir(){
    var satu =  document.getElementById('soa_tb').value;
    var dua =  document.getElementById('pst_tb').value;
    var tiga =  document.getElementById('pen_tb').value;
    
    var result = parseInt(satu) + parseInt(dua) - parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('akhir_tb').value = result;
    }
}

function ori_akhir(){
    var satu =  document.getElementById('soa_ori').value;
    var dua =  document.getElementById('pst_ori').value;
    var tiga =  document.getElementById('pen_ori').value;
    
    var result = parseInt(satu) + parseInt(dua) - parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('akhir_ori').value = result;
    }
}
function cho_akhir(){
    var satu =  document.getElementById('soa_cho').value;
    var dua =  document.getElementById('pst_cho').value;
    var tiga =  document.getElementById('pen_cho').value;
    
    var result = parseInt(satu) + parseInt(dua) - parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('akhir_cho').value = result;
    }
}
function che_akhir(){
    var satu =  document.getElementById('soa_che').value;
    var dua =  document.getElementById('pst_che').value;
    var tiga =  document.getElementById('pen_che').value;
    
    var result = parseInt(satu) + parseInt(dua) - parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('akhir_che').value = result;
    }
}
function kk_akhir(){
    var satu =  document.getElementById('soa_kk').value;
    var dua =  document.getElementById('pst_kk').value;
    var tiga =  document.getElementById('pen_kk').value;
    
    var result = parseInt(satu) + parseInt(dua) - parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('akhir_kk').value = result;
    }
}
function kv_akhir(){
    var satu =  document.getElementById('soa_kv').value;
    var dua =  document.getElementById('pst_kv').value;
    var tiga =  document.getElementById('pen_kv').value;
    
    var result = parseInt(satu) + parseInt(dua) - parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('akhir_kv').value = result;
    }
}
function tc_akhir(){
    var satu =  document.getElementById('soa_tc').value;
    var dua =  document.getElementById('pst_tc').value;
    var tiga =  document.getElementById('pen_tc').value;
    
    var result = parseInt(satu) + parseInt(dua) - parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('akhir_tc').value = result;
    }
}
function hitpb1(){
    var satu =  document.getElementById('soa_tb').value;
    
    var result = parseInt(satu) / 2;
    if (!isNaN(result)) {
    bulat = result.toFixed(0);
    document.getElementById('soa_pb').value=bulat;
    }
}

function hitpb2(){
    var satu =  document.getElementById('pen_tb').value;
    
    var result = parseInt(satu) / 2;
    if (!isNaN(result)) {
    bulat = result.toFixed(0);
    document.getElementById('pen_pb').value=bulat;
    }
}
function hitpb3(){
    var satu =  document.getElementById('pst_tb').value;
    
    var result = parseInt(satu) / 2;
    if (!isNaN(result)) {
    bulat = result.toFixed(0);
    document.getElementById('pst_pb').value=bulat;
    }
}
function hitpb4(){
    var satu =  document.getElementById('akhir_tb').value;
    
    var result = parseInt(satu) / 2;
    if (!isNaN(result)) {
    bulat = result.toFixed(0);
    document.getElementById('akhir_pb').value=bulat;
    }
}

function hitpb5(){
    var satu =  document.getElementById('rata').value;
    
    var result = parseInt(satu) / 2;
    if (!isNaN(result)) {
    bulat = result.toFixed(0);
    document.getElementById('rata_pb').value=bulat;
    }
}
function hit3(){
    var satu =  document.getElementById('soa_ori').value;
    var dua =  document.getElementById('soa_cho').value;
    var tiga =  document.getElementById('soa_che').value;
    
    var result = parseInt(satu) + parseInt(dua) + parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('soa_tb').value = result;
    }

}
function hit1(){
    var satu =  document.getElementById('soa_kk').value;
    var dua =  document.getElementById('soa_kv').value;
    
    var result = parseInt(satu) + parseInt(dua);
    if (!isNaN(result)) {
        document.getElementById('soa_tc').value = result;
    }

}

function hit7(){
    var satu =  document.getElementById('pen_ori').value;
    var dua =  document.getElementById('pen_cho').value;
    var tiga =  document.getElementById('pen_che').value;
    
    var result = parseInt(satu) + parseInt(dua) + parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('pen_tb').value = result;
    }

}
function hit2(){
    var satu =  document.getElementById('pen_kk').value;
    var dua =  document.getElementById('pen_kv').value;
    
    var result = parseInt(satu) + parseInt(dua);
    if (!isNaN(result)) {
        document.getElementById('pen_tc').value = result;
    }

}
function pst_bun(){
    var satu =  document.getElementById('pst_ori').value;
    var dua =  document.getElementById('pst_cho').value;
    var tiga =  document.getElementById('pst_che').value;
    
    var result = parseInt(satu) + parseInt(dua) + parseInt(tiga);
    if (!isNaN(result)) {
     bulat = result.toFixed(0);
        document.getElementById('pst_tb').value=bulat;
    }
}

function pst_cream(){
    var satu =  document.getElementById('pst_kk').value;
    var dua =  document.getElementById('pst_kv').value;

    
    var result = parseInt(satu) + parseInt(dua);
    if (!isNaN(result)) {
   
        bulat = result.toFixed(0);
        document.getElementById('pst_tc').value=bulat;
    }

}

function hit4(){
    var satu =  document.getElementById('akhir_ori').value;
    var dua =  document.getElementById('akhir_cho').value;
    var tiga =  document.getElementById('akhir_che').value;
    
    var result = parseInt(satu) + parseInt(dua) + parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('akhir_tb').value = result;
    }

}
function hit5(){
    var satu =  document.getElementById('akhir_kk').value;
    var dua =  document.getElementById('akhir_kv').value;

    
    var result = parseInt(satu) + parseInt(dua);
    if (!isNaN(result)) {
        // document.getElementById('pst_tc').value = result;
        bulat = result.toFixed(0);
        document.getElementById('akhir_tc').value=bulat;
    }

}

function hit_rataori(){
    var satu =  document.getElementById('pen_ori').value;
    var dua =  document.getElementById('rencana').value;

    
    var result = (parseInt(satu) / parseInt(dua)) * parseInt(dua);
    if (!isNaN(result)) {
  
        bulat = result.toFixed(0);
        document.getElementById('rata_ori').value=bulat;
    }
}

function hit_ratacho(){
    var satu =  document.getElementById('pen_cho').value;
    var dua =  document.getElementById('rencana').value;

    
    var result = (parseInt(satu) / parseInt(dua)) * parseInt(dua);
    if (!isNaN(result)) {
        
        bulat = result.toFixed(0);
        document.getElementById('rata_cho').value=bulat;
    }
}

function ratache(){
    var satu =  document.getElementById('pen_che').value;
    var dua =  document.getElementById('rencana').value;

    
    var result = (parseInt(satu) / parseInt(dua)) * parseInt(dua);
    if (!isNaN(result)) {
        
        bulat = result.toFixed(0);
        document.getElementById('rata_che').value=bulat;
    }
}
function hit_ratatb(){
    var satu =  document.getElementById('pen_tb').value;
    var dua =  document.getElementById('rencana').value;

    
    var result = (parseInt(satu) / parseInt(dua)) * parseInt(dua);
    if (!isNaN(result)) {
       
        bulat = result.toFixed(0);
        document.getElementById('rata').value=bulat;
    }
}
function hit_ratakk(){
    var satu =  document.getElementById('pen_kk').value;
    var dua =  document.getElementById('rencana').value;

    
    var result = (parseInt(satu) / parseInt(dua)) * parseInt(dua);
    if (!isNaN(result)) {
 
        bulat = result.toFixed(0);
        document.getElementById('rata_kk').value=bulat;
    }
}
function hit_ratakv(){
    var satu =  document.getElementById('pen_kv').value;
    var dua =  document.getElementById('rencana').value;

    
    var result = (parseInt(satu) / parseInt(dua)) * parseInt(dua);
    if (!isNaN(result)) {
   
        bulat = result.toFixed(0);
        document.getElementById('rata_kv').value=bulat;
    }
}
function hit_ratatc(){
    var satu =  document.getElementById('pen_tc').value;
    var dua =  document.getElementById('rencana').value;

    
    var result = (parseInt(satu) / parseInt(dua)) * parseInt(dua);
    if (!isNaN(result)) {
        
        bulat = result.toFixed(0);
        document.getElementById('rata_tc').value=bulat;
    }
}
</script> 

<div class="col-md-12">
                      <h2 style="text-align: center; font-family: Blagovest">EDIT LAPORAN HARIAN</h2>   
                         <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman yang meng-<i>edit data <b>Laporan Harian</b></i> pesanan harian yang sudah di-<i>input</i> pada halaman <i>input <b>Laporan Harian.</i></b></h4> 

                 
                        <form  method="POST" action="config/edit.php">
                 <table>
                        <tr>
                        
                        <td>  <div class="col-xs-2"><input class="form-control" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Tanggal Laporan </td>
                        <td>  <div class="col-xs-4"><input class="form-control" type="date" name="tgl" value="<?php echo $data['tgl']; ?>">
                        </div></td>
                        </tr>
                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Outlet </td>
                        <td>  <div class="col-xs-4"><input class="form-control" type="text" name="so" placeholder="SO .." value="<?php echo $data['so']; ?>">
                        </div></td>
                        </tr>
                        
                        <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Stok Awal</td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="soa_ori" id="soa_ori" onkeyup="ori_akhir()" onkeyup="hit3()" value="<?php echo $data['soa_ori']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Stroberi</label>
                            <input class="form-control" type="text" name="soa_cho"  id="soa_cho" onkeyup="cho_akhir()" onkeyup="hit3()" value="<?php echo $data['soa_cho']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Coklat</label>
                            <input class="form-control" type="text" name="soa_che"  id="soa_che" onkeyup="che_akhir()" onkeydown="hit3()" value="<?php echo $data['soa_che']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="soa_tb"  id="soa_tb"  onkeyup="rencana_penj()" onkeyup="tb_akhir()" onkeydown="hitpb1()" onfocus="hit3()" value="<?php echo $data['soa_tb']; ?>" placeholder="klik=hasil">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="soa_kk"  id="soa_kk" onkeyup="kk_akhir()" onkeyup="hit1()" value="<?php echo $data['soa_kk']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="soa_kv"  id="soa_kv" onkeyup="kv_akhir()" onkeydown="hit1()" value="<?php echo $data['soa_kv']; ?>">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="soa_tc"  id="soa_tc" onkeyup="tc_akhir()" onfocus="hit1()" value="<?php echo $data['soa_tc']; ?>" placeholder="klik=hasil">
                            </div>


                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            
                            <div class="col-xs-2">
                            <label >Box</label>
                            <input class="form-control" type="text" name="soa_pb"  id="soa_pb" onfocus="hitpb1()" value="<?php echo $data['soa_pb']; ?>" placeholder="klik=hasil">
                            </div>
                            
                            </td>
                            </tr>
                          

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Penjualan Hari ini</td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="pen_ori"  id="pen_ori"  onkeyup="ori_akhir()" onkeyup="hit7()" onkeydown="hit_rataori()" value="<?php echo $data['pen_ori']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Stoberi</label>
                            <input class="form-control" type="text" name="pen_cho"  id="pen_cho" onkeyup="cho_akhir()" onkeyup="hit7()" onkeydown="hit_ratacho()" value="<?php echo $data['pen_cho']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Coklat</label>
                            <input class="form-control" type="text" name="pen_che"  id="pen_che" onkeyup="che_akhir()" onkeydown="hit7()" onkeydown="ratache()" value="<?php echo $data['pen_che']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="pen_tb"  id="pen_tb" onkeyup="rencana_penj()" onkeyup="tb_akhir()"  onkeydown="hitpb2()" onfocus="hit7()" onkeydown="hit_ratatb()" value="<?php echo $data['pen_tb']; ?>" placeholder="klik=hasil">
                            </div>
                            
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td>
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="pen_kk"  id="pen_kk" onkeyup="kk_akhir()" onkeyup="hit2()" onkeydown="hit_ratakk()" value="<?php echo $data['pen_kk']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="pen_kv"  id="pen_kv" onkeyup="kv_akhir()" onkeydown="hit2()" onkeydown="hit_ratakv()" value="<?php echo $data['pen_kv']; ?>">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="pen_tc"  id="pen_tc" onkeyup="tc_akhir()" onfocus="hit2()" onkeydown="hit_ratatc()" value="<?php echo $data['pen_tc']; ?>" placeholder="klik=hasil">
                            </div>
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td>
                            <div class="col-xs-2">
                            <label >Box</label>
                            <input class="form-control" type="text" name="pen_pb"  id="pen_pb" onfocus="hitpb2()" value="<?php echo $data['pen_pb']; ?>" placeholder="klik=hasil">
                            </div>
                            
                            </td>
                            </tr>
                            

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Pengiriman Terakhir</td>
                            <td> 
                            <div class="col-xs-4">
                            <label> Tanggal</label>
                            <input class="form-control" type="date" name="pst_tgl"  value="<?php echo $data['pst_tgl']; ?>">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="pst_ori" id="pst_ori" onkeyup="ori_akhir()" onkeyup="pst_bun()" value="<?php echo $data['pst_ori']; ?>">
                            </div>
                            
                            <div class="col-xs-2">
                            <label> Stroberi </label>
                            <input class="form-control" type="text" name="pst_cho" id="pst_cho" onkeyup="cho_akhir()" onkeyup="pst_bun()" value="<?php echo $data['pst_cho']; ?>">
                            </div>
                            
                            <div class="col-xs-2">
                            <label> Coklat </label>
                            <input class="form-control" type="text" name="pst_che" id="pst_che" onkeyup="che_akhir()" onkeydown="pst_bun()" value="<?php echo $data['pst_che']; ?>">
                            </div>
                             
                           
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="pst_tb" id="pst_tb" onkeyup="rencana_penj()" onkeyup="tb_akhir()" onfocus="pst_bun()" onkeydown="hitpb3()" value="<?php echo $data['pst_tb']; ?>" placeholder="klik=hasil">
                            </div>
                            
                            
                                   </td>
                         </tr>

                         </td>
                            </tr>
                            
                            </td>

                         </tr>

                         </td>
                            </tr>
                             <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                           
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="pst_kk"   id="pst_kk" onkeyup="kk_akhir()" onkeyup="pst_cream()" value="<?php echo $data['pst_kk']; ?>">
                            </div> 
                             
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="pst_kv"   id="pst_kv" onkeydown="kv_akhir()" onkeyup="pst_cream()" value="<?php echo $data['pst_kv']; ?>">
                            </div> 
                             
                            
                            
                            

                             
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="pst_tc"  id="pst_tc" onkeyup="tc_akhir()" onfocus="pst_cream()" value="<?php echo $data['pst_tc']; ?>" placeholder="klik=hasil">
                            </div>
                            
                            </td>

                         </tr>

                         </td>
                            </tr>
                             <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Box</label>
                            <input class="form-control" type="text" name="pst_pb"   id="pst_pb" onfocus="hitpb3()" value="<?php echo $data['pst_pb']; ?>" placeholder="klik=hasil">
                            </div>
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Untuk Berapa hari</label>
                            <input class="form-control" type="text"  name="rencana_tb" id="rencana" onfocus="rencana_penj()" onkeyup="hit_rataori()" onkeyup="hit_ratacho()" onkeyup="ratache()" onkeyup="hit_ratatb()" onkeyup="hit_ratakk()" onkeyup="hit_ratakv()" onkeyup="hit_ratatc()" value="<?php echo $data['rencana_tb']; ?>" placeholder="klik=hasil">
                            </div>
                             
                        </td>

                         </tr>

                         </td>
                            </tr>
                         
                    

                    </div>


                </div>
</tr>                            
 

                    <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Stok Akhir</td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="akhir_ori" id="akhir_ori" onkeyup="ori_akhir()" onkeyup="hit4()" value="<?php echo $data['akhir_ori']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Stroberi</label>
                            <input class="form-control" type="text" name="akhir_cho"  id="akhir_cho" onkeyup="cho_akhir()" onkeyup="hit4()" value="<?php echo $data['akhir_cho']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Coklat</label>
                            <input class="form-control" type="text" name="akhir_che"  id="akhir_che" onkeyup="che_akhir()" onkeydown="hit4()" value="<?php echo $data['akhir_che']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="akhir_tb"  id="akhir_tb" onkeyup="tb_akhir()" onfocus="hit4()" onkeydown="hitpb4()" value="<?php echo $data['akhir_tb']; ?>" placeholder="klik=hasil">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="akhir_kk"  id="akhir_kk" onkeyup="kk_akhir()" onkeyup="hit5()" value="<?php echo $data['akhir_kk']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="akhir_kv"  id="akhir_kv" onkeyup="kv_akhir()" onkeydown="hit5()" value="<?php echo $data['akhir_kv']; ?>">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="akhir_tc"  id="akhir_tc" onkeyup="tc_akhir()" onfocus="hit5()" value="<?php echo $data['akhir_tc']; ?>" placeholder="klik=hasil">
                            </div>


                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            
                            <div class="col-xs-2">
                            <label >Box</label>
                            <input class="form-control" type="text" name="akhir_pb"  id="akhir_pb" onfocus="hitpb4()" value="<?php echo $data['akhir_pb']; ?>" placeholder="klik=hasil">
                            </div>
                            
                            </td>
                            </tr>


                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Pengiriman Selanjutnya</td>
                            <td> 
                            <div class="col-xs-2">
                            <label>Original</label>
                            <input class="form-control" type="text" name="rata_ori" id="rata_ori" onfocus="hit_rataori()" value="<?php echo $data['rata_ori']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label>Stroberi</label>
                            <input class="form-control" type="text" name="rata_cho" id="rata_cho" onfocus="hit_ratacho()" value="<?php echo $data['rata_cho']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label>Coklat</label>
                            <input class="form-control" type="text" name="rata_che" id="rata_che" onfocus="ratache()" value="<?php echo $data['rata_che']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label>Total Kue</label>
                            <input class="form-control" type="text" name="rata" id="rata" onfocus="hit_ratatb()" onkeydown="hitpb5()" value="<?php echo $data['rata']; ?>" placeholder="klik=hasil">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="rata_kk"   id="rata_kk" onfocus="hit_ratakk()" value="<?php echo $data['rata_kk']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="rata_kv"   id="rata_kv" onfocus="hit_ratakv()" value="<?php echo $data['rata_kv']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="rata_tc"  id="rata_tc" onfocus="hit_ratatc()" value="<?php echo $data['rata_tc']; ?>" placeholder="klik=hasil">
                            </div>
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            
                            <div class="col-xs-2">
                            <label>Box</label>
                            <input class="form-control" type="text" name="rata_pb"  id="rata_pb" onfocus="hitpb5()" value="<?php echo $data['rata_pb']; ?>" placeholder="klik=hasil">
                            </div>
                            <div class="col-xs-2">
                            </div>
                            
                            </td>
                            </tr>

                            <tr>
                            <tr>

                           
                            <td colspan= "2" align="center">
                            <input type="submit" class="btn btn-default" value="Edit">
                                </div> </div></div></div> 
 </form>
                                   </td>
                        </tr>
                        </tr> 
                        
                        </table>


