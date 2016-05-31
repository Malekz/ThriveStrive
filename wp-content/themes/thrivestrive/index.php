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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, officiis, aliquam! Quasi beatae natus, deserunt maxime. Odio dicta impedit incidunt, aliquid enim aperiam quia quod ipsum voluptatem sed, totam recusandae.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure architecto commodi itaque deserunt obcaecati iusto, eaque saepe placeat molestias dignissimos neque voluptatum totam ea facere quidem consectetur et officia nobis.</p>
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
				<div class="profile-hero"><a href="/elisa"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/31174041/elisa1.jpg"></a></div>
				<h3 class="text-center"><a href="/elisa">Elisa</a></h3>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt aliquam, alias repellat ipsam dolorem, sed voluptatum magnam, voluptates incidunt libero officia tempore suscipit impedit natus a quae laborum architecto. Quo!</p>
			</div>
		</div>
		<div class="small-12 large-4 columns">
			<div class="profile">
				<div class="profile-hero"><a href="/paul"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/31174046/paul1.jpg"></a></div>
				<h3 class="text-center"><a href="/paul">Paul</a></h3>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt aliquam, alias repellat ipsam dolorem, sed voluptatum magnam, voluptates incidunt libero officia tempore suscipit impedit natus a quae laborum architecto. Quo!</p>
			</div>
		</div>
		<div class="small-12 large-4 columns">
			<div class="profile">
				<div class="profile-hero"><a href="stephen"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/31174051/stephen1.jpg"></a></div>
				<h3 class="text-center"><a href="/stephen">Stephen</a></h3>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt aliquam, alias repellat ipsam dolorem, sed voluptatum magnam, voluptates incidunt libero officia tempore suscipit impedit natus a quae laborum architecto. Quo!</p>
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
					
					<li><a href="<?php the_permalink(); ?>"><img title="<?php the_title(); ?>" alt="<?php the_title();?>" src="<?php echo $pinterest; ?>"></a></li>
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