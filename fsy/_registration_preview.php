<?php 

//page permission id = 1, permission name =  add contractors
$page_permission_id = 1;

include('authenticate.php');
require_once("../ClassesController/Utilities.php");
$db = new DBConnecting();
$adm = new AdminController();
$admContr = new Contractor();
	
$util = new Utilities();

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
	
	
	
$name = mysql_real_escape_string($_POST['name']);
//$tin = mysql_real_escape_string(strtoupper($_POST['tin']));
$hammer_number=mysql_real_escape_string(strtoupper($_POST['hammer_number']));
$crn= mysql_real_escape_string(strtoupper($_POST['company_reg_number']));
$phone = mysql_real_escape_string($_POST['phone']);
$address = mysql_real_escape_string($_POST['address']);
$business_area = mysql_real_escape_string($_POST['business_area']);
$referee1_name = mysql_real_escape_string($_POST['referee1_name']);
$referee1_address =mysql_real_escape_string($_POST['referee1_address']);
$referee1_phone = mysql_real_escape_string($_POST['referee1_phone']);
$referee2_name = mysql_real_escape_string($_POST['referee2_name']);
$referee2_address =mysql_real_escape_string($_POST['referee2_address']);
$referee2_phone = mysql_real_escape_string($_POST['referee2_phone']);
$picture = mysql_real_escape_string($_POST['pp']);
	
$_SESSION['name']=$name;
//$_SESSION['tin']=$tin;
$_SESSION['hammer_number']=$hammer_number;
$_SESSION['crn']=$crn;
$_SESSION['phone']=$phone;
$_SESSION['address']=$address;
$_SESSION['business_area']=$business_area;
$_SESSION['referee1_name']=$referee1_name;
$_SESSION['referee1_address']=$referee1_address;
$_SESSION['referee1_phone']=$referee1_phone;
$_SESSION['referee2_name']=$referee2_name;
$_SESSION['referee2_address']=$referee2_address;
$_SESSION['referee2_phone']=$referee2_phone;
$_SESSION['picture']=$picture;
		
	
	
	if(isset($_POST['register']))
	{
		$msg = $admContr->Contractor_Registration();
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
	<script language="JavaScript">
<!--
function formback(form) {

form.action='_registration_preview.php';
form.submit();
}
//-->
</script> 
	<!--[if IE]>
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
<fieldset>
   <form id="form" name="form" method="post" action="" enctype="multipart/form-data">
   
 <table width="74%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td colspan="3" align="center"><h3>Registration <strong><span class="green">Page</span></strong></h3>	</td>
    </tr>
  <tr>
    <td height="6" colspan="3" align="center"><?php if(isset($msg))echo $msg;?></td>
    </tr>
  <tr>
    <td height="7" align="left">Contractor's Name:*</td>
    <td colspan="2" align="left"><?php echo $name;?>
      <input name="name" type="hidden" id="name" value="<?php echo $name;?>"></td>
  </tr>
  <!--<tr>
    <td align="left">Tax Identification Number:</td>
    <td><?php echo $tin;?>
      <input name="tin" type="hidden" id="tin" value="<?php echo $tin;?>"></td>
    <td width="210" rowspan="9">&nbsp;</td>
    </tr>
    -->
  <tr>
    <td align="left">Hammer Number:</td>
    <td><?php echo $hammer_number;?>
      <input name="hammer_number" type="hidden" id="hammer_number" value="<?php echo $hammer_number;?>"></td>
  </tr>
  <tr>
    <td align="left">Company Registration Number:<br></td>
    <td align="left"><?php echo $crn;?>
      <input name="crn" type="hidden" id="crn" value="<?php echo $crn;?>"></td>
    </tr>
  <tr>
    <td align="left">Contractor's Phone Number:*</td>
    <td align="left"><?php echo $phone;?>
      <input name="phone" type="hidden" id="phone" value="<?php echo $phone;?>"></td>
    </tr>
  <tr>
    <td align="left">Address:</td>
    <td align="left"><?php echo $address;?>
      <input name="address" type="hidden" id="address" value="<?php echo $address;?>"></td>
    </tr>
  <tr>
    <td align="left">Business Area:</td>
    <td align="left"><?php echo $business_area;?>
      <input name="business_area" type="hidden" id="business_area" value="<?php echo $business_area;?>"></td>
    </tr>
    
 <tr>
    <td width="191" align="left">Referee One Name:</td>
    <td width="257" align="left"><?php echo $referee1_name;?>
      <input name="referee1_name" type="hidden" id="referee1_name" value="<?php echo $referee1_name;?>"></td>
    </tr> 
  <tr>
    <td align="left">Referee One Address:</td>
    <td align="left"><?php echo $referee1_address;?>
      <input name="referee1_address" type="hidden" id="referee1_address" value="<?php echo $referee1_address;?>"></td>
    </tr>
  <tr>
    <td align="left">Referee One Phone:</td>
    <td align="left"><?php echo $referee1_phone;?>
      <input name="referee1_phone" type="hidden" id="referee1_phone" value="<?php echo $referee1_phone;?>"></td>
    </tr> 
  <tr>
    <td align="left">Referee Two Name:</td>
    <td colspan="2" align="left"><?php echo $referee2_name;?>
      <input name="referee2_name" type="hidden" id="referee2_name" value="<?php echo $referee2_name;?>"></td>
    </tr>
  <tr>
    <td align="left">Referee Two Address:</td>
    <td colspan="2" align="left"><?php echo $referee2_address;?>
      <input name="referee2_address" type="hidden" id="referee2_address" value="<?php echo $referee2_address;?>"></td>
  </tr> 
  <tr>
    <td align="left">Referee Two Phone:</td>
    <td colspan="2" align="left"><?php echo $referee2_phone;?>
      <input name="referee2_phone" type="hidden" id="referee2_phone" value="<?php echo $referee2_phone;?>"></td>
    </tr>
  <tr>
    <td align="left">Upload Picture:</td>
 <td colspan="2" align="left"><?php echo $picture;?>
      <input name="picture" type="hidden" id="picture" value="<?php echo $picture;?>"></td>
  </tr> 
  <tr>
    <td align="left">&nbsp;</td>
    <td colspan="2" align="left">&nbsp;</td>
    </tr>
  <tr>
    <td align="right"><A HREF="_registration.php" onClick="history.back();return false;">Go Back| </A></td>
    <td colspan="2" align="left"><input type="submit" name="register" id="register" value="Register Now" /></td>
  </tr> 

  
  <tr>
    <td align="left">&nbsp;</td>
    <td colspan="2" align="left"></td>
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
