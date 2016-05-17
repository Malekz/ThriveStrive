<?php get_header();?>
<?php if ( have_posts() ) : ?>
<section class="hero">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php printf( single_cat_title( '', false ) ); ?></h1>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="article-box">
					<h2 class="text-center"><a href="<?php echo the_permalink();?>"><?php echo the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>
<?php get_footer();?>