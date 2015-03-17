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
		$full_sql = "select * from tbl_private_plant"; //full sql before split in to pages
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
.aboutus {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 14px;
	line-height: normal;
	color: #000;
	list-style-position: inside;
	list-style-type: lower-roman;
}
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
<div><span class="content">
						
					      <?php if (isset($msg)) echo $msg ;?>
					     <a name="up"> <p>Click any of the underlisted to view details:</p></a>
                          <br>
<ul>
  <li><a href="#vision">
    <h4>VISION</h4></a></li>
  <li><a href="#mission">
    <h4>MISSION</h4></a></li>
  <li><a href="#key_goals">
    <h4>KEY GOALS</h4></a></li>
  <li><a href="#org_structure">
    <h4>ORGANIZATION STRUCTURE</h4></a></li>
  <li><a href="#objectives">
    <h4>OBJECTIVES OF THE MINISTRY</h4></a></li>
  <li><a href="#departments">
    <h4>DEPARTMENTS IN THE MINISTRY</h4></a></li>
  
  <li><a href="#field">
    <h4>FIELD OFFICES AND LOCATIONS</h4></a></li>
  <li><a href="#govt">
    <h4>GOVERNMENTS FOREST RESERVES</h4></a></li>
  <li><a href="#conclusion">
    <h4>CONCLUSION</h4></a></li>
</ul>
						
</span>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="22%"><span class="aboutus"><strong><u>OFFICIAL NAME:</u></strong></span></td>
      <td width="78%"><p class="aboutus">OGUN  STATE MINISTRY OF FORESTRY</p>
        <p class="aboutus">&nbsp;</p></td>
    </tr>
    <tr>
      <td><span class="aboutus"><strong><u>CONTACT US:</u> </strong></span></td>
      <td><p class="aboutus">FIRST FLOOR, BLOCK D, NEW  SECRETARIAT, OKE-MOSAN, ABEOKUTA, OGUN STATE</p>
        <p class="aboutus"> ogunministryofforestry@yahoo.com</p>
        <p class="aboutus">&nbsp;</p></td>
    </tr>
    <tr>
      <td><span class="aboutus"><strong><u>DATE OF CREATION:</u></strong></span></td>
      <td><span class="aboutus">AUGUST, 2004</span></td>
    </tr>
  </table>
  <p class="aboutus"><span class="aboutus"><br>
    
    </span>    </p>
  <p class="aboutus"><a name="vision"></a></p>
<p>
  <span class="aboutus"><strong><u>VISION:</u></strong> To  pursue with vigour forest regeneration activities and reclamation of  environmentally unstable areas in the State, and to develop and manage forest  resources on sustainable basis to ensure continuous and uninterrupted supply of  Timber and Non-Timber Forest Products.</span></p>
<p class="aboutus"><a name="mission"></a><br>
    <strong><u>MISSION:</u></strong> To  ensure rapid development and conservation of our forest resources through  regeneration and controlled exploitation of timber and non-timber forest  resources for the purpose of economic development and environmental  sustainability.</p>
<p class="aboutus"><a name="key_goals"></a><br>
    <strong><u>KEY GOALS:</u></strong> </p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">To ensure adequate and  continuous supply of forestry produce through the development and orderly  exploitation of the State’s forest resources in order to protect the  environment and ecology;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">To provide employment  opportunities for our citizens through the encouragement &amp; development of  timber and Non Timber related industries;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">To protect our Forest  Estates against any form of encroachment, damage or destruction;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">To regenerate the forest at  a rate higher than exploitation.</span></td>
  </tr>
</table>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong>&nbsp;</strong></p>
<p class="aboutus"><a name="org_structure"></a></p>
<p class="aboutus"><strong><u>ORGANIZATIONAL STRUCTURE</u></strong><br>
  The Honourable Commissioner, with the assistance of the  Permanent Secretary formulates policy guidelines for forestry development in  the state. The Honourable Commissioner for Forestry is Engr. Ayo Olubori while the  Permanent Secretary is Engr. Olufolaranmi O. Onayemi. The Ministry is structured  into six Departments. Each Department is headed by a Director who reports  directly to the Permanent Secretary. 
