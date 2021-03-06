<?php

 require_once("../ClassesController/fpdf/fpdf.php"); 
  
	 
 class myPDF extends FPDF {
    
       
		
      function bHeader($sch,$classcontent) {

       
        $this->SetFont('Times','B',14);

        $this->SetDrawColor(0,0,180);

        $this->SetFillColor(255,255,255);

        $this->SetTextColor(17,55,6);
		
		$this->Cell(270,10,$sch[0],0,1,'C');
		$this->SetFont('Times','B',10);
		$this->Cell(270,20,$classcontent[0],0,1,'C');
	}

        //Page footer method

        function Footer()       {

        //Position at 1.5 cm from bottom

        $this->SetY(-15);

        $this->SetFont('Arial','I',8);

        $this->Cell(0,10,'page footer -> Page '

        .$this->PageNo().'/{nb}',0,0,'C');

        }


function BuildTable($header,$data) {

        //Colors, line width and bold font

        $this->SetFillColor(252,252,252);

        $this->SetTextColor(0);

        $this->SetDrawColor(128,0,0);

        $this->SetLineWidth(.1);

		$this->SetDrawColor(0);


        $this->SetFont('Times','B',8);

        //Header

        // make an array for the column widths

        $w=array(10,35,85,35,35,35);

        // send the headers to the PDF document

        for($i=0;$i<count($header);$i++)

        $this->Cell($w[$i],7,$header[$i],1,0,'C',1);

        $this->Ln();

        //Color and font restoration

        $this->SetFillColor(248);    	
        $this->SetTextColor(21);
		$this->SetDrawColor(.2);
		
		$this->SetFont('Arial','B',8);


        //now spool out the data from the $data array

        $fill=true; // used to alternate row color backgrounds
		$h = 8;
       foreach($data as $row)

        {

        $this->Cell($w[0],$h,$row[0],'1',0,'C');

       
        $this->Cell($w[1],$h,$row[1],'1',0,'C',$fill);

         
        $this->Cell($w[2],$h,$row[2],'1',0,'L',$fill);

	
		$this->Cell($w[3],$h,$row[3],'1',0,'C',$fill);

		
        $this->Cell($w[4],$h,$row[4],'1',0,'C',$fill);
		
		 $this->Cell($w[5],$h,$row[5],'1',0,'C',$fill);



        $this->Ln();

        // flips from true to false and vise versa

         $fill =! $fill;

        }

        }



}// end of CLASS

?>