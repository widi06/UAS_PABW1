<?php

$servername    = "localhost";
$username      = "root";
$password      = "";
$dbname        = "percobaan";

$conn    = mysqli_connect ($servername, $username, $password, $dbname);
if (!$conn){
    die ("Connection Failed: ". mysqli_connect_error());
    }

// Koneksi library FPDF
require('config/fpdf/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('P','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'Daftar Data Release',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'Jl. Abece No. 80 Kodamar, jakarta Utara.',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(30,6,'TANGGAL',1,0);
$pdf->Cell(25,6,'DISTRIBUTOR',1,0);
$pdf->Cell(25,6,'EKSPEDITUR',1,0);
$pdf->Cell(25,6,'NAMA SOPIR',1,0);
$pdf->Cell(25,6,'NETTO',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($conn, "SELECT * FROM release_terakhir");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,6,$row['id'],1,0);
    $pdf->Cell(30,6,$row['tanggal'],1,0);
    $pdf->Cell(25,6,$row['distributor'],1,0);
    $pdf->Cell(25,6,$row['ekspeditur'],1,0);
    $pdf->Cell(25,6,$row['nama_sopir'],1,0);
    $pdf->Cell(25,6,$row['netto'],1,1
);
}

$pdf->Output();
?>
