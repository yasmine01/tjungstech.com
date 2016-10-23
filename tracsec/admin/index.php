<?php
 include_once('../../script.php');  
 strip_php_extension();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TracSec | Tjungstech</title>
    <link rel="shortcut icon" href="fa fa-facebook" />
    <!-- Bootstrap -->
    <link href="../../style/dash_css/tjungstech-bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../style/dash_css/tjungstech-font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../style/dash_css/tjungstech-nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../style/dash_css/tjungstech-custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
       <!--side navigation-->
        <?php
        include_once ('catalog/sidemenu.php');
        ?>
        <!--side navigation -->
        <!-- top navigation -->
        <?php
        include_once ('catalog/topmenu.php');
        ?>
        <!-- /top navigation -->
        <!-- page content -->
        <?php
        include_once ('catalog/content.php');
        ?>
        <!-- /page content -->
        <!-- footer content -->
        <?php
        include_once('catalog/footer.php');
        ?>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../../style/dash_js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../style/dash_js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../style/dash_js/fastclick.js"></script>
<!-- NProgress -->
<script src="../../style/dash_js/nprogress.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../style/dash_js/custom.min.js"></script>


</body>
</html>