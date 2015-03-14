<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article class="blog_post">
		<figure class="post-thumb">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ;?>
		</figure>
		<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="post-meta"><span>Written by:&nbsp;&nbsp;<?php the_author(); ?></span><span>Topic:&nbsp;&nbsp;<?php the_category(' '); ?></span><span><?php the_time('F j, Y'); ?></span></p>
		<?php the_content('Read more...'); ?>
		<div style="clear:both;"></div>
	</article>
<?php endwhile; endif; ?>