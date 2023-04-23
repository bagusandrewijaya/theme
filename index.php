<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from glanz.starkethemes.com/html/01_02_home_pink_flowers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 14:52:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Caca & Fikri</title>


<!-- Favicon -->
<link rel="icon" href="./images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    /*/////////////////////////////////*/
/*/////////  chat styles  /////////*/
/*/////////////////////////////////*/

.chat .agent {
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 0px solid #eee;
  }
.chat li
{
    margin-bottom: 40px;
    padding-bottom: 5px;
    /* border-bottom: 1px dotted #B3A9A9; */
    margin-top: 10px;
    width: 80%;
}


.chat li .chat-body p
{
    margin: 0;
    /* color: #777777; */
}


.chat-care
{
    overflow-y: scroll;
    height: 350px;
}
.chat-care .chat-img
{
    width: 50px;
    height: 50px;
}
.chat-care .img-circle
{
    border-radius: 50%;
}
.chat-care .chat-img
{
    display: inline-block;
}
.chat-care .chat-body
{
    display: inline-block;
    max-width: 80%;
    background-color: #FFC195;
    border-radius: 12.5px;
    padding: 15px;
}
.chat-care .chat-body strong
{
  color: #0169DA;
}

.chat-care .admin
{
    text-align: right ;
    float: right;
}
.chat-care .admin p
{
    text-align: left ;
}
.chat-care .agent
{
    text-align: left ;
    float: left;
}
.chat-care .left
{
    float: left;
}
.chat-care .right
{
    float: right;
}

.clearfix {
  clear: both;
}




::-webkit-scrollbar-track
{
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}
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



    
  
    <!-- Header End -->


    <!-- Slider -->
    <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-stellar-background-ratio="0.8">

<!-- Over -->
<div class="gla_over"></div>

<div class="container">
  <!-- Slider Texts -->
  <div class="gla_slide_txt center_middle text-center">
  <p style="font-family: 'Courgette', cursive; font-size: 25px; color: #19376D;">The wedding of</p>
<p style="font-family: 'Courgette', cursive; font-size: 30px; color: #19376D;">Caca & Fikri</p>
    <div class="gla_flower gla_flower2">

      <img src="./images/wedding/lauren_affonso/14214412498_73d4296c75_k_sm.jpg" alt="">
    </div>

  </div>
  <!-- Slider Texts End -->
</div>
<!-- container end -->

<!-- Slide Down -->
<a onclick="togglePlay()"  id="scrollme" class="gla_scroll_down gla_go" href="#gla_content">
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
                <h2>Inviting</h2>
                <h3 class="gla_subtitle" style=" font-size: 25px;"><?php echo $_GET['pria'] .'<br>'. ' & '.'<br>' . $_GET['wanita']; ?></h3>

                <br>
<br>
<br>
<br>           
                
<p  style="font-family: 'Pacifico', cursive; font-size: 25px;">It is honor for us if you are willing to attend our event. Come join us at our wedding ceremony.</p>
<br>
<br>
<br>
<br>  
<br>
<br>
<br>
<br>       
<br>
<br>
<br>
<br>  
<br>
<br>
<br>
<br>  
<br>
<hr>
<br>
<br>

<p><img src="./images/animations/flower5.gif" data-bottom-top="@src:./images/animations/flower5.gif; opacity:1" class="gla_animated_flower" height="150" alt=""></p>
              
            <h2>The Wedding of</h2>
    
            <p style="font-family: 'Satisfy', cursive; font-size: 30px; text-transform: capitalize;">Amalia Salsabila, S.Pd</p>
       <br>
            <p style="font-family: 'Satisfy',cursive; sans-serif;  font-size: 20px;">The first daughter of<br> Mr. Muhammad Indarwin<br> and<br> Mrs. Sri Sulastri</p>
      <br>
             <div>
             <p><img src="./images/and.png" data-bottom-top="@src:./images/and.png; opacity:1" class="gla_animated_flower" height="50" alt=""></p>
          
