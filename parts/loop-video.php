<?php
/**
 * Template part for displaying a single video post
 */
?>

<section class="articles-top grid-x grid-padding-x article-container article-header">
	<div class="cell small-12 medium-8 medium-centered">

		<!-- Video Frame -->
		<iframe src="https://player.vimeo.com/video/295396898" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

		<!-- Title, info -->
		<div class="grid-x">
			<div class="cell small-12 medium-10">
				<h2 class="purple title pb-1"><?php the_title(); ?></h2>
				<div class="border-purple pr-1 pl-1">
					<p class="pl-1 purple bold"><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="cell small-12 medium-6">
		<div class="articles-featured" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
	</div>
</section> 


	<section class="front-page-videos deep-purple-bg pt-2 pb-2">
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
        		// 'paged' => $paged
			);		
			$main_posts = new WP_Query( $args );
			$count = 0;
			if( $main_posts->have_posts() ):
				while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
					<div class="cell small-12 medium-4">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
						<div class="border-yellow mt-1 pl-1">
							<h4><a class="yellow-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p class="yellow bold"><?php echo get_the_excerpt(); ?> </p>
						</div>
					</div>
				<?php endwhile; ?>
				<?php /* if (function_exists("pagination")) {
          			pagination($main_posts->max_num_pages);
      			} */ ?>
			<?php endif;  ?>
			<?php wp_reset_query();?>
			<!--<div class="cell small-12 medium-4">
					<img src="http://67.225.242.80/~wn2tjhelpdetroit/wp-content/uploads/2019/01/audrey-video-thumb.jpg">
				<div class="border-yellow mt-1 pl-1">
					<h4 class="yellow">Anxiety, Self-Harm and Recovery</h4>
				</div>
			</div>-->


			<!--<div class="cell small-12 medium-4">
					<img src="http://67.225.242.80/~wn2tjhelpdetroit/wp-content/uploads/2019/01/diane-video-thumb.jpg">
				<div class="border-yellow mt-1 pl-1">
					<a href="#"><h4>Bipolar Disorder:</h4></a>
					<p class="yellow bold">Struggle, Suicide, and the Need to Speak Up</p>
				</div>
			</div>-->

			<!--div class="cell small-12 medium-4">
					<img src="http://67.225.242.80/~wn2tjhelpdetroit/wp-content/uploads/2019/01/jamie-video-thumb.jpg">
				<div class="border-yellow mt-1 pl-1">
					<a href="#"><h4>Eating Disorders:</h4></a>
					<p class="yellow bold">A Family Crisis</p>
				</div>
			</div>-->
		</div>
		<div class=" grid-x grid-padding-x pt-2 align-middle contained">
			<div class="cell small-12 medium-6 large-8 border-white-rt">
				<p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
			</div>
			<div class="cell small-8 small-offset-4 medium-offset-0 medium-6 large-4">
				<a class="yellow-link" href="#"><h5 class="pl-1">Learn More About Teen Mental Health</h5></a>
			</div>
		</div>
	</section>

<div class="purple-bg">
	<section class="front-page-articles purple-bg grid-x grid-padding-x grid-margin-x pt-2 pb-2 contained">
		<!--Define our WP Query Parameters -->
<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 
<!--Start our WP Query-->
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 
		<div class="cell small-12 medium-6 large-4" >
			
			<a href="<?php the_permalink() ?>" class="yellow-link"><h4><?php the_title(); ?></h4></a>
			<p class="yellow"><?php echo get_the_date(); ?></p>
			<div class="border-white pl-1 grid-y grid-container fluid">
				<div class="cell small-10">
				<p class="white"><?php echo get_the_excerpt(); ?>
				</p>
			</div>
			<div class="cell small-2">
				<a href="<?php the_permalink(); ?>"><button href="#" class="button btn-white">Read More</button></a>
			</div>
			</div>
		</div>		
	<?php 
endwhile;
wp_reset_postdata();
?>
	</section>	
</div>