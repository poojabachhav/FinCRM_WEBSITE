

   <style type="text/css">
.field-icon {
float: right;
margin-left: -25px;
margin-top: -25px;
position: relative;
z-index: 2;
}

.toggle-password i
{
margin-right: 15px;
top:0px !important;
margin-top: -4px
}
.toggle-password img
{
width: 18px;
margin-right: 7px;
margin-top: -13px;
}

</style>
    
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script> -->

<!-- <script src="jquery.simple.timer.js"></script> -->



    
    <!--================Start Contact Area =================-->
    <div class="">
<form action="" class="sign_demo">
    <section class="sign_up section_1">
      <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
                <div class="mt-2">
                    <img src="<?php base_url(); ?>assets/images/sign_up/sign_up1.svg" class="img-fluid" alt="Request_For_Demo">
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
                                            <input type="text" id="name" name="name" class="username form-control" placeholder="Enter Your Name" value="" onkeypress="return event.charCode >= 65 && event.charCode <= 90  ||  event.charCode >= 97 && event.charCode <= 122"  >
                                              <i class="material-icons-outlined">person</i>
                                        </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                             <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control keyup-email" placeholder="Enter Your Email-Id" >

                                            <i class="material-icons-outlined">email</i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Your Mobile No" value="" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>

                                            <i class="material-icons-outlined">call</i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                                
                          <div class="form-group">
                               <button type="button" id="sign_btn1" class="btn form-control sign_btn" data-value="1">Next</button>
                          </div>

                              
                               
                 
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="sign_up section_2 sign_up_DN">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-6">
                  <div class="mt-2">
                     <img src="<?php base_url(); ?>assets/images/sign_up/sign_up2.svg" class="img-fluid" alt="Request_For_Demo">
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
                                                  <input type="text"  id="company_name" name="company_name" class="form-control" placeholder="Enter Your Company Name" value="" >
                                                <i class="material-icons-outlined">account_balance</i>
                                                  </div>
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                      <div class="col-12 mb-3">
                                          <div class="form-group">
                                              <select  class="form-control" id="user_number" name="user_number" placeholder="No. of Users" required="">
                                                  <option value="">No. of Users</option>
                                                  <option value="1 - 5">1 - 5</option>
                                                  <option value="6 - 10">6 - 10</option>
                                                  <option value="11 - 20">11 - 20</option>
                                                  <option value="21 - 50">21 - 50</option>
                                                </select>
                                              <i class="material-icons-outlined">supervisor_account</i>
                                              </div>
                                      </div>
                                  </div>
                            </div>
                             <div class="form-group">
                                  <div class="row">
                                          <div class="col-12 mb-3">
                                              <div class="form-group">
                                                  <select  class="form-control" id="business_type" name="business_type"placeholder="Business type" required="">
                                                  <option value="">Business type</option>
                                                  <option value="Insurance">Insurance</option>
                                                  <option value="Banking & NBFC">Banking & NBFC</option>
                                                  <option value="Finance & Investment">Finance & Investment</option>
                                                  <option value="Real Estate">Real Estate</option>
                                                  <option value="Consultant">Consultant</option>
                                                  <option value="Travel & Tourism">Travel & Tourism</option>
                                                  <option value="Recruitment">Recruitment</option>
                                                  <option value="Health & Life Sciences">Health & Life Sciences</option>
                                                  <option value="Automobile">Automobile</option>
                                                  <option value="Education">Education</option>
                                                </select>
                                                  <i class="material-icons-outlined">games</i>
                                                  </div>
                                          </div>
                                  </div>
                            </div>
                            
                            <div class="form-group">
                               <button type="button" id="sign_btn2" class="btn form-control sign_btn" data-value="2">Next</button>
                            </div>
                        
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <section class="sign_up section_3 sign_up_DN">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mt-2">
                       <img src="<?php base_url(); ?>assets/images/sign_up/sign_up3.svg" class="img-fluid" alt="Request_For_Demo">
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
                                              <input type="text" id="domain_name" name="domain_name" class="form-control domain"  placeholder="Enter your Domain">
                                              
                                              <span class="domainfix">.fincrm.net</span>
                                              
                                              <i class="material-icons-outlined">donut_large</i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                 <div class="row">
                                      <div class="col-12">
                                          <div class="form-group abc">
                                              <input type="password" id="create_password" name="create_Password" class="form-control" placeholder="Create Password" value='<?php echo isset($_POST['create_Password']) ? $_POST['create_Password'] : ''; ?>' required="">
                                              <i class="material-icons-outlined">vpn_key</i>
