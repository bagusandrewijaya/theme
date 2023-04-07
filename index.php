<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from glanz.starkethemes.com/html/01_02_home_pink_flowers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 14:52:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Glanz</title>


<!-- Favicon -->
<link rel="icon" href="./images/favicon.ico" type="image/x-icon">

<!-- Library CSS -->
<link href="./css/glanz_library.css" rel="stylesheet">

<!-- Icons CSS -->
<link href="./fonts/themify-icons.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="./css/glanz_style.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700%7COpen+Sans:300,400,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">

<!-- Other Fonts -->
<link href="fonts/marsha/stylesheet.css" rel="stylesheet">
<style>
 .continue-application {
  --color: #fff;
  --background: #404660;
  --background-hover: #3A4059;
  --background-left: #2B3044;
  --folder: #F3E9CB;
  --folder-inner: #BEB393;
  --paper: #FFFFFF;
  --paper-lines: #BBC1E1;
  --paper-behind: #E1E6F9;
  --pencil-cap: #fff;
  --pencil-top: #275EFE;
  --pencil-middle: #fff;
  --pencil-bottom: #5C86FF;
  --shadow: rgba(13, 15, 25, .2);
  border: none;
  outline: none;
  cursor: pointer;
  position: relative;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 500;
  line-height: 19px;
  -webkit-appearance: none;
  -webkit-tap-highlight-color: transparent;
  padding: 17px 29px 17px 69px;
  transition: background 0.3s;
  color: var(--color);
  background: var(--bg, var(--background));
}

.continue-application > div {
  top: 0;
  left: 0;
  bottom: 0;
  width: 53px;
  position: absolute;
  overflow: hidden;
  border-radius: 5px 0 0 5px;
  background: var(--background-left);
}

.continue-application > div .folder {
  width: 23px;
  height: 27px;
  position: absolute;
  left: 15px;
  top: 13px;
}

.continue-application > div .folder .top {
  left: 0;
  top: 0;
  z-index: 2;
  position: absolute;
  transform: translateX(var(--fx, 0));
  transition: transform 0.4s ease var(--fd, 0.3s);
}

.continue-application > div .folder .top svg {
  width: 24px;
  height: 27px;
  display: block;
  fill: var(--folder);
  transform-origin: 0 50%;
  transition: transform 0.3s ease var(--fds, 0.45s);
  transform: perspective(120px) rotateY(var(--fr, 0deg));
}

.continue-application > div .folder:before, .continue-application > div .folder:after,
.continue-application > div .folder .paper {
  content: "";
  position: absolute;
  left: var(--l, 0);
  top: var(--t, 0);
  width: var(--w, 100%);
  height: var(--h, 100%);
  border-radius: 1px;
  background: var(--b, var(--folder-inner));
}

.continue-application > div .folder:before {
  box-shadow: 0 1.5px 3px var(--shadow), 0 2.5px 5px var(--shadow), 0 3.5px 7px var(--shadow);
  transform: translateX(var(--fx, 0));
  transition: transform 0.4s ease var(--fd, 0.3s);
}

.continue-application > div .folder:after,
.continue-application > div .folder .paper {
  --l: 1px;
  --t: 1px;
  --w: 21px;
  --h: 25px;
  --b: var(--paper-behind);
}

.continue-application > div .folder:after {
  transform: translate(var(--pbx, 0), var(--pby, 0));
  transition: transform 0.4s ease var(--pbd, 0s);
}

.continue-application > div .folder .paper {
  z-index: 1;
  --b: var(--paper);
}

.continue-application > div .folder .paper:before, .continue-application > div .folder .paper:after {
  content: "";
  width: var(--wp, 14px);
  height: 2px;
  border-radius: 1px;
  transform: scaleY(0.5);
  left: 3px;
  top: var(--tp, 3px);
  position: absolute;
  background: var(--paper-lines);
  box-shadow: 0 12px 0 0 var(--paper-lines), 0 24px 0 0 var(--paper-lines);
}

.continue-application > div .folder .paper:after {
  --tp: 6px;
  --wp: 10px;
}

