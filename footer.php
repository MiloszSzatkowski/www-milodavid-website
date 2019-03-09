</body>

 <?php wp_footer(); ?>

</html>


<style media="screen">
/* =Reset
-------------------------------------------------------------- */

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
    border: 0;
    font-family: inherit;
    font-size: 100%;
    font-style: inherit;
    font-weight: inherit;
    margin: 0;
    outline: 0;
    padding: 0;
    vertical-align: baseline;
}
html {
    font-size: 62.5%; /* Corrects text resizing oddly in IE6/7 when body font-size is set using em units http://clagnut.com/blog/348/#c790 */
    overflow-y: scroll; /* Keeps page centred in all browsers regardless of content height */
    -webkit-text-size-adjust: 100%; /* Prevents iOS text size adjust after orientation change, without disabling user zoom */
    -ms-text-size-adjust: 100%; /* www.456bereastreet.com/archive/201012/controlling_text_size_in_safari_for_ios_without_disabling_user_zoom/ */
}
body {
    background: #fff;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
    display: block;
}
ol, ul {
    list-style: none;
}
table { /* tables still need 'cellspacing="0"' in the markup */
    border-collapse: separate;
    border-spacing: 0;
}
caption, th, td {
    font-weight: normal;
    text-align: left;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content: "";
}
blockquote, q {
    quotes: "" "";
}
a:focus {
    outline: thin dotted;
}
a:hover,
a:active { /* Improves readability when focused and also mouse hovered in all browsers people.opera.com/patrickl/experiments/keyboard/test */
    outline: 0;
}
a img {
    border: 0;
}

/* main css */

.bg-white_{
  background-color: white;
}

.SEPARATOR_TITLE {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  background-color: inherit;
}

.SEPARATOR_TITLE:after, .SEPARATOR_TITLE:before{
  content: '';
  display: block;
  width: 10%;
  height: 0.1em;
  background-color: grey;
}

.SEPARATOR_TITLE div {
  /* transform: scale(1.2); */
  background-color: inherit;
  color: #8079fa;
  width: fit-content;
  text-align: center;
  padding: 1em;
  font-weight: 700;
  font-size: 2em;
  text-transform: uppercase;
  background-size: contain;
  background-attachment: fixed;
}

@media (max-width: 1000px) {
  .SEPARATOR_TITLE div {
    font-size: 1.5em;
  }
}
@media (max-width: 770px) {
  .SEPARATOR_TITLE {
    background-color: transparent;
    padding-top: 3em;
  }
  .SEPARATOR_TITLE div {
    font-size: 1.5em;
  }
}
#wpadminbar {
  display: none;
}
#right {
  scroll-behavior: smooth;
}
.paste_content_wrap a.collapsed:after {
  content: '+ Read More';
}
.paste_content_wrap a:not(.collapsed):after {
  content: '- Read Less';
}
.galleries .gallery_img {
  height: 62vh;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;
}

.gallery_wrapper{
  min-height: 62vh;
}

.galleries .active img {
  opacity: 0.9 !important;
  background-color: 0;
}
.galleries .carousel-indicators {
  top: 2em;
  max-height: 20%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  margin-left: 0;
  margin-right: 0;
}
.galleries .carousel-indicators :hover {
  opacity: 0.9 !important;
}
.galleries .carousel-indicators .active {
  background-color: transparent !important;
}
.galleries .carousel-indicators div img {
  height: 1em;
}
.galleries .carousel-control-next, .galleries .carousel-control-prev {
  width: 50%;
  height: 5%;
  background-color: rgba(0, 0, 0, 0.1);
}
 .carousel-control-next-icon {
  filter: invert(100%);
}
 .carousel-control-prev-icon {
  filter: invert(100%);
}

.carousel-control-prev p, .carousel-control-next p{
  color: grey;
}

