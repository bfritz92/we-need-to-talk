<?php
/**
 * Template Name: Internal Page - Purple Header
 */

get_header(); ?>
<div class="content">
	<section id="about-top" class="purple-bg">
		<div class="grid-x grid-margin-x grid-padding-x contained">
			<div class="cell small-12 large-7 large-centered">
				<h1 class="yellow pb-2"><?php the_field('purple_header_title'); ?></h1>
				<div class="border-yellow pl-1">
					<p class="white bold"><?php the_field('purple_header_textarea'); ?></p>
				</div>
			</div>
			<div class="cell large-5 preview show-for-large" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>'); max-width:360px;">

			</div>
		</div>
	</section>

	<section id="about-partners" class="contained grid-x grid-padding-x grid-margin-x pt-3 pb-2">
		<div class="cell small-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</section>	
</div>
<?php get_footer(); ?>