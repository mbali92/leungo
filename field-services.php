<!DOCTYPE html>
<html>
<head>
	<title>Leungo Technical Solution/Field Services</title>
	<?php include('head.php')?>
</head>
<body>
	<?php include('nav.php')?>
	<div class="page-header-section d-flex justify-content-center align-items-center" style="background-image: url(service-hero.jpg);">
		<div class="page-header-text">
			<h2>Field Services</h2>
		</div>
	</div>
	<div class="field-services">
		<div class="leungo-container">
			<div class="row">
				<div class="col-md-6 service-sect-img">
					<img src="service-img2.jpg" alt="">
					<img src="service-hero.jpg" alt="">
				</div>
				<div class="col-md-6 service-sect-text">
					<div class='svr-imgText-area'>
						<h4><?php accessValue($fieldservtext, 'serv-img-title');?></h4>
						<span class='svr-page-edit' contenteditable='true' id='serv-img-title'></span>
						<p><?php accessValue($fieldservtext, 'serv-img-text');?></p>
						<span class='svr-page-edit' contenteditable='true' id='serv-img-text'></span>
					</div>
					<ul class="field-service-list">
						<div class="serv-items-one"><?php accessList($fieldservlist)?></div>
						<div class="page-svrlist-edit" id='list-item' contenteditable='true'></div>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php')?>
	<script  src="plugins/js/service.js"></script>
	<script  src="plugins/js/script.js"></script>
</body>
</html>