<!--                                               <i class="material-icons">remove_red_eye</i> -->
                                            <span toggle="#password-field" class="material_icon field-icon toggle-password"><i class="material-icons">remove_red_eye</i>
                                                <img src="<?php echo base_url();?>assets/images/contact/eye.svg">
                                               </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-12">
                                        <div class="form-group abc1">
                                            <input type="password" id="re_enter_password" name="re_enter_password" class="form-control" placeholder="Re-Enter Password" value='<?php echo isset($_POST['re_enter_password']) ? $_POST['re_enter_password'] : ''; ?>' required="">
                                            <i class="material-icons-outlined">vpn_key</i>
                                         <!--    <i class="material-icons">remove_red_eye</i> -->
                                         <span toggle="#password-field" class="material_icon field-icon toggle-password"><i class="material-icons">remove_red_eye</i>
                                                <img src="<?php echo base_url();?>assets/images/contact/eye.svg">
                                               </span>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <button type="button" id="sign_btn3" class="btn form-control request_btn" data-value="3"><img src="<?php echo base_url();?>assets/images/loading.gif" width="22px" id="image" alt="loader">Sign Up</button>
                              </div>
                              <!--<div class="form-group">-->
                              <!--   <button type="button" id="sign_btn3" class="btn form-control request_btn" data-value="3">Sign Up</button>-->
                              <!--</div>-->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </form>
 <form action="" class="sign_demo1">
     <section class="sign_up section_4 sign_up_DN valiadtion-key">
        <div class="container">
         
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mt-2">
                      <img src="<?php echo base_url();?>assets/images/sign_up/otp.svg" class="img-fluid pull-right" alt="Request_For_Demo">
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
                         <h5 class="pt-3 mb-4">Please enter OTP to verify <br> your mobile no.</h5>
                        </div>
                        <div class="col-md-8 offset-md-2">
                           <p class="text-center curr-number"> </p>
                         
                              <div class="form-group">
                                   <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                     <div id="wrapper">
                                                        <div id="dialog">
                                                          <div id="form">
                                                            <input type="text" name="1st" id="1st" maxLength="1" size="1" min="0" max="9"  />
                                                            <input type="text" name="2nd" id="2nd"maxLength="1" size="1" min="0" max="9" /><input type="text" name="3rd" id="3rd"maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input type="text" name="4th" id="4th"maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                                          </div>
                                                          
                                                        </div>
                                                      </div>
                                        </div>
                                    </div>
                              </div>
                              

                              <!-- <p class="text-center pb-3">Time Remaining <span id="time" class="timer"></span></p> -->

                              <p class="text-center pb-3 timer-append">
                                Time Remaining <span id="time" class="timer"></span>
                              </p>

                              <div class = "ajax_mesg"  ></div><br>
                              <div class="form-group">
                                 <button type="button" id="sign_btn4" value="Verify" class="btn form-control validate_btn" data-value="5">Verify</button>
                              </div>

                              <p class="text-center pb-3">Didn't get the code? <a href="#" onclick="sendOTP('resend')" class="pl-3" id="resend">Resend It</a></p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </form>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-2 offset-md-8">
          <div class="custom-navigation text-center">
              <span class="navigation_sign_up mr-2 span_ng1" data-value="1" disabled>1</span>
              <span class=" mr-2 span_ng2" data-value="2" disabled>2</span>
              <span class=" mr-2 span_ng3" data-value="3" disabled>3</span>
              <span class=" mr-2 span_ng4" data-value="4" disabled>4</span>
          </div>
        </div>
      </div>
    </div>

      

  </div>


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
    

<script type="text/javascript">

$(document).ready(function(){
$(".abc .toggle-password i").css("display","none");
$(".abc .toggle-password img").css("display","inline-block");
$(".abc1 .toggle-password i").css("display","none");
$(".abc1 .toggle-password img").css("display","inline-block");
});

$(".abc .toggle-password").click(function() {
$(".abc .toggle-password i").css("display","none");
$(".abc .toggle-password img").css("display","inline-block");

var input = $($(this).attr("toggle"));

var d=$(".abc input").attr("type");

if (d == "password") {

$(".abc input").attr("type", "text");
$(".abc .toggle-password i").css("display","inline-block");
$(".abc .toggle-password img ").css("display","none");
} else {

$(".abc input").attr("type", "password");
$(".abc .toggle-password i").css("display","none");
$(".abc .toggle-password img").css("display","inline-block");

}
});


$(".abc1 .toggle-password").click(function() {

$(".abc1 .toggle-password i").css("display","none");
$(".abc1 .toggle-password img").css("display","inline-block");
var input = $($(this).attr("toggle"));
var d=$(".abc1 input").attr("type");
if (d == "password") {
$(".abc1 input").attr("type", "text");
$(".abc1 .toggle-password i").css("display","inline-block");
$(".abc1 .toggle-password img ").css("display","none");
} else {
$(".abc1 input").attr("type", "password");
$(".abc1 .toggle-password i").css("display","none");
$(".abc1 .toggle-password img").css("display","inline-block");

}
});