.continue-application > div .pencil {
  height: 2px;
  width: 3px;
  border-radius: 1px 1px 0 0;
  top: 8px;
  left: 105%;
  position: absolute;
  z-index: 3;
  transform-origin: 50% 19px;
  background: var(--pencil-cap);
  transform: translateX(var(--pex, 0)) rotate(35deg);
  transition: transform 0.4s ease var(--pbd, 0s);
}

.continue-application > div .pencil:before, .continue-application > div .pencil:after {
  content: "";
  position: absolute;
  display: block;
  background: var(--b, linear-gradient(var(--pencil-top) 55%, var(--pencil-middle) 55.1%, var(--pencil-middle) 60%, var(--pencil-bottom) 60.1%));
  width: var(--w, 5px);
  height: var(--h, 20px);
  border-radius: var(--br, 2px 2px 0 0);
  top: var(--t, 2px);
  left: var(--l, -1px);
}

.continue-application > div .pencil:before {
  -webkit-clip-path: polygon(0 5%, 5px 5%, 5px 17px, 50% 20px, 0 17px);
  clip-path: polygon(0 5%, 5px 5%, 5px 17px, 50% 20px, 0 17px);
}

.continue-application > div .pencil:after {
  --b: none;
  --w: 3px;
  --h: 6px;
  --br: 0 2px 1px 0;
  --t: 3px;
  --l: 3px;
  border-top: 1px solid var(--pencil-top);
  border-right: 1px solid var(--pencil-top);
}

.continue-application:before, .continue-application:after {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  border-radius: 1px;
  background: var(--color);
  transform-origin: 9px 1px;
  transform: translateX(var(--cx, 0)) scale(0.5) rotate(var(--r, -45deg));
  top: 26px;
  right: 16px;
  transition: transform 0.3s;
}

.continue-application:after {
  --r: 45deg;
}

.continue-application:hover {
  --cx: 2px;
  --bg: var(--background-hover);
  --fx: -40px;
  --fr: -60deg;
  --fd: .15s;
  --fds: 0s;
  --pbx: 3px;
  --pby: -3px;
  --pbd: .15s;
  --pex: -24px;
}


</style>
</head>


<!-- Body -->
<body class="gla_middle_titles" id="playedme">


<!-- Page -->
<div class="gla_page" id="gla_page">

    
    
    <!-- To Top -->
    <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>


    <!-- Music -->
    <audio id="myAudio">
  <source src="./asas.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<button onclick="togglePlay()" class="gla_music_icon">
  <i class="ti ti-music"></i>
</button>

<script>
  var audio = document.getElementById("myAudio");
  function togglePlay() {
    if (audio.paused) {
      audio.play();
    } else {
      audio.pause();
    }
  }
</script>


    
    <!-- Header -->
    <header>       

        
    
        <nav class="gla_light_nav gla_transp_nav">

            <div class="container">
                
                <div class="gla_logo_container clearfix">
                    <img src="./images/glanz_logo.png" alt="" class="gla_logo_rev">
                    <div class="gla_logo_txt">
                        <!-- Logo -->
                        <a href="http://glanz.starkethemes.com/" class="gla_logo">Laur & Aff</a>
                        
                        <!-- Text Logo -->
                        <div class="gla_logo_und">August 10, 2017</div>
                    </div>
                </div>

                <!-- Menu -->
                <div class="gla_main_menu gla_main_menu_mobile">
                    
                    <div class="gla_main_menu_icon">
                       
                        <p>AMPLOP DIGITAL<p>
                     
                    </div>
                </div>
                
                <!-- Menu Content -->
                <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="./images/wedding/lauren_affonso/14400933225_3b844816c3_k.jpg">
                    <!-- Over -->
                    <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
                </div>

                <div class="gla_main_menu_content_menu gla_wht_txt text-right">
                    <div class="container">
                        
                        <div class="gla_main_menu_content_menu_copy">
                         
                            <br>
                            <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div style="text-align: center;">
  <h3 class="gla_subtitle">Mohon Doa Restu</h3>
  <p>adad ajdjad jadjad adjadj ajdbja asjdad jadjasd asdjad ajdad ladjlajd</p>
    <input type="text" class="form-control" placeholder="Enter Your Keywords" value="54545456" readonly>
    <br>
    <button class="continue-application"  onclick="copyToClipboard(this.previousElementSibling.value)">
    <div>
        <div class="pencil"></div>
        <div class="folder">
            <div class="top">
                <svg viewBox="0 0 24 27">
                    <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                </svg>
            </div>
            <div class="paper"></div>
        </div>
    </div>
   SALIN NOREKENING
