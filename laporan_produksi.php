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
$pdf->Cell(190,7,'Laporan',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'JADWAL PRODUKSI',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(35,6,'Tanggal',1,0);
$pdf->Cell(20,6,'Original',1,0);
$pdf->Cell(20,6,'Stroberi',1,0);
$pdf->Cell(20,6,'Coklat',1,0);
$pdf->Cell(20,6,'Total Kue',1,0);
$pdf->Cell(24,6,'Krim Kacang',1,0);
$pdf->Cell(23,6,'Krim Pisang',1,0);
$pdf->Cell(20,6,'Total Krim',1,1);


$pdf->SetFont('Arial','',10);

include 'config/koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from jadwal_produksi");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(35,6,$row['tgl_produksi'],1,0);    
    $pdf->Cell(20,6,$row['produksi_ori'],1,0);
    $pdf->Cell(20,6,$row['produksi_cho'],1,0);
    $pdf->Cell(20,6,$row['produksi_che'],1,0);
    $pdf->Cell(20,6,$row['produksi_tb'],1,0);
    $pdf->Cell(24,6,$row['produksi_kk'],1,0);
    $pdf->Cell(23,6,$row['produksi_kv'],1,0);
    $pdf->Cell(20,6,$row['produksi_tc'],1,1); 
}
$pdf->SetFont('Arial','B',10);
$pdf->Cell(300,10,'Bekasi,' ,0,1,'C');
$pdf->Cell(335,-9.5,$tgl ,0,1,'C');
$pdf->Cell(320,19,'Tertanda,' ,0,2,'C');
$pdf->Cell(320,5,'Operation Coordinator' ,0,1,'C');
$pdf->Output();
?>