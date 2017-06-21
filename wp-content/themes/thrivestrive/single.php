<?php
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
	$subtitle = get_field('subtitle');
	$pinterest = get_field('pinterest');
	$pinterest_description = get_field('pinterest_description');
	$question = get_field('discussion_question');
	$title = get_the_title();

?>
<section class="hero">
	<div class="row">
		<div class="small-12 columns">
			<div class="title-box">
				<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
				<?php if($subtitle != '') echo '<h2 class="subheader">'.$subtitle.'</h2>'; ?>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 large-8 columns post">
			<?php the_content(); ?>
			<?php 
				//get_template_part('partials/keto', 'page');
				$posttags = get_the_tags();
				if ($posttags) { 
				 	foreach($posttags as $tag) {
				 		if($tag->name == 'fitness') {
				  			get_template_part('partials/fitness', 'page');
				  			//get_template_part('partials/library', 'page');
				  		}
				  		if($tag->name == 'keto') {
				  			get_template_part('partials/keto', 'page');
				  		}
				  		if($tag->name == 'weightloss') {
				  			get_template_part('partials/weightloss', 'page');
				  		}
				  		if($tag->name == 'yoga') {
				  			get_template_part('partials/weightloss', 'page');
				  		}
				  		if($tag->name == 'detox') {
				  			get_template_part('partials/detox', 'page');
				  			//get_template_part('partials/library', 'page');
				  		}
				  		if($tag->name == 'nutrition') {
				  			get_template_part('partials/nutrition', 'page');
				  			//get_template_part('partials/library', 'page');
				  		}
				  	}
				} else {
				 	get_template_part('partials/weightloss', 'page');
				}
			?>
		</div>
		<div class="small-12 large-4 columns hide-for-small-only">
			<div class="sidebar">
				<div class="image">
					<img src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>">
				</div>
				<h3>Welcome to Thrive/Strive!</h3>
				<p>We are the Thrive/Strive crew. A family just trying to find the best ways to achieve happier bodies.</p>
				<p>On Thrive/Strive we share our ups and downs, experiments, and overall journey so hopefully inspire and educate other awesome people.</p>
				<p>We are so happy you are here! If you are looking to get a healthier body and happier state of mind then this is the place to be.</p>
				<div class="image">
					<img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/08/02222125/tscrew.jpg" data-pin-nopin="true" nopin alt="Thrive/Strive Crew">
				</div>
				<h3>Challenge Yourself</h3>
				<div class="row collapse">
					<div class="small-12 large-6 columns">
						<div class="nolink"><a href="/muffin-top-challenge"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2017/01/08044413/muffin-top.jpg" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a href="/booty-builder-challenge"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2017/01/08044411/booty-builder.jpg" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a href="/thunder-thighs-challenge"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2017/01/08044416/thunder-thighs.jpg" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a href="/body-blaster-challenge"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2017/01/08044410/body-blaster.jpg" data-pin-nopin="true"></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="honeypot">
	<div class="row">
		<?php
			get_template_part('partials/challenge', 'page');
			// foreach($posttags as $tag) {
			// 	if($tag->name == '1000subscribers') {
			// 		get_template_part('partials/1000subscribers', 'page');
			// 	}
			// 	if($tag->name == 'blogrocket') {
			// 		get_template_part('partials/blogrocket', 'page');
			// 	}
			// 	if($tag->name == 'courses') {
			// 		get_template_part('partials/courses', 'page');
			// 	}
			// }
		?>
	</div>
</section> 
<section class="sharing">
	<div class="row">
		<div class="small-12 large-6 <?php if($pinterest == '') echo 'large-offset-3 end'; ?> columns">
			<h2 class="">Enjoyed <em><?php the_title(); ?></em>? Share it with your friends so they to can follow the Thrive/Strive journey.</h2>
			<h3><a href="https://www.pinterest.com/pin/create/button/" class="button large expanded" data-pin-do="buttonPin" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-custom="true" data-pin-description="<?php echo $pinterest_description;?>" data-pin-media="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink();?>">Share on Pinterest</a></h3>
		</div>
		<div class="small-12 large-6 columns">
			<img src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>">
		</div>
	</div>
</section>
<section class="article slate">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">More Great Content on Thrive/Strive</h2>
			<?php
			global $post;
			$cat_ID=array();
			$categories = get_the_category(); //get all categories for this post
			  foreach($categories as $category) {
			    array_push($cat_ID,$category->cat_ID);
			  }
			  $args = array(
			  'orderby' => 'date',
			  'order' => 'DESC',
				'post_type' => 'post',
				'numberposts' => 20,
				'post__not_in' => array($post->ID)
			  ); // post__not_in will exclude the post we are displaying
			    $cat_posts = get_posts($args);
			    $out='';
			    foreach($cat_posts as $cat_post) {
			      	$pinterest = get_field('pinterest_description', $cat_post->ID);
			        $out = '<div class="small-12 large-3 columns end"><div class="article-box"><div class=""><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/08/11004910/avatar-48.jpg" data-pin-nopin="true"></div><h3><a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'">'.wptexturize($cat_post->post_title).'</a></h3><p>'.$pinterest.'</p></div></div>';
			        echo $out;
			    }
			?>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
<?php
get_footer();
?>