<section class="company-profile">
    <div class="container">
        <? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
        <? if($title) : ?>
            <h2><?= $title; ?></h2>
        <? endif; ?>
        <? $desciption = get_sub_field('desciption') ? get_sub_field('desciption') : false; ?>
        <? if($desciption) : ?>
            <div class="company-profile_description"><?= $desciption; ?></div>
        <? endif; ?>
    </div>
	<div class="company-profile_top">
		<div class="container">

			<div class="company-profile_top-logos">
				<? $logo_left = get_sub_field('logo_left') ? get_sub_field('logo_left') : false; ?>
				<? if($logo_left) : ?>
					<div class="company-profile_top-logos-item">
						<img src="<?= $logo_left; ?>" alt="Hermex Company Profile Logo" title="Hermex Company Profile Logo">
					</div>
				<? endif; ?>
				<? $logo_right = get_sub_field('logo_right') ? get_sub_field('logo_right') : false; ?>
				<? if($logo_right) : ?>
					<div class="company-profile_top-logos-item">
						<img src="<?= $logo_right; ?>" alt="Hermex Company Profile Logo" title="Hermex Company Profile Logo">
					</div>
				<? endif; ?>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="company-profile_top-left">

						<? $established_title = get_sub_field('established_title') ? get_sub_field('established_title') : false; ?>
						<? $established_value = get_sub_field('established_value') ? get_sub_field('established_value') : false; ?>
						<? if($established_title && $established_value) : ?>
							<div class="company-profile_top-left-row">
								<div class="company-profile_top-left-row-title"><?= $established_title; ?></div>
								<div class="company-profile_top-left-row-value"><?= $established_value; ?></div>
							</div>
						<? endif; ?>

						<? $headquarters_title = get_sub_field('headquarters_title') ? get_sub_field('headquarters_title') : false; ?>
						<? $headquarters_value = get_sub_field('headquarters_value') ? get_sub_field('headquarters_value') : false; ?>
						<? if($headquarters_title && $headquarters_value) : ?>
							<div class="company-profile_top-left-row">
								<div class="company-profile_top-left-row-title"><?= $headquarters_title; ?></div>
								<div class="company-profile_top-left-row-value"><?= $headquarters_value; ?></div>
							</div>
						<? endif; ?>

						<? $regulations_title = get_sub_field('regulations_title') ? get_sub_field('regulations_title') : false; ?>
						<? $regulations_values = get_sub_field('regulations_values') ? get_sub_field('regulations_values') : false; ?>
						<? if($regulations_title && $regulations_values) : ?>
							<div class="company-profile_top-left-row">
								<div class="company-profile_top-left-row-title"><?= $regulations_title; ?></div>
								<div class="company-profile_top-left-row-value">
									<ul class="company-profile_top-left-row-list">
										<? foreach($regulations_values as $item) : ?>
											<li><?= $item['text']; ?></li>
										<? endforeach; ?>
									</ul>
								</div>
							</div>
						<? endif; ?>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="clearfix company-profile_top-right">

						<? $eea_registrations_title = get_sub_field('eea_registrations_title') ? get_sub_field('eea_registrations_title') : false; ?>
						<? $eea_registrations_values = get_sub_field('eea_registrations_values') ? get_sub_field('eea_registrations_values') : false; ?>
						<? if($eea_registrations_title && $eea_registrations_values) : ?>
							<div class="company-profile_top-right-row">
								<div class="company-profile_top-right-row-title"><?= $eea_registrations_title; ?></div>
								<div class="company-profile_top-right-row-value">
									<ul class="company-profile_top-right-row-list">
										<? foreach($eea_registrations_values as $item) : ?>
											<li><?= $item['text']; ?></li>
										<? endforeach; ?>
									</ul>
								</div>
							</div>
						<? endif; ?>

						<? $actual_building_image = get_sub_field('actual_building_image') ? get_sub_field('actual_building_image') : false; ?>
						<? if($actual_building_image) : ?>
							<div class="company-profile_top-right-image">
								<img src="<?= $actual_building_image; ?>" alt="Hermex Build Image"  title="Hermex Build Image">
							</div>
						<? endif; ?>

						<div class="company-profile_top-right-address-panel">
							<? $actual_building_title = get_sub_field('actual_building_title') ? get_sub_field('actual_building_title') : false; ?>
							<? if($actual_building_title) : ?>
								<p class="company-profile_top-right-address-panel-title"><?= $actual_building_title; ?></p>
							<? endif; ?>

							<? $actual_building_text = get_sub_field('actual_building_text') ? get_sub_field('actual_building_text') : false; ?>
							<? if($actual_building_text) : ?>
								<p><?= $actual_building_text; ?></p>
							<? endif; ?>

							<? $actual_building_button_text = get_sub_field('actual_building_button_text') ? get_sub_field('actual_building_button_text') : false; ?>
							<? if($actual_building_button_text) : ?>
								<? $actual_building_button_url = get_sub_field('actual_building_button_url') ? get_sub_field('actual_building_button_url') : '#'; ?>
								<a href="<?= $actual_building_button_url; ?>" class="map-open company-profile_top-right-address-panel-btn"><?= $actual_building_button_text; ?></a>
							<? endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="company-profile_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 border-r">
					<? $bottom_left_list = get_sub_field('bottom_left_list') ? get_sub_field('bottom_left_list') : false; ?>
					<? if($bottom_left_list) : ?>
						<div class="company-profile_bottom-list">
							<ul>
								<? foreach( $bottom_left_list as $item ) : ?>
									<li>
										<span class="company-profile_bottom-list-col-left"><?= $item['left_column']?></span>
										<span class="company-profile_bottom-list-col-right"><?= $item['right_column']?></span>
									</li>
								<? endforeach; ?>
							</ul>
						</div>
					<? endif; ?>
				</div>
				<div class="col-lg-6">
					<? $bottom_right_list = get_sub_field('bottom_right_list') ? get_sub_field('bottom_right_list') : false; ?>
					<? if($bottom_right_list) : ?>
						<div class="company-profile_bottom-list">
							<ul>
								<? foreach( $bottom_right_list as $item ) : ?>
									<li>
										<span class="company-profile_bottom-list-col-left"><?= $item['left_column']?></span>
										<span class="company-profile_bottom-list-col-right"><?= $item['right_column']?></span>
									</li>
								<? endforeach; ?>
							</ul>
						</div>
					<? endif; ?>
				</div>
			</div>
		</div>
	</div>
    <!-- Start PopUp Map -->
	<? add_action( 'wp_footer', 'map_scripts' ); ?>
	<? function map_scripts(){
		$map = get_field('we_on_a_map', 'option') ? get_field('we_on_a_map', 'option') : false;
		wp_localize_script( 'hermex-custom-script', 'coordinates', $map );
		wp_enqueue_script( 'hermex-map-script', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDoNKCv83pVEfg806DcyJfDlkPH0qOLPks&callback=initMap', array('hermex-custom-script'), '20151215', true );
	} ?>
    <div class="map-popup">
        <div class="map-popup_close">
            <i class="fal fa-times"></i>
        </div>
        <div id="map" class="map-popup_map"></div>
    </div>
    <!-- End PopUp Map -->
</section>