
<?php
include 'config/koneksi.php';
$tgl = date("d-m-Y");
// memanggil library FPDF
require('phpfpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'LAPORAN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'JADWAL PENGAMBILAN',0,1,'C');
// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(20,0,'Tanggal :' ,0,1,'C');
// $pdf->Cell(55,0,$tgl ,0,1,'C');


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,3,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'SO',1,0);
$pdf->Cell(15,6,'Original',1,0);
$pdf->Cell(20,6,'Stroberi',1,0);
$pdf->Cell(15,6,'Coklat',1,0);
$pdf->Cell(20,6,'Total Kue',1,0);
$pdf->Cell(24,6,'Krim Kacang',1,0);
$pdf->Cell(23,6,'Krim Pisang',1,0);
$pdf->Cell(20,6,'Total Krim',1,0);
$pdf->Cell(10,6,'Box',1,0);
$pdf->Cell(35,6,'Tanggal',1,1);

$pdf->SetFont('Arial','',10);

include 'config/koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from jadwal_pengambilan");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(10,6,$row['so'],1,0);
    $pdf->Cell(15,6,$row['rata_ori'],1,0);
    $pdf->Cell(20,6,$row['rata_cho'],1,0);
    $pdf->Cell(15,6,$row['rata_che'],1,0);
    $pdf->Cell(20,6,$row['rata'],1,0);
    $pdf->Cell(24,6,$row['rata_kk'],1,0);
    $pdf->Cell(23,6,$row['rata_kv'],1,0);
    $pdf->Cell(20,6,$row['rata_tc'],1,0);
    $pdf->Cell(10,6,$row['rata_pb'],1,0);
    $pdf->Cell(35,6,$row['tgl_ambil_tb'],1,1); 
}

$pdf->SetFont('Arial','B',10);
$pdf->Cell(325,10,'Bekasi,' ,0,1,'C');
$pdf->Cell(360,-9.5,$tgl ,0,1,'C');
$pdf->Cell(335,18,'Tertanda,' ,0,2,'C');
$pdf->Cell(335,18 ,'Operation Coordinator' ,0,1,'C');

$pdf->Output();
?>