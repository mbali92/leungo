<?php include('send-mail.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Leungo Technical Solution/Contact</title>
  <?php include('head.php')?>
  <link rel="stylesheet" type="text/css" href="communication-icon/flaticon2.css">
</head>
<body>
<?php include('nav.php');?>
  <div class="page-header-section d-flex justify-content-center align-items-center" style="background-image: url(tech-quality.jpg); background-position: bottom;">
    <div class="page-header-text">
      <h2>Contact us</h2>
    </div>
  </div>
  <div class="contact-section">
    <div class="container">
      <h2>Get in touch</h2>
      <div class="row">
        <div class="col-lg-8">
          <form action="<?php echo $_SERVER["PHP_SELF"];?>" name='formtext' method="post">
            <div class="half-inputs">
              <input type="text" name="name" placeholder="Enter your name" id='name'>
              <input type="text" name="email" placeholder="email" id="email">
            </div>
            <input type="text" name="subject" placeholder="Enter subject">
            <textarea method='post' id='massage' form='formtext' cols="30" rows="7" name="massage" placeholder='massage'></textarea>
            <input type="submit" name="submit" class="send-info">
            <button id='login'>login</button>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="contact-details d-flex flex-row">
              <span class="flaticon-023-phone-call-1"></span>
              <div class="contact-text">
                <h6>Contact Us</h6>
                <p>Tel: +267 311 3690</p>
                <p>Fax: +267 311 3680</p>
              </div>
            </div>
          <div class="contact-details d-flex flex-row">
            <span class="flaticon-013-envelope-3"></span>
            <div class="contact-text">
              <h6>Email</h6>
              <p>contact@leungotechnical.com</p>
            </div>
          </div>
          <div class="contact-details d-flex flex-row">
            <span class="flaticon-025-paper-plane"></span>
            <div class="contact-text">
              <h6>Location</h6>
              <p> Plot 54368,ITowers Gaborone CBD, Botswana</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php')?>
	<script  src="plugins/js/contact.js"></script>
</body>
</html>
