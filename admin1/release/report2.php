<?php
$servername    = "localhost";
$username      = "root";
$password      = "";
$dbname        = "percobaan";

$conn    = mysqli_connect ($servername, $username, $password, $dbname);
if (!$conn){
    die ("Connection Failed: ". mysqli_connect_error());
    }

require('config/fpdf/fpdf.php');



//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('L','mm','A4');

$pdf->AddPage();

//Image( file name , x position , y position , width [optional] , height [optional] )
$pdf->Image('../kantong/images/SIG.jpg',60,30,89);


//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',9);



//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'PACKING PLANT BANYUWANGI',0,0);
$pdf->Cell(59 ,5,'CHECK FASILITAS',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Jl. Tani, Mamampang',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line
$pdf->Cell(130 ,5,'Garassi, Tinggimoncong, 92174',0,0);


$query = mysqli_query($conn, "SELECT * FROM release_terakhir where id = '".$_GET['id']."'");
while ($row = mysqli_fetch_array($query)){


$pdf->Cell(25 ,5,'Tanggal  :',0,0);
$pdf->Cell(34 ,5,$row['tanggal'],0,1);//end of line

$pdf->Cell(130 ,5,'Nomor Telp (+62) 81524737292',0,0);
$pdf->Cell(25 ,5,'Nomor    :',0,0);
$pdf->Cell(34 ,5,$row['id'],0,1);//end of line

$pdf->Cell(130 ,5,'Fax (0411) 11223344',0,0);
$pdf->Cell(25 ,5,'Teknisi   : Angger Widi K',0,1);//end of line


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100 ,5,'DETAILS LAPORAN CHECK',0,1);//end of line
$pdf->Cell(100 ,5,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'NO',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5, $row['id'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'Tanggal',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['tanggal'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'Jam',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['jam'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'Shift',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['shift'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'Distributor',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['distributor'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'Ekspeditur',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['ekspeditur'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'No_Polisi',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['no_polisi'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'Nama_Sopir',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->MultiCell(120 ,5,$row['nama_sopir'],0,1);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'Netto',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->MultiCell(120 ,5,$row['netto'],0,1);


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line
$pdf->SetFont('Arial','B',10);
$pdf->Cell(182,4,"Di Cetak Pada : ".date("D-d m Y"),0,1,'R');

//set font to arial, bold, 14pt

$pdf->Cell(189 ,10,'',0,1);//end of line
$pdf->SetFont('Arial','B',10);

$pdf->Cell(130 ,4,'MANAGER OPS',0,0);
$pdf->Cell(59 ,5,'APARAT KEAMANAN',0,1);//end of line


}

$pdf->Output();
?>