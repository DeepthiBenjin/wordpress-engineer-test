<?php

add_action( 'admin_menu', 'fitness_coaching_getting_started' );
function fitness_coaching_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'fitness-coaching'), esc_html__('Get Started', 'fitness-coaching'), 'edit_theme_options', 'fitness-coaching-guide-page', 'fitness_coaching_test_guide');   
}

function fitness_coaching_admin_enqueue_scripts() {
	wp_enqueue_style( 'fitness-coaching-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'fitness_coaching_admin_enqueue_scripts' );

if ( ! defined( 'FITNESS_COACHING_DOCS_FREE' ) ) {
define('FITNESS_COACHING_DOCS_FREE',__('https://www.misbahwp.com/docs/fitness-coaching-free-docs/','fitness-coaching'));
}
if ( ! defined( 'FITNESS_COACHING_DOCS_PRO' ) ) {
define('FITNESS_COACHING_DOCS_PRO',__('https://www.misbahwp.com/docs/fitness-coaching-pro-docs','fitness-coaching'));
}
if ( ! defined( 'FITNESS_COACHING_BUY_NOW' ) ) {
define('FITNESS_COACHING_BUY_NOW',__('https://www.misbahwp.com/themes/fitness-coaching-wordpress-theme/','fitness-coaching'));
}
if ( ! defined( 'FITNESS_COACHING_SUPPORT_FREE' ) ) {
define('FITNESS_COACHING_SUPPORT_FREE',__('https://wordpress.org/support/theme/fitness-coaching','fitness-coaching'));
}
if ( ! defined( 'FITNESS_COACHING_REVIEW_FREE' ) ) {
define('FITNESS_COACHING_REVIEW_FREE',__('https://wordpress.org/support/theme/fitness-coaching/reviews/#new-post','fitness-coaching'));
}
if ( ! defined( 'FITNESS_COACHING_DEMO_PRO' ) ) {
define('FITNESS_COACHING_DEMO_PRO',__('https://www.misbahwp.com/demo/fitness-coaching/','fitness-coaching'));
}

function fitness_coaching_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( FITNESS_COACHING_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'fitness-coaching' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'fitness-coaching' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( FITNESS_COACHING_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'fitness-coaching' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( FITNESS_COACHING_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'fitness-coaching' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','fitness-coaching'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'fitness-coaching'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','fitness-coaching'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','fitness-coaching'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','fitness-coaching'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','fitness-coaching'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'fitness-coaching' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','fitness-coaching'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( FITNESS_COACHING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'fitness-coaching' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( FITNESS_COACHING_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'fitness-coaching' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( FITNESS_COACHING_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'fitness-coaching' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
