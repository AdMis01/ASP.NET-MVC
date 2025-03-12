<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'zdrowie_setup' ) ) :

	function zdrowie_setup() {

		load_theme_textdomain( 'zdrowie', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'zdrowie' ),
			)
		);

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

		add_theme_support(
			'custom-background',
			apply_filters(
				'zdrowie_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'zdrowie_setup' );

function zdrowie_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zdrowie_content_width', 640 );
}
add_action( 'after_setup_theme', 'zdrowie_content_width', 0 );

function zdrowie_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'zdrowie' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'zdrowie' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'zdrowie_widgets_init' );

function zdrowie_scripts() {
	wp_enqueue_style( 'zdrowie-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'zdrowie-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css');
	wp_style_add_data( 'zdrowie-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'zdrowie-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'zdrowie-script', get_template_directory_uri() . '/js/script.js', array('jquery') );

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zdrowie_scripts' );

function enqueue_custom_fonts() {
	if(!is_admin()) {
		wp_register_style('source_sans_pro', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,600&display=swap');
		wp_register_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');

		wp_enqueue_style('source_sans_pro');
		wp_enqueue_style('nunito');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

function custom_footer_widget_one() {
	$args = array(
		'id' 							=> 'footer-widget-col-one',
		'name'						=> __('Footer Column One', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_one');

function custom_footer_widget_two() {
	$args = array(
		'id' 							=> 'footer-widget-col-two',
		'name'						=> __('Footer Column Two', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_two');

function custom_footer_widget_three() {
	$args = array(
		'id' 							=> 'footer-widget-col-three',
		'name'						=> __('Footer Column Three', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_three');




/**
 * WooCommerce
*/
add_theme_support('woocommerce');

function remove_woocommerce_styles($enqueue_styles) {
	unset( $enqueue_styles['woocommerce-general'] );
	return $enqueue_styles;
}

add_filter( 'woocommerce_enqueue_styles',  'remove_woocommerce_styles');

function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );