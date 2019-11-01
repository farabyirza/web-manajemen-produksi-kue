<h5 style="text-align: right; font-family: Blackletter"><b><u>1</u></b></h5>              
<script src="jquery.min.js" type="text/javascript"></script>
<script>
function rencana_penj() {
        var tb = (parseInt(document.getElementById('soa_tb').value) + parseInt(document.getElementById('pst_tb').value)) / parseInt(document.getElementById('pen_tb').value);
        bulat = tb.toFixed(0);
        document.getElementById('rencana').value = bulat;
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

function ori_akhir() {
        var tb = parseInt(document.getElementById('soa_ori').value) + parseInt(document.getElementById('pst_ori').value) - parseInt(document.getElementById('pen_ori').value);

        document.getElementById('akhir_ori').value = tb;
        }
function cho_akhir() {
        var tb = parseInt(document.getElementById('soa_cho').value) + parseInt(document.getElementById('pst_cho').value) - parseInt(document.getElementById('pen_cho').value);

        document.getElementById('akhir_cho').value = tb;
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

function hitpb1() {
       var pap =  parseInt(document.getElementById('soa_tb').value) / 2;
       bulat = pap.toFixed(0);
        document.getElementById('soa_pb').value = bulat;
        }

function hitpb2() {
       var pap =  parseInt(document.getElementById('pen_tb').value) / 2;
       bulat = pap.toFixed(0);
        document.getElementById('pen_pb').value = bulat;
        }
function hitpb3() {
       var pap =  parseInt(document.getElementById('pst_tb').value) / 2;
              bulat = pap.toFixed(0);
        document.getElementById('pst_pb').value = bulat;
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
function hit3() {
        var tb = parseInt(document.getElementById('soa_ori').value) + parseInt(document.getElementById('soa_cho').value) + parseInt(document.getElementById('soa_che').value);

        document.getElementById('soa_tb').value = tb;
        }
function hit1() {
        var tc = parseInt(document.getElementById('soa_kk').value) + parseInt(document.getElementById('soa_kv').value);

        document.getElementById('soa_tc').value = tc;
        }


function hit7() {
        var tb = parseInt(document.getElementById('pen_ori').value) + parseInt(document.getElementById('pen_cho').value) + parseInt(document.getElementById('pen_che').value);

        document.getElementById('pen_tb').value = tb;
        }
function hit2() {
        var tc = parseInt(document.getElementById('pen_kk').value) + parseInt(document.getElementById('pen_kv').value);

        document.getElementById('pen_tc').value = tc;
        }
function pst_bun() {
        var tb = parseInt(document.getElementById('pst_ori').value) + parseInt(document.getElementById('pst_cho').value) + parseInt(document.getElementById('pst_che').value);

        document.getElementById('pst_tb').value = tb;
        }

function pst_cream() {
        var tb = parseInt(document.getElementById('pst_kk').value) + parseInt(document.getElementById('pst_kv').value);

        document.getElementById('pst_tc').value = tb;
        }

function hit4() {
        var tb = parseInt(document.getElementById('akhir_ori').value) + parseInt(document.getElementById('akhir_cho').value) + parseInt(document.getElementById('akhir_che').value);

        document.getElementById('akhir_tb').value = tb;
        }
function hit5() {
        var tb = parseInt(document.getElementById('akhir_kk').value) + parseInt(document.getElementById('akhir_kv').value);

        document.getElementById('akhir_tc').value = tb;
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
        // document.getElementById('pst_tc').value = result;
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
                     <h2 style="text-align: center; font-family: Blagovest">LAPORAN HARIAN</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menginput <b><i>Laporan harian</i></b> untuk pengambilan harian.</h4>
                        <h5 style="text-align: left; font-family: Blackletter"><b></b></h5>
                        
                        <form  method="POST" action="config/simpan_daily1.php">
                 <table>
                        <tr>

                        <td>  <div class="col-xs-2"><input class="form-control" type="hidden" name="id" >
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Outlet </td>
                        <td>  <div class="col-xs-4"><input class="form-control" type="text" name="so" placeholder="Ke- ..">
                        </div></td>
                        </tr>
                        
                        <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Stok Awal</td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="soa_ori" id="soa_ori" onchange="ori_akhir()" onchange="hit3()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Stroberi</label>
                            <input class="form-control" type="text" name="soa_cho"  id="soa_cho" onchange="cho_akhir()" onchange="hit3()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Coklat</label>
                            <input class="form-control" type="text" name="soa_che"  id="soa_che" onkeyup="che_akhir()" onchange="hit3()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="soa_tb"  id="soa_tb"  onchange="rencana_penj()" onkeyup="tb_akhir()" onchange="hitpb1()" onfocus="hit3()" placeholder="klik=hasil">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="soa_kk"  id="soa_kk" onkeyup="kk_akhir()" onkeyup="hit1()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="soa_kv"  id="soa_kv" onchange="kv_akhir()" onchange="hit1()" value="0">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="soa_tc"  id="soa_tc" onkeyup="tc_akhir()" onfocus="hit1()" placeholder="klik=hasil">
                            </div>


                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            
                            <div class="col-xs-2">
                            <label >Box</label>
                            <input class="form-control" type="text" name="soa_pb"  id="soa_pb" onfocus="hitpb1()" placeholder="klik=hasil">
                            </div>
                            
                            </td>
                            </tr>
                          

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Penjualan Hari ini</td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="pen_ori"  id="pen_ori"  onchange="ori_akhir()" onchange="hit7()" onkeydown="hit_rataori()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Stroberi</label>
                            <input class="form-control" type="text" name="pen_cho"  id="pen_cho" onchange="cho_akhir()" onchange="hit7()" onkeydown="hit_ratacho()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Coklat</label>
                            <input class="form-control" type="text" name="pen_che"  id="pen_che" onkeyup="che_akhir()" onchange="hit7()" onkeydown="ratache()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="pen_tb"  id="pen_tb" onchange="rencana_penj()" onkeyup="tb_akhir()"  onchange="hitpb2()" onfocus="hit7()" onkeydown="hit_ratatb()" placeholder="klik=hasil">
                            </div>
                            
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td>
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="pen_kk"  id="pen_kk" onkeyup="kk_akhir()" onkeyup="hit2()" onkeydown="hit_ratakk()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="pen_kv"  id="pen_kv" onchange="kv_akhir()" onchange="hit2()" onkeydown="hit_ratakv()" value="0">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="pen_tc"  id="pen_tc" onkeyup="tc_akhir()" onfocus="hit2()" onkeydown="hit_ratatc()" placeholder="klik=hasil">
                            </div>
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td>
                            <div class="col-xs-2">
                            <label >Box</label>
                            <input class="form-control" type="text" name="pen_pb"  id="pen_pb" onfocus="hitpb2()" placeholder="klik=hasil">
                            </div>
                            
                            </td>
                            </tr>
                            

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Pengiriman Terakhir</td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Tanggal</label>
                            <input class="form-control" type="date" name="pst_tgl" >
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="pst_ori" id="pst_ori" onchange="ori_akhir()" onchange="pst_bun()" value="0">
                            </div>
                            
                            <div class="col-xs-2">
                            <label> Stroberi </label>
                            <input class="form-control" type="text" name="pst_cho" id="pst_cho" onchange="cho_akhir()" onchange="pst_bun()" value="0">
                            </div>
                            
                            <div class="col-xs-2">
                            <label> Coklat </label>
                            <input class="form-control" type="text" name="pst_che" id="pst_che" onkeyup="che_akhir()" onchange="pst_bun()" value="0">
                            </div>
                             
                           
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="pst_tb" id="pst_tb" onchange="rencana_penj()" onkeyup="tb_akhir()" onfocus="pst_bun()" onchange="hitpb3()" placeholder="klik=hasil">
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
                            <input class="form-control" type="text" name="pst_kk"   id="pst_kk" onkeyup="kk_akhir()" onkeyup="pst_cream()" value="0">
                            </div> 
                             
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="pst_kv"   id="pst_kv" onchange="kv_akhir()" onchange="pst_cream()" value="0">
                            </div> 
                             
                            
                            
                            

                             
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="pst_tc"  id="pst_tc" onkeyup="tc_akhir()" onfocus="pst_cream()" placeholder="klik=hasil">
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
                            <input class="form-control" type="text" name="pst_pb"   id="pst_pb" onfocus="hitpb3()" placeholder="klik=hasil">
                            </div>
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Untuk Berapa hari</label>
                            <input class="form-control" type="text"  name="rencana_tb" id="rencana" onfocus="rencana_penj()" onchange="hit_rataori()" onchange="hit_ratacho()" onchange="ratache()" onchange="hit_ratatb()" onkeyup="hit_ratakk()" onkeyup="hit_ratakv()" onkeyup="hit_ratatc()" placeholder="klik=hasil">
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
                            <input class="form-control" type="text" name="akhir_ori" id="akhir_ori" onchange="ori_akhir()" onchange="hit4()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label > Stoberi </label>
                            <input class="form-control" type="text" name="akhir_cho"  id="akhir_cho" onchange="cho_akhir()" onchange="hit4()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label > Coklat </label>
                            <input class="form-control" type="text" name="akhir_che"  id="akhir_che" onkeyup="che_akhir()" onchange="hit4()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="akhir_tb"  id="akhir_tb" onkeyup="tb_akhir()" onfocus="hit4()" onkeydown="hitpb4()" placeholder="klik=hasil">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="akhir_kk"  id="akhir_kk" onkeyup="kk_akhir()" onchange="hit5()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="akhir_kv"  id="akhir_kv" onchange="kv_akhir()" onchange="hit5()" value="0">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="akhir_tc"  id="akhir_tc" onkeyup="tc_akhir()" onfocus="hit5()" placeholder="klik=hasil">
                            </div>


                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            
                            <div class="col-xs-2">
                            <label >Box</label>
                            <input class="form-control" type="text" name="akhir_pb"  id="akhir_pb" onfocus="hitpb4()" placeholder="klik=hasil">
                            </div>
                            
                            </td>
                            </tr>


                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Pengiriman Selanjutnya</td>
                            <td> 
                            <div class="col-xs-2">
                            <label>Original</label>
                            <input class="form-control" type="text" name="rata_ori" id="rata_ori" onfocus="hit_rataori()" placeholder="klik=hasil">
                            </div>
                            <div class="col-xs-2">
                            <label>Stroberi</label>
                            <input class="form-control" type="text" name="rata_cho" id="rata_cho" onfocus="hit_ratacho()" placeholder="klik=hasil">
                            </div>
                            <div class="col-xs-2">
                            <label>Coklat</label>
                            <input class="form-control" type="text" name="rata_che" id="rata_che" onfocus="ratache()" placeholder="klik=hasil">
                            </div>
                            <div class="col-xs-2">
                            <label>Total Kue</label>
                            <input class="form-control" type="text" name="rata" id="rata" onfocus="hit_ratatb()" onchange="hitpb5()" placeholder="klik=hasil">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="rata_kk"   id="rata_kk" onfocus="hit_ratakk()" placeholder="klik=hasil">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="rata_kv"   id="rata_kv" onfocus="hit_ratakv()" placeholder="klik=hasil">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="rata_tc"  id="rata_tc" onfocus="hit_ratatc()" placeholder="klik=hasil">
                            </div>
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            
                            <div class="col-xs-2">
                            <label>Box</label>
                            <input class="form-control" type="text" name="rata_pb"  id="rata_pb" onfocus="hitpb5()" placeholder="klik=hasil">
                            </div>
                            <div class="col-xs-2">
                            
                            <input class="form-control" type="hidden" name="tgl_ambil_tb">
                            </div>
                            
                            </td>
                            </tr>

                            <tr>
                            <tr>

                           
                            <td colspan= "2" align="center">
                            <input type="submit" class="btn btn-default" value="Submit">
                             <a href="index.php?halaman=data_daily" class="btn btn-default" role="button">Data</a>  
                                </div> </div></div></div> 
 </form>
                                   </td>
                        </tr>
                        </tr> 
                        
                        </table>


