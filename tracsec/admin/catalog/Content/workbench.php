<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap -->
    <link href="../../css/tjungstech-bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../css/fonts/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../css/tjungstech-nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../css/tjungstech-custom.min.css" rel="stylesheet">

</head>


<div class="right_col" role="main" style="min-height: 2093px;">
    <!-- top tiles -->
    <div class="row tile_count">
    <?php
    include_once('class.managedevice.php');
	$init = new manageDev();
	$count = $init->countDevice();
	?>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
            <div class="count"><?php echo $count; ?></div>
        </div>
    <?php
    include_once('class.managedevice.php');
	$init = new manageDev();
	$count = $init->countDevice();
	?>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Total Dealer</span>
            <div class="count"><?php echo $count; ?></div>
        </div>
     <?php
    include_once('class.managedevice.php');
    $init = new manageDev();
    $count = $init->countDevice();
    ?>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Total Owner</span>
            <div class="count"><?php echo $count; ?></div>
        </div>
    </div>
    <!-- /top tiles -->
    </div>

<!--    end of table-->


<!--end2-->



    <br>






<!-- jQuery -->
<script src="../../js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../js/fastclick.js"></script>
<!-- NProgress -->
<script src="../../js/nprogress.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../js/custom.min.js"></script>
<!-- iCheck -->
<script src="../../js/icheck.min.js"></script>

</html>
