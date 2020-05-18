<style type="text/css">
  /*Partner Timeline Section Page Start*/

    a {
    text-decoration: none
}

/*h4 {
    text-align: center;
    margin: 30px 0;
    color: #444
}*/

.main-timeline {
    position: relative
}

.main-timeline:before {
    content: "";
    width: 5px;
    height: 100%;
    border-radius: 20px;
    margin: 0 auto;
    background: #242922;
    position: absolute;
    top: 0;
    left: 0;
    right: 0
}

.main-timeline .timeline {
    display: inline-block;
    margin-bottom: 50px;
    position: relative
}

.main-timeline .timeline:before {
    content: "";
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 4px solid #fff;
    background: #ec496e;
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    transform: translate(-50%, -50%)
}

.main-timeline .timeline-icon {
    display: inline-block;
    width: 130px;
    height: 130px;
    border-radius: 50%;
    border: 3px solid #ec496e;
    padding: 13px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 30%;
    transform: translateY(-50%)
}

.main-timeline .timeline-icon i {
    display: block;
    border-radius: 50%;
    background: #ec496e;
    font-size: 64px;
    color: #fff;
    line-height: 100px;
    z-index: 1;
    position: relative
}

.main-timeline .timeline-icon:after,
.main-timeline .timeline-icon:before {
    content: "";
    width: 100px;
    height: 4px;
    background: #ec496e;
    position: absolute;
    top: 50%;
    right: -100px;
    transform: translateY(-50%)
}

.main-timeline .timeline-icon:after {
    width: 70px;
    height: 50px;
    background: #fff;
    top: 89px;
    right: -30px
}

.main-timeline .timeline-content {
    width: 50%;
    padding: 0 50px;
    margin: 52px 0 0;
    float: right;
    position: relative
}

.main-timeline .timeline-content:before {
    content: "";
    width: 70%;
    height: 100%;
    border: 3px solid #ec496e;
    border-top: none;
    border-right: none;
    position: absolute;
    bottom: -13px;
    left: 35px
}

.main-timeline .timeline-content:after {
    content: "";
    width: 37px;
    height: 3px;
    background: #ec496e;
    position: absolute;
    top: 13px;
    left: 0
}

.main-timeline .title {
    font-size: 20px;
    font-weight: 600;
    color: #ec496e;
    text-transform: uppercase;
    margin: 0 0 5px
}

.main-timeline .description {
    display: inline-block;
    font-size: 16px;
    color: #404040;
    line-height: 20px;
    letter-spacing: 1px;
    margin: 0
}

.main-timeline .timeline:nth-child(even) .timeline-icon {
    left: auto;
    right: 30%
}

.main-timeline .timeline:nth-child(even) .timeline-icon:before {
    right: auto;
    left: -100px
}

.main-timeline .timeline:nth-child(even) .timeline-icon:after {
    right: auto;
    left: -30px
}

.main-timeline .timeline:nth-child(even) .timeline-content {
    float: left
}

.main-timeline .timeline:nth-child(even) .timeline-content:before {
    left: auto;
    right: 35px;
    transform: rotateY(180deg)
}

.main-timeline .timeline:nth-child(even) .timeline-content:after {
    left: auto;
    right: 0
}

.main-timeline .timeline:nth-child(2n) .timeline-content:after,
.main-timeline .timeline:nth-child(2n) .timeline-icon i,
.main-timeline .timeline:nth-child(2n) .timeline-icon:before,
.main-timeline .timeline:nth-child(2n):before {
    background: #f9850f
}

.main-timeline .timeline:nth-child(2n) .timeline-icon {
    border-color: #f9850f
}

.main-timeline .timeline:nth-child(2n) .title {
    color: #f9850f
}

.main-timeline .timeline:nth-child(2n) .timeline-content:before {
    border-left-color: #f9850f;
    border-bottom-color: #f9850f
}

.main-timeline .timeline:nth-child(3n) .timeline-content:after,
.main-timeline .timeline:nth-child(3n) .timeline-icon i,
.main-timeline .timeline:nth-child(3n) .timeline-icon:before,
.main-timeline .timeline:nth-child(3n):before {
    background: #8fb800
}

.main-timeline .timeline:nth-child(3n) .timeline-icon {
    border-color: #8fb800
}

.main-timeline .timeline:nth-child(3n) .title {
    color: #8fb800
}

