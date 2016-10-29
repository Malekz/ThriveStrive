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
					<?php $pinterest_description = get_field('pinterest_description'); ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest2;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest3;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php if($pinterest4 != '') { ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest4;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php } ?>
					<?php if($pinterest5 != '') { ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest5;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php } ?>
					<?php if($pinterest6 != '') { ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest6;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php } ?>
					<?php if($pinterest7 != '') { ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest7;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php } ?>
					<?php if($pinterest8 != '') { ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest8;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php } ?>
					<?php if($pinterest9 != '') { ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest9;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php } ?>
					<?php if($pinterest10 != '') { ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest10;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php } ?>
					<?php if($pinterest11 != '') { ?>
					<li><a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>" src="<?php echo $pinterest11;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></li>
					<?php } ?>
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