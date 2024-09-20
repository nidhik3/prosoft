<!-- ======= Contact Section ======= -->

<style>
  .contact .info i {
    float: none;
  }

  .contact .info p {
    padding: 0px;
  }
</style>
<section class="header-row">
  <div class="row d-flex">
    <div class="section-title aos-init aos-animate" data-aos="fade-up">
      <h2>Contact Us</h2>
      <p>
        <a href="<?php echo base_url(); ?>">Home</a> / Contact Us</p>
    </div>
  </div>
</section>
<section id="contact" class="contact">
  <div class="container">


    <div class="row">
      <div class="col-sm-6 text-center">
        <div class="info">
          <div>
            <i class="ri-map-pin-line"></i>
            <p>PROSOFT LLC, Office No 10,Level 1,<br />Sharjah Media City, Sharjah,UAE</p>
          </div>



        </div>
      </div>

      <div class="col-sm-6 text-center">
        <div class="info">
          <div>
            <i class="ri-mail-send-line"></i>
            <p> admin@prosoft.org.in</p>
            <p> For Sales contact US on Sales@prosoft.org.in</p>
            <p>  For Technical support contact us on Support@prosoft.org.in</p> 
          </div>


        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info">



        </div>
      </div>


    </div>
    <div class="row">

      <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.765864979887!2d55.676108815011226!3d25.278460483858428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5929a229f1c75%3A0xb28ae30eb6bb813a!2sSharjah%20Media%20City%20(Shams)!5e0!3m2!1sen!2sin!4v1640079002110!5m2!1sen!2sin" style="border:0; width:100%; height:400px" allowfullscreen="" loading="lazy"></iframe>

      </div>

      <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
<script>
  $(document).ready(function() {
    $('a[href$="Contact"]').addClass(" active");
  })
</script>
