<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Device User</h4>
            </div>
            <div class="modal-body">
                <div id="status_text1">
                </div>
                Device No: <input type="text" id="dev_no" name="dev_no"><span id="txt_no"></span><br><br>
                Device Imei: <input type="text" id="dev_imei" name="dev_imei"><span id="txt_imei"></span><br><br>
                Device Owner: <input type="text" id="dev_user" name="dev_user"><span id="txtHint"></span><br><br>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit"  id="btn_submit" name="submit" value="Save" class="btn btn-primary"/>
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
$("#btn_submit").click(function(){
    //get the form values
 var dev_no = $('#dev_no').val();  
 var dev_imei = $('#dev_imei').val();  
 var dev_user = $('#dev_user').val();     
 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"dev_no":dev_no,"dev_imei":dev_imei,"dev_user":dev_user};
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
        $("#status_text1").html(data);
        $('#dev_no').val();
        $('#dev_imei').val();
        $('#txtHint').val();
         }

}); 
}); 

$("#dev_user").click(function(){
    //get the form values  
 var dev_user = $('#dev_user').val();     
 if (dev_user == "") {
    document.getElementById("txtHint").innerHTML = "";
        return;
 }else{

 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"dev_user":dev_user};
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
        $("#txtHint").html(data); 

         }

}); 
 };
}); 
// check imei
$("#dev_imei").click(function(){
    //get the form values  
 var dev_imei = $('#dev_no').val();     
 
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
        $('#dev_imei').val(data);
         }

}); 
}); 
// check No
$("#dev_no").click(function(){
    //get the form values  
 var dev_nos = $('#dev_no').val();     
 if (dev_nos == "") {
    document.getElementById("txt_no").innerHTML = "";
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
        $("#txt_no").html(data);
         }

}); 
 };
});
</script>