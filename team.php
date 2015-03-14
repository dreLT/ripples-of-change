<?php
/*
Template Name: Our Team
*/
;?>

	<?php get_header(); ?>
		<div class="body-container container">
			<div class="row">
				<!-- <header class="our-team_page-header">
					<h2>Meet the Staff</h2>
				</header> -->
				<section class="our-team_bio">
					<figure class="bio-main-pic">
						<img src="<?php the_field('kendra_pic'); ?>" class="color-border-large">
					</figure>
					<header>
						<h3 class="kendra-name-title-heading"><?php the_field('kendra_name'); ?></h3>
					</header>
					<article>
						<?php the_field('kendra_bio'); ?>				
					</article>
				</section>
			</div>	
		</div>
	<?php get_footer(); ?>
</html>