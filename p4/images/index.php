<?php
session_start();
require_once 'class.user.php';


?>
<!DOCTYPE html>
<!--
Template Name: Escarine-Hol
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>BD Packaging & Shifting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 60000 * 1);
</script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="relative bgded" style="background-image:url('images/demo/backgrounds/domestic.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace inline pushright">
          <li><i class="fa fa-phone"></i> +88014567890</li>
          <li><i class="fa fa-envelope-o"></i> bdpackingshifting@gmail.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">BD Packaging & Shifting</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Services</a>
            <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Buy & Sell</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
         </ul>
          </li>
          <li><a href="#">About Us</a></li>
		  <li><a  class="drop" href="#">Feedback</a>
		  <ul>
		  <li><a href="review.php">Reviews</a></li>
          <li><a href="complain.php">Complain Desk</a></li>
		  </ul> 
		  </li>
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="introtxt">
        <h2 class="heading">Packing &amp; Shifting</h2>
        <p>Welcome to BD Packing and Shifting one of the most trusted professional packers and movers in Bangladesh.
		We provide local shifting, house shifting services, office shifting services, home relocation services,luggage
		shifting services,car transportation services. Our focus is on providing outstanding customer services and cost control.</p>
      </div>
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div id="introblocks" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_quarter first">
        <article><a class="btn" href="#"><i class="tr tr-airplane37"></i></a>
          <h4 class="heading underline center"><a href="#">Book a Flight</a></h4>
        </article>
      </li>
      <li class="one_quarter">
        <article><a class="btn" href="#"><i class="tr tr-transport68"></i></a>
          <h4 class="heading underline center"><a href="#">Book a Car</a></h4>
        </article>
      </li>
      <li class="one_quarter">
        <article><a class="btn" href="#"><i class="tr tr-car167"></i></a>
          <h4 class="heading underline center"><a href="#">Book a Truck</a></h4>
        </article>
      </li>
      <li class="one_quarter">
        <article><a class="btn" href="#"><i class="tr tr-building90"></i></a>
          <h4 class="heading underline center"><a href="#">Book a Van</a></h4>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <ul id="home" class="nospace group elements">
      <li class="one_third first">
        <figure class="elementwrapper"><a class="imgoverlay" href="#"><img src="images/demo/faq.png" alt=""></a>
          <figcaption>FAQ</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure class="elementwrapper"><a class="imgoverlay" href="#"><img src="images/demo/phone.png" alt=""></a>
          <figcaption>Contact Us</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure class="elementwrapper"><a class="imgoverlay" href="#"><img src="images/demo/area.png" alt=""></a>
          <figcaption>Service Areas</figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <section id="holtypes" class="hoc clear"> 
    <!-- ################################################################################################ -->
  
    <ul class="nospace group">
      
      <li>
        <article><a class="btn" href="#"><i class="fa fa-user"></i></a>
         
		 <!-- hitwebcounter Code START -->
		 
<a href="#" target="_blank">
 <h4>Viewed By</h4>
<img src="http://hitwebcounter.com/counter/counter.php?page=6629534&style=0003&nbdigits=5&type=page&initCount=0" title="http://www.hitwebcounter.com/htmltutorial.php" Alt="http://www.hitwebcounter.com/htmltutorial.php"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="#" title="WebPage Visits" 
                                        target="_blank" style="font-family: Arial, Helvetica, sans-serif; 
                                        font-size: 9px; color: #6A7175; text-decoration: underline ;">
                                        </a>  
									
                             
                            
        </article>
      </li>
     
     
      <li>
        <article><a class="btn" href="#"><i class="fa fa-user"></i></a>
         
          
		  <!-- hitwebcounter Code START -->
<a href="#" target="_blank">
 <h4>Visitors</h4>
