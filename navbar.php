<header>
   <nav class="navbar">
      <div class="logo">
         <a href="index.html" class="branding">
            <img src="./assets/images/illustrations/book-icon.svg" alt="book icon" class="nav-image">
            <h1 class="branding-text">BOOKLY</h1>
         </a>
      </div>

      <div class="right-navbar">

         <div class="nav-menu">
            <ul class="menu">
               <li class="nav-item"><a href="home.html" accesskey="1" tabindex="1" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="book-shop.html" accesskey="2" tabindex="2" class="nav-link">Book
                     Shop</a>
               </li>
               <li class="nav-item"><a href="about-us.html" accesskey="3" tabindex="3" class="nav-link">About us</a>
               </li>
            </ul>
         </div>

         <?php
         
         session_start();
         




         
         ?>


         <div class="session-false <?php
         if(!isset($_SESSION["username"])) {
            echo "active-session";
         } ?>">
            <!-- <button class="sign-in-btn">SIGN IN</button>
               <button class="sign-up-btn">SIGN UP</button> -->
            <button type="button" id="sign-in-btn" class="sign-in-btn" name="button">SIGN IN</button>
            <button type="button" id="sign-up-btn" class="sign-up-btn" name="button">SIGN UP</button>
         </div>

         <div class="session-true  <?php
         if(isset($_SESSION["username"])) {
            echo "active-session";
         } ?>">
            <!-- <span class="material-symbols-outlined">
                  shopping_cart
               </span>
               <span class="material-symbols-outlined">
                  notifications
               </span> -->
            <ul>
               <li class="nr_li cart_dd_main">
                  <span class="material-symbols-outlined ic-prof-view-tgl">
                     shopping_cart
                  </span>

                  <div class="cart_dd_menu">

                     <ul>
                        <h1>Recently Added Books</h1>
                        <a href="#">
                           <li class="cart-item-list">
                              <div class="cart-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="cart-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                        <a href="#">
                           <li class="cart-item-list">
                              <div class="cart-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="cart-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                        <a href="#">
                           <li class="cart-item-list">
                              <div class="cart-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="cart-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                        <a href="#">
                           <li class="cart-item-list">
                              <div class="cart-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="cart-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                        <a href="#">
                           <li class="cart-item-list">
                              <div class="cart-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="cart-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                     </ul>

                  </div>
               </li>
               <li class="nr_li notif_dd_main">
                  <span class="material-symbols-outlined  ic-prof-view-tgl">
                     notifications
                  </span>

                  <div class="notif_dd_menu">

                     <ul>
                        <h1>Recently Notification</h1>
                        <a href="#">
                           <li class="notif-item-list">
                              <div class="notif-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="notif-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                        <a href="#">
                           <li class="notif-item-list">
                              <div class="notif-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="notif-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                        <a href="#">
                           <li class="notif-item-list">
                              <div class="notif-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="notif-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                        <a href="#">
                           <li class="notif-item-list">
                              <div class="notif-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="notif-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>
                        <a href="#">
                           <li class="notif-item-list">
                              <div class="notif-item-img-card">
                                 <img src="angelo.jpg" alt="">
                              </div>
                              <div class="notif-item-details">
                                 <h3>Parcel delivered</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
                                    quia.</p>
                              </div>
                           </li>
                        </a>


                     </ul>

                  </div>

               </li>
               <li class="nr_li prof_dd_main">
                  <div class="profile-card-nav-br">
                     <img src="angelo.jpg" alt="profile_img">
                  </div>


                  <div class="prof_dd_menu">

                     <ul>
                        <div class="prof0-menu-li">
                           <div class="profile-card-inner-kwz">
                              <img src="angelo.jpg" alt="profile_img">
                           </div>
                           <div class="profile-details-0oq">
                              <h3>Angelo Silvestre</h3>
                              <p>See your profile</p>
                           </div>
                        </div>
                        <div class="line-break-profile"></div>
                        <a href="#">
                           <li><i class="fa-solid fa-gear ic-dd-items-fl"></i></i> Account Settings</li>
                        </a>
                        <a href="#">
                           <li><i class="fa-solid fa-book-bookmark ic-dd-items-fl"></i> My Book</li>
                        </a>
                        <div class="line-break-profile"></div>
                        <a href="logout.php">
                           <li><i class="fas fa-sign-out-alt ic-dd-items-fl"></i>Logout</li>
                        </a>
                     </ul>

                  </div>
               </li>

            </ul>
         </div>


      </div>


      <div class="hamburger">
         <span class="burger-bar"></span>
         <span class="burger-bar"></span>
         <span class="burger-bar"></span>
      </div>
   </nav>
