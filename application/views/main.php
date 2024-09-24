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
    top: 44%;
    left: 10%;
    transform: translate(-10%, -50%);
    text-align: start;
    color: #fff;
    z-index: 1;
  }

  .text-overlay1 {
    position: absolute;
    top: 44%;
    left: 10%;
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

  .whhh {
    background-color: #0D4771;
    border-radius: 0 30px 30px 30px;
    padding: 10px 20px;
    width: fit-content;
    text-align: center;
    color: #fff;
  }

  .def.un {
    height: 2px;
    width: 200px;
    background: #fff;
    margin: 0 auto;
  }

  .def h3 {
    font-size: 22px;
    line-height: 1.2;
    margin-top: 20px;
  }


  .def p {
    color: #fff;
  }

  .mob {
    display: none;
  }

  .cstm_key_people .member_txt h5 {
    font-size: 16px;
    margin-bottom: 10px;
  }

  .cstm_key_people .member_txt span {
    font-size: 14px;
    margin-bottom: 5px;
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

    .cou .col-8 {
      margin: 20px;
    }

    .cou {
      justify-content: center;
      padding: 0;
    }

    .co1 {
      margin: 2%;
    }

    .tc1 {
      text-align: center;
    }

    .mtm {
      margin-top: 50px;
    }

    .service .card {
      margin-top: 20px;
    }

    .cstm-key-popup .member_profile {
      display: block !important;

    }

    .cstm-key-popup .member_profile .member_profile_left {

      width: 100% !important;
    }

    .cstm-key-popup .member_profile .member_profile_right {

      width: 100% !important;
    }

    .cstm_key_people .member_txt {
      min-height: 75px !important;
    }

    .cstm_key_people .member_txt {
      text-align: start;
      width: 100%;
      padding: 10px !important;
      transition: .4s ease-in-out;
    }

    .cstm_key_people .member_txt h5 {
      font-size: 14px;
      margin-bottom: 5px;
    }

    .cstm_key_people .member_txt span {
      font-size: 13px;
    }

  }

  .dd .card {

    border: none;
    outline: none;
    color: #fff;
    background: #00243a;

    position: relative;
    z-index: 0;
    border-radius: 10px;
  }

  .dd .card:before {
    content: '';
    background: linear-gradient(45deg, #ff7300, #ff0000);
    position: absolute;
    top: -4px;
    left: -4px;
    background-size: 400%;
    z-index: -1;
    filter: blur(1px);
    width: calc(100% + 8px);
    height: calc(100% + 8px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
  }

  .dd .card:active {
    color: #000
  }



  .dd .card:hover:before {
    opacity: 1;
  }

  .dd .card:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #00243a;
    left: 0;
    top: 0;
    border-radius: 10px;
  }


  .bg-black1 {
    width: 100%;
    height: 100%;
    opacity: 0.7;
    min-height: 60vh;
    justify-content: center;
    display: flex;

  }

  .dds {
    display: none;
    max-width: 250px;
  }

  .ds {
    display: block;
    max-width: 250px;
  }

  /* Custom styles if needed */
  .modal-content {
    border-radius: 10px;
  }

  .close {
    position: absolute;
    right: 15px;
    top: 15px;
    font-size: 1.5rem;
  }

  .pic {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .mmd1 {
    top: 55% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;

  }

  .foot {
    margin-top: 20px;
    font-size: 20px;
    letter-spacing: 1px;
  }

/* ncss */
.image-slider {
    display: flex;
    align-items: center;
    justify-content: space-between;
    overflow: hidden;
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    position: relative;
}

.slider-container {
    display: flex;
    transition: transform 0.5s ease;
    width: calc(300px * 6); /* Adjust width based on number of images */
}

.slider-container img {
    width: 300px; /* Adjust the width based on your design */
    margin-right: 10px;
}

.prev-arrow, .next-arrow {
    cursor: pointer;
    background-color: transparent;
    border: none;
    padding: 10px;
    font-size: 20px;
    z-index:1;
}


/* effortles */
.e-colored {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  transition: opacity 0.5s ease;
}

.e-bw {
  transition: opacity 0.5s ease;
}

.effortless {
  position: relative;
}

.effortless:hover .e-colored {
  opacity: 1;
}

.effortless:hover .e-bw {
  opacity: 0;
}

/* effortles */


.grid-container {
            background-color: #0b2d50;
            padding: 20px;
        }
        .grid-item {
            background-color: #123456;
            color: white;
            padding: 30px;
            margin: 15px;
            border-radius: 15px;
            text-align: center;
        }
        .grid-item img {
            max-width: 100%;
            border-radius: 15px;
        }


/* ncss */



</style>




<div class="video-overlay" style="position: relative;">
  <img src="<?php echo base_url(); ?>assets/img/main.png" alt="" style="width: 100%;">
  <div class="text-overlay">
    <h1 style="font-weight:600;">Hospital Information<br>Management System</h1>
    <p class="foot">Feature rich, secure and effective HIMS by Prosoft.</p>
    <a href="#" class="ban " style="padding:10px 30px;color:#fff;">Get Started →</a>
  </div>
</div>


<!-- 
<div class="mob">
  <div class="video-overlay" style="position: relative;">
    <img src="<?php echo base_url(); ?>assets/img/main.png" alt="" style="width: 100%;">
    <div class="text-overlay1" style="WIDTH: 100%;">
      <h1>Hospital Information<br>Management System</h1>
      <p class="foot">Feature rich, secure and effective HIMS by Prosoft.</p>
      <a href="#" class="ban">Get Started</a>
    </div>
  </div>

</div> -->



<!-- 
===========
=========
grid-container============ -->

<!-- 
<div class="container grid-container">
  <div class="row">
      <div class="col-md-4 grid-item">
        <p> <strong>Universal Product.</strong>
          Global solutions for all healthcare needs, regardless of department or demographics.</p>
      </div>
      <div class="col-md-3 grid-item">
          
          <img src="logo.png" alt="ProSoft Logo">
      </div>
      <div class="col-md-4 grid-item">
          <h4><strong>Update Request.</strong></h4>
          <p>Fully tailorable and upgradable to meet evolving facility requirements.</p>
      </div>
  </div>

  <div class="row">
      <div class="col-md-4 grid-item">
          <h4><strong>Add-on Features.</strong></h4>
          <p>Unique add-ons for regional demands.</p>
      </div>
      <div class="col-md-3 grid-item">
          <img src="team-photo.jpg" alt="Team Photo">
      </div>
      <div class="col-md-4 grid-item">
          <h4><strong>Set Regulations.</strong></h4>
          <p>Configurable to operate according to your business’s unique rules.</p>
      </div>
  </div>
</div> -->


<section>
  <div class="container">
    <h1 class=" text-center" style="font-weight: 700;">An all in one<br> software solution.</h1>

    <p class="text-center">Prosoft’s Hospital Information System delivers complete, reliable solutions for medical
      service management.<br> Manage all major functions effortlessly on one intuitive platform. Get Prosoft today!</p>

    <div class=" mt-md-5 mt-3 " style="width: 100%;">

      <img src="<?php echo base_url(); ?>assets/img/all.png" alt="">

    </div>

  </div>
</section>
<section>
  <div class="container">
    <h1 class=" text-center" style="font-weight: 700;text-transform: capitalize;;">services we offer.</h1>


    <div class="row mt-md-5 mt-3 asds" style="width: 100%;    justify-content: space-around;">

      <div class="col-md-5 mt-3">
        <img src="assets/img/s1.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s2.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s3.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s4.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s5.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s6.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s7.png" alt="" width="100%">
      </div>


    </div>

  </div>
</section>


<section style="background-color: #F3F6FF;">
  <div class="container mt-5 pb-5">
    <h1 class=" text-center" style="font-weight: 700;">Effortless Integrations for <br>
      Seamless Operations.
     </h1>
    <div class="row mt-md-5 mt-3 effortless">
      <div class="col-md-12 e-bw">
        <img src="assets/image/eff.png" alt="" width="100%">
      </div>  
       <div class="col-md-12 e-colored">
        <img src="assets/image/eff-clr.png" alt="" width="100%">
      </div>
    </div>

  </div>
</section>

<section >
  <div class="row" style="background: #02182E;color:white;">
    <div class="col-md-7 d-flex justify-content-center align-items-center" >
      <div class="col-md-9">
         <h1 class=" text-start" style="font-weight: 700;">About Us </h1>
      <p>"PROSOFT" is a state certified provider of Healthcare services. PROSOFT are founded in 2007 In INDIA with the idea of easing the stress on Healthcare services and with the goal of providing easy and best solutions forever. Our goal is to create a collaborative plan that will allow the Health sector to maintain security if possible while maintaining their level of independence and functioning.
      </p>
      <ul class="pb-3" style="list-style: disc;">
        <li>High return on investment with low total cost of ownership</li>
        <li> Solutions to strengthen core functions for greater impact</li>
        <li> On-time, on-budget project delivery</li>
      </ul>

      <a href="#" class="ban mt-4" style="background-color: #f6aa00;color:#000;">Learn More</a>
      </div>
     

    </div>
    <div class="col-md-5 p-0">
     <img src="assets/img/abb.png" alt="" width="100%">

    </div>
  </div>

</section>




<section>
  <div class="container">
    <h1 class=" text-center" style="font-weight: 700;">Trusted by Leading Healthcare<br> Providers Worldwide.</h1>
  </div>
    <div class="row mt-md-5 mt-3 ">
      <div class="image-slider">
        <!-- <button class="prev-arrow px-5">❮</button> -->
        <div class="slider-container">
            <img src="assets/img/trust1.png" alt="Image 1" >
            <img src="assets/img/trust2.png" alt="Image 2" >
            <img src="assets/img/trust3.png" alt="Image 3" >
            <img src="assets/img/trust1.png" alt="Image 4" >
            <img src="assets/img/trust2.png" alt="Image 5" >
            <img src="assets/img/trust3.png" alt="Image 6" >
        </div>
        <!-- <button class="next-arrow px-5">❯</button> -->
    </div>
    
  
  </div>
</section>

<!-- 
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


</script> -->

<script>
const sliderContainer = document.querySelector('.slider-container');
const prevButton = document.querySelector('.prev-arrow');
const nextButton = document.querySelector('.next-arrow');

let currentIndex = 0;
const imageWidth = 310;  // Adjust to match image width + margin-right
const totalImages = document.querySelectorAll('.slider-container img').length / 2;  // Since images are duplicated

// Function to move the slider to the next image
function moveNext() {
    currentIndex++;
    sliderContainer.style.transition = 'transform 0.5s ease';
    sliderContainer.style.transform = `translateX(-${currentIndex * imageWidth}px)`;

    // Reset to the first image after the last one
    if (currentIndex === totalImages) {
        setTimeout(() => {
            sliderContainer.style.transition = 'none'; // Disable animation for the reset
            currentIndex = 0;
            sliderContainer.style.transform = `translateX(0)`;
        }, 500); // Matches the transition duration
    }
}

// Function to move the slider to the previous image
function movePrev() {
    currentIndex--;
    if (currentIndex < 0) {
        sliderContainer.style.transition = 'none'; // Disable animation to reset instantly
        currentIndex = totalImages - 1; // Jump to the last image before animation starts
        sliderContainer.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    }
    setTimeout(() => {
        sliderContainer.style.transition = 'transform 0.5s ease';
        currentIndex--;
        sliderContainer.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    }, 20); // Short timeout to let the jump happen instantly
}

// Automatic loop every 3 seconds (if desired)
let sliderInterval = setInterval(moveNext, 3000);

// Event listeners for buttons
nextButton.addEventListener('click', () => {
    clearInterval(sliderInterval); // Stop auto slider when user interacts
    moveNext();
    sliderInterval = setInterval(moveNext, 3000); // Restart auto slider after interaction
});

prevButton.addEventListener('click', () => {
    clearInterval(sliderInterval); // Stop auto slider when user interacts
    movePrev();
    sliderInterval = setInterval(moveNext, 3000); // Restart auto slider after interaction
});

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>