<!DOCTYPE html>
<html>
<head>
	<title>Leungo Technical Solution/Technical Quality</title>
	<?php include('head.php'); ?>
</head>
<body>
	<?php include('nav.php')?>
	<div class="page-header-section d-flex justify-content-center align-items-center" style="background-image: url(service-hero.jpg);">
		<div class="page-header-text">
			<h2>Technical quality</h2>
		</div>
	</div>
	<div class="tech-quality">
		<div class="leungo-container">
			<div class="row">
				<div class="col-md-12 col-lg-6 technical-sect-img">
					<img src="tech-quality.jpg" alt="">
				</div>
				<div class="col-md-12 col-lg-6 technical-sect-text">
					<div class="tech-imgsect-text">
						<h4><?php accessValue($techimgsecttext, 'tect-img-title');?></h4>
						<span class='tech-edit' contenteditable="true" id='tect-img-title'></span>
						<p><?php accessValue($techimgsecttext, 'tech-img-text');?></p>
						<span class='tech-edit' contenteditable="true" id='tech-img-text'></span>	
					</div>
					<ul class="tech-listbox-one">
					    <div class='techlist-one'><?php accessList($techlistboxone)?></div>
						<div class='tech-list-edit' contenteditable="true" id='list-item'></div>
					</ul>
					<div class="tech-imgsect-text">
					    <h6><?php accessValue($techimgsecttext, 'tech-img-subtitle');?></h6>
						<span class='tech-edit' contenteditable="true" id='tech-img-subtitle'></span>
					</div>
				    <ul class="tech-listbox-two">
						<div class="techlist-two"><?php accessList($techlistboxtwo)?></div>
						<div class='tech-list-edit' contenteditable="true" id='list-item'></div>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php')?>
	<script src="plugins/js/tech.js"></script>
	<script src="plugins/js/script.js"></script>
</body>
</html>