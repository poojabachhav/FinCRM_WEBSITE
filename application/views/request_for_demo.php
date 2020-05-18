
    <!--================Start Contact Area =================-->

    <section class="request_us_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2>Schedule your demo</h2>
                        <p>Interested to take a peak into the product? Let us know what time suits you the best.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section class="request_us">
        <div class="container">
         
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="">
                       <img src="<?php echo base_url(); ?>assets/images/request/Request_For_Demo.svg" class="img-fluid" alt="Request_For_Demo">
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="">
                         <form action="<?php echo base_url('request-for-demo'); ?>" method="post" class="request_demo" data-toggle="validator" autocomplete="off">

                          <input type="hidden" name="demo_request_form" value="demo_request_form">
                           <input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" >
                            
                              <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="username form-control" placeholder="Enter Your Name" value="" required>
                                            <i class="material-icons-outlined">person</i>
                                             <div class="help-block with-errors"></div>
                                            </div>
                                           
                                            <?php echo form_error('name', '<div class="form-error">', '</div>'); ?>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                   <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email-Id" value="" required>
                                                <i class="material-icons-outlined">email</i>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                                
                                                <?php echo form_error('email', '<div class="form-error">', '</div>'); ?>
                                        </div>
                                    </div>
                              </div>
                               <div class="form-group">
                                    <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Enter Your Mobile No" value="" maxlength="10" data-error="enter 10 digit valid mobile number" required>
                                                    <i class="material-icons-outlined">call</i>
                                                     <div class="help-block with-errors"></div>
                                                    </div>
                                                   
                                                    <?php echo form_error('mobile_number', '<div class="form-error">', '</div>'); ?>
                                            </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                   <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" name="company_name" id="company-name" class="form-control" placeholder="Enter Your Company Name" value="" required>
                                                  <i class="material-icons-outlined">account_balance</i>
                                                    <div class="help-block with-errors"></div>
                                                    </div>
                                                  
                                                    <?php echo form_error('company_name', '<div class="form-error">', '</div>'); ?>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" name="scheduled_date"  class="form-control" placeholder="Scheduled Date" id="datepicker" value="" required>
                                                <i class="material-icons-outlined">date_range</i>
                                                  <div class="help-block with-errors"></div>
                                             </div>
                                           
                                             <?php echo form_error('scheduled_date', '<div class="form-error">', '</div>'); ?>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" name="scheduled_time" class="form-control" placeholder="Scheduled Time" id="timepicker" value="" required >
                                                 <div class="help-block with-errors"></div>
                                                <!-- <i class="material-icons-outlined">access_time</i> -->
                                             </div>

                                             <?php echo form_error('scheduled_date', '<div class="form-error">', '</div>'); ?>
                                        </div>
                                </div>
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary form-control request_btn"><img src="<?php echo base_url();?>assets/images/loading.gif" width="22px" id="image" alt="loader">Get a Demo</button>
                                 
                              </div>
                            </form>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12 col-md-7">
            </div>
              <div class="col-12 col-md-5">
                <div >
                        
                        <?php if( $this->session->flashdata("success") ){ ?>
                            <div id="flashdata" class="alert alert-success">
                                <?php echo $this->session->flashdata("success"); ?>
                            </div>
                        <?php } ?>

                        <?php if( $this->session->flashdata("error") ){ ?>
                            <div id="flashdata" class="alert alert-warning">
                                <?php echo $this->session->flashdata("error"); ?>
                            </div>
                        <?php } ?>

                </div>
                </div>
            </div>
        </div>
    </section>


    <section class="footer-content" style="margin-top: 30px;">
   <div class="container-fluid">
      <div class="row footer-top">
         <div class="col-lg-12 text-center pt-5 pb-5 ">
            <div class="header_section_demo pt-5 pb-5">
               <h3 class="heading_1 text-white">Do you have any questions for us?</h3>
               <a href="<?php echo base_url(); ?>contact-us" class="btn btn-footer1 mt-4 text-uppercase">Contact US</a>
            </div>
         </div>
      </div>
   </div>
</section>

    <!--================End Contact Area =================-->
    

<!-- DatePicker Gijgo css -->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <!-- DatePicker Gijgo css -->
    
     <script>
        $('#datepicker').datepicker({
            showRightIcon: false,
        });
    </script>

     

    <script>
        $('#timepicker').timepicker({
             modal: false, 
          header: false, 
          footer: false ,
        });

    </script>
    
    <script>
$("form").bootstrapValidator({
        
        message: 'Please enter valid input',
        feedbackIcons: { },
        excluded: [':disabled'],
        fields: {
            "name": {
                validators: {
                    notEmpty: {
                        message: 'The name cannot be empty'
                    },
                }
            },
             
            "email": {
                validators: {
                    notEmpty: {
                        message: 'The email cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email is not a valid email address'
                    }
                }
            },
            "mobile_number": {
                validators: {
                    notEmpty: {
                        message: 'The mobile cannot be empty'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'The mobile must be 10 digit'
                    },
                }
            },
            "subject": {
                validators: {
                    notEmpty: {
                        message: 'The subject cannot be empty'
                    },
                }
            },
            "company_name": {
                validators: {
                    notEmpty: {
                        message: 'The company_name cannot be empty'
                    },
                }
            },
            "scheduled_date": {
                validators: {
                    notEmpty: {
                        message: 'Please select date for demo'
                    },
                }
            },
            "scheduled_time": {
                validators: {
                    notEmpty: {
                        message: 'Please select time for demo'
                    },
                }
            },
           
        },

    });
$("#flashdata").delay(3000).hide(500);
</script>

<script type="text/javascript">
$('#image').css('display', 'none');
$(document).on("submit", ".request_demo",function(){
$('#image').css('display', 'inline-block'); // jQuery's submit function applied on form.
});
</script>
  


 