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
    width: calc(300px * 6);
    /* Adjust width based on number of images */
  }

  .slider-container img {
    width: 300px;
    /* Adjust the width based on your design */
    margin-right: 10px;
  }

  .prev-arrow,
  .next-arrow {
    cursor: pointer;
    background-color: transparent;
    border: none;
    padding: 10px;
    font-size: 20px;
    z-index: 1;
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
  .cont1 {
    display: grid;
    grid-template-columns: 1fr 0.8fr 1fr;
    /* Make the middle column smaller */
    grid-template-rows: repeat(2, auto);
    /* Two rows */
    grid-template-areas:
      "item1 item2 item3"
      /* First row: left - logo (small) - right */
      "item4 item5 item6";
    /* Second row: left - team photo (span) - right */
    gap: 20px;
    padding: 20px;
  }

  .grid-item {
    background-color: #1a406d;
    color: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  /* Area Definitions for Grid Items */
  .item1 {
    grid-area: item1;
  }

  /* Left column first row */
  .item2 {
    grid-area: item2;
  }

  /* Small logo in the middle */
  .item3 {
    grid-area: item3;
  }

  /* Right column first row */
  .item4 {
    grid-area: item4;
  }

  /* Left column second row */
  .item5 {
    grid-area: item5;
    /* Centered team photo */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .item6 {
    grid-area: item6;
  }

  /* Right column second row */

  /* Team photo styling */
  .team-photo img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 10px;
    height: 155%;
    /* Full height to stretch across */
    transform: translateY(-18%);
    /* Move up half, so it's half in row 1 and half in row 2 */
  }

  .grid-item p,
  .grid-item h4 {
    margin: 0;
    color: #cfcfcf;
  }

  .item1,
  .item3 {
    height: 400px;
  }

  .item2 {
    height: 250px;
  }

  .item4,
  .item6 {
    height: 270px;
  }

  .item5 {
    background-color: transparent;
    padding: 0;
  }

  .item1,
  .item3,
  .item4,
  .item6 {
    position: relative;
  }

  .grid-bg1 {
    position: absolute;
    bottom: 0;
    left: 16%;
  }

  .grid-bg2 {
    position: absolute;
    bottom: 0;
    left: 21%;
  }

  .grid-bg3 {
    position: absolute;
    bottom: 0px;
    right: 0%;
  }

  .grid-bg4 {
    position: absolute;
    bottom: 0;
    right: 0%;
  }

  .g-card {
    font-size: 22px;
    font-weight: 500;
    text-align: left;
    position: absolute;
    top: 5%;
    left: 3%;
  }

  /* ncss */
  /* Overlay styling */

  .item1 .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    /* Semi-transparent overlay */
    transition: opacity 0.5s ease;
    z-index: 1;
    /* Overlay underneath text but above background image */
    opacity: 1;
    /* Initially visible */
    border-radius: 18px;
  }
 .item .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    /* Semi-transparent overlay */
    transition: opacity 0.5s ease;
    z-index: 1;
    /* Overlay underneath text but above background image */
    opacity: 1;
    /* Initially visible */
    border-radius: 18px;
  }

 
  .item3 .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    /* Semi-transparent overlay */
    transition: opacity 0.5s ease;
    z-index: 1;
    /* Overlay underneath text but above background image */
    opacity: 1;
    /* Initially visible */
    border-radius: 18px;
  }
 .item4 .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    /* Semi-transparent overlay */
    transition: opacity 0.5s ease;
    z-index: 1;
    /* Overlay underneath text but above background image */
    opacity: 1;
    /* Initially visible */
    border-radius: 18px;
  }

 
  .item6 .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    /* Semi-transparent overlay */
    transition: opacity 0.5s ease;
    z-index: 1;
    /* Overlay underneath text but above background image */
    opacity: 1;
    /* Initially visible */
    border-radius: 18px;
  }

  /* Remove the overlay on hover */
  .cont1:hover .overlay {
    opacity: 0;
    /* Disappears on hover */
  }

  /* Ensure text and image appear above the overlay */
  
  .grid-item.item1 .g-card,
  .grid-item.item1 {
    z-index: 2;
  
  }

 
  .grid-item.item2 .g-card,
  .grid-item.item2 {
    z-index: 2;
  
  }

 
  .grid-item.item3 .g-card,
  .grid-item.item3 {
    z-index: 2;
  
  }

 
  .grid-item.item4 .g-card,
  .grid-item.item4 {
    z-index: 2;
  
  }

 
  .grid-item.item5 .g-card,
  .grid-item.item5 {
    z-index: 2;
  
  }


