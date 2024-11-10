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

   <section class="mainBanner innerBanner" style="background-image: url(assets/images/banner/tariff.png);">
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
            <h1>Tariff <span><em>Calculator</em></span></h1>
         </div>
      </div>
   </section>

   <?php include("includes/hsec1.php"); ?>

   <section class="contactSection1 secPad">
      <div class="container">
         <div class="contactSec1-hd hd-pad pt-0">
            <h6 class="fs-lg">Calculate Now!</h6>
         </div>

         <div class="contactSec1-form">
            <form>
               <div class="row">
                  <div class="col-md-4">
                     <div class="contactSec1-fFeild">
                        <input type="number" placeholder="Length (Inches)">
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="contactSec1-fFeild">
                        <input type="number" placeholder="Width (Inches)">
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="contactSec1-fFeild">
                        <input type="number" placeholder="Height (Inches)">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="contactSec1-fFeild">
                        <input type="text" placeholder="Enter Pieces">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="contactSec1-fFeild">
                        <input type="text" placeholder="Dense Weight">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="contactSec1-fFeild">
                        <select>
                           <option value="0" selected disabled>Select Origin</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="contactSec1-fFeild">
                        <select>
                           <option value="0" selected disabled>Select Destination</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="contactSec1-fFeild">
                        <select name="serviceType">
                           <option disabled="" value="default" selected="">Select Service Type</option>
                           <option value="overnight">Overnight document in envelope</option>
                           <option value="same day">Same Day</option>
                           <option value="second day">48 Hours delivery</option>
                           <option value="express cargo">72-92 Hours delivery</option>
                           <option value="flyer">Overnight Doc/Non Doc in Flyer</option>
                           <option value="MyBox">Overnight Parcel in Branded Box</option>
                           <option value="International">International</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                     <div class="contactSec1-tarffiBtn">
                        <span class="tarffiBtnMain clearBtn">Clear</span>
                        <div class="tarffiBtnMain loaderBtn" disabled>Loading, Please Wait...</div>
                        <button class="tarffiBtnMain tariffBtn">Tariff</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </section>

   

   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>
   


</body>

</html>