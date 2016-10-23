
<div class="container">
   
   <div class="header-intro">
        <h2>Registration Form</h2>
        <p>Please fill up the form to Register.</p>

    </div>
     <div class="animate form login_form">
        <div class="row" style="margin-top:50px">
            <div class="col-lg-7 col-md-9 col-sm-10  col-lg-offset-3 col-md-offset-2 col-sm-offset-2 ">
                <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps" style=" margin-left:-40px"  >
                        <li>
                            <a href="#step-1">
                                <span class="step_no"><i class="fa fa-user"></i></span>
                                                    <span class="step_descr">
                                              Personal Info
                                          </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2">
                                <span class="step_no"><i class="fa fa-phone"></i></span>
                            <span class="step_descr">
                                    Emergency Contact
                                          </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3">
                                <span class="step_no"><i class="fa fa-book"></i></span>
                            <span class="step_descr">
                                            BillBook Info
                                          </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4">
                                <span class="step_no"><i class="fa fa-lock"></i></span>
                                                 <span class="step_descr">
                                             Account Info
                                          </span>
                            </a>
                        </li>
                    </ul>
                    <div id="step-1">
                        <?php
                        include_once('customerRegistration/personalinfopage.php');
                        ?>
                    </div>
                    <div id="step-2">
<?php 
include_once('customerRegistration/emergencycontactinfopage.php');
?>
                    </div>
                    <div id="step-3">
<?php 
include_once('customerRegistration/billbookinfopage.php');
?>
                    </div>
                    <div id="step-4">
<?php
include_once('customerRegistration/accountinfopage.php');
?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
<!--<script src="./././js/jquery.min.js"></script>-->
<script src="./././js/fastclick.js"></script>
<script src="./././js/jquery.smartWizard.js"></script>
<script type="text/javascript">

    $(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
    });

</script>