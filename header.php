<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- view on your local php server | php -S locahost:1234 -->

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script> -->

<!-- scripts -->
<!-- jquery -->
<!-- <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> -->
<!-- animation on entry -->

<?php wp_head(); ?>
</head>
<body>

<style media="screen">
  html{
    margin-top:-0px !important;
  }
  html, body, .main-background{
    background: linear-gradient(90deg, rgba(20,20,20,0.7) , rgba(20,20,20,0.8),
    rgba(20,20,20,0.8), rgba(20,20,20,0.7)  ),
    url('http://milodavid.local/wp-content/uploads/2019/02/Triangle-Seamless-Patterns_03.png') repeat local center;
    background-size: 60%;
  }
</style>

<header>

<nav>

    <div id="" class=" " style="width:100%;">
      <div id="mob_nav" class="mob_menu   " style="">
        <div class="">
          <ul>
            <a href="<?=get_home_url();?>"
              style="margin:0;padding:0;color:white;"
              ><p class="logo" style="">MILO </br> DAVID  </p></a>
          </ul>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
    </div>

    <div class="d-none d-xl-block" style="position:fixed; top:0;right:3%;z-index:104;padding:1em">
      <p>  <?= get_option('mytel')?> </p>
      <p><a href="mailto:design@milodavid.com">design@milodavid.com</a> </p>
     </div>

</nav>

</header>
