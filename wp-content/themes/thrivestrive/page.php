<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="article">
	<div class="row">
		<div class="small-12 large-6 large-offset-3 columns">
			<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
			<?php the_content(); ?>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>