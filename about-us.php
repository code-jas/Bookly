<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us | Bookly</title>
   <link rel="icon" href="./assets/images/illustrations/logo.png">
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
   <!-- root css -->
   <link rel="stylesheet" href="./assets/css/root.css">
   <!-- navbar css -->
   <link rel="stylesheet" href="./assets/css/navbar.css">
   <link rel="stylesheet" href="./assets/css/signup.css">
   <!-- footer css -->
   <link rel="stylesheet" href="./assets/css/footer.css">

   <link rel="stylesheet" href="./assets/css/about-us.css">
</head>

<section class="wavy-background">
   <svg id="curve" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 174.01">
      <path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z"
         transform="translate(0-135.53)" />
   </svg>
</section>
<!-- START | NAVIGATION BAR -->
<?php
      include("navbar.php");
?>

<!-- END | NAVIGATION BAR -->

<!-- START | ABOUT US CONTAINER -->

<div class="about-us-wrapper-outer">
   <div class="about-us-wrapper">

      <div class="about-us-desc-cont">

         <h1 class="about-us-desc-header">BOOKLY</h1>

         <div class="about-us-desc">
            <p>Bookly is a virtual shop in the Philippines where bookworms can simply buy used books. We think that
               reading empowers individuals by providing empathy — the ability to put oneself in another's shoes for a
               moment — education — a valuable asset for improving one's life — and the occasional escape to amazing
               worlds
               populated by engaging characters. Yes, we prevent millions of books from being destroyed every year, but
               our goal extends beyond that. We keep these books and make them available to readers in the hopes of
               influencing another person's thinking, sharing another tale, and imparting some knowledge.</p>
         </div>
         <div class="about-us-desc-img-wrapper">
            <img src="./assets/images/illustrations/ai-book.svg" alt="book icon" class="about-us-desc-img">
         </div>
      </div>

      <div class="about-us-policy-cont" id="policy">
         <h1 class="about-us-policy-header">Privacy Policies</h1>
         <h2 class="about-us-policy-header2">Bookly Privacy Notice</h2>

         <p class="about-us-policy-parag">We understand that how information about you is used and shared is important
            to you, and we appreciate your faith in us to do so carefully and intelligently. This Privacy Notice
            explains how BOOKLY and its affiliates (collectively "BOOKLY") gather and use your personal information when
            you visit BOOKLY websites, use BOOKLY services, or shop at online stores that link to this Privacy Notice
            (together "BOOKLY Services"). You agree to the practices outlined in this Privacy Notice by using BOOKLY
            Services.
         </p>

         <p class="about-us-policy-parag2">Here are the types of personal information we collect:</p>
         <div class="about-us-policy-collection-cont">
            <!-- <div class="about-us-policy-list">

               <div class="about-us-policy-question">
                  <i class="fa-solid fa-plus btn-policy-plus"></i>
                  <i class="fa-solid fa-minus btn-policy-minus"></i>
                  <span class="about-us-policy-list-topic">What personal
                     information
                     about customers does bookly collect?
                  </span>
               </div>
               <div class="about-us-policy-answer">
                  <p class="about-us-policy-list-parag">
                     We collect your personal information in order to provide and continually improve our products and
                     services.
                     <br><br>
                     <span>Information You Give Us</span><br><br> We receive and store any information you provide in
                     relation
                     to BOOKLY
                     Services. You can choose not to provide certain information, but then you might not be able to take
                     advantage of many of our BOOKLY Services.
                     <br><br>
                     <span>Automatic Information</span><br><br> We automatically collect and store certain types of
                     information about your use
                     of BOOKLY Services, including information about your interaction with content and services
                     available
                     through BOOKLY Services. Like many websites, we use "cookies" and other unique identifiers, and we
                     obtain certain types of information when your web browser or device accesses BOOKLY Services and
                     other
                     content served by or on behalf of BOOKLY on other websites.
                     <br><br>
                     <span>Information from Other Sources</span><br><br> We might receive information about you from
                     other
                     sources, such as
                     updated delivery and address information from our carriers, which we use to correct our records and
                     deliver your next purchase more easily.
                  </p>
               </div>

               <div class="line-break-policy"></div>
            </div> -->

         </div>
      </div>

      <div class="team-section">

         <h1>Meet our <span class="color-head">Team</span></h1>
         <p>A team with same goal, same desire that will help you fulfill your passion.

         </p>

         <div class="team-cont">
            <!-- SUPRE

            <!-- angelo -->
            <div class="team">
               <img src="./assets/images/teams/angelo.jpg" alt="Angelo Picture">
               <div class="team-details">
                  <h3>John Angelo Silvestre</h3>
                  <h4>Developer</h4>
               </div>
               <div class="team-socmed-link">
                  <a href="https://www.facebook.com/angelo.silvestre.315" target="_blank">
                     <div class="icon facebook">

                        <div class="tooltip">Facebook</div>
                        <span><i class="fab fa-facebook-f"></i></span>

                     </div>
                  </a>
                  <a href="https://twitter.com/CodeJs04" target="_blank">
                     <div class="icon twitter">
                        <div class="tooltip">Twitter</div>
                        <span><i class="fab fa-twitter"></i></span>
                     </div>
                  </a>
                  <a href="https://www.instagram.com/iamgroot04/" target="_blank">
                     <div class="icon instagram">
                        <div class="tooltip">Instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                     </div>
                  </a>
               </div>
            </div>
            <!-- Kim -->
            <div class="team" id="team">
               <img src="./assets/images/teams/kim.jpg" alt="Ma. Angelica Picture">
               <div class="team-details">
                  <h3>Kim Villacer</h3>
                  <h4>Developer</h4>
               </div>
               <div class="team-socmed-link">
                  <a href="https://www.facebook.com/kimvillacer/" target="_blank">
                     <div class="icon facebook">

                        <div class="tooltip">Facebook</div>
                        <span><i class="fab fa-facebook-f"></i></span>

                     </div>
                  </a>
                  <a href="https://twitter.com/ngebuuu" target="_blank">
                     <div class="icon twitter">
                        <div class="tooltip">Twitter</div>
                        <span><i class="fab fa-twitter"></i></span>
                     </div>
                  </a>
                  <a href="https://www.instagram.com/kimxvillacer/" target="_blank">
                     <div class="icon instagram">
                        <div class="tooltip">Instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                     </div>
                  </a>
               </div>
            </div>
            <!-- Jhon -->
            <div class="team">
               <img src="./assets/images/teams/jhon.jpg" alt="Raymond Matullano">
               <div class="team-details">
                  <h3>Jhon Carlos Drilon</h3>
                  <h4>Developer</h4>
               </div>
               <div class="team-socmed-link">
                  <a href="https://web.facebook.com/jcj.drilon" target="_blank">
                     <div class="icon facebook">

                        <div class="tooltip">Facebook</div>
                        <span><i class="fab fa-facebook-f"></i></span>

                     </div>
                  </a>
                  <a href="https://twitter.com/jhon_drilon" target="_blank">
                     <div class="icon twitter">
                        <div class="tooltip">Twitter</div>
                        <span><i class="fab fa-twitter"></i></span>
                     </div>
                  </a>
                  <a href="https://www.instagram.com/elleeeeeeyyyy/" target="_blank">
                     <div class="icon instagram">
                        <div class="tooltip">Instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                     </div>
                  </a>
               </div>
            </div>
            <!-- Sharina -->
            <div class="team">
               <img src="./assets/images/teams/Atienzaa.jpg" alt="Dormanu">
               <div class="team-details">
                  <h3>Sharina Atienza</h3>
                  <h4>Developer</h4>
               </div>
               <div class="team-socmed-link">
                  <a href="https://www.facebook.com/sgatienza" target="_blank">
                     <div class="icon facebook">

                        <div class="tooltip">Facebook</div>
                        <span><i class="fab fa-facebook-f"></i></span>

                     </div>
                  </a>
                  <a href="https://twitter.com/sgatienza_" target="_blank">
                     <div class="icon twitter">
                        <div class="tooltip">Twitter</div>
                        <span><i class="fab fa-twitter"></i></span>
                     </div>
                  </a>
                  <a href="https://www.instagram.com/sgatienza/" target="_blank">
                     <div class="icon instagram">
                        <div class="tooltip">Instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                     </div>
                  </a>
               </div>
            </div>
            <!-- Tiffany -->
            <div class="team">
               <img src="./assets/images/teams/tiffany.jpg" alt="Chandy Mae Fortunado">
               <div class="team-details">
                  <h3>Tiffany Go</h3>
                  <h4>Developer</h4>
               </div>
               <div class="team-socmed-link">
                  <a href="https://www.facebook.com/rosetiffany.go.3" target="_blank">
                     <div class="icon facebook">

                        <div class="tooltip">Facebook</div>
                        <span><i class="fab fa-facebook-f"></i></span>

                     </div>
                  </a>
                  <a href="https://twitter.com/tiffanygo_" target="_blank">
                     <div class="icon twitter">
                        <div class="tooltip">Twitter</div>
                        <span><i class="fab fa-twitter"></i></span>
                     </div>
                  </a>
                  <a href="https://www.instagram.com/tffnygo_" target="_blank">
                     <div class="icon instagram">
                        <div class="tooltip">Instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                     </div>
                  </a>
               </div>
            </div>


         </div>

      </div>
   </div>
