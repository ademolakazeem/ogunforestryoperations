<?php
$acc_level = "";
if(isset($_SESSION['levelaccess']))
{
	$acc_level = $_SESSION['levelaccess'];
}

if($acc_level == 1 || $acc_level == 2 || $acc_level == 3)
{}
?>
<script language="javascript">
function confirmReset()
{
	if(confirm("Do you want to reset this password\nProceed?")){
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
<script language="javascript">
function confirmRemove()
{
	if(confirm("Do you want to remove this Contractor\nProceed?")){
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
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a href="man_contractor_transaction.php?con_id=<?php echo $con_id;?>&transaction_id=<?php echo $transaction_id;?>">Check  Transaction</a>  </li>
  <!--<li><a href="_update_contractor_account.php?con_id=<?php echo $rs['contractor_id'];?>">Edit Transaction
  </br></a></li>-->
  


  <li><a href="_new_contractor_transaction.php?con_id=<?php echo $rs['contractor_id'];?>">New Transaction</a></li> 
  <li><a href="transaction_history.php?con_id=<?php echo $rs['contractor_id'];?>&transaction_id=<?php echo $rs['id'];?>">Transaction History</a></li>
<?php
//can print transaction only if has been approved
if($approval_status == 1)
{
?>
  <li><a href="print_contractor_transaction.php?con_id=<?php echo $rs['contractor_id'];?>&transaction_id=<?php echo $rs['id'];?>" target="_blank" javascript"return false;">Print Transaction</a></li>
<?php  }
else{ echo "<li><a>&nbsp;</a></li>";}
 ?>

<!--  <li><a href="man_contractor.php?con_id=<?php //echo $rs['contractor_id'];?>&amp;&amp;remove=yes">Remove</a></li>-->
</ul>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
