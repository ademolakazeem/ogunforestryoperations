<?php
//session_start();
//include "connect.php"; //connects to the database
//require_once("fsy/restrict.php");
require_once("ClassesController/DBDirect.php");
require_once("ClassesController/AdminManager.php");

//echo phpinfo();
$db = new DBConnecting();
$adm = new AdminController();
if(isset($_POST['btnlogin'])) {
    $email = mysql_real_escape_string($_POST['email']);
    $q = "select email from tbl_users where email='" . $email . "'";
    $r = mysql_query($q);
    $n = mysql_num_rows($r);
    if (empty($email)) {
        $msg = "Please provide email address";
       // echo "Please provide email address";
        //exit();
        /*echo'<form action="forgotpassword.php">
        Enter Your Email Id:
                                 <input type="text" name="email" />
                                <input type="submit" value="Reset My Password" />
                                 </form>'; exit();
        */

    }//end Empty


//$email=$_GET['email'];
//include("settings.php");
//connect();


   else if ($n == 0) {
        $msg = "This Email is not registered";
        //echo "This Email is not registered";
       // die();
    }//End wrong email
    else if($n>=1){
    $token = $adm->getRandomString(10);
      //  echo "I got here and token is:".$token;
    $q = "insert into tokens (token,email) values ('" . $token . "','" . $email . "')";
    mysql_query($q);

    //getString();
    //echo "Here we want to get email before calling mailresetlink.".$email;
    //if (isset($_GET['email'])) $adm->mailresetlink($email, $token);
        if (isset($email)) $msg=$adm->mailresetlink($email, $token);
    }
}

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ogun State Forestry Monitoring and Control System</title>
  
  <!--Comment here-->
  
  
  <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="fsy/style.css" />



  <script src="fsy/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="fsy/js/cufon-yui.js" type="text/javascript"></script>
<script src="fsy/js/cufon-replace.js" type="text/javascript"></script>
<script src="fsy/js/AvantGarde_Bk_BT_400.font.js" type="text/javascript"></script>
<script src="fsy/js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<script src="fsy/js/jcarousellite.js" type="text/javascript"></script>
<script type="text/javascript">

	$(document).ready(function(){
	
	  $("a.new_window").attr("target", "_blank");
	  
	  //carousel
	  $(".carousel").jCarouselLite({
		  btnNext: ".next",
		  btnPrev: ".prev"
	  });
	});
		
</script>
<script type="text/javascript" src="fsy/chromejs/chrome.js">

/***********************************************
* Chrome CSS Drop Down Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">
	ie_png.fix('.png, .carousel-box .next img, .carousel-box .prev img');
</script>
<link href="ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="js/datetimepicker_css.js"></script>


<style type="text/css">
<!--
@import url("fsy/longtable-style.css");
-->
</style>

  <link rel="stylesheet" href="css/style.css">

  
  <script src="jquery/1.5.1/jquery.min.js"></script>
  <script src="js/slides.min.jquery.js"></script>
	

</head>

<body>

  <div id="header-wrap">
<header class="group">
<h2><a href="../index.php" title="Forest Monitoring System">Forestry Monitoring</a></h2>
			<div id="call">
				<h3>Ogun State</h3>
				<h4 class="green"><strong>Government</strong></h4>
			
            </div>
  
  <?php 
			include('header-out.php');
?>
  


	</div>

    <!-- end header wrap -->
	
	
<div id="container">
<br/>



<div class="container">
				
				  <div class="content">
                      <!--id="login-form" -->

               	     <form name="frmForgotPassword" method="post" action="forgotPassword.php" autocomplete="on">
                          <fieldset>
                              <br /><br />
                              <legend style="color: #00A800">Provide your registered email</legend>







                             <table>
                                 <tr>
                                     <th colspan="4"><div class="message"><b><?php if(isset($msg)) echo $msg; ?></b></div> </th>
                                 </tr>
                                 <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                     <td><label for="login">Email: </label></td>
                                     <td><input type="text" id="login" name="email" size="30" class="mO"/></td>
                                     <td><input type="submit" style="margin: -15px 0 0 5px;" class="buttonReset" name="btnlogin" value="Reset My Password"/></td>
                                     <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                             </table>

                          </fieldset>
                      </form>



               	   		<br />
<div class="wrapper"></div>
				  </div>

</div>







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
				<img src="images/blog.png" alt="blog" />
				<p class="title">Click below to know have more first hand information about Ogun state</p>
				<p class="date">
				<?php print date("j M Y, g.i a", time());
?></p>
				<p><a href="http://feeds.feedburner.com/OgunStateNews" target="_blank" class="readmore">read more</a></p>
			</div><!-- end blog -->
			
			<div id="location">
			  <h4 class="footer-header white">Our <strong>Location</strong></h4>
				<img src="images/map.png" alt="map" />
				<?php include('fsy/commisioner_details.php'); ?>
			</div><!-- end location -->
		</div><!-- end widget -->
	</div> <!--! end widget-wrap -->
	
   <footer class="group">

			
		<?php
		include('outer_footer.php');
		?>
				
		<a href="#header-wrap"><img src="images/back-top.png" alt="back-top" class="back-top" /></a>		
	</footer>
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
	<script type="text/javascript" src="jquery/1.5.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
<!-- End Script -->
</body>
</html>
