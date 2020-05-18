
<body>

<meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <title>Multiple step form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
  </body>
    <!--================Start Sign Up Area =================-->
    
 <form action="Home/sign_up1" method="post" name="registration" id ="myform" class="sign_demo">
       <section id="first_page" class="sign_up section_1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mt-2">
                       <img src="<?php echo base_url(); ?>assets/images/sign_up/sign_up1.svg" class="img-fluid" alt="Request_For_Demo">
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="pt-4 text-center">
                                <h3 class="">Get Your Free 30-Days <br> FinCRM Trial Now!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 text-center">
                       <h5 class="pt-3 mb-4">Few details before you get started.</h5>
                      </div>
                      <div class="col-md-8 offset-md-2">
                          
                                <div class="form-group">
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <input type="text" name="name" class="username form-control" placeholder="Enter Your Name" value="">
                                              <i class="material-icons-outlined">person</i>
                                              </div>
                                              <?php echo form_error('name', '<div class="form-error">', '</div>'); ?>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                     <div class="row">
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email-Id" value="">
                                                  <i class="material-icons-outlined">email</i>
                                                  </div>
                                                  <?php echo form_error('email', '<div class="form-error">', '</div>'); ?>
                                          </div>
                                      </div>
                                </div>
                                 <div class="form-group">
                                      <div class="row">
                                              <div class="col-12">
                                                  <div class="form-group">
                                                      <input type="text" name="mobile_number" class="form-control" placeholder="Enter Your Mobile Number" value="">
                                                      <i class="material-icons-outlined">call</i>
                                                      </div>
                                                      <?php echo form_error('mobile_number', '<div class="form-error">', '</div>'); ?>
                                              </div>
                                      </div>
                                </div>
                                
                                <div class="form-group">
                                   <p><a class="btn btn-primary next">next</a></p>
                                </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section class="sign_up section_2 sign_up_DN" id="second_page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mt-2">
                       <img src="<?php echo base_url(); ?>assets/images/sign_up/sign_up2.svg" class="img-fluid" alt="Request_For_Demo">
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="pt-4 text-center">
                                <h3 class="">Get Your Free 30-Days <br> FinCRM Trial Now!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-12 text-center">
                       <h5 class="pt-3 mb-4">Few details before you get started.</h5>
                      </div>
                        <div class="col-md-8 offset-md-2">
                            <div class="sign_demo" >
                              <div class="form-group" >
                                   <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <input type="text" name="company_name" class="form-control" placeholder="Enter Your Company Name" value="">
                                              <i class="material-icons-outlined">account_balance</i>
                                          </div>
                                          <?php echo form_error('company_name', '<div class="form-error">', '</div>'); ?>
                                      </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                   <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <select  class="form-control" name = "number_of_user" placeholder="No. of Users">
                                                    <option value="">No. of Users</option>
                                                    <option value="">1 - 5</option>
                                                    <option value="">6 - 10</option>
                                                    <option value="">11 - 20</option>
                                                    <option value="">21 - 50</option>
                                                  </select>
                                                <i class="material-icons-outlined">supervisor_account</i>
                                                </div>
                                        </div>
                                        <?php echo form_error('number_of_user', '<div class="form-error">', '</div>'); ?>
                                    </div>
                              </div>
                               <div class="form-group">
                                    <div class="row">
                                            <div class="col-12 mb-3">
                                                <div class="form-group">
                                                    <select  class="form-control" name="business_type" placeholder="Business type">
                                                    <option value="">Business type</option>
                                                    <option value="">Insurance</option>
                                                    <option value="">Banking & NBFC</option>
                                                    <option value="">Finance & Investment</option>
                                                    <option value="">Real Estate</option>
                                                    <option value="">Consultant</option>
                                                    <option value="">Travel & Tourism</option>
                                                    <option value="">Recruitment</option>
                                                    <option value="">Health & Life Sciences</option>
                                                    <option value="">Automobile</option>
                                                    <option value="">Education</option>
                                                  </select>
                                                    <i class="material-icons-outlined">games</i>
                                                    </div>
                                                    <?php echo form_error('business_type', '<div class="form-error">', '</div>'); ?>
                                            </div>
                                    </div>
                              </div>
                              
                              <div class="form-group">
                                <p><a class="btn btn-primary next">next</a></p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section class="sign_up section_3 sign_up_DN" id="third_page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mt-2">
                       <img src="<?php echo base_url(); ?>assets/images/sign_up/sign_up3.svg" class="img-fluid" alt="Request_For_Demo">
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="pt-4 text-center">
                                <h3 class="">Get Your Free 30-Days <br> FinCRM Trial Now!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                       <h5 class="pt-3 mb-4">Few details before you get started.</h5>
                      </div>
                        <div class="col-md-8 offset-md-2">
                         <div class="sign_demo">
                              <div class="form-group">
                                   <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                    <input type="text" name="domain-name" class="form-control domain" placeholder="Enter your Domain" value="">
                                                    <span class="domainfix">.fincrm.net</span>
                                                  <i class="material-icons-outlined">donut_large</i>
                                                    </div>
                                                    <?php echo form_error('domain-name', '<div class="form-error">', '</div>'); ?>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                   <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="password" name="create_password" class="form-control" placeholder="Create Password" value="">
                                                  <i class="material-icons-outlined">vpn_key</i>
                                                  <i class="material-icons">remove_red_eye</i>
                                                </div>
                                                <?php echo form_error('create_password', '<div class="form-error">', '</div>'); ?>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                   <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="password" name="re_enter_Password" class="form-control" placeholder="Re-Enter Password" value="">
                                                  <i class="material-icons-outlined">vpn_key</i>
                                                  <i class="material-icons">remove_red_eye</i>
                                                </div>
                                                <?php echo form_error('re_enter_Password', '<div class="form-error">', '</div>'); ?>
                                        </div>
                                    </div>
                              </div>
                              
                              <div class="form-group">
                                 <button type="submit" class="btn form-control request_btn" data-value="4" id="sign_up">Sign Up</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
 
    <section class="sign_up section_4 sign_up_DN valiadtion-key">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mt-2">
                       <img src="<?php echo base_url(); ?>assets/images/sign_up/otp.svg" class="img-fluid pull-right" alt="Request_For_Demo">
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="pt-5 text-center">
                                 <h3 class="">Verify Your Identity</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                         <h5 class="pt-3 mb-4">Please enter the one time password <br>to verify your account</h5>
                        </div>
                        <div class="col-md-8 offset-md-2">
                          <p class="text-center">A Code has been send to +91******789</p>
                         <form action="" class="sign_demo">
                              <div class="form-group">
                                   <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                     <div id="wrapper">
                                                        <div id="dialog">
                                                          <div id="form">
                                                            <input type="text" maxLength="1" size="1" min="0" max="9"  />
                                                            <input type="text" maxLength="1" size="1" min="0" max="9" /><input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                                          </div>
                                                          
                                                        </div>
                                                      </div>
                                        </div>
                                    </div>
                              </div>
                              <p class="text-center pb-3">Time Remaining <span>4:31 min</span></p>
                              <div class="form-group">
                                 <button type="button" class="btn form-control validate_btn">Verify</button>
                              </div>

                              <p class="text-center pb-3">Didn't get the code? <a href="#." class="pl-3">Resend It</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
    <div class="row">
      <div class="col-12 col-md-2 offset-md-8">
        <div class="custom-navigation text-center">
        <span class="navigation mr-2 span_ng1" data-value="1">1</span>
        <span class=" mr-2 span_ng2" data-value="2">2</span>
        <span class=" mr-2 span_ng3" data-value="3">3</span>
        <span class=" mr-2 span_ng4" data-value="4">4</span>
      </div>
      </div>
    </div>
    </div>

      

    </div>

   

    <!--================End Sign Up Area =================-->
    

