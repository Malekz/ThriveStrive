<?php
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
	$image = get_field('hero_image');
	$subtitle = get_field('subtitle');
	$pinterest = get_field('pinterest');
?>
<section class="hero" style="<?php if($image != '') { ?> background: linear-gradient(90deg, rgba(255,104,71, 0.75) 10%, rgba(132,220,198, 0.75) 90%), url('<?php echo $image['url']; ?>') no-repeat fixed center;background-size: cover;" <?php } ?>">
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
			<h2 class="text-center">We are normal people just trying to live up to our potential. We know you understand so why don&rsquo;t you join us on our journey?</h2>
		</div>
		<div class="small-12 large-6 columns large-offset-3 text-center end">
			<script src="https://app.convertkit.com/assets/CKJS4.js?v=21"></script>
			<div class="ck_form_container ck_inline" data-ck-version="5">
			  <div class="ck_form ck_minimal">
			  <div class="ck_form_fields">

			    <div id="ck_success_msg"  style="display:none;">
			      <p>Success! Now check your email to confirm your subscription.</p>
			    </div>

			    <!--  Form starts here  -->
			    <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/55469/subscribe" data-remote="true">
			      <input type="hidden" value="{&quot;form_style&quot;:&quot;minimal&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;custom&quot;}" id="ck_form_options">
			      <input type="hidden" name="id" value="55469" id="landing_page_id">
			      <div class="ck_errorArea">
			        <div id="ck_error_msg" style="display:none">
			          <p>There was an error submitting your subscription. Please try again.</p>
			        </div>
			      </div>
			      <div class="ck_control_group ck_email_field_group">
			        <label class="ck_label" for="ck_emailField" style="display: none">Email Address</label>
			        <input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="Email Address" required>
			      </div>


			      <button class="subscribe_button ck_subscribe_button btn fields" id="ck_subscribe_button">
			        Subscribe
			      </button>
			      <span class="ck_guarantee">
			        
			          <a class="ck_powered_by" href="https://convertkit.com/?utm_campaign=poweredby">Powered by ConvertKit</a>
			      </span>
			    </form>
			  </div>

			    <div id="ck_converted_content" class="ck_converted_content">How are you feeling today? Did you accomplish what you needed to before binging on Thrive/Strive content?</div>
			</div>

			</div>


			<style type="text/css">/* Layout */
			  .ck_form.ck_minimal {
			  /* divider image */
				background: #fff;
				line-height: 1.5em;
				overflow: hidden;
				font-size: 16px;
				border: solid 3px #fff;
				border-top-color: #fff;
				border-bottom-color: #fff;
				clear: both;
				margin: 20px 0px;
				text-align: center;
			}


			.ck_form.ck_minimal h3.ck_form_title {
				text-align: center;
				margin: 0px 0px 10px;
				font-size: 28px;
				line-height: 1.2;
			}

			.ck_form.ck_minimal h4 {
				text-align: center;
				text-transform: uppercase;
				font-size: 18px;
				font-weight: normal;
				padding-top: 0px;
				margin-top: 0px;
			}

			.ck_form.ck_minimal p {
				padding: 0px;
			}

			.ck_form, .ck_form * {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}

			.ck_form.ck_minimal .ck_form_fields {
				width: 100%;
				float: left;
				padding: 5%;
			}
			/* Form fields */

			.ck_errorArea {
				display: none; /* temporary */
			}

			#ck_success_msg {
				padding: 10px 10px 0px;
				border: solid 1px #ddd;
				background: #eee;
			}

			.ck_form.ck_minimal input[type="text"], .ck_form.ck_minimal input[type="email"] {
				font-size: 18px;
				padding: 10px 8px;
				width: 68%;
				border: 1px solid #d6d6d6; /* stroke */
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				border-radius: 3px; /* border radius */
				background-color: #fff; /* layer fill content */
				margin-bottom: 5px;
				height: auto;
				float: left;
				margin: 0px;
				margin-right: 2%;
				height: 42px;
			}

			.ck_form input[type="text"]:focus, .ck_form input[type="email"]:focus {
				outline: none;
				border-color: #aaa;
			}

			.ck_form.ck_minimal .ck_subscribe_button {
			    width: 100%;
			    color: #fff;
			    margin: 0px;
			    padding:  11px 0px;
			    font-size: 18px;
			    background: #0d6db8;
			    -moz-border-radius: 3px;
			    -webkit-border-radius: 3px;
			    border-radius: 3px; /* border radius */
			    cursor: pointer;
			    border: none;
			    text-shadow: none;
			    width: 30%;
			    float: left;
			    height: 42px;
			  }


			.ck_form.ck_minimal .ck_guarantee {
				color: #626262;
				font-size: 12px;
				text-align: center;
				padding: 15px 0px 0px;
				display: block;
				clear: both;
			}
			.ck_form .ck_powered_by {
				display: block;
				color: #aaa;
				font-size: 12px;
			}

			.ck_form .ck_powered_by:hover {
				display: block;
				color: #444;
			}

			.ck_converted_content {
			  display: none;
				padding: 5%;
				background: #fff;
			}

			.ck_form.ck_minimal.width400 .ck_subscribe_button, .ck_form.ck_minimal.width400 input[type="email"] {
					width: 100%;
					float: none;
					margin-top: 5px;
				}

			.ck_slide_up, .ck_modal, .ck_slide_up .ck_minimal, .ck_modal .ck_minimal  {
				min-width: 400px;
			}

			.page .ck_form.ck_minimal {
				margin: 50px auto;
				max-width: 600px;
			}



			</style>
		</div>
	</div>
</section>
<?php
get_footer();
?>