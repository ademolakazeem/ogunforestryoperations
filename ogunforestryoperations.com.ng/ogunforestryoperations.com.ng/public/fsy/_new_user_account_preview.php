<?php
//get user access level
session_start();
if(isset($_SESSION['levelaccess']))
{
	$acc_level = $_SESSION['levelaccess'];
}

if($acc_level == 1 )
{}
else
{
   header("location:no_permissions.php");
}
?>
<?php 
	include('authenticate.php');
require_once("../ClassesController/Utilities.php");
	$db = new DBConnecting();
	$adm = new AdminController();
	$admContr = new Contractor();
	
	$util = new Utilities();
	
	
	
	
$title = mysql_real_escape_string($_POST['title']);
$fname = mysql_real_escape_string($_POST['fname']);
$mname= mysql_real_escape_string($_POST['mname']);
$lname = mysql_real_escape_string($_POST['lname']);
$sex = mysql_real_escape_string($_POST['sex']);
$dob = mysql_real_escape_string($_POST['dob']);
$location = mysql_real_escape_string($_POST['location']);
$user = mysql_real_escape_string($_POST['user']);
$password = mysql_real_escape_string($_POST['password']);
$re_password = mysql_real_escape_string($_POST['re_password']);
$dep = mysql_real_escape_string($_POST['dep']);
$rank =mysql_real_escape_string($_POST['rank']);
$qua = mysql_real_escape_string($_POST['qua']);
$acclevel = mysql_real_escape_string($_POST['acclevel']);
$email =mysql_real_escape_string($_POST['email']);
$address = mysql_real_escape_string($_POST['address']);
$phone = mysql_real_escape_string($_POST['phone']);
	
$_SESSION['title']=$title;
$_SESSION['fname']=$fname;
$_SESSION['mname']=$mname;
$_SESSION['lname']=$lname;
$_SESSION['sex']=$sex;
$_SESSION['dob']=$dob;
$_SESSION['location']=$location;
$_SESSION['user']=$username;
$_SESSION['password']=$password;
$_SESSION['re_password']=$re_password;
$_SESSION['dep']=$dep;
$_SESSION['rank']=$rank;
$_SESSION['qua']=$qua;
$_SESSION['acclevel']=$acclevel;
$_SESSION['email']=$email;
$_SESSION['address']=$address;
$_SESSION['phone']=$phone;
		
	
	
	if(isset($_POST['register']))
	{
		$msg = $admContr->User_Account_Registration();
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

-->
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
    <td colspan="3" align="center"><h3>User Registration <strong><span class="green">Page</span></strong></h3>	</td>
    </tr>
  <tr>
    <td height="6" colspan="3" align="center"><?php if(isset($msg))echo $msg;?></td>
    </tr>
  <tr>
    <td height="7" align="left">Title:</td>
    <td colspan="2" align="left"><?php echo $title;?>
      <input name="title" type="hidden" id="title" value="<?php echo $title;?>"></td>
  </tr>
  <tr>
    <td align="left">Firstname:</td>
    <td><?php echo $fname;?>
      <input name="fname" type="hidden" id="fname" value="<?php echo $fname;?>"></td>
    <td width="210" rowspan="8">&nbsp;</td>
    </tr>
  <tr>
    <td align="left">Middlename:<br></td>
    <td align="left"><?php echo $mname;?>
      <input name="mname" type="hidden" id="mname" value="<?php echo $mname;?>"></td>
    </tr>
  <tr>
    <td align="left">Lastname:</td>
    <td align="left"><?php echo $lname;?>
      <input name="lname" type="hidden" id="lname" value="<?php echo $lname;?>"></td>
    </tr>
  <tr>
    <td align="left">Sex:</td>
    <td align="left"><?php echo $sex;?>
      <input name="sex" type="hidden" id="sex" value="<?php echo $sex;?>"></td>
    </tr>
  <tr>
    <td align="left">Date of Birth:</td>
    <td align="left"><?php echo $dob;?>
      <input name="dob" type="hidden" id="dob" value="<?php echo $dob;?>"></td>
    </tr>  
<tr>
    <td align="left">Location:</td>
    <td align="left"><?php echo $location;?>
      <input name="location" type="hidden" id="location" value="<?php echo $location;?>"></td>
    </tr>
  <tr>
    <td align="left">Username:</td>
    <td align="left"><?php echo $user;?>
      <input name="user" type="hidden" id="user" value="<?php echo $user;?>"></td>
    </tr>
  <tr>
    <td align="left">Password:</td>
    <td align="left"><?php echo $password;?>
      <input name="password" type="hidden" id="password" value="<?php echo $password;?>"></td>
    </tr>
  <tr>
    <td align="left">Re-Typed Password:</td>
    <td align="left"><?php echo $re_password;?>
      <input name="re_password" type="hidden" id="re_password" value="<?php echo $re_password;?>"></td>
    </tr>
    
 <tr>
    <td width="191" align="left">Department:</td>
    <td width="257" align="left"><?php echo $dep;?>
      <input name="dep" type="hidden" id="dep" value="<?php echo $dep;?>"></td>
    </tr> 
  <tr>
    <td align="left">Rank:</td>
    <td align="left"><?php echo $rank;?>
      <input name="rank" type="hidden" id="rank" value="<?php echo $rank;?>"></td>
    </tr>
  <tr>
    <td align="left">Qualification:</td>
    <td align="left"><?php echo $qua;?>
      <input name="qua" type="hidden" id="qua" value="<?php echo $qua;?>"></td>
    </tr> 
  <tr>
    <td align="left">Role:</td>
    <td colspan="2" align="left">
   <?php	
   if($acclevel)
  {
    $sql = mysql_query("SELECT * from tbl_roles WHERE id = $acclevel") or die(mysql_error());
	 $row_list=mysql_fetch_assoc($sql);
	 $name = $row_list['name'];
    echo $name;
  }
  ?>
      <input name="acclevel" type="hidden" id="acclevel" value="<?php echo $acclevel;?>"></td>
    </tr>
  <tr>
    <td align="left">Email:</td>
    <td colspan="2" align="left"><?php echo $email;?>
      <input name="email" type="hidden" id="email" value="<?php echo $email;?>"></td>
  </tr> 
  <tr>
    <td align="left">Address:</td>
    <td colspan="2" align="left"><?php echo $address;?>
      <input name="address" type="hidden" id="address" value="<?php echo $address;?>"></td>
    </tr>
  <tr>
  <tr>
    <td align="left">Phone:</td>
    <td colspan="2" align="left"><?php echo $phone;?>
      <input name="phone" type="hidden" id="phone" value="<?php echo $phone;?>"></td>
    </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td colspan="2" align="left">&nbsp;</td>
    </tr>
  <tr>
    <td align="right"><A HREF="_new_user_account.php" onClick="history.back();return false;">Go Back| </A></td>
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
