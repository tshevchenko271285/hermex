<section class="contact-us">
	<div class="container">

        <? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
            <h1><?= $title; ?></h1>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
            <div class="contact-us_description"><?= $description; ?></div>
		<? endif; ?>

		<? $top_panel = get_sub_field('top_panel') ? get_sub_field('top_panel') : false; ?>
		<? if( !empty( $top_panel ) ) : ?>
            <div class="contact-us_top-panel">
                <? if( !empty( $top_panel['icon'] ) ) : ?>
                    <div class="contact-us_top-panel-icon">
                        <img src="<?= $top_panel['icon']; ?>" alt="Hermex"  title="Hermex">
                    </div>
                <? endif; ?>

                <? if( !empty( $top_panel['title'] ) ) : ?>
                    <p class="contact-us_top-panel-title"><?= $top_panel['title']; ?></p>
                <? endif; ?>

                <? if( !empty( $top_panel['sub_title'] ) ) : ?>
                    <p class="contact-us_top-panel-subtitle">
                        <?= $top_panel['sub_title']; ?>
                    </p>
                <? endif; ?>
            </div>

			<? $bottom_panel = get_sub_field('bottom_panel') ? get_sub_field('bottom_panel') : false; ?>
		    <? if( !empty( $bottom_panel ) ) : ?>
                <div class="contact-us_bottom-panel">
                    <div class="contact-us_bottom-panel-left">

				        <? if( !empty( $bottom_panel['sub_phone'] ) ) : ?>
                            <p class="contact-us_bottom-panel-subphone"><?= $bottom_panel['sub_phone']; ?></p>
                        <? endif; ?>

				        <? if( !empty( $bottom_panel['phone'] ) ) : ?>
                            <p class="contact-us_bottom-panel-phone"><?= $bottom_panel['phone']; ?></p>
                        <? endif; ?>

				        <? if( !empty( $bottom_panel['email'] ) ) : ?>
                            <a href="mailto:<?= $bottom_panel['email']; ?>" class="contact-us_bottom-panel-email"><?= $bottom_panel['email']; ?></a>
                        <? endif; ?>

				        <? if( !empty( $bottom_panel['url'] ) ) : ?>
                            <a href="http://<?= $bottom_panel['url']; ?>" class="contact-us_bottom-panel-url"><?= $bottom_panel['url']; ?></a>
                        <? endif; ?>

                    </div>
                    <div class="contact-us_bottom-panel-right">

	                    <? if( !empty( $bottom_panel['building_title'] ) ) : ?>
                            <p class="contact-us_bottom-panel-building-title"><?= $bottom_panel['building_title']; ?></p>
	                    <? endif; ?>
	                    <? $btn_url = $bottom_panel['building_button_url'] ? $bottom_panel['building_button_url'] : '#'; ?>
	                    <? if( !empty( $bottom_panel['building_address'] ) ) : ?>
                            <p class="contact-us_bottom-panel-building-address-desktop"><?= $bottom_panel['building_address']; ?></p>
                            <a href="<?= $btn_url; ?>" class="map-open contact-us_bottom-panel-building-address-mobile"><?= $bottom_panel['building_address']; ?></a>
	                    <? endif; ?>

	                    <? if( !empty( $bottom_panel['building_button_text'] ) ) : ?>
                            <a href="<?= $btn_url; ?>" class="map-open contact-us_bottom-panel-building-button-desktop"><?= $bottom_panel['building_button_text']; ?></a>
                            <span class="contact-us_bottom-panel-building-button-mobile"><?= $bottom_panel['building_button_text']; ?></span>
	                    <? endif; ?>

	                    <? if( !empty( $bottom_panel['building_image'] ) ) : ?>
                            <div class="contact-us_bottom-panel-building-image">
                                <img src="<?= $bottom_panel['building_image']; ?>" alt="Hermex Building" title="Hermex Building">
                            </div>
	                    <? endif; ?>

                    </div>
                </div>
            <? endif; ?>

        <? endif; ?>
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