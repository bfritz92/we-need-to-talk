<?php
/**
 * Template Name: Corona Main Page
 */

get_header(); ?>
			
<div class="content">
    <div class="corona-splash">
    <img class="grid-x small-12 medium-12 corona-splash--img" src="https://wn2t.org/wp-content/uploads/2020/04/hands-mobile.jpg">
	<section class="grid-x small-12 medium-12 large-7 large-offset-5 corona-splash--copy">
    
		<div class="cell corona-splash--headline">
            <h2 class="">Mental Health Resources</h2>
            <h4 class="">Get Help and Stay Well During the COVID-19 Outbreak</h4>
			<p class="bold">Welcome to We Need to Talk, Federation’s Youth Mental Health Initiative. With so much uncertainty due to the Coronavirus, we all need to take care of our mental health. Below you will find resources to help youth, adults, seniors and families get through this very challenging time.</h4>
			
		</div>

	</section>
    </div>

    <section class="corona-list charcoal-bg">
    <ul class="corona-splash--list pt-2">
                <li>
                    <a href="/coronavirus-media/">
                        <img class="corona-splash--list--icon yellow" src="https://wn2t.org/wp-content/uploads/2020/04/media-icon-yellow.svg">
                        <h4>Videos, Podcasts and Articles</h4>
                    </a>
                </li>
                <li>
                    <a href="/coronavirus-events-activities/">
                        <img class="corona-splash--list--icon yellow" src="https://wn2t.org/wp-content/uploads/2020/04/calendar-icon-yellow.svg">
                        <h4>Events and Programs</h4>
                    </a>
                </li>
                <li>
                    <a href="/coronavirus-helpful-websites/">
                        <img class="corona-splash--list--icon yellow" src="https://wn2t.org/wp-content/uploads/2020/04/laptop-icon-yellow-1.svg">
                        <h4>Helpful Websites</h4>
                    </a>
                </li>
                <li>
                    <a href="/resources/">
                        <img class="corona-splash--list--icon yellow" src="https://wn2t.org/wp-content/uploads/2020/04/hands-icon-yellow.svg">
                        <h4>Resources</h4>
                    </a>
                </li>
            </ul>
    </section>

	<section class="front-page-events hide-if-empty">
		<div class="grid-x grid-padding-x align-middle contained" id="wn2t-events">
		</div>
		<div class=" grid-x grid-padding-x pt-2 align-middle contained mt-2">
			<div class="cell small-12 medium-6 large-8 border-purple-rt text-right">
				<p class="charcoal">Find out more about other youth mental health related events happening in the community.</p>
			</div>
			<div class="cell small-8 small-offset-4 medium-offset-0 medium-6 large-4">
				<a class="purple-link" href="/events/"><h5 class="pl-1">See All of Our Events Here</h5></a>
			</div>
		</div>
	</section>

	<!-- <section class="charcoal-bg">
		<div class="grid-x grid-padding-x align-middle contained podcast pt-3 pb-2" id="podcast">
			<div class="cell small-12 medium-6">
				<h2 class="yellow pl-1">Listen and Learn</h2>
				<p class="white pl-1">The We Need to Talk podcast series explores topics surrounding youth mental health with leading local experts.</p>
				<h5><a class="pl-1 yellow-link">Listen Now</a></h5>
			</div>
			<div class="cell small-12 medium-6">
				<a class="spreaker-player" href="https://www.spreaker.com/show/the-we-need-to-talk-podcast" data-resource="show_id=3523612" data-width="100%" data-height="350px" data-theme="dark" data-playlist="show" data-playlist-continuous="false" data-autoplay="true" data-live-autoplay="false" data-chapters-image="true" data-episode-image-position="left" data-hide-logo="false" data-hide-likes="false" data-hide-comments="false" data-hide-sharing="false" data-hide-download="true" >Listen to "The We Need to Talk Podcast" on Spreaker.</a>
			</div>
		</div>
	</section> -->

	<section class="info-panel-1 fact-panel-5" style="background-image:url('https://wn2t.org/wp-content/uploads/2019/04/10-24-years-of-age.jpg')">
					<div class="grid-x contained">
						<div class="cell small-10 small-centered medium-8 medium-offset-1 large-6 large-offset-2">
							<h4 class="white border-white pl-1">Large-scale disasters, whether traumatic, natural or environmental are almost always accompanied by increases in depression, post-traumatic stress disorder and a broad range of other mental and behavioral disorders</h4>
							<br>
							<a class="yellow-link source" href="https://jamanetwork.com/"><h4>Source: JAMA Network</h4></a>
						</div>
					</div>
				</section>

<div class="deep-purple-bg">
	<section class="grid-x grid-padding-x align-middle deep-purple-bg contained">
		<div class="cell small-12 medium-9">
			
				<h5 class="yellow pl-1">Thank you to our donors and United Way for Southeastern Michigan for their support of We Need to Talk's Mental Heath Awareness Month May 2020 events.</h5>
			
		</div>
		<div class="cell small-8 medium-3 small-offset-2 medium-offset-0">
			<a href="https://unitedwaysem.org/"><img style="max-height:150px;" class="pt-1 pb-1" src="https://wn2t.org/wp-content/uploads/2020/06/UWSEM-logo.jpg"></a>
		</div>
		
	</section>
</div>

 <div class="charcoal-bg">
	<section class="disclaimer grid-x grid-padding-x align-middle charcoal-bg contained">
		<div class="cell small-12 medium-8">
			<h3 class="yellow"><?php echo get_post_meta($post->ID, 'footer_home_left_title', true); ?></h3>
			<br>
			<div class="border-yellow">
				<h5 class="white pl-1"> <?php echo get_post_meta($post->ID, 'footer_home_left_body', true); ?></h5>
			</div>
		</div>
		<div class="cell small-8 medium-4 small-offset-2 medium-offset-0">
			<?php echo get_post_meta($post->ID, 'footer_home_right', true); ?>
		</div>
		
	</section>
</div>
<div class="purple-bg pt-2 pb-2 grid-x grid-padding-x grid-margin-x">
	<div style="display:flex; flex-direction:column;" class="cell small-10 small-offset-1">
	<h3 class="white">Do you have a story you’d like to share?</h3>
		<h5 class="yellow pb-1">We’re always looking to expand the conversation about youth mental health.</h5>
		<a href="https://wn2t.org/contact-us/" style="align-self: end;margin-right: 2rem;" class="button btn-yellow">Let us know.</a>
	</div>
</div>

</div>

<?php get_footer(); ?>