<!--Verify Otp UI  Js start-->

     <script type="text/javascript">
      $(function() {
  'use strict';

  var body = $('.valiadtion-key');

  function goToNextInput(e) {
    var key = e.which,
      t = $(e.target),
      sib = t.next('input');

    if (key != 9 && (key < 48 || key > 57)) {
      e.preventDefault();
      return false;
    }

    if (key === 9) {
      return true;
    }

    if (!sib || !sib.length) {
      sib = body.find('input').eq(0);
    }
    sib.select().focus();
  }

  function onKeyDown(e) {
    var key = e.which;

    if (key === 9 || (key >= 48 && key <= 57)) {
      return true;
    }

    e.preventDefault();
    return false;
  }
  
  function onFocus(e) {
    $(e.target).select();
  }

  body.on('keyup', 'input', goToNextInput);
  body.on('keydown', 'input', onKeyDown);
  body.on('click', 'input', onFocus);

})
    </script>

    
    <!--Verify Otp UI  Js end-->


<!--Navigation Icons Js Start-->
 <script>
   $(document).on("click", ".custom-navigation span", function(){
    var span_id = $(this).data("value");

    $(".sign_up").addClass("sign_up_DN");
    $(".section_"+span_id).removeClass("sign_up_DN");
    $(".custom-navigation span").removeClass("navigation");
    $(this).addClass("navigation");
  });

  $(document).on("click", ".sign_up button", function(){
    $(".username").get

    if(){


    }
    var span_id = $(this).data("value");
    console.log(span_id);
    if(span_id != ""){
      $(".sign_up").addClass("sign_up_DN");
      $(".section_"+span_id).removeClass("sign_up_DN");
      $(".custom-navigation span").removeClass("navigation");
      $(".span_ng"+span_id).addClass("navigation");
    }
    
    
  });
  
