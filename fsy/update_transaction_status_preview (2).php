<?php
//get user access level
session_start(); 	
if(isset($_SESSION['levelaccess']))
{
	$acc_level = $_SESSION['levelaccess'];
}

if($acc_level != 4)
{
   header("location:no_permissions.php");
}
?>
<?php 
	include('authenticate.php');
require_once("../ClassesController/Utilities.php");
	$db = new DBConnecting();
	$adm = new AdminController();
	$admAcct = new Contractor();
	
	$util = new Utilities();
	
	
	
	$approval_status = mysql_real_escape_string($_POST['approval_status']);
	$remarks = mysql_real_escape_string($_POST['remarks']);
	$contractor_id = mysql_real_escape_string($_POST['contractor_id']);
	$transaction_id = mysql_real_escape_string($_POST['transaction_id']);
	
$_SESSION['approval_status']=$approval_status;
$_SESSION['remarks']=$remarks;
$_SESSION['contractor_id']=$contractor_id;
$_SESSION['transactor_id']=$transaction_id;

	
	
	if(isset($_POST['save']))
	{
		$msg = $admAcct->Contractor_Transaction_Status();
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
  

  
<script src="../jquery/1.4.1/jquery.js"></script>
<script type="text/javascript" src="../jquery/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="../jquery/1.7.2/themes/base/jquery-ui.css">



<link rel="stylesheet" type="text/css" href="../css/superfish.css" media="screen">



</head>

<body>

  <?php 
	include('header_wrapper.php');
	?>

<div id="container">
<br/>
<fieldset>
   <form id="form" name="form" method="post" action="">
   
 <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td colspan="2" align="center"><h3>Preview Update of Transaction Status<strong><span class="green">Page</span></strong></h3>
      <p>
        <?php if(isset($msg))echo $msg;?>
      </p></td>
    </tr>

  <tr>
    <td height="39" align="left">Status:<br></td>
    <td align="left"><?php if($approval_status == 1){echo "Approved";}elseif($approval_status == 2){echo "Rejected";}?>
      <input name="approval_status" type="hidden" id="approval_status" value="<?php echo $approval_status;?>"></td>
    </tr>
<tr>
    <td height="31" align="left">Remarks:</td>
    <td align="left">
      <?php echo $remarks;?>
      <input name="remarks" type="hidden" id="remarks" value="<?php echo $remarks; ?>"></td>
    </tr>
  <tr>
    <td width="22%" height="32" align="left">Contractor ID:</td>
    <td width="377" align="left"><?php echo $contractor_id;?>
      <input name="contractor_id" type="hidden" id="contractor_id" value="<?php echo $contractor_id;?>">
	<input name="transaction_id" type="hidden" id="transaction_id" value="<?php echo $transaction_id;?>">
</td>
  </tr>
    
 <tr>
   <td height="18" align="left">&nbsp;</td>
   <td align="left">
     
     <!--<input type="submit" name="register" id="register" value="Register" />--></td>
 </tr> 

  
  <tr>
    <td align="right"><A HREF="update_transaction_status.php" onClick="history.back();return false;">Go Back | </A></td>
    <td align="left"><input type="submit" name="save" id="save" value="Save Now" /></td>
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
