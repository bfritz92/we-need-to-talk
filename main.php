<?php
/**
 * Template Name: Main Page
 */

get_header(); ?>
			
<div class="content">

	<section class="grid-x splash">
		<div class="cell small-10 medium-6 medium-offset-1">
			<?php the_post_thumbnail( 'category-thumb' ); ?>
		</div>
	</section>

<section class="front-page-videos purple-bg pt-3 pb-2">
		<div class="grid-x grid-padding-x grid-margin-x contained">
			<?php
			// $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
    			'post_type'  	=> 'video', 
				// 'post_parent'	=> $post->ID,
				'order'			=> 'ASC',
				'orderby'		=> 'rand', // meta_value = custom field URL: https://www.advancedcustomfields.com/resources/query-posts-custom-fields/
				/* 'meta_key'		=> 'last_name',	// meta_key = Use only if ordering by meta_value */											
				'posts_per_page'=> 3,
        		// 'paged' => $paged
			);		
			$main_posts = new WP_Query( $args );
			$count = 0;
			if( $main_posts->have_posts() ):
				while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
					<div class="cell small-12 medium-4">
						<a href="<?php the_permalink(); ?>" class="video-thumb"><?php the_post_thumbnail('full'); ?></a>
						<div class="mt-1">
							<h4><a class="yellow-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p class="white bold"><?php echo get_the_excerpt(); ?> </p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif;  ?>
			<?php wp_reset_query();?>
		</div>
		<div class=" grid-x grid-padding-x pt-2 align-middle contained">
			<div class="cell small-12 medium-6 large-8 text-right">
				<p class="white mb-0">Sharing personal stories and professional perspectives is a powerful way to help decrease the stigma associated with mental illness. It also helps empower others to speak up and ask for help.</p>
			</div>
			<div class="cell small-8 small-offset-4 medium-offset-0 medium-6 large-4 front-page-video-link">
				<a class="yellow-link" href="https://wn2t.org/stories/"><h5 class="pl-1">Watch More Videos About Youth Mental Health</h5></a>
			</div>
		</div>
	</section>

<div class="charcoal-bg">
	<section class="front-page-articles charcoal-bg grid-x grid-padding-x grid-margin-x pt-2 pb-2 contained">
		<!--Define our WP Query Parameters --> 
<?php $the_query = new WP_Query( array( 'posts_per_page' => '2', 'cat' => '3,7', 'orderby' => 'rand' ) ); ?>
 
<!--Start our WP Query--> 
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 
		<div class="cell small-12 medium-6 front-page-panels" >
			

			<div class="">
				<a href="<?php the_permalink() ?>" class="yellow-link"><h4><?php the_title(); ?></h4></a>
				<!--<p class="yellow"><?php echo get_the_date(); ?></p>-->
			</div>
			<div class="border-white pl-1">
				<p class="white"><?php echo get_the_excerpt(); ?>
				</p>
			</div>
			<div class="mt-1">
				<a href="<?php the_permalink(); ?>"><button href="#" class="button btn-white read-more-button">Read More</button></a>
			</div>


		</div>		
	<?php 
endwhile;
wp_reset_postdata();
?>
	</section>	

</div>


	

	<section class="front-page-events hide-if-empty">
		<div class="grid-x grid-padding-x align-middle contained" id="wn2t-events">
		</div>
		<div class=" grid-x grid-padding-x pt-2 align-middle contained mt-2">
			<div class="cell small-12 medium-6 large-8 border-purple-rt text-right">
				<p class="charcoal">Find out more about other youth mental health related events happening in the community.</p>
			</div>
			<div class="cell small-8 small-offset-4 medium-offset-0 medium-6 large-4">
				<a class="purple-link" href="/events/"><h5 class="pl-1">See All of Our Events Here</h5></a>
			</div>
		</div>
		</section>

	<?php
		$args = array(
    		'post_type'  	=> 'factpanel', 
			'orderby'       => 'rand',
			'posts_per_page'=> 1,
		);		
		$main_posts = new WP_Query( $args );
		$count = 0;
		if( $main_posts->have_posts() ):
			while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
				<section class="info-panel-1 <?php the_field ('css_class'); ?>" style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>')">
					<div class="grid-x contained">
						<div class="cell small-10 small-centered medium-8 medium-offset-1 large-6 large-offset-2">
							<h3 class="white border-white pl-1"><?php the_title(); ?></h3>
							<br>
							<a class="yellow-link source" href="<?php the_field ('source_url'); ?>"><h4><?php the_field ('source_name'); ?></h4></a>
						</div>
					</div>
				</section>
			<?php endwhile; ?>			
		<?php endif;  ?>
	<?php wp_reset_query();?>	
 
 <div class="charcoal-bg">
	<section class="disclaimer grid-x grid-padding-x align-middle charcoal-bg contained">
		<div class="cell small-12 medium-8">
			<h3 class="yellow"><?php echo get_post_meta($post->ID, 'footer_home_left_title', true); ?></h3>
			<br>
			<div class="border-yellow">
				<h5 class="white pl-1"> <?php echo get_post_meta($post->ID, 'footer_home_left_body', true); ?></h5>
			</div>
		</div>
		<div class="cell small-8 medium-4 small-offset-2 medium-offset-0">
			<?php echo get_post_meta($post->ID, 'footer_home_right', true); ?>
		</div>
		
	</section>
</div>
<div class="purple-bg pt-2 pb-2 grid-x grid-padding-x grid-margin-x">
	<div style="display:flex; flex-direction:column;" class="cell small-10 small-offset-1">
	<h3 class="white">Do you have a story you’d like to share?</h3>
		<h5 class="yellow pb-1">We’re always looking to expand the conversation about youth mental health.</h5>
		<a href="https://wn2t.org/contact-us/" style="align-self: end;margin-right: 2rem;" class="button btn-white">Let us know.</a>
	</div>
</div>

</div>

<?php get_footer(); ?>