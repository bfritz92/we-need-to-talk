<?php
/**
 * Template Name: Podcast Episode
 * Template Post Type: podcast
 */

get_header(); ?>
<div class="content">
	<section id="about-top" class="purple-bg podcast">
		<div class="grid-x grid-margin-x grid-padding-x contained">
			<div class="cell small-12 large-6 podcast--img">
			<picture class="about-page--section--img" alt="">
				<source srcset="<?php echo wp_get_attachment_image_srcset( 2921) ?>">
					<img src="<?php echo wp_get_attachment_image_url( 2921, 'large' ) ?>">
			</picture>
			</div>
			<div class="cell small-12 large-6 limit-900">
				<h1 class="yellow pb-1">Podcast Episodes</h1>
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

    <section class="pt-2 contained podcast-list">
		<?php
			$args = array(
				'category_name'  	=> 'Podcast', 
				'meta_key'			=> 'episode_number',
				'orderby'			=> 'meta_value',
				'order'				=> 'ASC',
				/*
				'order'			=> 'ASC',
				'orderby'		=> 'episode_number',*/									
				'posts_per_page'=> 15,
			);		
			$main_posts = new WP_Query( $args );
			$count = 0;
			if( $main_posts->have_posts() ):
				while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
					<div class="podcast-episode-listing mb-2">
						<div class="podcast-episode-listing--content">
						<p class="bold purple">Episode <?php the_field ('episode_number'); ?></p>
						<a href="<?php the_permalink(); ?>" ><h3 class="bold purple"><?php the_title(); ?></h3></a>
						<span class="charcoal mt-1"><?php the_excerpt(); ?></span>
						<div class="podcast-episode-listing--links">
							<a href="<?php the_permalink(); ?>" class="button btn-purple bold text-right mr-2">Listen</a>
							<span class="time"><?php the_field ('time'); ?> mins</span>
						</div>
						</div>
						<img class="podcast-icon" src="<?php the_field ('episode_icon'); ?>">	
					</div>
				<?php endwhile; ?>			
			<?php endif;  ?>
		<?php wp_reset_query();?>	
    </section>

	
</div>
<?php get_footer(); ?>