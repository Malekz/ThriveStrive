<?php
/*
Template Name: Pinterest Gallery
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby' => 'date', 'order' => 'DESC')); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>

			<ul class="articles-list no-bullet">

				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<?php $pinterest = get_field('pinterest'); ?>
					<?php $pinterest2 = get_field('pinterest_2'); ?>
					<?php $pinterest3 = get_field('pinterest_3'); ?>
					<?php $pinterest4 = get_field('pinterest_4'); ?>
					<?php $pinterest5 = get_field('pinterest_5'); ?>
					<?php $pinterest6 = get_field('pinterest_6'); ?>
					<?php $pinterest7 = get_field('pinterest_7'); ?>
					<?php $pinterest8 = get_field('pinterest_8'); ?>
					<?php $pinterest9 = get_field('pinterest_9'); ?>
					<?php $pinterest10 = get_field('pinterest_10'); ?>
					<?php $pinterest11 = get_field('pinterest_11'); ?>
					<?php $pinterest12 = get_field('pinterest_12'); ?>
					<?php $pinterest13 = get_field('pinterest_13'); ?>
					<?php $pinterest14 = get_field('pinterest_14'); ?>
					<?php $pinterest15 = get_field('pinterest_15'); ?>
					<?php $pinterest_description = get_field('pinterest_description'); ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>