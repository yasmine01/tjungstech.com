<?php
 include_once('../script.php');  
 strip_php_extension();  
?>
<script src="../style/js/jquery.min.js"></script>
<style>
    .header {
        background: #575F65;
    }
</style>

<div class="wrapper">
   <!--  <div class="copyright">
        <div class="container">
            <ul class="list-inline" style="margin-top: 9px; color:white;float: right">

               <!-- <li id='menu_username'></i> <span class="hidden-xs hidden-sm hidden-md">Welcome: Username</span></a></li> -->
<!-- 
                <li id ="register"><a href="index.php?page=register" ><i class="fa fa-book"></i> <span >Register</span></a></li>
                <li id="login"><a href="index.php?page=login" ><i class="fa fa-lock"></i> <span >Log in </span></a></li>


            </ul>
        </div>
    </div> --> <!-- --> 
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="#">Tjungs<span>Tech</span></a> </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li id="home"><a href="?page=home">Home<span class="sr-only">(current)</span></a></li>
                  
     <li id="aboutus"><a href="?page=aboutus">About Us</a></li>
                   <li  id="ourproducts" class="dropdown"><a href="http://fiyodo.azurewebsites.net/index.php?route=product/category&amp;path=211" class="dropdown-toggle" data-toggle="dropdown">Our Products<span class="caret"></span></a>

                           <ul class="dropdown-menu">
          <li id="tracsec_our_product_item1"><a href="?page=tracsec">TracSec</a></li>
<!--          <li><a href="#">Mobile Application</a></li>-->
<!--          <li><a href="#">Brochures</a></li>-->
        </ul>
                        
        </li>
               
                    <li id="service"><a href="?page=service">Services</a></li>
                    <li id="contactus"><a href="?page=contactus" class="last">Contact Us</a></li>

                  </ul>
                 
            </div>
            <!-- /.navbar-collapse --> 
        </div>
       
    </div>
    </div>
     <?php include_once('content.php');?>
     <?php include_once('footer.php'); ?>



    