<div class="navbox" id='navbox'>
    <div class="container d-flex flex-row justify-content-between align-items-center">
        <img src="Logo-Landscape.png">
        <div class="navbox-links">
            <a href="home.php" target='blank' class="active"><?php accessValue($navlinks, 'home');?></a><span contenteditable='true' id='home' class='page-links'></span>
            <a href="engineer.php"> <?php  accessValue($navlinks, 'field-service');?> </a><span contenteditable='true' id='field-service' class='page-links'></span>
            <a href="field-services.php"><?php  accessValue($navlinks, 'Engineer');?> </a> <span contenteditable='true' id='Engineer' class='page-links'></span>
            <a href="technical-quality.php"><?php  accessValue($navlinks, 'tech-quality');?></a> <span contenteditable='true' id='tech-quality' class='page-links'></span>
            <a href="contact.php" class="contact-btn">Contact us</a> 
        </div>
        <span class='lni lni-menu'></span>
    </div>	
    <div class="menu-links">
        <div class="container">
            <a href="index.php"><?php accessValue($navlinks, 'home');?></a>
            <a href="field-services.php"> <?php  accessValue($navlinks, 'field-service');?></a>
            <a href="engineer.php"><?php  accessValue($navlinks, 'Engineer');?> </a>
            <a href="technical-quality.php"><?php  accessValue($navlinks, 'tech-quality');?></a> 
            <a href="contact.php" class="contact-btn">Contact us</a> 
        </div>
    </div>
</div>