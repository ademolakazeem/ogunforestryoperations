<?php 
	//error_reporting(0);
	//require_once("fsy/restrict.php");
	require_once("ClassesController/DBDirect.php");
	//require_once("ClassesController/AdminManager.php");
	require_once('ClassesController/class.pagination.php');
	
	$db = new DBConnecting();
	

/*	$remove = new AdminController();
	
	
	$con_id = $_GET['con_id'];
	 if(isset($_GET['remove'])&&$_GET['remove']="yes")
	{ 
		$msg = $remove->Remove_Contractor();
	}
	*/
	
	
	//pagination
		/*** Variables ***/
		$page0 = 1; //default page
		$per_page0 = 20; //rows per page
		$full_sql0 = "select * from tbl_private_plant"; //full sql before split in to pages
		$display_links0 = 11; //number of links to be displayed - odd number
		/*** Variables ***/
		//check page number
		if(isset($_REQUEST['page0']))
			$page0 = $_REQUEST['page0'];
		
		//create object, pass the values
		$pageObj0 = new pagination($full_sql0, $per_page0, $page0);
		
		//sql after getting split in to pages
		$sql0 = $pageObj0->get_query();
		$rsd0 = mysql_query($sql0);
		
		//starting serial number
		$sl_start0 = $pageObj0->offset;
		
		//get the links and store it in a variable
		$page_links0 = $pageObj0->get_links();

		//get lastpage
		$last0 = $pageObj0->getLastPage();
		
		
		//Start another from here
		$page1 = 1; //default page
		$per_page1 = 20; //rows per page
		$full_sql1 = "select * from tbl_government_plant"; //full sql before split in to pages
		$display_links1 = 11; //number of links to be displayed - odd number
		/*** Variables ***/
		//check page number
		if(isset($_REQUEST['page1']))
			$page1 = $_REQUEST['page1'];
		
		//create object, pass the values
		$pageObj1 = new pagination($full_sql1, $per_page1, $page1);
		
		//sql after getting split in to pages
		$sql1 = $pageObj1->get_query();
		$rsd1 = mysql_query($sql1);
		
		//starting serial number
		$sl_start1 = $pageObj1->offset;
		
		//get the links and store it in a variable
		$page_links1 = $pageObj1->get_links();

		//get lastpage
		$last1 = $pageObj1->getLastPage();
		
		//PAGE 3
		$page2 = 1; //default page
		$per_page2 = 20; //rows per page
		$full_sql2 = "select * from tbl_schedule_b"; //full sql before split in to pages
		$display_links2 = 11; //number of links to be displayed - odd number
		/*** Variables ***/
		//check page number
		
		if(isset($_REQUEST['page2']))
			$page2 = $_REQUEST['page2'];
		
		//create object, pass the values
		$pageObj2 = new pagination($full_sql2, $per_page2, $page2);
		
		//sql after getting split in to pages
		$sql2 = $pageObj2->get_query();
		$rsd2 = mysql_query($sql2);
		
		//starting serial number
		$sl_start2 = $pageObj2->offset;
		
		//get the links and store it in a variable
		$page_links2 = $pageObj2->get_links();

		//get lastpage
		$last2 = $pageObj2->getLastPage();
		
		
		//PAGE 4
		$page3 = 1; //default page
		$per_page3 = 20; //rows per page
		$full_sql3 = "select * from tbl_firewood"; //full sql before split in to pages
		$display_links3 = 11; //number of links to be displayed - odd number
		/*** Variables ***/
		//check page number
		
		if(isset($_REQUEST['page3']))
			$page3 = $_REQUEST['page3'];
		
		//create object, pass the values
		$pageObj3 = new pagination($full_sql3, $per_page3, $page3);
		
		//sql after getting split in to pages
		$sql3 = $pageObj3->get_query();
		$rsd3 = mysql_query($sql3);
		
		//starting serial number
		$sl_start3 = $pageObj3->offset;
		
		//get the links and store it in a variable
		$page_links3 = $pageObj3->get_links();

		//get lastpage
		$last3 = $pageObj3->getLastPage();
		
		//PAGE 5
		$page4 = 1; //default page
		$per_page4 = 20; //rows per page
		$full_sql4 = "select * from tbl_free_area"; //full sql before split in to pages
		$display_links4 = 11; //number of links to be displayed - odd number
		/*** Variables ***/
		//check page number
		
		if(isset($_REQUEST['page4']))
			$page4 = $_REQUEST['page4'];
		
		//create object, pass the values
		$pageObj4 = new pagination($full_sql4, $per_page4, $page4);
		
		//sql after getting split in to pages
		$sql4 = $pageObj4->get_query();
		$rsd4 = mysql_query($sql4);
		
		//starting serial number
		$sl_start4 = $pageObj4->offset;
		
		//get the links and store it in a variable
		$page_links4 = $pageObj4->get_links();

		//get lastpage
		$last4 = $pageObj4->getLastPage();
		
		
		
		
