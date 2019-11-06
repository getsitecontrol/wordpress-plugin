<?php
/**
 * @var $url_exist bool
 * @var $options array
 * @var $data array
 * @var $add_site_link string
 */
?>

<div class="wrap getsitecontrol getsitecontrol-view-loading" data-manage="">
	<div class="block-login-form">
		<section class="sign-up-form ">
			<h1 class="manage__title">Create and manage widgets</h1>
			<p class="manage__text">Open your Getsitecontrol dashboard to create and edit widgets for your website.</p>
			<div class="form-contents">
				<div class="select-website-block">
					<select id="widget" name="gsc_widget" class="select-widget selected-toggled-block form-control" disabled="" required></select>
				</div>

				<a href="<?php echo esc_url( $add_site_link ); ?>" target="_blank"
					   class="button-submit add-site ">
						Add new site →
				</a>
				<div class="gotodashboard-block">
					<a href="javascript:void(0);"
					   class="gotodashboard-block button-submit disabled manage-widget-link manage__button-text" target="_blank">
						Go to Dashboard →
				</a>
				</div>

			</div>
		</section>
	</div>
</div>


<script>
	var GSC_OPTIONS = <?php echo wp_json_encode( $options ); ?>;
</script>
