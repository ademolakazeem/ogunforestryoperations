<?php
session_start();
require_once("../ClassesController/fpdf/fpdf.php");
require_once("../ClassesController/fpdfclasssecond.php");
require_once("../ClassesController/fpdfclassbroadsheet.php"); 
require_once("../ClassesController/DBDirect.php");
require_once('../ClassesController/Utilities.php');
require_once('../ClassesController/ResultManager.php');
//$pdf = new FPDF('P','mm',array(200,100));

$sqlsub = "SELECT * from tbl_contractor WHERE id ='".$_SESSION['uid']."'";

$resultsub = mysql_query($sqlsub) or die( "Could not execute sql: $sqlsub");
$i=0;
while($rowsub = mysql_fetch_array($resultsub))
{
	// fetching the subject one by one
	$mainsub =$rowsub['subject'];
	$subqr="SELECT * FROM tblsubject WHERE subject='$mainsub'";
	$rr=$db->fetchData($subqr);
	$classubject[] = $rowsub['subject'];
	
	
    $header[] = strtoupper($rr['shortform']);
   
}	



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);



$str1 = 'Registration Information for '.$_SESSION['name'];

$pdf->Cell(200,0,$str1,0,1,'C');

$pdf->ln(5);
$str2= 'Contractor Name:  : '.$class."  ".$arm ;

$pdf->Cell(200,0,$str2,0,1,'L');





$pdf->Output();
?>