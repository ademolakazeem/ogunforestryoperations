<?php 

//page permission id = 6, permission name =  administer contractor accounts
$page_permission_id = 6;

require_once("restrict.php");
require_once("../ClassesController/DBDirect.php");
require_once("../ClassesController/AdminContractor.php");
require_once("../ClassesController/AdminManager.php");
	
$db = new DBConnecting();
$adm = new AdminController();
$upContractor_account = new Contractor();


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
	//$rs = $db->fetchData($qry);
	/*
	$con_id = $_GET['con_id'];
	$qry = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id'";
	$exqry = mysql_query($qry);
	$rs = mysql_fetch_array($exqry);
	
	$qry1 = "SELECT * FROM tbl_contractor_account_history  WHERE contractor_id = '$con_id' ORDER BY created_date DESC LIMIT 1";
	$exqry1 = mysql_query($qry1);
	$rs1 = mysql_fetch_array($exqry1);
	*/
	
	if(isset($_POST['update']))
	{
		$msg = $upContractor_account->Update_Contractor_Account_By_Admin();
	}
	
		
	
	

	$con_id = $_GET['con_id'];

	//building queries based on the access level
	if($acc_level == 2)
	{
		$qry = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id' && contractor_id in (select id from tbl_contractor where business_area = '$location')";
		$qry1 = "SELECT * FROM tbl_contractor_account_history  WHERE contractor_id = '$con_id' && contractor_id in (select id from tbl_contractor where business_area = '$location')
ORDER BY created_date DESC LIMIT 1";
	}
	if($acc_level == 3)
	{//hqusers with acc level = 3 should not see information about Area J4 Corporation with location id = 10
		$qry = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id' && contractor_id in (select id from tbl_contractor WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";
		$qry1 = "SELECT * FROM tbl_contractor_account_history  WHERE contractor_id = '$con_id' && contractor_id in (select id from tbl_contractor where business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))

ORDER BY created_date DESC LIMIT 1";
	}
	else
	{
		$qry = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id'";
		$qry1 = "SELECT * FROM tbl_contractor_account_history  WHERE contractor_id = '$con_id' ORDER BY created_date DESC LIMIT 1";
	}

	$update_btn_status = ""; //i.e. protecting against station users entering actual ids in the url and updating what isnt in their station
	$exqry = mysql_query($qry);
	$rs = mysql_fetch_array($exqry);


	
	$exqry1 = mysql_query($qry1);
	$rs1 = mysql_fetch_array($exqry1);

	if(mysql_num_rows($exqry) == 0 && mysql_num_rows($exqry1)==0)
	{
		$update_btn_status = "disabled";
	}

	

	
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

<!--
	<div id="header-wrap">
		<header class="group">
			<h2><a href="../index.php" title="burstudio">Forestry Monitoring</a></h2>
			<div id="call">
				<h3>Ogun State</h3>
				<h4 class="green"><strong>Government</strong></h4>
			</div>
			<nav class="group">
				<ul>
					<li class="home"><a href="#" title="">Home</a></li>
					<li><a href="#" title="">About Us</a></li>
					<li><a href="#" title="">Contact Us</a></li>
					<li><a href="#" title="">Logout</a></li>
					<li class="last">
						<div>
							<input type="text" name="search" placeholder="search" />
							<input type="submit" name="search" value="go" class="search"/>
						</div>
					</li>
				</ul>
			</nav>
		</header>
	</div>
    -->
    <!-- end header wrap -->
	
	
<div id="container">
<br/>
<h3>Editing <?php echo $rs1['name'];?>'s Account Information</h3>
               	    <p>
               	      <?php require_once('head_link_account.php'); ?>
               	    </p>
                    <br/>

   <br/>
   &nbsp;




<fieldset>
   <form id="form" name="form" method="post" action="">
    <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td colspan="2" align="center"><h3>Contractor Update  <strong><span class="green">Page</span></strong></h3>
      <p>
        <?php if(isset($msg))echo $msg;?>
      </p></td>
    </tr>
  <tr>
    <td width="22%" height="38" align="left">Contractor's Current Balance:</td>
    <td align="left">N<?php echo $rs['amount_deposited'];?>
      <input name="current_balance" type="hidden" id="current_balance" value="<?php echo $rs['amount_deposited']; ?>"></td>
    </tr>
  <tr>
    <td height="38" align="left">Last Amount Deposited:</td>
    <td><input type="text" name="last_amount_deposited" id="last_amount_deposited" value="<?php echo $rs1['amount_deposited'];?>"/>
      <input name="h_amount_deposited" type="hidden" id="h_amount_deposited" value="<?php echo $rs1['amount_deposited'];?>"></td>
    </tr>
  <tr>
    <td height="38" align="left">Teller Number:<br></td>
    <td align="left"><input type="text" name="last_teller_number" id="last_teller_number" value="<?php echo $rs1['teller_number'];?>"/>
      <input name="h_teller_number" type="hidden" id="h_teller_number" value="<?php echo $rs1['teller_number']; ?>"></td>
    </tr>
  <tr>
    <td height="35" align="left">Bank Name:</td>
    <td align="left"><input type="text" name="last_bank_name" id="last_bank_name" value="<?php echo $rs1['bank_name'];?>"/>
      <input name="h_bank_name" type="hidden" id="h_bank_name" value="<?php echo $rs1['bank_name']; ?>"></td>
    </tr>
  <tr>
    <td height="39" align="left">Account Number:</td>
    <td align="left"><input type="text" name="last_account_number" id="last_account_number" value="<?php echo $rs1['account_number'];?>"/>
      <input name="h_account_number" type="hidden" id="h_account_number" value="<?php echo $rs1['account_number']; ?>"></td>
    </tr>
  <tr>
    <td height="40" align="left">Payment Date:</td>
    <td align="left"><input type="text" name="last_payment_date" id="last_payment_date" value="<?php echo $rs1['payment_date'];?>"/>
      <input name="h_payment_date" type="hidden" id="h_payment_date" value="<?php echo $rs1['payment_date']; ?>"></td>
    </tr>
    
 <tr>
    <td width="22%" height="36" align="left">Contractor ID:</td>
    <td width="377" align="left"><?php echo $rs1['contractor_id']; ?>      <input type="hidden" name="contractor_id" id="contractor_id" value="<?php echo $rs1['contractor_id']; ?>">
      <input type="hidden" name="h_created_date" id="h_created_date" value="<?php echo $rs1['created_date']; ?>">
      <input type="hidden" name="h_maker_id" id="h_maker_id" value="<?php echo $rs1['maker_id']; ?>"></td>
  </tr> 
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr> 
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">
      
      <!--<input type="submit" name="register" id="register" value="Register" />-->
      
      <input name="update" id="update" type="submit" value="Update Now"  <?php echo $update_btn_status; ?> ></td>
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
				<?php include('commisioner_details.php'); ?>
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