<img src="http://hitwebcounter.com/counter/counter.php?page=6629536&style=0003&nbdigits=5&type=ip&initCount=0" title="http://www.hitwebcounter.com/htmltutorial.php" Alt="http://www.hitwebcounter.com/htmltutorial.php"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="#" title="WebPage Visits" 
                                        target="_blank" style="font-family: Arial, Helvetica, sans-serif; 
                                        font-size: 9px; color: #6A7175; text-decoration: underline ;">
                                        </a>  
        </article>
      </li>
     
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- #######################################-->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <h2 class="heading">The best last minute deals</h2>
    <p class="btmspace-50">Imperdiet lacinia placerat in sapien vivamus ac dolor felis pellentesque. <a href="#">View All Deals &raquo;</a></p>
    <ul id="lastminute" class="nospace group elements">
      <li class="one_third first">
        <article class="elementwrapper">
          <figure><a class="imgoverlay" href="#"><img src="images/demo/320x220.png" alt=""></a>
            <figcaption class="group">
              <div class="fl_left">United Kingdom</div>
              <a href="#" class="fl_right"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="elementinfo">
            <ul class="starrating">
              <li><i class="coloured fa fa-star"><em>1</em></i></li>
              <li><i class="coloured fa fa-star"><em>2</em></i></li>
              <li><i class="coloured fa fa-star"><em>3</em></i></li>
              <li><i class="fa fa-star-half-o"><em>4</em></i></li>
              <li><i class="fa fa-star-o"><em>5</em></i></li>
            </ul>
            <h4 class="heading">Luctus interdum commodo nullam sodales</h4>
            <ul class="meta">
              <li><i class="red fa fa-map-marker"></i> London City</li>
              <li><i class="fa fa-gbp"></i><strong>125</strong> <span class="font-xs">(per night)</span></li>
              <li><a href="#">View Details &raquo;</a></li>
            </ul>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="elementwrapper">
          <figure><a class="imgoverlay" href="#"><img src="images/demo/320x220.png" alt=""></a>
            <figcaption class="group">
              <div class="fl_left">France</div>
              <a href="#" class="fl_right"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="elementinfo">
            <ul class="starrating">
              <li><i class="coloured fa fa-star"><em>1</em></i></li>
              <li><i class="coloured fa fa-star"><em>2</em></i></li>
              <li><i class="coloured fa fa-star"><em>3</em></i></li>
              <li><i class="coloured fa fa-star"><em>4</em></i></li>
              <li><i class="fa fa-star-half-o"><em>5</em></i></li>
            </ul>
            <h4 class="heading">Lobortis turpis gravida curabitur elementum</h4>
            <ul class="meta">
              <li><i class="red fa fa-map-marker"></i> Paris City</li>
              <li><i class="fa fa-gbp"></i><strong>125</strong> <span class="font-xs">(per night)</span></li>
              <li><a href="#">View Details &raquo;</a></li>
            </ul>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="elementwrapper">
          <figure><a class="imgoverlay" href="#"><img src="images/demo/320x220.png" alt=""></a>
            <figcaption class="group">
              <div class="fl_left">United States</div>
              <a href="#" class="fl_right"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="elementinfo">
            <ul class="starrating">
              <li><i class="coloured fa fa-star"><em>1</em></i></li>
              <li><i class="coloured fa fa-star"><em>2</em></i></li>
              <li><i class="coloured fa fa-star"><em>3</em></i></li>
              <li><i class="coloured fa fa-star"><em>4</em></i></li>
              <li><i class="coloured fa fa-star"><em>5</em></i></li>
            </ul>
            <h4 class="heading">Faucibus lectus molestie est praesent vitae</h4>
            <ul class="meta">
              <li><i class="red fa fa-map-marker"></i> New York City</li>
              <li><i class="fa fa-gbp"></i><strong>125</strong> <span class="font-xs">(per night)</span></li>
              <li><a href="#">View Details &raquo;</a></li>
            </ul>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="contactinfo" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_quarter first">
        <div class="infobox"><i class="fa fa-phone"></i>
          <ul class="nospace">
            <li>+00 (123) 456 7890</li>
            <li>+00 (123) 456 7890</li>
          </ul>
        </div>
      </li>
      <li class="one_quarter">
        <div class="infobox"><i class="fa fa-envelope-o"></i>
          <ul class="nospace">
            <li><a href="#">info@domain.com</a></li>
            <li><a href="#">sales@domain.com</a></li>
          </ul>
        </div>
      </li>
      <li class="one_quarter">
        <div class="infobox"><i class="fa fa-clock-o"></i>
          <ul class="nospace">
            <li>Mon - Fri: 9 to 5.00pm</li>
            <li>Sat: 9 to 1.00pm</li>
          </ul>
        </div>
      </li>
      <li class="one_quarter">
        <div class="infobox"><i class="fa fa-support"></i>
          <ul class="nospace">
            <li><a href="#">Online Support</a></li>
            <li><a href="#">Live Chat</a></li>
          </ul>
        </div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
  <div id="newsletter" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading"><i class="fa fa-newspaper-o"></i> Latest News</h6>
    </div>
    <form class="three_quarter" method="post" action="#">
      <div class="clear">
        <input class="one_third first" type="text" value="" placeholder="Name" required>
        <input class="one_third" type="email" value="" placeholder="Email" required>
        <button class="one_third" type="submit" title="Sign Up">Sign Up</button>
      </div>
    </form>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Vitae nunc sagittis</h6>
      <p>Duis non dolor sit amet lorem rhoncus commodo ornare tellus vel quam.</p>
      <p>Sapien porttitor auctor integer pharetra ligula sit elementum in lobortis dolor ullamcorper.</p>
    </div>
    <div class="one_quarter">
      <h6 class="title">Faucibus a lacus</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Tincidunt phasellus</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Nullam eu velit vestibulum egestas nisi lacinia fringilla lectus mauris enim magna placerat venenatis.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Molestie elit id</h6>
      <ul class="nospace linklist">
        <li><a href="#">Placerat arcu suspendisse</a></li>
        <li><a href="#">Vestibulum ultrices id dui</a></li>
        <li><a href="#">Tempus commodo maximus</a></li>
        <li><a href="#">Suspendisse potenti vivamus</a></li>
        <li><a href="#">Gravida malesuada praesent</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Ultrices odio cras</h6>
      <ul class="nospace linklist">
        <li><a href="#">aenean eget tempor orci</a></li>
        <li><a href="#">curabitur sit amet massa</a></li>
        <li><a href="#">sollicitudin elementum</a></li>
        <li><a href="#">nunc sit amet laoreet libero</a></li>
        <li><a href="#">donec erat enim consectetur</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
<!-- Homepage specific - can be used in all pages -->
<div id="preloader"><div></div></div>
<script>$(window).load(function(){$("#preloader div").delay(500).fadeOut();$("#preloader").delay(800).fadeOut("slow");});</script>
<!-- / Homepage specific -->
</body>
</html>