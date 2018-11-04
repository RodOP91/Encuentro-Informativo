<?php
	
	function encuentroinf_script_enqueue() {
		wp_enqueue_style('eiestilo', get_template_directory_uri().'/css/encuentro.css', array(), '1.0.0', 'all');
		wp_enqueue_script('eijs', get_template_directory_uri().'/js/encuentro.js', array(), '1.0.0', true);

	}

	function encuentroinf_setup() {
		
		add_theme_support('menus');
			
	}

	add_action('wp_enqueue_scripts', 'encuentroinf_script_enqueue');

	add_action('after_setup_theme', 'encuentroinf_setup');
	?>