</p>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><a name="objectives"></a></p>
<p class="aboutus"><strong><u>OBJECTIVES  OF THE MINISTRY</u></strong><br>
  The broad policy objectives of the Ministry are  enumerated below:</p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">2.1</span></td>
    <td width="94%"><span class="aboutus"> To ensure adequate and continuous supply of forest produce  through the development and orderly exploitation of the State’s Forest  Resources in order to protect the environment and ecology.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">2.2</span></td>
    <td><span class="aboutus">To  provide employment opportunities for the youths especially the rural dwellers  through the encouragement and development of timber and non-timber related  industries.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">2.3</span></td>
    <td><span class="aboutus">To  protect our forest estates against any form of encroachment, damage or  destruction and to regenerate the forests at a rate that is higher than that of  exploitation.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">2.4</span></td>
    <td><span class="aboutus">To  mount extensive campaigns on the need for individuals, schools, communities,  organized private sector, Non-Governmental Organizations (NGOs) to grow trees  on their farmland.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">2.5</span></td>
    <td><span class="aboutus">To develop, manage and protect wildlife  in order to prevent the extinction of rare or endangered species.</span></td>
  </tr>
</table>

<h4 class="aboutus"><a href="#up"><br>
  Go Up
</a></h4>

<p class="aboutus"><strong><u><a name="departments"></a><br>
  DEPARTMENTS IN THE MINISTRY</u></strong><br>
  <br>
</p>
<p class="aboutus"><strong><u>ADMINISTRATION  AND SUPPLIES DEPARTMENT</u></strong></p>
<p><br>
</p>
<p class="aboutus"><strong><u>Statutory  functions of the Department</u></strong><br>
  The Administration &amp; Supplies  Department has the responsibility of coordinating the activities of members of  staff. It performs the following statutory functions:
<p class="aboutus">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%">i.</td>
    <td width="94%"><span class="aboutus">Recruitment and Training</span></td>
  </tr>
  <tr>
    <td><span class="aboutus"><span class="aboutus">ii.</span></span></td>
    <td><span class="aboutus">Promotion of eligible  officers</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Staff welfare and Discipline</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Procurement &amp;  Maintenance</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">v.</span></td>
    <td><span class="aboutus">Record Keeping</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vi.</span></td>
    <td><span class="aboutus">Supervision of Contractors  handling toll collecting points.</span></td>
  </tr>
  </table>

<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>UNITS</u></strong></p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">Registry: Open and  Confidential</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Stores Unit</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Procurement &amp; Management  Unit (Office Equipment)</span></td>
  </tr>
</table>
<p class="aboutus">&nbsp;</p>

<p><strong class="aboutus"><u>FINANCE  AND ACCOUNTS DEPARTMENT</u></strong></p>
<p>&nbsp;</p>

<p class="aboutus"><strong><u>Statutory  functions of the Department</u></strong></p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">Receipt and lodgment of all revenues  accruing to the Ministry into Banks.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Dealing with matters relating to emolument  of staff.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Make  payments of expenditure duly authorized by the Honourable Commissioner or the Permanent Secretary as  the case may be.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Collation of all financial data relating to  the activities of the Ministry. </span></td>
  </tr>
</table>

    <p>&nbsp;</p>
    <p class="aboutus"><strong><u>UNITS</u></strong>
      </p>
    </p>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6%"><span class="aboutus">i.</span></td>
        <td width="94%"><span class="aboutus">Finance  Section</span></td>
      </tr>
      <tr>
        <td><span class="aboutus">ii.</span></td>
        <td><span class="aboutus">Personnel  Emoluments Section</span></td>
      </tr>
      <tr>
        <td><span class="aboutus">iii.</span></td>
        <td><span class="aboutus">Expenditure/Payment  Section</span></td>
      </tr>
      <tr>
        <td><span class="aboutus">iv.</span></td>
        <td><span class="aboutus">Accounts  Section.</span></td>
      </tr>
    </table>
    <p class="aboutus">&nbsp;</p>
