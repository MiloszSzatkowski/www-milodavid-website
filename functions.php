<?php

define('WP_SCSS_ALWAYS_RECOMPILE', true);

load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

function theme_styles_and_scripts (){
wp_enqueue_style( 'boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
wp_enqueue_style( 'reset', get_template_directory_uri() . '/reset_css/reset.css' ,  array(), '', 'all'  );
wp_enqueue_style( 'simplebar_css', "https://unpkg.com/simplebar@latest/dist/simplebar.css" ,  array(), '', 'all'  );

wp_enqueue_script( 'component_js', get_template_directory_uri() . '/js/component.js' ,  array(), '', 'all' );
wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js' ,  array(), '', 'all' );
wp_enqueue_script( 'simplebar_js', "https://unpkg.com/simplebar@latest/dist/simplebar.js" ,  array(), '', 'all' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles_and_scripts' );

// POST TYPES
function create_posttype() {
    register_post_type( 'design',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'design' ),
                'singular_name' => __( 'design' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array( 'category' ),
            'rewrite' => array('slug' => 'design'),
        )
    );
    register_post_type( 'art',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'art' ),
                'singular_name' => __( 'art' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array( 'category' ),
            'rewrite' => array('slug' => 'art'),
        )
    );
    register_post_type( 'programming',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'programming' ),
                'singular_name' => __( 'programming' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array( 'category' ),
            'rewrite' => array('slug' => 'programming'),
        )
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// ******************** GLOBAL FIELDS
add_action('admin_menu', 'add_gcf_interface');
function add_gcf_interface() {
	add_options_page('Global Custom Fields', 'Globalne pola', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Globalne opcje</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>


  <div style="max-width:600px">

    <p><strong>My mobile number:</strong><br />
     <input type="text" name="mytel" size="45" value="<?php echo get_option('mytel'); ?>" /></p>

    <p><strong>My banner:</strong><br />
    <input type="text" name="banner_photo" size="45" value="<?php echo get_option('banner_photo'); ?>" /></p>
    <img src="<?php echo get_option('banner_photo'); ?>" alt="" style="width:50px;">

    <p><strong>My mobile banner:</strong><br />
    <input type="text" name="mb_banner_photo" size="45" value="<?php echo get_option('mb_banner_photo'); ?>" /></p>
    <img src="<?php echo get_option('mb_banner_photo'); ?>" alt="" style="width:50px;">


    <p><strong>General introduction:</strong><br />
    <?php wp_editor( get_option('introduction'), 'introduction' , array('teeny'=>false, 'media_buttons' => false )); ?>
    <p><strong>My offer:</strong><br />
    <?php wp_editor( get_option('my_offer'), 'my_offer' , array('teeny'=>false, 'media_buttons' => false )); ?>


   <p><strong>Design intro:</strong><br />
   <?php wp_editor( get_option('des_intro'), 'des_intro' , array('teeny'=>false, 'media_buttons' => false )); ?>

   <p><strong>Programming intro:</strong><br />
   <?php wp_editor( get_option('prog_intro'), 'prog_intro' , array('teeny'=>false, 'media_buttons' => false )); ?>

   <p><strong>Art intro:</strong><br />
   <?php wp_editor( get_option('art_intro'), 'art_intro' , array('teeny'=>false, 'media_buttons' => false )); ?>

   </div>

  <p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="mytel, mb_banner_photo, banner_photo, my_offer, introduction, des_intro, prog_intro, art_intro" />

	</form>
	</div>
  <?php
}


// MCE EDITOR PLUGINS ***********************
// hooks your functions into the correct filters
add_shortcode( 'hard_return', 'hard_return' );

function hard_return(  ) {
        return '<p class="hard_return">&nbsp;</p>';}

?>
