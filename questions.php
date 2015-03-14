<?php
/*
Template Name: Questions
*/
;?>

<?php get_header(); ?>
		<div class="body-container container">
			<div class="questions_container row">
				<section class="col-md-10">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<?php the_content(); ?>
						</article>
					<?php endwhile; else: ?>
						<p>This page is missing... Make sure page exists.</p>
					<?php endif; ?>
					<!-- <header>
						<h2>Questions</h2>
						<p>Send us any non-emergency questions. You can expect a response within 48 hours.</p>
					 --></header>
					<?php echo do_shortcode('[contact-form-7 id="85" title="Scheduling Form"]'); ?>
				</section>	
			</div>
		</div>
	<?php get_footer(); ?>