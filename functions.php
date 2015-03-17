<?php
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );

        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);

	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );

add_action('admin_enqueue_scripts', 'load_javascript_dependencies'  );
function load_javascript_dependencies() {
	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}
}
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>'
    	));
    }

    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

	if ( function_exists( 'add_theme_support' ) )
		add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'latest-news-thumb', 240, 150, true );
		add_image_size( 'news-category-thumb', 320, 200, true );
	}

	/**
	 * Adds two custom thumbnail image sizes
	 */
	function the_post_thumbnail_caption() {
		global $post;

		$thumbnail_id    = get_post_thumbnail_id($post->ID);
		$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

		if ($thumbnail_image && isset($thumbnail_image[0]))
		echo $thumbnail_image[0]->post_excerpt;
	}

	/**
	 * Sets the post excerpt length to 25 words.
	 *
	 * To override this length in a child theme, remove the filter and add your own
	 * function tied to the excerpt_length filter hook.
	 */
	function cl_excerpt_length( $length ) {
		return 25;
	}
	add_filter( 'excerpt_length', 'cl_excerpt_length' );

	/**
	 * Returns a "Continue Reading" link for excerpts
	 */
	function cl_continue_reading_link() {
		return ' <a href="'. esc_url( get_permalink() ) . '">' . __( 'Read More &#187;', 'cl' ) . '</a>';
	}

	/**
	 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and cl_continue_reading_link().
	 *
	 * To override this in a child theme, remove the filter and add your own
	 * function tied to the excerpt_more filter hook.
	 */
	function cl_auto_excerpt_more( $more ) {
		return ' &hellip;' . cl_continue_reading_link();
	}
	add_filter( 'excerpt_more', 'cl_auto_excerpt_more' );

	/**
	 * Adds a pretty "Continue Reading" link to custom post excerpts.
	 *
	 * To override this link in a child theme, remove the filter and add your own
	 * function tied to the get_the_excerpt filter hook.
	 */
	function cl_custom_excerpt_more( $output ) {
		if ( has_excerpt() && ! is_attachment() ) {
			$output .= cl_continue_reading_link();
		}
		return $output;
	}
	add_filter( 'get_the_excerpt', 'cl_custom_excerpt_more' );

	// adds post thumbnails to RSS feed
	function add_thumb_to_RSS($content) {
	   global $post;
	   if ( has_post_thumbnail( $post->ID ) ){
	      $content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'latest-news-thumb', 'alt' => get_the_title(), 'style' => 'float:left; margin-right:1em;') ) . '' . $content;
	   }
	   return $content;
	}
	add_filter('the_excerpt_rss', 'add_thumb_to_RSS');
	add_filter('the_content_feed', 'add_thumb_to_RSS');

	function override_feed_404() {
		global $wp_query;

		if (is_feed()) {
			status_header( 200 );
			$wp_query->is_404 = false;
		}
	}
	add_filter('template_redirect', 'override_feed_404' );
