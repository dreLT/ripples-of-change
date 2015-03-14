<?php
/*
Template Name: Archives
*/
get_header(); ?>
	<div id="body-container-blog-archive">
		<div class="archives_container">
			<div class="archives_month">		
				<h2>Archives by Month:</h2>
						<?php
				global $wpdb;
				$limit = 0;
				$year_prev = null;
				$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
				foreach($months as $month) :
					$year_current = $month->year;
					if ($year_current != $year_prev){
						if ($year_prev != null){?>
						
						<?php } ?>
					
					<h3 class="archives_month-year"><?php echo $month->year; ?>:</h3>
					<?php } ?>
					<li class="archives_month-month"><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span></a> |</li>
				<?php $year_prev = $year_current;

				if(++$limit >= 18) { break; }

				endforeach; ?>
			</div>
			<div class="archives_categories-tags">	
				<div class="archives_tags">
					<h2>Tags:</h2>
					<?php wp_tag_cloud(); ?>
				</div>
				<div class="archives_categories">
					<h2>Topics</h2>
					<?php wp_list_categories( 'title_li', '' ); ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>