</script>


 
        <!--Wizard  Js start-->

  <script type="text/javascript">
    $(function() { 'use strict';
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

    
    <!--Wizard  Js end-->

  <script> 
 
  // $(document).on("click", "#sign_btn1", function(){
    
  //   var span_id = $(this).data("value");
  //   var name=$("#name").val();
  //   var email=$("#email").val();
  //   var mobile=$("#mobile").val();
      
     

//     $(".form-validation-error").remove();

//      if(name!="") {
      
//       if(email!="" ) { 
 
//         if( IsEmail(email)==true) {
          
//           if(mobile!="" && mobile.length ==10) {

//             $(".sign_up").addClass("sign_up_DN");
//             $(".section_"+(span_id+1)).removeClass("sign_up_DN");
//             $(" .custom-navigation .span_ng1").removeClass("navigation_sign_up");
//             $(" .custom-navigation .span_ng2").addClass("navigation_sign_up");
//             $(" .custom-navigation .span_ng3").removeClass("navigation_sign_up");
//             $(" .custom-navigation .span_ng4").removeClass("navigation_sign_up");


          
//             $(".custom-navigation .span_ng1").click(function() {
//             $(".sign_up").addClass("sign_up_DN");
//             $(".section_1").removeClass("sign_up_DN");
                  
//             });

//             $(".custom-navigation .span_ng2").click(function() {
//             $(".sign_up").addClass("sign_up_DN");
//             $(".section_2").removeClass("sign_up_DN");
                 
//             });

//         } else {
//           $("#mobile").focus();
//           $("#mobile").closest(".form-group").append(" <div class='form-validation-error' > Please Enter Valid Mobile Number </div>");
//         }

//         } else {
//        $("#email").focus();
//        $("#email").closest(".form-group").append(" <div class='form-validation-error' > Please Enter Valid Email Address </div>");
//        }
    

//      } else {
//        $("#email").focus();
//        $("#email").closest(".form-group").append(" <div class='form-validation-error' > Please Enter Email Address </div>");
//        }
    
//     return true;
    
//   }else {
//       $("#name").focus();
//       // $("#name").addClass("form-validation-error");
//       $("#name").closest(".form-group").append(" <div class='form-validation-error' > Please Enter Name </div>");
//       return false;
  
//  }
 
// });
 
 function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }

 function IsPassword(create_Password) {
        var regex =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        if(!regex.test(create_Password)) {
           return false;
        }else{
           return true;
        }
      }

   
   //       $(document).on("click", "#sign_btn2", function(){
  
   //        var span_id = $(this).data("value");
   //        var cname=$("#company_name").val();
   //        var no_of_user = $("#user_number").val(); 
   //        var Business=$("#business_type").val();
 
   //        $(".form-validation-error").remove();

   //        if(cname!="")
   //           {
   //             if(no_of_user!="")
   //                {

   //                 if(Business!="")
   //                    {

   //                      $(".sign_up").addClass("sign_up_DN");
   //                      $(".section_"+(span_id+1)).removeClass("sign_up_DN");
   //                      $(" .custom-navigation .span_ng1").removeClass("navigation");
   //                      $(" .custom-navigation .span_ng2").removeClass("navigation");
   //                      $(" .custom-navigation .span_ng3").addClass("navigation");
   //                      $(" .custom-navigation .span_ng4").removeClass("navigation");
   //                      $(".custom-navigation .span_ng1").click(function()
   //                        {
                    
   //                          $(".sign_up").addClass("sign_up_DN");
   //                          $(".section_1").removeClass("sign_up_DN");
                          
   //                        });

   //                      $(".custom-navigation .span_ng2").click(function()
   //                        {
                      
   //                          $(".sign_up").addClass("sign_up_DN");
   //                          $(".section_2").removeClass("sign_up_DN");
                         
   //                        });

   //                      $(".custom-navigation .span_ng3").click(function()
   //                        {
                      
   //                          $(".sign_up").addClass("sign_up_DN");
   //                          $(".section_3").removeClass("sign_up_DN");
                         
   //                        });
           
   //                   }
   //                   else {
   //                    $("#business_type").focus();
   //                    $("#business_type").closest(".form-group").append(" <div class='form-validation-error' > Please select Business Type </div>");
   //                   }

   //              }else {
   //                      $("#user_number").focus();
   //                      $("#user_number").closest(".form-group").append(" <div class='form-validation-error' > Please Select Number of users </div>");
   //           }
   //           return true;
      
   //       }
   //       else {

   //             $("#company_name").focus();
   //             $("#company_name").closest(".form-group").append(" <div class='form-validation-error' > Please Enter Company Name </div>");
            
   //       return false;
     
   //      }
   // });


   // $(document).on("click", "#sign_btn3", function(){
     
   //     var span_id = $(this).data("value");
   //     var create_Password = $("#create_password").val();
   //     var Reenter_Password = $("#re_enter_password").val();
   //     var domain_name = $("#domain_name").val();

   //     $(".form-validation-error").remove();
   //        var input = '';
   //        if(domain_name!="")
   //           {
   //             var input = {
   //            "domain_name" : domain_name,
             
   //           };
     
   //         $.ajax({
   //            url     : '<?php base_url(); ?>home/domain_name_exist',
   //            type    : 'Get',
   //            data    : input,
   //            dataType: 'json',
   //            success : function(json)
   //                 {
   //                     if( json.type == "success" ){
   //                         $("#domain_name").focus();
   //                         $("#domain_name").closest(".form-group").append(" <div class='form-validation-error' >  Domain Name is already present</div>");
                     
   //                     }else{

   //                         if(create_Password!="")
   //                            {
                            
   //                           if( IsPassword(create_Password)==true) {

   //                             if(Reenter_Password!="")
   //                                 {
 

   //                               if($("#create_password").val() == $("#re_enter_password").val())
   //                               {
           
   //                                    $(".sign_up").addClass("sign_up_DN");
   //                                    $(".section_"+(span_id+1)).removeClass("sign_up_DN");
   //                                    $(" .custom-navigation .span_ng1").removeClass("navigation");
   //                                    $(" .custom-navigation .span_ng2").removeClass("navigation");
   //                                    $(" .custom-navigation .span_ng3").removeClass("navigation");
   //                                    $(" .custom-navigation .span_ng4").addClass("navigation");
   //                                     sendOTP();
   //                              return true;
   //                              }
   //                              else
   //                              {
   //                                 alert(create_Password);
   //                                 alert(Reenter_Password);

   //                              }
                                                                 
                               
   //                         }
   //                         else
   //                         {
   //                             $("#re_enter_password").focus();
   //                             $("#re_enter_password").closest(".form-group").append(" <div class='form-validation-error' > Please Re-Enter Password </div>");
   //                         }

   //                     }
   //                 else
   //                 {
   //                    $("#create_password").focus();
   //                    $("#create_password").closest(".form-group").append(" <div class='form-validation-error' > Password must contain atlist 8 characters in one lowercase letter, one uppercase letter, one numeric digit, and one special character is required</div>");
   //                 }
   //                return true;
      

   //                     }

   //                 else
   //                 {
   //                    $("#create_password").focus();
   //                    $("#create_password").closest(".form-group").append(" <div class='form-validation-error' > Please Enter Password </div>");
   //                 }
   //                return true;
      
   //              }
   //              return false;
   //          },
             
   //        });
                     
   //      }
   //      else
   //      {

   //      $("#domain_name").focus();
   //      $("#domain_name").closest(".form-group").append(" <div class='form-validation-error' > Please Enter Domain Name</div>");
                        
   //        return false;
   //      }

   //   });
 
   //   $(document).on("click", "#sign_btn4", function(){
   //   verifyOTP()

   //   });

    $('#image').css('display', 'none');
    function sendOTP(resend="") {
      
       $('#image').css('display', 'inline-block');
       $(".ajax_mesg").html("");
      console.log("Intial : "+resend);
       $(".error").html("").hide();
      var number = $("#mobile").val();
      

      if (number.length == 10 ) {
         
        var input = {
          
          "mobile_number" : number,
          "action" : "send_otp"
        };
     
        $.ajax({

          url     : '<?php base_url(); ?>home/processMobileVerification',
          type    : 'Get',
          data    : input,
          dataType: 'json',
          success : function(json) {
          $('#image').css('display', 'none');
            if( json.type == "success" ){
              
              timecounter();

              if( resend =='resend'){ 
                
                // $(".ajax_mesg").html(json.message);
                $(".curr-number").html("A Code has been resend to  "  +$("#mobile").val().replace(/(\d{1})(.*)(\d{3})/, '$1******$3'));
              } else{
                
                // $(".ajax_mesg").html(json.message);
                $(".curr-number").html("A Code has been send to  "  +$("#mobile").val().replace(/(\d{1})(.*)(\d{3})/, '$1******$3'));
              }
                          
            }else if( json.type == "error" ){
              
              $(".ajax_mesg").html(json.message);
            }else{

             $(".ajax_mesg").html("Oops ! Something went wrong.");
            }
            
            return false;
          },
          error : function() {

            $(".ajax_mesg").html("Please addd here your message.");
            return false;
          }

        });

      } else {
        
        $(".form-validation-error").remove();
        $("#mobile").closest(".form-group").append(" <div class='form-validation-error' > Mobile number should be 10 digit! </div>");
      }

      /*if(id =='resend'){
        
        $(".curr-number").html("A Code has been resend to  "  +$("#mobile").val().replace(/(\d{1})(.*)(\d{3})/, '$1******$3'));
      }*/

    }
  
    // function sendOTP(resend="") {
    //   $(".ajax_mesg").html("");
    //   console.log("Intial : "+resend);
    //   $(".error").html("").hide();
    //   var number = $("#mobile").val();
      

    //   if (number.length == 10 ) {
         
    //     var input = {
          
    //       "mobile_number" : number,
    //       "action" : "send_otp"
    //     };
     
    //     $.ajax({

    //       url     : '<?php base_url(); ?>home/processMobileVerification',
    //       type    : 'Get',
    //       data    : input,
    //       dataType: 'json',
    //       success : function(json) {

    //         if( json.type == "success" ){
              
    //           timecounter();

    //           if( resend =='resend'){ 
                
    //             // $(".ajax_mesg").html(json.message);
    //             $(".curr-number").html("A Code has been resend to  "  +$("#mobile").val().replace(/(\d{1})(.*)(\d{3})/, '$1******$3'));
    //           } else{
                
    //             // $(".ajax_mesg").html(json.message);
    //             $(".curr-number").html("A Code has been send to  "  +$("#mobile").val().replace(/(\d{1})(.*)(\d{3})/, '$1******$3'));
    //           }
                          
    //         }else if( json.type == "error" ){
              
    //           $(".ajax_mesg").html(json.message);
    //         }else{

    //          $(".ajax_mesg").html("Oops ! Something went wrong.");
    //         }
            
    //         return false;
    //       },
    //       error : function() {

    //         $(".ajax_mesg").html("Please addd here your message.");
    //         return false;
    //       }

    //     });

    //   } else {
        
    //     $(".form-validation-error").remove();
    //     $("#mobile").closest(".form-group").append(" <div class='form-validation-error' > Mobile number should be 10 digit! </div>");
    //   }

    //   /*if(id =='resend'){
        
    //     $(".curr-number").html("A Code has been resend to  "  +$("#mobile").val().replace(/(\d{1})(.*)(\d{3})/, '$1******$3'));
    //   }*/

    // }
  

                                  
  var append_timer = 'Time Remaining <span id="time" class="timer"></span>';
 
  function startTimer(duration, display) {
    
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        
        display.textContent = minutes + ":" + seconds;
            
           if (--timer < 0) {
            timer = 0;
            if(timer == 0)
             {
            
          }
            }
             
        }, 1000);
     // existingIntervalId =setInterval();
  }
 

  function timecounter() {
    //clearcounter();
    
    $(".timer-append").html("");
    $(".timer-append").html(append_timer);
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
        
    // clearInterval(existingIntervalId);  
    startTimer(fiveMinutes, display);
  }

  function clearcounter() {
  
    var fiveMinutes = 0 * 1,
        display = document.querySelector('#time');
        
    // clearInterval(existingIntervalId);  
    startTimer(fiveMinutes, display);
  }


 // timecounter();
    $('#resend').on('click', function(){
         
    });


  $('#image').css('display', 'none');
     function verifyOTP() {
     $('#image').css('display', 'inline-block');
          $(".error").html("").hide();
          $(".success").html("").hide();
          var first = $("#1st").val();
          var second = $("#2nd").val();
          var third = $("#3rd").val();
          var fourth = $("#4th").val();
          var name = $("#name").val();
          var email = $("#email").val();
          var mobile = $("#mno").val();
          var company_name = $("#company_name").val();
          var user_number = $("#user_number").val();
          var business_type = $("#business_type").val();
          var domain_name = $("#domain_name").val();
          var create_password = $("#create_password").val();
          var re_enter_password = $("#re_enter_password").val();
          var otp = first.concat(second, third, fourth);
          var input = {
                "otp" : otp,
                "action" : "verify_otp",
                "name" : name,
                "email" : email ,
                "mobile" : mobile, 
                "company_name" : company_name, 
                "user_number" : user_number, 
                "business_type" : business_type, 
                "domain_name" : domain_name, 
                "create_password" : create_password, 
                "re_enter_password" : re_enter_password, 

         };
  
         if (otp.length == 4 && otp != null) {
    
             $.ajax({
                  url     : '<?php base_url(); ?>home/processMobileVerification',
                  type    : 'GET',
                  dataType: "json",
                  data    : input,
                  success : function(json)
                        {
                    $('#image').css('display', 'none');
                          if( json.type == "success" ){
                             $(".ajax_mesg").html(json.message);
                          }else if( json.type == "error" ){
                             $(".ajax_mesg").html(json.message);
                          }else{
                             $(".ajax_mesg").html("Oops ! Something went wrong.");
                          }
                    return false;
                  },

                error : function() {
                    $(".ajax_mesg").html("Please addd here your message.");
                    return false;
                  }
              });

      } else {
         $(".error").html('You have entered wrong OTP.')
         $(".error").show();
     }
 }                            
                              


