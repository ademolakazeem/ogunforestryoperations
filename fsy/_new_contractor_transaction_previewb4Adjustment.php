<?php 

//page permission id = 9, permission name =  add contractor transaction
$page_permission_id = 9;

include('authenticate.php');
require_once("../ClassesController/Utilities.php");
$db = new DBConnecting();
$adm = new AdminController();
$admAcct = new Contractor();
	
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
	
	$tree_type = mysql_real_escape_string($_POST['tree_type']);
	$quantity = mysql_real_escape_string($_POST['quantity']);
	$reserved_location = mysql_real_escape_string($_POST['reserved_location']);
	$attended_by = mysql_real_escape_string($_POST['attended_by']);
	$authorized_by = mysql_real_escape_string($_POST['authorized_by']);
	$month = mysql_real_escape_string($_POST['month']);
	$year = mysql_real_escape_string($_POST['year']);
$date = isset($_REQUEST["date"]) ? $_REQUEST["date"] : "";
	$contractor_id = mysql_real_escape_string($_POST['contractor_id']);
	$current_balance=$_POST['current_balance'];
	
$_SESSION['tree_type']=$tree_type;
$_SESSION['quantity']=$quantity;
$_SESSION['reserved_location']=$reserved_location;
$_SESSION['attended_by']=$attended_by;
$_SESSION['authorized_by']=$authorized_by;
$_SESSION['month']=$month;
$_SESSION['year']=$year;
$_SESSION['date']=$date;
$_SESSION['contractor_id']=$contractor_id;
$_SESSION['current_balance']=$current_balance;

$_SESSION['new_amount']=$current_balance+$amount_deposited;
	
	
	if(isset($_POST['save']))
	{
		$msg = $admAcct->Contractor_Transaction();
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
    <td colspan="2" align="center"><h3>Preview Transaction <strong><span class="green">Page</span></strong></h3>
      <p>
        <?php if(isset($msg))echo $msg;?>
      </p></td>
    </tr>
  <tr>
    <td width="22%" height="33" align="left">Current Balance:</td>
    <td align="left"><?php

        $current_balance;
        echo "&#8358;".number_format($current_balance, 2);

        ?>      <input name="current_balance" type="hidden" id="current_balance" value="<?php echo $current_balance; ?>"></td>
    </tr>
  <tr>
    <td height="34" align="left">Tree Type:</td>
    <td align="left">
<?php	
    $sql = mysql_query("SELECT * from tbl_tree WHERE id = '$tree_type'") or die(mysql_error());
	 $row_list=mysql_fetch_assoc($sql);
	 $tariff =  $row_list['tariff'];
         $tree_name = $row_list['name'];
    echo $tree_name;?>
      <input name="tree_type" type="hidden" id="type" value="<?php echo $tree_type;?>"></td>
  </tr>
  <tr>
    <td height="38" align="left">Quantity:</td>
    <td> <?php echo $quantity;?>      <input name="quantity" type="hidden" id="quantity" value="<?php echo $quantity;?>"></td>
    </tr>
  <tr>
    <td height="39" align="left">Reserved Location:<br></td>
    <td align="left"><?php echo $reserved_location;?>
      <input name="reserved_location" type="hidden" id="reserved_location" value="<?php echo $reserved_location;?>"></td>
    </tr>
<tr>
    <td height="31" align="left">Date:</td>
    <td align="left"><label for="day"></label>
      <?php echo $date;?>
      <input name="date" type="hidden" id="date" value="<?php echo $date; ?>"></td>
    </tr>
  <tr>
    <td width="22%" height="32" align="left">Contractor ID:</td>
    <td width="377" align="left"><?php echo $contractor_id;?>
      <input name="contractor_id" type="hidden" id="contractor_id" value="<?php echo $contractor_id;?>"></td>
  </tr>
    
 <tr>
   <td height="18" align="left">&nbsp;</td>
   <td align="left">
     
     <!--<input type="submit" name="register" id="register" value="Register" />--></td>
 </tr> 

  
  <tr>
    <td align="right"><A HREF="_new_contractor_transaction.php" onClick="history.back();return false;">Go Back | </A></td>
    <td align="left">&nbsp;<input type="submit" name="save" id="save" value="Save Now" /></td>
  </tr>
     <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
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
