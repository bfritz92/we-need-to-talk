<?php
/**
 * Template Name: Main Page Old
 */

get_header(); ?>
			
<div class="content">

	<section class="grid-x splash">
		<div class="cell small-6 medium-offset-1">
			<img src="http://67.225.242.80/~wn2tjhelpdetroit/wp-content/uploads/2019/01/wntt.svg">
		</div>
	</section>

	<section class="front-page-articles purple-bg grid-x grid-padding-x grid-margin-x pt-2 pb-2" data-equalizer>
		<div class="cell small-12 medium-6 large-4" data-equalizer-watch>
			<a href="#"><h4>Understanding Anxiety in Young People</h4></a>
			<p class="yellow">January 2, 2019</p>
			<div class="border-white pl-1 grid-y grid-container fluid">
				<div class="cell small-10">
				<p class="white">Anxiety: We all live with it. Anxiety is a normal reaction to the kinds of pressures we encounter every day. Unchecked or out of balance, anxiety can play havoc in a your young person’s mental health.
				</p>
			</div>
			<div class="cell small-2">
				<button href="#" class="button btn-white">Read More</button>
			</div>
			</div>
		</div>

		<div class="cell small-12 medium-6 large-4 hide-for-small-only" data-equalizer-watch>
			<a href="#"><h4>Nutrition and Mental Health</h4></a>
			<p class="yellow">January 2, 2019</p>
			<div class="border-white pl-1 grid-y grid-container fluid">
				<div class="cell small-10">
				<p class="white">Following a healthy diet plays a large role in taking good care of yourself. Scientists have linked mood swings and other depression symptoms with unhealthy eating and deficiencies in some vitamins and minerals.
				</p>
				</div>
			</div>
			<div class="cell small-2">
				<button href="#" class="button btn-white">Read More</button>
			</div>
		</div>

		<div class="cell small-12 medium-6 large-4 show-for-large" data-equalizer-watch>
			<a href="#"><h4>Building Resilience as you Grow</h4></a>
			<p class="yellow">January 2, 2019</p>
			<div class="border-white pl-1 grid-y grid-container fluid" >
				<div class="cell small-10">
					<p class="white">Life appears easy for young people in the movies, on TV and social media. But the reality is, it’s tough being a young person. 
					</p>
				</div>
				<div class="small-2">
				</p>
				<button href="#" class="button btn-white">Read More</button>
			</div>
			</div>
		</div>
	</section>	

	<section class="front-page-categories deep-purple-bg grid-x grid-padding-x grid-margin-x pl-2 pr-2">
		<div class="cell small-6 medium-4 large-2 border-white mt-1 mb-1">
			<a href="#"><h5>Category One</h5></a>
		</div>
		<div class="cell small-6 medium-4 large-2 border-white mt-1 mb-1">
			<a href="#"><h5>Category Two</h5></a>
		</div>
		<div class="cell small-6 medium-4 large-2 border-white mt-1 mb-1">
			<a href="#"><h5>Category Three</h5></a>
		</div>
		<div class="cell small-6 medium-4 large-2 border-white mt-1 mb-1">
			<a href="#"><h5>Category Four</h5></a>
		</div>
		<div class="cell small-6 medium-4 large-2 border-white mt-1 mb-1">
			<a href="#"><h5>Category Five</h5></a>
		</div>
		<div class="cell small-6 medium-4 large-2 border-white mt-1 mb-1">
			<a href="#"><h5>Category Six</h5></a>
		</div>

	</section>

	<section class="front-page-videos charcoal-bg pt-2 pb-2">
		<div class="grid-x grid-padding-x grid-margin-x">
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
							<h4 class="yellow"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
		<div class=" grid-x grid-padding-x pt-2 align-middle ">
			<div class="cell small-12 medium-6 large-8 border-white-rt">
				<p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
			</div>
			<div class="cell small-8 small-offset-4 medium-offset-0 medium-6 large-4">
				<a href="#"><h5 class="pl-1">Learn More About Teen Mental Health</h5></a>
			</div>
		</div>
	</section>

	<section class="front-page-events">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell small-12 medium-4 border-yellow">
				<h5 class="purple">Lorem Ipsum Dolor Sit Amet</h5>
				<p class="purple thin">10:00AM - 12:00PM</p>
				<p class="purple thin">January 13th</p>
				<p class="purple">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
				<a href="#" class="button btn-purple">Register</a>
			</div>
			<div class="cell small-12 medium-8">
				<img src="http://67.225.242.80/~wn2tjhelpdetroit/wp-content/uploads/2019/01/JLH_reg_email2.jpg">
			</div>
		</div>
	</section>

	<section class="info-panel-1 grid-x align-center">
		<div class="cell small-10 medium-8 large-6">
			<h4 class="white border-white pl-1">Heavy users of social media increase their risk of depression by 27%.</h4>
			<br>
			<a href="#"><h4>Learn more about how social media affects you and your teen</h4></a>
		</div>
	</section>
 
	<section class="disclaimer grid-x grid-padding-x align-middle charcoal-bg">
		<div class="cell small-12 medium-8">
			<h3 class="yellow">The Kids on The Site</h1>
			<br>
			<div class="border-yellow">
				<h5 class="white pl-1">All of the kids featured on the "We Need to Talk" website live in the metro Detroit area. We are extremely grateful for their participation and willingness to share their stories and insights.</h3>
				<h5 class="white pl-1">Many of the teens are also participants in Friendship Circle's UMatter program. We are greatly appreciative for the support and partnership of everyone involved in UMatter. <a href="#" class="yellow">Learn more here.</a></h3>
			</div>
		</div>
		<div class="cell small-12 medium-4">
			<img src="http://67.225.242.80/~wn2tjhelpdetroit/wp-content/uploads/2019/01/logos-e1528465953805.png">
		</div>
	</section>

</div>

<?php get_footer(); ?>