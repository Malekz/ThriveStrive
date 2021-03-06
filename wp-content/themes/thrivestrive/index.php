<?php
get_header();
?>
<section class="hero fitness">
	<div class="row">
		<div class="small-12 columns">
			<div class="title-box">
				<h2 class="subheader">Seeing How We Can Get the Most Out of Today</h2>
				<h1>Helping You Get the Most Out of Your Body and Mind</h1>
			</div>
		</div>
	</div>
</section>
<section class="cta">
	<div class="row">
		<div class="small-12 columns">
			<h2>Are you ready to challenge yourself? Take the 3-Day Weight Loss Challenge!</h2>
		</div>
		<div class="small-12 large-8 large-offset-2 columns end">
			<div class="callout">
				<div class="row">
					<div class="small-12 large-4 columns">
						<div class="image">
							<script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <a href="" style="margin-bottom: 0;" class="" data-leadbox-popup="1454bc973f72a2:16408842c946dc" data-leadbox-domain="billionaireblogclub.lpusercontent.com"><img data-pin-description="Transform your body in 3 days and change your life forever with the 3-day weight loss challenge." data-pin-url="https://ketodash.com/weight-loss-challenge" data-pin-media="https://s3-us-west-2.amazonaws.com/bitchafit-master/wp-content/uploads/2017/08/23200626/weight-loss-challenge-pin3.jpg" data-pin-custom="true" data-pin-do="buttonPin" alt="Transform your body in 3 days and change your life forever with the 3-day weight loss challenge." src="https://s3-us-west-2.amazonaws.com/bitchafit-master/wp-content/uploads/2017/08/23200626/weight-loss-challenge-pin3.jpg"></a>
						</div>
					</div>
					<div class="small-12 large-8 columns">
						<p class="text-left">The secret behind the people that know how to lose weight and those that struggle to lose weight is knowledge.</p>
						<p class="text-left">It has nothing to do with secret pills or crazy workouts. In this 3 day challenge, you'll learn why your body loves to store fat, how you can turn it into a fat burning machine, and how to maintain the lifestyle through awesome meals.</p>
						<p style="margin-bottom: 0;"><script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <a href="" style="margin-bottom: 0;" class="button expanded large" data-leadbox-popup="1454bc973f72a2:16408842c946dc" data-leadbox-domain="billionaireblogclub.lpusercontent.com">Start Your Free 3-Day Weight Loss Challenge Today!</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="content white">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">The Lonely Journey</h2>
			<p>Each of us try to get better every single day. We try to eat better. We try to workout better. We try to live a healthier lifestyle.</p>
			<p>It&rsquo;s hard because doing it alone means you have to fight a lot of battles without any support.</p>
			<p>That is why we are going to do this together.</p>
			<p>We aren&rsquo;t trying to compete in Bikini contests or get a record Instagram modeling deal. We just want to be better for us and we are going to do that by pushing each other and making sure nobody falls behind.</p>
			<p>Welcome to Thrive/Strive.</p>
		</div>
	</div>
</section>
<section class="article library">
	<div class="row">
			<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby' => 'date', 'order' => 'DESC')); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>


			<?php
			while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
			  	$pinterest = get_field('pinterest_description', $cat_post->ID);
			    $out = '<div class="small-12 large-3 columns end"><div class="article-box"><!--<div class="hide-for-small-only"><img src="https://s3-us-west-2.amazonaws.com/thedailynutrition-master/wp-content/uploads/2017/10/15161002/favicon.png" data-pin-nopin="true"></div>--><h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3><p>'.$pinterest.'</p></div></div>';
			    echo $out;
			endwhile;
			?>
				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div>
</section>
<div class="reveal" id="motivationModal" data-reveal>
	<script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
	<div class="ck_form_container ck_inline" data-ck-version="5">
	  
	<div class="ck_form_reveal ck_vertical_subscription_form">
	  <div class="ck_form_content">
	  </div>

	  <div class="ck_form_fields">
	    <div id="ck_success_msg" style="display:none;">
	      <p>Success! Now check your email to confirm your subscription.</p>
	    </div>

	    <!--  Form starts here  -->
	    <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/60579/subscribe" data-remote="true">
	      <input type="hidden" value="{&quot;form_style&quot;:&quot;full&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;hide&quot;}" id="ck_form_options">
	      <input type="hidden" name="id" value="60579" id="landing_page_id">
	      <div class="ck_errorArea">
	        <div id="ck_error_msg" style="display:none">
	          <p>There was an error submitting your subscription. Please try again.</p>
	        </div>
	      </div>
	    	<div class="form-content">
	    		<h2 class="text-center">It&rsquo;s time you teach your brain to cooperate</h2>
	    		<p class="text-center">Take the free, 5-day <em>Mind Over Matter</em> course</p>
	      <div class="ck_control_group ck_email_field_group">
		        	<label class="ck_label" for="ck_emailField" style="display: none">Email Address</label>
		        	<div class="row">
		        		<div class="small-12 large-6 columns">
		        			<input type="text" name="first_name" class="ck_first_name" id="ck_firstNameField" placeholder="First Name">
		        		</div>
		        		<div class="small-12 large-6 columns">
		        			<input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="Email Address" required>
		        		</div>
		        	</div>
		        	<div class="row">
		        		<div class="small-12 columns">
		        			<button class="subscribe_button button expanded ck_subscribe_button btn fields" id="ck_subscribe_button">I&rsquo;m Ready to Beat My Lizard Brain!</button>
		        		</div>
		        	</div>
		      	</div>
		      	</div>
	    </form>
	  </div>

	</div>

	</div>
