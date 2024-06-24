<?php
$titulo = 'Sobre Nosotros';
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
                           <h1 class="banner_taital">Acerca de <br>Nosotros</h1>
                           <p class="banner_text">CONOCE MUCHO SOBRE NOSOTROS</p>
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
<!-- header section end -->
<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="about_section_2">
         <div class="row">
            <div class="col-md-6">
               <div class="about_taital_box">
                  <h1 class="about_taital">About Our shop</h1>
                  <h1 class="about_taital_1">Coffee distribution '</h1>
                  <p class=" about_text">has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editorhas a more-or-less normal distribution of letters, as oppos</p>
                  <div class="readmore_btn"><a href="#">Read More</a></div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
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
                  <h1 style="color: white;">contactanos</h1>
                  <li>
                     <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">67645041</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                     </a>
                  </li>
               </ul>
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
<?php

include_once("plantillas/final.php");

?>