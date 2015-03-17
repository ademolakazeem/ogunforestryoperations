<?php 

//page permission id = 6, permission name =  administer contractor accounts
$page_permission_id = 6;

require_once("restrict.php");
require_once("../ClassesController/DBDirect.php");
require_once("../ClassesController/AdminManager.php");
require_once('../ClassesController/class.pagination.php');
	
$db = new DBConnecting();
$adm = new AdminController();


//get user access level
session_start();
$acc_level = "";
$location = "";
if(isset($_SESSION['levelaccess']))
{
	$acc_level = $_SESSION['levelaccess'];
	$location = $_SESSION['location'];
}


//check if user has required permissions 
$rs = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$page_permission_id'");
$has_page_permission = mysql_num_rows($rs);
if ($has_page_permission > 0)
{}
else
{
   header("location:no_permissions.php");
}
?>
<?php 
	$con_id = $_GET['con_id'];
	if($acc_level ==  2)
	{
		$qry = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && business_area='$location'";
		$qry1 = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id' && contractor_id in (select id from tbl_contractor WHERE business_area = '$location')";
	}
	elseif($acc_level ==  3)//hqusers with acc level = 3 should not see information about Area J4 Corporation with location id = 10
	{
		$qry = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && (business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";
		$qry1 = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id' && contractor_id in (select id from tbl_contractor WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";
	}
	else
	{
		$qry = "SELECT * FROM tbl_contractor WHERE id = '$con_id'";
		$qry1 = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id'";
	}
	$rs = $db->fetchData($qry);
	$rs1 = $db->fetchData($qry1);
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contractor's Registration</title>
    
     <link rel="icon" type="image/png" href="../images/favicon.png">
     <link rel="stylesheet" type="text/css" href="../css/superfish.css" media="screen">
    <script>
	function printpage()
  {
  window.print()
  }
</script>

<style type="text/css">
@media print {

input#btnPrint {

display: none;

}
button#btnPrint1 {

display: none;

}


}

</style>
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
    
    <p style="text-align:center; font-weight:bold; padding-top:5mm;">CONTRACTOR'S CURRENT ACCOUNT INFORMATION
   <?php
    //displaying area_j4 name when necessary
    $location_qry = "select * from tbl_location WHERE id = 10 && forest_location='$location'";
    $nos_results = mysql_num_rows(mysql_query($location_qry));
    if($nos_results > 0)
    {
	$result = $db->fetchData($location_qry);
	echo "<br />".$result['forest_location'];
    }
    
    ?>
   </p>
    <br />
<table height="155" class="heading" style="width:100%;">
    	<tr>
    		<td width="394" height="149" style="width:80mm;">
    			<?php include('address.php'); ?>
                </td>
			<td width="321" align="center" valign="middle" style="padding:3mm;"><img src="../images/logoOld.png" width="300" height="120"></td>
		</tr>
   	</table>
		
		
	<div id="content">
		
	  <div id="invoice_body">
			<table width="154%">
			<tr style="background:#eee;">
				<td width="44%" style="width:8%;"><b>Contractor's ID:</b></td>
				<td width="28%"><?php echo $rs1['contractor_id'];?></td>
				<td width="28%" rowspan="4"><img name="" src="<?php echo $rs['picture'];?>" width="121" height="130" alt="" /></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b> Name:</b></td>
			  <td><?php echo $rs['name'];?></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b><strong>Current Balance:</strong></b></td>
			  <td><?php echo $rs1['amount_deposited'];?></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong> Teller Number:</strong></td>
			  <td><?php echo $rs1['teller_number']; ?></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong>Bank Name:</strong></td>
			  <td><?php echo $rs1['bank_name'];?></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b><strong>Account Number:</strong></b></td>
			  <td><?php echo $rs1['account_number'];?></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong>Created Date:</strong></td>
			  <td><?php echo $rs1['created_date'];?></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong>Payment Date:</strong></td>
			  <td><?php echo $rs1['payment_date'];?></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong>Creator: </strong></td>
			  <td><?php echo $rs1['maker_id'];?></td>
			  <td>&nbsp;</td>
			  </tr>
			</table>
            <br/>
		  <p><input type="button" id="btnPrint" value="Print Now" onclick="printpage()">
		    &nbsp;&nbsp;&nbsp;<button onclick="window.location.href='view_contractor_account.php'" id="btnPrint1">Go Back</button> </p>
		  <p>&nbsp;</p>
		  <p><em><strong>Please Note: That this is a receipt for the confirmation of your payment.</strong></em></p>
      </div>
		
</div>

	
</body>
</html>