.main-timeline .timeline:nth-child(3n) .timeline-content:before {
    border-left-color: #8fb800;
    border-bottom-color: #8fb800
}

.main-timeline .timeline:nth-child(4n) .timeline-content:after,
.main-timeline .timeline:nth-child(4n) .timeline-icon i,
.main-timeline .timeline:nth-child(4n) .timeline-icon:before,
.main-timeline .timeline:nth-child(4n):before {
    background: #2fcea5
}

.main-timeline .timeline:nth-child(4n) .timeline-icon {
    border-color: #2fcea5
}

.main-timeline .timeline:nth-child(4n) .title {
    color: #2fcea5
}

.main-timeline .timeline:nth-child(4n) .timeline-content:before {
    border-left-color: #2fcea5;
    border-bottom-color: #2fcea5
}

@media only screen and (max-width:1200px) {
    .main-timeline .timeline-icon:before {
        width: 50px;
        right: -50px
    }
    .main-timeline .timeline:nth-child(even) .timeline-icon:before {
        right: auto;
        left: -50px
    }
    .main-timeline .timeline-content {
        margin-top: 75px
    }
}

@media only screen and (max-width:990px) {
    .main-timeline .timeline {
        margin: 0 0 10px
    }
    .main-timeline .timeline-icon {
        left: 25%
    }
    .main-timeline .timeline:nth-child(even) .timeline-icon {
        right: 25%
    }
    .main-timeline .timeline-content {
        margin-top: 115px
    }
}

@media only screen and (max-width:767px) {
    .main-timeline {
        padding-top: 50px
    }
    .main-timeline:before {
        left: 80px;
        right: 0;
        margin: 0
    }
    .main-timeline .timeline {
        margin-bottom: 70px
    }
    .main-timeline .timeline:before {
        top: 0;
        left: 83px;
        right: 0;
        margin: 0
    }
    .main-timeline .timeline-icon {
        width: 60px;
        height: 60px;
        line-height: 40px;
        padding: 5px;
        top: 0;
        left: 0
    }
    .main-timeline .timeline:nth-child(even) .timeline-icon {
        left: 0;
        right: auto
    }
    .main-timeline .timeline-icon:before,
    .main-timeline .timeline:nth-child(even) .timeline-icon:before {
        width: 25px;
        left: auto;
        right: -25px
    }
    .main-timeline .timeline-icon:after,
    .main-timeline .timeline:nth-child(even) .timeline-icon:after {
        width: 25px;
        height: 30px;
        top: 44px;
        left: auto;
        right: -5px
    }
    .main-timeline .timeline-icon i {
        font-size: 30px;
        line-height: 45px
    }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(even) .timeline-content {
        width: 100%;
        margin-top: -15px;
        padding-left: 130px;
        padding-right: 5px
    }
    .main-timeline .timeline:nth-child(even) .timeline-content {
        float: right
    }
    .main-timeline .timeline-content:before,
    .main-timeline .timeline:nth-child(even) .timeline-content:before {
        width: 50%;
        left: 120px
    }
    .main-timeline .timeline:nth-child(even) .timeline-content:before {
        right: auto;
        transform: rotateY(0)
    }
    .main-timeline .timeline-content:after,
    .main-timeline .timeline:nth-child(even) .timeline-content:after {
        left: 85px
    }
}

@media only screen and (max-width:479px) {
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(2n) .timeline-content {
        padding-left: 110px
    }
    .main-timeline .timeline-content:before,
    .main-timeline .timeline:nth-child(2n) .timeline-content:before {
        left: 99px
    }
    .main-timeline .timeline-content:after,
    .main-timeline .timeline:nth-child(2n) .timeline-content:after {
        left: 65px
    }
}


/******************* Timeline Demo - 4 *****************/

.main-timeline4 {
    overflow: hidden;
    position: relative
}

.main-timeline4:before {
    content: "";
    /*width: 3px;*/
    height: 70%;
    border:1px dashed #4984CA;
    position: absolute;
    top: 60px;
    left: 50%;
    transform: translateX(-50%)
}

.main-timeline4 .timeline-content:before,
.main-timeline4 .timeline:before {
    /*top: 50%;*/
    top: 45%;
    transform: translateY(-50%);
    content: ""
}

.main-timeline4 .timeline {
    width: 50%;
    /*padding-left: 100px;*/
    padding-left: 130px;
    float: right;
    position: relative
}

