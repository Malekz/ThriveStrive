<?php
get_header();
?>
<section class="hero fitness">
	<div class="row">
		<div class="small-12 columns">
			<div class="title-box">
				<h2 class="subheader">We Aren&rsquo;t Instagram Fitness Heroes</h2>
				<h1>We are normals trying to get better</h1>
				<h2 class="subheader">Together as a Team</h2>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<p>Each of us try to get better every single day. We try to eat better. We try to workout better. We try to live a healthier lifestyle.</p>
			<p>It&rsquo;s hard though because doing it alone means you have to fight a lot of battles without any support.</p>
			<p>That is why we are going to do this together.</p>
			<p>We aren&rsquo;t trying to compete in Bikini contests or get a record Instagram modeling deal. We just want to be better for us and we are going to do that by pushing each other and making sure nobody falls behind.</p>
			<p>Welcome to Thrive/Strive.</p>
		</div>
	</div>
</section>
<section class="profiles">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center"><em>The Thrive/Strive Crew</em></h2>
		</div>
		<div class="small-12 large-4 columns">
			<div class="profile">
				<div class="profile-hero"><a href="/elisa"><img data-pin-nopin="true" alt="Elisa Scrivens" src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/31191014/elisa2.jpg"></a></div>
				<h3 class="text-center"><a href="/elisa">Elisa</a></h3>
				<h4 class="text-center subheader"><em>The Wife</em></h4>
				<p class="text-center">Feisty. Beautiful. Tough. Stubborn.</p>
			</div>
		</div>
		<div class="small-12 large-4 columns">
			<div class="profile">
				<div class="profile-hero"><a href="/paul"><img data-pin-nopin="true" alt="Paul Scrivens" src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/31191022/paul2.jpg"></a></div>
				<h3 class="text-center"><a href="/paul">Paul</a></h3>
				<h4 class="text-center subheader"><em>The Husband</em></h4>
				<p class="text-center">Shiny head. Skinny fat. Cocky. Hilarious.</p>
			</div>
		</div>
		<div class="small-12 large-4 columns">
			<div class="profile">
				<div class="profile-hero"><a href="stephen"><img data-pin-nopin="true" alt="Stephen Scrivens" src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/31191018/stephen2.jpg"></a></div>
				<h3 class="text-center"><a href="/stephen">Stephen</a></h3>
				<h4 class="text-center subheader"><em>The Little Brother</em></h4>
				<p class="text-center">Kind. Strong. Lovable. Golden God.</p>
			</div>
		</div>
	</div>
</section>
<section class="article slate">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">Ready to Dive In?</h2>
			<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>

			<ul class="articles-list no-bullet">

				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<?php $pinterest = get_field('pinterest'); ?>
					
					<li><a href="<?php the_permalink(); ?>"><img data-pin-nopin="true" title="<?php the_title(); ?>" alt="<?php the_title();?>" src="<?php echo $pinterest; ?>"></a></li>
				<?php endwhile; ?>
				<!-- end of the loop -->

			</ul>

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="sections">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center"><em>What We Talk About</em></h2>
		</div>
		<div class="small-12 large-6 columns">
			<div class="section-box">
				<h3 class="text-center"><a href="/category/food">Food</a></h3>
			</div>
		</div>
		<div class="small-12 large-6 columns">
			<div class="section-box">
				<h3 class="text-center"><a href="/category/motivation">Motivation</a></h3>
			</div>
		</div>
		<div class="small-12 large-6 columns">
			<div class="section-box">
				<h3 class="text-center"><a href="/category/fitness">Fitness</a></h3>
			</div>
		</div>
		<div class="small-12 large-6 columns">
			<div class="section-box">
				<h3 class="text-center"><a href="/category/challenges">Challenges</a></h3>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>