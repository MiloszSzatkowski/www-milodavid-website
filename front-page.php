<?php get_header(); ?>

<div class="container-fluid main-background " style="margin-top:4.5em;">

  <div class="row ">

    <div class="col-md-12 row back-colored box-shadow" style="display:flex;">

      <div class=" col-md-12 no-pad-left-right" style="padding-right:0!important;">
        <img class="img-responsive d-block d-md-none"
        src="<?=get_option('mb_banner_photo')?>" alt="" style="
        padding-right:0; margin: 0;
         padding: 0; width:100%;">
      </div>

      <div class="col-md-3 d-none d-md-block" style="height:100%;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      background-image:url(<?=get_option('banner_photo')?>)">
      </div>

      <div class="col-lg-5 col-md-9"  style="padding-bottom:0; max-width: 1200px;">
        <div class="" style="">
          <div class="padding_small" style="display:flex; justify-content: flex-start;">
            <div class="" style="padding-left: 1em;">
              <div class="" style="font-size:1.8em; line-height:1.8em;">
                <?=get_option('introduction')?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 padding_small d-none d-lg-block" style="line-height: 3em; color:grey;">
        <?=get_option('my_offer')?>
      </div>

    </div>

    <div class="col-xl-8 row cont-padding content-feed">

      <?php $box_color = 'rgba(10,10,10,0.5)' ?>

      <style media="screen">

      .back-colored{background: linear-gradient(0deg, rgba(50,50,50,0.9), rgba(50,50,50,0.95)  ),
      url('http://milodavid.local/wp-content/uploads/2019/02/Geo-Marquetry-9.jpg') repeat local center ;  }

      .back-colored-art{
      background: linear-gradient(90deg, <?=$box_color?> ,  rgba(0,0,0,0.95), rgba(0,0,0,0.95), <?=$box_color?>  ),
      url('http://milodavid.local/wp-content/uploads/2019/02/panel-art.jpg') repeat local center ;
      background-size: cover;
      text-align: center;
    }
      .back-colored-art h2{font-size: 2em;}

      .back-colored-design{
      background: linear-gradient(90deg, <?=$box_color?>  , rgba(0,0,0,0.85), rgba(0,0,0,0.85), <?=$box_color?>  ),
      url('http://milodavid.local/wp-content/uploads/2019/02/panel-design.jpg') repeat local center;
      background-size: cover;
      text-align: center;
      }
    .back-colored-design h2{font-size: 2em;}

      .back-colored-programm{
      background: linear-gradient(90deg, <?=$box_color?> , rgba(0,0,0,0.95), rgba(0,0,0,0.95), <?=$box_color?>  ),
      url('http://milodavid.local/wp-content/uploads/2019/02/panel-programming.jpg') repeat local center;
      background-size: cover;
      text-align: center;
     }
      .back-colored-programm h2{font-size: 2em;}

      </style>

        <div class="background_color box-shadow bor-rad" style="width: 100%; margin: 0 auto;">
          <div class="padding_small ">

            <div class="   no-pad-left-right margin-bottom " style="">
              <div class="">
                <div class="">

                  <div class="row padding_small">

                    <div class="col-lg-4 back-colored-design padding_medium"
                    style="min-height:100%;display:flex;justify-content: center; flex-direction: column;">
                      <h2 class=" text_2nd_color" style="">
                        DESIGN
                      </h2>
                    </div>

                    <div class="col-lg-8 " >
                      <h2 class=" d-none d-lg-block" style="text-align:center;">
                        MY PROJECTS
                      </h2>
                      <h2 class=" d-block d-lg-none" style="text-align:left; padding-top:1em;">
                        MY PROJECTS
                      </h2>
                      <hr>
                      <div class="row " style="margin-top:-2em; padding-left:1em; padding-right:1em;">

                        <div class="col-md-12 mar-bottom padding_small"
                        style="background-image:url(https://picsum.photos/200)">
                          <a href="#" class="" style="background-color:rgba(0,0,0,0.7)"> Cristalstone adasda asdasd</a>
                        </div>

                        <div class="col-md-12 mar-bottom padding_small"
                        style="background-image:url(https://picsum.photos/200)">
                          <a href="#" class="" style="background-color:rgba(0,0,0,0.7)"> Cristalstone adasda asdasd</a>
                        </div>

                      </div>
                    </div>

                  </div>

                  <div class="">
                    <div class="background_color_2 bor-rad" style="margin-top:1em;">
                      <h3 class="padding_small" style="text-align:center;">
                        CRISTALSTONE
                      </h3>
                      <div class="row">
                        <div class="col-md-12" style="">
                          <div class="background_light padding_large" style="min-height:100%;">
                            <h3 style="padding-bottom:1em;">introduction</h3>
                            Lorem ipsum dolor sit amet, consectetur
                            Lorem ipsum dolor sit amet, consectetur
                            Lorem ipsum dolor sit amet, consectetur
                            Lorem ipsum dolor sit amet, consectetur
                          </div>
                        </div>

                        <div class="col-md-12" style="">
                          <div class="background_darker padding_small d-md-none d-block" style="text-align:center;">
                            Services:
                          </div>
                          <div class="flex-blocked" style="display:flex; width:100%;">
                            <div class="background_darker padding_small d-none d-md-block" style="min-height:100%;">
                              Services:
                            </div>
                            <div class="background_darker padding_small" style="width:100%;">
                              <a href="#">asd</a> | <a href="#">bcd</a>
                              <a href="#">asd</a> | <a href="#">bcd</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- GALERIE!!!!!!!!!!!!!!!!!!!!!!! -->
                      <div class="">


