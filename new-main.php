<?php
/**
 * Template Name: NEW Main Page, updated 6/19/20
 */

get_header(); ?>
			
<div class="content">
<img src="https://wn2t.org/wp-content/uploads/2020/10/WNT2-Survey-Email-Hdr-f-scaled.jpg" class="hide-for-large">
	<section class="grid-x new-splash purple-bg">
		<div class="cell new-splash--headline small-12 large-6 large-offset-6">
		
			<div class="p10 purple-bg pl-1 pb-1">
				<h3 class="yellow pt-1">Got 10 minutes?</h3>
				<h3 class="yellow pb-1">You could change a life.</h3>
				<h4 class="pr-1 yellow pb-1">Help us take care of the mental health of our young people — and earn a chance to receive a $50 Amazon gift card. </h4>
				<h5 style="text-align: right;padding-right: 1rem;">
					<a href="https://www.surveymonkey.com/r/F7VVLJX" class="white-link">Take our online survey</a>
					</h5>
			</div>
		</div>
	</section>

	<section class="need-help charcoal-bg pt-3 pb-2">
		
			<div class="need-help--container">
				<i class="fas fa-search fa-9x yellow need-help--icon"></i>
			
				<div class="ml-1 pl-1 border-yellow">
					<h2 class="yellow">Need help finding help?</h2>
					<p class="white">Our resources page has contact information for local and national mental health organizations as well as useful information to guide you in finding the right help for you.</p>
					<h5><a class="yellow-link" href="http://www.wn2t.org/resources">Find Help</a></h5>
				</div>
			</div>

		
	</section>

<div class="deep-purple-bg">
	<section class="grid-x grid-padding-x align-middle deep-purple-bg contained">
		<div class="cell small-12 medium-6 large-8">
			
				<h5 class="yellow pl-1">Thank you to the United Way for Southeastern Michigan, The Ravitz Foundation and The Zuckerman/Klein Family Foundation for their generous support of We Need To Talk’s 2020 Mental Health Awareness Month events.</h5>
			
		</div>
		<div class="cell small-8 medium-6 large-4 small-offset-2 medium-offset-0 flex-column">
			<a href="https://unitedwaysem.org/"><img style="max-height:200px;" class="pt-1 pb-1" src="https://wn2t.org/wp-content/uploads/2020/06/UWSEM-logo.jpg"></a>
			<img style="max-width:100%;" class="pt-0 pb-1" src="https://wn2t.org/wp-content/uploads/2020/06/ravitz-foundation-logo.png">
			<h4 class="white centered pb-1">The Zuckerman/Klein Family Foundation</h4>
		</div>
		
	</section>
</div>

<section class="front-page-videos purple-bg pt-3 pb-2">
	<h2 class="yellow pb-1">Telling Their Own Stories</h1>
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
				<a class="yellow-link" href="https://wn2t.org/stories/"><h5 style="display:inline;">Watch More Videos About Youth Mental Health</h5></a>
			</div>
		</div>
	</section>


	

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

	<!-- <section class="charcoal-bg">
		<div class="grid-x grid-padding-x align-middle contained podcast pt-3 pb-2" id="podcast">
			<div class="cell small-12 medium-6">
				<h2 class="yellow pl-1">Listen and Learn</h2>
				<p class="white pl-1">The We Need to Talk podcast series explores topics surrounding youth mental health with leading local experts.</p>
				<h5><a class="pl-1 yellow-link">Listen Now</a></h5>
			</div>
			<div class="cell small-12 medium-6">
				<a class="spreaker-player" href="https://www.spreaker.com/show/the-we-need-to-talk-podcast" data-resource="show_id=3523612" data-width="100%" data-height="350px" data-theme="dark" data-playlist="show" data-playlist-continuous="false" data-autoplay="true" data-live-autoplay="false" data-chapters-image="true" data-episode-image-position="left" data-hide-logo="false" data-hide-likes="false" data-hide-comments="false" data-hide-sharing="false" data-hide-download="true" >Listen to "The We Need to Talk Podcast" on Spreaker.</a>
			</div>
		</div>
	</section> -->

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
		<a href="https://wn2t.org/contact-us/" style="align-self: end;margin-right: 2rem;" class="button btn-yellow">Let us know.</a>
	</div>
</div>

</div>

<?php get_footer(); ?>