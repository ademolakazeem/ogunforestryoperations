<?php 

//page permission id = 3, permission name =  view contractor account history
$page_permission_id = 3;

require_once("restrict.php");
require_once("../ClassesController/DBDirect.php");
require_once("../ClassesController/AdminManager.php");
//require_once('../ClassesController/class.pagination.php');
require_once('../ClassesController/class.paginationcount.php');
	
$db = new DBConnecting();
	
$remove = new AdminController();


//get user access level
session_start();
$acc_level = "";
$location="";
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
	 if(isset($_GET['remove'])&&$_GET['remove']="yes")
	{ 
		$msg = $remove->Remove_Contractor();
	}
	
	//pagination
		/*** Variables ***/
		$page = 1; //default page
		$per_page = 20; //rows per page
		if($acc_level == 2)
		{
			$full_sql = "select * from tbl_contractor_account_history WHERE contractor_id in (select id from tbl_contractor WHERE business_area = '$location') order by contractor_id,created_date desc"; //full sql before split in to pages
		
			$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history WHERE contractor_id in (select id form tbl_contractor WHere business_area='$location')";
		}
		elseif($acc_level == 3)
		{//hqusers with acc level = 3 should not see information about Area J4 Corporation with location id = 10
			$full_sql = "select * from tbl_contractor_account_history WHERE contractor_id in (select id from tbl_contractor  WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10)) order by contractor_id,created_date desc"; //full sql before split in to pages

		
			$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history WHERE contractor_id in (select id form tbl_contractor  WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";
		}
	elseif($acc_level == 4)
		{
			/*we are have to check the director's location so that if its Area J4-Corporation, only those records for that area are displayed 
		          else we display all records except Area J4-Corporation*/
			$check_query = "SELECT *from tbl_location WHERE  forest_location = '$location' && id = 10";
			$check_result = mysql_query($check_query);
			$nos_result_check = mysql_num_rows($check_result);
			if($nos_result_check > 0)
			{ //i.e if this fellow is of Area_j4
				$full_sql = "select * from tbl_contractor_account_history WHERE contractor_id in (select id from tbl_contractor  WHERE business_area IN (SELECT forest_location from tbl_location WHERE id = 10)) order by contractor_id,created_date desc"; //full sql before split in to pages
		
			$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history WHERE contractor_id in (select id form tbl_contractor  WHERE business_area IN (SELECT forest_location from tbl_location WHERE id = 10))";
			}
			else
			{
				$full_sql = "select * from tbl_contractor_account_history WHERE contractor_id in (select id from tbl_contractor  WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10)) order by contractor_id,created_date desc"; //full sql before split in to pages
		
			$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history WHERE contractor_id in (select id form tbl_contractor  WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10))";
			}
		}
		else
		{
			$full_sql = "select * from tbl_contractor_account_history order by contractor_id,created_date desc"; //full sql before split in to pages
		
			$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history";
		}
		$display_links = 11; //number of links to be displayed - odd number
		/*** Variables ***/
		//check page number
		if(isset($_REQUEST['page']))
			$page = $_REQUEST['page'];
		
		//create object, pass the values
		$pageObj = new pagination_count($full_sql, $per_page, $page);
		$mycount=$pageObj->pagination_ct($full_sql_count);
		//sql after getting split in to pages
		$sql = $pageObj->get_query();
		$rsd = mysql_query($sql);
		
		//starting serial number
		$sl_start = $pageObj->offset;
		
		//get the links and store it in a variable
		$page_links = $pageObj->get_links();

		//get lastpage
		$last = $pageObj->getLastPage();
		
		
		
 		
 
 
 
 		//New addition for Search button
