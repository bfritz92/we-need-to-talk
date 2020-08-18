<?php
/**
 * COVID Content Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = '';
if( !empty($block['id']) ) {
   $id .= get_field('block_id');
}
// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
   $className .= $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$blocktype		= get_field('blocktype');
$order			= get_field('order');
$list_class		= get_field('list_class'); 
// Load values and assing defaults.
?>
<section id="<?php echo $id ?>" class="<?php echo $className; ?>" style="order:<?php echo $order; ?>;">
	<?php if( have_rows('content_item') ): ?>	
	<?php
		$a = 0;
		while ( have_rows('content_item') ) : the_row(); 	
			$image			= get_sub_field('image');	
			$heading		= get_sub_field('heading');
			$subhead		= get_sub_field('subhead'); 
			$link			= get_sub_field('link');
			$tag			= get_sub_field('tag');
			$description	= get_sub_field('description'); 
			$img_class		= get_sub_field('img_class'); 
			$head_class		= get_sub_field('head_class'); 
			$subhead_class	= get_sub_field('subhead_class'); 
			$desc_class		= get_sub_field('desc_class', false, false); 
			$a++;
	?>
	<article class="limit-900">
	<?php if ($image) : ?>
			<img src="<?php echo $image; ?>" class="<?php echo $img_class ?>" alt="">
		<?php endif; ?>
	<ul class="<?php echo $list_class ?>">
		
		<?php if ($heading) : ?>
			<li class="<?php echo $head_class ?>"><?php echo $heading; ?></li>
		<?php endif; ?>
		<?php if ($subhead) : ?>
			<li class="<?php echo $subhead_class ?>"><a href="<?php echo $link; ?>" target=”_blank” ><?php echo $subhead; ?></a></li>
		<?php endif; ?>
		<?php if ($description) : ?>
			<li class="<?php echo $desc_class ?>"><?php echo $description; ?></li>
		<?php endif; ?>
	</ul>
		<?php if ($tag) : ?>
			<ul class="tags">
				<li class="tag"><?php echo $tag; ?></li>
			</ul>
		<?php endif; ?>
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
</section>