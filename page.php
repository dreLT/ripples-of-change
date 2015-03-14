	<?php get_header(); ?>
		<div class="body-container container">
			<section class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!--<header>
						<h1><?php the_title(); ?></h1>
					</header>-->
					<article class="col-md-8">
						<?php the_content(); ?>
					</article>
				<?php endwhile; else: ?>
					<p>This page is missing... Make sure page exists.</p>
				<?php endif; ?>
			</section>
		</div>
	<?php get_footer(); ?>