
<?php 
	include('authenticate.php');
	$db = new DBConnecting();
	$adm = new AdminController();
	$admContr = new Contractor();
	/*
	if(isset($_POST['register']))
	{
		$msg = $admContr->Contractor_Registration();
	}	*/
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ogun State Forestry Monitoring and Control System</title>
  
  
  <script language="JavaScript">
<!--
function formpreview(form) {

form.action='_transaction_preview.php';
form.submit();
}
//-->
</script> 
  
  
  
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
<fieldset>
   <form id="form" name="form" method="post" action="_registration_preview.php">
   
 <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td colspan="2" align="center"><h3>New Transaction <strong><span class="green">Page</span></strong></h3>	</td>
    </tr>
  <tr>
    <td width="22%" height="18" align="left">Contractor's Name:</td>
    <td align="left"><input type="text" name="name" id="name" value="<?php echo $_POST['name'];?>"/></td>
    </tr>
  <tr>
    <td align="left">Tax Identification Number:</td>
    <td><input type="text" name="tin" id="tin" value="<?php echo $_POST['tin'];?>"/></td>
    </tr>
  <tr>
    <td align="left">Company Registration Number:<br></td>
    <td align="left"><input type="text" name="company_reg_number" id="company_reg_number" value="<?php echo $_POST['company_reg_number'];?>"/></td>
    </tr>
  <tr>
    <td align="left">Contractor's Phone Number:</td>
    <td align="left"><input type="text" name="phone" id="phone" value="<?php echo $_POST['phone'];?>"/></td>
    </tr>
  <tr>
    <td align="left">Address:</td>
    <td align="left"><textarea name="address" id="address" cols="35" rows="3"><?php echo $_POST['address'];?></textarea>
      </td>
    </tr>
  <tr>
    <td align="left">Business Area:</td>
    <td align="left"><input type="text" name="business_area" id="business_area" value="<?php echo $_POST['business_area'];?>"/></td>
    </tr>
    
 <tr>
    <td width="203" align="left">Referee One Name:</td>
    <td width="377" align="left"><input type="text" name="referee1_name" id="referee1_name" value="<?php echo $_POST['referee1_name'];?>"/></td>
  </tr> 
  <tr>
    <td align="left">Referee One Address:</td>
    <td align="left"><textarea name="referee1_address" id="address2" cols="35" rows="3"><?php echo $_POST['referee1_address'];?></textarea></td>
    </tr>
  <tr>
    <td align="left">Referee One Phone:</td>
    <td align="left"><input type="text" name="referee1_phone" id="referee1_phone" value="<?php echo $_POST['referee1_ phone'];?>"/></td>
  </tr> 
  <tr>
    <td align="left">Referee Two Name:</td>
    <td align="left"><input type="text" name="referee2_name" id="referee2_name" value="<?php echo $_POST['referee2_name'];?>"/></td>
    </tr>
  <tr>
    <td align="left">Referee Two Address:</td>
    <td align="left"><textarea name="referee2_address" id="referee1_address" cols="35" rows="3"><?php echo $_POST['referee2_address'];?></textarea></td>
  </tr> 
  <tr>
    <td align="left">Referee Two Phone:</td><td align="left"><input type="text" name="referee2_phone" id="referee2_phone" value="<?php echo $_POST['referee2_phone']; ?>"/></td>
    </tr>
  <tr>
    <td align="left">Upload Picture:</td>
    <td align="left"><input type="file" name="pp" id="pp" value="<?php echo $_POST['pp'];?>"/></td>
  </tr> 
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">
    
    <!--<input type="submit" name="register" id="register" value="Register" />-->
    
    <input name="preview_reg" type="button" value="Preview" onclick='formpreview(this.form)'>
    
    
    </td>
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
