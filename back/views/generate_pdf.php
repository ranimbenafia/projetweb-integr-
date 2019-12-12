
<?php
//include connection file 
//include_once("../config.php");
include_once('pdf/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
   // $this->Image('C:/wamp64/www/LSM/front/views/img/logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'LISTE DES PRODUITS ',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$dbConnection = mysqli_connect('localhost', 'root', '', 'bd_kawarji');

$query  = "SELECT * FROM produits";
$result = mysqli_query($dbConnection, $query);
$e=0;
$i=0;
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',7);
if (mysqli_num_rows($result) > 0) {
    $pdf->Cell(40,10,"code",1,0);
    $pdf->Cell(60,10,"designation",1,0);
    $pdf->Cell(20,10,"Prix unitaire",1,0);
    $pdf->Cell(20,10,"quantité",1,0);
    $pdf->Cell(20,10,"remise",1,1);
   
  
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $code = $row['code']; 
          $designation = $row['designation'];
          $prix_unit = $row['prix_unit'];
          $qte=$row['qte'];
          $remis=$row['remis'];
          
          
          if($e==0)
          {
  
          $pdf->Cell(40,10,"{$code} ",1,0); 
          $pdf->Cell(60,10,"{$designation} ",1,0);
          $pdf->Cell(20,10,"{$prix_unit} ",1,0);
          $pdf->Cell(20,10,"{$qte} ",1,0);
          $pdf->Cell(20,10,"{$remis} ",1,1);
          
  
          }
  
  
  
      } }
$pdf->Output();
?>