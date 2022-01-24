
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
$pdf->Image('../kantong/images/SIG.jpg',60,18,85);

//set font jadi arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'PACKING PLANT BANYUWANGI',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

$query = mysqli_query($conn, "SELECT * FROM sparepart where id = '".$_GET['id']."'");
while ($row = mysqli_fetch_array($query)){

//set font jadi arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Jl. Raya Situbondo.',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'Banyuwangi, 68455',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$pdf->Cell(34 ,5,$row['tanggal'],0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+6281259083881]',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,$row['jam'],0,1);//end of line

$pdf->Cell(130 ,5,'Fax [0333510110]',0,0);
$pdf->Cell(25 ,5,'Customer ID',0,0);
$pdf->Cell(34 ,5,$row['id'],0,1);//end of line

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//alamat billing 
$pdf->Cell(100 ,5,'Bill For',0,1);//end of line

//tambah dummy cell di awal untuk indentasi
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[Name : Angger Widi K]',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[Packing Plant Banyuwangi]',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[Jl. Raya Situbondo]',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[+6281259083881]',0,1);
 

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice 
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Description',1,0);
$pdf->Cell(25 ,5,'Jumlah',1,0);
$pdf->Cell(34 ,5,'Pembayaran',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Angka diratakan kanan, jadi kita beri property 'R'

$pdf->Cell(130 ,5,$row['nama_sparepart'],1,0);
$pdf->Cell(25 ,5,$row['jumlah'],1,0);
$pdf->Cell(34 ,5,'3,250',1,1,'R');//end of line

//total
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Subtotal',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'3,250',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Taxable',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'0',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Tax Rate',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'10%',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Total Due',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'3,575',1,1,'R');//end of line


//set font to arial, bold, 14pt

$pdf->Cell(189 ,10,'',0,1);//end of line
$pdf->SetFont('Arial','B',10);

$pdf->Cell(130 ,5,'MANAGER OPS',0,0);
$pdf->Cell(59 ,5,'KOORDONATOR',0,1);//end of line

}

$pdf->Output();
?>