.main-timeline4 .timeline:before {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #4984CA;
    border: 5px solid #4984CA;
    position: absolute;
    left: -10px
}

.main-timeline4 .timeline-content {
    display: block;
    padding-left: 150px;
    position: relative
}

.main-timeline4 .timeline-content:before {
    width: 125px;
    /*height: 10px;*/
    border-top: 3px dotted #4984CA;
    position: absolute;
    left: -125px
}

.main-timeline4 .year {
    display: inline-block;
    width: 120px;
    height: 120px;
    line-height: 100px;
    border-radius: 50%;
    border: 10px solid #f54957;
    font-size: 30px;
    color: #f54957;
    text-align: center;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, .4);
    position: absolute;
    top: 0;
    left: 0
}


.main-timeline4 .year:hover{
    background-color: #f54957;
    box-shadow: unset;
}


/*.main-timeline4 .year:before {
    content: "";
    border-left: 20px solid #f54957;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    position: absolute;
    bottom: -13px;
    right: 0;
    transform: rotate(45deg)
}*/

.main-timeline4 .inner-content {
    padding: 20px 0
}

.main-timeline4 .title {
    font-size: 24px;
    font-weight: 600;
    color: #f54957;
    text-transform: uppercase;
    margin: 0 0 5px
}

.main-timeline4 .description {
    font-size: 14px;
    color: #6f6f6f;
    margin: 0 0 5px
}

.main-timeline4 .timeline:nth-child(2n) {
    padding: 0 130px 0 0
}

.main-timeline4 .timeline:nth-child(2n) .timeline-content:before,
.main-timeline4 .timeline:nth-child(2n) .year,
.main-timeline4 .timeline:nth-child(2n):before {
    left: auto;
    right: -10px
}

.main-timeline4 .timeline:nth-child(2n) .timeline-content {
    padding: 0 150px 0 0
}

.main-timeline4 .timeline:nth-child(2n) .timeline-content:before {
    right: -125px
}

.main-timeline4 .timeline:nth-child(2n) .year {
    right: 0
}

.main-timeline4 .timeline:nth-child(2n) .year:before {
    right: auto;
    left: 0;
    border-left: none;
    border-right: 20px solid #f54957;
    transform: rotate(-45deg)
}

.main-timeline4 .timeline:nth-child(2) {
   /* margin-top: 110px*/
    margin-top: 200px;
}

.main-timeline4 .timeline:nth-child(odd) {
   /* margin: -110px 0 0;*/
    margin: -75px 0 0;
}

.main-timeline4 .timeline:nth-child(even) {
   /* margin-bottom: 80px*/
    margin-bottom: 140px
}

.main-timeline4 .timeline:first-child,
.main-timeline4 .timeline:last-child:nth-child(even) {
    margin: 0
}

.main-timeline4 .timeline:last-child:nth-child(even) {
    margin-top: 110px;
    margin-bottom: 110px;
}

.main-timeline4 .timeline:nth-child(2n) .year {
    border-color: #1ebad0;
    color: #1ebad0
}

.main-timeline4 .timeline:nth-child(2n) .year:hover{
    background-color:#1ebad0; 
}

.main-timeline4 .timeline:nth-child(2) .year:before {
    border-right-color: #1ebad0
}

.main-timeline4 .timeline:nth-child(2n) .title {
    color: #1ebad0
}

.main-timeline4 .timeline:nth-child(3n) .year {
    border-color: #7cba01;
    color: #7cba01
}

.main-timeline4 .timeline:nth-child(3n) .year:hover{
    background-color: #7cba01;
    box-shadow: unset;
}

.main-timeline4 .timeline:nth-child(3) .year:before {
    border-left-color: #7cba01
}

.main-timeline4 .timeline:nth-child(3n) .title {
    color: #7cba01
}

.main-timeline4 .timeline:nth-child(4n) .year {
    border-color: #f8781f;
    color: #f8781f
}

.main-timeline4 .timeline:nth-child(4n) .year:hover{
    background-color: #f8781f;
}

.main-timeline4 .timeline:nth-child(4) .year:before {
    border-right-color: #f8781f
}

.main-timeline4 .timeline:nth-child(4n) .title {
    color: #f8781f
}

.main-timeline4 .timeline:nth-child(odd) .timeline-content>.inner-content
{
    text-align: center;
    position: relative;
    top: 113px;
    left: -228px;
}

.main-timeline4 .timeline:nth-child(even) .timeline-content>.inner-content
{
    text-align: center;
    position: relative;
    top: 113px;
    left: 228px;
}