//      function verifyOTP() {
   
//           $(".error").html("").hide();
//           $(".success").html("").hide();
//           var first = $("#1st").val();
//           var second = $("#2nd").val();
//           var third = $("#3rd").val();
//           var fourth = $("#4th").val();
//           var name = $("#name").val();
//           var email = $("#email").val();
//           var mobile = $("#mno").val();
//           var company_name = $("#company_name").val();
//           var user_number = $("#user_number").val();
//           var business_type = $("#business_type").val();
//           var domain_name = $("#domain_name").val();
//           var create_password = $("#create_password").val();
//           var re_enter_password = $("#re_enter_password").val();
//           var otp = first.concat(second, third, fourth);
//           var input = {
//                 "otp" : otp,
//                 "action" : "verify_otp",
//                 "name" : name,
//                 "email" : email ,
//                 "mobile" : mobile, 
//                 "company_name" : company_name, 
//                 "user_number" : user_number, 
//                 "business_type" : business_type, 
//                 "domain_name" : domain_name, 
//                 "create_password" : create_password, 
//                 "re_enter_password" : re_enter_password, 

//          };
  
//          if (otp.length == 4 && otp != null) {
    
//              $.ajax({
//                   url     : '<?php base_url(); ?>home/processMobileVerification',
//                   type    : 'GET',
//                   dataType: "json",
//                   data    : input,
//                   success : function(json)
//                         {
                    
