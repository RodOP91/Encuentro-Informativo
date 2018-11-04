<? php
	
	function encuentro_informativo_enqueue(){
		//
		wp_enqueue_style('eiestilo', get_template_directory_uri() - '/css/EncuentroInformativo', array(), '0.1', 'all');

	}

	add_action('wp_enqueue_scripts', 'encuentro_informativo_enqueue');