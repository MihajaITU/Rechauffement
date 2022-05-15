<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact us</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url("assets/jack")?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url("assets/jack")?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url("assets/jack")?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url("assets/jack")?>/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url("assets/jack")?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url("assets/jack")?>/images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"><img src="<?php echo base_url("assets/jack")?>/images/logo.png" alt="#"> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                        <ul class="menu-area-main">
                              <li >
                                 <a href="<?php echo base_url()?>">Home</a>
                              </li>
                              <li>
                                 <a href="<?php echo base_url()?>IndexController/about">About</a>
                              </li>
                              
                              <li>
                                 <a href="<?php echo base_url()?>IndexController/blog">Blog</a>
                              </li>
                              <li class="active">
                                 <a href="<?php echo base_url()?>IndexController/contact">Contact us</a>
                              </li>
                              <li>
                                 <a href="#">Login</a>
                              </li>
                              <li>
                                 <a href="#">Register</a>
                              </li>
                              <li>
                                 <a href="#"><img src="<?php echo base_url("assets/jack")?>/images/search_icon.png" alt="#" /></a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="contact-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="contactheading">
               <h3>contact Us</h3>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- section -->
      <section class="layout_padding">
         <div class="container">
           
            
            
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="index.html">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name" required="#" />
                                    <input type="email" name="email" placeholder="Email" required="#" />
                                     <input type="text" name="subject" placeholder="subject" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea class="wdt" placeholder="Comment"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button>Send</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->

      <section>
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="padding: 0;">
                   <div class="map_section">
                     <div id="map">
                     </div>
                   </div>
                </div>
            </div>
         </div>
      </section>
      
      <!-- footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="<?php echo base_url("assets/jack")?>/images/footer_logo.png" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="<?php echo base_url("assets/jack")?>/images/location_icon.png" alt="#" /></span><span class="text_cont">London 145<br>United Kingdom</span></li>
                     <li><span><img src="<?php echo base_url("assets/jack")?>/images/phone_icon.png" alt="#" /></span><span class="text_cont">987 654 3210<br>987 654 3210</span></li>
                     <li><span><img src="<?php echo base_url("assets/jack")?>/images/mail_icon.png" alt="#" /></span><span class="text_cont">demo@gmail.com<br>support@gmail.com</span></li>
                  </ul>
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Quick link</h3>
                     <ul>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Features</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Markrting</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Instagram</h3>
                     <ol>
                        <li><img class="img-responsive" src="<?php echo base_url("assets/jack")?>/images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="<?php echo base_url("assets/jack")?>/images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="<?php echo base_url("assets/jack")?>/images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="<?php echo base_url("assets/jack")?>/images/footer_blog.png" alt="#" /></li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Contact us</h3>
                     <form action="index.html">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Your Name" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Email" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Subject" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Message"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">Send</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo base_url("assets/jack")?>/js/jquery.min.js"></script>
      <script src="<?php echo base_url("assets/jack")?>/js/popper.min.js"></script>
      <script src="<?php echo base_url("assets/jack")?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url("assets/jack")?>/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo base_url("assets/jack")?>/js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="<?php echo base_url("assets/jack")?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo base_url("assets/jack")?>/js/custom.js"></script>

<script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

        var image = 'images/maps-and-flags.png';
        var beachMarker = new google.maps.Marker({
          position: {lat: 40.645037, lng: -73.880224},
          map: map,
          icon: image
        });
      }
    </script>


   <!-- google map js -->
      <script src="<?php echo base_url("assets/jack")?>/js/js.js"></script>
      <!-- end google map js -->


   </body>
</html>