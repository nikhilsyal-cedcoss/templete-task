<?php
/**
 * nikhil functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nikhil
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'nikhil_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nikhil_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nikhil, use a find and replace
		 * to change 'nikhil' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nikhil', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'nikhil' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'nikhil_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'nikhil_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nikhil_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nikhil_content_width', 640 );
}
add_action( 'after_setup_theme', 'nikhil_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nikhil_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nikhil' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nikhil' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nikhil_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nikhil_scripts() {

	wp_style_add_data( 'nikhil-style', 'rtl', 'replace' );
	wp_enqueue_script( 'nikhil-navigation', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nikhil-navi', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nikhil-navigat', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'accordions', get_template_directory_uri() . '/js/accordions.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), _S_VERSION, true );
	
	wp_enqueue_style( 'nikhil-style', get_template_directory_uri().'/css/fontawesome.css', array(),false,'all', _S_VERSION );
	wp_enqueue_style( 'blog', get_template_directory_uri().'/css/templatemo-stand-blog.css', array(),false,'all', _S_VERSION );
	wp_enqueue_style( 'owl', get_template_directory_uri().'/css/owl.css', array(),false,'all', _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css ', array(), false,'all',_S_VERSION );
	wp_enqueue_style( 'font',"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" , array(),false,'all', _S_VERSION );
	

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nikhil_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function add_link_atts($atts) {
	$atts['class'] = "nav-link";
	return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_link_atts');
function register_my_menu() {
	register_nav_menu('new-menu',__( 'Footer' ));
	}
	add_action( 'init', 'register_my_menu' );
	
	function wpbeginner_numeric_posts_nav() {

		if( is_singular() )
		return;
		
		global $wp_query;
		
		/* Stop execution if there's only 1 page */
		if( $wp_query->max_num_pages <= 1 )
		return;
		
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max = intval( $wp_query->max_num_pages );
		
		/* Add current page to the array */
		if ( $paged >= 1 )
		$links[] = $paged;
		
		/* Add the pages around the current page to the array */
		if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
		}
		
		if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
		}
		
		echo '<div class="navigation"><ul>' . "\n";
		
		/* Previous Post Link */
		if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
		
		/* Link to first page, plus ellipses if necessary */
		if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		
		if ( ! in_array( 2, $links ) )
		echo '<li>…</li>';
		}
		
		/* Link to current page, plus 2 pages in either direction if necessary */
		sort( $links );
		foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}
		
		/* Link to last page, plus ellipses if necessary */
		if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
		echo '<li>…</li>' . "\n";
		
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}
		
		/* Next Post Link */
		if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );
		
		echo '</ul></div>' . "\n";
		
		}