.content_styling {
  padding: 3vw;
}
.content_styling p {
  font-size: 0.8em;
  padding: 1em 1em 1em 1em;
}
.content_styling b, .content_styling strong {
  font-weight: 700;
}
.content_styling img {
  cursor: pointer;
  width: 100%;
  height: auto;
}
.content_styling h2 {
  color: #8079fa;
}
.content_styling i, .content_styling em {
  font-style: italic;
}
.content_styling .center_block {
  padding-top: 2em;
  max-width: 800px;
  margin: 0 auto;
}
.content_styling .center_block b, .content_styling .center_block strong {
  font-weight: 700;
}
.full-page-modal {
  display: flex;
  justify-content: center;
  padding: 2vw;
  width: 100vw !important;
  height: 100vh;
  position: fixed;
  z-index: 160;
  background-color: rgba(0, 0, 0, 0.9);
  top: 0;
  left: 0;
}
.full-page-modal .close {
  position: absolute;
  top: 5px;
  right: 30px;
  font-size: 40px;
  cursor: pointer;
}
.intro_button {
  padding: 1em;
  color: white;
  display: block;
}
.intro_button p {
  font-size: 1.1em;
  font-weight: 500;
  padding: 1em;
  background-color: #8079fa;
  transition: background-color 0.2s linear;
}
.intro_button p:hover {
  color: white;
  background-color: #f36d90;
}
.intro_button:hover {
  color: white;
}


/* //INTRO */

.INTRO_BUTT .intro_button {
  padding: 1em;
  color: grey;
  display: block;
}
.INTRO_BUTT .intro_button p {
  font-size: 1.1em;
  font-weight: 500;
  padding: 1em;
  background-color: transparent;
  transition: background-color 0.2s linear;
}
.INTRO_BUTT .intro_button p:hover {
  color: white;
  background-color: #f36d90;
}
.INTRO_BUTT .intro_button:hover {
  color: white;
}

/* /// */

.red {
  color: red;
}
.INTRO h2 {
  font-size: 2vw;
  font-weight: 900;
  line-height: normal;
}
.INTRO h1 {
  padding: 0.9em 0 0.9em 0;
  font-size: 2vw;
  letter-spacing: 0.05em;
  font-weight: 900;
  color: #8079fa;
  text-transform: uppercase;
}
.INTRO h3 {
  font-size: 1em;
  padding-bottom: 1em;
}
.grad_1 {
  color: #8079fa;
}
.grad_2 {
  color: #f36d90;
}
@media (max-width: 1100px) {
  .INTRO h2 {
    margin-top:1em;
    font-size: 1em;
    line-height: normal;
  }
  .INTRO h1 {
    font-size: 1.3em;
    line-height: normal;
  }
  .INTRO h3 {
    font-size: 0.8em;
    line-height: normal;
  }
  .intro_button {
    padding: 0.2em;
  }
  .intro_button p {
    padding: 0.2em;
  }
}
.post_change_link {
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}
.post_change_link p {
  font-size: 0.8em;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}
