<?php
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero">
	<div class="row">
		<div class="small-12 columns text-center">
			<img src="http://placehold.it/850x150">
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 large-6 large-offset-3 columns">
			<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
			<?php the_content('Read more...'); ?>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
	<div class="row">
		<div class="small-12 large-6 columns large-offset-3 text-center">
			<form class="callout">
				<label for="email">
					Want to learn the basics to gym equipment? Subscribe now for a free guide
				</label>
				<input type="email" name="email" placeholder="you.are@awesome.com">
				</input>
				<button type="Submit" class="button">Get the guide</button>
			</form>
		</div>
	</div>

	<footer>
		<div class="expanded row large-collapse">
			<div class="small-4 columns">
				<img src="http://placehold.it/550x150">
			</div>
			<div class="small-4 columns">
				<img src="http://placehold.it/550x150">
			</div>
			<div class="small-4 columns">
				<img src="http://placehold.it/550x150">
			</div>
		</div>
	</footer>
<?php
get_footer();
?>