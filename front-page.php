	<?php get_header(); ?>
		<div class="body-container container">
			<div class="row">
				<section class="home_intro-text col-md-6">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<?php the_content(); ?>
							<a href="<?php echo get_site_url(); ?>/services/"><img class="button_learn-more" src="<?php bloginfo('template_directory');?>/img/button_learn-more.png"></a>
						</article>
					<?php endwhile; else: ?>
						<p>This page is missing... Make sure page exists.</p>
					<?php endif; ?>
				</section>
				<figure class="home_photo col-md-6">
					<?php echo do_shortcode("[metaslider id=174]"); ?>
					<!--<img src="<?php bloginfo('template_directory'); ?>/img/road.jpg" class="obj_center color-border-large">-->
				</figure>
			</div>
		</div>
	<?php get_footer(); ?>
