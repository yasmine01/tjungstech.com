<?php
 include_once('manage.dealer.php');
?>
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
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Dealers</span>
            <div class="count"><?php echo $count; ?></div>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">
                <div class="x_title">

                    <h2>Customers<small>TracSec</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">



                    <button style="background-color: #FF8000; border-color: #FF8000;border-radius:0px" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add dealer</button>
                    <?php
                    include ("adddealer.php");
                    ?>


                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">

                                </th>
                                <th class="column-title">No. </th>
                                <th class="column-title">Name </th>
                                <th class="column-title">Email </th>
                                <th class="column-title"> Phone </th>
                                <th class="column-title"> Company </th>
                                <th class="column-title"> Company Reg. No. </th>
                                <th class="column-title"> Company PAN No. </th>
                                <th class="column-title"> Company Phone </th>
                                <th class="column-title"> Company Logo </th>
                                <th class="column-title"> Status </th>
                                <th class="column-title no-link last"><span class="nobr">Operate</span>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                            if($list_dealer == 0){
                            ?>
                            <tr class="even pointer">
                                <td class=" " colspan="12" align="center">No Dealer are added!</td>
                            </tr>
                            <?php
                            }else{
                                foreach ($list_dealer as $key => $value) {
                                    if(isset($value['middlename']))
                                        $customer = $value['firstname'].' '.$value['middlename'].' '.$value['lastname'];
                                    else
                                        $customer = $value['firstname'].' '.$value['lastname'];

                            ?>
                            <tr class="even pointer">
                                <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td class=" "><?php echo $value['sno']; ?></td>
                                <td class=" "><?php echo $customer; ?></td>
                                <td class=" "><?php echo $value['email']; ?></td>
                                <td class=" "><?php echo $value['pnumber']; ?></td>
                                <td class=" "><?php echo $value['cname']; ?></td>
                                <td class=" "><?php echo $value['crnumber']; ?></td>
                                <td class=" "><?php echo $value['cpannumber']; ?></td>
                                <td class=" "><?php echo $value['ccnumber']; ?></td>
                                <td class=" "><?php echo $value['clogo']; ?></td>
                                <td class=" "><?php echo $value['status']; ?></td>

                                <td class=" last"><a href="#">View</a>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>



                </div>

                </div>

        </div>
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