//PAGE 6
		$page = 1; //default page
		$per_page = 20; //rows per page
		$full_sql = "select * from tbl_tree"; //full sql before split in to pages
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
		
		
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ogun State Forestry Monitoring and Control System</title>
  
  <!--Comment here-->
  
  
  <link rel="icon" type="image/png" href="images/favicon.png">



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
  <!--End Insert-->
<link rel="stylesheet" href="css/style.css">
<script src="jquery/1.5.1/jquery.min.js"></script>
<script src="js/slides.min.jquery.js"></script>
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

<div id="header-wrap">
<header class="group">
<h2><a href="../index.php" title="burstudio">Forestry Monitoring</a></h2>
			<div id="call">
				<h3>Ogun State</h3>
				<h4 class="green"><strong>Government</strong></h4>
			
            </div><!-- end call -->
            
			<?php 
			include('header-out.php');
			?>
            
		</header>
	 
    </div><!-- end header wrap -->
    


	
	
<div id="container">
<br/>
<div class="content">
						
					      <?php if (isset($msg)) echo $msg ;?>
					     <a name="up"> <p>Click any of the underlisted to view details:</p></a>
                          <br>
<ul>
  <li><a href="#Private_Plantation_Owners"><h4>PRIVATE PLANTATION OWNERS</h4></a></li>
  <li><a href="#dema_fee"><h4>DEMARCATION FEE</h4></a></li>
  <li><a href="#govt_plant"><h4>GOVERNMENT PLANTATIONS</h4></a></li>
  <li><a href="#schedule"><h4>SCHEDULE 'B'</h4></a></li>
  <li><a href="#firewood"><h4>FIREWOOD</h4></a></li>
  <li><a href="#freearea"><h4>FREE AREA</h4></a></li>
  <li><a href="#types"><h4>TYPES OF TREES</h4></a></li>
</ul>
						<h4>&nbsp;</h4>
<a name="Private_Plantation_Owners"><h4><u>PRIVATE PLANTATION OWNERS</u></h4></a>

                                    
<table width="829" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th width="73" align="center" scope="col"><strong>S/N</strong></th>
                          <th width="181" align="center" scope="col"><strong>SPECIES</strong></th>
                          <th width="187" align="center" scope="col"><strong>GIRTH CLASS</strong></th>
                          <th width="145" align="center" class="td_ele" scope="col"><strong>REVIEWED RATE (<strike>N</strike>)</strong></th>
                          <th colspan="2" align="center" scope="col"><strong>REMARKS</strong></th>
                        </tr>
      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="7" align="center"><?php echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page0=1'>[First]</a>".$page_links0."<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page0=$last0'>[Last]</a>"; ?></td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $i=0;
					while($rs0 = mysql_fetch_array($rsd0))
					{
				  ?>
				  <?php //echo ++$sl_start; ?>
                        <tr>
             <td align="center"><?php echo $rs0['id'];?> 
             </td>
         <td align="center"><?php echo $rs0['species'];?></td>
        <td align="center"><?php echo $rs0['girth_class'];?></td>
         <td align="center"><?php echo $rs0['new_reviewed_rate'];?></td>
         <td width="219" align="center"><?php echo $rs0['remarks'];?></td>
 
 </tr>
                        <?php $i++;}?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                      
                      
    </table>
                    <p>&nbsp;</p>
                    <p>
    10% administrative charge per stump introduced to encourage</p>
<p> Private Plantation Establishment as against stumpage fees on trees in free areas.</p>
<p>&nbsp;</p>
<a name="dema_fee"><h4>Note: </h4></a>
<h4><u>DEMARCATION FEE:</u></h4>
<p>&nbsp;</p>
                    <div class="wrapper"></div>
  </div>