<p><a href="#up"><strong>Go Up</strong> </a></p>
<p class="aboutus"><strong><u>PLANNING,  RESEARCH AND STATISTICS DEPARTMENT</u></strong></p>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>Statutory  Functions of the Department</u></strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">Preparation  of Annual Budget and Development of other short, medium and long term plans.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Effective  monitoring and evaluation/appraisal of projects as at when due.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Preparation and publication  of monthly, quarterly and yearly reports on the programmes and projects  executed by the Ministry.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Production and co-ordination  of data requirements in respect of the Ministry’s Technical Aids/External  Assistance.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">v.</span></td>
    <td><span class="aboutus">Impact assessment of  projects/programmes of the Ministry using the relevant indicators.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vi.</span></td>
    <td><span class="aboutus">Research into areas of  interest of the Ministry with the aim of building a viable data bank for  reference purpose.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vii.</span></td>
    <td><span class="aboutus">Collection, Collation,  Analysis, Interpretation and publication of information for policy making.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">viii.</span></td>
    <td><span class="aboutus">Creation  and maintenance of data base of suppliers and contractors of the Ministry.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ix.</span></td>
    <td><span class="aboutus">Secretariat of the  Ministry’s Tender Board.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">x.</span></td>
    <td><span class="aboutus">Establishment and  Maintenance of the Ministry’s Electronic data base.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">xi.</span></td>
    <td><span class="aboutus">Computerization of the  activities of the Ministry for an efficient Management Information System.  (MIS).</span></td>
  </tr>
  </table>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>UNITS</u></strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">(a).</span></td>
    <td width="94%"><span class="aboutus">Planning &amp; Monitoring</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">(b).</span></td>
    <td><span class="aboutus">Research &amp; Statistics</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">(c).</span></td>
    <td><span class="aboutus">Library Services</span></td>
  </tr>
</table>

<p>&nbsp;</p>
<h4 class="aboutus"><a href="#up"><br>
  Go Up
</a></h4>
<h4 class="aboutus"><strong><u>REGULATION  AND UTILIZATION DEPARTMENT</u></strong> </h4>
<p class="aboutus"><strong><u>Statutory  Functions of the Department</u></strong></p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">Protection of the State  Forest Estate from encroachment;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Control of illegal felling  in public and private forests;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Carrying out Forest  inventory with a view to ascertaining the quality, and stocking of forest  reserves at any point in time;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Registration and Supervision  of timber contractors;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">v.</span></td>
    <td><span class="aboutus">Registration and Supervision  of Saw millers;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vi.</span></td>
    <td><span class="aboutus">Supervision of Contractors  handling toll collecting points;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vii.</span></td>
    <td><span class="aboutus">Conservation and protection  of endangered trees.</span></td>
  </tr>
</table>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>UNITS</u></strong></p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">Log Control</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Forest Protection</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Logging Operation</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Forest Utilization</span></td>
  </tr>
  </table>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>SILVICULTURAL  DEPARTMENT</u></strong></p>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>Statutory  Functions of the Department</u></strong></p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">To establish new forest  plantations, using Agro-forestry and direct methods with a view to having a  sustained wood production;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">To maintain old and existing  plantations by applying all necessary silvicultural operations;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">To generate revenue for the  government;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">To address the twin problems  of global warming and poverty among the populace;</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">v.</span></td>
    <td><span class="aboutus">To carry out Forest  inventory with a view to ascertaining the quality, and stocking of forest  reserves at any point in time</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vi.</span></td>
    <td><span class="aboutus">To create jobs especially  for youths, retirees and rural dwellers.</span></td>
  </tr>
  </table>
<p class="aboutus">&nbsp;</p>

