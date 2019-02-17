<?php

define('WP_SCSS_ALWAYS_RECOMPILE', true);

wp_enqueue_script( 'component_js', get_theme_file_uri( '/js/component.js' ), array( 'jquery' ), '1.0', true );
wp_enqueue_script( 'aos', get_theme_file_uri( '/js/aos.js' ), array( 'jquery' ), '1.0', true );

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
    <p><strong>Introduction:</strong><br />
    <?php wp_editor( get_option('introduction'), 'introduction' , array('teeny'=>true, 'media_buttons' => false )); ?>

    <p><strong>My mobile number:</strong><br />
	   <input type="text" name="mytel" size="45" value="<?php echo get_option('mytel'); ?>" /></p>

   </div>

  <p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="mytel, introduction" />

	</form>
	</div>
  <?php
}

?>
