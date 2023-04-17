<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function fitness_coaching_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style( 'google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );

	wp_enqueue_style( 'google-fonts-ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap' );

	wp_enqueue_style( 'google-fonts-sacramento', 'https://fonts.googleapis.com/css2?family=Sacramento&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'fitness_coaching_enqueue_google_fonts' );

if (!function_exists('fitness_coaching_enqueue_scripts')) {

	function fitness_coaching_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('fitness-coaching-style', get_stylesheet_uri(), array() );

		wp_style_add_data('fitness-coaching-style', 'rtl', 'replace');

		wp_enqueue_style(
			'fitness-coaching-media-css',
			get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'fitness-coaching-woocommerce-css',
			get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'fitness-coaching-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'fitness-coaching-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$fitness_coaching_css = '';

		if ( get_header_image() ) :

			$fitness_coaching_css .=  '
				header.header {
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'fitness-coaching-style', $fitness_coaching_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'fitness-coaching-style',$fitness_coaching_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'fitness_coaching_enqueue_scripts' );

}

/**------------------------------------------------------------------------------------------
 * Enqueue theme logo style.
 */
function fitness_coaching_logo_resizer() {

    $fitness_coaching_theme_logo_size_css = '';
    $fitness_coaching_logo_resizer = get_theme_mod('fitness_coaching_logo_resizer');

	$fitness_coaching_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($fitness_coaching_logo_resizer).'px !important;
			width: '.esc_attr($fitness_coaching_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'fitness-coaching-style',$fitness_coaching_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'fitness_coaching_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function fitness_coaching_global_color() {

    $fitness_coaching_theme_color_css = '';
    $fitness_coaching_global_color = get_theme_mod('fitness_coaching_global_color');
    $fitness_coaching_global_color_2 = get_theme_mod('fitness_coaching_global_color_2');

	$fitness_coaching_theme_color_css = '
		p.slider_btn a,.services-title,.comment-respond input#submit,.comment-reply a,.sidebar-widget h4.title,.sidebar-area .tagcloud a,.searchform input[type=submit]:hover ,.searchform input[type=submit]:focus,.social-links a:hover,.comment-respond input#submit,nav.woocommerce-MyAccount-navigation,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.scroll-up a:hover {
			background: '.esc_attr($fitness_coaching_global_color).';
		}
		.social-links a:hover {
			color: '.esc_attr($fitness_coaching_global_color).';
		}
		.section_two .owl-carousel button.owl-dot,.blog_inner_box hr{
			border-color: '.esc_attr($fitness_coaching_global_color).';
		}
		#main-menu ul.children li a:hover,#main-menu ul.sub-menu li a:hover,p.slider_btn a:hover,.comment-respond input#submit:hover,.comment-reply a:hover,.pagination .nav-links a:hover,.pagination .nav-links a:focus,.pagination .nav-links span.current,.fitness-coaching-pagination span.current,.fitness-coaching-pagination span.current:hover,.fitness-coaching-pagination span.current:focus,.fitness-coaching-pagination a span:hover,.fitness-coaching-pagination a span:focus,.sidebar-area .tagcloud a:hover,.searchform input[type=submit],.menu-toggle,.dropdown-toggle,button.close-menu,nav.woocommerce-MyAccount-navigation ul li:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce a.added_to_cart:hover,woocommerce ul.products li.product .onsale,.woocommerce span.onsale,.scroll-up a,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale {
			background: '.esc_attr($fitness_coaching_global_color_2).';
		}
		a:hover,a:focus,.post-meta i,.slider h3.post-title a,.services h3,.woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price {
			color: '.esc_attr($fitness_coaching_global_color_2).';
		}
		.section_two .owl-carousel button.owl-dot.active,.slider .owl-carousel button.owl-dot.active,.sidebar-area h4.title,.header{
			border-color: '.esc_attr($fitness_coaching_global_color_2).';
		}
		.header{
			background: rgba(0, 0, 0, 0) linear-gradient(120deg, '.esc_attr($fitness_coaching_global_color).' 70%, '.esc_attr($fitness_coaching_global_color_2).' 53%) repeat scroll 0 0;
		}
	';
    wp_add_inline_style( 'fitness-coaching-style',$fitness_coaching_theme_color_css );
    wp_add_inline_style( 'fitness-coaching-woocommerce-css',$fitness_coaching_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'fitness_coaching_global_color' );

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fitness_coaching_after_setup_theme')) {

	function fitness_coaching_after_setup_theme() {

		if ( ! isset( $fitness_coaching_content_width ) ) $fitness_coaching_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'fitness-coaching' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'width' => 1920,
			'height' => 100,
			'flex-width' => true,
			'flex-height' => true,
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'fitness_coaching_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fitness_coaching_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function fitness_coaching_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'fitness-coaching');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'fitness-coaching'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'fitness-coaching'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'fitness-coaching' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'fitness-coaching'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for fitness_coaching_comment()

if (!function_exists('fitness_coaching_widgets_init')) {

	function fitness_coaching_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','fitness-coaching'),
			'id'   => 'fitness-coaching-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'fitness-coaching'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','fitness-coaching'),
			'id'   => 'fitness-coaching-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'fitness-coaching'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'fitness_coaching_widgets_init' );

}

function fitness_coaching_get_categories_select() {
	$teh_cats = get_categories();
	$results;
	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
	if (isset($teh_cats[$i]))
  		$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'fitness_coaching_loop_columns', 999);
if (!function_exists('fitness_coaching_loop_columns')) {
	function fitness_coaching_loop_columns() {
		return 3; // 3 products per row
	}
}

function fitness_coaching_remove_sections( $wp_customize ) {
	$wp_customize->remove_control('display_header_text');
	$wp_customize->remove_setting('display_header_text');
}
add_action( 'customize_register', 'fitness_coaching_remove_sections');

//redirect
Function fitness_coaching_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
   		wp_safe_redirect( admin_url("themes.php?page=fitness-coaching-guide-page") );
   	}
}
add_action('after_setup_theme', 'fitness_coaching_notice');

?>