</button>
  

   
  </div>
</div>

<script>
function copyToClipboard(text) {
  var tempInput = document.createElement("input");
  tempInput.value = text;
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
  alert("NOREKENING berhasil disalin ke clipboard.");
}
</script>


                            
                        </div>
                    </div>
                    <!-- container end -->
                </div>
                <!-- menu content end -->

                <!-- Search Block -->
           
                <!-- Search Block End -->

                <!-- Top Menu -->
                
                <!-- Top Menu End -->


               
            </div>
            <!-- container end -->
        </nav>
        
    </header>
    <!-- Header End -->


    <!-- Slider -->
    <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed" data-image="./images/wedding/lauren_affonso/14400933225_3b844816c3_k.jpg" data-stellar-background-ratio="0.8">

<!-- Over -->
<div class="gla_over" data-color="#1e1d2d" data-opacity="0.2"></div>

<div class="container">
  <!-- Slider Texts -->
  <div class="gla_slide_txt gla_slide_center_middle text-center">
    <div class="gla_flower gla_flower2">
      <div class="gla_flower2_name_l">Lauren <b>Save The Date</b></div>
      <div class="gla_flower2_name_r">Affonso <b>August 10, 2017</b></div>
      <img src="./images/wedding/lauren_affonso/14214412498_73d4296c75_k_sm.jpg" alt="">
    </div>
  </div>
  <!-- Slider Texts End -->
</div>
<!-- container end -->

<!-- Slide Down -->
<a id="scrollme" class="gla_scroll_down gla_go" href="#gla_content">
  <b></b>
  OPEN HERE
</a>
</div>

<script>
// Disable scroll on page load
document.body.style.overflow = 'hidden';

// Add click event to Scroll Down button
var scrollDownBtn = document.getElementById('scrollme');
scrollDownBtn.addEventListener('click', function(event) {
  // Enable scroll
  document.body.style.overflow = 'auto';

  // Hide slider
  var slider = document.querySelector('.gla_slider');
  slider.style.display = 'none';
});
</script>
    <!-- Slider End -->

    <!-- Content -->
    <section id="gla_content" class="gla_content">


       <!-- section -->
        <section class="gla_section gla_image_bck" data-color="#fafafd">
            

            
            <div class="container text-center">
                <p><img src="./images/animations/flower5.gif" data-bottom-top="@src:./images/animations/flower5.gif; opacity:1" class="gla_animated_flower" height="150" alt=""></p>
                <h2>Mengundang</h2>
                <h3 class="gla_subtitle"><?php echo $_GET['pria'] . ' & ' . $_GET['wanita']; ?></h3>

                
                
<p>Merupakan suatu kehormatan bagi kami apabila Bapak/Ibu/Saudara/i bersedia hadir dalam acara kami. Kami percaya kehadiran Bapak/Ibu/Saudara/i akan memberikan nilai tambah pada acara kami.

