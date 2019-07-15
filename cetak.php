<?php 
include 'laporan/fpdf.php';
include 'config.php';

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5, 'SMK Negeri 1 Purbalingga','0','1','C',false);
$pdf->SetFont('Arial','',10 );
$pdf->Cell(0,5,'Jl. Mayor Jend. Sungkono, Kalimanah, Selabaya, Kec. Purbalingga, Kabupaten Purbalingga, Jawa Tengah 53371','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Calon Siswa SMK Negeri 1 Purbalingga','0','1','C',false);
$pdf->Ln(3);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(8,6,'No.',1,0,'C');
$pdf->Cell(36,6,'Nama',1,0,'C');
$pdf->Cell(36,6,'Alamat',1,0,'C');
$pdf->Cell(36,6,'Jenis Kelamin',1,0,'C');
$pdf->Cell(36,6,'Agama',1,0,'C');
$pdf->Cell(36,6,'Sekolah Asal',1,0,'C');
$pdf->Ln(4);
$sql = 'select * from calon_siswa ';
$query = mysqli_query($conn, $sql);
$no = 1;
while ($siswa =mysqli_fetch_array($query)){
	$pdf->Ln(4);
	$pdf->SetFont('Arial','','8');
	$pdf->Cell(8,4,$no.".",1,0,'C');
	$pdf->Cell(36,4,$siswa['nama'].".",1,0,'L');
	$pdf->Cell(36,4,$siswa['alamat'].".",1,0,'L');
	$pdf->Cell(36,4,$siswa['jenis_kelamin'].".",1,0,'L');
	$pdf->Cell(36,4,$siswa['agama'].".",1,0,'L');
	$pdf->Cell(36,4,$siswa['sekolah_asal'].".",1,0,'L');
	$no++;
}

$pdf->Output();
?> 