<style media="screen">
  .gallery_img{
    height:75vh;
    background-position: center center;
    background-repeat: no-repeat;
  }
</style>

<section id="Galeria_nr_0" class="row galleries" style="display:flex">
<section class="col-md-12">
    <div class="bd-example galeria_duza_kontener">
      <div id="nawigacja_karuzeli_galerii_duzej_0" class="carousel slide" data-ride="carousel" data-interval="5000">

        <ol class="carousel-indicators">

              <div data-target="#nawigacja_karuzeli_galerii_duzej_0" data-slide-to="0" class="active" style="bottom:0%;">
                <img src="http://milosciszaman.pl/wp-content/uploads/2017/12/22281935_1446576892085878_6620871302545168209_n-150x150-50x50.jpg"
                alt="" style="height:5vh; margin-left:0.2em; margin-right:0.2em;">
              </div>


              <div data-target="#nawigacja_karuzeli_galerii_duzej_0" data-slide-to="1" class="" style="bottom:0%;">
                <img src="http://milosciszaman.pl/wp-content/uploads/2017/12/23844862_1491420734268160_1616744753120400098_n-1-150x150-50x50.jpg"
                alt="" style="height:5vh; margin-left:0.2em; margin-right:0.2em;">
              </div>

        </ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <img id="" class="d-block img-fluid gallery_img" data-src="" alt=""
            src="" data-holder-rendered="true"
            style="background-image:url(http://milosciszaman.pl/wp-content/uploads/2017/12/22281935_1446576892085878_6620871302545168209_n.jpg);">
            <div class="carousel-caption d-md-block opis_karuzela black_high">
              <!-- <h3 style="transform:translateY(-10px);color:black; font-size:1em; text-shadow:0;"></h3> -->
              <p></p>
            </div>
            </div>

          <div class="carousel-item">
            <img id="" class="d-block img-fluid gallery_img" data-src="" alt=""
            src="" data-holder-rendered="true"
            style="background-image:url(http://milosciszaman.pl/wp-content/uploads/2017/12/22281935_1446576892085878_6620871302545168209_n.jpg);">
            <div class="carousel-caption d-md-block opis_karuzela black_high">
            <!-- <h3 style="transform:translateY(-10px);color:black; font-size:1em; text-shadow:0;"></h3> -->
            <p></p>
            </div>
          </div>

            <div class="carousel-item">
              <img id="" class="d-block img-fluid gallery_img" data-src="" alt=""
              src="" data-holder-rendered="true"
              style="background-image:url(http://milosciszaman.pl/wp-content/uploads/2017/12/22281935_1446576892085878_6620871302545168209_n.jpg);">
              <div class="carousel-caption d-md-block opis_karuzela black_high">
              <!-- <h3 style="transform:translateY(-10px);color:black; font-size:1em; text-shadow:0;"></h3> -->
              <p></p>
              </div>
            </div>

        </div>

        <a class="carousel-control-prev" data-target="#nawigacja_karuzeli_galerii_duzej_0" role="button" data-slide="prev"
          style="">
          <span class="carousel-control-prev-icon" aria-none="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" data-target="#nawigacja_karuzeli_galerii_duzej_0" role="button" data-slide="next"
          style="">
          <span class="carousel-control-next-icon" aria-none="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
</section>
</section>

<div class="row">
  <div class="col-md-12" style="">
    <div class="background_darker padding_small d-md-none d-block" style="text-align:center;">
      Services:
    </div>
    <div class="flex-blocked" style="display:flex; width:100%;">
      <div class="background_darker padding_small d-none d-md-block" style="min-height:100%;">
        Services:
      </div>
      <div class="background_darker padding_small" style="width:100%;">
        <a href="#">asd</a> | <a href="#">bcd</a>
        <a href="#">asd</a> | <a href="#">bcd</a>
      </div>
    </div>
  </div>
  </div>
</div>


                      </div>
                    </div>
                  </div>

                  <?php
                    $args = array( 'post_type' => 'design', 'posts_per_page' => 50 );
                    $loop = new WP_Query( $args );
                    $ind = 0;
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <?php echo the_title() ;?>

                   <?php $ind++; endwhile; ?>
                </div>
              </div>

              <div class="padding_large">
                <?=get_option('des_intro')?>
              </div>
            </div>

              <div class="   no-pad-left-right margin-bottom " style="">
                <div class="back-colored-design padding_large" style="">
                  <h2 class=" text_2nd_color">
                    PROGRAMMING
                  </h2>
                </div>
                <div class="padding_large">
                  <?=get_option('prog_intro')?>
                </div>
              </div>

              <div class="   no-pad-left-right margin-bottom " style="">
                <div class="back-colored-art padding_large" style="">
                  <h2 class=" text_2nd_color">
                    ART
                  </h2>
                </div>
                <div class="padding_large">
                  <?=get_option('art_intro')?>
                </div>
              </div>

          </div>
        </div>

      </div>

      <div class="col-md-4" >
      </div>

    </div>
</div>

</body>

<?php get_footer();?>
