<?php
/**
 * Displays category pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
<?php 
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	
?>
<?php 
	$term = get_queried_object();
	$cat_title = get_field('cat_purple_header_title', $term);
	$cat_text = get_field('cat_purple_header_textarea', $term);
	$cat_image = get_field('cat_purple_header_image', $term); 
?>
<?php if ($cat_text) : ?>
	<section id="about-top" class="purple-bg">
		<div class="grid-x grid-margin-x grid-padding-x contained">
			<div class="cell small-12 large-7 large-centered">
				<h1 class="yellow pb-2"><?php single_cat_title(); ?></h1>
				<div class="border-yellow pl-1">
					<p class="white bold"><?php echo $cat_text ?></p>
				</div>
			</div>
			<div class="cell large-5 preview show-for-large" style="background-image: url('<?php echo $cat_image ?>'); max-width:360px;">
			</div>
		</div>
	</section>
<?php endif; ?>

<div class="content contained">
<!-- MAIN ARTICLES SEGMENT -->

<section class="articles-main grid-x grid-padding-x">
	<?php if ($category_id == '8') : ?>
	<div class="cell small-12 medium-12 large-12 large-centered medium-centered pl-1 pt-2">		
	<h2 class="purple border-bottom">Helpful News Articles</h2>		
		<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type'  	=> 'post',
				'cat'			=> $cat,
				// 'post_parent'	=> $post->ID,
				'order'			=> 'DESC',
				'orderby'		=> 'date', // meta_value = custom field URL: https://www.advancedcustomfields.com/resources/query-posts-custom-fields/
				/* 'meta_key'		=> 'last_name',	// meta_key = Use only if ordering by meta_value */											
				'posts_per_page'=> 8,
		
				'paged' => $paged
			);		
			$main_posts = new WP_Query( $args );
			$count = 0;
			if( $main_posts->have_posts() ):
				while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
					<?php
						$author_id = get_the_author_meta('ID');
						$author_title = get_field('title', 'user_'. $author_id );
						// - Coming Soon $author_badge = get_field('author_badge', 'user_'. $author_id );
					?>
					
		
		<div class="grid-x grid-padding-x mb-2 mt-2">
			<div class="cell small-2">
				<div class="news-source" style="background-image:url('<?php the_field ('news_icon'); ?>')"></div>
			</div>
			
			<div class="cell small-10">
				<a href="<?php the_field ('external_link'); ?>" class=""><h5 class="purple-link source"><?php the_title(); ?></h5></a>
				<p class="charcoal bold"><?php the_field ('news_source'); ?></p>
				<p class="charcoal"><?php echo get_the_date(); ?></p>
			</div>
		</div>
				<?php endwhile; ?>
				<?php  if (function_exists("pagination")) {
					pagination($main_posts->max_num_pages);
				}  ?>

			<?php endif;  ?>
		<?php wp_reset_query();?>
		</div>
	<?php else : ?>
	<div class="cell small-12 medium-12 large-8 large-centered pl-1 pt-2">		
	<h2 class="purple border-bottom">Info for <?php single_cat_title(); ?></h2>		
		<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type'  	=> 'post',
				'cat'			=> $cat,
				// 'post_parent'	=> $post->ID,
				'order'			=> 'DESC',
				'orderby'		=> 'date', // meta_value = custom field URL: https://www.advancedcustomfields.com/resources/query-posts-custom-fields/
				/* 'meta_key'		=> 'last_name',	// meta_key = Use only if ordering by meta_value */											
				'posts_per_page'=> 10,
		
				'paged' => $paged
			);		
			$main_posts = new WP_Query( $args );
			$count = 0;
			if( $main_posts->have_posts() ):
				while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
					<?php
						$author_id = get_the_author_meta('ID');
						$author_title = get_field('title', 'user_'. $author_id );
						// - Coming Soon $author_badge = get_field('author_badge', 'user_'. $author_id );
					?>
					
		
		<div class="article-preview grid-x grid-padding-x pt-2">
			<div class="cell small-12 medium-8 ml-1 article-preview--text">
				<a href="<?php the_permalink(); ?>" ><h4 class="purple-link"><?php the_title(); ?></h4></a>
				<div class="">
					<p class="charcoal article-preview--text--excerpt"><?php echo get_the_excerpt(); ?></p>
				</div>
				<a href="<?php the_permalink(); ?>" class="button mr-2 btn-purple article-preview--text--button">Read More</a>
			
			</div>
			<div class="cell small-12 medium-3 article-preview--image">
				<div class="preview" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');"></div>
			</div>
		</div>
				<?php endwhile; ?>
				<?php  if (function_exists("pagination")) {
					pagination($main_posts->max_num_pages);
				}  ?>
		
			<?php endif;  ?>
		<?php wp_reset_query();?>
	</div>	
	<?php endif; ?>
	
</section>

</div>
	

<?php get_footer(); ?>
