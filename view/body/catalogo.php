  
  <!-- Start main-content -->
  <div class="main-content clearfix">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="images/_catalogo/parallax.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Catálogo de Produtos</h3>
              <ul class="list-inline text-white">
                <li><a href="?p=index"><span class="text-white">Home</span></a> /</li>
                <li><span class="text-gray">Catálogo</span></li>
              </ul>
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
              <div id="grid" class="gallery-isotope grid-3 gutter">
                  
                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <a href="?p=piano_cauda">
                        <div class="flexslider-wrapper" style="border: 1px solid #000;">
                          <div class="flexslider">
                            <ul class="slides">
                              <?php
                                   //GALERIA PIANO DE CAUDA
                                   for ($i=1;$i<=3;$i++){

                                       echo "<li><img src='images/_catalogo/_piano_cauda/_demonstracao/".$i.".png' alt=''></li>";
                                   }
                               ?>
                            </ul>
                          </div>
                        </div>
                      </a>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="?p=piano_cauda" target="_self"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                    <a href="?p=piano_cauda"><h4 class="text-center mt-15 mb-40">Piano de Cauda</h4></a>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                      <a href="?p=piano_vertical">
                        <div class="flexslider-wrapper" data-direction="vertical"  style="border: 1px solid #000;">
                          <div class="flexslider">
                            <ul class="slides">
                              <?php
                                   //GALERIA PIANO VERTICAL
                                   for ($i=1;$i<=3;$i++){

                                       echo "<li><img src='images/_catalogo/_piano_vertical/_demonstracao/".$i.".png' alt=''></li>";
                                   }
                               ?>
                            </ul>
                          </div>
                        </div>
                      </a>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="?p=piano_vertical"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                    <a href="?p=piano_vertical"><h4 class="text-center mt-15 mb-40">Piano Vertical</h4></a>
                </div>
                <!-- Portfolio Item End -->
                  
                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                      <a href="?p=piano_digital">
                        <div class="flexslider-wrapper" style="border: 1px solid #000;">
                          <div class="flexslider">
                            <ul class="slides">
                              <?php
                                   //GALERIA PIANO DIGITAL
                                   for ($i=1;$i<=3;$i++){

                                       echo "<li><img src='images/_catalogo/_piano_digital/_demonstracao/".$i.".png' alt=''></li>";
                                   }
                               ?>
                            </ul>
                          </div>
                        </div>
                      </a>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="?p=piano_digital"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                    <a href="?p=piano_digital"><h4 class="text-center mt-15 mb-40">Piano Digital</h4></a>
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

<script>
    $(document).ready(function(){        
        THEMEMASCOT.widget.TM_masonryIsotop();
    });
</script>
