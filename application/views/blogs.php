<style>
  .col-lg-4.col-md-6 .member-info {
    text-align: left;
  }
</style>
<section class="header-row">
  <div class="row d-flex">
    <div class="section-title aos-init aos-animate" data-aos="fade-up">
      <h2>LATEST NEWS</h2>
      <p>
        <a href="<?php echo base_url(); ?>">Home</a> / News
      </p>
    </div>
  </div>
</section>
<!-- ======= Portfolio Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="row">

      <div class="col-lg-4 col-md-6 d-flex ">
        <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="assets/image/b1.jpg" class="img-fluid" alt="">

          </div>
          <div class="member-info">
            <h4>WHAT IS HOSPITAL MANAGEMENT SYSTEM</h4>
            <span>Modern hospital management system is an enterprise level software...</span>
            <br />
            <a href="<?php echo base_url('Blogs1'); ?>">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex ">
        <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="assets/image/b2.jpg" class="img-fluid" alt="">

          </div>
          <div class="member-info">
            <h4>ARAB HEALTH 2020 INVITATION</h4>
            <span> Micro participates Arab Health 2020. Come and visit...</span>
            <br />
            <a href="<?php echo base_url('Blogs2'); ?>">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex ">
        <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="assets/image/b3.jpg" class="img-fluid" alt="">

          </div>
          <div class="member-info">
            <h4>Launching Mobile App and patient portal</h4>
            <span>Prosoft launches it’s mobile app and patient portal...</span>
            <br />
            <a href="#">Read More</a>
          </div>
        </div>
      </div>


    </div>

  </div>
</section><!-- End Portfolio Section -->

<section id="clients" style="background:#fff" class="clients">
  <br /><br />
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-12 text-center">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">

          <h2>Easy Integrations</h2>

          </p>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <img src="<?php echo base_url('assets/integrations/i1.png'); ?>" class="img-fluid" alt="">
      </div>
      <div class="col-4">
        <img src="<?php echo base_url('assets/integrations/i2.png'); ?>" class="img-fluid" alt="">
      </div>
      <div class="col-4">
        <img src="<?php echo base_url('assets/integrations/i3.png'); ?>" class="img-fluid" alt="">
      </div>
    </div>

  </div>
  <br /><br />
</section>

<script>
  $(document).ready(function() {
    $('a[href$="Blogs"]').addClass(" active");
  })
</script>