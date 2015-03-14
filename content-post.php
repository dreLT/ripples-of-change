<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>

		<div class="blog_top-post">
			<figure class="top-post-thumb">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ;?>
			</figure>
			<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="post-meta"><span>By:&nbsp;&nbsp;<?php the_author(); ?></span><span>Topic:&nbsp;&nbsp;<?php the_category(' '); ?></span><span><?php the_time('F j, Y'); ?></span></p>
			<div class="post-excerpt"><?php the_content('Read more...'); ?></div>
			<div style="clear:both;"></div>
		</div>

	<?php else: ?>

		<article class="blog_post">
			<figure class="post-thumb">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ;?>
			</figure>
			<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="post-meta"><span>By:&nbsp;&nbsp;<?php the_author(); ?></span><span>Topic:&nbsp;&nbsp;<?php the_category(' '); ?></span><span><?php the_time('F j, Y'); ?></span></p>
			<?php the_content('Read more...'); ?>
			<div style="clear:both;"></div>
		</article>

	<?php endif; ?>

<?php endwhile; endif; ?>