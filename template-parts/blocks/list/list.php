<?php
/**
 * List with Image Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = 'list-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'list-block';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$block_class	= get_field('block_class');
$image 			= get_field('image');
$list_class 	= get_field('list_class');
$ulorol 		= get_field('ulorol'); 
$category		= get_field('category');
$number_stories	= get_field('number_stories');
// Load values and assing defaults.
?>
<div class="<?php echo $block_class; ?>">
	<?php if ($category[0] != '8') : ?>	
		<figure class="wp-block-image cell small-12 medium-4">
			<img src="<?php echo $image; ?>">
		</figure>
	<?php endif; ?>
	<div class="cell small-12">
		<<?php echo $ulorol; ?> class="<?php echo $list_class; ?>">

		<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type'  	=> 'post',
				'cat'			=> $category,
				'order'			=> 'DESC',
				'orderby'		=> 'date',
				'posts_per_page'=> $number_stories,
				'paged' => $paged
			);		
			$main_posts = new WP_Query( $args );
			$count = 0;
			if( $main_posts->have_posts() ):
			echo '<h3 class="pt-1">'.get_cat_name($category[0]).'</h3>';
				while( $main_posts->have_posts() ) : $main_posts->the_post(); 
					$counter++; 
		?>
					<li>
						<?php $post_id = get_the_ID(); ?>
						<?php if ($category[0] == '8') : ?>
							<div class="grid-x grid-padding-x mb-2 mt-2">
								<div class="cell small-2">
									
									<?php echo get_field ('news_icon'); ?>
									<div class="news-source" style="background-image:url('<?php echo the_field ('news_icon', $post_id); ?>')"></div>
								</div>			
								<div class="cell small-10">
									<a href="<?php echo the_field ('external_link', $post_id); ?>" class="purple-link external-source"><h5 class=""><?php the_title(); ?></h5></a>

								</div>
							</div>
						<?php else : ?>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
				<?php if (function_exists("pagination")) {
					echo '<div class="pt-1"><a class="" href="'.get_category_link($category[0]).'"><h5 class="purple-link">View More Articles</h5></a></div>';
				}  ?>
			<?php endif;  ?>
			<?php wp_reset_query();?>

		</<?php echo $ulorol; ?>>			   
	</div>
</div>	