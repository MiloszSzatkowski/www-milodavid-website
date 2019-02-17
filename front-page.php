<?php get_header(); ?>

<div class="container-fluid">
  <div class="" style="display:flex; justify-content:space-between">
    <div class="" style="display:flex;">
      <img src='images/portrait-library.jpg' style="height:10em;">
      <div class="" style="padding: 1em;">
        <p style="font-size:3em;font-weight:900; ">MILO DAVID  <p> <p> I turn ideas into finished products. </p>
      </div>
    </div>
      <div class="" style="width:50%;display:flex; justify-content:flex-end;">
        <div class="main-navigation-element">          <p> art. </p>        </div>
        <div class="main-navigation-element">          <p> design. </p>        </div>
        <div class="main-navigation-element">          <p> programming. </p>        </div>
        <div class="main-navigation-element">          <p> about. </p>        </div>
        <div class="main-navigation-element">          <p> contact. </p>        </div>
      </div>
  </div>

</div>

<div class="container-fluid main-background background_color">
  <div class="">
    <div class="full-device-height-width">

      <!-- ************************* intro -->
      <!-- ************************* intro -->
      <!-- ************************* intro -->

        <div class="" style="width:100%; display:flex;padding:0 10vw 0 10vw;">
          <div class="padding_large"  style="padding-bottom:0; max-width: 1200px;">
            <div class="" style="">
              <div class="padding_small" style="display:flex; justify-content: flex-start;">
                  <div class="" style="padding-left: 1em;">
                    <div class="" style="font-size:1.8em; line-height:1.8em;">
                      <?php get_option('introduction') ?>
                    </div>
                  </div>
                  <div class="scroll_down padding_small" data-scroll="#" style="margin-left:5vw;">
                    <img src="/images/arrow_down_png.png" style="width:2em;auto;" alt="">
                  </div>
              </div>
            </div>
          </div>
        </div>

      <!-- elaboration   ******************* -->
      <!-- elaboration   ******************* -->
      <!-- elaboration   ******************* -->

        <div class="" style="width: 100%; margin: 0 auto; padding:5vw 10vw 0 10vw;">
          <div class="padding_large">

            <div class="   no-pad-left-right margin-bottom" style="">
              <div class="back-colored-design padding_large" style="">
                <h2 class=" text_2nd_color">
                  DESIGN
                </h2>
              </div>
              <div class="padding_large">
                <h3>
                  BRAND IDENTITY
                </h3>
                <hr>
                <blockquote >
                  A brand is the set of expectations, memories, stories and relationships that,
                  taken together, account for a consumer's decision to choose one product or service over another.
                  <p>Seth Godin</p>
                </blockquote>
                <p>
                  Some of these items are the name, logo, tone, tagline, typeface, and shape that create an appeal.
                  Brand Identity is the message the consumer receives from the product, person, or thing.
                  The brand identity will connect product recognition.
                  Setting guidelines and consistency.
                  Consistency in identity projects the corporate culture that surrounds the product.
                </p>
                <p>These are some of the questions we will be discussing. </p>
              </div>
            </div>

            <div class="  no-pad-left-right margin-bottom" style="">
              <div class="back-colored-programm padding_large" style="">
                <h2 class=" text_2nd_color">
                  PROGRAMMING
                </h2>
              </div>
            </div>

          <div class="no-pad-left-right margin-bottom" style="">
            <div class=" back-colored-art padding_large" style="">
              <h2 class=" text_2nd_color">
                ART
              </h2>
            </div>
          </div>

          </div>
        </div>

      </div>

    </div>
  </div>
</div>


<script type="text/javascript" src="js/components.js"></script>

</body>

<?php get_footer();?>
