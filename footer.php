<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h4>Leungo</h4>
                <div class='footer-text'>
                    <p><?php accessValue($footertext, 'footer-para');?></p>
                    <span class='footer-edit' contenteditable='true' id='footer-para'></span>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Contact </h5>
                <div class="footer-contact">
                    <p><?php  accessValue($footercontact, 'footer-address');?></p>
                    <span class='footer-edit' contenteditable='true' id='footer-address'></span>
                    <p><span>Tel:</span> <?php  accessValue($footercontact, 'footer-tel');?></p>
                    <span class='footer-edit' contenteditable='true' id='footer-tel'></span>
                    <p><span>Fax:</span> <?php  accessValue($footercontact, 'footer-fax');?></p>
                    <span class='footer-edit' contenteditable='true' id='footer-fax'></span>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Our Sectors</h5>
                <ul class='footer-link'>
                    <li><?php  accessValue($footerlink, 'footer-fax');?></li>
                    <span class='footer-edit' contenteditable='true' id='footer-link-one'></span>
                    <li><?php  accessValue($footerlink, 'footer-link-two');?></li>
                    <span class='footer-edit' contenteditable='true' id='footer-link-two'></span>
                    <li><?php  accessValue($footerlink, 'footer-link-three');?></li>
                    <span class='footer-edit' contenteditable='true' id='footer-link-three'></span>
                    <li><?php  accessValue($footerlink, 'footer-link-four');?></li>
                    <span class='footer-edit' contenteditable='true' id='footer-link-four'></span>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Social media</h5>
                <i class='fa fa-facebook'></i>
                <i class='fa fa-linkedin'></i>
            </div>
            <div class="col-lg-3 col-md-6 map-box">
                <h5>Our Location</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232154.81097124476!2d25.79041868043085!3d-24.60924236340215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ebb5b3c2ceea9bf%3A0x49a1769397ae11a1!2sGaborone%2C%20Botswana!5e0!3m2!1sen!2sza!4v1591623619184!5m2!1sen!2sza"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>		
</footer>