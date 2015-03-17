<?php 

//page permission id = 15, permission name = update transaction status
$page_permission_id = 15;

include('authenticate.php');
$db = new DBConnecting();
$adm = new AdminController();
$admContr = new Contractor();
	

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
		$qry1 = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && business_area = '$location'";
	}
	if(($acc_level == 3 || $acc_level == 4))

	{
		/*we are have to check the hqusers(3) or directors(4) location so that if its Area J4-Corporation, only those records for that area 			are displayed else we display all records except Area J4-Corporation*/
		$check_query = "SELECT *from tbl_location WHERE  forest_location = '$location' && id = 10";
		$check_result = mysql_query($check_query);
		$nos_result_check = mysql_num_rows($check_result);
		
		if($nos_result_check > 0)
		{$qry1 = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && business_area IN (SELECT forest_location from tbl_location WHERE id = 10)";}
		else
		{$qry1 = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10)";}
	}
	else
	{
		$qry1 = "SELECT * FROM tbl_contractor WHERE id = '$con_id'";
	}
	$rs = $db->fetchData($qry1);

	//if the result set is empty then the preview button is disabled
	$preview_btn_status = "";
	if(mysql_num_rows(mysql_query($qry1))==0)
	{
		$preview_btn_status = "disabled";
	}

				
	/*
	if(isset($_POST['register']))
	{
		$msg = $admContr->Contractor_Registration();
	}	
	*/
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ogun State Forestry Monitoring and Control System</title>
  
    <link rel="icon" type="image/png" href="../images/favicon.png">
     
  <link rel="stylesheet" href="../css/style.css">

  
  <script src="../jquery/1.5.1/jquery.min.js"></script>
  <script src="../js/slides.min.jquery.js"></script>
  
  
  
<script src="../jquery/1.4.1/jquery.js"></script>
<script type="text/javascript" src="../jquery/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="../jquery/1.7.2/themes/base/jquery-ui.css">

<script language="javascript" src="../js/calendar.js"></script>

<link rel="stylesheet" type="text/css" href="../css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link rel="stylesheet" type="text/css" href="../css/calender.css">
<link rel="stylesheet" type="text/css" href="../css/datePicker.css">

<script src="../js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../themes/base/ui.all.css">
<script type="text/javascript" src="../js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="../ui/ui.core.js"></script>
<script type="text/javascript" src="../ui/ui.datepicker.js"></script>

<script type="text/javascript" src="../js/cal.js"></script>







  
  <script language="JavaScript">
<!--
function previewAccount(form) {

form.action='update_transaction_status_preview.php';
form.submit();
}
//-->
</script> 
  
  

	
	<!--[if IE]>
    
    form.target='_blank';
    
    
    
	<script type="text/javascript">
	(function(){
	var html5elmeents = "address|article|aside|audio|canvas|command|datalist|details|dialog|figure|figcaption|footer|header|hgroup|keygen|mark|meter|menu|nav|progress|ruby|section|time|video".split('|');
	for(var i = 0; i < html5elmeents.length; i++){
	document.createElement(html5elmeents[i]);
	}
	}
	)();
	</script>
	<![endif]-->
</head>

<body>

  <?php 
	include('header_wrapper.php');
	?>

<div id="container">
<br/>
<fieldset>
   <form id="form" name="form" method="post" action="update_transaction__status_preview.php">
   
 <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td height="24" colspan="2" align="center"><h3>Set Transaction Status <strong><span class="green">Page</span></strong></h3></td>
    </tr>
  <tr>
    <td height="25" colspan="2" align="Left"><h4>Update Transaction Status for: <strong><span class="green"><?php echo $rs['name'];?></span></strong></h4></td>
  </tr>
  <tr>
    <td height="7" align="left">Status:</td>
    <td align="left">
    <select name="approval_status">
	<option value="">--- Select ---</option>
	<option value="1" <?php if($_POST['approval_status']==1){echo "selected";}?> >Approved</option>
	<option value="2" <?php if($_POST['approval_status']==2){echo "selected";}?>>Rejected</option>
   </select>
<!--<input type="text" name="amount_deposited" id="amount_deposited" value="<?php echo $_POST['amount_deposited'];?>"/>-->

</td>
  </tr>
  <tr>
    <td align="left">Remarks:</td>
    <td align="left"><textarea name="remarks" id="remarks" cols="35" rows="3"><?php echo $_POST['remarks'];?></textarea></td>
    </tr>
  <tr>
    <td width="22%" align="left">&nbsp;</td>
    <td width="377" align="left"><input type="hidden" name="transaction_id" id="transaction_id" value="<?php echo $transaction_id; ?>"></td>
  </tr>
  <tr>
    <td width="22%" align="left">&nbsp;</td>
    <td width="377" align="left"><input type="hidden" name="contractor_id" id="contractor_id" value="<?php echo $con_id; ?>"></td>
  </tr>
    
 <tr>
   <td align="left">&nbsp;</td>
   <td align="left">
     
     <!--<input type="submit" name="register" id="register" value="Register" />-->
     <input name="preview_account" type="button" value="Preview Now" onClick='previewAccount(this.form)' <?php echo $preview_btn_status;?>></td>
 </tr> 

  
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left"></td>
  </tr>
  
 </table>
 </form>
</fieldset>




</div><!--End Container -->
    
    
    
    
    
    <div id="widget-wrap" class="group">
		<div id="widget">
			<div id="links" class="group">
				<h4 class="white">Other <strong>Links</strong></h4>
				<ul>
		<li><a href="http://ogunstate.gov.ng/" target="_blank">Ogun State Official Website</a></li>
<li><a href="http://ogunstate.gov.ng/index.php/forestry" target="_blank">Ministry of Forestry Page</a></li>
<!--<li><a href="#">www.labzip.com</a></li>-->
					
				</ul>
			</div>
			
			<div id="blog">
			  <h4 class="footer-header white">Latest From The <strong>Ogun state</strong></h4>
				<img src="../images/blog.png" alt="blog" />
				<p class="title">Click below to know have more first hand information about Ogun state</p>
				<p class="date">
				<?php print date("j M Y, g.i a", time());
?></p>
				<p><a href="http://feeds.feedburner.com/OgunStateNews" target="_blank" class="readmore">read more</a></p>
			</div><!-- end blog -->
			
			<div id="location">
			  <h4 class="footer-header white">Our <strong>Location</strong></h4>
				<img src="../images/map.png" alt="map" />
				<?php 
	include('commisioner_details.php');
	?>    
			</div><!-- end location -->
		</div><!-- end widget -->
	</div> <!--! end widget-wrap -->
	
    <?php 
	include('footer.php');
	?>
    <!--
	<footer class="group">
		<div id="footer-left">
			<p>Copyright <a href="#" class="green">www.verdeinfotech.com</a> </br>
			Developed by <a href="../www.verdeinfotech.com" class="green">Verde Information Technologies</a></p>
		</div>
			
		<div id="footer-right">
			<ul>
				
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
				
		<a href="#header-wrap"><img src="../images/back-top.png" alt="back-top" class="back-top" /></a>		
	</footer>
    -->
	
	
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,	
			});
		});
</script>




<!--Start script
http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js
-->
	<script type="text/javascript" src="../jquery/1.5.2/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="../js/jquery.RotateImageMenu.js"></script>
<!-- End Script -->
</body>
</html>
