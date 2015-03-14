<?php
/*
Template Name: Rates
*/
;?>
	<?php get_header(); ?>
		<div class="body-container container" id="rates_body-container">
			<section class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="col-md-10">
						<?php the_content(); ?>
					</article>
				<?php endwhile; else: ?>
					<p>This page is missing... Make sure page exists.</p>
				<?php endif; ?>
			</section>
		</div>
	<?php get_footer(); ?>