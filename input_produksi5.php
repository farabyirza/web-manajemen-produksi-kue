
 <?php

include 'config/koneksi.php';

$edit    = "SELECT tgl_ambil_tb, tgl_produksi, sum(rata_ori), sum(rata_cho), sum(rata_che), sum(rata), sum(rata_kk), sum(rata_kv), sum(rata_tc), sum(rata_pb) FROM jadwal_pengambilan WHERE tgl_produksi LIKE '%(Jumat)%'";
$hasil   = mysqli_query($connect, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);
?>

<script src="jquery.min.js" type="text/javascript"></script>
<script>
function htg1(){
    var satu =  document.getElementById('rata_ori').value;
    var dua =  document.getElementById('sisa_ori').value;
    
    var result = (parseInt(satu) - parseInt(dua)) / 120;
    if (!isNaN(result)) {
        bulat = result.toFixed(2);
        document.getElementById('produksi_ori').value = bulat;
  }

}
function htg2(){
    var satu =  document.getElementById('rata_cho').value;
    var dua =  document.getElementById('sisa_cho').value;
    
    var result = (parseInt(satu) - parseInt(dua)) / 120;
    if (!isNaN(result)) {
        bulat = result.toFixed(2);
        document.getElementById('produksi_cho').value = bulat;
  }

}
function htg3(){
    var satu =  document.getElementById('rata_che').value;
    var dua =  document.getElementById('sisa_che').value;
    
    var result = (parseInt(satu) - parseInt(dua)) / 120;
    if (!isNaN(result)) {
        bulat = result.toFixed(2);
        document.getElementById('produksi_che').value = bulat;
  }

}

// function htg4(){
//     var satu =  document.getElementById('rata_tb').value;
//     var dua =  document.getElementById('sisa_tb').value;
    
//     var result = (parseInt(satu) - parseInt(dua)) / 180;
//     if (!isNaN(result)) {
//         bulat = result.toFixed(0);
//         document.getElementById('produksi_tb').value = bulat;
//   }

// }
function htg5(){
    var satu =  document.getElementById('rata_kk').value;
    var dua =  document.getElementById('sisa_kk').value;
    
    var result = (parseInt(satu) - parseInt(dua)) / 2;
    if (!isNaN(result)) {
        bulat = result.toFixed(0);
        document.getElementById('produksi_kk').value = bulat;
  }

}
function htg6(){
    var satu =  document.getElementById('rata_kv').value;
    var dua =  document.getElementById('sisa_kv').value;
    
    var result = (parseInt(satu) - parseInt(dua)) / 2;
    if (!isNaN(result)) {
        bulat = result.toFixed(0);
        document.getElementById('produksi_kv').value = bulat;
  }
}
// function htg7(){
//     var satu =  document.getElementById('rata_tc').value;
//     var dua =  document.getElementById('sisa_tc').value;
    
//     var result = (parseInt(satu) - parseInt(dua)) / 180;
//     if (!isNaN(result)) {
//         bulat = result.toFixed(0);
//         document.getElementById('produksi_tc').value = bulat;
//   }
// }

function hit8(){
    var satu =  document.getElementById('sisa_ori').value;
    var dua =  document.getElementById('sisa_cho').value;
    var tiga =  document.getElementById('sisa_che').value;
    
    var result = parseInt(satu) + parseInt(dua) + parseInt(tiga);
    if (!isNaN(result)) {
        document.getElementById('sisa_tb').value = result;
    }

}
function hit9(){
    var satu =  document.getElementById('sisa_kk').value;
    var dua =  document.getElementById('sisa_kv').value;

    
    var result = parseInt(satu) + parseInt(dua) ;
    if (!isNaN(result)) {
        document.getElementById('sisa_tc').value = result;
    }

}
function hitpb1(){
    var satu =  document.getElementById('sisa_tb').value;
    
    var result = parseInt(satu) / 2;
    if (!isNaN(result)) {
    bulat = result.toFixed(0);
    document.getElementById('sisa_pb').value=bulat;
    }
}
function hitpb2(){
    var satu =  document.getElementById('produksi_tb').value;
    
    var result = parseInt(satu) / 2;
    if (!isNaN(result)) {
    bulat = result.toFixed(0);
    document.getElementById('produksi_pb').value=bulat;
    }
}
function htg10(){
    var satu =  document.getElementById('rata_pb').value;
    var dua =  document.getElementById('sisa_pb').value;
    
    var result = (parseInt(satu) - parseInt(dua)) / 120;
    if (!isNaN(result)) {
        bulat = result.toFixed(0);
        document.getElementById('produksi_pb').value = bulat;
  }

}

function hit11(){
    var satu =  document.getElementById('produksi_ori').value;
    var dua =  document.getElementById('produksi_cho').value;
    var tiga =  document.getElementById('produksi_che').value;
    
    var result = parseInt(satu) + parseInt(dua) + parseInt(tiga);
   if (!isNaN(result)) {
        bulat = result.toFixed(0);
        document.getElementById('produksi_tb').value = bulat;

    }

}

