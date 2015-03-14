			<aside class="services_nav side_nav col-md-3">
				<ul>
					<li><a href="services_home.php">Counseling Services</a></li>
					<li><a href="services_approach.php">Our Approach &amp;<br>Techniques</a></li>
					<li><a href="services_play.php">Play Therapy</a></li>
					<li><a href="services_art.php">Art Therapy</a></li>
					<li><a href="services_music.php">Music Therapy</a></li>
					<li><a href="services_equine.php">Equine Therapy</a></li>
				</ul>
			</aside>
			<nav class="services_nav side_nav">
					<?php
						$args = array(
							'menu' => 'Services_Navigation'
						); 
						wp_nav_menu( $args );	
					?>
			</nav>