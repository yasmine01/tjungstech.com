<div class="modal fade" id="tracsec_franchise" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Franchise Application Form</h4>
            </div>
            <div class="modal-body">


                <div class="right_col" role="main">
                    <div class="">
                        <div class="clearfix"></div>
                        <div class="row" >
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <form class="form-horizontal form-label-left"  id="myForm"  novalidate>
<!--                                            <h3><span class="section text-center">Franchise Application Form</span></h3>-->
                                            <div class="item form-group">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Full Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-7 col-sm-6 col-xs-12">
                                                    <input id="txt_fullname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_fullname" placeholder="both name(s) e.g Ram Shrestha" required="required" type="text">
                                                </div>
                                            </div>
                                            <div class="item form-group"  style="margin-top: -40px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Address<span class="required">*</span>
                                                </label>
                                                <div class="col-md-7 col-sm-6 col-xs-12">
                                                    <input id="txt_address" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_address" placeholder="e.g Kapan, Kathmandu, Nepal" required="required" type="text">
                                                </div>
                                            </div>

                                            <div class="item form-group" style="margin-top: -40px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="telephone">Contact Number <span class="required">*</span>
                                                </label>
                                                <div class="col-md-7 col-sm-6 col-xs-12">
                                                    <input type="tel" id="txt_cnumber" name="txt_cnumber" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: 20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <input type="email" id="txt_email" name="txt_email" required="required" placeholder="example (something@gmail.com)" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: 20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="website">Business Name<span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <input type="text" id="txt_Bname"  name="txt_Bname" required="required" placeholder="example (TJungs-Tech Pvt. Ltd.)" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: -20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="occupation">Past Business Name
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <input id="txt_PBname" type="text" name="txt_PBname" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Optional">
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: -20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="website">Business Location<span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <input type="text" id="txt_Blocation"  name="txt_Blocation" required="required"  class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: -20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">Invested in Business (NRP) <span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <input type="number" id="txt_investedamount" name="txt_investedamount"  placeholder="Optional" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: -10px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="website">Area of Franchise <span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <input type="text"  id="txt_Areaoffranchise" name="txt_Areaoffranchise" placeholder="Optional" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="item form-group" style="margin-top: -20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="website">Do you know about Franchise? <span class="required">*</span>
                                                </label>
                                                <div class="col-md-7 col-sm-6 col-xs-12">
                                                    <select class="form-control col-md-7 col-xs-12"  id="txt_Q1" name="txt_Q1" required="required">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: -8px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">Select the Amount<span class="required">*</span>
                                                </label>
                                                <div class="col-md-7 col-sm-6 col-xs-12">
                                                    <select class="form-control col-md-7 col-xs-12" id="txt_Q2" name="txt_Q2" required="required">
                                                        <option>How much you want to earn per month?</option>
                                                        <option>20,000</option>
                                                        <option>50,000</option>
                                                        <option>80,000</option>
                                                        <option>1,00,000</option>
                                                        <option>1,50,000</option>
                                                        <option>2,00,000</option>
                                                        <option>2,50,000</option>
                                                        <option>3,00,000</option>
                                                        <option>3,00,000 - 5,00,000</option>
                                                        <option>5,00,000 - 10,00,000</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: 20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="textarea">   Why do you want to become a Franchise? <span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <textarea required="required" id="txt_Q3" name="txt_Q3" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>
                                            <div class="item form-group" style="margin-top: -20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">What motivates you?<span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <select class="form-control  col-md-7 col-xs-12" id="txt_Q4" name="txt_Q4" required="required">

                                                        <option value="Good Income"> Good Income</option>
                                                        <option value="Innovative Technology">Innovative Technology</option>
                                                        <option value="Team">Team</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="item form-group" style="margin-top: 20px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">  How much you want to Invest? (NRP) <span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <input type="number" id="txt_Q5" name="txt_Q5" placeholder="Optional" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="item form-group"  style="margin-top: -8px">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">    Do you want to be Franchise  or a sub-Franchise ?<span class="required">*</span>
                                                </label>
                                                <div class=" col-md-7 col-sm-6 col-xs-12">
                                                    <select class="form-control col-md-7 col-xs-12" id="txt_Q6" name="txt_Q6" required="required">
                                                        <option value="Franchise">Franchise</option>
                                                        <option value="Sub-Franchise">Sub-Franchise</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="col-lg-6 col-md-6 col-xs-12 col-md-offset-3 ">
                                                <div id="validation" style="margin-top:-12px" class="alert alert-danger alert-dismissible fade in text-center" role="alert" >

                                                    <strong>Fill all the required field (*)</strong>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-xs-12 col-md-offset-3">
                                                <div id="validation2" style="margin-top:-12px" class="alert alert-success alert-dismissible fade in text-center" role="alert" >

                                                    <strong>Application have been sent</strong>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-md-offset-3" style=" margin-top: -6px;">

                                                <input style="background-color: #ff8000; color:#ffffff" type="button" class="btn " value="Submit Application" name="save" id="sub"/>
                                            </div>

                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <script type="text/javascript">
                $(function() {
                    $('#validation').hide();
                    // $('#validation1').hide();
                    $('#validation2').hide();
                    $('#sub').click(function(){
                        var fullname = $('#txt_fullname').val();
                        var address = $('#txt_address').val();
                        var Cnumber = $('#txt_cnumber').val();
                        var email = $('#txt_email').val();
                        var Bname = $('#txt_Bname').val();
                        var PBname = $('#txt_PBname').val();
                        var BLocation = $('#txt_Blocation').val();
                        var investedamount = $('#txt_investedamount').val();
                        var Areaoffranchise = $('#txt_Areaoffranchise').val();
                        var txt_Q1 =  $('#txt_Q1').val();
                        var txt_Q2 =  $('#txt_Q2').val();
                        var txt_Q3=  $('#txt_Q3').val();
                        var txt_Q4 =  $('#txt_Q4').val();
                        var txt_Q5 =  $('#txt_Q5').val();
                        var txt_Q6 =  $('#txt_Q6').val();
                        if(fullname=="" || address=="" || Cnumber=="" || email=="" || Bname=="" ||  BLocation=="" ){
                            $('#validation').show();
                            //  $('#validation1').show();
                            $('#validation2').hide();
                        }
                        else if(txt_Q2=="How much you want to earn per month?")
                        {
                            $('#validation').hide();
                            // $('#validation1').show();
                            $('#validation2').hide();
                        }
                        else {
                            //  alert(fullname + '\n' + address + '\n' + Cnumber + '\n' + email + '\n' + Bname + '\n' + PBname + '\n' + BLocation + '\n' + investedamount +'\n' +Areaoffranchise +'\n' +txt_Q1+'\n' +txt_Q2+'\n' +txt_Q3+'\n' +txt_Q4 );
                            $.ajax({

                                type : "POST",
                                url : "function/InsertFranshiseapplication.php",
                                async : false,
                                data : {
                                    buttonsave:1,
                                    txt_fullname:fullname,
                                    txt_address:address,
                                    txt_cnumber:Cnumber,
                                    txt_email:email,
                                    txt_Bname:Bname,
                                    txt_PBname:PBname,
                                    txt_Blocation:BLocation,
                                    txt_investedamount:investedamount,
                                    txt_Areaoffranchise:Areaoffranchise,
                                    txt_Q1:txt_Q1,
                                    txt_Q2:txt_Q2,
                                    txt_Q3:txt_Q3,
                                    txt_Q4:txt_Q4,
                                    txt_Q5:txt_Q5,
                                    txt_Q6:txt_Q6
                                },
                                success:function(result)
                                {
                                    if(result==1)
                                    {
                                        $('#validation').hide();
                                        // $('#validation1').hide();
                                        $('#validation2').show();

                                    }
                                    else
                                    {

                                        alert('error in sql query');
                                    }

                                }
                            });
                        }
                    });
                });
            </script>

            <!-- FastClick -->
            <script src="js/fastclick.js"></script>
            <!-- NProgress -->
            <script src="js/nprogress.js"></script>
            <!-- validator -->
            <script src="js/validator.js"></script>

            <!-- Custom Theme Scripts -->
            <script src="js/custom.min.js"></script>
            <!-- validator -->
            <script>
                // initialize the validator function
                validator.message.date = 'not a real date';

                // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
                $('form')
                    .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                    .on('change', 'select.required', validator.checkField)
                    .on('keypress', 'input[required][pattern]', validator.keypress);

                $('.multi.required').on('keyup blur', 'input', function() {
                    validator.checkField.apply($(this).siblings().last()[0]);
                });

                $('form').submit(function(e) {
                    e.preventDefault();
                    var submit = true;

                    // evaluate the form using generic validaing
                    if (!validator.checkAll($(this))) {
                        submit = false;
                    }

                    if (submit)
                        this.submit();

                    return false;
                });
            </script>
            <!-- /validator -->

        </div>

        </div>
    </div>
</div>