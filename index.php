<?php
include_once("app/BaseDatos.php");
include("plantillas/inicio.php");



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
                           <h1 class="banner_taital">Lo mejor<br>de lo nuestro</h1>
                           <p class="banner_text">DONDE ESTA EL MEJOR CAFE</p>
                           <div class="btn_main">
                              <div class="about_bt active"><a href="about.php">Nosotros</a></div>
                              <div class="callnow_bt"><a href="#">Contactanos</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="carousel-item">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="banner_taital_main">
                           <h1 class="banner_taital">Siempre <br>a tu lado</h1>
                           <p class="banner_text">PARA SERVIRTE MI AMIGO</p>
                           <div class="btn_main">
                              <div class="about_bt active"><a href="#">About Us</a></div>
                              <div class="callnow_bt"><a href="#">Call Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
            </a>
         </div>
      </div>
   </div>
   <!-- banner section end -->
</div>



<div class="about_section layout_padding">
   <div class="container">
      <div class="about_section_2">
         <div class="row">
            <div class="col-md-6">
               <div class="about_taital_box">
                  <h1 class="about_taital">Sobre Nosotros</h1>
                  <h1 class="about_taital_1">Coffe Bike</h1>
                  <p class=" about_text">coffe bike fundada desde 1989 por un joven boliviano que recorio las calles de sucre con su bicicleta repartiendo la alegria mediante el cafe que preparaba</p>
                  <div class="readmore_btn"><a href="about.php">Read More</a></div>
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
<!-- coffee section start -->
<div class="coffee_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="coffee_taital">Nuestras especialidades Coffe Bike</h1>
         </div>
      </div>
   </div>
   <div class="coffee_section_2">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-1.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">TYPES OF COFFEE</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-2.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">BEAN VARIETIES</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-3.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">COFFEE & PASTRY</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-4.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">COFFEE TO GO</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>

                     
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-1.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">TYPES OF COFFEE</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-2.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">BEAN VARIETIES</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-3.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">COFFEE & PASTRY</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-4.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">COFFEE TO GO</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-1.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">TYPES OF COFFEE</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                          
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-2.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">BEAN VARIETIES</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-3.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">COFFEE & PASTRY</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_img"><img src="images/img-4.png"></div>
                        <div class="coffee_box">
                           <h3 class="types_text">COFFEE TO GO</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
         </a>
      </div>
      <div class="read_btn"><a href="coffees.php">Ver Mas</a></div> 
   </div>
    

   
</div>


<!-- coffee section end -->


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
<!-- contact section start -->
<div class="contact_section layout_padding" >
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="contact_taital">reserva una mesa aqui !</h1>
            
         </div>
      </div>
   </div>
   <div class="col-md-12">
               <div class="mail_section_1">
                  <form method="POST" action="app/Guardar_Reserva.php">

                     <input type="text" class="mail_text" placeholder="Reserva a nombre de" name="Anombre" required>
                     <input type="time" class="mail_text" placeholder="hora de reserva" name="hora" required>
                     <input type="date" class="mail_text" placeholder="fecha de reserva" name="fecha" required>
                     <input type="numeric" class="mail_text" placeholder="para cuantas personas" name="cantidad" require>
                     <input type="submit" class="mail_text" value="Enviar" name="registro" style="background-color:#f01c1c;">
                  </form>
                  <?php
                  ?>
               </div>
            </div>
   <div class="container-fluid">
      <div class="contact_section_2">
         <div class="row">
            <div class="col-md-12">
               
            </div>
            <div class="map_main">
               <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15085.254259451136!2d-65.2743727!3d-19.0499463!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93fbcf045a60a015%3A0x5f53986684acb281!2sCoffee%20Bike%20Roastery%20Central!5e0!3m2!1ses-419!2sbo!4v1718281245448!5m2!1ses-419!2sbo" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>



               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- contact section end -->
<!-- footer section start -->

<?php
include_once("plantillas/footer.php");
include("plantillas/final.php");

?>