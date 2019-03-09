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
          $full_image_url = $images[$j];
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

<div class="main-container" >

  <div id="left " class="d-none d-md-block no-mar-no-pad menu_div column " style=";">
    <header style="">
    <nav>
        <div id="" class="top-left " style="" >

            <a href="<?=get_home_url();?>"    style="display: block;   "       class="padding_small"   >
              <div class="" style="height:80px; width:100%;
              background-repeat: no-repeat;
              background-position: center center;
              background-image: url(<?php echo get_option('logo_src'); ?>);
               background-size: contain; margin-top:2em;">
              </div>
            </a>

            <div class="padding_small">
              <div class="" style="height: 0.1em; background-color:white;">            </div>
            </div>

          <div id="mob_nav" class="mob_menu   " style="">
            <div class="">
              <ul >
                <li>     <a class=" switch_page_to_about_me " href="#about_me_page">About</a>            </li>
                <li>     <a class=" switch_page_to_my_works" href="#projects">My works</a> </li>
                <li class="d-xl-none d-block">     <a class=" switch_page_to_what_is_branding" href="#what_is_branding">Branding  </a>           </li>
                <li class="d-xl-block d-none">     <a class=" switch_page_to_what_is_branding" href="#what_is_branding">What is branding?  </a>           </li>
                <li>     <a href="#contact">Contact</a> </li>
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

  <div id="small_nav" class=" d-block d-md-none no-mar-no-pad   " style="">
    <nav class=" small_nav" style="position:fixed; width:100%; z-index: 155;">
      <div id="" class="" style=" width:100%;display:flex;align-items: center;
      justify-content: space-evenly;" >

      <a class="small_logo " href="<?=get_home_url();?>"
        style="    "          >
        <div class="" style="height:1.4em; width:2em;
        background-repeat: no-repeat;
        background-position: center center;
        background-image: url(<?php echo get_option('logo_src'); ?>);
        background-size: contain; ">
      </div>
    </a>

    <a class="padding_small switch_page_to_about_me " href="#what_is_branding">About</a>
    <a class="padding_small switch_page_to_my_works" href="#projects">My works</a>
    <a class="padding_small switch_page_to_what_is_branding" href="#what_is_branding">Branding</a>
    <a class="padding_small" href="#contact">Contact</a>

  </div>
</nav>
</div>

