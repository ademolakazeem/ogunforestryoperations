<?php 

//page permission id = 10, permission name =  administer contractor transactions
$page_permission_id = 10;

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
	$transaction_id = $_GET['transaction_id'];
	if($acc_level == 2)
	{
		$qry = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && business_area = '$location'";

//$qry1 = "SELECT * FROM tbl_contractor_transaction WHERE id = '$transaction_id' && reserved_location = '$location'";

$qry1 = "SELECT a.*, b.name name, b.hammer_number hammer_number FROM tbl_contractor_transaction a, tbl_contractor b WHERE a.id = '$transaction_id' && reserved_location = '$location'";	
		
	}
	elseif($acc_level == 3)
	{
		//hqusers with acc level = 3 should not see information about Area J4 Corporation with location id = 10
		$qry = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && (business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";

//$qry1 = "SELECT * FROM tbl_contractor_transaction WHERE id = '$transaction_id' && (reserved_location NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";
		
$qry1 = "SELECT a.*, b.name name, b.hammer_number hammer_number FROM tbl_contractor_transaction a, tbl_contractor b WHERE a.id = '$transaction_id' && (reserved_location NOT IN (SELECT forest_location from tbl_location WHERE id = 10)) and a.contractor_id=b.id";		
		
	}
	else
	{
		$qry = "SELECT * FROM tbl_contractor WHERE id = '$con_id'";
//$qry1 = "SELECT * FROM tbl_contractor_transaction WHERE id = '$transaction_id'";
$qry1 = "SELECT a.*, b.name, b.hammer_number FROM tbl_contractor_transaction a, tbl_contractor b WHERE a.id = '$transaction_id' and a.contractor_id=b.id";
	}
	$rs = $db->fetchData($qry);
	$rs1 = $db->fetchData($qry1);

 	$tree_type = $rs1['tree_type'];
	$sql = mysql_query("SELECT * from tbl_tree WHERE id = $tree_type") or die(mysql_error());
	$row_list=mysql_fetch_assoc($sql);
	$tariff =  $row_list['tariff'];
	$tree_name = $row_list['name'];
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contractor's Transaction</title>
    
     <link rel="icon" type="image/png" href="../images/favicon.png">
    <script>
	function printpage()
  {
  window.print()
  }
</script>
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
    
    <p style="text-align:center; font-weight:bold; padding-top:5mm;">CONTRACTOR'S TRANSACTION
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
<table height="119" class="heading" style="width:100%;">
    	<tr>
    		<td width="394" height="113" style="width:80mm;">
    			<?php include('address.php'); ?></td>
			<td width="321" align="right" valign="top" style="padding:3mm;"><img src="../images/logoOld.png" width="214" height="77"></td>
		</tr>
   	</table>
		
		
	<div id="content">
		
	  <div id="invoice_body">
			<table width="154%">
			<tr style="background:#eee;">
				<td width="44%" style="width:8%;"><b>Contractor's ID:</b></td>
				<td width="28%"><?php echo $rs1['contractor_id'];?></td>
				<td width="28%" rowspan="6"><img name="" src="<?php echo $rs['picture'];?>" width="121" height="130" alt="" /></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Contractor Name:</b></td>
			  <td><?php echo $rs1['name'];?></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Hammer Number:</b></td>
			  <td><?php echo $rs1['hammer_number'];?></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b>Tree Type:</b></td>
			  <td><?php echo $tree_name;?></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b><strong>Quantity:</strong></b></td>
			  <td><?php echo $rs1['quantity'];?></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><b><strong>Transaction Cost:</strong></b></td>
			  <td><?php echo ($rs1['quantity'] * $tariff);?></td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong>Reserved Location:</strong></td>
			  <td><?php echo $rs1['reserved_location']; ?></td>
			 <td>&nbsp;</td> </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong>Attended By:</strong></td>
			  <td><?php echo $rs1['attended_by'];?></td>
			  <td>&nbsp;</td>
			  </tr>			
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong>Authorized By:</strong></td>
			  <td><?php echo $rs1['authorized_by'];?></td>
			  <td>&nbsp;</td>
			  </tr>
			<tr style="background:#eee;">
			  <td style="width:8%;"><strong>Date:</strong></td>
			  <td><?php echo $rs1['date'];?></td>
			  <td>&nbsp;</td>
			  </tr>
			</table>
        <br/>
		  <p><input type="button" value="Print Now" onclick="printpage()">
		    | <a href="view_contractor_transaction.php">Go Back</a> </p>
		  <p>&nbsp;</p>
		  <p><em><strong>Please Note: That this is a receipt for the confirmation of your payment.</strong></em></p>
      </div>
		
</div>

	
</body>
</html>