<p>&nbsp;</p>
<p class="aboutus"><strong><u>DEPARTMENT  OF NON-TIMBER FOREST PROGRAMME</u></strong></p>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>Statutory  Functions of the Department</u></strong></p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">Conservation and Development  of wildlife in the State with a view to protecting such for aesthetic,  research, economic and recreational values.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Development of parks and  Gardens with a view to providing recreational facilities and more revenue to  the government.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Honey production  (Apiculture)</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Silk production for the  textile Industry (Sericulture)</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">v.</span></td>
    <td><span class="aboutus">Snail Domestication for  local consumption and export</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="aboutus">Cane Rat (Grass cutter)  domestication</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="aboutus">Wetland projects for all  year round vegetable production.</span></td>
  </tr>
  </table>
<p class="aboutus">&nbsp;</p>
<h4 class="aboutus"><a href="#up"><br>
  Go Up
</a></h4>
<span class="aboutus">
</p>
</span>
<p class="aboutus"><strong><u>Forest Conservation</u></strong></p>
<p class="aboutus"><br>
  The Ministry is presently in  collaboration with a NGO named Nigerian Conservation Foundation to promote  Forest Conservation in the State Forest Reserves, particularly Omo Forest  Reserve. This collaboration, tagged Omo-Oluwa-Shasha Conservation Project cuts  across the three States of Ogun, Ondo and Osun.</p>
<p class="aboutus"><strong><u><a name="field"></a></u></strong><br>
</p>
<p class="aboutus"><strong><u>FIELD OFFICES AND LOCATION</u></strong></p>
<p class="aboutus">The Ministry has sixteen  (16) field/area Offices across the State and each is headed by a Divisional  Forestry Programme Officer. The Offices are saddled with the responsibility of  bringing forestry services nearer to the people for the realization of the set  goals in forest conservation/protection and revenue generation. The area/field  Offices are:  </p>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>Ogun  Central:</u></strong></p>
<p class="aboutus"><strong><u>&nbsp;</u></strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">Forestry Office, Adatan, Abeokuta</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Forestry Office, Owode-Egba</span></td>
  </tr>
</table>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>Ogun  East:</u></strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">iii.</span></td>
    <td width="94%"><span class="aboutus">Forestry Office, Old Secretariat, G.R.A. Ijebu-Ode.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Forestry Office, Government Secretariat, Oke-Agbo, Ijebu Igbo.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">v.</span></td>
    <td><span class="aboutus"> Forestry Office, Opp. Local Government Secretariat, Ogbere.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vi.</span></td>
    <td><span class="aboutus">Forestry Office, Ogun  Waterside Local Government Secretariat, Abigi</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vii.</span></td>
    <td><span class="aboutus">Forestry  Office, Sagamu Local  Government  Secretariat, Sagamu</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">viii.</span></td>
    <td><span class="aboutus">Forestry Office, Opposite J4  Primary School, Area J4.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ix.</span></td>
    <td><span class="aboutus">Forestry Office, Orita, Area  J6.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">x.</span></td>
    <td><span class="aboutus">Forestry Office, Ikenne  Local Government Area Office, Iperu.</span></td>
  </tr>
</table>
<p class="aboutus">&nbsp;</p>
<p class="aboutus"><strong><u>Ogun  West:</u></strong></p>
<p class="aboutus"><strong><u>&nbsp;</u></strong></p>
<p class="aboutus">(xi)       Forestry Office, Imeko.<br>
  (xii)      Forestry Office, building opp. Yewa South Local Government Sct,  Ilaro.<br>
  (xiii)     Forestry Office, Local Government Building,  Oja-Odan Motor Park.<br>
  (xiv)     Forestry Office, Yewa North Local  Government Secretariat, Ayetoro.   <br>
  (xv)      Forestry Office, Ado-Odo/Ota Local  Government Secretariat, Ota<br>
  (xvi)     Forestry Office, Off Roundabout, Idi-roko,  Owode/Otta Express Road, Owode Yewa.</p>
