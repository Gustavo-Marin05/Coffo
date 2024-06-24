<?php
include_once("plantillas_admin/inicio.php");
include_once("plantillas_admin/nav.php");
include("../app/BaseDatos.php");
include("../app/config.php");
$bd=new BaseDatos();
//session_start();

$sql="SELECT * FROM `categoria`";

$row=$bd->consulta2($sql);





?>

<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Agregar Producto</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
          <div class="col-xl-6 col-lg-6 col-md-12">

          
            <form action="app_ad/añadir_producto.php" class="tm-edit-product-form" method="POST">
              <div class="form-group mb-3">
                <label for="nombre">Nombre del producto
                </label>
                <input id="nombre" name="nombre" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="description">Descripcion</label>
                <textarea class="form-control validate" rows="3" name="descrip" required></textarea>
              </div>


              <div class="form-group mb-3">
                <label for="category">categoria</label>
                <select class="custom-select tm-select-accounts" id="categoria_id" name="categoria_id">
                  <option selected>seleccione la categoria</option>

                  <?php  foreach($row as $d){ 
                    echo '<option value="' . $d['id'] . '">' . $d['descripcion'] . '</option>';

                  

                   } ?>
                  
                </select>
              </div>
              <div class="row">
                
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="stock">Presio del producto
                  </label>
                  <input id="precio" name="precio" type="text" class="form-control validate" required />
                </div>
              </div>

          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
            <div class="tm-product-img-dummy mx-auto">
              <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
            </div>
            <div class="custom-file mt-3 mb-3">
              <input id="fileInput" type="file" style="display:none;" />
              <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();" />
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="tm-footer row tm-mt-small">
  <div class="col-12 font-weight-light">
    <p class="text-center text-white mb-0 px-4 small">
      Copyright &copy; <b>2018</b> All rights reserved.

      Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
    </p>
  </div>
</footer>

<?php
include_once("plantillas_admin/final.php");
?>