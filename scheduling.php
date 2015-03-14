<?php
/*
Template Name: Scheduling & Contact
*/
;?>

<?php get_header(); ?>
		<div class="body-container container">
			<div class="row">
				<div class="scheduling_container col-md-6">
					<section>
						<header>
							<h2>Schedule an Appointment</h2>
						</header>
						<article class="intro-text_margin-bottom">
							<?php the_field('schedintro'); ?>						
						</article>
					</section>	
				</div>
				<div class="contact_container col-md-6">
					<section>
						<header>
							<h2>Visit Us</h2>
						</header>
							<h3 class="contact_headings">Office Hours</h3>
						</header>
							<article>
								<?php the_field('contact_hours'); ?>
							</article>
						<header>
							<h3 class="contact_headings">Office Location</h3>
						</header>
							<article>
								<?php the_field('contact_location'); ?>
								<iframe
								width="425"
								height="375"
								frameborder="0" style="border:0"
								src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD_-YJUS8lELtJHDi5exZoN96EPprLfi0c&q=11265+Dovedale+Court,Marriottsville,MD,21104"
								class="contact_map"
								>
								</iframe>
							</article>
					</section>
				</div>
			</div>	
		</div>
	<?php get_footer(); ?>