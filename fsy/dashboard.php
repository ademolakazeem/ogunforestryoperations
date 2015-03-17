<?php
	require_once('authenticate.php');
	$db = new DBConnecting();
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

<?php
//get user access level
if(isset($_SESSION['levelaccess']))
{
	$acc_level = $_SESSION['levelaccess'];
}
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
 <table width="100%" border="0" cellspacing="10" cellpadding="5">
  <tr>
    <td colspan="4" align="center"><h3>Administrative <strong><span class="green">Dashboard</span></strong></h3>	</td>
    </tr>
<?php
$row_nos = 1; //monitoring the icons/menu on a row  -->essentially, we require four items per row regardless of the user in question

$permission_id = 1; //add contractor
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>
<td  height="114" align="center"><a href="_registration.php"><img src="../images/new.jpg" width="89" height="81">
      <br />New Registration</a><p>&nbsp;</p></td>
<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 2; //administer contractor
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>
    <td  align="center"><a href="view_contractor.php"><img src="../images/Edit-Male-User.png" alt="" width="61" height="77"><br>
      Administer Registration</a><p>&nbsp;</p></td>
<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 3; //view contractor account history
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>
    <td align="center"><a href="view_contractor_account_history.php"><img src="../images/web.png" alt="" width="67" height="74"><br>
      View All Account History</a><p>&nbsp;</p></td>
<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 4; //view contractor reports
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>
    <td align="center"><a href="show_contractor_report.php"><img src="../images/contractorreport.png" width="74" height="74"><br>
      Contractor's Reports</a><p>&nbsp;</p></td>
<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 5; //add contractor account
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>
    <td align="center"><a href="show_contractor_for_account.php"><img src="../images/new1.jpg" alt="" width="83" height="78">
      <br>
      New Account </a></td>
<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 6; //administer contractor accounts
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>
 <td align="center"><a href="view_contractor_account.php"><img src="../images/Edit1.jpg" alt="" width="82" height="75"><br>
Administer Account</a><br></td>
<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 7; //view current accounts
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>

    <td align="center"><a href="view_contractor_current_account.php"><img src="../images/lens.jpg" alt="" width="88" height="68"><br>
View All Current Accounts</a><p>&nbsp;</p></td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 8; //view contractor account reports
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>

    <td align="center"><a href="show_contractor_account_report.php"><img src="../images/accountreport.png" width="77" height="77"><br>
      Contractors' Account Reports</a><p>&nbsp;</p></td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 9; //add contractor transaction
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>

    <td align="center"><a href="show_contractor_for_transaction.php"><img src="../images/new_transaction.png" alt="" width="89" height="76"><br>
New Transaction</a><p>&nbsp;</p></td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 10; //administer contractor transactions
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>

    <td align="center"><a href="view_contractor_transaction.php"><img src="../images/Edit.jpg" alt="" width="79" height="85"><br> 
      Administer Transaction</a><p>&nbsp;</p>
</td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 11; //view pending transactions
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>

    <td align="center"><a href="view_contractor_pending_transaction.php"><img src="../images/attendance.jpg" alt="" width="77" height="64"><br>
View Pending Transactions</a><p>&nbsp;</p></td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 12; //view contractor transaction reports
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>

    <td align="center"><a href="show_contractor_transaction_report.php"><img src="../images/transactionreport.png" width="73" height="74"><br>
      Transaction Reports</a></td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 13; //add user account
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>

    <td width="21%" height="114" align="center"><a href="_new_user_account.php"><img src="../images/new.jpg" width="89" height="81">
      <br />
      New User Account<p>&nbsp;</p></td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 14; //administer user account
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>
    <td width="25%" align="center"><a href="view_user_account.php"><img src="../images/Edit-Male-User.png" alt="" width="61" height="77"><br>
      Administer User Accounts</a><p>&nbsp;</p></td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
<?php
$permission_id = 16; //contractor_view_balance
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$permission_id'");
$has_permission = mysql_num_rows($result);
if($has_permission > 0)  
{ 

	if($row_nos == 1)
	{echo "<tr>";}
?>
    <td align="center"><a href="contractor_account.php"><img src="../images/accountreport.png" width="77" height="77"><br>
      View Account </a><p>&nbsp;</p></td>

<?php

	if($row_nos == 4)
	{
		$row_nos = 0;
		echo "</tr>";

	}
	$row_nos++;
}
?>
</table>


</div>
    
    
    
    
    
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
