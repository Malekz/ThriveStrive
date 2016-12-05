<?php
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
	$image = get_field('hero_image');
	$subtitle = get_field('subtitle');
	$pinterest = get_field('pinterest');
	$pinterest_id = get_field('pinterest_id');
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
<section class="upgrade hide-for-small-only">
	<div class="row">
		<div class="small-12 large-10 columns">
			<h2>Do you want to get a leaner, flatter, toner, and stronger stomach?</h2>
			<script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
			<div class="ck_form_container ck_inline" data-ck-version="6">
			  <div class="ck_form ck_naked">
			  <div class="ck_form_fields">
			    <div id="ck_success_msg" style="display:none;">
			      <p>Success! Now check your email to grab your guide.</p>
			    </div>

			    <!--  Form starts here  -->
			    <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/119102/subscribe" data-remote="true">
			      <input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
			      <input type="hidden" name="id" value="119102" id="landing_page_id">
			      <div class="ck_errorArea">
			        <div id="ck_error_msg" style="display:none">
			          <p>There was an error submitting your subscription. Please try again.</p>
			        </div>
			      </div>
			      <div class="row collapse">
			      	<div class="small-6 large-4 columns">
			        	<input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="Email Address" required>
			        </div>
			        <div class="small-6 large-4 columns">
			       		<input type="text" name="first_name" class="ck_first_name" id="ck_firstNameField" placeholder="First Name">
			       	</div>
			       	<div class="small-12 large-4 columns">
			       		<button class="button small expanded" id="ck_subscribe_button">Get Your Free Guide</button>
			       	</div>
			      </div>
			      <div class="ck_control_group ck_captcha2_h_field_group ck-captcha2-h" style="position: absolute !important;left: -999em !important;">
			        <input type="text" name="captcha2_h" class="ck-captcha2-h" id="ck_captcha2_h" placeholder="We use this field to detect spam bots. If you fill this in, you will be marked as a spammer.">
			      </div>
			    </form>
			  </div>

			</div>

			</div>
			<h3>Grab the free guide to our Top 10 Favorite Ab Exercises.</h3>
		</div>
		<div class="small-12 large-2 columns hide-for-medium-only">
			<img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/11/24002116/pinterest4.jpg" class="" data-pin-nopin="true">
		</div>
	</div>
</section>
<section class="article">
	<div class="row" data-equalizer data-equalize-on="large">
		<div class="small-12 large-8 columns post" data-equalizer-watch>
			<?php the_content(); ?>
			<?php 
				get_template_part('partials/library', 'page');
				// $posttags = get_the_tags();
				// if ($posttags) { 
				// 	foreach($posttags as $tag) {
				// 		if($tag->name == 'fitness') {
				// 			get_template_part('partials/fitness', 'page');
				// 		}
				// 		if($tag->name == 'weightloss') {
				// 			get_template_part('partials/weightloss', 'page');
				// 		}
				// 		if($tag->name == 'yoga') {
				// 			get_template_part('partials/yoga', 'page');
				// 		}
				// 		if($tag->name == 'detox') {
				// 			get_template_part('partials/detox', 'page');
				// 		}
				// 		if($tag->name == 'nutrition') {
				// 			get_template_part('partials/nutrition', 'page');
				// 		}
				// 	}
				// }
			?>
		</div>
		<div class="small-12 large-4 columns hide-for-small-only">
			<div class="sidebar" data-equalizer-watch>
				<div class="image">
					<img src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>">
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
						<div class="nolink"><a href="/muffin-top-challenge"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/11/23234239/muffin-top1.jpg" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a href="/booty-builder-challenge"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/11/23234237/booty-builder1.jpg" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a href="/thunder-thighs-challenge"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/11/23234240/thunder-thighs1.jpg" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a href="/body-blaster-challenge"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/11/23234236/body-blaster1.jpg" data-pin-nopin="true"></a></div>
					</div>
				</div>
				<br>
				<h3>Get Healthy, Get Happy</h3>
				<div class="row collapse">
					<div class="small-12 large-6 columns">
						<div class="nolink"><a alt="benefits fasting" title="9 benefits of fasting" href="https://thrivestrive.com/benefits-of-fasting/"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/11/23220255/pinterest70.png" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a alt="lose weight lazy people" title="9 lazy ways to lose weight" href="https://thrivestrive.com/losing-weight-lazy-way/"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/10/23221241/pinterest20.png" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a href="https://thrivestrive.com/lose-weight-one-spoonful-tricks/" title="Lose weight with cinnamon" alt="Lose weight with cinnamon"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/10/23224408/pinterest40.png" data-pin-nopin="true"></a></div>
					</div>
					<div class="small-12 large-6 columns">
						<div class="nolink"><a alt="yoga lose weight quick" title="Yoga lose weight quickly" href="https://thrivestrive.com/yoga-lose-weight-quickly/"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/11/23223712/pinterest81.png" data-pin-nopin="true"></a></div>
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
				//'category__in' => $cat_ID
			  ); // post__not_in will exclude the post we are displaying
			    $cat_posts = get_posts($args);
			    $out='';
			    foreach($cat_posts as $cat_post) {
			      	$pinterest = get_field('pinterest_description', $cat_post->ID);
			        //$out .= '<li>';
			        //$out .=  '<a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'"><img data-pin-nopin="true" title="'.$cat_post->post_title.'" alt="'.$cat_post->post_title.'" src="'.$pinterest.'"></a></li>';
			        $out = '<div class="small-12 large-3 columns end"><div class="article-box"><div class=""><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/08/11004910/avatar-48.jpg" data-pin-nopin="true"></div><h3><a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'">'.wptexturize($cat_post->post_title).'</a></h3><p>'.$pinterest.'</p></div></div>';
			        echo $out;
			    }
			    //$out = '<ul class="articles-list no-bullet">' . $out . '</ul>';
			?>
		</div>
	</div>
