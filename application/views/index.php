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
      <title>Acceuil</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <script src="<?php echo base_url("assets/js")?>/Chart.js"></script>
      <link rel="stylesheet" href="<?php echo base_url("assets/jack")?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url("assets/jack")?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url("assets/jack")?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url("assets/jack")?>/images/fevicon.png" type="<?php echo base_url("assets/jack")?>image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url("assets/jack")?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <?php var_dump($legendcause); var_dump($nom_cause);?>
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
                              <li class="active">
                                 <a href="<?php echo base_url()?>">Home</a>
                              </li>
                              <li>
                                 <a href="<?php echo base_url()?>IndexController/about">About</a>
                              </li>
                             
                              <li>
                                 <a href="<?php echo base_url()?>IndexController/blog">Blog</a>
                              </li>
                              <li>
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
      <!-- revolution slider -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="<?php echo base_url("assets/jack")?>/images/slider_1.png" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="<?php echo base_url("assets/jack")?>/images/slider_2.png" alt="#" />
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h4>Parlons du </h4>
                     <h3>Réchauffement climatique</h3>
                     <p>
                     Le réchauffement climatique, appelé également réchauffement planétaire,
                     est un phénomène qui se caractérise par l’augmentation du niveau moyen de la température à la surface de la Terre.
                     La température moyenne globale de la planète a augmenté de 1.1°C entre 1850 et 2017. 
                     </p>
                     <div class="button_section">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end revolution slider -->
      <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>De ce <span class="orange_color">Fait</span></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Quel était le changement de température depuis les années 1850?</h4>
                     <h5>Ce diagramme vous aidera à comprendre.<br><br>Température en ℃</h5>
                     <canvas id="canvas" height="450" width="600" onclick=""></canvas>
                     <h5 style="float:right">Année</h5>

                           <script>
                              console.log(<?php echo $cause;?>);
                              var lineChartData = {
                                 labels : <?php echo $json?>.annee,
                                 datasets : [
                                    {
                                       fillColor : "rgba(151,187,205,0.5)",
                                       strokeColor : "rgba(151,187,205,1)",
                                       pointColor : "rgba(151,187,205,1)",
                                       pointStrokeColor : "#fff",
                                       data : <?php echo $json?>.donnee,
                                    }
                                 ],
                                 options: {
                                    scales: {
                                       x: {
                                       type: 'logarithmic',
                                      title: 'bonjour', // `axis` is determined by the position as `'y'`
                                       },
                                       y: {
                                       type: 'logarithmic',
                                      title: 'bonjour', // `axis` is determined by the position as `'y'`
                                       }
                                    }
                                 }
                              }
                                 var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
                                 function chartClicked(event){
                                 var yTop = this.chart.chartArea.top;
                                 var yBottom = this.chart.chartArea.bottom;

                                 var yMin = this.chart.scales['y-axis-0'].min;
                                 var yMax = this.chart.scales['y-axis-0'].max;
                                 var newY = 0;

                                 if (event.offsetY <= yBottom && event.offsetY >= yTop) {
                                    newY = Math.abs((event.offsetY - yTop) / (yBottom - yTop));
                                    newY = (newY - 1) * -1;
                                    newY = newY * (Math.abs(yMax - yMin)) + yMin;
                                 };

                                 var xTop = this.chart.chartArea.left;
                                 var xBottom = this.chart.chartArea.right;
                                 var xMin = this.chart.scales['x-axis-0'].min;
                                 var xMax = this.chart.scales['x-axis-0'].max;
                                 var newX = 0;

                                 if (event.offsetX <= xBottom && event.offsetX >= xTop) {
                                    newX = Math.abs((event.offsetX - xTop) / (xBottom - xTop));
                                    newX = newX * (Math.abs(xMax - xMin)) + xMin;
                                 };
                                 console.log(newX, newY);
                              };
                           </script>
                           
                     
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>D'après la WWF</h4>
                     <h5>Vous trouverez ci-dessous les statistiques des causes</h5>
                     <p>
                     <canvas id="doughnut" height="450" width="600"></canvas>
                     <script>

                        var doughnutData = <?php echo $cause?>;
                           new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
                           </script>

                     <?php for ($i=0;$i<count($legendcause);$i++) {?>
                        <div class="row">
                           <div class="col-md-2"></div>
                           <div class="col-md-2">
                           <table style="background-color: 	<?php echo $legendcause [$i]['color']?>; width: 50px;height: 20px;" ><tr><td></td></tr></table></div> 
                           <div class="col-md-8"> <?php echo strval($nom_cause[$i])." ".strval($legendcause[$i]['value'])." %";?> </div>
                        </div>
                        <?php } ?>
                     </p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="<?php echo base_url("assets/jack")?>/images/blog2.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <img src="<?php echo base_url("assets/jack")?>/images/blog1.png" alt="#" />
               </div>
         
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="about.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="section layout_padding blog_blue_bg light_silver">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="heading">
                     <h3>Blog</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img class="img-responsive" src="<?php echo base_url("assets/jack")?>/images/blog_1.png" alt="#" />
                     </div>
                     <div class="blog_cont_2">
                        <h3>Why do we use it</h3>
                        <p class="sublittle">March 19 2019  5 READ</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed to using Content here content here making..</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
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
   </body>
</html>