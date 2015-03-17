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
		$page = 1; //default page
		$per_page = 20; //rows per page
		$full_sql = "select * from tbl_location"; //full sql before split in to pages
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


<p>Click any of the underlisted to view details:</p></a>
                          <br>
<ul>
  <li><a href="total_reserves.php">
  <h4> RESERVES IN OGUN STATE</h4></a></li>
  <li><a href="forest_land_area.php"><h4>AREA OF FOREST LAND CLASSIFIED BY TYPE AND LOCAL GOVERNMENT AREA</h4></a></li>

</ul>



  </div>




</div><!--End Container -->
  <br/>  
    
    
    
    
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