</div>
<div class="reveal" id="fitnessModal" data-reveal>
	<script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
	<div class="ck_form_container ck_inline" data-ck-version="5">
	  
	<div class="ck_form_reveal ck_vertical_subscription_form">
	  <div class="ck_form_content">
	  </div>

	  <div class="ck_form_fields">
	    <div id="ck_success_msg" style="display:none;">
	      <p>Success! Now check your email to confirm your subscription.</p>
	    </div>

	    <!--  Form starts here  -->
	    <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/83390/subscribe" data-remote="true">
	      <input type="hidden" value="{&quot;form_style&quot;:&quot;full&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;hide&quot;}" id="ck_form_options">
	      <input type="hidden" name="id" value="83390" id="landing_page_id">
	      <div class="ck_errorArea">
	        <div id="ck_error_msg" style="display:none">
	          <p>There was an error submitting your subscription. Please try again.</p>
	        </div>
	      </div>
	    	<div class="form-content">
	    		<h2 class="text-center">Cardio Doesn&rsquo;t Have to Suck</h2>
	    		<p class="text-center">Get the guide to 10 activities that don&rsquo;t feel like cardio.</p>
	      <div class="ck_control_group ck_email_field_group">
		        	<label class="ck_label" for="ck_emailField" style="display: none">Email Address</label>
		        	<div class="row">
		        		<div class="small-12 large-6 columns">
		        			<input type="text" name="first_name" class="ck_first_name" id="ck_firstNameField" placeholder="First Name">
		        		</div>
		        		<div class="small-12 large-6 columns">
		        			<input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="Email Address" required>
		        		</div>
		        	</div>
		        	<div class="row">
		        		<div class="small-12 columns">
		        			<button class="subscribe_button button expanded ck_subscribe_button btn fields" id="ck_subscribe_button">I&rsquo;m Ready to Ship Shape Up!</button>
		        		</div>
		        	</div>
		      	</div>
		      	</div>
	    </form>
	  </div>

	</div>

	</div>
</div>
<div class="reveal" id="nutritionModal" data-reveal>
	<script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
	<div class="ck_form_container ck_inline" data-ck-version="5">
	  
	<div class="ck_form_reveal ck_vertical_subscription_form">
	  <div class="ck_form_content">
	  </div>

	  <div class="ck_form_fields">
	    <div id="ck_success_msg" style="display:none;">
	      <p>Success! Now check your email to confirm your subscription.</p>
	    </div>

	    <!--  Form starts here  -->
	    <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/83391/subscribe" data-remote="true">
	      <input type="hidden" value="{&quot;form_style&quot;:&quot;full&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;hide&quot;}" id="ck_form_options">
	      <input type="hidden" name="id" value="83391" id="landing_page_id">
	      <div class="ck_errorArea">
	        <div id="ck_error_msg" style="display:none">
	          <p>There was an error submitting your subscription. Please try again.</p>
	        </div>
	      </div>
	    	<div class="form-content">
	    		<h2 class="text-center">Ready to Eat Food You Enjoy and Makes You Healthier?</h2>
	    		<p class="text-center">Grab our 10 favorite recipes to cook when we are trying to get on track.</p>
	      <div class="ck_control_group ck_email_field_group">
		        	<label class="ck_label" for="ck_emailField" style="display: none">Email Address</label>
		        	<div class="row">
		        		<div class="small-12 large-6 columns">
		        			<input type="text" name="first_name" class="ck_first_name" id="ck_firstNameField" placeholder="First Name">
		        		</div>
		        		<div class="small-12 large-6 columns">
		        			<input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="Email Address" required>
		        		</div>
		        	</div>
		        	<div class="row">
		        		<div class="small-12 columns">
		        			<button class="subscribe_button button expanded ck_subscribe_button btn fields" id="ck_subscribe_button">I&rsquo;m Ready to Love My Body and Food!</button>
		        		</div>
		        	</div>
		      	</div>
		      	</div>
	    </form>
	  </div>

	</div>

	</div>
</div>
<div class="reveal" id="followModal" data-reveal>
	<script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
	<div class="ck_form_container ck_inline" data-ck-version="5">
	  
	<div class="ck_form_reveal ck_vertical_subscription_form">
	  <div class="ck_form_content">
	  </div>

	  <div class="ck_form_fields">
	    <div id="ck_success_msg" style="display:none;">
	      <p>Success! Now check your email to confirm your subscription.</p>
	    </div>

	    <!--  Form starts here  -->
	    <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/55469/subscribe" data-remote="true">
	      <input type="hidden" value="{&quot;form_style&quot;:&quot;full&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;hide&quot;}" id="ck_form_options">
	      <input type="hidden" name="id" value="55649" id="landing_page_id">
	      <div class="ck_errorArea">
	        <div id="ck_error_msg" style="display:none">
	          <p>There was an error submitting your subscription. Please try again.</p>
	        </div>
	      </div>
	    	<div class="form-content">
	    		<h2 class="text-center">Yes, I want to share in your pain!</h2>
	      <div class="ck_control_group ck_email_field_group">
		        	<label class="ck_label" for="ck_emailField" style="display: none">Email Address</label>
		        	<div class="row">
		        		<div class="small-12 large-6 columns">
		        			<input type="text" name="first_name" class="ck_first_name" id="ck_firstNameField" placeholder="First Name">
		        		</div>
		        		<div class="small-12 large-6 columns">
		        			<input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="Email Address" required>
		        		</div>
		        	</div>
		        	<div class="row">
		        		<div class="small-12 columns">
		        			<button class="subscribe_button button expanded ck_subscribe_button btn fields" id="ck_subscribe_button">I&rsquo;m Ready to Watch!</button>
		        		</div>
		        	</div>
		      	</div>
		      	</div>
	    </form>
	  </div>

	</div>

	</div>
</div>
<?php
get_footer();
?>