//                           if( json.type == "success" ){
//                              $(".ajax_mesg").html(json.message);
//                           }else if( json.type == "error" ){
//                              $(".ajax_mesg").html(json.message);
//                           }else{
//                              $(".ajax_mesg").html("Oops ! Something went wrong.");
//                           }
//                     return false;
//                   },

//                 error : function() {
//                     $(".ajax_mesg").html("Please addd here your message.");
//                     return false;
//                   }
//               });

//       } else {
//          $(".error").html('You have entered wrong OTP.')
//          $(".error").show();
//      }
//  }






$(document).on("click", "#sign_btn1", function() {

    var isStep1 = "";
    var email= $("#email").val();
   
    var step1 = ['name','email','mobile',];
    $(".form-validation-error").remove();

    
   
    $.each(step1, function (key, val) {

        var isEmpty = $("#"+val).val();
        if( isEmpty == "" ){

            isStep1 = "invalid";
            $("#"+val).closest(".form-group").append(" <div class='form-validation-error' > Field cant be empty. </div>");
        
        }else{
 $(".form-validation-error").remove();
if(IsEmail(email) == true) {
            isStep1 = "valid";
}else{
    
     $("#email").focus();
       $("#email").closest(".form-group").append(" <div class='form-validation-error' > Please Enter Valid Email Address </div>");
  }

        }
    });

    //  console.log("isStep1 -> "+isStep1);

    if( isStep1 == "valid" ){

      

      var span_id = $(this).data("value"); 

         $(".sign_up").addClass("sign_up_DN");
            $(".section_"+(span_id+1)).removeClass("sign_up_DN");
            $(" .custom-navigation .span_ng1").removeClass("navigation_sign_up");
            $(" .custom-navigation .span_ng2").addClass("navigation_sign_up");
            $(" .custom-navigation .span_ng3").removeClass("navigation_sign_up");
            $(" .custom-navigation .span_ng4").removeClass("navigation_sign_up");


          
            $(".custom-navigation .span_ng1").click(function() {
            $(".sign_up").addClass("sign_up_DN");
            $(".section_1").removeClass("sign_up_DN");
                  
            });

            $(".custom-navigation .span_ng2").click(function() {
            $(".sign_up").addClass("sign_up_DN");
            $(".section_2").removeClass("sign_up_DN");
                 
            });
    

  }
});