<p class="aboutus"><strong><u><a name="govt"></a></u></strong></p>
<p class="aboutus"><strong> </strong></p>
<p class="aboutus"><strong> <u>GOVERNMENT  FOREST RESERVES</u></strong><br>
  At the creation of the State in 1976, a total  of nine (9) Forest Reserves were inherited from the former Western State.  The reserves altogether cover an area of 2,732.62sq.km,  which is about 16% of the total land mass of Ogun State and spread across the  three Senatorial Districts of the State.</p>
<p class="aboutus"><br>
  <strong><u>INVESTMENT POLICY OF THE STATE  FORESTRY SUB-SECTOR</u></strong><br>
  Industrial development is a major factor in  the promotion of the economic development of the people.  Therefore, it is the responsibility of the  government to promote and facilitate industrial growth with a view to enhancing  accelerated economic development through industrialization of the state. The  state government’s investment policy in the forestry sub-sector includes:</p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">To ensure private  participation in the socio-economic development of the forestry sub-sector  especially in plantation establishment and eco-tourism,</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Promotion and encouragement  of rapid development of the processing, manufacturing and other allied  activities in the sub-sector.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Creation of a favourable and  enabling investment environment which will attract and enhance private  investment in the forestry sub-sector of our economy.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Maximize local value  addition through the processing of wood for export and utilization of wood  by-products. </span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vi.</span></td>
    <td><span class="aboutus">Sustenance of the state’s  leading role in the production of wood and wood materials.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vii.</span></td>
    <td><span class="aboutus">Sustenance of the existing  structural and institutional framework for the development of the forestry  sub-sector.</span></td>
  </tr>
</table>
<p class="aboutus">&nbsp;</p>
<h4 class="aboutus"><a href="#up"><br>
  Go Up
</a></h4>

<p class="aboutus"><strong><u>INVESTMENT  INCENTIVES IN THE FORESTRY SUB-SECTOR</u></strong><br>
  <br>
  In its bid to accelerate the pace of forest  resources development in the state through the private sector participation,  the state had recently introduced some measures such as:-</p>
<p class="aboutus">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%"><span class="aboutus">i.</span></td>
    <td width="94%"><span class="aboutus">Review of forestry law to  accommodate low tariffs for private plantation owners.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">ii.</span></td>
    <td><span class="aboutus">Provision of land in  designated rural areas for forest plantation establishment.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iii.</span></td>
    <td><span class="aboutus">Improved rural road network.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">iv.</span></td>
    <td><span class="aboutus">Open door policy through  close and healthy relationship between the state government and the Organized  Private Sector.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vi.</span></td>
    <td><span class="aboutus">Distribution/Sales of timber  seedlings to private investors at highly subsidized rates.</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">vii.</span></td>
    <td><span class="aboutus">Low tariff on logging  activities on private plantations</span></td>
  </tr>
  <tr>
    <td><span class="aboutus">viii.</span></td>
    <td><span class="aboutus">Wide - spread extension  services on forest plantation establishment.</span></td>
  </tr>
</table>
<p class="aboutus">&nbsp;</p>

<p class="aboutus"><strong><u>BUSINESS AND INVESTMENT OPPORTUNITIES IN THE  FORESTRY SUB-SECTOR OF  OGUN STATE</u></strong></p>
<p class="aboutus">Historically,  timber was one of the earliest produce exported regularly from Nigeria between  1806 and 1975 at the time when Forestry contributed greatly to the Gross  Domestic Product (GDP) and foreign exchange earning. The forest produce have  the potentials to be a major foreign exchange earner if adequate resources are  re-allocated to the sub-sector. Ogun state no doubt has abundant human,  material and ecological resources for sustainable forestry activities. The  investment opportunities which abound in the state’s forestry sub-sector are  enumerated below:-</p>
<ul>
  <li class="aboutus"><strong><u>Ecotourism  Development</u></strong></li>
