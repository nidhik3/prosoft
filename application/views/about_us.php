<link href="<?php echo base_url(); ?>assets/css/mainpage.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script
  src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"> </script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
  section {
    z-index: 999;
  }

  .header {
    background: rgba(7, 27, 48, 0.2);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(7, 27, 48, 0.3);
    position: absolute;
  }

  .mobile-nav-toggle {
    color: #000;
  }

  .navbar a {
    color: #fff;
  }

  .sticked .navbar a {
    color: #fff;
  }

  .sticked .mobile-nav-toggle {
    color: #fff !important;
  }

  .video-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
  }

  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    overflow: hidden;
  }

  #backgroundVideo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
  }

  .text-overlay {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: start;
    color: #fff;
    z-index: 1;
  }


  .text-overlay h1 {
    margin: 0;
    font-size: 2.9em;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  .text-overlay h3 {
    margin: 0;
    font-size: 2em;
    line-height: 1.2;
    letter-spacing: 2px;
    line-height: 36px;
  }

  .def {
    background-position: 50% 50%;
    background-size: cover;
    display: flex;
    align-items: center;
    min-height: 30vh;
    position: relative;
    z-index: 2;
  }

  .def .container {
    height: 70%;
    margin: auto;
    text-align: center;
    color: #fff;
  }

  .defh2 {
    font-size: 48px;
    line-height: 1;
  }

  .topp h1 {
    font-size: 52px;
  }


  .mob {
    display: none;
  }



  @media screen and (max-width: 768px) {
    .whhh {
      text-align: center;

      color: #fff;
      margin: 0 auto 20px;
    }

    .mobile-nav-toggle {
      color: #fff;
    }

    .def .container {

      text-align: center;

    }

    .bg-black1 {

      min-height: 30vh !important;

    }

    .def {

      min-height: 30vh !important;

    }

    .text-overlay h1 {
      margin: 0;
      font-size: 2em;
    }

    .desk {
      display: none;
    }

    .mob {
      display: block !important;
    }

    .text-overlay h3 {
      margin: 0;
      font-size: 1em;
      line-height: 1;
      letter-spacing: 2px;
      line-height: 28px;
    }





  }
</style>

<div class="video-section desk">
  <div class="video-overlay" style="position: relative;">
    <img src="<?php echo base_url(); ?>assets/img/aboutt.png" alt="" style="width: 100%;">
    <div class="text-overlay">
      <h1 style="font-weight:600;">About Us</h1>

    </div>
  </div>


</div>
<div class="mob">
  <div class="video-overlay" style="position: relative;">
    <img src="<?php echo base_url(); ?>assets/img/aboutt.png" alt="" style="width: 100%;">
    <div class="text-overlay1" style="WIDTH: 100%;">
      <h1>About Us</h1>

    </div>
  </div>

</div>
<section class="topp">
  <div class="container">
    <h1 class=" text-center" style="font-weight: 700;">ProSoft</h1>
    <h1 class=" text-center" style="font-weight: 700;color:#8F8F8F;">Revolutionizing <br>
      Healthcare Management.</h1>

    <p class="text-center mt-md-5 mt-3 wdd" style="max-width: 90%;margin:auto;">PROSOFT is a state certified provider of
      Healthcare services. Founded in 2007 In INDIA with the idea of easing the stress on Healthcare services and with
      the goal of providing easy and best solutions forever. Our goal is to create a collaborative plan that will allow
      the Health sector to maintain security if possible while maintaining their level of independence and functioning.
    </p>

    <div class="row mt-md-5 mt-3 " style="    justify-content: center;">

      <div class="col-md-6">
        <img src="assets/img/pros.png" alt="">
      </div>

    </div>

  </div>
</section>
<section class="top1" style="background-color: #223A51;">
  <div class="" style="max-width: 90%;margin:auto;">
    <div class="row">
      <div class="col-md-12">
        <h1 style="color: #fff;font-weight:800;">65</h1>
        <h4 style="color: #fff;font-weight:500;">Happy Clients</h4>
      </div>
      <div class="col-md-12 mt-5">
        <h1 style="color: #fff;font-weight:800;">85</h1>
        <h4 style="color: #fff;font-weight:500;">Projects</h4>
      </div>
      <div class="col-md-12 mt-5">
        <h1 style="color: #fff;font-weight:800;">18</h1>
        <h4 style="color: #fff;font-weight:500;">Years of <br>
          experience</h4>
      </div>
      <div class="col-md-12 mt-5">
        <h1 style="color: #fff;font-weight:800;">15</h1>
        <h4 style="color: #fff;font-weight:500;">team Members</h4>
      </div>
    </div>

  </div>
</section>
<section class="topp">
  <div class="container">
    <h1 class=" text-center" style="font-weight: 700;">Prosoft’s Edge</h1>
    <p class="text-center mt-md-5 mt-3 wdd" style="max-width: 90%;margin:auto;">PROSOFT having head office in “INDIA”
      having installations in other countries like Kuwait, Qutar, Maldives, and Singapore, UAE.</p>

    <div class="row mt-md-5 mt-3 asds" style="width: 100%;    justify-content: space-around;">

      <div class="col-md-5 mt-3">
        <img src="assets/img/as1.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/as2.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/as3.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/as4.png" alt="" width="100%">
      </div>

    </div>

  </div>
</section>
<section style="background-color: #FAFAFA;">
  <div class="container mt-5 pb-5">
    <h1 class=" text-center" style="font-weight: 700;">Our Valuable<br>
      Clients</h1>
    <div class="row mt-md-5 mt-3 asds">
      <div class="col-md-12">
        <img src="assets/img/ourv.png" alt="" width="100%">
      </div>
    </div>

  </div>
</section>
<section>
  <div class="conn" style="padding-left:10%;">
    <img src="assets/img/vall.png" alt="" width="100%">
  </div>
</section>

<script>
  var splide = new Splide('.sp', {
    perPage: 1,
    rewind: true,
  });
  splide.mount();

  var splide = new Splide('.sp1', {
    perPage: 7,
    type: 'loop',
    drag: 'free',
    focus: 'center',
    rewind: true,
    autoplay: true,
    pagination: false, // Hide pagination
    breakpoints: {
      768: { // Screen width up to 768px (example for tablets and mobiles)
        perPage: 3,
      },
    },
  });

  splide.mount(window.splide.Extensions);
</script>