function hit12(){
    var satu =  document.getElementById('produksi_kk').value;
    var dua =  document.getElementById('produksi_kv').value;

    var result = parseInt(satu) + parseInt(dua);
    if (!isNaN(result)) {
        bulat = result.toFixed(0);
        document.getElementById('produksi_tc').value = bulat;

    }

}

 
</script> 
<div class="col-md-12">
                     <h2 style="text-align: center; font-family: Blagovest">INPUT PRODUKSI</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk menghitung dan meng-<i>input</i> Jadwal Produksi.</h4>
                        
                        <form method="post" action="config/simpan_produksi.php">
						<table>
                             <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Tanggal Produksi </td>
                        <td> <div class="col-xs-4"> <input class="form-control" type="text" name="tgl_produksi" value="<?php echo $data['tgl_produksi']; ?>">
                        </td></div>
                        </tr>
                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Tanggal Pengambilan </td>
                        <td> <div class="col-xs-4"> <input class="form-control" type="text" name="tgl_ambil_tb" value="<?php echo $data['tgl_ambil_tb']; ?>">
                        </td></div>
                        </tr>

                        <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Sisa Produksi</td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="sisa_ori" id="sisa_ori" onkeyup="htg1()" onkeyup="hit8()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Stroberi</label>
                            <input class="form-control" type="text" name="sisa_cho" id="sisa_cho" onkeyup="htg2()" onkeyup="hit8()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Coklat</label>
                            <input class="form-control" type="text" name="sisa_che" id="sisa_che" onkeyup="htg3()" onkeyup="hit8()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Kue</label>
                            <input class="form-control" type="text" name="sisa_tb" id="sisa_tb"  onfocus="hit8()">
                            </div>

                             <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="sisa_kk"  id="sisa_kk" onkeyup="htg5()" onkeyup="hit9()" value="0">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="sisa_kv"  id="sisa_kv" onkeyup="htg6()" onkeyup="hit9()" value="0">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="sisa_tc"  id="sisa_tc" onfocus="hit9()">
                            </div>



                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
 <!--                                <div class="col-xs-2">
                            <label >Paper Bag</label>
                            <input class="form-control" type="text" name="sisa_pb" id="sisa_pb" onkeyup="htg10()">
                            </div> -->

                            </td>
                            </tr>
                          

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Pemesanan</td>
                            <td> 

                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="rata_ori"  id="rata_ori" onkeyup="htg1()" value="<?php echo $data['sum(rata_ori)']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Stroberi</label>
                            <input class="form-control" type="text" name="rata_cho"  id="rata_cho" onkeyup="htg2()" value="<?php echo $data['sum(rata_cho)']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Coklat</label>
                            <input class="form-control" type="text" name="rata_che"  id="rata_che" onkeyup="htg3()" value="<?php echo $data['sum(rata_che)']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Produksi</label>
                            <input class="form-control" type="text" name="rata_tb"  id="rata_tb" onkeyup="htg4()"  value="<?php echo $data['sum(rata)']; ?>">
                            </div>
                              <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Krim Kacang </label>
                            <input class="form-control" type="text" name="rata_kk"  id="rata_kk" onkeyup="htg1()" value="<?php echo $data['sum(rata_kk)']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="rata_kv"  id="rata_kv" onkeyup="htg6()" value="<?php echo $data['sum(rata_kv)']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Produksi</label>
                            <input class="form-control" type="text" name="rata_tc"  id="rata_tc" onkeyup="htg3()" value="<?php echo $data['sum(rata_tc)']; ?>">
                            </div>
                              <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
<!--                             <div class="col-xs-2">
                            <label >Paperbag</label>
                            <input class="form-control" type="text" name="rata_pb"  id="rata_pb" onkeyup="htg10()" value="<?php echo $data['sum(rata_pb)']; ?>">
                            </div> -->

                            </td>
                            </tr>
                            
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center">Jumlah Produksi</td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="produksi_ori"  id="produksi_ori" onfocus="htg1()" onkeyup="hit11()">
                            </div>
                            <div class="col-xs-2">
                            <label >Stroberi</label>
                            <input class="form-control" type="text" name="produksi_cho"  id="produksi_cho" onfocus="htg2()" onkeyup="hit11()">
                            </div>
                            <div class="col-xs-2">
                            <label >Coklat</label>
                            <input class="form-control" type="text" name="produksi_che"  id="produksi_che" onfocus="htg3()" onkeyup="hit11()">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Produksi</label>
                            <input class="form-control" type="text" name="produksi_tb"  id="produksi_tb" onfocus="hit11()">
                            </div>
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kacang</label>
                            <input class="form-control" type="text" name="produksi_kk"  id="produksi_kk" onfocus="htg5()" onkeyup="hit12()">
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Pisang</label>
                            <input class="form-control" type="text" name="produksi_kv"  id="produksi_kv" onfocus="htg6()" onkeydown="hit12()">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Produksi</label>
                            <input class="form-control" type="text" name="produksi_tc"  id="produksi_tc" onfocus="hit12()">
                            </div>
                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                                <div class="col-xs-2">
                            
                            <input class="form-control" type="hidden" name="status_produksi"  value="">
                            </div>
                            </td>
                            </tr>


							<tr>
                            <td colspan= "2" align="center">
                            <input type="submit" class="btn btn-default" value="Submit">
                            </td>
							</tr>
							</table>
							</form>