
<!-- Area =================--> 
    <!--================Start Contact Area =================-->

    


    <section class="sign_in  section_2 sign_in_main_login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 offset-md-4">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="pt-2 pb-2 text-center">
                               <a href="#"><img src="<?php echo base_url(); ?>assets/images/sign_in/sign_in_google.png" class="img-fluid" alt="Logo_Sign_In" width="60%"></a>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <form action="<?php echo base_url('home/loginprocess');?>" class="sign_in_demo" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" >
                              <div class="row Sign_in_Email pb-3 pt-3">
                                     <div class="col-lg-12 a-divider a-divider-break">
                                         <span class="text-center">or</span>
                                     </div>
                              </div>
                              <div class="form-group">
                                   <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" name="user_name" class="form-control" placeholder="User Id" value="">
                                                  <i class="material-icons-outlined">person</i>
                                                    </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                   <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control" placeholder="Password" value="">
                                                  <i class="material-icons-outlined">vpn_key</i>
                                                  <i class="material-icons">remove_red_eye</i>
                                                </div>
                                        </div>
                                    </div>
                              </div>
                              
                              <div class="form-group">
                                 <button type="submit" class="btn form-control request_btn">Sign In</button>
                              </div>

                              <div class="row">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                            <a  class=" forgot_pass pull-right" href="#"><u>Forgot password?</u></a>
                                            </div>
                                        </div>
                                </div>

                                <div class="row Sign_up_now">
                                     <div class="col-lg-12 text-center mt-3">
                                         <span class=""> Don't have FinCRM account?<a href="sign_up.php" class="ml-2"><u>Sign Up Now</u></a></span>
                                     </div>
                                  </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================End Contact Area =================-->
    





 
 
  <!--================End Footer Area =================--> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
   <!--  <script type="text/javascript">
        $(".take_me_there").click(function(){
            $(".section_2").removeClass("sign_in_dn");
             $(".section_1").addClass("sign_in_dn");
        });
    </script> -->

   

    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("contextmenu",function(){
               return false;
            }); 
        }); 
    </script> -->