</div>
       <br>
       <p style="font-family: 'Satisfy', cursive; font-size: 30px;">Fikri Handika, S.Ikom</p>
            <br>
            <p style="font-family: 'Satisfy' ,cursive; sans-serif;  font-size: 20px;">The first son of <br>Mr. Heri Setiawan <br>and<br> Mrs. Wati Bidiawati</p>

             <br>
            </div>


            <!-- container end -->

        </section>
        <!-- section end -->

        <hr>
        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt"  >
            
            <!-- Over -->
            <div class="gla_over"  data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="./images/savedate.png" data-bottom-top="@src:./images/savedate.png" height="150" alt=""></p>
                <h2>July 2nd , 2023</h2>
                <h3 class="gla_subtitle">Hall Building Balitro Menteng,<br> Kec. Bogor Barat, Kota Bogor, Jawa Barat</h3>
                 
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

<hr>
        <!-- section -->
        <section class="gla_section">
            
            
            <div class="container text-center">
                <p><img src="./images/animations/flower6.gif" data-bottom-top="@src:./images/animations/flower6.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                
                <br>
                <br>
                <br>
                <h2  class="gla_subtitle">Wedding Details</h2>

                <div class="row text-center">
                    <div class="col-md-4 gla_round_block">
                          <h3 style="font-size: 24px;">The Ceremony</h3>
                        <p  style="font-size: 16px;">08.00 AM - 10.00 AM<br>
                        Hall Building Balitro</p>
                        <a  style="font-size: 16px;"  href="#" class="btn">View Map</a>
                    </div>
</div>
                    <div class="row text-center">
                    <div class="col-md-4 gla_round_block">
                          <h3 style="font-size: 24px;">The Reception</h3>
                        <p  style="font-size: 16px;">11.00 AM - 14.00 PM<br>
                        Hall Building Balitro</p>
                        <a   style="font-size: 16px;" href="#" class="btn">View Map</a>
                    </div>
                    
                </div>

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->
        <hr>

        <!-- section -->
        
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck">
            
            
            <div class="container text-center">
                <p><img src="./images/animations/flower7.gif" data-bottom-top="@src:./images/animations/flower7.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                <h2>The Day They Got Engaged</h2>
                <p>We met in senior high school. We both joined in the same club about broadcasting. May 21st is the day when Fikri and his family came to the house to discuss wedding plans. Then  On June 4th we had a private engagement ceremony.</p>
                
           <br>
           <br>
           <br> 

                <!-- grid -->
                <div class="gla_portfolio_no_padding grid">
                    
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/14399773152_759f6d4057_k.jpg" class="lightbox">
                                <img src="./images/14399773152_759f6d4057_k.jpg" alt="">
                            </a>
                            
    

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="./images/14399773152_759f6d4057_x.png" class="lightbox">
                                <img src="./images/14399773152_759f6d4057_x.png" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="./images/14399773152_759f6d4057_q.jpg" class="lightbox">
                                <img src="./images/14399773152_759f6d4057_q.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    




                 </div>
                 <!-- grid end -->
                

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


   
        <!-- <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="./images/wedding/lauren_affonso/14214387908_8ad395d6d0_k.jpg">

       
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">


                <h2>Registry</h2>
                <p>We’re lucky enough to have nearly everything we need for our home already. And since neither of us has ever been outside of North America, we want our honeymoon to be extra special! If you want to help make it unforgettable, you can contribute using the link to the right. If you would like to give us something to update our home, we’ve compiled a short registry as well.</p>

        
                
                
            </div>
          

        </section> -->



        <!-- section -->
        
        <!-- section end -->


        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" >
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <!-- <p><img src="./images/animations/rsvp_wh.gif" data-bottom-top="@src:./images/animations/rsvp_wh.gif" height="200" alt=""></p>
                 -->
                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                    <?php
