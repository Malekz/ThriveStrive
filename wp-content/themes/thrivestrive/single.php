<?php
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero">
	<div class="row">
		<div class="small-12 columns text-center">
			<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<?php the_content('Read more...'); ?>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
<section class="profiles">
	<div class="row">
		<div class="small-12 large-8 large-offset-2 end columns">
			<h3 class="text-center">Want to learn the basics to gym equipment? Subscribe now for a free guide.</h3>
		</div>
		<div class="small-12 large-6 columns large-offset-3 text-center end">
			<form class="callout">
				<label for="email">
					<input type="email" name="email" placeholder="you.are@awesome.com">
				</label>
				<button type="Submit" class="button expanded">Get the guide</button>
			</form>
		</div>
	</div>
</section>
<?php
get_footer();
?>