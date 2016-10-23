<?php
if(isset($_GET["page"])){

	if ($_GET['page']=="device") {
		include_once('Content/device.php');
	}
	elseif ($_GET['page']=="dealer") {
		include_once('Content/dealer.php');
	}
	elseif ($_GET['page']=="dev_user") {
		include_once('Content/devuser.php');
	}
	else{
	    include_once('Content/workbench.php');
	}
}else{
	include_once('Content/workbench.php');
}
?>