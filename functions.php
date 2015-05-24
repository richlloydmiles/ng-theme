<?php
function ng_enqueue_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'angular', get_stylesheet_directory_uri() . '/js/angular.js', array(), '1.0.0', true );
	wp_enqueue_script( 'angular-base', get_stylesheet_directory_uri() . '/js/angular-base.js', array(), '1.0.0', true );
	wp_enqueue_script( 'angular-route', get_stylesheet_directory_uri() . '/js/angular-route.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'angular-sanitize', get_stylesheet_directory_uri() . '/js/angular-sanitize.js', array(), '1.0.0', true );
	wp_enqueue_script( 'ng-script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts' , 'ng_enqueue_scripts' );


add_action('wp_head','ng_ajaxurl');

function ng_ajaxurl() {
	?>
	<script type="text/javascript">
		var siteUrl = '<?php echo get_site_url(); ?>';
		var templateUrl = '<?php  echo get_stylesheet_directory_uri(); ?>';
	</script>
	<?php
}