.animatable {
  
  /* initially hide animatable objects */
  visibility: hidden;
  
  /* initially pause animatable objects their animations */
  -webkit-animation-play-state: paused;   
  -moz-animation-play-state: paused;     
  -ms-animation-play-state: paused;
  -o-animation-play-state: paused;   
  animation-play-state: paused; 
}

/* show objects being animated */
.animated {
  visibility: visible;
  
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  
  -webkit-animation-duration: 2s;
  -moz-animation-duration: 2s;
  -ms-animation-duration: 2s;
  -o-animation-duration: 2s;
  animation-duration: 2s;

  -webkit-animation-play-state: running;
  -moz-animation-play-state: running;
  -ms-animation-play-state: running;
  -o-animation-play-state: running;
  animation-play-state: running;
}

/* CSS Animations (extracted from http://glifo.uiparade.com/) */
@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
    }   100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes fadeInUp {
    0% {
        opacity: 0;
        -moz-transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateY(0);
    }
}

@-o-keyframes fadeInUp {
    0% {
        opacity: 0;
        -o-transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -o-transform: translateY(0);
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animated.fadeInUp {
    -webkit-animation-name: fadeInUp;
    -moz-animation-name: fadeInUp;
    -o-animation-name: fadeInUp;
    animation-name: fadeInUp;
}

@media only screen and (max-width:1200px) {
    .main-timeline4 .year {
        top: 50%;
        transform: translateY(-50%)
    }
}

@media only screen and (max-width:990px) {
    .main-timeline4 .timeline {
        padding-left: 75px
    }
    .main-timeline4 .timeline:nth-child(2n) {
        padding: 0 75px 0 0
    }
    .main-timeline4 .timeline-content {
        padding-left: 130px
    }
    .main-timeline4 .timeline:nth-child(2n) .timeline-content {
        padding: 0 130px 0 0
    }
    .main-timeline4 .timeline-content:before {
        width: 68px;
        left: -68px
    }
    .main-timeline4 .timeline:nth-child(2n) .timeline-content:before {
        right: -68px
    }

    .main-timeline4 .timeline:nth-child(odd) .timeline-content>.inner-content
    {
        text-align: center;
        position: relative;
        top: 0px;
        left: 0px;
    }

    .main-timeline4 .timeline:nth-child(even) .timeline-content>.inner-content
    {
        text-align: center;
        position: relative;
        top: 0px;
        left: 0px;
    }
}

@media only screen and (max-width:767px) {
    .main-timeline4 {
        overflow: visible
    }
    .main-timeline4:before {
        height: 100%;
        top: 0;
        left: 0;
        transform: translateX(0)
    }
    .main-timeline4 .timeline:before,
    .main-timeline4 .timeline:nth-child(2n):before {
        top: 60px;
        left: -9px;
        transform: translateX(0)
    }
    .main-timeline4 .timeline,
    .main-timeline4 .timeline:nth-child(even),
    .main-timeline4 .timeline:nth-child(odd) {
        width: 100%;
        float: none;
        text-align: center;
        padding: 0;
        margin: 0 0 10px
    }
    .main-timeline4 .timeline-content,
    .main-timeline4 .timeline:nth-child(2n) .timeline-content {
        padding: 0
    }
    .main-timeline4 .timeline-content:before,
    .main-timeline4 .timeline:nth-child(2n) .timeline-content:before {
        display: none
    }
    .main-timeline4 .timeline:nth-child(2n) .year,
    .main-timeline4 .year {
        position: relative;
        transform: translateY(0)
    }
    .main-timeline4 .timeline:nth-child(2n) .year:before,
    .main-timeline4 .year:before {
        border: none;
        border-right: 20px solid #f54957;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        top: 50%;
        left: -23px;
        bottom: auto;
        right: auto;
        transform: rotate(0)
    }
    .main-timeline4 .timeline:nth-child(2n) .year:before {
        border-right-color: #1ebad0
    }
    .main-timeline4 .timeline:nth-child(3n) .year:before {
        border-right-color: #7cba01
    }
    .main-timeline4 .timeline:nth-child(4n) .year:before {
        border-right-color: #f8781f
    }
    .main-timeline4 .inner-content {
        padding: 10px
    }
}

/*Partner Timeline Section Page End*/

</style>

<!--================Start Feature1  Area =================-->

    <section class="partner_main_heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2>Channel Partner Program</h2>
                        <p>Partner with industry leading CRM and office management solution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner_main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="partner">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/images/partner/partner.svg" alt="Partner" width="100%">
                    </div>
                </div>
                <div class="col-12 col-md-6 pr-0">
                    <div class="partner_content">
                        <h4 class="partner-link">More About Program</h4>
                        <p class="text-justify mt-4 mb-0">FinCRM Channel Partner Program is designed for businesses of all nature and sizes. An opportunity to monetize and add value to your current clients and new leads by referring our solutions.We are offering partnership to IT companies, web and online marketing agencies, IT and business consultants, and those considering opening a new business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner_main_join" id="partner_main_join_timeline">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center pb-3">
                        <h2>Why should you join our partner program?</h2>
                    </div>
                </div>
            </div>
        </div>
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline4">
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year year_img">
                                    <img src="<?php echo base_url();?>assets/images/partner/enhance-effect.svg" id="home-button" class="img-fluid home-button" alt="enhance-effect" width="60%">
                                </span>
                                <div class="inner-content">
                                    <!-- <h3 class="title">Web Designer</h3> -->
                                    <p class="description animatable fadeInUp">
                                        Enhance your product offering by adding FinCRM, a highly adopted product to your portfolio.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year year_img1">
                                    <img src="<?php echo base_url();?>assets/images/partner/enhance-effect.svg" id="home-button1" class="img-fluid home-button" alt="enhance-effect" width="60%">
                                </span>
                                <div class="inner-content">
                                    <!-- <h3 class="title">Web Developer</h3> -->
                                    <p class="description animatable fadeInUp">
                                        Enhance your product offering by adding FinCRM, a highly adopted product to your portfolio.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year year_img2">
                                    <img src="<?php echo base_url();?>assets/images/partner/enhance-effect.svg" id="home-button2" class="img-fluid home-button" alt="enhance-effect" width="60%">
                                </span>
                                <div class="inner-content">
                                   <!--  <h3 class="title">Web Designer</h3> -->
                                    <p class="description animatable fadeInUp">
                                        Enhance your product offering by adding FinCRM, a highly adopted product to your portfolio.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year year_img3">
                                    <img src="<?php echo base_url();?>assets/images/partner/enhance-effect.svg" id="home-button3" class="img-fluid home-button" alt="enhance-effect" width="60%">
                                </span>
                                <div class="inner-content">
                                    <!-- <h3 class="title">Web Developer</h3> -->
                                    <p class="description animatable fadeInUp">
                                        Enhance your product offering by adding FinCRM, a highly adopted product to your portfolio.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
  <section class="FAQ">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="text-center py-5">
               <h2>Frequently asked questions</h2>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="pricing_Faq" class="partner_faq mb-5">
   <div class="tabs" id="partner_faq_tabs">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 pr-0">
               <ul class="nav nav-pills nav-stacked flex-column">
                  <li class="active"><a href="#tab_a" data-toggle="pill">What is CRM?</a></li>
                  <li><a href="#tab_b" data-toggle="pill">How does the 21-day free trial work?</a></li>
                  <li><a href="#tab_c" data-toggle="pill">What services are a part of FinCRM Ultimate?</a></li>
                  <li><a href="#tab_d" data-toggle="pill">How many website visitors can I track with CRM ?</a></li>
                  <li><a href="#tab_e" data-toggle="pill">Can I get a demo of FinCRM?</a></li>
                  <li><a href="#tab_f" data-toggle="pill">How many website visitors can I track with CRM?</a></li>
                  <li><a href="#tab_g" data-toggle="pill">What happens after my trial ends?</a></li>
                  <li><a href="#tab_h" data-toggle="pill">Have more questions?</a></li>
               </ul>
            </div>
            <div class="col-lg-6 pl-0">
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_a">
                     <h3>What is CRM?</h3>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod </p>
                  </div>
                  <div class="tab-pane" id="tab_b">
                     <h3>How does the 21-day free trial work?</h3>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod </p>
                  </div>
                  <div class="tab-pane" id="tab_c">
                     <h3>What services are a part of FinCRM Ultimate?</h3>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod </p>
                  </div>
                  <div class="tab-pane" id="tab_d">
                     <h3>How many website visitors can I track with CRM ?</h3>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod </p>
                  </div>
                  <div class="tab-pane" id="tab_e">
                     <h3>Can I get a demo of FinCRM?</h3>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod </p>
                  </div>
                  <div class="tab-pane" id="tab_f">
                     <h3>How many website visitors can I track with CRM?</h3>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod </p>
                  </div>
                  <div class="tab-pane" id="tab_g">
                     <h3>What happens after my trial ends?</h3>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod </p>
                  </div>
                  <div class="tab-pane" id="tab_h">
                     <h3>Have more questions?</h3>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section id="pricing_Faq_Mobile" class="mb-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div id="accordion" class="accordion mt-5">
               <div class="card mb-0">
                  <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                     <a class="card-title">
                     What is CRM?
                     </a>
                  </div>
                  <div id="collapseOne" class="card-body collapse" data-parent="#accordion" >
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                     <a class="card-title">
                     How does the 21-day free trial work?
                     </a>
                  </div>
                  <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                     <a class="card-title">
                     What services are a part of FinCRM Ultimate?
                     </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion" >
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                     </div>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                     <a class="card-title">
                     How many website visitors <br>can I track with CRM?
                     </a>
                  </div>
                  <div id="collapseFour" class="collapse" data-parent="#accordion" >
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                     </div>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                     <a class="card-title">
                     Can I get a demo of FinCRM?
                     </a>
                  </div>
                  <div id="collapseFive" class="collapse" data-parent="#accordion" >
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                     </div>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                     <a class="card-title">
                     How many website visitors <br>can I track with CRM?
                     </a>
                  </div>
                  <div id="collapseSix" class="collapse" data-parent="#accordion" >
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                     </div>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                     <a class="card-title">
                     What happens after my trial ends?
                     </a>
                  </div>
                  <div id="collapseSeven" class="collapse" data-parent="#accordion" >
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                     </div>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                     <a class="card-title">
                     Have more questions?
                     </a>
                  </div>
                  <div id="collapseEight" class="collapse" data-parent="#accordion" >
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


    <section class="footer-content">
      <div class="container-fluid">
          <div class="row footer-top">
               <div class="col-lg-12 text-center pt-5 pb-5 ">
                    <div class="header_section_demo pt-5 pb-5">
                        <h3 class="heading_1 text-white">Interested in becoming a <br> FinCRM partner?</h3>
                        <a href="<?php echo base_url();?>become-a-partner" class="btn btn-footer1 mt-4 text-uppercase">Become a partner</a>
                   </div>
               </div>
          </div>
      </div>
      </section>

    <script type="text/javascript">
  $(function() {
  var $a = $("#pricing_Faq .tabs li");
  $a.click(function() {
    $a.removeClass("active");
    $(this).addClass("active");
  });
});
</script>

  <script type="text/javascript">
    

jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
        $animatables.each(function(i) {
       var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
            }
    });

    };
  
  // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});
    </script>




