<?php

session_start();

if(isset($_SESSION["username"])){
   $username = $_SESSION["username"];
}
else{
   echo "<script>window.location.href='../home?error=404';</script>";
}

?>


<header>
   <nav class="navbar">
      <div class="logo">
         <a href="../home" class="branding">
            <img src="../assets/images/illustrations/logo.png" alt="book logo" class="nav-image">
            <h1 class="branding-text">BOOKLY</h1>
         </a>
      </div>

      <div class="right-navbar">

         <div class="nav-menu">
            <ul class="menu">
               <li class="nav-item"><a href="../home" accesskey="1" tabindex="1" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="../book-shop" accesskey="2" tabindex="2" class="nav-link">Book
                     Shop</a>
               </li>
               <li class="nav-item"><a href="../about-us" accesskey="3" tabindex="3" class="nav-link">About us</a>
               </li>
            </ul>
         </div>




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
            include('../assets/php/display-user-account.php');
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                                 <img src=".././angelo.jpg" alt="">
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
                     <img src="<?php echo $profile_img?>"
                        alt="<?php echo ucfirst($firstname) . ' '. ucfirst($lastname);?>">
                  </div>


                  <div class="prof_dd_menu">

                     <ul>
                        <div class="prof0-menu-li">
                           <div class="profile-card-inner-kwz">
                              <img src="<?php echo $profile_img?>"
                                 alt="<?php echo ucfirst($firstname) . ' '. ucfirst($lastname);?>">
                           </div>
                           <div class="profile-details-0oq">
                              <h3><?php echo ucfirst($firstname) . ' '. ucfirst($lastname);?></h3>
                              <p><?php echo $username;?></p>
                           </div>
                        </div>
                        <div class="line-break-profile"></div>
                        <a href="../account-settings/overview">
                           <li><i class="fa-solid fa-gear ic-dd-items-fl"></i></i> Account Settings</li>
                        </a>
                        <a href="viewcart">
                           <li><i class="fa-solid fa-book-bookmark ic-dd-items-fl"></i> My Book</li>
                        </a>
                        <div class="line-break-profile"></div>
                        <a href="../logout.php">
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


include('../assets/php/sign_up_verification.php');


?>











<!-- END | NAVIGATION BAR -->