<table width="829" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th colspan="2" align="left" scope="col"><h4>&nbsp;</h4></th>
                          <th width="194" align="center" scope="col">&nbsp;</th>
                        </tr>
                        <tr>
                          <th width="68" align="center" scope="col"><strong>S/N</strong></th>
                          <th width="560" align="center" scope="col"><strong>NAME</strong></th>
                          <th align="center" class="td_ele" scope="col"><strong><strike>N</strike></strong></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="4" align="center"></td>
                        </tr>
                      </tfoot>
                      <tbody>
                       
					
                        <tr>
             <td align="center"><ol type="i">
               <li>i.</li>
             </ol></td>
         <td align="center">Fee on every forest allocation shall be  paid as demarcation fee/plot	</td>
        <td align="center"> 20,000.00</td>
         </tr>
                        <tr>
                          <td align="center">ii.</td>
                          <td align="center">A non-refundable application fee in respect of Forest allocation
 Revalidation of forest allocation</td>
                          <td align="center">50,000.00</td>
                        </tr>
                       
                       
                       
                      </tbody>
                      <tfoot>
                      </tfoot>
                      
                      
  </table>
  <a href="#up"> <h4>Go Up</h4></a>
  
   <br>
 <a name="govt_plant"> <h4><u>GOVERNMENT PLANTATIONS</u></h4></a>

                                    
<table width="829" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th width="68" align="center" scope="col"><strong>S/N</strong></th>
                          <th width="343" align="center" scope="col"><strong>SPECIES</strong></th>
                          <th width="422" align="center" scope="col"><strong>REVIEWED RATE (<strike>N</strike>)</strong></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="4" align="center">
						  
						  
						  
						  <?php 
						  
						  
						  
						  
						  echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page1=1'>[First]</a>".$page_links1."<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page1=$last1'>[Last]</a>"; ?></td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $i=0;
					while($rs1 = mysql_fetch_array($rsd1))
					{
				  ?>
				  <?php //echo ++$sl_start; ?>
                        <tr>
             <td align="center"><?php echo $rs1['id'];?> 
             </td>
         <td align="center"><?php echo $rs1['species'];?></td>
        <td align="center"><?php echo $rs1['new_reviewed_rate'];?></td>
         </tr>
                        <?php $i++;}?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                      
                      
                    </table>
                    
                    <br>
 <a name="schedule"> <h4><u>SCHEDULE 'B'</u></h4></a>

                                    
<table width="829" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th width="68" align="center" scope="col"><strong>S/N</strong></th>
                          <th width="343" align="center" scope="col"><strong>CATEGORY OF MACHINE</strong></th>
                          <th width="210" align="center" scope="col"><strong>REGISTRATION  (<strike>N</strike>)</strong></th>
                          <th width="210" align="center" scope="col"><strong>RENEWAL  (<strike>N</strike>)</strong></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="5" align="center">
						  
						  
						  
						  <?php 
						  
						  
						  
						  
						  echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page2=1'>[First]</a>".$page_links2."<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page2=$last2'>[Last]</a>"; ?></td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $i=0;
					while($rs2 = mysql_fetch_array($rsd2))
					{
				  ?>
				  <?php //echo ++$sl_start; ?>
                        <tr>
             <td align="center"><?php echo $rs2['id'];?> 
             </td>
         <td align="center"><?php echo $rs2['machine_category'];?></td>
        <td align="center"><?php echo $rs2['registration'];?></td>
        <td align="center"><?php echo $rs2['renewal'];?></td>
                        </tr>
                        <?php $i++;}?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                      
                      
                    </table>
                    
                    
                                        <br>