// Jika tombol submit pada form ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $servername = "bnzzgfnrflejvhj1gyld-mysql.services.clever-cloud.com";
    $username = "ui1wxqldy1bvaipq";
    $password = "kmEXb1rM1CYaONWMh8ZR";
    $dbname = "bnzzgfnrflejvhj1gyld";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Ambil data dari form
    $nama = $_POST["name"];
    $komentar = $_POST["message"];

    // Insert data ke database
    $sql = "INSERT INTO tbl_komentar (nama, komentar) VALUES ('$nama', '$komentar')";

    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Comment saved successfully!");</script>';
      // Redirect ke halaman yang sama
      echo '<script>window.location.href = "index.php";</script>';
    
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- Tampilan Form -->
<form method="POST">
    <div class="row">
        <div class="col-md-6">
            <label>Your name*</label>
            <input type="text" name="name" class="form-control form-opacity">
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-12">
            <label>Notes</label>
            <textarea name="message" class="form-control form-opacity"></textarea>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn submit">Send</button>
        </div>
    </div>
</form>

                    </div>
                </div>
                
                
            </div>
            <!-- container end -->

        </section>
        
<section>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-header text-center">
          <span>Chat  Box</span>
        </div>
        <div class="card-body chat-care">
          <ul class="chat" id="comment-list">
            <?php
              // Koneksi ke database
              $host = "bnzzgfnrflejvhj1gyld-mysql.services.clever-cloud.com";
              $username = "ui1wxqldy1bvaipq";
              $password = "kmEXb1rM1CYaONWMh8ZR";
              $database = "bnzzgfnrflejvhj1gyld";

              $conn = mysqli_connect($host, $username, $password, $database);
              if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }

              // Query untuk mengambil data komentar
              $sql = "SELECT * FROM tbl_komentar ORDER BY created_at DESC";

              $result = mysqli_query($conn, $sql);

              // Loop untuk menampilkan komentar
              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<li class="agent clearfix">';
                  echo '<div class="chat-body clearfix">';
                  echo '<div class="header clearfix">';
                  echo '<small class="right text-muted">' . date("Y-m-d", strtotime($row["created_at"])) . '</small>';
                  echo '<br>';
                  echo '<strong class="primary-font">' . $row["nama"] . '</strong>';
                  echo '</div>';
                  echo '<p>' . $row["komentar"] . '</p>';
                  echo '</div>';
                  echo '</li>';
                }
              } else {
                echo '<li class="agent clearfix">';
                echo '<div class="chat-body clearfix">';
                echo '<p>No comments yet.</p>';
                echo '</div>';
                echo '</li>';
              }

              mysqli_close($conn);
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

                        </section>
                        <hr>

        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8">
        <br>
       <br>
 
     
            <!-- Over -->
            <div class="gla_over" ></div>
            
            <div class="container text-center">
            <h2>Digital envelope</h2>
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
<br>
<br>
<br>
<br>
<p><img src="./images/thankyou1.png" alt="" height="200" data-bottom-top="@src:./images/thankyou1.png"></p>

            </div>
            <!-- container end -->
       
        </section>

        
        <!-- section end -->

    

            
        

    </section>
    <!-- Content End -->
    

    

</div>
<!-- Page End -->
<script>
function copyToClipboard(text) {
  var tempInput = document.createElement("input");
  tempInput.value = "adadsasd";
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
  alert(" berhasil disalin ke clipboard.");
}
</script>
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

<!-- JQuery -->
<script src="./js/jquery-1.12.4.min.js"></script> 
<!-- Library JS -->
<script src="./js/glanz_library.js"></script> 

<!-- Theme JS -->
<script src="./js/glanz_script.js"></script>


</body>

<!-- Mirrored from glanz.starkethemes.com/html/01_02_home_pink_flowers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 15:01:07 GMT -->
</html>