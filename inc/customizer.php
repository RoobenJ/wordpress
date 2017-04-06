<?php 
function wpb_customize_register($wp_customize){
	// Showcase Section
	$wp_customize->add_section('showcase', array(
		'title'	=> __('Showcase', 'Rjakocs'),
		'description' => sprintf(__('Options for showcase', 'Rjakocs')),
		'priority' => 130
		));

	$wp_customize->add_setting('showcase_image', array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
		'type' => 'theme_mod'
		));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		'label' => __('Showcase Image', 'Rjakocs'),
		'section' => 'showcase',
		'settings' => 'showcase_image',
		'priority' => 1
		)));

	$wp_customize->add_setting('showcase_heading', array(
		'default' => _x('Custom Bootstrap Wordpress Theme', 'Rjakocs'),
		'type' => 'theme_mod'
		));

	$wp_customize->add_control('showcase_heading', array(
		'label' => __('Heading', 'Rjakocs'),
		'section' => 'showcase',
		'priority' => 2
		));

	$wp_customize->add_setting('showcase_text', array(
		'default' => _x('Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'Rjakocs'),
		'type' => 'theme_mod'
		));

	$wp_customize->add_control('showcase_text', array(
		'label' => __('Text', 'Rjakocs'),
		'section' => 'showcase',
		'priority' => 3
		));

	$wp_customize->add_setting('btn_url', array(
		'default' => _x('#', 'Rjakocs'),
		'type' => 'theme_mod'
		));

	$wp_customize->add_control('btn_url', array(
		'label' => __('Button URL', 'Rjakocs'),
		'section' => 'showcase',
		'priority' => 4
		));

	$wp_customize->add_setting('btn_text', array(
		'default' => _x('Read More', 'Rjakocs'),
		'type' => 'theme_mod'
		));

	$wp_customize->add_control('btn_text', array(
		'label' => __('Button Text', 'Rjakocs'),
		'section' => 'showcase',
		'priority' => 5
		));
}

add_action('customize_register', 'wpb_customize_register');