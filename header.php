<!DOCTYPE html>	
<html>	
	<head>
		<title>
			<?php wp_title ( '-', true, 'right' ); bloginfo( 'name' ); ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:600,500,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	</head>
	<body <?php body_class($class); ?>>
		<div id="site-container">
			<div id="header-container">
				<header>
					<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="logo obj_center" alt="Site logo: <?php bloginfo( 'name' ); ?> <?php bloginfo( 'description' ); ?>"></a>
				</header>	
				<nav class="site-nav">
					<?php
						$args = array(
							'menu' => 'Main_Navigation'
						); 
						wp_nav_menu( $args );	
					?>
				</nav>
				<img src="<?php bloginfo('template_directory'); ?>/img/main_nav-rule.png" class="site-nav_rule">
			</div>