</header>

<?php

include('assets/php/login.php');

?>

<div class="sign-in-section-container-bg">
   <div class="sign-in-section-container">
      <span tabIndex="0" class="close"><i class="fas fa-times"></i></span>

      <h2 class="title">Sign-in Account</h2>
      <form method="POST" id="sign-in-form-container" class="su_form_cont">
         <div class="su-input-item wks31">
            <label for="username">Username</label>
            <input class="txt-field wks231" id="username" name="username" type="text" />
            <p class="error"><?php echo $usernameErr ?></p>
         </div>
         <div class="su-input-item wks31">
            <label for="password">Password</label>
            <input class="txt-field wks231" id="password" name="password" type="password" />
            <p class="error"><?php echo $passwordErr ?></p>
         </div>
         <p><a href="" class="link-fpw">Forgot Password?</a></p>
         <input type="submit" id="sign-in-submit-btn" class="sign-in-submit" name="sign_in_submit"
            value="Sign In"></input></a>
      </form>
   </div>
</div>

<?php

include('assets/php/sign_up_verification.php');
?>
<div class="sign-up-modal-container-bg">
   <div class="sign-up-section-container">
      <span tabIndex="0" class="close"><i class="fas fa-times"></i></span>

      <div class="sign-up-section">
         <h2 class="title">Create Account</h2>
         <form method="POST" id="sign-up-form-container" class="su_form_cont" id="sign_up_form">
            <div class="su-input-item">
               <label for="su_username">Username</label>
               <input class="txt-field" id="su_username" name="su_username" type="text" /><br>
               <p class="error" id="su_username_err"></p>

            </div>
            <div class="su-input-item">
               <label for="su_password">Create Password</label>
               <input class="txt-field" id="su_password" name="su_password" type="password" /><br>
               <p class="error" id="su_password_err"></p>
            </div>
            <div class="su-input-item">
               <label for="su_confirm_password">Confirm Password</label>
               <input class="txt-field" id="su_confirm_password" name="su_confirm_password" type="password" />
               <p class="error" id="su_confirm_password_err"></p>
            </div>
            <div class="su-input-item">
               <label for="su_email">Email</label>
               <input class="txt-field" id="su_email" name="su_email" type="email" /><br>
               <p class="error" id="su_email_err"></p>
            </div>
            <button id="sign-up-submit-btn" class="sign-up-submit" name="sign_up_submit" value="submit">Create
               Account</button></a>
         </form>
         <p class="terms-a3m3">By signing up, you agree to the <a class="links">Terms of Service </a>
            and <a class="links">Privacy Policy</a>, including <a class="links">Cookie Use</a>.</p>
      </div>
      <!--END | CREATE ACCOUNT-->

      <div class="loading-verification">
         <div class="centered">
            <div class="blob-1"></div>
            <div class="blob-2"></div>
         </div>
      </div>
      <!--START | VERIFY EMAIL-->
      <div class="verify-email-section">

         <div class="verify-email-img-card">
            <img class="img-content" src="./assets/images/illustrations/email-verification.png">
         </div>
         <h2 class="title">Verify your Email Address</h2>

         <p class="terms-a3m3">You’ve entered <b>BuildBuildBuild@gmail.com</b> as the email
            address for your
            account.
            To complete the process please check your email for a validation request.</p>

         <button id="sign-up-done-btn" class="sign-up-submit">Done</button>

      </div>
   </div>
</div>







<!-- END | NAVIGATION BAR -->