<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<?php if ( is_home() ): ?>
	
		<div class="blog_post-container">
			<article class="blog_post">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="post_meta"><span>Topic:</span> <?php the_category(); ?>&nbsp;&nbsp;&nbsp;<span>Written by:</span> <?php the_author(); ?>
				<br>
				<?php the_time('F j, Y'); ?></p>
				<figure>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ;?>
				</figure>
				<p><?php the_excerpt(); ?></p>
				<p><a href="<?php the_permalink(); ?>">Read More »</a></p>
				<div style="clear:both;"></div>
			</article>
		</div>

		<?php endwhile; ?>
		<?php endif; ?>

	<?php endif; ?>
<!--
	
<?php if ( is_single() ) {
	echo 'abc' } ?>
	
	<?php query_posts('showposts=1&post_type=post'); ?>
	<?php if ( have_posts () ) : while ( have_posts() ) : the_post(); ?>

		<div class="top-post-container">
			<div class="top-post">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="post_meta"><span>Topic:</span> <?php the_category(); ?>&nbsp;&nbsp;&nbsp;<span>Written by:</span> <?php the_author(); ?>
				<br>
				<?php the_time('F j, Y'); ?></p>
				<figure>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ;?>
				</figure>
				<p><?php the_excerpt(); ?></p>
				<p><a href="<?php the_permalink(); ?>">Read More »</a></p>
				<div style="clear:both;"></div>
			</div>
		</div>

		<?php endwhile; ?>
		<?php endif; ?>

} ?>
<!--
	

	<?php rewind_posts(); ?>

	<?php query_posts('offset=1&post_type=post'); ?>
	<?php if ( have_posts () ) : while ( have_posts() ) : the_post(); ?>

		<div class="blog_post-container">
			<article class="blog_post">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="post_meta"><span>Topic:</span> <?php the_category(); ?>&nbsp;&nbsp;&nbsp;<span>Written by:</span> <?php the_author(); ?>
				<br>
				<?php the_time('F j, Y'); ?></p>
				<figure>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ;?>
				</figure>
				<p><?php the_excerpt(); ?></p>
				<p><a href="<?php the_permalink(); ?>">Read More »</a></p>
				<div style="clear:both;"></div>
			</article>
		</div>

	<?php endwhile; ?>	
	<?php endif; ?>

<?php endif; ?>

	<!--<?php if(is_single()): ?>
		
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="post_meta"><span>Topic:</span> <?php the_category(); ?>&nbsp;&nbsp;&nbsp;<span>Written by:</span> <?php the_author(); ?>
		<br>
		<?php the_time('F j, Y'); ?></p>
		<strong><?php the_excerpt(); ?></strong>
		<?php the_content(); ?>
		<?php comments_template(); ?>-->