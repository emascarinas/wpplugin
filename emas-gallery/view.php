<!-- Portfolio Items grid -->
<section id="portfolio-items" class="container page-template-page-portfolio-flex">

	<?php

		// Setup variables for dynamic rows
		$numOfCols = 3;
		$rowCount = 0;
		$colWidth = 12 / $numOfCols;

		while( have_rows('gallery', $post->ID) ): the_row();
			$image = get_sub_field('image');
			?>
			<div class="col c4 item .lazy">
				<!-- <a data-fancybox="gallery" href="<?php echo $image['sizes']['large'];?>" rel="gallery1" class="feat-image-container"> -->
					<img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>" />
			</div>
		<?php endwhile; // END the loop ?>
</section><!-- #portfolio-items -->