<!DOCTYPE html>
<html>
<head>
	<title>Leungo Technical Solution</title>
	<?php include('head.php')?>
</head>
<body>
	<?php include('nav.php')?>
	<div class="header-area" style="background-image: url(hero_2.jpg);">
		<div class="header-title-box d-flex flex-column  align-items-center justify-content-center" >
			<img src="Leungo Logo-Transparent Orange.gif" style="height: 90px; width: 90px;">
			<h1>Leungo</h1>
		    <h6>Technical Solutions</h6>
		    <div class="header-btn-box">
		    	<a class="header-btn" href="#about-area">About Us</a> 
		    	<a class="header-btn" href="contact.html">Contact Us</a> 
		    </div>
		</div>
	</div>
	<div class="home-about-area" id="about-area">
		<div class="leungo-container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class='home-about-text'>
						<h5 class='home-about-title'>
							<span id='light-title'><?php  accessValue($about, 'about-first-title');?></span>
							<?php  accessValue($about, 'about-second-title');?>
						</h5>
						<span class='about-edit' contenteditable='true' id='about-first-title'></span>
						<span class='about-edit' contenteditable='true' id='about-second-title'></span>
						<p class='about-para-first'><?php  accessValue($about, 'first-about-para');?></p>
						<div class='about-edit' id='first-about-para' contenteditable='true'></div>
						<h6><?php  accessValue($about, 'about-pledge');?></h6>
						<div class='about-edit' id='about-pledge' contenteditable='true'></div>
						<p class='about-para-second'><?php  accessValue($about, 'second-about-para');?></p>
						<div class='about-edit' id='second-about-para' contenteditable='true'></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 about-img">
					<img src="tunnel2.jpg">
				</div>
			</div>
		</div>
	</div>
	<div class="services-area" style="background-image: url(hero_2.jpg); ">
		<div class="leungo-container">
			<div class="service-title">
				<h5><?php accessValue($homeservice, 'service-title');?></h5>
				<span class='home-srv-edits' contenteditable='true' id='service-title'></span>
				<p><?php accessValue($homeservice, 'service-subtitle');?></p>
				<span class='home-srv-edits' contenteditable='true' id='service-subtitle'></span>	
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="service-card">
						<i class='flaticon-044-oil-pump'></i>
						<h6><?php accessValue($servicecard, 'card-one-title');?></h6>
						<span  class='home-srv-edits' id='card-one-title' contenteditable='true'></span>
						<p><?php accessValue($servicecard, 'card-one-text');?></p>
					    <span  class='home-srv-edits' id='card-one-text' contenteditable='true'></span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-card">
						<i class='flaticon-036-construction-worker'></i>
						<h6><?php  accessValue($servicecard, 'card-two-title');?></h6>
						<span  class='home-srv-edits' id='card-two-title' contenteditable='true'></span>
						<p><?php  accessValue($servicecard, 'card-two-text');?></p>
					    <span  class='home-srv-edits' id='card-two-text' contenteditable='true'></span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-card">
						<i class='flaticon-043-oil-tank'></i>
						<h6><?php  accessValue($servicecard, 'card-three-title');?></h6>
						<span  class='home-srv-edits' id='card-three-title' contenteditable='true'></span>
						<p><?php  accessValue($servicecard, 'card-three-text');?></p>
					    <span  class='home-srv-edits' id='card-three-text' contenteditable='true'></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-area">
		<div class="leungo-container">
			<div class="home-contact-box">
				<h5>Please contact us <span>for more information</span></h5>
				<a>Contact us</a>
			</div>
		</div>
	</div>
	<?php include('footer.php')?>
	<script src="plugins/js/home.js"></script>
	<script src="plugins/js/script.js"></script>
</body>
</html>