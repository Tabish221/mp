<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>M&P | ...</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
   <?php include("includes/header.php"); ?>

   <section class="mainBanner innerBanner" style="background-image: url(assets/images/banner/contact.png);">
      <div class="dropBtn wow fadeInUp"  data-wow-delay="0.2s">
         <a href="#">
            <div class="icon"><img src="assets/images/icon/down-arrow-long.png" alt="Down Arrow Icon"></div>
         </a>
      </div>

      <div class="mainBanner-socialLink">
         <ul>
            <li class="wow fadeInLeft"  data-wow-delay="0.2s"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="wow fadeInLeft"  data-wow-delay="0.4s"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="wow fadeInLeft"  data-wow-delay="0.6s"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="wow fadeInLeft"  data-wow-delay="0.8s"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
      </div>

      <div class="container">
         <div class="mainBanner-cont">
            <h1> <span><em>Contact Us</em></span></h1>
         </div>
      </div>
   </section>

   <section class="contactSection1 secPad">
      <div class="container">
         <div class="contactSec1-hd hd-pad text-center">
            <h6 class="fs-lg">Get In Touch</h6>
            <p class="fs-p1">Have any inquiry or some feedback for us?</p>
            <p class="fs-p1">Fill out the details and our customer care representative will establish a contact with you.</p>
         </div>

         <div class="contactSec1-form">
            <form>
               <div class="row">
                  <div class="col-lg-4 col-md-12">
                     <div class="contactSec1-fFeild">
                        <input type="text" placeholder="Full Name">
                        <div class="icon">
                           <img src="assets/images/contact/user.png" alt="User Icon">
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-12">
                     <div class="contactSec1-fFeild">
                        <input type="email" placeholder="Email Address">
                        <div class="icon">
                           <img src="assets/images/contact/email.png" alt="Email Icon">
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-12">
                     <div class="contactSec1-fFeild">
                        <input type="text" placeholder="Subject">
                        <div class="icon">
                           <img src="assets/images/contact/app.png" alt="App Icon">
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                     <div class="contactSec1-fFeild">
                        <textarea placeholder="Message"></textarea>
                        <div class="icon">
                           <img src="assets/images/contact/chat.png" alt="Chat Icon">
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                     <div class="contactSec1-fBtn">
                        <button>Submit Now!</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>

         <div class="contactSec1-bottom">
            <ul>
               <li>
                  <a href="mailto:contact@mulphilog.com">
                     <div class="icon"><i class="fas fa-envelope"></i></div>
                     contact@mulphilog.com
                  </a>
               </li>

               <li>
                  <a href="tel:(021) 111-202-202">
                     <div class="icon"><i class="fas fa-phone"></i></div>
                     (021) 111-202-202
                  </a>
               </li>

               <li>
                  <a href="#">
                     <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                     Building Constructed at Plot No. C-118 & C-119 Sector 31-A Mehran Town Extension Korangi Road Karachi.
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </section>

   

   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>
   


</body>

</html>