<!DOCTYPE html>
<html>
<head>
	<title>Leungo Technical Solution/Engineering</title>
	<?php include('head.php');?>
</head>
<body>
	<?php include('nav.php'); ?>
	<div class="page-header-section d-flex justify-content-center align-items-center" style="background-image: url(service-hero.jpg);">
		<div class="page-header-text">
			<h2>Engineering department</h2>
		</div>
	</div>
	<div class="engineering-page">
		<div class="leungo-container">
			<div class="row">
				<div class="col-md-6 bulk-left-img">
					<img src="brown-coal.jpg" alt="">
				</div>
				<div class="col-md-6 engsect-textright">
					<div class='bulk-eng-sect'>
						<h4><?php  accessValue($bulkengsect, 'bulk-eng-title');?></h4>
						<span class='bulk-eng-edit' contenteditable='true' id='bulk-eng-title' ></span>
						<p><?php  accessValue($bulkengsect, 'bulk-eng-text');?></p>
						<span class='bulk-eng-edit' contenteditable='true' id='bulk-eng-text'></span>
						<h6><?php  accessValue($bulkengsect, 'bulk-eng-subtitle');?></h6>
						<span class='bulk-eng-edit' contenteditable='true' id='bulk-eng-subtitle'></span>
						<ul class='bulk-listone-box'>
						    <div class="bulk-items-one"><?php accessList($bulklistone)?></div>
							<span class='bulk-eng-edit' contenteditable='true' id='list-item'></span>
						</ul>
						<div class='d-flex flex-row'>
							<ul class='bulk-listtwo-box'>
							   <div class="bulk-items-two"><?php accessList($bulklisttwo)?></div>
								<span class='bulk-eng-edit' contenteditable='true' id='list-item'></span>
							</ul>
							<ul class='bulk-listthree-box'>
							    <div class="bulk-items-three"><?php accessList($bulklistthree)?></div>
								<span class='bulk-eng-edit' contenteditable='true' id='list-item'></span>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 engsect-textleft">
					<div class="mechan-sect-box">
						<h4><?php  accessValue($mechansectbox, 'mech-title');?></h4>
						<span class='mech-eng-edit' contenteditable='true' id='mech-title'></span>
						<p><?php  accessValue($mechansectbox, 'mech-text');?></p>
						<span class='mech-eng-edit' contenteditable='true' id='mech-text'></span>
						<ul class="mechanic-list-one">
							<div class="mech-items-one">
							   <?php accessList($mechaniclistone)?>
							</div>
							<span class='mech-eng-edit' contenteditable='true' id='list-item'></span>
						</ul>
						<h6><?php  accessValue($mechansectbox, 'mech-subtitle');?></h6>
						<span class='mech-eng-edit' contenteditable='true' id='mech-subtitle'></span>
						<button>Read more </button>
						<ul class="mechanic-list-two">
							<div class="mech-items-two">
							<?php accessList($mechaniclisttwo)?>
							</div>
							<span class='mech-eng-edit' contenteditable='true' id='list-item'></span>
						</ul>
					</div>
				</div>
				<div class="col-md-6 mechanic-img-left">
					<img src="meachanical.jpg" alt="">
				</div>
			</div>
			<div class="row">
			   <div class="col-md-6 struct-img">
			      <img src="struct.jpg" alt="">
			   </div>
			   <div class="col-md-6 engsect-textright">
					<div class="struct-sect-box">
						<h4><?php  accessValue($structsectbox, 'struct-title');?></h4>
						<span class='struct-edit' id='struct-title' contenteditable='true'></span>
						<p><?php  accessValue($structsectbox, 'struct-text');?></p>
						<span class='struct-edit' id='struct-text' contenteditable='true'></span>
						<h6><?php  accessValue($structsectbox, 'struct-subtitle');?></h6>
						<span class='struct-edit' id='struct-subtitle' contenteditable='true'></span>
						<ul class="struct-list-box"> 
							<div class="struct-items-one"><?php accessList($structlistbox)?></div>
							<span class='struct-edit' id='list-item' contenteditable='true'></span>
						</ul>
					</div>
			   </div>
			</div>
			<div class="row">
				<div class="col-md-6 engsect-textleft">
					<div class="equip-sect-box">
						<h4><?php accessValue($equipsectbox, 'equip-title');?></h4>
						<span class='equip-edit' id='equip-title' contenteditable='true'></span>
						<p><?php accessValue($equipsectbox, 'equip-text');?></p>
						<span class='equip-edit' id='equip-text' contenteditable='true'></span>	
						<ul class="equip-list">
							<div class="equip-itmes-one"><?php accessList($equiplist)?></div>
							<span class='equip-edit' id='list-item' contenteditable='true'></span>
						</ul>
					</div>
				</div>
				<div class="col-md-6 equip-right-img">
					<img src="tech-img-one.jpg" alt="">
					<img src="tech-img-two.jpg" alt="">
				</div>
			</div>
			<div class="row">
			   <div class="col-md-6 mineral-img">
			      <img src="mineral.jpg" alt="">
			   </div>
			   <div class="col-md-6 engsect-textright">
			        <div class="miner-sect-box">
						<h4><?php accessValue($minersectbox, 'mineral-title');?></h4>
						<span class='mineral-edit' id='mineral-title' contenteditable='true'></span>
						<p><?php accessValue($minersectbox, 'mineral-text');?></p>
						<span class='mineral-edit' id='mineral-text' contenteditable='true'></span>
						<h6><?php accessValue($minersectbox, 'mineral-subtitle');?></h6>
						<span class='mineral-edit' id='mineral-subtitle' contenteditable='true'></span>
						<ul class="mineral-list-box">
							<div class="miner-items-one"><?php accessList($minerallistbox)?></div>
							<span class='mineral-edit' id='list-item' contenteditable='true'></span>
						</ul>
				    </div>
			   </div>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script src="plugins/js/eng.js"></script>
	<script src="plugins/js/script.js"></script>
</body>
</html>