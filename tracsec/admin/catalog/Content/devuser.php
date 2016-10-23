<?php
    include_once('manage.devuser.php');
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
            <span class="count_top"><i class="fa fa-user"></i> Total Owners</span>
            <div class="count"><?php echo $count; ?></div>
        </div>
    </div>
    <!-- /top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">
                <div class="x_title">

                    <h2>Device Owners<small>TracSec</small></h2>
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



                    <button style="background-color: #FF8000; border-color: #FF8000;border-radius:0px" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add Device User</button>
                    <?php
                    include ("adddevuser.php");
                    ?>

                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">

                                </th>
                                <th class="column-title">Devic No. </th>
                                <th class="column-title">Device IMEI </th>
                                <th class="column-title">Device Owner</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            if($list_devuser == 0){
                            ?>
                            <tr class="even pointer">
                                <td class=" " colspan="5" align="center">No Device users are added!</td>
                            </tr>
                            <?php
                            }else{
                                foreach ($list_devuser as $key => $value) {
                                    if(isset($value['mname']))
                                        $cutomer = $value['fname'].' '.$value['mname'].' '.$value['lname'];
                                    else
                                        $cutomer = $value['fname'].' '.$value['lname'];

                            ?>
                            <tr class="even pointer">
                                <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td class=" "><?php echo $value['device_no']; ?></td>
                                <td class=" "><?php echo $value['device_imei']; ?></td>
                                <td class=" "><?php echo $cutomer; ?></td>
                                <td class=" last">

                                <button style="background-color: #FF8000; border-color: #FF8000;border-radius:0px" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $value['device_no']; ?>">Edit</button>
                                <?php
                                include ("editdevuser.php");
                                ?>

                                <input id="txt_delete<?php echo $value['device_no']; ?>" type="hidden" value="<?php echo $value['device_no']; ?>">
                                <button class="btn btn-primary" id="btn_delete<?php echo $value['device_no']; ?>" value="<?php echo $value['device_no']; ?>">Delete</button>
                                
                                </td>
                                 <script>
<!-- 
//Browser Support Code
 function ajaxFunction(){
 var ajaxRequest;  // The variable that makes Ajax possible!

 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 } }
//on the click of the submit button 
$("#btn_delete<?php echo $value['device_no']; ?>").click(function(){
var x;
if (confirm("Do want to Delete device <?php echo $value['device_no']; ?> used by <?php echo $cutomer; ?>?") == true) {
 var deldev = $('#txt_delete<?php echo $value['device_no']; ?>').val();
 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"deldev":deldev};
 //call your .php script in the background, 
 //when it returns it will call the success function if the request was successful or 
 //the error one if there was an issue (like a 404, 500 or any other error status)
 $.ajax({
    url : "catalog/Content/manage.devuser.php",
    type: "POST",
    data : myData,
    success: function(data,status,xhr)
     {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#status_text").html(data);
       window.location.replace("http://localhost/Tjungstech/admin/admindashboardIndex.php?page=dev_user");
         }

}); 
 
                                    
} else {
    x = "You pressed Cancel!";
}
document.getElementById("demo").innerHTML = x;
 
}); 
</script>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                            <tr><td colspan="5"><center><?php echo $pagination; ?></center></td></tr>
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