<a name="firewood">  <h4><u>FIREWOOD</u></h4></a>

                                    
<table width="829" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th width="106" align="center" scope="col"><strong>S/N</strong></th>
                          <th width="431" align="center" scope="col"><strong>FORESTRY RESERVE</strong></th>
                          <th width="303" align="center" scope="col"><strong>RATE  (<strike>N</strike>)</strong></th>
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="5" align="center">
						  
						  
						  
						  <?php 
						  
						  
						  
						  
						  echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page3=1'>[First]</a>".$page_links3."<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page3=$last3'>[Last]</a>"; ?></td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $i=0;
					while($rs3 = mysql_fetch_array($rsd3))
					{
				  ?>
				  <?php //echo ++$sl_start; ?>
                        <tr>
             <td align="center"><?php echo $rs3['id'];?> 
             </td>
         <td align="center"><?php echo $rs3['forest_reserve'];?></td>
        <td align="center"><?php echo $rs3['new_rate'];?></td>
       
                        </tr>
                        <?php $i++;}?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                      
                      
                    </table>
                    <a href="#up"> <h4>Go Up</h4></a>
                     <br>
 <a name="freearea"> <h4><u>FREE AREA</u></h4></a> 
 <p class="green">Free  Area is any other land within Ogun State that is not gazetted as part of Forest  Reserves but it has TREES on it.<br>
   <strong>Composition:</strong> </p>
 <p class="green">&nbsp;</p>
 <ul>
   <li>     <span class="green">Community/Natural  Forests     </span></li>
   <li>     <span class="green">Water  sheds or areas close to it     </span></li>
   <li>     <span class="green">Private/individual  plantations     </span></li>
   <li>     <span class="green">Road  side trees     </span></li>
   <li>     <span class="green">Home  stead trees     </span></li>
   <li></li>
   <li></li>
 </ul>
 <p class="green"><strong>Caveat:</strong>         Ogun State Forestry law cap.39  maintains that before any tree in the Free<br>    
  Area is felled; proper  permission must be sought from the government.</p>
 <p class="green"> <strong>Tariffs  in Free Areas:</strong>
 </p>
 <p><span class="green"><strong></strong></span><strong><br>
   </strong>
   
   
   
 </p>
 <table width="829" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th width="106" align="center" scope="col"><strong>S/N</strong></th>
                          <th width="431" align="center" scope="col"><strong>FORESTRY RESERVE</strong></th>
                          <th width="303" align="center" scope="col"><strong>RATE  (<strike>N</strike>)</strong></th>
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="5" align="center">
						  
						  
						  
						  <?php 
						  
						  
						  
						  
						  echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page4=1'>[First]</a>".$page_links4."<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page4=$last4'>[Last]</a>"; ?></td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $i=0;
					while($rs4 = mysql_fetch_array($rsd4))
					{
				  ?>
				  <?php //echo ++$sl_start; ?>
                        <tr>
             <td align="center"><?php echo $rs4['id'];?> 
             </td>
         <td align="center"><?php echo $rs4['forest_reserve'];?></td>
        <td align="center"><?php echo $rs4['new_rate'];?></td>
       
                        </tr>
                        <?php $i++;}?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                      
                      
                    </table>
                    
<p><br/>
</p>

<br/>
<br/>
<ol type="i">
  <li></li>
<li></li>
 </ol>

<a href="#up"> <h4>Go Up</h4></a>



<a name="types"> <h4><u>TYPES OF TREES</u></h4></a> 

<table width="829" id="background-image" summary="Meeting Results">
                      <thead>
                        <tr>
                          <th width="106" align="center" scope="col"><strong>S/N</strong></th>
                          <th width="431" align="center" scope="col"><strong>THREE NAME</strong></th>
                          <th width="303" align="center" scope="col"><strong>TARIFF</strong></th>
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="5" align="center">
						  
						  
						  
						  <?php 
						  
						  
						  
						  
						  echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page=1'>[First]</a>".$page_links."<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?page=$last'>[Last]</a>"; ?></td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $i=0;
					while($rs = mysql_fetch_array($rsd))
					{
				  ?>
				  <?php //echo ++$sl_start; ?>
                        <tr>
    <td align="center"><?php echo $rs['id']; //echo $i+1;  ?>  
             </td>
         <td align="center"><?php echo $rs['name'];?></td>
        <td align="center"><?php echo $rs['tariff'];?></td>
       
                        </tr>
                        <?php $i++;}?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                      
                      
                    </table>







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
	
    <?php 
	//include('fsy/footer.php');
	?>
    
	<footer class="group">
		<?php
		include('outer_footer.php');
		?>
				
		<a href="#header-wrap"><img src="images/back-top.png" alt="back-top" class="back-top" /></a>		
	</footer>
   
	
	
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
