<?php
/*
Template Name: Quotes
*/
?>

<?php get_header(); ?>

<section class="hero">
	<div class="lead-container">
		<div class="row">
			<div class="small-12 columns">
				<h1>Motivational Fitness Quotes</h1>
				<h2 class="subheader">Sometimes You Push and Other Times You Need Pushing</h2>
			</div>
		</div>
	</div>
</section>
<section class="article quotes">
	<div class="row">
		<?php the_content(); ?>
	</div>
</section>

<?php get_footer(); ?>