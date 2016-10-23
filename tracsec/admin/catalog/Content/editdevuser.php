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
                <h4 class="modal-title" id="myModalLabel">Add Device User >> <?php echo $cutomer; ?></h4>
            </div>
            <div class="modal-body">
                <div id="edit_status_text<?php echo $id; ?>"></div>
                <input type="hidden" id="edit_dev_user" name="dev_user" value="<?php echo $value['user_id']; ?>">
                Device No: <input type="text" id="edit_dev_no" name="dev_no" value="<?php echo $id; ?>"><span id="edit_txt_no"></span><br><br>
                Device Imei: <input type="text" id="edit_dev_imei" name="dev_imei" value="<?php echo $imei; ?>"><span id="edit_txt_imei"></span><br><br>
                

                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit"  id="btn_edit<?php echo $id; ?>" name="submit" value="Edit" class="btn btn-primary"/>
                </form>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
$("#btn_edit<?php echo $id; ?>").click(function(){
    //get the form values
 var edit_devuser = $('#edit_dev_no').val();  
 var edit_imei = $('#edit_dev_imei').val();  
 var edit_user = $('#edit_dev_user').val();
 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"edit_devuser":edit_devuser,"edit_imei":edit_imei,"edit_user":edit_user};
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
        $("#edit_status_text<?php echo $id; ?>").html(data);
        $('#edit_dev_no').val();
        $('#edit_dev_imei').val();
        $('#txtHint').val();
         }

}); 
}); 

// check imei
$("#edit_dev_imei").click(function(){
    //get the form values  
 var dev_imei = $('#edit_dev_no').val();
    
 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"dev_imei":dev_imei};
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
        $('#edit_dev_imei').val(data);
         }

});
}); 
// check No
$("#edit_dev_no").click(function(){
    //get the form values  
 var dev_nos = $('#edit_dev_no').val();     
 if (dev_nos == "") {
    document.getElementById("edit_txt_no").innerHTML = "";
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
    url : "catalog/Content/manage.devuser.php",
    type: "POST",
    data : myData,
    success: function(data,status,xhr)
     {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#edit_txt_no").html(data);
         }

}); 
 };
});
</script>