<script type="text/javascript">
   $(function(){
  $(".year_img").on({
   mouseenter: function(){
    $(".year_img #home-button").attr('src','<?php echo base_url();?>assets/images/partner/enhance-effect_white.svg');
  },
  mouseleave: function(){
    $(".year_img #home-button").attr('src','<?php echo base_url();?>assets/images/partner/enhance-effect.svg');
  }
  });
  
});

 $(function(){
  $(".year_img1").on({
   mouseenter: function(){
    $(".year_img1 #home-button1").attr('src','<?php echo base_url();?>assets/images/partner/enhance-effect_white.svg');
  },
  mouseleave: function(){
    $(".year_img1 #home-button1").attr('src','<?php echo base_url();?>assets/images/partner/enhance-effect.svg');
  }
 
  });
  
}); 

 $(function(){
  $(".year_img2").on({
   mouseenter: function(){
    $(".year_img2 #home-button2").attr('src','<?php echo base_url();?>assets/images/partner/enhance-effect_white.svg');
  },
  mouseleave: function(){
    $(".year_img2 #home-button2").attr('src','<?php echo base_url();?>assets/images/partner/enhance-effect.svg');
  }
  });
  
}); 

 $(function(){
  $(".year_img3").on({
   mouseenter: function(){
    $(".year_img3 #home-button3").attr('src','<?php echo base_url();?>assets/images/partner/enhance-effect_white.svg');
  },
  mouseleave: function(){
    $(".year_img3 #home-button3").attr('src','<?php echo base_url();?>assets/images/partner/enhance-effect.svg');
  }
 
  });
  
});
</script>