$(document).on("click", "#sign_btn2", function() {
    
    var isStep2 = "";
    var step2 = ['company_name','user_number','business_type',];
    $(".form-validation-error").remove();

    $.each(step2, function (key, val) {

        var isEmpty = $("#"+val).val();
        if( isEmpty == "" ){

            isStep2 = "invalid";
            $("#"+val).closest(".form-group").append(" <div class='form-validation-error' > Field cant be empty. </div>");
        }else{

            isStep2 = "valid";
        }
    });

    // console.log("isStep2 -> "+isStep2);

    if( isStep2 == "valid" ){
                         
                        var span_id = $(this).data("value"); 
       
                        $(".sign_up").addClass("sign_up_DN");
                        $(".section_"+(span_id+1)).removeClass("sign_up_DN");
                        $(" .custom-navigation .span_ng1").removeClass("navigation_sign_up");
                        $(" .custom-navigation .span_ng2").removeClass("navigation_sign_up");
                        $(" .custom-navigation .span_ng3").addClass("navigation_sign_up");
                        $(" .custom-navigation .span_ng4").removeClass("navigation_sign_up");
                        $(".custom-navigation .span_ng1").click(function()
                          {
                    
                            $(".sign_up").addClass("sign_up_DN");
                            $(".section_1").removeClass("sign_up_DN");
                          
                          });

                        $(".custom-navigation .span_ng2").click(function()
                          {
                      
                            $(".sign_up").addClass("sign_up_DN");
                            $(".section_2").removeClass("sign_up_DN");
                         
                          });

                        $(".custom-navigation .span_ng3").click(function()
                          {
                      
                            $(".sign_up").addClass("sign_up_DN");
                            $(".section_3").removeClass("sign_up_DN");
                         
                          });
           
    }

});

