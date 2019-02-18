<?php get_header(); ?>



<div class="container-fluid main-background background_color" style="margin-top:5em;">

  <div class="row">

    <div class="col-md-12 row back-colored" style="display:flex;">

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

    <div class="col-lg-8 row cont-padding">

      <?php $box_color = 'rgba(50,50,50,0.7)' ?>

      <style media="screen">

      .back-colored{background: linear-gradient(0deg, rgba(50,50,50,0.9), rgba(50,50,50,0.95)  ),
      url('http://milodavid.local/wp-content/uploads/2019/02/Geo-Marquetry-9.jpg') repeat local center ;  }

      .back-colored-art{
      background: linear-gradient(0deg, <?=$box_color?> , <?=$box_color?>  ),
      url('http://milodavid.local/wp-content/uploads/2019/02/panel-art.jpg') repeat local center ;   }

      .back-colored-design{
      background: linear-gradient(0deg, <?=$box_color?>  , <?=$box_color?>  ),
      url('http://milodavid.local/wp-content/uploads/2019/02/panel-design.jpg') repeat local center;    }

      .back-colored-programm{
      background: linear-gradient(0deg, <?=$box_color?> , <?=$box_color?>  ),
      url('http://milodavid.local/wp-content/uploads/2019/02/panel-programming.jpg') repeat local center;   }

      </style>

        <div class="" style="width: 100%; margin: 0 auto;">
          <div class="padding_small">

            <div class="   no-pad-left-right margin-bottom " style="">
              <div class="back-colored-design padding_large" style="">
                <h2 class=" text_2nd_color">
                  DESIGN
                </h2>
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
