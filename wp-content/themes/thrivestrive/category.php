<?php get_header();?>
<?php if ( have_posts() ) : ?>
<section class="hero <?php printf( strtolower(single_cat_title( '', false ) )); ?>">
	<div class="row">
		<div class="small-12 columns">
			<div class="title-box">
				<h1><?php printf( single_cat_title( '', false ) ); ?></h1>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<ul class="articles-list no-bullet">
			<?php while ( have_posts() ) : the_post(); ?>
					<?php $pinterest = get_field('pinterest'); ?>
					
					<li><a href="<?php the_permalink(); ?>"><img title="<?php the_title(); ?>" alt="<?php the_title();?>" src="<?php echo $pinterest; ?>"></a></li>
				<!-- end of the loop -->

			<?php endwhile; ?>
			</ul>
		</div>
	</div>
</section>
<?php endif; ?>
<?php get_footer();?>