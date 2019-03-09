<?php

// error_reporting(E_ALL);

// define('WP_SCSS_ALWAYS_RECOMPILE', true);

$dir_uri = '/wp-content/themes/minimalistic-black-theme/';

add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails', array( 'post', 'page' )  );

function theme_styles_and_scripts (){

wp_deregister_script('jquery');
wp_register_script('jquery', "https://code.jquery.com/jquery-3.3.1.min.js", false, null);
wp_enqueue_script('jquery');


wp_enqueue_style( 'boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
// wp_enqueue_style( 'reset',  get_template_directory_uri()  . '/reset_css/reset.css' ,  array(), '', 'all'  );

// wp_enqueue_style( 'main',  get_template_directory_uri()  . '/css/main.css' ,  array(), '', 'all'  );


// wp_enqueue_script( 'component_js', get_template_directory_uri() . '/js/components.js' ,  array(), '', 'all' );
wp_register_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js' ,  array(), '', 'all' );
wp_enqueue_script('bootstrap_js');


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
            'supports' => array( 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'title'),

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
            'supports' => array( 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'title'),

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
           'supports' => array( 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'title'),
        )
    );
}

add_post_type_support( 'programming', 'thumbnail' );
add_post_type_support( 'art', 'thumbnail' );
add_post_type_support( 'design', 'thumbnail' );

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



   <p><strong>Logo src:</strong><br />
     <input type="text" name="logo_src" size="45" value="<?php echo get_option('logo_src'); ?>" /></p>
     <img src="<?php echo get_option('logo_src'); ?>" alt="">

   </div>

  <p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="mytel, logo_src" />

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
