<?php
/*
Template Name: Tag
*/
get_header(); ?>
	<div id="body-container-blog-category" class="container">
		<p><a href="<?php echo site_url(); ?>/blog">&laquo; Back to latest articles</a></p>
		<?php the_post(); ?> 
		<div class="row">
			<div class="blog_tag-heading">
				<h2>Tag: <?php single_tag_title(); ?></h2>
			</div>
			<div class="blog-home_post-list col-md-8">
				<div class="blog_post-container">
					<?php get_template_part( 'content', 'post_archive' ); ?>
				</div>
			</div>
			<aside class="blog_nav col-md-4">
				<div class="blog_nav-menu">
					<div class="blog_categories">
						<h3>Topics</h3>
							<?php wp_list_categories( 'title_li', '' ); ?>
						</div>
					<div class="blog_archives">
						<a href="<?php echo site_url(); ?>/archives/">Archives »</a>
					</div>
				</div>
			</aside>
			<div class="blog_pagination">
				<?php my_pagination(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>