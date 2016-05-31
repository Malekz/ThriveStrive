<?php

get_header(); ?>
<section id="content" class="content">
	<div class="row">
		<div class="small-12 columns">
		<h2 class="text-center">Search Results for <em><?php echo get_search_query(); ?></em></h2>
		<?php if ( have_posts() ) : ?>
			<ul class="articles-list no-bullet">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				$pinterest = get_field('pinterest');
				?>
				<li><a href="<?php the_permalink(); ?>"><img title="" alt="" src="<?php echo $pinterest; ?>"></a></li>
				<?php
			// End the loop.
			endwhile;
			echo '</ul>';
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			echo '<p class="text-center">No results were found.</p>';

		endif;
		?>
		</div>
	</div>
</section><!-- .content-area -->

<?php get_footer(); ?>