.post_change_link img {
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -webkit-filter: grayscale(50%);
  /* Safari */
  filter: grayscale(50%);
}
.post_change_link :hover {
  cursor: pointer;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  color: white;
  background-color: #f36d90;
}
.post_change_link :hover p {
  color: white !important;
}
.post_change_link :hover img {
  transform: scale(1.1);
  -webkit-filter: grayscale(0%);
  /* Safari */
  filter: grayscale(0%);
}
.max-width-large {
  max-width: 1300px;
}
.hover-opacity {
  opacity: 1;
  transition: opacity 0.3s linear;
  -moz-transition: opacity 0.3s linear;
  -webkit-transition: opacity 0.3s linear;
}
.hover-opacity a {
  background: none !important;
}
.hover-opacity-par:hover .hover-opacity {
  opacity: 0.4;
}
.hover-opacity-par:hover {
  border: none;
}
.img-res {
  max-width: 100%;
}
.box-shadow {
  box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.5);
}
.bor-rad {
  border-radius: 20px;
}
.bor-rad-left {
  border-radius: 20px 0 0 20px;
}
.bor-rad-right {
  border-radius: 0 20px 20px 0;
}
.mar-bottom {
  margin-top: 1em;
}
.contact {
  min-height: 68vh;
  width: 100%;
}
.contact label {
  padding: 1em;
}
.contact p {
  width: 100%;
  padding: 0.3em;
}
.contact h3 {
  padding: 0.3em;
  font-weight: 500;
}
.contact a {
  padding: 0;
  font-size: 0.8em;
}
.wpcf7-form {
  width: 100%;
  padding: 0.5em;
}
.wpcf7-form p {
  padding: 0.5em;
}
.wpcf7 input[type="text"], .wpcf7 input[type="email"], .wpcf7 textarea {
  width: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  border-top: none;
  border-right: none;
  border-left: none;
  border-bottom: 2px solid #8079fa;
}
.wpcf7 textarea {
  height: 8em;
}
.wpcf7 label {
  padding: 0 1em 0 0;
  font-size: 0.8em;
}
.wpcf7 input[type="text"]:hover, .wpcf7 textarea:hover, .wpcf7 input[type="text"]:focus, .wpcf7 textarea:focus, .wpcf7 input[type="email"]:hover, .wpcf7 input[type="email"]:focus {
  border-top: none;
  border-right: none;
  border-left: none;
  outline: none;
  border-bottom: 2px solid #f36d90;
}
.wpcf7 input[type="text"]:focus, .wpcf7 textarea:focus, .wpcf7 input[type="email"]:focus {
  box-shadow: 0px 0px 1px 1px lightgrey;
}
.wpcf7 input[type="file"], .wpcf7 input[type="submit"] {
  width: 70%;
  background-color: rgba(255, 255, 255, 0.3);
}
.wpcf7 input[type="file"]:hover, .wpcf7 input[type="submit"]:hover {
  background-color: #8079fa;
  color: white;
}
.button {
  width: fit-content;
  padding: 0.8em;
  clear: both;
  float: none;
  margin: 1em 1em 2em 1em;
  font-size: 1.5em;
  background-color: #8079fa;
  border-radius: 1em;
  color: #f0f0f0;
  cursor: pointer;
}
.button:hover {
  box-shadow: 1px 1px 1px 1px black;
  background-color: #f36d90;
}
.menu_div {
  background: linear-gradient(0deg, #8079fa, #f36d90) repeat local center;
  z-index: 106;
  min-width: 17%;
}
.menu_div .contact_inf {
  position: absolute;
  bottom: 0;
  left: 1%;
}
.menu_div .contact_inf a, .menu_div .contact_inf p {
  font-size: 12px;
  color: #f0f0f0;
}
.menu_div .mob_menu {
  padding: 1em;
}
.menu_div .mob_menu ul {
}
.menu_div .mob_menu ul li {
  width: 100%;
  padding: 0.2em;
}
.menu_div .mob_menu ul li :hover {
  background-color: rgba(0, 0, 0, 0.5);
  color: #f0f0f0;
  text-decoration: none;
}
.menu_div .mob_menu ul li a {
  color: #f0f0f0;
  font-size: 1.5em;
  text-transform: capitalize;
  font-weight: 300;
}
.small_nav {
  background-color: #323232;
}
.small_nav a:not(.small_logo) {
  text-transform: uppercase;
  color: white;
  border-bottom: 2px solid transparent;
}
.small_nav a:not(.small_logo):hover {
  border-bottom: 2px solid white;
  background-color: black;
}
@media only screen and (max-width: 1500px) {
  .menu_div .mob_menu ul li a {
    font-size: 1em;
  }
  .small_nav a{
    font-size: 0.8em;
  }
}
.post_title_backg {
  background-color: darkgrey;
}
.post_title_backg p, .post_title_backg a, .post_title_backg h3 {
  color: white;
}
.post_title_backg a {
  background-color: transparent;
}
.post_title_backg .wrapper-control :hover {
  background-color: #f36d90;
}
html {
  height: 100%;
  overflow: hidden;
}
body, .main-container {
  height: 100%;
  overflow: hidden;
  margin: 0px;
  display: flex;
  box-sizing: border-box;
}
.column {
  height: 100%;
  display: flex;
  flex-direction: column;
}
#left {
  flex-shrink: 0;
}
.top-left {
  flex-shink: 0;
}
.top-right {
  flex-shrink: 0;
  display: inline-flex;
}
.bottom {
  flex-grow: 1;
  overflow-y: auto;
  overflow-x: hidden;
}
.no-mar-no-pad {
  margin: 0;
  padding: 0;
}
.max-width {
  max-width: 900px;
}
.cont-padding {
  padding: 4vw;
}
u {
  text-decoration-color: grey;
}
a {
  color: #0a0a0a;
  text-decoration: none;
  transition: all 0.2s;
}
a:hover {
  color: inherit;
  text-decoration: none !important;
  cursor: pointer;
}
.a_hovered {
  background-color: rgba(0, 0, 0, 0.2);
  color: white;
  text-decoration: none;
}
.margin-bottom {
  margin-bottom: 1em;
}
.padding_small {
  padding: 1em;
}
.padding_medium {
  padding: 2em;
}
.padding_large {
  padding: 3em;
}
.inline-navigation {
  display: inline-block;
  padding: 0.5em;
  margin: 0 0.2em 0.2em 0;
  background: rgba(255, 255, 255, 0.5);
  transition: all 0.3s;
}
.inline-navigation:hover {
  background-color: #f0f0f0;
  font-weight: 900;
}
.round-box {
  height: 100%;
  padding: 3vh;
  border-radius: 50% 50%;
}
.round-box div {
  padding: 3em;
}
html, body {
  color: #0a0a0a;
  font-family: Roboto, sans-serif;
  max-width: 100%;
  max-height: 100%;
  overflow-y: show;
  overflow-x: hidden;
  text-align: left;
}
.hiding {
  transition: all 1s;
  top: -5em;
}
hr {
  border: 0;
  padding: 1px;
  margin: 2px;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  margin-bottom: 2em;
}
.wrapper-control {
  min-height: 4em;
}
.control-posts {
  width: 100%;
}
p {
  font-size: 21px;
  line-height: 27px;
  font-weight: 300;
}
html {
  line-height: 27px;
  font-weight: 300;
  font-size: 21px;
  line-height: auto;
}
html h1 a, html h2 a, html h3 a, html h4 a, html h5 a, html h6 a {
  font-weight: 900;
}
html h1 {
  font-size: 27px;
  line-height: 35px;
  font-weight: 200;
}
html h2 {
  font-size: 26px;
  line-height: 30px;
  font-weight: 900;
}
html h3 {
  font-size: 25px;
  line-height: 28px;
}
html h4 {
  font-size: 24px;
}
html h5 {
  font-size: 23px;
}
html h6 {
  font-size: 22px;
}
blockquote {
  font-size: 22px;
  padding: 1em;
  max-width: 800px;
  margin-bottom: 2em;
  font-style: italic;
  background-color: rgba(240, 240, 240, 1);
}
blockquote strong {
  font-style: normal;
  line-height: 2em;
  color: grey;
}
.background_light {
  background-color: rgba(240, 240, 240, 1);
}
.background_darker {
  background-color: rgba(235, 235, 235, 1);
}
.no-pad-left-right {
  padding-left: 0;
  padding-right: 0;
}
div {
  color: inherit;
}
.full-device-height-width {
  width: 100vw;
  height: 100vh;
}
.full-device-height {
  height: 100vh;
}
.full-device-width {
  width: 100vw;
}
.full-height {
  height: 100%;
}
.full-width {
  width: 100%;
}
.center-both-xy {
  position: relative;
  float: left;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.center-x {
  width: 100%;
  text-align: center;
}
.container-fluid {
  padding: 0;
}
.background_color {
  background-color: #f5f5f5;
  color: #0a0a0a;
}
.background_color_2 {
  background-color: rgba(230, 230, 230, 1);
  color: #0a0a0a;
}
.text_color {
  color: #0a0a0a;
}
.text_2nd_color {
  color: #323232;
}
@media (max-width: 2500px) and (min-width: 1195px) {
  .scroll_content {
    max-height: 70vh;
    overflow-y: scroll;
  }
  .scroll_content ::-webkit-scrollbar {
    width: 10px;
  }
  .scroll_content ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
  }
  .scroll_content ::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
  }
}
@media only screen and (max-width: 970px) {
  .center_block{
    padding: 1em;
  }
  .center_block h2 strong:after{
    content: '';
    display: block;
    height: 1em;
    padding: 1em;
  }
  .post_title_backg{
    border-top: 27px solid transparent  !important;
  }
  #right{
    max-width:100vw;
    overflow-x: hidden;
  }
  .logo {
    margin-left: 0.5em;
    margin-right: 0.5em;
  }
  [class*="col-"] {
    margin-left: 0;
    margin-right: 0;
    padding-left: 0;
    padding-right: 0;
  }
  .row {
    margin-left: 0;
    margin-right: 0;
    padding-left: 0em;
    padding-right: 0em;
  }
  .content-feed {
    padding-left: 1em;
    padding-right: 1em;
  }
  .padding_small {
    padding: 0.5em;
  }
  .padding_medium {
    padding: 1em;
  }
  .padding_large {
    padding: 1.5em;
  }
  .post_title {
    padding: 2em;
    font-size: 1em;
  }
  p {
    font-size: 18px;
    line-height: 21px;
  }
  html {
    font-size: 18px;
    line-height: auto;
  }
  html h1 a, html h2 a, html h3 a, html h4 a, html h5 a, html h6 a {
    font-weight: 500;
  }
  html h1 {
    font-size: 30px;
    line-height: 28px;
  }
  html h2 {
    font-size: 26px;
    line-height: 30px;
    font-weight: 900;
  }
  html h3 {
    font-size: 25px;
    line-height: 28px;
  }
  html h4 {
    font-size: 24px;
  }
  html h5 {
    font-size: 23px;
  }
  html h6 {
    font-size: 22px;
  }
  .wrapper-control {
    padding: 0.2em;
    min-height: 4em;
  }
  .wrapper-control p {
    font-size: 0.8em;
  }
  .mob_menu li {
    animation-name: scrolling;
  }
}


