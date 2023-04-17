<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function fitness_coaching_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'fitness-coaching' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	fitness_coaching_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fitness_coaching_register_recommended_plugins' );