<?php
/**
 * Template Name: Individual Video
 */


get_header(); ?>

<section class="articles-top grid-x grid-padding-x article-container article-header">
	<div class="cell small-12">

		<!-- Video Frame -->
		<iframe src="<?php echo get_post_meta($post->ID, 'video_url', true); ?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	
		

		<!-- Title, info -->
		<div class="grid-x">
			<div class="cell small-12 pb-2 pt-1">
				<h2 class="purple title pb-1"><?php the_title(); ?></h2>
					<p class="pl-1 purple bold">
						<style>
							.hinge-in-from-top + .more-btn {
								display:none;
							}
						</style>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="read-more-content" id="read-more-content" data-closable data-toggler data-animate="hinge-in-from-top slide-out-right" style="display:none;">
							<?php the_content(); ?>
							<p><button class="button abstract-btn" data-close>CLOSE</button></p>
						</div>
						<button data-toggle="read-more-content" class="button more-btn" href="#">SHOW MORE <i class="fa fa-plus"></i></button>							
						<?php endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
					</p>
			</div>
		</div>
	</div>
	
</section> 


	<section class="front-page-videos pt-2 pb-2">
		<div class="grid-x grid-padding-x grid-margin-x contained">
			<h3 class="purple border-bottom mb-1">Related Videos</h3>
		</div>
		<div class="grid-x grid-padding-x grid-margin-x contained">
			<?php
			// $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
    			'post_type'  	=> 'video', 
				// 'post_parent'	=> $post->ID,
				'order'			=> 'ASC',
				'orderby'		=> 'title', // meta_value = custom field URL: https://www.advancedcustomfields.com/resources/query-posts-custom-fields/
				/* 'meta_key'		=> 'last_name',	// meta_key = Use only if ordering by meta_value */											
				'posts_per_page'=> 3,
    			'post__not_in'           => array(get_the_ID())
        		// 'paged' => $paged
			);		
			$main_posts = new WP_Query( $args );
			$count = 0;
			if( $main_posts->have_posts() ):
				while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
					<div class="cell small-12 medium-4">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
						<div class="border-purple mt-1 pl-1">
							<h4><a class="purple-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<!--<p class="purple bold"><?php echo get_the_excerpt(); ?> </p>-->
						</div>
					</div>
				<?php endwhile; ?>
				<?php /* if (function_exists("pagination")) {
          			pagination($main_posts->max_num_pages);
      			} */ ?>
			<?php endif;  ?>
			<?php wp_reset_query();?>
			
		</div>
		
	</section>
	<?php
		$args = array(
    		'post_type'  	=> 'factpanel', 
			'orderby'		=> 'rand',
			'posts_per_page'=> 1,
		);		
		$main_posts = new WP_Query( $args );
		$count = 0;
		if( $main_posts->have_posts() ):
			while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
				<section class="info-panel-1 <?php the_field ('css_class'); ?>" style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>')">
					<div class="grid-x align-center contained">
						<div class="cell small-10 medium-8 large-6">
							<h4 class="white border-white pl-1"><?php the_title(); ?></h4>
							<br>
							<a class="yellow-link source" href="<?php the_field ('source_url'); ?>"><h4><?php the_field ('source_name'); ?></h4></a>
						</div>
					</div>
				</section>
			<?php endwhile; ?>			
		<?php endif;  ?>
	<?php wp_reset_query();?>	
<?php get_footer(); ?>