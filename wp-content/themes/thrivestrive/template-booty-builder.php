<?php
/*
Template Name: Booty Builder Challenge
*/
?>

<?php get_header(); ?>
	<section class="hero">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-box">
					<h2 class="subheader">Thrive/Strive Presents</h2>
					<h1>The 7-Day Booty Builder Challenge</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="article">
		<div class="row">
			<div class="small-12 large-6 columns">
					<script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
					<div class="ck_form_container ck_inline" data-ck-version="6">
					  <div class="ck_naked">
					  <div class="ck_form_fields">
					    <div id="ck_success_msg" style="display:none;">
					      <p>Success! Now check your email to confirm your email.</p>
					    </div>

					    <!--  Form starts here  -->
					    <form id="ck_subscribe_form" class="landing_form" action="https://app.convertkit.com/landing_pages/127750/subscribe" data-remote="true">
					      <input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
					      <input type="hidden" name="id" value="127750" id="landing_page_id">
					      <div class="ck_errorArea">
					        <div id="ck_error_msg" style="display:none">
					          <p>There was an error submitting your subscription. Please try again.</p>
					        </div>
					      </div>
					      <div class="ck_control_group ck_email_field_group">
					      	<div class="row collapse">
					      		<div class="small-12 large-6 columns">
					        		<input type="text" name="first_name" class="ck_first_name" id="ck_firstNameField" placeholder="First Name">
					        	</div>
					        	<div class="small-12 large-6 columns">
					        		<input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="Email Address" required>
					        	</div>
					        </div>
					      </div>
					      <div class="ck_control_group ck_captcha2_h_field_group ck-captcha2-h" style="position: absolute !important;left: -999em !important;">
					        <input type="text" name="captcha2_h" class="ck-captcha2-h" id="ck_captcha2_h" placeholder="We use this field to detect spam bots. If you fill this in, you will be marked as a spammer.">
					      </div>


					      <button class="subscribe_button ck_subscribe_button btn fields button expanded medium" id="ck_subscribe_button">
					        Take the Challenge
					      </button>
					    </form>
					  </div>

					</div>

					</div>
				<br>
				<?php the_content(); ?>
			</div>
			<div class="small-12 large-6 columns">
				<div class="image"><img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/12/31223115/booty-builder.png" data-pin-url="https://thrivestrive.com/body-blaster" data-pin-description="Looking for a workout that helps you get a bigger and firmer butt? This booty workout is meant for you."></div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>