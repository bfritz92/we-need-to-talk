<?php
/**
 * Template part for displaying a single post
 */
?>

<section class="articles-top grid-x grid-padding-x article-container article-header">
	<div class="cell small-12 medium-6 center-v">
		<div class="pr-1 pt-1">
			
			<h2 class="purple title pb-1"><?php the_title(); ?></h2>
			<div class="border-purple pr-1">
				<p class="purple bold pl-1"><?php echo get_the_excerpt(); ?></p>

			</div>
		</div>
	</div>
	<div class="cell small-12 medium-6">
		<div class="articles-featured" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
	</div>
</section> <!-- end section -->
<section class="articles-main grid-x grid-padding-x article-container">
	<div class="cell small-12 medium-12 large-12 large-centered pl-1 pt-2 columns article-content">
		<?php the_content(); ?>
	</div>
</section>