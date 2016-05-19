<?php
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
	$image = get_field('hero_image');
	$subtitle = get_field('subtitle');
	$pinterest = get_field('pinterest');
?>
<section class="hero" style="<?php if($image != '') { ?> background: linear-gradient(90deg, rgba(255,104,71, 0.5) 10%, rgba(132,220,198, 0.5) 90%), url('<?php echo $image['url']; ?>') no-repeat fixed center;background-size: cover;" <?php } ?>">
	<div class="row">
		<div class="small-12 columns">
			<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
			<?php if($subtitle != '') echo '<h2 class="subheader">'.$subtitle.'</h2>'; ?>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 <?php if($pinterest != '') echo 'large-7'; ?> columns">
			<?php the_content(); ?>
		</div>
		<?php if($pinterest != '') { ?>
			<div class="small-12 large-5 columns">
				<div class="image"><img src="<?php echo $pinterest;?>"></div>
			</div>
		<?php } ?>
	</div>
</section>
<?php endwhile;endif; ?>
<section class="hero <?php echo $category; ?>">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 end columns">
			<h2 class="text-center">Want to learn the basics to gym equipment? Subscribe now for a free guide.</h2>
		</div>
		<div class="small-12 large-6 columns large-offset-3 text-center end">
			<form class="callout">
				<label for="email">
					<input type="email" class="text-center" name="email" placeholder="you.are@awesome.com">
				</label>
				<button type="Submit" class="button expanded">Get the free guide</button>
			</form>
		</div>
	</div>
</section>
<?php
get_footer();
?>