<?php
$titulo = 'blog';
include_once("plantillas/inicio.php");

?>




<div class="header_section">
   <div class="container">
      <?php
      include_once("plantillas/nav.php");

      ?>
   </div>
   <!-- banner section start -->
   <div class="banner_section layout_padding">
      <div class="container">
         <div id="banner_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="banner_taital_main">
                           <h1 class="banner_taital">Visitanos<br>Para pasarla bien</h1>
                           <p class="banner_text">DONDE TE DIVERTIRAR JUNTO A TUS AMIGOS</p>
                           <div class="btn_main">
                              <div class="about_bt active"><a href="about.php">Nosotros</a></div>
                              <div class="callnow_bt"><a href="#">Contactanos</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               
            </div>
            
         </div>
      </div>
   </div>
   <!-- banner section end -->
</div>
<!-- blog section start -->
<div class="blog_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="about_taital">Our Blog</h1>
         </div>
      </div>
      <div class="blog_section_2">
         <div class="row">
            <div class="col-md-6">
               <div class="blog_box">
                  <div class="blog_img"><img src="images/blog-img1.png"></div>
                  <h4 class="date_text">05 April</h4>
                  <h4 class="prep_text">PREP TECHNIQUES Coffee</h4>
                  <p class="lorem_text">distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more</p>
               </div>
               <div class="read_btn"><a href="#">Read More</a></div>
            </div>
            <div class="col-md-6">
               <div class="blog_box">
                  <div class="blog_img"><img src="images/blog-img2.png"></div>
                  <h4 class="date_text">05 April</h4>
                  <h4 class="prep_text">Enjoy Best Coffee</h4>
                  <p class="lorem_text">distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more</p>
               </div>
               <div class="read_btn"><a href="#">Read More</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- blog section end -->
<!-- footer section start -->
<div class="footer_section layout_padding margin_top90">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="footer_social_icon">
               <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               </ul>
            </div>
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="form-group">
               <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
               <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <p class="copyright_text">2024 Todos los derechos estan reservados </p>
         </div>
      </div>
   </div>
</div>
<!-- copyright section end -->
<?php
include_once("plantillas/final.php");
?>