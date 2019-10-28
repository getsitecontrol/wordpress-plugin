<?php
/**
 * @var $sign_in_link string
 * @var $data array
 * @var $options array
 */
?>
<div class="wrap get-site-control" data-auth="">
	<div class="heading">
		<h2> Create Account</h2>
	</div>

	<div class="block block-sign-up-form block-sign-up-form_tint-action odd">
		<section class="sign-up-form">
			<div class="form-contents tint-action">
				<div class="page-notification-container">
					<div class="gsc-page-notification page-notification page-notification_error">
						<button type="button" class="close close_btn" data-close="gsc-page-notification">×</button>
						<div class="form-validation-message"></div>
					</div>
				</div>
                <p class="privacy">
                By signing up, you agree to the<br/> <a target="_blank" href="https://getsitecontrol.com/terms/">Terms of Service</a> and <a target="_blank" href="https://getsitecontrol.com/privacy/">Privacy Policy</a>
                </p>
				<form novalidate
					  method="post"
					  action="<?php echo esc_url( $options['api_url'] ); ?>"
					  data-form-validate="">
					<fieldset class="form-group">
						<div class="form-wrapper">
							<div class="field-row">
								<span class="f-icon f-icon-name"></span>
								<input tabindex="1" class="form-control" title="Enter your name"
									   value="<?php echo ! empty( $data['name'] ) ? esc_attr( $data['name'] ) : ''; ?>"
									   maxlength="200" placeholder="Name" name="name" type="text">
								<span class="form-validation-message"></span>
							</div>

							<div class="field-row">
								<span class="f-icon f-icon-email"></span>
								<input tabindex="2" class="form-control" title="Enter your email" required=""
									   maxlength="200" placeholder="Email Address" name="email" type="email"
									   value="<?php echo ! empty( $data['email'] ) ? esc_attr( $data['email'] ) : ''; ?>">
								<span class="form-validation-message"></span>
							</div>

							<div class="field-row">
								<span class="f-icon f-icon-site"></span>
								<input tabindex="3" class="form-control" title="Enter your site" required=""
									   maxlength="200" placeholder="Site Address (URL)" name="site" type="url"
									   value="<?php echo ! empty( $data['site'] ) ? esc_attr( $data['site'] ) : ''; ?>">
								<span class="form-validation-message"></span>
							</div>
						</div>
						<button tabindex="4" class="button button-fill-active" type="submit"
								data-sending-text="Sending data..."
								data-text="Sign up"
						>
							Sign up
						</button>
					</fieldset>
				</form>
			</div>
			<p class="form-connect-with">Or sign up with</p>
			<div class="form-social-footer">
				<div class="social-login">
					<a tabindex="5"
					   href="<?php echo esc_url( $options['google_social_link'] ); ?>"
					   class="button social-login-button social-login-google">
						<span class="icon icon_google"></span>
						Google
					</a>
				</div>
			</div>
			<p class="form-have-account">
				Already have an account?&nbsp; <a tabindex="7" href="<?php echo esc_url( $sign_in_link ); ?>">Sign In</a>
			</p>
		</section>
	</div>

</div>

<script>
	var GSC_OPTIONS = <?php echo wp_json_encode( $options ); ?>;
</script>
