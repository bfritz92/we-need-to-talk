<?php
/**
 * Template part for displaying a past event
 */
?>

<section class="article-container article-header">
	<div class="center-h">
        <?php echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'past-events--img' ) ); ?>
		<div class="pr-1 pt-1">
			
			<h1 class="purple title pb-1"><?php the_title(); ?></h1>
		</div>
	</div>
</section> <!-- end section -->
<section class="articles-main grid-x grid-padding-x article-container">
	<div class="cell small-12 medium-12 large-12 large-centered pl-1 pt-2 columns article-content">
		<?php the_content(); ?>
	</div>
</section>