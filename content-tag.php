<?php
if (is_tag( )) {
  $tag = get_query_var('tag');
query_posts('showposts=1&tag='.$tag);
}
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="blog_post">
			<figure class="post-thumb">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ;?>
			</figure>
			<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="post-meta"><span>Topic:</span> <?php the_category(' '); ?>&nbsp;&nbsp;&nbsp;<span>Written by:</span> <?php the_author(); ?>
			<br>
			<?php the_time('F j, Y'); ?></p>
			<?php the_content('Read more...'); ?>
			<div style="clear:both;"></div>
		</article>

	<?php endif; ?>

<?php endwhile; endif; ?>