</style>

<script type="text/javascript">
console.log('components.js loaded');

!function(t){t.fn.bcSwipe=function(e){var n={threshold:50};return e&&t.extend(n,e),this.each(function(){function e(t){1==t.touches.length&&(u=t.touches[0].pageX,c=!0,this.addEventListener("touchmove",o,!1))}function o(e){if(c){var o=e.touches[0].pageX,i=u-o;Math.abs(i)>=n.threshold&&(h(),t(this).carousel(i>0?"next":"prev"))}}function h(){this.removeEventListener("touchmove",o),u=null,c=!1}var u,c=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this}}(jQuery);

var CURRENT_POST_IND = 0;

jQuery(function($) {

  $(function() {
     $(".se-pre-con").fadeOut("slow");
  });

  $(document).ready(function() {

    // SimpleBar
    // $('.galleries').bcSwipe({ threshold: 50 });

    $('.content_styling img').on('click', function() {
      var that = this;
      var src = $(that).attr('srcset').split(' ')[0];
      console.log(src);
      $('body').append(
      '  <div class="modal-init full-page-modal" style="display:none;">' +
      '    <button type="button" class="close" aria-label="Close">' +
      '      <span aria-hidden="true">&times;</span>' +
      '    </button>' +
      '    <div id="" class="" style="background-image:url('+  src +
      '); background-size:contain;width:100%;height:100%;'+
      'background-repeat:no-repeat;background-position:center center;"></div>' +
      '  </div>'
      );
      $('.modal-init').fadeIn(400, function() {
      })
      $('.modal-init').on('click', function () {
        $('.modal-init').fadeOut(400, function() {
          $('.modal-init').remove();
        });
      })
    });


    $('.contact textarea').on('click', function () {
      var text_cont = $('.contact textarea').val();
      console.log(text_cont);
      var www = window.innerWidth;
      var text_w = '800px';
      additional_css = '';
      if (www < 1000) {
        text_w = '90%';
        additional_css = 'margin-top:5em;overflow-y:scroll;';
      }
      if (www < 900 ) { additional_css = additional_css + 'height:40%!important;'; }
      $('body').append(
      '  <div class="modal-init full-page-modal" style="display:none;z-index:170;">' +
      '    <button type="button" class="close" aria-label="Close" style="width:100%;height:100%;z-index:180;">' +
      '      <span aria-hidden="true" style="box-shadow:0px 0px 40px 40px green; font-size:1em;position:absolute;right:0;top:0;"><i class="fas fa-check"></i></span>' +
      '    </button>' +
      ' <textarea id="textarea_content" class="" style="'+
      'width:'+text_w+';height:90%;padding:2em; z-index:190; position:absolute;'+ additional_css +
      '" placeholder="Write your messege here. You can close this box by clicking outside of it." >'+
      text_cont+'</textarea>' +
      '  </div>'
      );
      $('.modal-init').fadeIn(400, function() {  $('.modal-init textarea').focus()    });
      // console.log(textarea_content);
      $('.close').on('click', function (e) {
        var textarea_content = $('#textarea_content').val();
          $('.modal-init').fadeOut(400, function() {
            $('.modal-init').remove();
            $('textarea').val(textarea_content);
          });
      });
    });

    //*********************************************
    //switching pages
    $('#what_is_branding').css('display', 'none');
    $('#about_me_page').css('display', 'none');

    var ab_me_on = false; var myw_on = true; var wh_brd_on = false;

    $('.switch_page_to_my_works').on('click', function (event) {
      if (!myw_on) {
        event.preventDefault();
        $('.se-pre-con').stop().fadeIn('fast', function() {
          $('#what_is_branding').fadeOut('fast');
          $('#about_me_page').fadeOut('fast');
          $('#introduction-container').fadeOut('fast');

          $('.my_works_page').fadeIn('fast', function () {
            document.getElementById('right').scrollTo(0,0);
            $('.se-pre-con').fadeOut('fast');
          });
        });

        ab_me_on = false;
        wh_brd_on = false;
        myw_on = true;
      }
    });

    $('.switch_page_to_about_me').on('click', function (event) {
      if (!ab_me_on) {
        event.preventDefault();
        $('.se-pre-con').stop().fadeIn('fast', function() {
          $('#what_is_branding').fadeOut('fast');
          $('.my_works_page').fadeOut('fast');
          $('#introduction-container').fadeOut('fast');

          $('#about_me_page').fadeIn('fast', function () {
            document.getElementById('right').scrollTo(0,0);
            $('.se-pre-con').fadeOut('fast');
          });
        });

        ab_me_on = true;
        wh_brd_on = false;
        myw_on = false;
      }
    });

    $('.switch_page_to_what_is_branding').on('click', function (event) {
      if (!wh_brd_on) {
        event.preventDefault();
        $('.se-pre-con').stop().fadeIn('fast', function() {
          $('.my_works_page').fadeOut('fast');
          $('#about_me_page').fadeOut('fast');
          $('#introduction-container').fadeOut('fast');

          $('#what_is_branding').fadeIn('fast', function () {
            document.getElementById('right').scrollTo(0,0);
            $('.se-pre-con').fadeOut('fast');
          });
        });

        ab_me_on = false;
        wh_brd_on = true;
        myw_on = false;
      }
    });

    //*********************************************

    $('.next_project').on('click', function () {

      if (CURRENT_POST_IND === POSTS_ARR_CONTENT.length-1) {
        CURRENT_POST_IND = 0;
      } else {
        CURRENT_POST_IND = CURRENT_POST_IND + 1;
      }
      console.log(CURRENT_POST_IND);

      deliver_(['post_titles', 'paste_title', 'paste_content', 'warp_in_gallery_titles',  'create_gallery'],CURRENT_POST_IND);
    });

    $('.prev_project').on('click', function () {

      if (CURRENT_POST_IND === 0) {
        CURRENT_POST_IND = POSTS_ARR_CONTENT.length-1;
      } else {
        CURRENT_POST_IND = CURRENT_POST_IND - 1;
      }
      console.log(CURRENT_POST_IND);
      deliver_(['post_titles', 'paste_title', 'paste_content', 'warp_in_gallery_titles',  'create_gallery'],CURRENT_POST_IND);
    });

    deliver_(['post_titles', 'paste_title', 'paste_content', 'create_gallery','warp_in_gallery_titles'],CURRENT_POST_IND);

  });

  var job_in_progress = false;

  var only_clicked = false;

  function deliver_(jobs, job_index) {


    if (!job_in_progress) {
      job_in_progress = true;


          $("#contento").fadeOut(200, function() {
            $("#contento").fadeIn(500, function() {
            })
          })

          setTimeout(function () {
            for (var i = 0; i < jobs.length; i++) {

              if (  jobs[i] == 'post_titles' ) {
                var fetch_projects = '';
                for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
                  var img = POSTS_ARR_CONTENT[j].thumbnail;
                  var ttl = POSTS_ARR_CONTENT[j].title;
                  var post_type = POSTS_ARR_CONTENT[j].post_type ;
                  var color_;

                  // console.log(POSTS_ARR_CONTENT[job_index].gallery_tags[df][0]);

                  var am_of_gal = '';
                  for (var df = 0; df < 10; df++) {
                    var temp_ass = POSTS_ARR_CONTENT[j].gallery_tags[df][0];
                    if (df === 0) {
                      if( temp_ass ) { am_of_gal =  am_of_gal + '<span style="display:none;">' + temp_ass + '</span>'; }
                    }
                    else {
                      if( temp_ass ) { am_of_gal =  am_of_gal + '<span style="display:none;">' + temp_ass + '</span>'; }
                    }
                  }


                  if (post_type == 'design') {
                    color_ = '#ff5722';
                  } else  if (post_type == 'programming') {
                    color_ = '#4caf50';
                  } else {   color_ = '#ff397d';   }

                  if ((j > 0) && (j !== POSTS_ARR_CONTENT.length)) {
                    if (POSTS_ARR_CONTENT[j-1].post_type !== POSTS_ARR_CONTENT[j].post_type) {
                      fetch_projects = fetch_projects + '<div class="col-md-12" style:"margin-top:1em;margin-bottom:1em;"><hr></div>';
                    }
                  }

                  fetch_projects = fetch_projects +
                  '<a class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 post_change_link d-block" href="#post_t" style="padding:1em;"' +
                  'data-index="' + POSTS_ARR_CONTENT[j].ind +
                  '">' +
                    '  <div class="padding_medium bg-white_" style=" height: 100%; border-top:1px solid ' + color_ +  ';">' +
                    '  <div><p style="display:block;clear:both;float:right;color:' + color_ +  ';">'+ post_type +'</p></div>' +
                    '  <div style="overflow:hidden;display:block;width:100%;"><img src="'+ img +'" alt="" style="width:100%;"></div>' +
                    '  <div class="">  <p style="padding-top:0.4em;">'+ ttl +'</p>  <p class="gall" style="color:'+ color_ +';position:absolute;"> '+ am_of_gal + ' </p>  '+
                    '     </div>           </div>          </a>';

                }
                $('.my_projects_items').html(fetch_projects);

                var sel; var short_interv;
                $(".post_change_link").on("mouseenter", function () {
                  if(window.innerWidth > 900){
                    var that = this;
                    sel = $(that).find('.gall');
                    // $(sel).fadeIn('fast');
                    // console.log(sel);
                    var inddd = 0;
                    short_interv = setInterval(function () {
                      if($(sel).children().eq(inddd).length){
                        $(sel).children().eq(inddd).fadeIn('slow', function () {
                          $(this).fadeOut('fast');
                        })
                        inddd++;
                      }else{
                        console.log('e');
                        inddd = 0;
                      }
                    }, 800);
                  }
                }).on("mouseleave", function () {
                  if(window.innerWidth > 900){
                  clearInterval(short_interv);
                  $(sel).children().css('display', 'none');
                  }
                });

                $('.post_change_link').on('click', function (event) {

                  var index_of_change = parseInt($(this).data("index"));
                  if (CURRENT_POST_IND !== index_of_change) {
                    CURRENT_POST_IND = index_of_change;
                    deliver_(['post_titles', 'paste_title', 'paste_content', 'warp_in_gallery_titles',  'create_gallery'],CURRENT_POST_IND);
                  }
                });
              }

              if ( jobs[i] == 'paste_title'  ) {
                for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
                  if (j === job_index) {
                    $('.post_title').html(POSTS_ARR_CONTENT[job_index].title);
                  }
                }
              }

              if ( jobs[i] == 'paste_content'  ) {
                for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
                  if (j === job_index) {
                    $('.summary').html(POSTS_ARR_CONTENT[job_index].summary);
                    $('.paste_content').html(POSTS_ARR_CONTENT[job_index].content);
                  }
                }
              }

              if ( jobs[i] == 'warp_in_gallery_titles'  ) {
                var all_titles = [];
                for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
                  if (j === job_index) {
                    for (var k = 0; k < POSTS_ARR_CONTENT[job_index].gallery_tags.length; k++) {
                      var gal_tag = POSTS_ARR_CONTENT[job_index].gallery_tags[k][0];
                      var nm_of_pictures = 0;
                      for (var w = 1; w < POSTS_ARR_CONTENT[job_index].gallery_tags[k].length; w++) {
                        if ( POSTS_ARR_CONTENT[job_index].gallery_tags[k][w] !== null ) {
                          nm_of_pictures++;
                        }
                      }
                      if (gal_tag != null) {
                        all_titles.push({tag: gal_tag, nm_pict: nm_of_pictures});
                      }
                    }
                    if (all_titles.length > 0) {
                      var accum = '';

                      var data_slide_ind = 0;
                      for (var l = 0; l < all_titles.length; l++) {

                        if (l>0) {
                        data_slide_ind++;
                          if (all_titles[l].tag != all_titles[l-1].tag) {
                            data_slide_ind = data_slide_ind + (all_titles[l-1].nm_pict-1);
                          }

                          accum = accum + ' <a href="#" class="on_click_load_new_gall" data-target="#nav__0" '+
                          'data-inner_html="' + all_titles[l].tag  + '" ' +   ' data-slide-to="'  + data_slide_ind +  '" > ' +
                          all_titles[l].tag + ' </a> ';
                        } else if (l===0) {
                          accum = accum + ' <a href="#" class="on_click_load_new_gall a_hovered" data-target="#nav__0" '+
                          'data-inner_html="' + all_titles[l].tag  + '" ' +   ' data-slide-to="'  + 0 +  '" > ' +
                          all_titles[l].tag + ' </a> ';
                        }

                        if (l!==(all_titles.length-1)) {
                          accum = accum + ' | ';
                        }
                      }
                      // console.log(accum);

                      $('.warp_in_gallery_titles').html(accum);
                      $('.on_click_load_new_gall').on("click", function (event) {
                        event.preventDefault();
                        only_clicked = true;
                        var that = this;
                        $('.on_click_load_new_gall').removeClass('a_hovered');
                        $(that).addClass('a_hovered');
                      });
                    }
                  }
                }
              }

              if ( jobs[i] == 'create_gallery'  ) {

                var gallery_objects = [];
                var gallery_objects_tags = [];
                for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
                  if (j === job_index) {
                    for (var k = 0; k < POSTS_ARR_CONTENT[job_index].gallery_tags.length; k++) {

                      for (var l = 1; l < POSTS_ARR_CONTENT[job_index].gallery_tags[k].length; l++) {

                        var image_url;
                        var is_small = (window.innerWidth < 900);
                        if        (!is_small) {
                          image_url = POSTS_ARR_CONTENT[job_index].gallery_tags[k][l].large_srcset.split(' ')[0];
                        } else if ( is_small) {
                          image_url = POSTS_ARR_CONTENT[job_index].gallery_tags[k][l].medium_srcset.split(' ')[2];
                        }

                          if ((image_url != null) && (image_url != undefined)) {
                            gallery_objects_tags.push(POSTS_ARR_CONTENT[job_index].gallery_tags[k][0]);
                            gallery_objects.push(image_url);
                          }

                      }
                    }

                    // console.log(gallery_objects_tags);

                    var gallery_nav = ''; var gallery_inner = '';
                    if (gallery_objects.length > 0) {
                      for (var l = 0; l < gallery_objects.length; l++) {

                        if (l === 0) {
                          var active = 'active';
                        } else {
                          var active = ' ';
                        }

                        gallery_nav = gallery_nav + '<div data-target="#nav__0" data-slide-to="'  + l +  '" class=" '  + active +  '" style="bottom:0%;">'+
                          '<img src=" '+ gallery_objects[l] +
                          '" alt="" style=" margin-left:1em; margin-right:0.2em; opacity:0.5; ">' +
                        '</div>';

                        gallery_inner = gallery_inner + '    <div class="carousel-item ' + active + '" data-inner_html="'+ gallery_objects_tags[l] +' " '+
                        ' " style="padding-top:100px;padding-bottom:0.5%;">  ' +
                          '<span id="" class="d-block img-fluid gallery_img" data-src="" alt="" ' +
                        '    src="" data-holder-rendered="true"  ' +
                        '  style="background-image:url(' + gallery_objects[l] + ');" >'+
                          '  </span> </div> ';

                      }



                    }

                    $('.carousel-indicators').html(gallery_nav);
                    $('.carousel-inner').html(gallery_inner);


                    $('#nav__0').bind('slid.bs.carousel', function (e) {
                      if (!only_clicked) {
                        $('.on_click_load_new_gall').removeClass('a_hovered');

                        var this_ht = $('.carousel-inner .active ').data('inner_html');
                        var this_ht = $.trim(this_ht.toString());
                        var tot_arr = document.getElementsByClassName('on_click_load_new_gall');
                        var check = false;
                        var sett = [];
                        ind_= 0;
                        for (var q = 0; q < tot_arr.length; q++) {
                          sett.push($.trim(tot_arr[q].dataset.inner_html.toString()));
                        }
                          var arraycontainsturtles = (sett.indexOf(this_ht) > -1);
                        if (arraycontainsturtles) {
                            tot_arr[sett.indexOf(this_ht)].classList.add('a_hovered');
                        }
                      } else if(only_clicked) {
                        only_clicked = false;
                      }
                    });

                  }
                }

              }

            }

          }, 300);

          job_in_progress = false;
      }


  } //end of work function


});

</script>
