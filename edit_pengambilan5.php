<script src="jquery.min.js" type="text/javascript"></script>
<script>
function hit3(){
    var satu =  document.getElementById('rata_ori').value;
    var dua =  document.getElementById('rata_cho').value;
    var tiga =  document.getElementById('rata_che').value;
    
    var result = parseInt(satu) + parseInt(dua) + parseInt(tiga);
    if (!isNaN(result)) {
     bulat = result.toFixed(0);
        document.getElementById('rata').value=bulat;
    }
}

function hit4(){
    var satu =  document.getElementById('rata_kk').value;
    var dua =  document.getElementById('rata_kv').value;
    
    var result = parseInt(satu) + parseInt(dua);
    if (!isNaN(result)) {
     bulat = result.toFixed(0);
        document.getElementById('rata_tc').value=bulat;
    }
}
function hitpb5(){
    var satu =  document.getElementById('rata').value;
    
    var result = parseInt(satu) / 3;
    if (!isNaN(result)) {
    bulat = result.toFixed(0);
    document.getElementById('rata_pb').value=bulat;
    }
}
 <?php

include 'config/koneksi.php';


$id  = $_GET['id'];


$edit = "SELECT *
FROM jadwal_pengambilan
WHERE id='$id'";



$hasil   = mysqli_query($connect, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);
?>
</script> 
<div class="col-md-12">
                  <h2 style="text-align: center; font-family: Blagovest">EDIT PENGAMBILAN</h2>   
                        <h4 style="text-align: center; font-family: Blackletter">Halaman ini adalah halaman untuk meng-<i>edit</i> <b>Tanggal Pengambilan</b> dan rasa.</h4> 
                        
                 
                        <form method="post" action="config/edit_input_pengambilan5.php">
                        <input type="hidden" value="<?php echo $id ?>">
                        <table>
                        <tr>
                        <!-- <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> ID Daily </td> -->
                        <td>  <div class="col-xs-2"><input class="form-control" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> Tanggal Pengambilan </td>
                        <td>  <div class="col-xs-2"><input class="form-control" type="date" name="tgl_ambil_tb" value="<?php echo $data['tgl_ambil_tb']; ?>">
                        </div></td>
                        </tr>
                        <tr>
                        <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"> SO </td>
                        <td>  <div class="col-xs-2"><input class="form-control" type="text" name="so" value="<?php echo $data['so']; ?>">
                        </div></td>
                        </tr>
                        
                        <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label> Original </label>
                            <input class="form-control" type="text" name="rata_ori" id="rata_ori" onkeyup="hit3()" value="<?php echo $data['rata_ori']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Chocolate</label>
                            <input class="form-control" type="text" name="rata_cho"  id="rata_cho" onkeyup="hit3()" value="<?php echo $data['rata_cho']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Cheese</label>
                            <input class="form-control" type="text" name="rata_che"  id="rata_che" onkeyup="hit3()" value="<?php echo $data['rata_che']; ?>">
                            </div>
                            <div class="col-xs-2">
                            <label >Total Bun</label>
                            <input class="form-control" type="text" name="rata"  id="rata" onkeyup="hitpb5()" value="<?php echo $data['rata']; ?>">
                            </div>

                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            <div class="col-xs-2">
                            <label >Krim Kopi</label>
                            <input class="form-control" type="text" name="rata_kk"  id="rata_kk" onkeyup="hit4()" value="<?php echo $data['rata_kk']; ?>" >
                            </div>
                            <div class="col-xs-2">
                            <label >Krim Vanila</label>
                            <input class="form-control" type="text" name="rata_kv"  id="rata_kv" onkeyup="hit4()" value="<?php echo $data['rata_kv']; ?>">
                            </div> 
                            <div class="col-xs-2">
                            <label >Total Krim</label>
                            <input class="form-control" type="text" name="rata_tc"  id="rata_tc"  value="<?php echo $data['rata_tc']; ?>">
                            </div>


                            <tr>
                            <td style = "font-size: 20px; font-family: Courier, sans-serif; text-align: center"></td>
                            <td> 
                            
                            <div class="col-xs-2">
                            <label >Paper Bag</label>
                            <input class="form-control" type="text" name="rata_pb"  id="rata_pb" onfocus="hitpb5()"  value="<?php echo $data['rata_pb']; ?>">
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