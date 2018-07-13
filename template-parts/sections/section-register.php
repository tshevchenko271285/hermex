<section class="register">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<?php
					$shortcode_form = get_sub_field('shortcode_form') ? get_sub_field('shortcode_form') : false;
					if( !empty($shortcode_form) ) {
						echo do_shortcode( $shortcode_form );
					}
				?>
			</div>
		</div>
	</div>
</section>