$('#image').css('display', 'none');
$(document).on("click", "#sign_btn3", function() {
   $('#image').css('display', 'inline-block');
   alert("varify");
    var isStep3 = "";
    var step3 = ['domain_name','create_password','re_enter_password',];
    $(".form-validation-error").remove();

    $.each(step3, function (key, val) {

        var isEmpty = $("#"+val).val();

        console.log(val+"------"+isEmpty);
        if( isEmpty == "" ){

            isStep3 = "invalid";
            $("#"+val).closest(".form-group").append(" <div class='form-validation-error' > Field cant be empty. </div>");


        }else{


             var domain_name = $("#domain_name").val();
             var create_password = $("#create_password").val();
             var re_enter_password = $("#re_enter_password").val();
             

        $(".form-validation-error").remove();
          

         if(create_password != re_enter_password){

                           $(".form-validation-error").remove();
                           $("#re_enter_password").closest(".form-group").append(" <div class='form-validation-error' > Password is not match please Re-Enter password</div>");
                     
            
                        }else{
                          isStep3 = "valid";
                        }
    }
  });

    console.log("isStep3 -> "+isStep3);

    if( isStep3 == "valid" ){

                          var span_id = $(this).data("value");
                         $(".sign_up").addClass("sign_up_DN");
                                      $(".section_"+(span_id+1)).removeClass("sign_up_DN");
                                      $(" .custom-navigation .span_ng1").removeClass("navigation_sign_up");
                                      $(" .custom-navigation .span_ng2").removeClass("navigation_sign_up");
                                      $(" .custom-navigation .span_ng3").removeClass("navigation_sign_up");
                                      $(" .custom-navigation .span_ng4").addClass("navigation_sign_up");
                                       sendOTP();
                               
}
});

// $(document).on("click", "#sign_btn3", function() {
   
//     var isStep3 = "";
//     var step3 = ['domain_name','create_password','re_enter_password',];
//     $(".form-validation-error").remove();

//     $.each(step3, function (key, val) {

//         var isEmpty = $("#"+val).val();
//         if( isEmpty == "" ){

//             isStep3 = "invalid";
//             $("#"+val).closest(".form-group").append(" <div class='form-validation-error' > Field cant be empty. </div>");


//         }else{
//              var domain_name = $("#domain_name").val();
//              var create_password = $("#create_password").val();
//              var re_enter_password = $("#re_enter_password").val();
             

//         $(".form-validation-error").remove();
//           var input = '';
//           if(domain_name!="")
//              {
//               var input = {
//               "domain_name" : domain_name,
             
//              };
     
//           $.ajax({
//               url     : '<?php base_url(); ?>home/domain_name_exist',
//               type    : 'Get',
//               data    : input,
//               dataType: 'json',
//               success : function(json)
//                   {
//                       if( json.type == "success" ){
//                           $(".form-validation-error").remove();
//                           $("#domain_name").closest(".form-group").append(" <div class='form-validation-error' >  Domain Name is already present</div>");
                     
//                       }
//                  }
//              });
//             if(create_password != re_enter_password){

//                           $(".form-validation-error").remove();
//                           $("#re_enter_password").closest(".form-group").append(" <div class='form-validation-error' > Password is not match please Re-Enter password</div>");

//             }else{
             
//               isStep3 = "valid";
//         }
//       }
//     }
//   });

//     // console.log("isStep2 -> "+isStep2);

//     if( isStep3 == "valid" ){

       
          

//                           var span_id = $(this).data("value");
//                          $(".sign_up").addClass("sign_up_DN");
//                                       $(".section_"+(span_id+1)).removeClass("sign_up_DN");
//                                       $(" .custom-navigation .span_ng1").removeClass("navigation_sign_up");
//                                       $(" .custom-navigation .span_ng2").removeClass("navigation_sign_up");
//                                       $(" .custom-navigation .span_ng3").removeClass("navigation_sign_up");
//                                       $(" .custom-navigation .span_ng4").addClass("navigation_sign_up");
//                                       sendOTP();
//                                 return true;
//         //   }
// //} 
    
// }
// });


 $(document).on("click", "#sign_btn4", function(){
     verifyOTP()

     });



</script>
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


<script>
 
