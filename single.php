<!DOCTYPE HTML>
<html>
	<?php get_header(); ?>
		<div id="body-container-blog-single-post" class="container">
			<p><a href="<?php echo get_site_url(); ?>/blog" class="blog_back-to-posts">&laquo; Back to latest articles</a></p>
			<?php the_post(); ?> 
			<div class="row">
				<div class="blog_article col-md-8">
					<section>
						<header>
							<h2 class="single-post_title"><?php the_title(); ?></h2>
						</header>
						<p class="post-meta"><span>By: <?php the_author(); ?></span> Topic: <span><?php the_category(' '); ?></span><span><?php the_time('F j, Y'); ?></span></p>
						<?php the_content(); ?>
					</section>
					<section class="post-author-info">
						<figure class="post-author-img">
							<?php echo get_avatar( get_the_author_meta('user_email') ); ?>
						</figure>
						<h3><strong>Author:</strong> Kendra Benesch</h3>
						<p class="post-author-bio"><?php the_author_meta('description'); ?></p>
					</section>
					<p class="post-tags"><?php the_tags(); ?></p>
					<?php related_posts(); ?>
						<!--<div class="post-suggestion">
							<div class="thumb thumb1"></div>
							<a href="#"><h3>What is Play Therapy?</h3></a>
						</div>
						<div class="post-suggestion">
							<div class="thumb thumb2"></div>
							<a href="#"><h3>What is Play Therapy?</h3></a>
						</div>
						<div class="post-suggestion">
							<div class="thumb thumb3"></div>
							<a href="#"><h3>What is Play Therapy?</h3></a>
						</div>-->
					<!--<p><a href="<?php echo get_site_url(); ?>/blog/" class="blog_back-to-posts">&laquo; Back to latest articles</a></p>-->
					<?php comments_template(); ?> 
				</div>
				<aside class="blog_nav col-md-4">
					<div class="blog_nav-menu">
						<div class="blog_categories">
							<h3>Topics</h3>
							<?php wp_list_categories( 'title_li', '' ); ?>
						</div>
						<div class="blog_archives">
							<h3><a href="blog/archives">Archives</a></h3>
						</div>
					</div>
				</aside>
			</div>
		</div>
	<?php get_footer(); ?>
</html>