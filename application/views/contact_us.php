

    <section class="contact_us_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2>Hello, Let's get in touch.</h2>
                        <p>Contact us using the form below and we'll get back to you right away.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="contact_us">
        <div class="container">
            

            <div class="row">
                                
                <div class="col-12 col-md-6">
                    <div class="">
                        
                        <form action="<?php echo base_url('contact-us'); ?>" method="post"  id="contact_form" enctype="multipart/form-data">

                            <input type="hidden" name="contact_us_form" value="contact_us_form">

                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" >
                            

                            <div>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <div >   
                                            <input type="text"  class="form-control" placeholder="First Name" name="first_name" id="first_name" value="" required>
                                                                  
                                                              </div>
                                                              
                                        <?php echo form_error('first_name', '<div class="form-error">', '</div>'); ?>
                                    </div>
                                    <div class="col-6 form-group">
                                        <div >
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" value="" required>
                                                                  

                                        </div>
                                        
                                        <?php echo form_error('last_name', '<div class="form-error">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                    <div class="col-12">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail id" value="" required>
                                                              

                                        <?php echo form_error('email', '<div class="form-error">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Your mobile number" maxlength="10"  data-error="enter 10 digit valid mobile number" value="" required>
                                        <?php echo form_error('mobile_number', '<div class="form-error">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="row">
                                          <div class="col-12">
                                            <select name="subject" class="form-control" placeholder="Your Subject" required="" id="subject">
                                                <option value="">Your Subject</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Support">Support</option>
                                                <option value="Partner">Partner</option>
                                                <option value="Career">Career</option>
                                            </select>
                                              
                                                      
                                                <div>
                                                    <?php echo form_error('subject', '<div class="form-error">', '</div>'); ?>
                                                </div>
                                        </div>
                                </div>
                        </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" id="message" placeholder=" Your Message" ></textarea>
                                 
                               
                            </div>
                          
                               <div class="form-group">
                                 <button type="submit" class="btn btn-primary form-control contact_btn"><img src="<?php echo base_url();?>assets/images/loading.gif" width="22px" id="image" alt="loader"> Submit</button>

                              </div>
                        
                        </form>

                        <?php if( $this->session->flashdata("success") ){ ?>
                        <div id ="flashdata" class="alert alert-success">
                            <?php echo $this->session->flashdata("success"); ?>
                        </div>
                    <?php } ?>

                    <?php if( $this->session->flashdata("error") ){ ?>
                        <div id ="flashdata" class="alert alert-warning">
                            <?php echo $this->session->flashdata("error"); ?>
                        </div>
                    <?php } ?>
                    </div>
                </div>


                <div class="col-12 col-md-4 offset-md-1 form_content_of_contact">
                    <div class="row">
                        <div class="col-2 pr-0">
                            <div class="">
                                <i class="material-icons-outlined pull-right">phone</i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h4 class="mb-3">Sales Enquiries</h4>
                                    <p class="mb-2">Interested in any of our products? <br>Talk to our experts today</p>
                                    <p>sales@fincrm.net</p>
                                    <p>020 4862 0202</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2 pr-0">
                            <div class="">
                                <i class="material-icons-outlined pull-right">forum</i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h4 class="mb-3">Support Enquiries</h4>
                                    <p class="mb-2">Using any of our products and need help? <br>Talk to our support experts today.</p>
                                    <p>support@fincrm.net</p>
                                    <p>020 4862 0202</p>
                                  
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2 pr-0">
                            <div class="">
                                <i class="material-icons-outlined pull-right">nature_people</i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h4 class="mb-3">Partner Enquiries</h4>
                                    <p class="mb-2">Search for our partners? <br> Talk to our support experts today.</p>
                                    <p>partner@fincrm.net</p>
                                    <p>020 4862 0202</p>
                                    <!-- <a href="#">Get Support  <i class="material-icons-outlined">arrow_right_alt</i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <section class="contact_us_content">
      <div class="container pb-4">
            <div class="row">
                <div class="col-12 ">
                    <div class="text-center contact-header text-white mt-5">
                        <h2>Find us here</h2>
                        <p>Our nationwide presence helps us to serve you better.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pb-5">
                <div class="col-lg-6">
                    <div class="">
                        <img src="<?php echo base_url();?>assets/images/contact/Contact_us_Address.svg" class="img-fluid pull-right" alt="Contact_us_Address" width="88%">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row contact-content">
                        <div class="col-12 col-sm-6 col-lg-6 ">
                            <div class="content_of_location text-white mb-4">
             

                                <h4 class="contact_link_pune">Pune</h4>
                                <p class="mt-3 mb-0">Office No 1, Tower No 2, Mayfair Towers, Shivaji Nagar Pune - 411005 </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6 ">
                            <div class="content_of_location text-white mb-4">
                                <h4 class="contact_link_jaipur">Jaipur</h4>
                                <p class="mt-3 mb-0">F-8, 1st Floor, Agrasen Tower, Centre Spine, Vidhyadhar Nagar, Jaipur - 302013</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="content_of_location text-white mb-4">
                                <h4 class="contact_link_delhi">Delhi</h4>
                                <p class="mt-3 mb-0">Noida One B9, Block A, Industrial Area, Sector 62, Noida, Uttar Pradesh - 201309</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6 ">
                            <div class="content_of_location text-white">
                                <h4 class="contact_link_kolkata">Kolkata</h4>
                                <p class="mt-3 mb-0">23A, Netaji Subhas Rd, Fairley Place, B.B.D. Bagh,Kolkata - 700001</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

   

    <!--================End Contact Area =================-->
<script>
$("form").bootstrapValidator({
        
        message: 'Please enter valid input',
        feedbackIcons: { },
        excluded: [':disabled'],
        fields: {
            "first_name": {
                validators: {
                    notEmpty: {
                        message: 'The name cannot be empty'
                    },
                }
            },
             "last_name": {
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
           
        },

    });
$("#flashdata").delay(3000).hide(500);

$('#image').css('display', 'none');
$(document).on("submit", "#contact_form",function(){
$('#image').css('display', 'inline-block'); // jQuery's submit function applied on form.
});
</script>
