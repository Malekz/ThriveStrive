<?php
/*
Template Name: Lazy
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero">
	<div class="row">
		<div class="small-12 columns">
			<div class="title-box">
				<h2 class="subheader">A Different Type of Health &amp; Fitness Product</h2>
				<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
				<div class="text-center"><a data-dpd-type="button" data-variant="price-right" data-text="Get Started Now" data-button-size="dpd-large" data-bg-color="dd1f26" data-bg-color-hover="ff2f37" data-text-color="ffffff" data-pr-bg-color="ffffff" data-pr-color="000000" data-lightbox="1" href="https://thrive-strive.dpdcart.com/cart/add?product_id=140756&amp;method_id=150351">Get Started Now</a><script src="https://thrive-strive.dpdcart.com/dpd.js"></script></div>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<p><strong>Trying to lose weight sucks.</strong></p>
			<p>We aren't going to sugar coat it.</p>
			<p>We can't tell you that it is easy or you just need to breathe 20 times a day to make it happen.</p>
			<p>You actually have to actively do things to lose weight and that's the hard part.</p>
			<p>In your battle to lose weight, there are two big things working against you:</p>
			<ol>
				<li>Life</li>
				<li>Habits</li>
			</ol>
		</div>
	</div>
</section>
<section class="article slate">
	<div class="row">
		<div class="small-12 columns">
				<h2>You Can&rsquo;t Pause Life</h2>
		</div>
		<div class="small-12 columns">
			<div class="callout">
				<p>Let&rsquo;s face it you are a busy person.</p>
				<p>There are a million different things that you have to do throughout the day:</p>
				<ul>
					<li>Get ready for work</li>
					<li>Get the kids ready for school</li>
					<li>Prepare for the meeting</li>
					<li>Not piss off your boss</li>
					<li>Reply to the 20 text messages your partner just sent</li>
					<li>Find time to grab lunch</li>
					<li>Go grocery shopping</li>
					<li>Pay bills</li>
				</ul>
				<p>We could go on and on.</p>
				<p>Life is always there. It never stops.</p>
				<p>Whenever people tell you that they have a brand new way for you to lose weight it usually means completely changing your day around.</p>
				<p>Here, put your life on pause while we help you rearrange it.</p>
				<p>It just doesn&rsquo;t happen.</p>
				<p><a data-dpd-type="button" data-variant="price-right" data-text="Get Started Now" data-button-size="dpd-large" data-bg-color="dd1f26" data-bg-color-hover="ff2f37" data-text-color="ffffff" data-pr-bg-color="ffffff" data-pr-color="000000" data-lightbox="1" href="https://thrive-strive.dpdcart.com/cart/add?product_id=140756&amp;method_id=150351">Get Started Now</a><script src="https://thrive-strive.dpdcart.com/dpd.js"></script></p>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<h2>Old Habits Die Hard</h2>
			<p>No sugar. Cut your carbs. Go to bed early.</p>
			<p>Most of these things completely conflict with how you&rsquo;ve been living your life.</p>
			<p>It&rsquo;s just too damn hard to cut everything out cold turkey. Instead, why not take things slowly and find replacements for your old habits?</p>
			<p>There are ways to cut your sugar cravings.</p>
			<p>There are awesome recipes that aren&rsquo;t loaded with carbs.</p>
			<p>Nobody is saying you have to change your life, but you do have to change some things if you want to see progress.</p>
			<p><a data-dpd-type="button" data-variant="price-right" data-text="Get Started Now" data-button-size="dpd-large" data-bg-color="dd1f26" data-bg-color-hover="ff2f37" data-text-color="ffffff" data-pr-bg-color="ffffff" data-pr-color="000000" data-lightbox="1" href="https://thrive-strive.dpdcart.com/cart/add?product_id=140756&amp;method_id=150351">Get Started Now</a><script src="https://thrive-strive.dpdcart.com/dpd.js"></script></p>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>