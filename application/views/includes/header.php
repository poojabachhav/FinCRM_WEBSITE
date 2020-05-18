<!doctype html>
<html lang="en">

<head>
    
    
        <?php 
            $url=  $this->uri->segment(1); 
            // echo "URL === ".$url;
            
            if($url == ""){
                ?>
                    <title>FINCRM | CRM Software Provider for Industry Verticals 2020</title>
                    <meta name="description" content="Fincrm provides best customer relationship management software for different business verticals like insurance,banking,real estate,health,finance,travel,etc">
                    <meta name="keywords" content="crm, customer relationship management, crm software, crm solution">
                <?
            }else if($url == "industry"){
                ?>
                <title>FINCRM | CRM Software Company for Various Industry Verticals</title>
                <meta name="description" content="Fincrm offers best and easy to use CRM software solutions for small business, start ups, and various business verticals at an affordable price.">
                <meta name="keywords" content="crm, crm industry trends, crm industry analysis, crm industry market size, crm industry growth">
                <?php
            }else if($url == "partner"){
               ?>
                <title>Partner with FINCRM by Reselling our CRM Software</title>
                <meta name="description" content="FINCRM offers industry leading customer relationship management(CRM) and office management solution to startups,IT companies,marketing agencies,industries.">
                <meta name="keywords" content="crm, crm partner portal, customer relationship management">
               <?php 
            }else if($url == "pricing"){
               ?>
                <title>FINCRM |CRM and Office Management Solution Software 2020</title>
                <meta name="description" content="Leverage your business with quality leads with our customer relationship management (CMS) and office management solution software at a reasonable price.">
                <meta name="keywords" content="crm price, crm pricing models, crm price stock, crm pricing strategy, crm pricing guide">
               <?php 
            }else if($url == "contact-us"){
               ?>
                <title>CRM and Office Management Solution 2020 at FINCRM</title>
                <meta name="description" content="Improve your lead quality with FINCRM's customer relationship management (CRM) and office management solution software at an affordable price.">
                <meta name="keywords" content="crm, crm software company, crm software, customer relationship management company">
               <?php 
            }else if($url == "career"){
                 ?>
                <title>Work with FINCRM and Enhance Your Career</title>
                <meta name="Build your career with a revenue generating CRM company. We also partner with IT companies and organization for reselling our product.">
                <meta name="keywords" content="">
               <?php 
            }else if($url == "dynamic-entity-creation"){
                 ?>
                <title>Customized CRM Software for your Business | FINCRM</title>
                <meta name="description" content="FinCRM's (customer relationship management) solution allows you to create unlimited number of entities according to the needs of your organization">
                <meta name="keywords" content="crm entity, crm entity type codes, crm entities list, crm entity collection, crm entity types">
               <?php 
            }else if($url == "insightful-reports"){
                 ?>
                <title>Insightful CRM Reports for your Organization at FinCRM</title>
                <meta name="description" content="FinCRM's easy to use CRM software helps you to monitor team's performance, achieve your business goals and ensure your productivity.">
                <meta name="keywords" content="crm reports, crm report list, crm report format, crm reporting system, crm reporting an analytics">
               <?php 
            }else if($url == "cloud-based-document-manager"){
                 ?>
                <title>Best Cloud Based Document Manager CRM | FINCRM</title>
                <meta name="description" content="Organize your work with FINCRM's Cloud Based Document Manager CRM which is easy to use at an afforable price. We also offer customized plans.">
                <meta name="keywords" content="cloud based crm, cloud based crm software, cloud based crm tool, cloud based crm systems">
               <?php 
            }else if($url == "service-and-support"){
                 ?>
                <title>Service and Support available 24*7 by our experts | FINCRM</title>
                <meta name="description" content="We at FINCRM are happy to serve you. If anything arises that need our attention, our experienced team of support engineers is at your disposal 24*7.">
                <meta name="keywords" content="crm service providers, crm services company, crm service sector, crm service vendors, crm services">
               <?php 
            }else if($url == "prioritizing-your-security"){
                 ?>
                <title>Secure your database with Cloud Security at FINCRM</title>
                <meta name="description" content="FinCRM manages your client database with cloud security. Here the admin can secure the control from users and client portals just exactly as he desires.">
                <meta name="keywords" content="crm security, crm security models, crm security roles, crm security policy, crm security requirements">
               <?php 
            }else if($url == "email-and-sms-intelligence"){
                 ?>
                <title>Get Automated Email and SMS Services at FINCRM</title>
                <meta name="description" content="The advanced email interface at FinCRM makes it easier to create/edit templates for better communication.We also offer sms services for task reminders,etc">
                <meta name="keywords" content="crm and email marketing, crm and email integration, crm and email software, crm and email automation">
               <?php 
            }else if($url == "client-portal"){
                 ?>
                <title>Build Reliable Business Relationship with Client Portal</title>
                <meta name="description" content="Share your work progress directly with FINCRM's Client Portal and maintain complete transparency with your clients keeping a check on security.">
                <meta name="keywords" content="crm and client, crm and client management, crm and client database, crm and client portal, crm and client relationship management">
               <?php 
            }else if($url == "pipeline-management"){
                 ?>
                <title>Boost your Business with FinCRM's Pipeline Management</title>
                <meta name="description" content="With the pipeline, you can monitor your team’s action. You can also identify and track important metrics and determine your conversion rates.">
                <meta name="keywords" content="pipeline crm software, pipeline crm tool, pipeline crm pricing, crm pipeline management">
               <?php 
            }
            
        ?>
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Required meta tags -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url();?>assets/images/favicon1.png" type="image/png">
	
	

	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/flaticon/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material_icons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/flaticon.css">
	<link rel="stylesheet" href='<?php echo base_url(); ?>assets/css/font-awesome.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-confirm.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets/css/style_particles.css"> 
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
   	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom_style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css"/>

	<!-- jquery script -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160824738-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160824738-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160824738-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160824738-1');
