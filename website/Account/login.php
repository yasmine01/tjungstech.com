 <div>
      <!-- <a class="hiddenanchor" id="signup"></a> -->
      <!-- <a class="hiddenanchor" id="signin"></a> -->
      <div class="container">
      <div class="header-intro" style="margin-bottom:-40px">
        <h2>Log in</h2>
        <p>Please Enter your Login details.</p>

    </div>
        <div class="animate form login_form">
         <div class="row" style="margin-top:50px">
         <div class="col-lg-4 col-md-5  col-lg-offset-4 col-md-offset-4">
          <section class="login_content">
            <div class="loader_icon">
            </div>
            <form method="post" >

              <div class="panel panel-success" style="border-radius:0px ; margin-top: -15px;border-radius:0px;">
                  <div class="panel title" style="color:black">
                  </div>
                <div class="panel-body" style="margin-bottom:20px ; margin-top:-18px">
                <span style="color:red;font-size:12px" id="error_Username">Username field is required</span>
                  <div>
                    <input type="text"  id="txt_username" name="txt_username" class="form-control" style="color:black;margin-top: 10px  ; " placeholder="Username"  />
                  </div>
                  <span style="color:red;font-size:12px" class="left" id=error_Password>Password field is required</span>
                  <div style="margin-bottom: :20px">
                  <input type="password" id="txt_password" name="txt_password" class="form-control" style="color:black ; margin-top: -0px" placeholder="Password"  style="margin-bottom:-4px"/>
                  </div>
                   <div id="loginerror" style="margin-top:-12px" class="alert alert-danger alert-dismissible fade in" role="alert">

                    <strong>Error! </strong>Username or password is invalid
                  </div> 
                </div>
                <div class="panel-footer" style="height:40px" >
                  <div >
                    <div class="checkbox left" style="margin-top: -2px;">
                            <label style="color:black">
                              <input type="checkbox" value="" name="cbo_remember_me" id="cbo_remember_me">Remember me
                            </label>
                          </div>
                          

                    <input type="submit"  class="submit-bt"  value="Log in" name="login" id="btn_login"  style="margin-top:-33px ;float:right;" >


                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="separator">

                <p class="change_link">New to site?
                    <a href="CustomerRegister.php"  style="color:#FF8000" >Create Account</a>
                </p>
                <div class="clearfix"></div>
                <br />
<!--                <div  id="loader">-->
<!--                    <img src="../images/loader/ajax-loader.gif">-->
<!--                  </div><!-- the ajax result wrapper -->

              </div>
            </form>
                 </section>
         </div>
         </div>
        </div>

      </div>
      </div>
    </div>
 <script src="././js/jquery.min.js"></script>
 <script type="text/javascript">
     $(function(){
         $('#loginerror').hide();
         $('#loader').hide();
         $('#timeLogin').html('Login Page');
         $('#error_Username').hide();
         $('#error_Password').hide();
     });

 </script>
 <script type="text/javascript">
     $(function(){
         $('#btn_login').click(function()
         {
             var username  = $('#txt_username').val();
             var password  =$('#txt_password').val();
             //alert(username);
             if(username!='' && password!='')
             {
                 alert("done");

               //  $('#loader').show();
                 var urltopass='action=login&username=' + username + '&password=' + password;
                 $.ajax({
                     type : "POST",
                     async : false,
                     data:urltopass,
                     url:'../Function/Functionauthentication.php',
                     success: function(responseText)
                     {
                         //alert(username);
                         if(responseText==0)
                         {
                             $('#error_Username').hide();
                             $('#error_Password').show();
                             $('#loginerror').show();
                             $('#error_Username').hide();
                             $('#error_Password').hide();
                             //a.html('<span class="error">Incorrect username or password</span>');
                         }
                         else if(responseText=="C")
                         {

                             window.location="../../customer/dashboard.php";
                         }
                         else if(responseText=="D")
                         {
                             window.location="dashboard.php";
                         }
                         else
                         {
                             alert('error in sql query');
                         }
                     },
                 });
                 //$('#loader').hide();
             }
             else if(username=='' && password==''){
                 $('#error_Username').show();
                 $('#error_Password').show();
                 $('#loginerror').hide();
             }
             else if(username==''){
                 $('#error_Username').show();
                 $('#error_Password').hide();
                 $('#loginerror').hide();
             }
             else if(password==''){
                 $('#error_Username').hide();
                 $('#error_Password').show();
                 $('#loginerror').hide();
             }
             return false;


         });
     });
 </script>

 