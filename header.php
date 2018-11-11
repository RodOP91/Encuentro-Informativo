<!DOCTYPE html>
<html>
	<head>
		<meta charset= "utf-8" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
		<title> Encuentro Informativo </title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		

		<div id="contenedor">
			<header>
				<div id="header">
					<img src="LogoEI.svg" width="100%" height="80px">
				</div>
				<nav class="navbar navbar-expand-md" role="navigation"> 
					<!-- Brand and toggle get grouped for better mobile display --> 
	 				 <div class="navbar-header"> 
	    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
	      					<span class="sr-only">Toggle navigation</span> 
	      					<span class="icon-bar"></span> 
	      					<span class="icon-bar"></span> 
	      					<span class="icon-bar"></span> 
	    				</button> 
	    			<a class="navbar-brand" href="#">Brand</a> 
	  				</div> 
	  				<!-- Collect the nav links, forms, and other content for toggling --> 
	  				<div class="collapse navbar-collapse navbar-ex1-collapse"> 
	    			<?php /* Primary navigation */
						wp_nav_menu( array(
  						'menu' => 'top_menu',
						'depth' => 0,
						'container' => false,
						'menu_class' => 'nav',
						//Process nav menu using our custom nav walker
						'walker' => new wp_bootstrap_navwalker())
						);
					?>
	  				</div>
				</nav>
		</header>