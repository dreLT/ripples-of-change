<?php if (have_posts()) : ?>
<?php $count = 0; ?>
<?php while (have_posts()) : the_post(); ?>
<?php $count++; ?>

	<?php if ($count == 1) : ?>

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

	<?php elseif ($count > 1) : ?>

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
			</div>
		</div>

<?php endif; endwhile; endif; ?>