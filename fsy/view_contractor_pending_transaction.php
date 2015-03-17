<?php 

//page permission id = 11, permission name =  view pending transactions
$page_permission_id = 11;

require_once("restrict.php");
require_once("../ClassesController/DBDirect.php");
require_once("../ClassesController/AdminManager.php");
require_once('../ClassesController/class.pagination.php');	
require_once('authenticate.php');
require_once("../ClassesController/Utilities.php");
	
$db = new DBConnecting();
$admAcct = new Contractor();
	
$remove = new AdminController();

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

	if(isset($_POST['activate']))
	{
		$msg = $admAcct->Contractor_Transaction_Activate();
	}
	//pagination
		/*** Variables ***/
		$page = 1; //default page
		$per_page = 10; //rows per page

		if($acc_level == 2)
		{
			$full_sql = "select * from tbl_contractor_transaction_request where  reserved_location = '$location' order by date desc, contractor_id"; //full sql before split in to pages
		}
		elseif($acc_level == 3)
		{ 	/*we are have to check the hquser's location so that if its Area J4-Corporation, only those records for that area are displayed 
		          else we display all records except Area J4-Corporation*/
			$check_query = "SELECT *from tbl_location WHERE  forest_location = '$location' && id = 10";
			$check_result = mysql_query($check_query);
			$nos_result_check = mysql_num_rows($check_result);
			
			if($nos_result_check > 0)
			{ //i.e if this fellow is of Area_j4
				$full_sql = "select * from tbl_contractor_transaction_request where  reserved_location IN (SELECT forest_location from tbl_location WHERE id = 10) order by date desc, contractor_id"; //full sql before split in to pages
			}
			else
			{
				$full_sql = "select * from tbl_contractor_transaction_request where  reserved_location NOT IN (SELECT forest_location from tbl_location WHERE id = 10) order by date desc, contractor_id"; //full sql before split in to pages
			}
			
		}
		elseif ($acc_level == 4){

			/*we are have to check the director's location so that if its Area J4-Corporation, only those records for that area are displayed 
		          else we display all records except Area J4-Corporation*/
			$check_query = "SELECT *from tbl_location WHERE  forest_location = '$location' && id = 10";
			$check_result = mysql_query($check_query);
			$nos_result_check = mysql_num_rows($check_result);
			if($nos_result_check > 0)
			{ //i.e if this fellow is of Area_j4
				$full_sql = "select * from tbl_contractor_transaction_request where approval_status = 0 && reserved_location IN (SELECT forest_location from tbl_location WHERE id = 10) order by date desc, contractor_id"; //full sql before split in to pages
			}
			else
			{
				$full_sql = "select * from tbl_contractor_transaction_request where approval_status = 0 && reserved_location NOT IN (SELECT forest_location from tbl_location WHERE id = 10) order by date desc, contractor_id"; //full sql before split in to pages
			}
		}
		elseif ($acc_level == 1){
			$full_sql = "select * from tbl_contractor_transaction_request order by date desc, contractor_id"; //full sql before split in to pages
		}

		$display_links = 11; //number of links to be displayed - odd number
		/*** Variables ***/
		//check page number
		if(isset($_REQUEST['page']))
			$page = $_REQUEST['page'];
		
		//create object, pass the values
		$pageObj = new pagination($full_sql, $per_page, $page);
		
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
if (isset($_POST['search']))
	{//header("location:search.php?stud=".$_POST['keyword']);
	 	
	 	$keyword=$_POST['keyword'];
	 	
	//$stud = $_GET['stud'];
  
	//pagination
		/*** Variables **/
		$page = 1; //default page
		$per_page = 10; //rows per page

		if($acc_level == 2)
		{
			$full_sql = "select * from tbl_contractor_transaction_request where contractor_id ='$keyword' && reserved_location = '$location' order by date desc, contractor_id";
		}
		elseif ($acc_level == 4){
			$full_sql = "select * from tbl_contractor_transaction_request where approval_status = 0 && contractor_id ='$keyword' order by date desc, contractor_id";
		}
		elseif ($acc_level == 1){
			$full_sql = "select * from tbl_contractor_transaction_request where  contractor_id ='$keyword' order by date desc, contractor_id";
		}

		$display_links = 11; //number of links to be displayed - odd number
		
		// Variables
		//check page number
		if(isset($_REQUEST['page']))
			$page = $_REQUEST['page'];
		
		//create object, pass the values
		$pageObj = new pagination($full_sql, $per_page, $page);
		
		//sql after getting split in to pages
		$sql = $pageObj->get_query();
		$rsd = mysql_query($sql);
		
		//starting serial number
		$sl_start = $pageObj->offset;
		
		//get the links and store it in a variable
		$page_links = $pageObj->get_links();

		//get lastpage
		$last = $pageObj->getLastPage();  
    
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
				        Total Transactions: <?php echo $pageObj->getTotalRow(); ?></h4>

                    <br/>
   	<form  name="form1" method="post"  action="">
	  <div>
  <table width="350" border="0" align="left">
  <tr><td height="26" align="left" valign="top">Contractor's Id:</td>
    <td><p>
      <input type="text" name="keyword" id="keyword" size="20"/>
      <input type="submit" value="Search" name="search" id="search"/>
    
      </td>
  </tr>
</table>
</div>
</form>
                    
                    <p>&nbsp;</p>
                    <p align="center"><br /><?php if(isset($msg))echo $msg;?>  </p>
                    <table width="649" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th width="46" align="center" scope="col"><strong>Contractor's ID</strong></th>
                          <th width="147" align="center" scope="col"><strong>Tree Type</strong></th>
                          <th width="50" align="center" scope="col"><strong>Quantity</strong></th>
                          <th width="152" align="center" scope="col"><strong>Transaction Cost</strong></th>
                          <th width="78" align="center" scope="col"><span class="td_ele"><strong>Reserved Location</strong></span></th>
                         <?php if($acc_level != 2) { ?> <th width="79" align="center" scope="col"><strong>Attended By</strong></th><?php } ?>
                          <th width="85" align="center" scope="col"><strong>Date</strong></th>
                          <th width="85" align="center" scope="col"><strong>Status</strong></th>
                         <?php if($acc_level == 2) { ?> <th width="79" align="center" scope="col"><strong>Remarks</strong></th><?php } ?>
			<?php
			//check if user has required permissions for adding a transaction
				$add_permission_id = 9;
				$rs = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$add_permission_id'");
			$has_add_permission = mysql_num_rows($rs);
			 if($has_add_permission > 0) { ?>
                          <th width="85" align="center" scope="col"><strong>Activate</strong></th>
			<?php }

			//check if user has required permissions for updating transaction status
			$update_permission_id = 15;
			$rs = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$update_permission_id'");
			$has_update_permission = mysql_num_rows($rs);
			 if($has_update_permission > 0)  { ?>
			  <th width="85" align="center" scope="col"><strong>Approve/ Reject</strong></th>
		        <?php } ?>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="8" align="center"><?php echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page=1'>[First]</a>".$page_links."<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page=$last'>[Last]</a>"; ?></td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $i=0;
					while($rs = mysql_fetch_array($rsd))
					{
						 $tree_type = $rs['tree_type'];
						 $sql = mysql_query("SELECT * from tbl_tree WHERE id = $tree_type") or die(mysql_error());
						 $row_list=mysql_fetch_assoc($sql);
						 $tariff =  $row_list['tariff'];
						 $tree_name = $row_list['name'];

						 $status_int = $rs['approval_status'];
						 if($status_int==0)
						 {$status_text = "Unapproved";}
						 elseif($status_int==1)
						 {$status_text = "Approved";}
						 elseif($status_int==2)
						 {$status_text = "Rejected";}
				  ?>
				  <?php //echo ++$sl_start; ?>
                        <tr>
             <td align="center"><?php echo $rs['contractor_id'];?>
             </td>
         <td align="center"><?php echo $tree_name;?></td>
        <td align="center"><?php echo $rs['quantity'];?></td>
        <td align="center"><?php


           // echo ($rs['quantity'] * $tariff);

            $newCost=$rs['quantity'] * $tariff;
            echo "&#8358;".number_format($newCost, 2);


            ?>

        </td>
         <td align="center"><?php echo $rs['reserved_location'];?></td>
        <?php if($acc_level !=2) { ?><td> <?php echo $rs['attended_by'];?></td> <?php } ?>
 <td align="center"><?php echo $rs['date'];?></td>
 <td align="center"><?php echo $status_text;?></td>
        <?php if($acc_level ==2) { ?> <td align="center"><?php echo $rs['remarks'];?></td> <?php } ?>
 
 <?php 
 //check if user has required permissions for adding a transaction
$add_permission_id = 9;
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$add_permission_id'");
$has_add_permission = mysql_num_rows($result);
 if($has_add_permission > 0) 
 {
	//set the status of the activate button
	$activate_btn_status = "";
	if($rs['approval_status'] == 1)
	{$activate_btn_status = "enabled";}
	else
	{$activate_btn_status = "disabled";}
?>
   <td align="center">
   <form id="form" name="form" method="post" action="" onsubmit="return confirm('Are you sure you want to activate and store this transaction?')">
   <input name="transaction_id" type="hidden" id="transaction_id" value="<?php echo $rs['id'];?>">
   <input type="submit" name="activate" id="activate" value="Activate" <?php echo $activate_btn_status; ?> />
   </form>
   </td>
<?php } 
//check if user has required permissions for updating transaction status
$update_permission_id = 15;
$result = mysql_query("select *from tbl_user_permission WHERE username='".$_SESSION['username']."' && permission_id='$update_permission_id'");
$has_update_permission = mysql_num_rows($result);
if($has_update_permission > 0)  
{ ?>
 <td align="center"><a href="update_transaction_status.php?con_id=<?php echo $rs['contractor_id'];?>&transaction_id=<?php echo $rs['id'];?>" title="Administer <?php echo $rs['name'];?>"><img src="../images/manage.png" width="39" height="39"></a></td>
<?php } ?>
 
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