</ul>
<p class="aboutus"><strong><u>&nbsp;</u></strong></p>
<p class="aboutus">The  state has some designated sites for eco-tourism development.  These sites are located at Arakanga near Abeokuta,  Area J4 – Omo Forest Reserve and Imeko.   The sites are ideal for Games reserves, Zoological and Botanical gardens  etc. If developed, they have high potentialities to attract foreign visitors  thereby generating the much needed foreign exchange.  This is a good business opportunity for the  would-be investors.</p>
<ul>
  <li class="aboutus"><strong><u>Wood  Processing and Allied Industries</u></strong></li>
</ul>
<p class="aboutus">There are investment and business  opportunities in the wood processing and allied industries.  These include:</p>
<ul>
  <li class="aboutus"><strong>Establishment  of sawmills</strong>.</li>

<p class="aboutus">At present, the State has over 200  registered sawmills.  Ogun State, being  one of the largest producers of wood and wood products can still accommodate  more sawmills and wood conversion/processing outfit.</p>

  <li class="aboutus"><strong>Establishment  of Carpentry/Furniture workshops</strong></li>

<p class="aboutus">Ogun State is the home of assorted wood  materials suitable for furniture raw materials etc.  Our investors could take full advantage of  these vital raw materials.</p>

  <li class="aboutus"><strong>Production  of pulpwood and paper. </strong></li>

<p class="aboutus">Ogun  State has a large expanse of land planted with Gmelina arborea.  This is an important raw material for paper  and pulpwood industry.  Investors are  advised to make use of this unique opportunity.</p>

  <li class="aboutus"><strong><u>Mulberry  Plantation/Sericulture</u></strong></li>
</ul>
<p class="aboutus"><strong><u>&nbsp;</u></strong></p>
<p class="aboutus">Silk  and silk materials are obtained primarily through the rearing of silk worms  (sericulture).  With the high demand for  silk products internationally, this area is no doubt a promising investment  opportunity. Ogun State is ecologically suitable for the production of mulberry  which is a vital food material for the silk worms.</p>

  <li class="aboutus"><strong><u>Snail  Production</u></strong></li>
</ul>
<p class="aboutus"><strong><u>&nbsp;</u></strong></p>
<p class="aboutus">Snails  are good delicacies in the catering industry.   Snails are also good export products.   There are ample opportunities for the investors in snail production and  processing.</p>

  <li class="aboutus"><strong><u>Honey  Production</u></strong></li>
</ul>
<p class="aboutus"><strong><u>&nbsp;</u></strong></p>
<p class="aboutus">Honey  and honey materials are becoming more important in the international  markets.  This is due partly to the  importance of these products in the pharmaceutical industry.  The state has a comparative advantage in  honey production.</p>
<p>&nbsp;</p>

  <li class="aboutus"><strong><u>Mushroom  Production</u></strong></li>
</ul>
<p class="aboutus">This is a Non-Timber Forest Product  (NTFP) which is a good source of food for the teeming population.  The would-be investors should take the  advantage of our suitable climatic and ecological factors for mushroom  production and canning for export. </p>
<p class="aboutus"><strong> <u><a name="conclusion"></a></u></strong></p>
<p>&nbsp;</p>
<p class="aboutus"><strong> <u>CONCLUSION</u></strong><br>
  The  private sector driven economic policy of the present administration in Ogun State  has led to a policy shift towards the private sector. To further consolidate  our past achievements, concerted efforts are on to create a conducive and  enabling business environment for investors. <br>
  Similarly,  part of the strategies to achieve aggressive Afforestation is the involvement  and encouragement of schools, communities and individuals to raise forest plots  on their idle lands. As an incentive, tree seedlings were sold to them at  reduced rates and at times distributed to the public at no cost.<br>
  This clarion call to all and sundry to imbibe  the culture of tree planting is a way of reducing and mitigating the effect of  climate change. With these efforts, there is no doubt that the United Nations’  Millennium Development Goals on Environment Sustainability would be achieved.</p>
<p>&nbsp;</p>
<div></div>
  </div>
<h4><a href="#up">Go Up
</a></h4>
<h4>&nbsp;</h4>
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
