<?php
/**
 * Template Name: Podcast TEST
 */

get_header(); ?>
<div class="content">
	<section id="about-top" class="purple-bg">
		<div class="grid-x grid-margin-x grid-padding-x contained">
			<div class="cell small-12 large-6 large-centered">
				<h1 class="purple pb-1">Podcast Episodes</h1>
				<div class="border-yellow pl-1">
					<p class="white bold mb-2">Join Todd Krieger, Senior Planning Director at the Jewish Federation, as he and guests explore the reasons for youth mental illness and provide tools for young people and their families struggling to achieve mental wellness.</p>
				</div>
				<div class="podcast--subscribe">
					<a href="https://podcasts.apple.com/us/podcast/the-we-need-to-talk-podcast/id1469235425?uo=4"><img class="podcast--subscribe-button" src="https://wn2t.org/wp-content/uploads/2019/05/US_UK_Apple_Podcasts_Listen_Badge_RGB.svg"></a>
					<a href="https://www.google.com/podcasts?feed=aHR0cHM6Ly93d3cuc3ByZWFrZXIuY29tL3Nob3cvMzUyMzYxMi9lcGlzb2Rlcy9mZWVk"><img src="https://wn2t.org/wp-content/uploads/2019/05/google-play-badge.png"></a>
				</div>
			</div>
			
			</div>
		</div>
	</section>

    <section class="grid-x pl-2 pr-2 pt-2 videos-top">
	<?php
		$args = array(
			'post_category'  	=> 'Podcast', 
			'order'			=> 'ASC',
			'orderby'		=> 'rand',									
			'posts_per_page'=> 12,
		);		
		$main_posts = new WP_Query( $args );
		$count = 0;
		if( $main_posts->have_posts() ):
			while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
				<div class="cell small-12 small-centered large-uncentered large-6">
					<iframe src="<?php the_field('video_url')?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>	
				<div class="cell small-12 small-centered large-uncentered large-6 pl-2">
					<!--<p class="purple">Our Most Recent Video</p>-->
					<a href="<?php the_permalink(); ?>" ><h2 class="purple-link"><?php the_title(); ?></h2></a>
					<div class="">
						<!--<p class="purple"><?php the_field ('video_short_story'); ?></p>-->
						<?php if (get_field('video_short_story')) : ?>
						<a href="<?php the_permalink(); ?>" class="button btn-purple" style="margin-bottom:0;"><?php the_field ('video_short_story'); ?></a>
						<?php else: ?>
						<a href="<?php the_permalink(); ?>" class="button btn-purple" style="margin-bottom:0;">Watch More</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>			
		<?php endif;  ?>
	<?php wp_reset_query();?>	
    </section>

	<section id="podcast-episodes" class="contained grid-x grid-padding-x grid-margin-x pt-1 pb-2">
		<div class="cell small-12">
			<div class="grid-x grid-padding-x grid-margin-x">
				
			<!-- <a class="spreaker-player" href="https://www.spreaker.com/show/the-we-need-to-talk-podcast" data-resource="show_id=3523612" data-width="100%" data-height="700px" data-theme="light" data-playlist="show" data-playlist-continuous="false" data-autoplay="false" data-live-autoplay="false" data-chapters-image="true" data-episode-image-position="right" data-hide-logo="false" data-hide-likes="false" data-hide-comments="false" data-hide-sharing="false" data-hide-download="true">Listen to "The We Need to Talk Podcast" on Spreaker.</a> -->
			</div>
		</div>
	</section>	

	
</div>
<?php get_footer(); ?>