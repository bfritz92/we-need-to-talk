<?php
/**
 * WN2T ACF Custom Block functionality
 *
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0.0
 */

/**
 * Prevent switching to Twenty Nineteen on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Nineteen 1.0.0
 */

function register_acf_block_types() {
   // register a testimonial block.	
	acf_register_block_type(array(
      'name'              => 'list',
      'title'             => __('List Block with Image'),
      'description'       => __('A custom block featuring a list and image.'),
      'render_template'   => 'template-parts/blocks/list/list.php',
      'category'          => 'common',
      'icon'              => 'admin-users',
	  'mode'			  => 'edit',
      'keywords'          => array( 'list', 'image' )
   ));
	acf_register_block_type(array(
      'name'              => 'covid-content',
      'title'             => __('Content Block -- Originally built for COVID-19'),
      'description'       => __('A custom block allowing for an image and tag. Originally built for COVID-19.'),
      'render_template'   => 'template-parts/blocks/covid-content/covid-content.php',
      'category'          => 'common',
      'icon'              => 'admin-users',
	  'mode'			  => 'edit',
      'keywords'          => array( 'list', 'content', 'covid' )
   ));	
acf_register_block_type(array(
      'name'              => 'section-open',
      'title'             => __('Section Open'),
      'description'       => __('A block to open a section.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/section-open/section-open.php',
      'category'          => 'common',
      'icon'              => 'heart',
	  'mode'			  => 'edit',
      'keywords'          => array( 'section', 'open' )
   ));
	acf_register_block_type(array(
      'name'              => 'section-close',
      'title'             => __('Section Close'),
      'description'       => __('A block to close a section.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/section-close/section-close.php',
      'category'          => 'common',
      'icon'              => 'heart',
	  'mode'			  => 'edit',
      'keywords'          => array( 'section', 'close' )
   ));	
}
// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
   add_action('acf/init', 'register_acf_block_types');
}

?>