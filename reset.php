<?php
require_once("ClassesController/DBDirect.php");
require_once("ClassesController/AdminManager.php");
$db = new DBConnecting();
$adm = new AdminController();


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

    <!-- end header wrap
 <div style="color:orangered; align-content:center; "></div>

  <div style= "font-size: small color: #00A800 align-content:center"></div>-->
	
<div id="container">
<br/>



<div class="container">
				
				  <div class="content">

                      <table>
                          <tr>
                              <td><strong><?php if(isset($msg)) echo $msg; ?></strong> </td>
                          </tr>
                      </table>
                      <?php
                      //file reset.php
                      //title:Build your own Forgot Password PHP Script
                      //session_start();
                      $token=$_GET['token'];

                     // if(!isset($_POST['password'])){
                          $q="select email from tokens where token='".$token."' and used=0";
                          $r=mysql_query($q);
                          while($row=mysql_fetch_array($r))
                          {
                              $email=$row['email'];
                          }
                          If ($email!=''){
                              $_SESSION['email']=$email;

                          //added this
                              $pass=mysql_real_escape_string($_POST['password']);
                              $cpass=mysql_real_escape_string($_POST['cpassword']);
                              //$pass=$_POST['password'];
                              $email=$_SESSION['email'];
                              //if(!isset($pass)){
                              echo '<form name="frmReset" method="post" action="" autocomplete="off">
                          <fieldset>
                              <br /><br />
                              <legend style="color: #00A800">Provide your registered email</legend>
                                <table>

                                  <tr>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                      <td>&nbsp;</td>
                                      <td><label for="login">Password: </label></td>
                                      <td><input type="password" id="login" name="password" size="30" class="mO"/></td>
                                      <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                      <td>&nbsp;</td>
                                      <td><label for="login">Confirm Password: </label></td>
                                      <td><input type="password" id="login" name="cpassword" size="30" class="mO"/></td>
                                      <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td><input type="submit" style="margin: 10px 0 0 5px;" class="buttonReset" name="btnResetPassword" value="Reset My Password"/></td>
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
                      </form>';
                              //}

                              if(isset($_POST['password'])&& isset($_SESSION['email']))
                              {

                                  if( strlen($_POST['password']) < 8 ) {
                                      echo '<strong><div style= "font-size: medium; color:orangered; align-content:center">Password too short!</div></strong>';
                                  }

                                  else if( strlen($_POST['password']) > 20 ) {

                                      echo '<strong><div style= "font-size: medium; color:orangered; align-content:center">Password too long!</div></strong>';
                                  }

                                  else if( !preg_match("#[0-9]+#", $_POST['password']) ) {
                                      echo '<strong><div style= "font-size: medium; color:orangered; align-content:center">Password must include at least one number!</div></strong>';

                                  }


                                  else if( !preg_match("#[a-z]+#", $_POST['password']) ) {
                                      echo '<strong><div style= "font-size: medium; color:orangered; align-content:center">Password must include at least one letter!</div></strong>';
                                  }


                                  else if( !preg_match("#[A-Z]+#", $_POST['password']) ) {
                                      echo '<strong><div style= "font-size: medium; color:orangered; align-content:center">Password must include at least one CAPS!</div></strong>';
                                  }
                                  /** if( !preg_match("#\W+#", $password) ) {
                                  $error .= "Password must include at least one symbol!";
                                  }*/
                                  //
                                  else if($_POST['password'] != $_POST['cpassword']){

                                      echo '<strong><div style= "font-size: medium; color:orangered; align-content:center">Please make sure your password are match!</div></strong>';
                                  }
                                  else{


                                  $q="update tbl_users set password='".sha1($pass)."' where email='".$email."'";
                                  $r=mysql_query($q);
                                  if($r)mysql_query("update tokens set used=1 where token='".$token."'");
                                  echo '<strong><div style= "font-size: medium; color:green; align-content:center";>Your password is changed successfully!</div></strong>';

                                  if(!$r)
                                      echo '<strong><div style= "font-size: medium; color:orangered; align-content:center">An error occurred from database!</div></strong>';
                                  }

                              }

                              //end added this





                          }
                          else
                              echo '<strong><div style= "font-size: medium; color:orangered; align-content:center">Invalid link or Password already changed!</div></strong>';

                     // }


                      ?>















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

	




</body>
</html>
