<?php
/*
Template Name: Services
*/
;?>

<?php get_header(); ?>
	<div class="body-container services_container container">
		<div class="row">
			<?php get_template_part( 'content', 'services_nav' ) ;?>
			<section class="services_content col-md-8 col-md-offset-1">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<header>
					<h2><?php the_title(); ?></h2>
				</header>
				<article>
					<p><?php the_content(); ?></p> 					
				</article>
			<?php endwhile; else: ?>
				<p>This page is missing... Make sure page exists.</p>
			<?php endif; ?>
		</div>	
	</div>
<?php get_footer(); ?>