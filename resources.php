<?php
/**
 * Template Name: Resources
 */

get_header(); ?>
<div class="content">
	<div class="grid-x grid-margin-x grid-padding-x small-container">
		<div class="cell small-12">
			<div style="display:flex;" class="pt-1">
			<a href="#emergency" class="white-link"><h4 class="red-background pr-2 pl-2">If you are in crisis, click here</h4></a>
			</div>
			<h1 class="purple border-bottom"><?php the_title(); ?></h1>
			<br>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>		
			<br>
		</div>
	</div>
	<div id="emergency" class="red-bg">
		<div class="grid-x grid-margin-x grid-padding-x small-container pt-2 pb-3">
			<div class="cell small-12">
				<h1 class="white bold border-white-bottom"><?php the_field('emergency_header'); ?></h1>
				<br>
				<?php the_field('emergency_body'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>