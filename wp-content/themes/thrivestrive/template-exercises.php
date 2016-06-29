<?php
/*
Template Name: Exercises
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero">
	<div class="row">
		<div class="small-12 columns">
			<div class="title-box">
				<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="exercise small-12 large-8 columns">
			<?php the_content(); ?>
		</div>

		<div class="small-12 large-4 columns sidebar">
			<div class="body">
				<h3>Muscle Groups</h3>
				<ul class="no-bullet">
					<li><a href="">Chest</a></li>
					<li><a href="">Legs</a></li>
					<li><a href="">Shoulders</a></li>
					<li><a href="">Back</a></li>
					<li><a href="">Abs</a></li>
					<li><a href="">Arms</a></li>
					<li><a href="">Biceps</a></li>
					<li><a href="">Triceps</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>