// script for sign_up validation

  
//     $(document).ready(function(){

//       // Custom method to validate username
     
//       $(".next").click(function(){
//         var form = $("#myform");
//         form.validate({
//           errorElement: 'span',
//           errorClass: 'help-block',
//           highlight: function(element, errorClass, validClass) {
//             $(element).closest('.form-group').addClass("has-error");
//           },
//           unhighlight: function(element, errorClass, validClass) {
//             $(element).closest('.form-group').removeClass("has-error");
//           },
//           rules: {
//             name: {
//               required: true,
              
//             },
//             email : {
//               required: true,
//             },
//             mobile_number : {
//               required: true,
              
//             },
            
            
//           },
//           messages: {
//             name: {
//               required: "Username required",
//             },
//             email : {
//               required: "Password required",
//             },
//             mobile_number : {
//               required: "Password required",
             
//             },
           
//           }
//         });
//         if (form.valid() === true){
//           if ($('#first_page').is(":visible")){
//             current_fs = $('#first_page');
//             next_fs = $('#second_page');
//           }else if($('#second_page').is(":visible")){
//             current_fs = $('#second_page');
//             next_fs = $('#third_page');
//           }
          
//           next_fs.show();
//           current_fs.hide();
//         }
//       });

//       // $('#previous').click(function(){
//       //   if($('#company_information').is(":visible")){
//       //     current_fs = $('#company_information');
//       //     next_fs = $('#account_information');
//       //   }else if ($('#personal_information').is(":visible")){
//       //     current_fs = $('#personal_information');
//       //     next_fs = $('#company_information');
//       //   }
//       //   next_fs.show();
//       //   current_fs.hide();
//       // });
      
//     });





// </script>


 <script>
//             function validate() {
//                 var output = true;
//                 $(".signup-error").html('');

//                 if ($("#first_page").css('display') != 'none') {
//                     if (!($("#name").val())) {
//                         output = false;
//                         $("#name-error").html("Name required!");
//                     }
//                 }

//                 if ($("#second_page").css('display') != 'none') {
//                     if (!($("#company_name").val())) {
//                         output = false;
//                         $("#company_name_error").html("Company Name required!");
//                     }

//                 }

//                 if ($("#third_page").css('display') != 'none') {
//                     if (!($("#domain_name").val())) {
//                         output = false;
//                         $("#domain-error").html("Domain required!");
//                     }

//                 }

//                 return output;
//             }

//             $(document).ready(function () {
//                 $("#next").click(function () {
//                     var output = validate();
//                     if (output === true) {
//                         var current = $(".active");
//                         var next = $(".active").next("li");
//                         if (next.length > 0) {
//                             $("#" + current.attr("id") + "-field").hide();
//                             $("#" + next.attr("id") + "-field").show();
//                             $("#back").show();
//                             $("#finish").hide();
//                             $(".active").removeClass("active");
//                             next.addClass("active");
//                             if ($(".active").attr("id") == $("li").last().attr("id")) {
//                                 $("#next").hide();
//                                 $("#finish").show();
//                             }
//                         }
//                     }
//                 });


                

                
//             });
        </script>
<!--Navigation Icons  Js end-->