$(".sign_btn").click(function(){
                var form = $(".sign_demo");
                form.validate({
                    errorElement: 'span',
                    errorClass: 'help-block',
                    highlight: function(element, errorClass, validClass) {
                        $(element).closest('.form-group').addClass("has-error");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).closest('.form-group').removeClass("has-error");
                    },
                    rules: {
                        name: {
                            required: true,
                            
                           
                        },
                         email: {
                            required: true,
                            minlength: 3,
                        },
                        mobile : {
                            required: true,
                            minlength: 10,
                            maxlength: 10,
                        },
                        
                        company_name:{
                            required: true,
                        },
                        user_number:{
                            required: true,
                        },
                        business_type: {
                            required: true,
                            minlength: 2,
                            
                        },
                         domain_name: {
                            required: true,
                            minlength: 2,
                            
                        },
                        create_Password: {
                            required: true,
                            minlength: 2,
                            
                        },
                        re_enter_password: {
                            required: true,
                            minlength: 2,
                            
                        },
                       
                        
                    },
                    messages: {
                        name: {
                            required: "Username required",
                        },
                        email : {
                            required: "Email required",
                        },
                        mobile : {
                            required: "Mobile Number required",
                            
                        },
                        company_name: {
                            required: "Company Name required",
                        },
                        user_number: {
                            required: "User Mumbers required",
                        },
                        business_type: {
                            required: "Business Type required",
                        },
                        domain_name: {
                            required: "Domain Name required",
                        },
                         create_password: {
                            required: "Password required",
                        },
                         re_enter_password: {
                            required: "Password required",
                        },
                    }
                });

                    if (form.valid() === true){
                    if ($('#sign_btn1').is(":visible")){
                      var span_id = $(this).data("value");
                       $(".sign_up").addClass("sign_up_DN");
            $(".section_"+(span_id+1)).removeClass("sign_up_DN");
            $(" .custom-navigation .span_ng1").removeClass("navigation");
            $(" .custom-navigation .span_ng2").addClass("navigation");
            $(" .custom-navigation .span_ng3").removeClass("navigation");
            $(" .custom-navigation .span_ng4").removeClass("navigation");


          
            $(".custom-navigation .span_ng1").click(function() {
            $(".sign_up").addClass("sign_up_DN");
            $(".section_1").removeClass("sign_up_DN");
                  
            });

            $(".custom-navigation .span_ng2").click(function() {
            $(".sign_up").addClass("sign_up_DN");
            $(".section_2").removeClass("sign_up_DN");
                 
            });
            }else if($('#sign_btn2').is(":visible")){
                        var span_id = $(this).data("value");
                       $(".sign_up").addClass("sign_up_DN");
                        $(".section_"+(span_id+1)).removeClass("sign_up_DN");
                        $(" .custom-navigation .span_ng1").removeClass("navigation");
                        $(" .custom-navigation .span_ng2").removeClass("navigation");
                        $(" .custom-navigation .span_ng3").addClass("navigation");
                        $(" .custom-navigation .span_ng4").removeClass("navigation");
                        $(".custom-navigation .span_ng1").click(function()
                          {
                    
                            $(".sign_up").addClass("sign_up_DN");
                            $(".section_1").removeClass("sign_up_DN");
                          
                          });

                        $(".custom-navigation .span_ng2").click(function()
                          {
                      
                            $(".sign_up").addClass("sign_up_DN");
                            $(".section_2").removeClass("sign_up_DN");
                         
                          });

                        $(".custom-navigation .span_ng3").click(function()
                          {
                      
                            $(".sign_up").addClass("sign_up_DN");
                            $(".section_3").removeClass("sign_up_DN");
                         
                          });
           
                }else if($('#sign_btn3').is(":visible")){
                      var span_id = $(this).data("value");
                                        
                                      $(".sign_up").addClass("sign_up_DN");
                                      $(".section_"+(span_id+1)).removeClass("sign_up_DN");
                                      $(" .custom-navigation .span_ng1").removeClass("navigation");
                                      $(" .custom-navigation .span_ng2").removeClass("navigation");
                                      $(" .custom-navigation .span_ng3").removeClass("navigation");
                                      $(" .custom-navigation .span_ng4").addClass("navigation");
                                     //sendOTP()
                               
                   
                }else if($('#sign_btn4').is(":visible")){
                  verifyOTP()
                }
              }

         });


</script>
 -->
 
<script> 
$(document).on("keyup", "#create_password", function(){
  $(".form-validation-error").remove();
     if(IsPassword($("#create_password").val())== false){
          
            $("#create_password").closest(".form-group").append(" <div class='form-validation-error' >Password must contain at least 8 characters, including one uppercase , lowercase , number and spacial character.. </div>");
        }

     });
var input = "";
$(".form-validation-error").remove();
$(document).on("keyup", "#domain_name", function(){
<!--$("#domain_name").on("click", function (){-->
// function checkDomainExist(){
// alert("HII");
  $(".form-validation-error").remove();
  var domain_name = $("#domain_name").val();
    var input = {
              "domain_name" : domain_name,
             
             };
    
           $.ajax({
              url     : '<?php base_url(); ?>home/domain_name_exist',
              type    : 'Get',
              data    : input,
              dataType: 'json',
              success : function(json)
                   {
                    console.log("domain"+domain_name);
                    console.log(json);
                    $('#image').css('display', 'none');
                       if( json.type == "error" ){
                           $(".form-validation-error").remove();
                           $("#domain_name").closest(".form-group").append(" <div class='form-validation-error' > Sorry, this domain is not available</div>");
                     
                       }


                 },
             });
             });



</script>

