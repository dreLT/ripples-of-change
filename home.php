	<?php get_header(); ?>
		<div id="body-container-blog-home" class="container">
			<div class="blog-home_intro-container row">
				<section class="blog-home_intro-text col-md-8">
					<header>
						<h2>Ripples of Change Blog</h2>
					</header>
					<article>
						<p style="font-size: 22px;">Coming soon!</p> 					
					</article>
				</section>
				<aside class="button_submit-q col-md-4">
					<a href="<?php echo get_site_url(); ?>/blog/questions/"><img src="<?php bloginfo('template_directory');?>/img/button_submit-q.png"></a>
				</aside>
			</div>
			<div class="row">
				<div class="blog-home_post-list col-md-8">
					<?php get_template_part( 'content', 'post'); ?>
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