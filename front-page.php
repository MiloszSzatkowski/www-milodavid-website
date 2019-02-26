<?php get_header(); ?>

<script type="text/javascript">
var POSTS_ARR_CONTENT = [

<?php
$args = array( 'post_type' => array('design','art','programming'), 'posts_per_page' => 50 );
$loop = new WP_Query( $args );
$ind = 0;

while ( $loop->have_posts() ) : $loop->the_post();
?>
  <?php echo '{' ?>

  <?php echo 'ind:' ?>
  <?php echo $ind ?>
  <?php echo ',' ?>

  <?php echo 'content:' ?>
  <?php
  if ( !empty( get_the_content() ) ){
    $content = apply_filters( 'the_content', get_the_content() );
    echo json_encode( $content );
  } else {
     // echo 'null';
  } ;
  ?>
  <?php echo ',' ?>

  <?php echo 'summary:' ?>
  <?php
  if ( !empty( get_field('summary') ) ){
    $content = apply_filters( 'the_field', get_field('summary'));
    echo json_encode( $content );
  } else {
     // echo 'null';
  } ;
  ?>
  <?php echo ',' ?>

  <?php echo 'post_type:' ?>
  <?php
    echo json_encode( get_post_type() );
  ?>
  <?php echo ',' ?>

  <?php echo 'title:' ?>
  <?php
  if ( !empty( get_the_title() ) ){
    $content = apply_filters( 'the_title', get_the_title() );
    echo json_encode( $content );
  } else {
     // echo 'null';
  } ;
  ?>
  <?php echo ',' ?>

  <?php echo 'thumbnail:' ?>
  <?php
  if ( !empty( get_field('thumbnail') ) ){
    $content = apply_filters( 'the_field', get_field('thumbnail')['sizes']['medium'] );
    echo json_encode( $content );
  } else {
     // echo 'null';
  } ;
  ?>
  <?php echo ',' ?>

  <?php echo 'gallery_tags:' ?>
  <?php
  echo "[";
  for ($i=0; $i < 10; $i++) {
    echo "[";
    $current_id = 'text_' . ($i + 1);
    $current_gallery_id = 'gallery_' . ($i + 1);
    if ( !empty( get_field($current_id) ) ){
      $content = apply_filters( 'the_field', get_field( $current_id ) );
      echo json_encode( $content );
      $images = acf_photo_gallery($current_gallery_id, $post->ID);
      if (count($images)>0) {
        echo ",";
        for ($j=0; $j < count($images); $j++) {
          $full_image_url = $images[$j]['full_image_url'];
          echo json_encode($full_image_url);
          if ($j!= (count($images)-1)) {
            echo ",";
          }
        }
      }
    }
    echo "]";
    if ($i!=9) {
      echo ",";
    }
  }
  echo "]";
  ?>
  <?php echo '' ?>

  // END OF LOOP
  <?php echo '},' ?>

<?php

$ind++; endwhile;

?>
];

  console.log(POSTS_ARR_CONTENT);

</script>

<?php $box_color = 'rgba(10,10,10,0.5)';
  $gradient_baner = 'rgba(255,0,10,0.8)'
 ?>

<style media="screen">

.back-colored{background-color: <?=$gradient_baner?> }

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

