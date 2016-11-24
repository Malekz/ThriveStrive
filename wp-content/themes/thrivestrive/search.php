<?php

get_header(); ?>
<section id="content" class="article content library">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">Search Results for <em><?php echo get_search_query(); ?></em></h2>
		</div>
		<?php if ( have_posts() ) : ?>
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				$pinterest = get_field('pinterest_description');
				$out = '<div class="small-12 large-3 columns end"><div class="article-box"><div class=""><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/08/11004910/avatar-48.jpg" data-pin-nopin="true"></div><h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3><p>'.$pinterest.'</p></div></div>';
			    echo $out;
			// End the loop.
			endwhile;
		?>
		<div class="small-12 columns">
		<?php
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