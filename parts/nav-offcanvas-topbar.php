<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="navbar">
	<div class="">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><img id="nav-logo" src="/wp-content/uploads/2019/01/wntt-only.svg"></a></li>
		</ul>
	</div>
	<div class="show-for-large">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="hide-for-large">
		<ul class="menu ">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<!-- <li><a data-toggle="off-canvas"></a></li> -->
			<li><a data-toggle="off-canvas"><img class="menu-icon" src="/wp-content/uploads/2019/02/menu.svg"></a></li>
		</ul>
	</div>
</div>