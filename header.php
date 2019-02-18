<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- view on your local php server | php -S locahost:1234 -->

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!-- scripts -->
<!-- jquery -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<!-- animation on entry -->
<script type="text/javascript" src="./js/aos.js"></script>
<script>    AOS.init();  </script>

<?php wp_head(); ?>
</head>
<body>

<style media="screen">
  html{margin-top:0 !important;}
</style>

<header>

<nav>

    <div id="" class=" " style="width:100%;">
      <div id="mob_nav" class="mob_menu d-block d-sm-none  " style="">
        <div class="">
          <ul>
                <p class="logo" style="">MILO </br> DAVID  </p>
          </ul>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
    </div>

<script type="text/javascript" src="https://unpkg.com/simplebar@latest/dist/simplebar.js"> </script>
<script type="text/javascript">
  new SimpleBar(document.getElementById('mob_nav'), { autoHide: false })
</script>

</nav>

</header>
