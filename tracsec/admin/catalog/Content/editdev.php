<!-- Definition part  -->
<?php 
$id=$value['device_no'];
$imei=$value['device_imei'];
?>
<div class="modal fade bs-example-modal-lg<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Device <?php echo $id; ?></h4>
            </div>
            <div class="modal-body">
                <div id="edit_status_text<?php echo $id; ?>"></div>
                ID: <input type="text" id="edit_dev_nos<?php echo $id; ?>" name="dev_no" value="<?php echo $id; ?>"><span id="edit_txt_no<?php echo $id; ?>"></span><br><br>
                IMEI: <input type="text" id="edit_dev_imei<?php echo $id; ?>" name="dev_imei" value="<?php echo $imei; ?>"><span id="edit_txt_imei<?php echo $id; ?>"></span><br><br>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit"  id="btn_edit<?php echo $id; ?>" name="submit" value="Edit" class="btn btn-primary"/>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
//on the click of the submit button 
$("#btn_edit<?php echo $id; ?>").click(function(){
    //get the form values
 var edit_dev = $('#edit_dev_nos<?php echo $id; ?>').val();     
  var edit_imei = $('#edit_dev_imei<?php echo $id; ?>').val();

 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"edit_dev":edit_dev,"edit_imei":edit_imei};
 //call your .php script in the background, 
 //when it returns it will call the success function if the request was successful or 
 //the error one if there was an issue (like a 404, 500 or any other error status)
 $.ajax({
    url : "catalog/Content/manage.device.php",
    type: "POST",
    data : myData,
    success: function(data,status,xhr)
     {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#edit_status_text<?php echo $id; ?>").html(data);
         }

}); 
}); 
// check Nos
$("#edit_dev_nos<?php echo $id; ?>").click(function(){
    //get the form values  
 var dev_nos = $('#edit_dev_nos<?php echo $id; ?>').val();     
 if (dev_nos == "") {
    document.getElementById("edit_txt_no<?php echo $id; ?>").innerHTML = "";
        return;
 }else{
    
 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"dev_nos":dev_nos};
 //call your .php script in the background, 
 //when it returns it will call the success function if the request was successful or 
 //the error one if there was an issue (like a 404, 500 or any other error status)
 $.ajax({
    url : "catalog/Content/manage.device.php",
    type: "POST",
    data : myData,
    success: function(data,status,xhr)
     {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#edit_txt_no<?php echo $id; ?>").html(data);
         }

}); 
 };
}); 
// check imei
$("#edit_dev_imei<?php echo $id; ?>").click(function(){
    //get the form values  
 var dev_imei = $('#edit_dev_imei<?php echo $id; ?>').val();     
 if (dev_imei == "") {
    document.getElementById("edit_txt_imei<?php echo $id; ?>").innerHTML = "";
        return;
 }else{
    
 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"dev_imei":dev_imei};
 //call your .php script in the background, 
 //when it returns it will call the success function if the request was successful or 
 //the error one if there was an issue (like a 404, 500 or any other error status)
 $.ajax({
    url : "catalog/Content/manage.device.php",
    type: "POST",
    data : myData,
    success: function(data,status,xhr)
     {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#edit_txt_imei<?php echo $id; ?>").html(data);
         }

}); 
 };
}); 
</script>