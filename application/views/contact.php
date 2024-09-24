<!-- ======= Contact Section ======= -->

<style>
  .contact .info i {
    float: none;
  }

  .contact .info p {
    padding: 0px;
  }




  .wb {
    background-color: #fff;
    color: black;
    font-size: 20px;
    padding: 8px 18px 8px 18px;
    border: 1px solid black;
    font-weight: 500;


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
<section class="space-y">

<div class="row fonts d-flex " style="padding-bottom: 60px;">
  <div class="col-md-5 con1 space-y">
    <div class="col-md-2"></div>
    <div class="col-md-8"> <a class="bw">CONTACT</a>
      <h6 class="heading pt-3"> SEE SOLUTIONS</h6>
      <div class="row pt-4">
        <div class="col ">
          <a class="cl" href="">790/8 Dev Ashish Enclave, Kailash Vihar, City Centre 2, Gwalior – 474011</a>
        </div>
      </div>
      <div class="row pt-4">
        <div class="col">
          <i style="margin-right: 6px;font-size: 17px;" class="fa-regular fa-envelope"></i>
          <a class="cl" href="mailto:seesandt.marketing@gmail.com">seesandt.marketing@gmail.com</a>
        </div>
      </div>
      <div class="row pt-4">
        <div class="col">
          <i style="margin-right: 6px; font-size: 17px;" class="icofont-phone"></i>
          <a class="cl" href="tel:9425755530">+91-94257-55530</a>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>


  </div>
  <div class="col-md-1"></div>
  <div class="col-md-5">
    <form action="" id="contactform" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" >
    </div>
    <div class="form-group pt-3">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" >
    </div>
    <div class="form-group pt-3">
        <label for="message">Message</label>
        <textarea class="form-controls" id="message" rows="3"></textarea>
    </div>
    <div class="col-md-8 d-flex justify-content-center">
    <div class="form-group text-center pt-3">
      <button type="submit" class=" wb">Send Message</button>
    </div>
   </div>
  
     
  </form>
  </div>
  <div class="col-md-1"></div>


</div>
</section>
<script>
  $(document).ready(function() {
    $('a[href$="Contact"]').addClass(" active");
  })
</script>