</script>


   

	
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KP83P9N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo2.png" alt="" height="40"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<!-- <li class="nav-item active"><a class="nav-link" href="index.php">Features</a></li> -->

							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Features<i class="material-icons-outlined">
								keyboard_arrow_down</i></a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>dynamic-entity-creation">Dynamic Entity Creation</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>insightful-reports">Insightful Reports</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>cloud-based-document-manager">Cloud Based Documents Manager</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>service-and-support">Service and Support</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>prioritizing-your-security">Prioritizing Your Security</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>email-and-sms-intelligence">Email & SMS Intelligence</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>client-portal">Client Portal</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>pipeline-management">Pipeline Management</a></li>
									
								</ul>
							</li>

							<!--<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>industry">Industry</a></li>-->
							
							<li class="nav-item submenu dropdown"><a class="nav-link dropdown-toggle" href="<?php echo base_url();?>industry" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Industry<i class="material-icons-outlined">
								keyboard_arrow_down</i></a>
								<ul class="dropdown-menu industry_dropdown">
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-insurance">Insurance</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-banks-and-NBFC">Banks & NBFC</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-business-advisory">Business Advisory</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-real-estate">Real Estate</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-financial-consultant">Financial Consultant</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-travel-and-tourism">Travel & Tourism</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-recruitment-consultant">Recruitment Consultant</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-hospital-and-healthcare">Hospital & Healthcare</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-auto-dealerships">Auto Dealerships</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-education">Education</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>crm-for-Ecommerce">E-commerce</a></li>
								</ul>
							</li>
							
							<li class="nav-item submenu resources">
								<a href="<?php echo base_url();?>partner" class="nav-link">Partner</a>
								<!-- <ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="#">Knowledge</a></li>
									<li class="nav-item"><a class="nav-link" href="partner.php">Partner</a></li>
								</ul> -->
							</li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>pricing">Pricing</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>contact-us">Contact</a></li>
							<li class="nav-item"><a class="nav-link btn primary_btn1" href="<?php echo base_url();?>career">We are hiring</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<!-- <li class="nav-item"><a href="sign_in.php" class="primary_btn text-capitalize">We are Hiring</a></li> -->
							<li class="nav-item"><a href="<?php echo base_url();?>load-domain" class="primary_btn text-capitalize">Sign In</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->


	<script>
		var count_particles, stats, update;
		stats = new Stats;
		stats.setMode(0);
		stats.domElement.style.position = 'absolute';
		stats.domElement.style.left = '0px';
		stats.domElement.style.top = '0px';
		document.body.appendChild(stats.domElement);
		count_particles = document.querySelector('.js-count-particles');
		update = function() {
		stats.begin();
		stats.end();
		if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
		  count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
		}
		requestAnimationFrame(update);
		};
		requestAnimationFrame(update);
	</script>
