<?php
/**
 * Template Name: Events Page
 */


get_header(); ?>

<div class="content contained events">
	<div id="" class="grid-x grid-padding-x grid-margin-x pt-1 mb-1">
    	<div class="cell small-12">
        	<h1 class="purple title pb-1 border-bottom">Our Events</h1>
    	</div>
	</div>
	<div id="wn2t-events-int">	
	</div>
</div>
<!-- Email Signup -->
<div class="purple-bg">
	<div id="email-signup" class="grid-x grid-margin-x grid-padding-x contained">
		<div class="cell small-12 medium-6 center-v">
			<h3 class="white bold pt-1 pb-1 small-only-text-center medium-text-right"><?php echo get_post_meta($post->ID, 'sign_up_heading', true); ?></h3>
		</div>
		<div class="cell small-12 medium-6 center-v">
				
			<!-- emb sign up form start -->
			<form id="mc-embedded-subscribe-form" class="validate" action="//jewishdetroit.us13.list-manage.com/subscribe/post?u=138dd840bc803b3f4fcb54202&amp;id=18d03982d6" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
<div id="mc_embed_signup_scroll" class="mc_embed_signup_scroll">
<div class="mc-field-group email-form"><label for="mce-EMAIL" class="white">Email Address <span class="asterisk">*</span>
</label><input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" /></div>
<div id="mce-responses" class="clear"></div>
<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
<div style="position: absolute; left: -5000px;"><input tabindex="-1" name="b_138dd840bc803b3f4fcb54202_18d03982d6" type="text" value="" /></div>
<input id="mc-embedded-subscribe" class="mc-embedded-subscribe btn-white" style="padding:10px;" name="subscribe" type="submit" value="Sign Up" />
</div>
</form>	
			<!-- emb sign up form end -->
		</div>
	</div>
</div>
<div class="content contained events">
    <div id="" class="grid-x grid-padding-x grid-margin-x pt-2 mb-1">
        <div class="cell small-12">
            <h1 class="purple title pb-1 border-bottom">Also Happening</h1>
        </div>
    </div>
    <div class="grid-x grid-margin-x grid-padding-x community-events pb-2" id="wn2t-calevents-int">  
    </div>
</div>
<?php get_footer(); ?>