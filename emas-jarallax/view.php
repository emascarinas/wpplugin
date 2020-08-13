<?php
	$image = get_field($atts['image']);
	echo "<div class='jarallax2'>
	<img class='jarallax-img' src='{$image['url']}' alt='{$image['alt']}'>
	</div>";