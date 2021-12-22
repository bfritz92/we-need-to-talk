<?php
/**
 * Template Name: Stories Collection
 */

get_header(); ?>
			
<div class="content">
<div class="purple-bg">
<div class="grid-x pl-2 pr-2 pt-2 pb-2 videos-top contained">
	<?php
		$args = array(
			'post_type'  	=> 'video', 
			'order'			=> 'ASC',
			'orderby'		=> 'rand',									
			'posts_per_page'=> 1,
		);		
		$main_posts = new WP_Query( $args );
		$count = 0;
		if( $main_posts->have_posts() ):
			while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
				
				<div class="cell small-12 small-centered large-uncentered large-6 pl-2">
					<!--<p class="purple">Our Most Recent Video</p>-->
					<!-- <a href="<?php the_permalink(); ?>" ><h2 class="yellow"><?php the_title(); ?></h2></a> -->
					<div class="">
						<!--<p class="purple"><?php the_field ('video_short_story'); ?></p>-->
						<!-- <?php if (get_field('video_short_story')) : ?>-->
						<!-- <a href="<?php the_permalink(); ?>" class="button btn-purple" style="margin-bottom:0;"><?php the_field ('video_short_story'); ?></a> -->
						<!-- <?php else: ?> -->
						<!-- <a href="<?php the_permalink(); ?>" class="button btn-purple" style="margin-bottom:0;">Watch More</a> -->
						<!-- <?php endif; ?> -->
						<h1 class="yellow">Stories</h1>
						<div class="border-yellow pl-1 pr-1">
							<p class="white bold">By telling our stories we can reduce the stigma associated with mental illness and encourage those who need it reach out for support. These videos feature the stories of courageous young people in the Detroit Jewish community sharing about their mental health journeys and communal professionals offering guidance for young people. We are extremely grateful for their vulnerability and bravery to share their stories in order to help others.</p>
						</div>
					</div>
				</div>

				<div class="cell small-12 small-centered large-uncentered large-6">
					<iframe src="<?php the_field('video_url')?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>	

			<?php endwhile; ?>			
		<?php endif;  ?>
	<?php wp_reset_query();?>	
</div>
</div>
<div class="grid-x pt-2 pb-1 pl-2 pr-2 grid-margin-x grid-padding-x contained">
	<div class="cell">
	<h2 class="purple"><?php the_field('story_category_one')?></h2>
	<p class="purple border-bottom pb-1" style="max-width:500px;">Hear local young people and parents share their mental health related challenges and the steps that they took to heal. </p>
	</div>
</div>
<!-- THE LØØP -->
<div class="grid-x grid-padding-x grid-margin-x pl-2 pr-2 contained">
	<?php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
   			'post_type'  	=> 'video', 
			'category_name'  => 'personal',
			'order'			=> 'DESC',
			'orderby'		=> 'date', 
			'posts_per_page'=> 21,
       		'paged' => $paged
		);		
		$main_posts = new WP_Query( $args );
		$count = 0;
		if( $main_posts->have_posts() ):
			while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
				<div class="cell small-12 medium-4">
					<a href="<?php the_permalink(); ?>" class="video-thumb"><?php the_post_thumbnail('full'); ?></a>
					<div class="border-purple mt-1 pl-1">
						<h4><a class="purple-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						
					</div>
				</div>
			<?php endwhile; ?>			
		<?php endif;  ?>
		<?php wp_reset_query();?>		
</div>
	
	<!-- <?php echo do_shortcode('[ajax_load_more id="Personal" container_type="div" css_classes="grid-x grid-padding-x grid-margin-x pl-2 pr-2" post_type="video" posts_per_page="3" category="personal" pause="true" scroll="false" transition_container="false" images_loaded="true" offset="3" button_label="Load More Videos"]') ?>-->

<!-- END LØØP -->
<div class="grid-x grid-padding-x grid-margin-x pt-2 pb-1 pl-2 pr-2 contained">
	<div class="cell">
		<h2 class="purple"><?php the_field('story_category_two')?></h2>
		<p class="purple border-bottom pb-1" style="max-width:500px;">Hear local experts share their insights into this epidemic and what we all should know about youth mental health. </p>
	</div>
</div>
<!-- THE LØØP -->
		<div class="grid-x grid-padding-x grid-margin-x pl-2 pr-2 contained">
		<?php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
   			'post_type'  	=> 'video', 
			'category_name'  => 'professional',
			'order'			=> 'DESC',
			'orderby'		=> 'date', 
			'posts_per_page'=> 12,
       		'paged' => $paged
		);		
		$main_posts = new WP_Query( $args );
		$count = 0;
		if( $main_posts->have_posts() ):
			while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
				<div class="cell small-12 medium-4">
					<a href="<?php the_permalink(); ?>" class="video-thumb"><?php the_post_thumbnail('full'); ?></a>
					<div class="border-purple mt-1 pl-1">
						<h4><a class="purple-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						
					</div>
				</div>
			<?php endwhile; ?>			
		<?php endif;  ?>
		<?php wp_reset_query();?>				
	</div>
	
		<!--<?php echo do_shortcode('[ajax_load_more id="Personal" container_type="div" css_classes="grid-x grid-padding-x grid-margin-x pl-2 pr-2" post_type="video" posts_per_page="3" category="professional" pause="true" scroll="false" transition_container="false" images_loaded="true" offset="3" button_label="Load More Videos"]') ?>-->	

</div>	
<?php get_footer(); ?>