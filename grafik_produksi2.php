<html>
 <head>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
 var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Penjualan Kamera '
         },
         xAxis: {
            categories: ['brand']
         },
         yAxis: {
            title: {
               text: 'Jumlah terjual'
            }
         },
              series:             
            [
            <?php 
         include('config.php');
           $sql   = "SELECT tgl_produksi  FROM jadwal_produksi";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
             $brand=$ret['tgl_produksi'];                     
                 $sql_jumlah   = "SELECT ngadon_ori FROM jadwal_produksi WHERE tgl_produksi='$tgl_produksi'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['jumlah'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $brand; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   }); 
</script>
 </head>
 <body>
  <div id='container'></div>  
 </body>
</html>