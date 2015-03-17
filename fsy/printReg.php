
<!DOCTYPE html>
<html>
<head>
	<title>Contractor's Registration</title>
	<style>
		*
		{
			margin:0;
			padding:0;
			font-family:Arial;
			font-size:10pt;
			color:#000;
		}
		body
		{
			width:100%;
			font-family:Arial;
			font-size:10pt;
			margin:0;
			padding:0;
		}
		
		p
		{
			margin:0;
			padding:0;
		}
		
		#wrapper
		{
			width:180mm;
			margin:0 15mm;
		}
		
		.page
		{
			height:297mm;
			width:210mm;
			page-break-after:always;
		}

		table
		{
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
			
			border-spacing:0;
			border-collapse: collapse; 
			
		}
		
		table td 
		{
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding: 2mm;
		}
		
		table.heading
		{
			height:50mm;
		}
		
		h1.heading
		{
			font-size:14pt;
			color:#000;
			font-weight:normal;
		}
		
		h2.heading
		{
			font-size:9pt;
			color:#000;
			font-weight:normal;
		}
		
		hr
		{
			color:#ccc;
			background:#ccc;
		}
		
		#invoice_body
		{
			height: 149mm;
		}
		
		#invoice_body , #invoice_total
		{	
			width:100%;
		}
		#invoice_body table , #invoice_total table
		{
			width:100%;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
	
			border-spacing:0;
			border-collapse: collapse; 
			
			margin-top:5mm;
		}
		
		#invoice_body table td , #invoice_total table td
		{
			text-align:center;
			font-size:9pt;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding:2mm 0;
		}
		
		#invoice_body table td.mono  , #invoice_total table td.mono
		{
			font-family:monospace;
			text-align:right;
			padding-right:3mm;
			font-size:10pt;
		}
		
		#footer
		{	
			width:180mm;
			margin:0 15mm;
			padding-bottom:3mm;
		}
		#footer table
		{
			width:100%;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
			
			background:#eee;
			
			border-spacing:0;
			border-collapse: collapse; 
		}
		#footer table td
		{
			width:25%;
			text-align:center;
			font-size:9pt;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
		}
	</style>
</head>
<body>
<div id="wrapper">
    
    <p style="text-align:center; font-weight:bold; padding-top:5mm;">CONTRACTOR'S REGISTRATION</p>
    <br />
<table class="heading" style="width:100%;">
    	<tr>
    		<td width="394" style="width:80mm;">
    			<?php include('address.php'); ?>
			</td>
			<td width="321" rowspan="2" align="right" valign="top" style="padding:3mm;"><img src="../images/logoOld.png" width="214" height="77"></td>
		</tr>
    	<tr>
    		<td height="92"><br />
    		</td>
    	</tr>
    </table>
		
		
	<div id="content">
		
		<div id="invoice_body">
			<table>
			<tr style="background:#eee;">
				<td width="44%" style="width:8%;"><b>Contractor's ID:</b></td>
				<td width="56%">&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Contractor's Name:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Tax Identification Number:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Company Registration Number:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Contractor's Phone Number:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Address:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Business Area:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Referee One Name:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Referee One Address:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Referee One Phone:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Referee Two Name:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Referee Two Address:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Referee Two Phone:</b></td>
			  <td>&nbsp;</td>
			  </tr>
			</table>
			
			<table>
			<tr>
			    <td style="width:8%;">1</td>
			    <td style="text-align:left; padding-left:10px;">Software Development<br />Description : Upgradation of telecrm</td>
			    <td class="mono" style="width:15%;">1</td><td style="width:15%;" class="mono">157.00</td>
			    <td style="width:15%;" class="mono">157.00</td>
			</tr>			
			<tr>
				<td colspan="3"></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td colspan="3"></td>
				<td>Total :</td>
				<td class="mono">157.00</td>
			</tr>
		</table>
	  </div>
		
</div>

	
</body>
</html>