if(isset($_POST['search']))
	
	{
$start_date =$_POST["start_date"];
$end_date = $_POST["end_date"];
$contractor_id = $_POST["contractor_id"];

if(!empty($start_date) && !empty($end_date))
{

/*** Variables ***/
		$page = 1; //default page
		$per_page = 100000000000;  //rows per page
		if($acc_level == 2)
		{
		$full_sql = "select * from tbl_contractor_account_history where (contractor_id in (select id from tbl_contractor where business_area = '$location')) && ((created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id')  order by contractor_id,created_date desc"; //full sql before split in to pages

$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history  where (contractor_id in (select id from tbl_contractor where business_area = '$location')) && ((created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id')";

}
		elseif($acc_level == 3)
		{//hqusers with acc level = 3 should not see information about Area J4 Corporation with location id = 10
		$full_sql = "select * from tbl_contractor_account_history where (contractor_id in (select id from tbl_contractor WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10)) && ((created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id'))  order by contractor_id,created_date desc"; //full sql before split in to pages

$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history  where (contractor_id in (select id from tbl_contractor WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10)) && ((created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id'))";

}
		elseif($acc_level == 4)
		{
			/*we are have to check the director's location so that if its Area J4-Corporation, only those records for that area are displayed 
		          else we display all records except Area J4-Corporation*/
			$check_query = "SELECT *from tbl_location WHERE  forest_location = '$location' && id = 10";
			$check_result = mysql_query($check_query);
			$nos_result_check = mysql_num_rows($check_result);
			if($nos_result_check > 0)
			{ //i.e if this fellow is of Area_j4
				$full_sql = "select * from tbl_contractor_account_history where (contractor_id in (select id from tbl_contractor WHERE business_area IN (SELECT forest_location from tbl_location WHERE id = 10)) && ((created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id'))  order by contractor_id,created_date desc"; //full sql before split in to pages

$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history  where (contractor_id in (select id from tbl_contractor WHERE business_area IN (SELECT forest_location from tbl_location WHERE id = 10)) && ((created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id'))";
			}
			else
			{
				$full_sql = "select * from tbl_contractor_account_history where (contractor_id in (select id from tbl_contractor WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10)) && ((created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id'))  order by contractor_id,created_date desc"; //full sql before split in to pages

$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history  where (contractor_id in (select id from tbl_contractor WHERE business_area NOT IN (SELECT forest_location from tbl_location WHERE id = 10)) && ((created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id'))";
			}
		}
		else{
			
$full_sql = "select * from tbl_contractor_account_history where (created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id'  order by contractor_id,created_date desc"; //full sql before split in to pages

$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history  where (created_date >= '$start_date' && created_date <= '$end_date') || contractor_id = '$contractor_id'";		
		
		}
		$display_links = 11; //number of links to be displayed - odd number
		/*** Variables ***/
		//check page number
		if(isset($_REQUEST['page']))
			$page = $_REQUEST['page'];
		
		//create object, pass the values
		//$pageObj = new pagination($full_sql, $per_page, $page);
$pageObj = new pagination_count($full_sql, $per_page, $page);
$mycount=$pageObj->pagination_ct($full_sql_count);
		//sql after getting split in to pages
		$sql = $pageObj->get_query();
		
		$rsd = mysql_query($sql);
		//starting serial number
		$sl_start = $pageObj->offset;
		
		//get the links and store it in a variable
		$page_links = $pageObj->get_links();

		//get lastpage
		$last = $pageObj->getLastPage();	

}//end both start and end date

		
 }		


 
 
 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ogun State Forestry Monitoring and Control System</title>
  
  <!--Comment here-->
  
  
  <link rel="icon" type="image/png" href="../images/favicon.png">



  <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/AvantGarde_Bk_BT_400.font.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<script src="js/jcarousellite.js" type="text/javascript"></script>
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
<script type="text/javascript" src="chromejs/chrome.js">

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
<script type="text/javascript" src="../js/datetimepicker_css.js"></script>

<script language="javascript" type="text/javascript"> 
function submitregistration() {
 var form = document.clas;
     
if(form.classname.value == "")
{
	alert( "Enter Class Name" );
	//form.name.division.focus();
	return false;
}
else if(form.arm.value == "")
{
alert( "Enter Class arm" );
return false;
}
}

function confirmDelete()
{
	if(confirm("Do you want to remove this link\nProceed?")){
		if(confirm("Are you sure?")){
			return true;
		}
		else{
			return false;
		}
	}
	else
	{
		return false;
	}	
}
</script>
<style type="text/css">
<!--
@import url("longtable-style.css");
-->
</style>
  <!--End Insert-->
  
  
  
  <script language="JavaScript">
<!--
function formpreview(form) {

form.action='_registration_preview.php';
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


	
	
<div id="container">
<br/>
<div class="content">
						<h4>
					      <?php if (isset($msg)) echo $msg ;?>
					      <br>
				        Total Existing Contractor: <?php echo $pageObj->getTotalRow(); ?> &nbsp;&nbsp;&nbsp;&nbsp;<a href="_new_contractor_account.php" title="Create New Contractor" class="green">Create New Contractor Account</a>
   <br/> <br/>
   Total Amount Deposited: <strike>N</strike>
 <?php 
 //$full_sql_count = "select sum(amount_deposited)amount from tbl_contractor_account_history"; 
 //$result=mysql_query($full_sql_count) or die(mysql_error());
$row = mysql_fetch_assoc($mycount); 
$sum = $row['amount'];
echo $sum;

?>  
                        
                        
                        </h4>

                    <br/>
   	<form  name="form1" method="post"  action="">
	  <div>
  <table width="350" border="0" align="left">
  <tr><td height="26" align="left" valign="top">Contractor's Id:</td>
    <td><p>
      <input type="text" name="contractor_id" id="contractor_id" size="20"/>
<!--      <input type="text" name="keyword" id="keyword" size="20"/>-->
      
    </td>
  </tr>
  <tr>
    <td height="26" align="left" valign="top">Start Date:</td>
    <td><?php
//get class into the page
require_once("../ClassesController/tc_calendar.php");


//instantiate class and set properties
$myCalendar = new tc_calendar("start_date", true);
$myCalendar->setDateFormat("d/m/Y");
$myCalendar->setIcon("../images/calender/iconCalendar.gif");
$myCalendar->setDate(date('d'),date('m'),date('Y'));

//output the calendar
$myCalendar->writeScript();	 
?></td>
  </tr>
  <tr>
    <td height="26" align="left" valign="top">End Date:</td>
    <td><?php
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
$myCalendar = new tc_calendar("end_date", true);
$myCalendar->setDateFormat("d/m/Y");
$myCalendar->setIcon("../images/calender/iconCalendar.gif");
$myCalendar->setDate(date('d'),date('m'),date('Y'));

//output the calendar
$myCalendar->writeScript();	 
?></td>
  </tr>
  <tr>
    <td height="26" align="left" valign="top">&nbsp;</td>
    <td><input type="submit" value="Search" name="search" id="search"/></td>
  </tr>
  </table>
</div>
</form>
                    
                    
                    
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <table width="649" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th width="46" align="center" scope="col"><strong>Contractor's ID</strong></th>
                          <th width="147" align="center" scope="col"><strong>Amount Deposited</strong></th>
                          <th width="152" align="center" scope="col"><strong>Teller Number</strong></th>
                          <th width="78" align="center" scope="col"><span class="td_ele"><strong>Bank Name</strong></span></th>
                          <th width="79" align="center" scope="col"><strong>Account Number</strong></th>
                          <th width="85" align="center" scope="col"><strong>Payment Date</strong></th>
                          <th width="41" align="center" scope="col"><strong>Date</strong></th>
                          <th width="42" align="center" scope="col"><strong>Creator</strong></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="9" align="center"><?php echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page=1'>[First]</a>".$page_links."<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page=$last'>[Last]</a>"; ?></td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $i=0;
					while($rs = mysql_fetch_array($rsd))
					{
				  ?>
				  <?php //echo ++$sl_start; ?>
                        <tr>
             <td align="center"><a href="man_contractor.php?con_id=<?php echo $rs['contractor_id'];?>" title="Administer <?php echo $rs['name'];?>"><?php echo $rs['contractor_id'];?></a>
             </td>
         <td align="center"><?php echo $rs['amount_deposited'];?></td>
        <td align="center"><?php echo $rs['teller_number'];?></td>
         <td align="center"><?php echo $rs['bank_name'];?></td>
         <td align="center"><?php echo $rs['account_number'];?></td>
 <td align="center"><?php echo $rs['payment_date'];?></td>
 <td align="center"><?php echo $rs['created_date'];?></td>
 <td align="center"><?php echo $rs['maker_id'];?></td>
                        </tr>
                        <?php $i++;}?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                      
                      
                    </table>
                    <div class="wrapper"></div>
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
