<?php 
/**
 * The template for past events
 */

get_header(); 
$category = get_the_category($post->ID);
$category = $category[0]->cat_ID;
?>
			
<div class="content">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'pastevent' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

</div> <!-- end #content -->


<div class="contained">
	<div class="grid-x grid-padding-x grid-amrgin-x">
		<div class="cell small-12">
			<h3 class="purple border-bottom">Related Articles</h3>
		</div>
	</div>
	<section class="front-page-articles grid-x grid-padding-x grid-margin-x pt-2 pb-2">
		<!--Define our WP Query Parameters --> 
		
<?php
$args = array (

    'nopaging'              => false,
    'posts_per_page'        => '3',
    'ignore_sticky_posts'   => false,
	'cat'					=> $category,
    'post__not_in'          => array(get_the_ID())
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) : 
    while ( $query->have_posts() ) : $query->the_post();
 ?>
		<div class="cell small-12 medium-6 large-4 front-page-panels" >
			

			<div class="">
				<h4><a href="<?php the_permalink() ?>" class="purple-link"><?php the_title(); ?></a></h4>
			</div>
			
			<div class="mt-1">
				<a href="<?php the_permalink(); ?>"><button href="#" class="button btn-purple">Read More</button></a>
			</div>


		</div>		
	<?php 
endwhile;
endif; 
wp_reset_postdata();
?>
	</section>	

</div>


<?php get_footer(); ?>