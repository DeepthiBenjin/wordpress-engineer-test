<?php


$fitness_coaching_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$fitness_coaching_text_transform = get_theme_mod( 'menu_text_transform_fitness_coaching','UPPERCASE');
    if($fitness_coaching_text_transform == 'CAPITALISE'){

		$fitness_coaching_custom_css .='#main-menu ul li a{';

			$fitness_coaching_custom_css .='text-transform: capitalize ; font-size: 15px;';

		$fitness_coaching_custom_css .='}';

	}else if($fitness_coaching_text_transform == 'UPPERCASE'){

		$fitness_coaching_custom_css .='#main-menu ul li a{';

			$fitness_coaching_custom_css .='text-transform: uppercase ; font-size: 15px;';

		$fitness_coaching_custom_css .='}';

	}else if($fitness_coaching_text_transform == 'LOWERCASE'){

		$fitness_coaching_custom_css .='#main-menu ul li a{';

			$fitness_coaching_custom_css .='text-transform: lowercase ; font-size: 15px;';

		$fitness_coaching_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$fitness_coaching_container_width = get_theme_mod('fitness_coaching_container_width');

		$fitness_coaching_custom_css .='body{';

			$fitness_coaching_custom_css .='width: '.esc_attr($fitness_coaching_container_width).'%; margin: auto;';

		$fitness_coaching_custom_css .='}';

		/*---------------------------Slider-content-alignment-------------------*/

	$fitness_coaching_slider_content_alignment = get_theme_mod( 'fitness_coaching_slider_content_alignment','CENTER-ALIGN');

	 if($fitness_coaching_slider_content_alignment == 'LEFT-ALIGN'){

			$fitness_coaching_custom_css .='.blog_box{';

				$fitness_coaching_custom_css .='text-align:left;';

			$fitness_coaching_custom_css .='}';


		}else if($fitness_coaching_slider_content_alignment == 'CENTER-ALIGN'){

			$fitness_coaching_custom_css .='.blog_box{';

				$fitness_coaching_custom_css .='text-align:center;';

			$fitness_coaching_custom_css .='}';


		}else if($fitness_coaching_slider_content_alignment == 'RIGHT-ALIGN'){

			$fitness_coaching_custom_css .='.blog_box{';

				$fitness_coaching_custom_css .='text-align:right;';

			$fitness_coaching_custom_css .='}';

		}
