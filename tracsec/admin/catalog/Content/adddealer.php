<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Dealer</h4>
            </div>
            <div class="modal-body">
                First Name: <input type="text" id="fname" name="fname">
                Middle Name: <input type="text" id="dev_no" name="dev_no">
                Last Name: <input type="text" id="dev_no" name="dev_no"><br><br>
                Email: <input type="text" id="email" name="email"><span id="txt_email"></span><br><br>
                Phone No: <input type="text" id="phone" name="phone"><span id="txt_phone"></span><br><br>
                Company Name: <input type="text" id="cname" name="cname"><span id="txt_cname"></span><br><br>
                Company Reg. No: <input type="text" id="crno" name="crno"><span id="txt_crno"></span><br><br>
                Company PAN No: <input type="text" id="cpno" name="cpno"><span id="txt_cpno"></span><br><br>
                Company contact No: <input type="text" id="ccno" name="ccno"><span id="txt_ccno"></span><br><br>
                
                <div class="col-lg-12" style="margin-top:10px">
                         <label>Select Service Image</label>
                    <div class="image-upload">
                        <label style="width:250px" for="ppt" data-role="button"  data-inline="true" data-mini="true" data-corners="false">
                             <img id="uploadPreview" src="././images/SelectImg.jpg"  style="width:250px; height:200px; margin-top:10px" class="img-thumbnail">
                        </label>
                    </div>
                     <input id="ppt" onchange="encodeImageFileAsURL();" accept=".png,.jpeg,.jpg" type="file" name="image" multiple data-role="button"  data-inline="true" data-mini="true" data-corners="false" style="opacity: 0;"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="btn_close" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_submit" class="btn btn-primary">Add</button>
            </div>

        </div>
    </div>
</div>
<script>
var base64img ="";
    $("input").change(function(e) {

    for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {

        var file = e.originalEvent.srcElement.files[i];

        var img = document.createElement("selectImg");
        var reader = new FileReader();
        reader.onloadend = function() {
             img.src = reader.result;
        }
        reader.readAsDataURL(file);
        $("input").after(img);
    }
});
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
 //base64 images//
 function encodeImageFileAsURL() {

    var filesSelected = document.getElementById("ppt").files;
    if (filesSelected.length > 0) {
      var fileToLoad = filesSelected[0];

      var fileReader = new FileReader();

      fileReader.onload = function(fileLoadedEvent) {
        var srcData = fileLoadedEvent.target.result; // <--- data: base64
         base64img=srcData;
       
      }
      fileReader.readAsDataURL(fileToLoad);
    }
    var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("ppt").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
  }
//on the click of the submit button 
$("#btn_submit").click(function(){
    //get the form values
 var service_name = $('#service_name').val();
 var subcat_name = $('#subcat_name').val();
 var cat_name = $('#cat_name').val();
 var price = $('#price').val();
 var description = $('#description').val();
 var photo = base64img;
 var location = $('#location').val();
 // make the postdata
 // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
 // alert(postData);
 var myData={"service_name":service_name,"subcat_name":subcat_name,"cat_name":cat_name,"price":price,"description":description,"photo":photo,"location":location};
 //call your .php script in the background, 
 //when it returns it will call the success function if the request was successful or 
 //the error one if there was an issue (like a 404, 500 or any other error status)
 $.ajax({
    url : "catalog/Content/manage.services.php",
    type: "POST",
    data : myData,
    success: function(data,status,xhr)
     {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#status_text1").html(data);
        $('#service_name').val();
        $('#subcat_name').val();
        $('#cat_name').val();
        $('#price').val();
        $('#description').val();
        $('#photo').val();
        $('#location').val();
         }

}); 
}); 
$("#btn_close").click(function(){
  location.reload();
});
</script>
