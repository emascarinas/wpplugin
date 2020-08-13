<?php
$repeater = $atts['repeater'];
	echo "<section class='wgrid'>";
	if( have_rows($repeater) ):
		while( have_rows($repeater) ): the_row();
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$content = get_sub_field('content');
			echo "<div class='event-row'>
					<div class='event-image' style='background-image:url({$image['url']})' role='img' aria-label='{$image['alt']}'></div>
					<div class='event-spacer'></div>
					<article class='featured-event white'>
						<div class='container-text'>
							<h3>{$title}</h3>
							{$content}
						</div>
					</article>
				</div>";
		endwhile;
	endif;
	echo "</section>";