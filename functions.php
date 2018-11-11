<?php
	/*  ===============
		Incluir scripts
		===============	*/
	function encuentroinf_script_enqueue() {
		//CSS
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.1.3', 'all');
		wp_enqueue_style('eiestilo', get_template_directory_uri().'/css/encuentro.css', array(), '1.0.0', 'all');

		//JS
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0.0', true);
		wp_enqueue_script('eijs', get_template_directory_uri().'/js/encuentro.js', array(), '1.0.0', true);

		
		
	}

	// Registrar navbar
    require_once('class-wp-bootstrap-navwalker.php');
	

	/*  ===============
		Activar menús
		===============	*/
	function encuentroinf_setup() {
		
		add_theme_support('menus');

		register_nav_menu('principal', 'Navegador Principal');
			
	}

	add_action('wp_enqueue_scripts', 'encuentroinf_script_enqueue');

	add_action('after_setup_theme', 'encuentroinf_setup');

	add_theme_support('post-thumbnails');

	add_theme_support('post-formats', array('aside', 'image', 'video'));
	?>
