	<?php get_header(); ?>
		<div class="body-container container">
			<section class="home_intro-text">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<article>
						<p><?php the_content(); ?></p> 					
					</article>
				<?php endwhile; else: ?>
					<p>This page is missing... Make sure page exists.</p>
				<?php endif; ?>
			</section>
		</div>
	<?php get_footer(); ?>