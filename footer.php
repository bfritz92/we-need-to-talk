<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer deep-purple-bg" role="contentinfo">
					
					<div class="inner-footer grid-x grid-margin-x grid-padding-x deep-purple-bg">
						
						<div class="small-12 medium-8 large-10 cell" >
							<img id="footer-logo" src="/wp-content/uploads/2019/01/wntt-horizontal.svg">
						</div>
						
					</div>
					<div class="grid-x grid-margin-x grid-padding-x purple-bg">
						<div class="small-12 medium-12 large-12 cell pt-2">
							<?php joints_footer_links(); ?>
													
	    				</div>
	    				<div class="small-8 medium-12 large-12 cell footer-bottom">
							<div class="footer-social">
								<a class="white" href="http://www.facebook.com/weneedtotalkdetroit/"><i class="fab fa-facebook-square fa-2x"></i></a>
								<a class="white" href="http://www.instagram.com/weneedtotalkdetroit/"><i class="fab fa-instagram-square fa-2x"></i></a>
							</div>
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							
						</div>
	    			</div>
						
						
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		<script async src="https://widget.spreaker.com/widgets.js"></script>
		
	</body>
	
</html> <!-- end page -->