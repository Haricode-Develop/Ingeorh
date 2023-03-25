
   <?php
   echo '<section id="quote2" class="parallax-section-5" style="background:linear-gradient(rgb(0,0,0,0.8), rgb(0,0,0,0.8)) ,url('.$url.'vistas/img/Varias/img5.JPG);background-position: center center;background-repeat: no-repeat;background-size: cover; background-attachment: fixed;">
      <div class="container">
         <div class="row wow fadeInUp">
            <div class="col-lg-12 wow fadeInUp" style="z-index:3">
               <div id="quote-slider">
                  <div>
                     <blockquote>
                     <span>Servicios</span>

                  </blockquote>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   ';
   ?>
 <?php
           $item = null;
           $valor = null;
           $servicio = controladorIngeo::mostrarServicios($item,$valor);
           foreach ($servicio as $key => $value) {
            if ($value["scroll"] != "mapeo") {
                       echo'
<section class="templatemo-container light-gray-bg section-shadow-bottom" id="'.$value["scroll"].'">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title black textTitle">'.$value["titulo"].'</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                       <img src="'.$url.$value["img"].'">
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <p class="text-justificado">'.$value["descripcion"].'</p>
                        <h3 class="blue">Listado de servicios:</h3>
                        <ol>
                        '.$value["lista"].'
                        </ol>
                         <p class="text-justificado">'.$value["descripcion2"].'</p>
                    </div>
                </div>
            </div>
        </section>';
            }
            else{
                                 echo'
<section class="templatemo-container light-gray-bg section-shadow-bottom" id="'.$value["scroll"].'">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title black">'.$value["titulo"].'</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                       <img src="'.$url.$value["img"].'">
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <p class="text-justificado">'.$value["descripcion"].'</p>
                        <h3 class="blue">Mapas de análisis de suelos:</h3>
                        <ol>
                        '.$value["lista"].'
                        </ol>
                    </div>
                </div>
            </div>
        </section>';
            }

           }

?>