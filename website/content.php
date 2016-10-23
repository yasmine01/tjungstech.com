<?php 
if(isset($_GET["page"]) &&  $_GET['page']=="home")
{
	include_once('content/home.php');
}
else if(isset($_GET["page"]) &&  $_GET['page']=="aboutus")
{
	include_once('content/aboutus.php');
}
else if(isset($_GET["page"]) && $_GET['page']=="service")
{
	include_once('content/service.php');
}
else if(isset($_GET["page"]) && $_GET['page']=="contactus")
{
	include_once('content/contactus.php');
}
else if(isset($_GET["page"]) && $_GET['page']=="login")
{
	include_once('Account/login.php');
}
else if(isset($_GET["page"]) && $_GET['page']=="register") {
	include_once('Account/register.php');
}

else if(isset($_GET["page"]) && $_GET['page']=="tracsec")
{
	include_once('content/tracsec.php');

}
else
{
	include_once('content/home.php');
}
?>