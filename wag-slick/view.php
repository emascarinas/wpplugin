<?php 
$postID = get_the_ID();

?>
<div id="homeSlider">

	<?php if( have_rows('slideRepeater', $postID) ): ?>

		<?php while( have_rows('slideRepeater', $postID) ): the_row(); 

					// vars
			$sliderimage = get_sub_field('slide_image', $postID);
			$imagepos = get_sub_field('image_positioning', $postID); 
			$headline = get_sub_field('carousel_headline', $postID);
			$yestobutton = get_sub_field('yesbutton', $postID);
			$buttontexty = get_sub_field('buttontexty', $postID);
			$buttonURLy = get_sub_field('urltexty', $postID);
			$buttonTarget = get_sub_field('buttonTarget', $postID);
			?>

			<div class="home_image" title="<?php echo $sliderimage['alt']; ?>" style="background: url('<?php echo $sliderimage['url']; ?>') <?php echo $imagepos; ?> / cover no-repeat;">

				<div class="banner_text">
					<?php if( $headline ): ?>
						<div class="fitty-element">
							<?php echo $headline; ?>
						</div>	
					<?php endif; ?>

					<?php if( $yestobutton ):
						echo '<a href="' . $buttonURLy . '"'; 
						if( $buttonTarget == 1 ):
							echo 'target="_blank"'; 
						endif; 
						$gaEvent = strtoupper($buttontexty) == "ORDER NOW" ? 'onclick="gtag(\'event\', \'Click\', {\'event_category\' : \'Order\',\'event_label\' : \'OrderNow\'});"' : '';
						echo '><button class="btn-standard black">' . $buttontexty . '</button></a>';
					endif; ?>

				</div>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>
	
</div>