</div>

<div class="contact-us-section" id="contact-us">
   <h1>get in touch</h1>
   <p>How can we help you? We'd love to hear from you.</p>
   <div class="contact-us-container">
      <div class="left-cont">
         <div class="contact-description">
            <h3>Come to see us!</h3>
            <p>The bookly team would like to invite you to participate in the development of our website. Please
               contact us right away to assist us in improving our site. All ideas and feedback are welcome.</p>
         </div>
         <div class="contact-map">
            <h3>We are on map!</h3>
            <div class="img-card">
               <a href="https://mapcarta.com/W28395565">
                  <img src="./assets/images/map.png" alt="tup-map">
               </a>
            </div>
         </div>
      </div>

      <div class="contact-info">
         <h3>Contact Information</h3>


         <div class="contact-info-details">

            <label class="contact-details-label">E-mail</label><br>
            <div class="input-icon">
               <input class="contact-textbox" type="text" value="bookly.corpo@gmail.com" readonly />
               <i class="fas fa-envelope"></i>
            </div>

            <label class="contact-details-label">Facebook</label><br>
            <div class="input-icon">
               <input class="contact-textbox" type="text" value="https://www.facebook.com/bookly/" readonly />
               <i class="fab fa-facebook"></i>
            </div>

            <label class="contact-details-label">Phone</label><br>
            <div class="input-icon">
               <input class="contact-textbox" type="text" value="0965-387-0742" readonly />
               <i class="fas fa-phone"></i>
            </div>

            <label class="contact-details-label">Address</label><br>
            <div class="input-icon">
               <textarea class="contact-text-area" type="text"
                  readonly>Technological University of the Philippines &#13;&#10;@ Ayala Blvd, Ermmita, Manila, &#13;&#10;1000 Metro Manila</textarea>
               <i class="fas fa-map-marker-alt"></i>
            </div>
         </div>
      </div>
   </div>






</div>
</div>



<!-- END | ABOUT US CONTAINER -->


<?php
   
   include("footer.php");
   
   ?>

<!-- END | FOOTER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/javascript/sign-in-sign-up.js"></script>
<script src="./assets/javascript/navbar-retriever.js"></script>
<script src="./assets/javascript/toast.js"></script>
<script src="./assets/javascript/global.js"></script>
<script src="./assets/javascript/privacy-policy-display.js"></script>
<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>