</section>
<section class="comments">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center"><?php if($question == '') { echo 'Join the Discussion'; } else { echo $question; }?></h2>
		</div>
		<div class="small-12  columns end">
			<div class="comment-box">
				<div id="disqus_thread"></div>
				<script>
				/**
				* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
				*/
				var disqus_config = function () {
				this.page.url = '<?php the_permalink(); ?>'; // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = '<?php the_ID(); ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');

				s.src = '//thrivestrive.disqus.com/embed.js';

				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
			</div>
		</div>
	</div>
</section>
<!--
<section class="cta slate">
	<div class="row">
		<div class="small-12 columns">
			<h3 class="text-center subheader">Getting Ready to Start a Fitness Journey? Make Sure Your Mind Is Just as Ready as Your Body With Our</h3>
			<h2 class="text-center"><em>Free 5-Day Mind Over Matter Email Course</em></h2>
			<script src="https://app.convertkit.com/assets/CKJS4.js?v=21"></script>
			<div class="ck_form_container ck_inline" data-ck-version="5">
			  <div class="ck_form ck_naked">
			  <div class="ck_form_fields">
			    <div id="ck_success_msg" style="display:none;">
			      <p>Success! Now check your email to confirm your subscription.</p>
			    </div>
			    <form id="ck_subscribe_form" class="ck_subscribe_form callout" action="https://app.convertkit.com/landing_pages/60579/subscribe" data-remote="true">
			      <input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
			      <input type="hidden" name="id" value="60579" id="landing_page_id">
			      <div class="ck_errorArea">
			        <div id="ck_error_msg" style="display:none">
			          <p>There was an error submitting your subscription. Please try again.</p>
			        </div>
			      </div>
			      <div class="ck_control_group ck_email_field_group">
			        <label class="ck_label" for="ck_emailField" style="display: none">Email Address</label>
			        <input type="text" name="first_name" class="ck_first_name" id="ck_firstNameField" placeholder="First Name">
			        <input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="Email Address" required>
			      </div>


			      <button class="subscribe_button ck_subscribe_button expanded button btn fields" id="ck_subscribe_button">
			        I&#x27;m Ready to Start!
			      </button>
			    </form>
			  </div>

			</div>

			</div>
		</div>
	</div>
</section>-->
<?php endwhile;endif; ?>
<?php
get_footer();
?>