<div id="right" class="no-mar-no-pad bottom">
  <div class="se-pre-con"></div>

    <div id="super_top" class="">    </div>

    <div class="container-fluid main-background column " style="">
      <div class="row ">

        <div id="introduction-container" class="col-md-12 background_color    "
        style="display:flex; justify-content: center; flex-direction: column;">
          <div class="text_2nd_color row"  style="padding-bottom:0;">
            <div class="col-xl-12" style="padding:0;    margin-top: 10vh;">
              <div class="padding_small" style="">
                <div class="" style="">
                  <div class="INTRO padding_large" style=" line-height:1.8em;
                  display:flex;justify-content:center;flex-wrap: wrap;
                  " data-lining data-effect="slideIn"
                  data-auto-resize
                  data-lining data-auto-resize>

                  <div class="text-center" style="max-width:800px;">
                    <h2 style="">
                      My name is Milo David. I'm a professional
                    </h2>

                    <p></p>
                      <h1 style="">
                      graphic designer and
                      coder.
                    </h1>
                    <p></p>

                    <h3>
                    I design brand identities and develop modern websites for small and medium-sized business.
                    My job consists of constantly solving problems by making thinking visual.
                    </h3>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="what_is_branding" class="col-md-12 background_color" >
          <div id="what_is_branding_href" class="SEPARATOR_TITLE"> <div>BRANDING</div> </div>
          <div id="" class="content_styling" style="width:100%;">


            <?php

            wp_reset_query();
            wp_reset_postdata();


            $child_pages = new WP_Query( array(
                'post_type'      => 'page' // set the post type to page
            ) );

            if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();
                if ( !empty( get_the_title() ) ){
                  $title_ = apply_filters( 'the_title', get_the_title() );
                  // echo $title_;
                  if($title_ ==   'Case Study' ){
                      the_content();
                  }
                }
            endwhile; endif;

            wp_reset_query();
            wp_reset_postdata();


            ?>

          </div>
        </div>

        <div id="about_me_page" class="col-md-12 background_color">
          <div id="" class="SEPARATOR_TITLE"><div> About me</div> </div>
          <div id="" class="content_styling" style="width:100%;">

            <?php

            wp_reset_query();
            wp_reset_postdata();


            $child_pages = new WP_Query( array(
                'post_type'      => 'page' // set the post type to page
            ) );

            if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();
                if ( !empty( get_the_title() ) ){
                  $title_ = apply_filters( 'the_title', get_the_title() );
                  // echo $title_;
                  if($title_ !=   'Case Study' ){
                    the_content();
                  }
                }
            endwhile; endif;

            wp_reset_query();
            wp_reset_postdata();


            ?>

            </div>
        </div>


        <div class="col-xl-12    my_works_page  content-feed background_color">
            <div id="projects" class="projects   " style="width: 100%; margin: 0 auto;">
              <div class=" ">

                <div class="   no-pad-left-right margin-bottom " style="">
                  <div class="col-lg-12 row" style="margin-top:1em;">
                    <div class=" my_projects SEPARATOR_TITLE" style="">
                    <div>  My works  </div>
                  </div>

                  </div>
                  <div class="">
                    <div class="">

                      <div class="row padding_small">


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

            <div class="col-xl-12 col-lg-12 background_color     my_works_page"  id=" " style="position:relative;">
              <div id="post_t" class="">           </div>
              <div id="contento" class="background_light  " style="margin-top:1em;">

                <div class="row " style="border-top: 1px solid #ff5722; ">


                  <div id="next_project" class="next_project col-xl-4 col-lg-4 col-md-4 col-sm-2 col-1 wrapper-control">
                    <a class="carousel-control-prev control-posts" data-target="" role="button"
                      href="#post_t"
                      style="">
                    <span class="carousel-control-prev-icon" aria-none="true">
                    </span>
                    <p class="d-md-block d-none">
                      PREVIOUS PROJECT
                    </p>
                    </a>
                 </div>

                 <h3  class="padding_small post_title col-xl-4 col-lg-4 col-md-4 col-sm-8 col-10 " style="text-align:center;text-transform: uppercase;
                 letter-spacing: 0.1em;">
                   POST TITLE
                 </h3>

                 <div id="prev_project" class="prev_project col-xl-4 col-lg-4 col-md-4  col-sm-2 col-1 wrapper-control">
                   <a class="carousel-control-next control-posts" data-target="" role="button"
                   href="#post_t"
                   style="">
                   <p class="d-md-block d-none">
                     NEXT  PROJECT
                   </p>
                   <span class="carousel-control-next-icon" aria-none="true">
                   </span>
                 </a>
                 </div>
                </div>


                <div class="row" style="border-bottom: 1px solid #ff5722;">
                  <div class="col-xl-4 background_color" style="padding-left:0;padding-right: 0;">
                    <div class="background_color padding_medium">
                      <div class="scroll_content padding_medium row" style="">

                        <div class="paste_content_wrap" >
                          <p id="" class="summary" style="margin-bottom:2em;">
                            POST SUMMARY
                          </p>
                          <p id="paste_content" class="paste_content collapse"
                          >
                            POST CONTENT
                          </p>
                          <p class="asd" style="height:1em;"></p>
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
                          <div class="background_color d-lg-none d-block" style="text-align:center;padding-top:1em;text-transform:uppercase;">
                            Galleries
                          </div>
                          <div class="flex-blocked" style="display:flex; width:100%;">
                            <div class="background_color padding_small d-none d-lg-block" style="padding-left:2em;padding-top:2em; min-height:100%;border-right:2px solid lightgrey;">
                              Galleries
                            </div>
                            <div class="  padding_medium warp_in_gallery_titles background_color" style="width:100%;">
                            </div>
                          </div>
                        </div>
                      </div>

                    <section id="Galeria_nr_0" class="row galleries" style="display:flex">
                      <section class="col-md-12">
                          <div class="bd-example gallery_wrapper">
                            <div id="nav__0" class="carousel slide" data-ride="carousel" data-interval="5000">

                              <div class="">
                                <ol class="carousel-indicators ">
                                </ol>
                              </div>

                              <div class="carousel-inner" role="listbox">
                              </div>

                              <a class="carousel-control-prev" data-target="#nav__0" role="button" data-slide="prev"
                                style="background-color:rgba(255, 255, 255, 0.38);">
                                <span class="carousel-control-prev-icon" aria-none="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>

                              <a class="carousel-control-next" data-target="#nav__0" role="button" data-slide="next"
                                style="background-color:rgba(255, 255, 255, 0.38);">
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



              <div class="col-md-12 padding_large background_color">
                <div id="contact" class="SEPARATOR_TITLE">
                  <div>  Contact </div>
                </div>
                <div class="contact row" style="">

                  <h4 class="col-md-12" style="width:100%; text-align: center; display:block;font-weight:500;">
                    <div class="padding_small" style="display:flex; justify-content:center;">

                    Please fill out the quick form or email me and I will be in touch with lightening speed.

                  </div>
                  </h4>

                  <div class="col-lg-6">

                  <div class="" style="display:flex; justify-content:center;">
                    <div class="">
                      <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
                    </div>
                  </div>

                </div>

                <div class="col-lg-6">
                <div class="" style="display:flex; justify-content:center;">
                  <div class="col-md-12 padding_small">
                    <p>
                      Milo David Art & Design Limited
                    </p>
                    <a class="intro_button" href="<?= get_option('mytel')?>"> <p><?= get_option('mytel')?>  </p> </a>
                    <p></p>
                    <a class="intro_button" href="mailto:design@milodavid.com"> <p>design@milodavid.com</p> </a>
                    <p>
                      Working hours:
                    </p>
                    <p>Monday-Saturday: 8.00 am - 8.00 pm</p>
                    <p>Based in: Coventry</p>
                  </div>
                </div>
              </div>


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