<div class="main-container" >

  <div id="left " class="d-none d-md-block no-mar-no-pad menu_div column " style=";">
    <header style="">
    <nav>
        <div id="" class="top-left " style="" >

            <a href="<?=get_home_url();?>"
              style="    "          >
              <div class="" style="height:50px; width:100%;
              background-repeat: no-repeat;
              background-position: center center;
              background-image: url(http://milodavid.local/wp-content/uploads/2019/02/LOGO-1.png);
               background-size: contain; margin-top:2em;">
              </div>
            </a>

          <div id="mob_nav" class="mob_menu   " style="">
            <div class="">
              <ul>
                <li> <a href="#">Design</a> </li>
                <li> <a href="#">Programming</a> </li>
                <li> <a href="#">Art</a> </li>
                <li> <a href="#">About</a> </li>
                <li> <a href="#">Contact</a> </li>
              </ul>
              <div class="contact_inf d-none d-lg-block" style="">
                <p>  <?= get_option('mytel')?> </p>
                <p><a href="mailto:design@milodavid.com">design@milodavid.com</a> </p>
              </div>
            </div>
          </div>
        </div>
    </nav>
    </header>
  </div>

  <div id="right" class="no-mar-no-pad bottom">
    <div class="container-fluid main-background column " style="">
      <div class="row ">

        <div id="introduction-container" class="col-md-12 background_color   full-device-height "
        style="display:flex; justify-content: center; flex-direction: column; ">
          <div class="text_2nd_color row"  style="padding-bottom:0;">
            <div class="col-xl-2"></div>
            <div class="col-xl-8 col-lg-12" style="">
              <div class="padding_small" style="display:flex;">
                <div class="" style="padding-left: 1em;">
                  <div class="INTRO" style=" line-height:1.8em; transform: translateY(-10%)" data-lining data-effect="slideIn" data-auto-resize
                  data-lining data-auto-resize>

                  <h2>
                    My name is Milo David. I'm a professional
                  </h2>

                  <p></p>
                    <h1 style="padding: 1em 0 1em 0;">
                    graphic designer and
                    coder.
                  </h1>
                  <p></p>

                  <h3>
                    My job is to make you look good with new
                    branding, sell more products using unique
                    marketing materials and save time by
                    graphics automation.
                  </h3>


                  </div>
                  <a id="explore" class="button" name="button" href="#projects">
                      explore <i class="fas fa-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-2"></div>
          </div>
        </div>

        <div class="col-xl-12   content-feed background_color_2">
            <div id="projects" class="projects   " style="width: 100%; margin: 0 auto;">
              <div class=" ">

                <div class="   no-pad-left-right margin-bottom " style="">
                  <div class="">
                    <div class="">

                      <div class="row padding_small">

                        <div class="col-lg-12 row" >
                          <h2 class=" d-none d-lg-block my_projects" style="text-align:center; width:100%;">
                            MY PROJECTS
                          </h2>
                          <h2 class=" d-block d-lg-none my_projects" style="text-align:center; padding-top:1em; width:100%;">
                            MY PROJECTS
                          </h2>
                          <hr>

                          <div class="col-lg-12">
                            <div class="row">

                            </div>
                          </div>

                        </div>
                          <div class="row my_projects_items" style=" padding-left:1em; padding-right:1em;">
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- DIV BELOW - END OF CONTENT DIV -->
            </div>

            <div class="col-xl-12 col-lg-12"  id=" " style="position:relative;">
              <div id="post_t" class="">           </div>
              <div id="contento" class="background_color_2  " style="margin-top:1em;">

                <div class="row post_title_backg" >
                  <h3  class="padding_small post_title col-xl-4 col-lg-4 col-md-12 order-lg-2 order-md-3 order-sm-3 order-xs-3" style="text-align:center;">
                    POST TITLE
                  </h3>

                  <div id="next_project" class="next_project col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 order-lg-1 order-md-1 wrapper-control">
                    <a class="carousel-control-prev control-posts" data-target="" role="button"
                      href="#post_t"
                      style="">
                    <span class="carousel-control-prev-icon" aria-none="true">
                    </span>
                    <p>
                      PREVIOUS PROJECT
                    </p>
                    </a>
                 </div>
                 <div id="prev_project" class="prev_project col-xl-4 col-lg-4 col-md-6  col-sm-6 col-6 wrapper-control order-lg-3 order-md-2 order-sm-2 order-xs-2">
                   <a class="carousel-control-next control-posts" data-target="" role="button"
                   href="#post_t"
                   style="">
                   <p>
                     NEXT  PROJECT
                   </p>
                   <span class="carousel-control-next-icon" aria-none="true">
                   </span>
                 </a>
                 </div>
                </div>


                <div class="row">
                  <div class="col-xl-4 background_light" style="padding-left:0;padding-right: 0;">
                    <div class="background_light padding_medium">
                      <div class="scroll_content padding_medium row" style="">

                        <div class="paste_content_wrap" >
                          <p id="" class="summary" style="margin-bottom:2em;">
                            POST SUMMARY
                          </p>
                          <p id="paste_content" class="paste_content collapse"
                          >
                            POST CONTENT
                          </p>

                          <a class="collapsed button" data-toggle="collapse" href=""
                          data-target="#paste_content" style="margin-top:1em;font-size:0.7em;"
                           onload=""></a>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-xl-8" style="padding-left:0;padding-right: 0;">
                    <div class="row   ">
                        <div class="col-md-12" style="">
                          <div class="background_darker d-lg-none d-block" style="text-align:center;padding-top:1em;font-weight:900;">
                            Galleries
                          </div>
                          <div class="flex-blocked" style="display:flex; width:100%;">
                            <div class="background_darker padding_small d-none d-lg-block" style="padding-left:2em;padding-top:2em; min-height:100%;border-right:2px solid lightgrey;">
                              Galleries
                            </div>
                            <div class="  padding_medium warp_in_gallery_titles" style="">
                            </div>
                          </div>
                        </div>
                      </div>

                    <section id="Galeria_nr_0" class="row galleries" style="display:flex">
                      <section class="col-md-12">
                          <div class="bd-example galeria_duza_kontener">
                            <div id="nav__0" class="carousel slide" data-ride="carousel" data-interval="5000">

                              <div class="">
                                <ol class="carousel-indicators ">
                                </ol>
                              </div>

                              <div class="carousel-inner" role="listbox">
                              </div>

                              <a class="carousel-control-prev" data-target="#nav__0" role="button" data-slide="prev"
                                style="">
                                <span class="carousel-control-prev-icon" aria-none="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>

                              <a class="carousel-control-next" data-target="#nav__0" role="button" data-slide="next"
                                style="">
                                <span class="carousel-control-next-icon" aria-none="true"></span>
                                <span class="sr-only">Next</span>
                              </a>

                            </div>
                          </div>
                        </section>
                      </section>

                        <!-- DIV BELOW - END OF GALLERY -->
                      </div>



                  </div>


                </div>

                <!-- GALERIE!!!!!!!!!!!!!!!!!!!!!!! -->

              </div>

              <div class="row post_title_backg full-device-width" >
                <h3  class="padding_small post_title col-xl-4 col-lg-4 col-md-12 order-lg-2 order-md-3 order-sm-3 order-xs-3" style="text-align:center;">
                  POST TITLE
                </h3>

                <div id="next_project" class="next_project col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 order-lg-1 order-md-1 wrapper-control">
                  <a class="carousel-control-prev control-posts" data-target="" role="button"
                    href="#post_t"
                    style="">
                  <span class="carousel-control-prev-icon" aria-none="true">
                  </span>
                  <p>
                    PREVIOUS PROJECT
                  </p>
                  </a>
               </div>
               <div id="prev_project" class="prev_project col-xl-4 col-lg-4 col-md-6  col-sm-6 col-6 wrapper-control order-lg-3 order-md-2 order-sm-2 order-xs-2">
                 <a class="carousel-control-next control-posts" data-target="" role="button"
                 href="#post_t"
                 style="">
                 <p>
                   NEXT  PROJECT
                 </p>
                 <span class="carousel-control-next-icon" aria-none="true">
                 </span>
               </a>
               </div>
              </div>



            <!-- DIV BELOW - END OF MAIN PAGE ROW DIV -->
          </div>
        </div>

        <!-- containing content div -->

        <?php get_footer();?>
      </div>


 <!-- end of page div -->
</div>


</body>