Demikian surat undangan ini kami sampaikan, atas perhatiannya kami ucapkan terima kasih.</p>
             
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="./images/wedding/lauren_affonso/14214309838_1a8f80c65a_k.jpg">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="./images/animations/savethedate_wh.gif" data-bottom-top="@src:./images/animations/savethedate_wh.gif" height="150" alt=""></p>
                <h2>August 10th, 2017</h2>
                <h3 class="gla_subtitle">St. Thomas's Church, <br>Bristol, U.K.</h3>
                <div class="gla_countdown" data-year="2017" data-month="08" data-day="10"></div>
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section">
            
            
            <div class="container text-center">
                <p><img src="./images/animations/flower6.gif" data-bottom-top="@src:./images/animations/flower6.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                <h2>Wedding Details</h2>
                <h3 class="gla_subtitle">When & Where</h3>
                <p>Our ceremony and reception will be held at the Liberty House. Located on the Hudson River, it has a beautiful, unobstructed view of the World Trade One building and a convenient ferry that runs between it and Manhattan.</p>
                <div class="row text-center">
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="./images/wedding/lauren_affonso/600x600/14214580180_4dbce3ed37_k.jpg"></div>
                        <h3>The Reception</h3>
                        <p>4:00 PM – 5:30 PM<br>
                        St. Thomas's Church,<br>
                        Bristol<br>
                        U.K.<br>
                        +1 777-123-4567</p>
                        <a href="#" class="btn">View Map</a>
                    </div>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="./images/wedding/lauren_affonso/600x600/14214514238_c7a691994d_k.jpg"></div>
                        <h3>The Ceremony</h3>
                        <p>4:00 PM – 5:30 PM<br>
                        St. Thomas's Church,<br>
                        Bristol<br>
                        U.K.<br>
                        +1 777-123-4567</p>
                        <a href="#" class="btn">View Map</a>
                    </div>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="./images/wedding/lauren_affonso/600x600/14214610370_ccda70fba1_k.jpg"></div>
                        <h3>The Afterparty</h3>
                        <p>4:00 PM – 5:30 PM<br>
                        St. Thomas's Church,<br>
                        Bristol<br>
                        U.K.<br>
                        +1 777-123-4567</p>
                        <a href="#" class="btn">View Map</a>
                    </div>
                </div>

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="./images/wedding/lauren_affonso/14378154996_a9923cfa6f_k.jpg">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="./images/animations/rsvp_wh.gif" data-bottom-top="@src:./images/animations/rsvp_wh.gif" height="200" alt=""></p>
                
                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                        <form action="https://formspree.io/your@mail.com" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Your name*</label>
                                    <input type="text" name="name" class="form-control form-opacity">
                                </div>
                                <div class="col-md-6">
                                    <label>Your e-mail*</label>
                                    <input type="text" name="email" class="form-control form-opacity">
                                </div>
                  
                                <div class="col-md-6">
                                    <label>Will you attend?</label>

                                    <input type="radio" name="attend" value="Yes, I will be there">
                                    <span>Yes, I will be there</span><br>
                                    <input type="radio" name="attend" value="Sorry, I can't come">
                                    <span>Sorry, I can't come</span>
                                    
                                </div>
                                <div class="col-md-6">
                                    <label>Meal preference</label>
                                    <select name="meal" class="form-control form-opacity">
                                        <option value="I eat anything">I eat anything</option>
                                        <option value="Beef">Beef</option>
                                        <option value="Chicken">Chicken</option>
                                        <option value="Vegetarian">Vegetarian</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Notes</label>
                                    <textarea name="message" class="form-control form-opacity"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn submit" value="Send">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck">
            
            
            <div class="container text-center">
                <p><img src="./images/animations/flower7.gif" data-bottom-top="@src:./images/animations/flower7.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                <h2>The Day They Got Engaged</h2>
                <p>Andy and Jeska met in university in the Graphic Design program. They both remember each other from orientation, but it wasn’t love at first sight, that’s for sure. Andy remembers Jeska as a ‘snooty art bitch (having been in the visual arts program at the time), and she remembers Andy being an ‘arrogant computer nerd’, boasting his knowledge of Macs over the other students.</p>
                
                <!-- filters -->
                <div class="button-group filter-button-group">
                    <a data-filter="*">Show All</a>
                    <a data-filter=".engagement">Engagement</a>
                    <a data-filter=".ceremony">Ceremony</a>
                </div>
                <!-- filters end -->

                <!-- grid -->
                <div class="gla_portfolio_no_padding grid">
                    
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214345610_af0e495ff2_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214345610_af0e495ff2_k.jpg" alt="">
                            </a>
                            
    

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214347748_db9bfb6322_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214347748_db9bfb6322_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214358898_8eed03f1d6_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214358898_8eed03f1d6_k.jpg" alt="">
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214387908_8ad395d6d0_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214387908_8ad395d6d0_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214397640_d49d0e765d_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214397640_d49d0e765d_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214429749_ad31345b6d_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214429749_ad31345b6d_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214471159_96ea39117f_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214471159_96ea39117f_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214473720_7f2af51372_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214473720_7f2af51372_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214610370_ccda70fba1_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214610370_ccda70fba1_k.jpg" alt="">
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14377952686_252620ebb7_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14377952686_252620ebb7_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14397823931_a8e8cf3fa7_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14397823931_a8e8cf3fa7_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14399848562_abaad23e7a_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14399848562_abaad23e7a_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14399908894_b8858a5476_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14399908894_b8858a5476_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14401393205_af78b0dd2f_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14401393205_af78b0dd2f_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14401390305_9a369d1e4d_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14401390305_9a369d1e4d_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14401083075_5bf66d3082_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14401083075_5bf66d3082_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14399773152_759f6d4057_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14399773152_759f6d4057_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14400933225_3b844816c3_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14400933225_3b844816c3_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    




                 </div>
                 <!-- grid end -->
                

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="./images/wedding/lauren_affonso/14214387908_8ad395d6d0_k.jpg">

            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">


                <h2>Registry</h2>
                <p>We’re lucky enough to have nearly everything we need for our home already. And since neither of us has ever been outside of North America, we want our honeymoon to be extra special! If you want to help make it unforgettable, you can contribute using the link to the right. If you would like to give us something to update our home, we’ve compiled a short registry as well.</p>

                <!-- icon boxes -->
                
                <!-- icon boxes end -->
                
                
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck" data-color="#fff">
            
            
            <div class="container text-center">

                <h2>The Wedding Party</h2>
                
                <!-- filters -->
                <div class="button-group filter-button-group">
                    <a data-filter="*">Show All</a>
                    <a data-filter=".groomsmen">Groomsmen</a>
                    <a data-filter=".bridesmaids">Bridesmaids</a>
                </div>
                <!-- filters end -->

                <!-- grid -->
                <div class="gla_portfolio_no_padding grid">
                    
                    <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14421186043_a817e20aa5_k-ryan-moreno.html" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14421186043_a817e20aa5_k.jpg" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Andrew & Joanna
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14401255335_785c7e78a4_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14401255335_785c7e78a4_k.jpg" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Stewart & Ann
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214456709_b71037d1ed_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214456709_b71037d1ed_k.jpg" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Mark & Jenny
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item broombridesmaidssmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14421584103_4393f08b6c_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14421584103_4393f08b6c_k.jpg" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Izzy & Katy
                            </a>

                        </div>
                    </div>



                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214839668_c094232d97_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214839668_c094232d97_k.jpg" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Bob
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214805748_41d9615733_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214805748_41d9615733_k.jpg" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Mark
                            </a>

                        </div>
                    </div>


                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214429749_ad31345b6d_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214429749_ad31345b6d_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214473720_7f2af51372_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214473720_7f2af51372_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>


                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14401083075_5bf66d3082_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14401083075_5bf66d3082_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14401497035_5c4a8f0b0a_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14401497035_5c4a8f0b0a_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14399707332_ca2503be41_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14399707332_ca2503be41_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="./images/wedding/lauren_affonso/14214662727_11e5c719f7_k.jpg" class="lightbox">
                                <img src="./images/wedding/lauren_affonso/600x600/14214662727_11e5c719f7_k.jpg" alt="">
                            </a>
                            

                        </div>
                    </div>

                 </div>
                 <!-- grid end -->
                

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->



        

        

        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="./images/wedding/lauren_affonso/14377952686_252620ebb7_k.jpg">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="./images/animations/thnyou_wh.gif" alt="" height="200" data-bottom-top="@src:./images/animations/thnyou_wh.gif"></p>

                
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

    

            
        

    </section>
    <!-- Content End -->
    

    

</div>
<!-- Page End -->
<script>
  // Ambil elemen iframe soundcloud
  const soundcloudIframe = document.getElementById('playedme');
  
  // Tambahkan event listener untuk mendeteksi scroll
  window.addEventListener('scroll', () => {
    // Periksa apakah audio belum dimainkan
    if (soundcloudIframe.paused) {
      // Mainkan audio
      soundcloudIframe.contentWindow.postMessage('play', '*');
    }
  });
</script>






<!-- JQuery -->
<script src="./js/jquery-1.12.4.min.js"></script> 
<!-- Library JS -->
<script src="./js/glanz_library.js"></script> 

<!-- Theme JS -->
<script src="./js/glanz_script.js"></script>


</body>

<!-- Mirrored from glanz.starkethemes.com/html/01_02_home_pink_flowers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 15:01:07 GMT -->
</html>