/* Overlay styling for item2 */
.grid-item.item2 {
    position: relative; /* Ensure the overlay is positioned relative to this item */
}

.grid-item.item2 .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    transition: opacity 0.5s ease;
    z-index: 1; /* Overlay underneath text but above background image */
    opacity: 1; /* Initially visible */
    border-radius: 18px; /* Optional: rounded corners for the overlay */
}

/* Remove the overlay on hover for item2 */
.cont1:hover .overlay {
    opacity: 0;
    /* Disappears on hover */
  }

/* Ensure content appears above the overlay */
.grid-item.item2 img {
    z-index: 2; /* Higher z-index for content */
    position: relative; /* Maintain stacking context */
}

.cont1:hover .scale-img {
    transform: scale(1.1); /* Scale up the image to 110% */
    transition: transform 0.5s ease; /* Smooth scaling transition */
}

.cont1:hover .scale-img1 {
    transform: scale(1.1s); /* Scale up the image to 110% */
    transition: transform 0.5s ease; /* Smooth scaling transition */
}

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



<!-- ====================grid-container==================== -->


<section>
  <div class="container">
    <h1 class=" text-center" style="font-weight: 700;">An all in one<br> software solution.</h1>

    <p class="text-center">Prosoft’s Hospital Information System delivers complete, reliable solutions for medical
      service management.<br> Manage all major functions effortlessly on one intuitive platform. Get Prosoft today!</p>

  </div>
  <div class="container cont1 grid-container">
    <div class="grid-item item1">
      <div class="overlay"></div>
      <p class="g-card"><span style="color:white;">Universal Product.</span> Global solutions for all healthcare needs,
        regardless of department or demographics.</p>
      <img src="assets/image/grid1.png" alt="" class="grid-bg1">
    </div>
    <div class="grid-item item2 glogo">
      <div class="overlay"></div> <!-- Overlay for item2 -->
      <img src="assets/image/grid2.png" alt="ProSoft Logo" class="scale-img">
    </div>

    <div class="grid-item item3">
      <div class="overlay"></div> <!-- Overlay for item3 -->
      <p class="g-card"><span style="color:white;">Update Request.</span>Fully tailorable and upgradable to meet
        evolving facility requirements.</p>
      <img src="assets/image/grid3.png" alt="" class="grid-bg2">
    </div>

    <div class="grid-item item4">
      <div class="overlay"></div> <!-- Overlay for item4 -->
      <p class="g-card"><span style="color:white;">Add-on Features.</span>Unique add-ons for regional demands.</p>
      <img src="assets/image/grid4.png" alt="" class="grid-bg3">
    </div>

    <div class="grid-item item5 team-photo">
      <img src="assets/image/grid5.png" alt="Team Photo" class="scale-img1">
    </div>

    <div class="grid-item item6">
      <div class="overlay"></div> <!-- Overlay for item6 -->
      <p class="g-card"><span style="color:white;">Set Regulations.</span>Configurable to operate according to your
        business’s unique rules.</p>
      <img src="assets/image/grid6.png" alt="" class="grid-bg4">
    </div>

  </div>
</section>
<!-- ====================grid-container==================== -->
<section>
  <div class="container">
    <h1 class=" text-center" style="font-weight: 700;text-transform: capitalize;;">services we offer.</h1>


    <div class="row mt-md-5 mt-3 asds" style="width: 100%;    justify-content: center;">

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

<section>
  <div class="row" style="background: #02182E;color:white;">
    <div class="col-md-7 d-flex justify-content-center align-items-center">
      <div class="col-md-9">
        <h1 class=" text-start" style="font-weight: 700;">About Us </h1>
        <p>"PROSOFT" is a state certified provider of Healthcare services. PROSOFT are founded in 2007 In INDIA with the
          idea of easing the stress on Healthcare services and with the goal of providing easy and best solutions
          forever. Our goal is to create a collaborative plan that will allow the Health sector to maintain security if
          possible while maintaining their level of independence and functioning.
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
        <img src="assets/img/trust1.png" alt="Image 1">
        <img src="assets/img/trust2.png" alt="Image 2">
        <img src="assets/img/trust3.png" alt="Image 3">
        <img src="assets/img/trust1.png" alt="Image 4">
        <img src="assets/img/trust2.png" alt="Image 5">
        <img src="assets/img/trust3.png" alt="Image 6">
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