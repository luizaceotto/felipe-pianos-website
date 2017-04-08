 
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="images/_galeria/parallax.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Galeria de Fotos</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Gallery Grid 2 -->
    <section>
      <div class="container pb-20">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
            
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-2 gutter clearfix">
                

                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper"  data-direction="vertical">
                      <div class="flexslider">
                        <ul class="slides">
                          <?php
                               //GALERIA PIANOS
                               for ($i=1;$i<=10;$i++){

                                   echo "<li><a href='images/_galeria/_pianos/_grande/".$i.".jpg' title='Galeria de Fotos: Pianos'><img src='images/_galeria/_pianos/_pequena/".$i.".jpg' alt=''></a></li>";
                               }
                           ?>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#" style="color:white;"><i class="fa fa-picture-o"></i><p style="margin-left: -5px;">Pianos</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="text-center mt-15 mb-40">Pianos </h4>
                </div>
                <!-- Portfolio Item End -->
                  
                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper">
                      <div class="flexslider">
                        <ul class="slides">
                          <?php
                               //GALERIA EVENTOS
                               for ($i=1;$i<=4;$i++){

                                   echo "<li><a href='images/_galeria/_eventos/_grande/(".$i.").jpg' title='Galeria de Fotos: Eventos'><img src='images/_galeria/_eventos/_pequena/(".$i.").jpg' alt=''></a></li>";
                                   }
                           ?>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#" style="color:white;"><i class="fa fa-picture-o"></i><p style="margin-left: -7px;">Eventos</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="text-center mt-15 mb-40">Eventos e Locações de Pianos </h4>
                </div>
                <!-- Portfolio Item End -->
                  
                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper">
                      <div class="flexslider">
                        <ul class="slides">
                          <?php
                               //GALERIA RESTAURAÇÃO
                               for ($i=1;$i<=40;$i++){

                                   echo "<li><a href='images/_galeria/_restauracao/_grande/(".$i.").jpg' title='Galeria de Fotos: Restauração'><img src='images/_galeria/_restauracao/_pequena/(".$i.").jpg' alt=''></a></li>";
                               }
                           ?>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#" style="color:white;"><i class="fa fa-picture-o"></i><p style="margin-left: -20px;">Restauração</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="text-center mt-15 mb-40">Restauração de Pianos</h4>
                </div>
                <!-- Portfolio Item End -->
                  
                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper"  data-direction="vertical">
                      <div class="flexslider">
                        <ul class="slides">
                          <?php
                               //GALERIA TRANSPORTE
                               for ($i=1;$i<=6;$i++){

                                   echo "<li><a href='images/_galeria/_transporte/_grande/(".$i.").jpg' title='Galeria de Fotos: Transporte'><img src='images/_galeria/_transporte/_pequena/(".$i.").jpg' alt=''></a></li>";
                               }
                           ?>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#" style="color:white;"><i class="fa fa-picture-o"></i><p style="margin-left: -20px;">Transporte</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="text-center mt-15 mb-40">Transporte de Pianos</h4>
                </div>
                <!-- Portfolio Item End -->

              </div>
              <!-- End Portfolio Gallery Grid -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->


<script>
    $(document).ready(function(){        
        THEMEMASCOT.widget.TM_masonryIsotop();
    });
</script>