<?php 

//page permission id = 5, permission name =  add contractor account
$page_permission_id = 5;

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

	//level 2 can add accounts for their location only
	if($acc_level == 2)
	{
		$qry1 = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && business_area='$location'";
		$rs = $db->fetchData($qry1);
	
		//$con_id = $_GET['con_id'];
	$qry = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id' && contractor_id in (select id from tbl_contractor WHERE business_area = '$location')";
		$rs1 = $db->fetchData($qry);
	}
	if($acc_level == 3)
	{
		//hqusers with acc level = 3 should not see information about Area J4 Corporation with location id = 10
		$qry1 = "SELECT * FROM tbl_contractor WHERE id = '$con_id' && (business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";
		$rs = $db->fetchData($qry1);
	
		//$con_id = $_GET['con_id'];
	$qry = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id' && contractor_id in (select id from tbl_contractor WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";
		$rs1 = $db->fetchData($qry);
	}
	else
	{
		$qry1 = "SELECT * FROM tbl_contractor WHERE id = '$con_id'";
		$rs = $db->fetchData($qry1);
	
		//$con_id = $_GET['con_id'];
	$qry = "SELECT * FROM tbl_contractor_account WHERE contractor_id = '$con_id'";
		$rs1 = $db->fetchData($qry);
	}

	//if the result set is empty then the preview button is disabled
	$preview_btn_status = "";
	if(mysql_num_rows(mysql_query($qry)) == 0 && mysql_num_rows(mysql_query($qry1))==0)
	{
		$preview_btn_status = "disabled";
	}

	$no_rows = mysql_num_rows($qry);
				
				if ($rs1 == 0) 
				{
					$rs1['amount_deposited']='0.00';
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

form.action='_new_contractor_account_preview.php';
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
   <form id="form" name="form" method="post" action="_new_contractor_account_preview.php">
   
 <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td height="24" colspan="2" align="center"><h3>New Contractor Account <strong><span class="green">Page</span></strong></h3></td>
    </tr>
  <tr>
    <td height="25" colspan="2" align="Left"><h4>The  Account Process for: <strong><span class="green"><?php echo $rs['name'];?></span></strong></h4></td>
  </tr>
  <tr>
    <td width="22%" height="19" align="left">Contractor's Current Balance:</td>
    <td align="left">N<?php echo $rs1['amount_deposited'];?>
      <input name="current_balance" type="hidden" id="current_balance" value="<?php echo $rs1['amount_deposited']; ?>"></td>
    </tr>
  <tr>
    <td height="7" align="left">Amount Deposited:</td>
    <td align="left"><input type="text" name="amount_deposited" id="amount_deposited" value="<?php echo $_POST['amount_deposited'];?>"/></td>
  </tr>
  <tr>
    <td align="left">Teller Number:</td>
    <td><input type="text" name="teller_number" id="teller_number" value="<?php echo $_POST['teller_number'];?>"/></td>
    </tr>
  <tr>
    <td align="left">Bank Name:<br></td>
    <td align="left"><input type="text" name="bank_name" id="bank_name" value="<?php echo $_POST['bank_name'];?>"/></td>
    </tr>
  <tr>
    <td align="left">Account Number:</td>
    <td align="left"><input type="text" name="account_number" id="account_number" value="<?php echo $_POST['account_number'];?>"/></td>
    </tr>
  <tr>
    <td align="left">Payment Date:</td>
    <td align="left"><label for="day"></label>
      
      <!--
      <select name="day" id="day">
       <option>Day</option>
       <?php for ($i=1; $i<=31; $i++)
	   {
	   echo "<option value=".$i.">".$i."</option>";
	   }
      ?>
      </select>
      <select name="month" id="month">
        <option>Month</option>
      
	  <option value="1">Jan</option>
      <option value="2">Feb</option>
      <option value="3">Mar</option>
      <option value="4">Apr</option> 
      <option value="5">May</option>
      <option value="6">Jun</option>
      <option value="7">Jul</option>
      <option value="8">Aug</option>
       <option value="9">Sep</option>
      <option value="10">Oct</option>
      <option value="11">Nov</option>
      <option value="12">Dec</option>
      
      
	  
      </select>
      <select name="year" id="year">
        <option>Year</option>
        <?php for ($i=2010; $i<=2070; $i++)
	   {
	   echo "<option value=".$i.">".$i."</option>";
	   }
      ?>
      </select>
      -->
      
      
      
      
      
      <?php
//get class into the page
require_once("../ClassesController/tc_calendar.php");
/*
	  $myCalendar = new tc_calendar("payment_date", true, false);
	  $myCalendar->setIcon("../images/calender/iconCalendar.gif");
	  $myCalendar->setDate(date("d"), date("m"), date("Y"));
	  $myCalendar->setPath("./");
	  $myCalendar->setYearInterval(1970, date("Y"));
	  $myCalendar->dateAllow("1970-01-01", date("Y-m-d"));
	  $myCalendar->setAlignment("left", "bottom");
	  $myCalendar->writeScript();
	  */ 

//instantiate class and set properties
$myCalendar = new tc_calendar("payment_date", true);
$myCalendar->setIcon("../images/calender/iconCalendar.gif");
$myCalendar->setDate(1, 1, 2012);

//output the calendar
$myCalendar->writeScript();	 
?>
      
      </td>
    </tr>
  <tr>
    <td width="22%" align="left">&nbsp;</td>
    <td width="377" align="left"><input type="hidden" name="contractor_id" id="contractor_id" value="<?php echo $con_id; ?>"></td>
  </tr>
    
 <tr>
   <td align="left">&nbsp;</td>
   <td align="left">
     
     <!--<input type="submit" name="register" id="register" value="Register" />-->
     <input name="preview_account" type="button" value="Preview Now" onClick='previewAccount(this.form)' <?php echo $preview_btn_status; ?>></td>
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
