<section class="tcs-and-privacy-policy">

	<div class="container">

		<div class="row tcs-and-privacy-policy_tabs">
            <div class="col-md-4">
                <div data-tab="privacyPolicy" class="tcs-and-privacy-policy_tab">T&Cs and Privacy Policy</div>
            </div>
            <div class="col-md-4">
                <div data-tab="compliance" class="tcs-and-privacy-policy_tab">Compliance</div>
            </div>
            <div class="col-md-4">
                <div data-tab="disclaimer" class="tcs-and-privacy-policy_tab">Disclaimer</div>
            </div>
		</div>

        <div data-tab="privacyPolicy" class="row tcs-and-privacy-policy_row">
	        <? $parts = get_sub_field('parts') ? get_sub_field('parts') : false; ?>
	        <? wp_localize_script( 'hermex-custom-script', 'privacyPolicy', $parts );?>
            <div class="col-md-5">
                <? if( !empty( $parts ) ) : ?>
                    <ol class="tcs-and-privacy-policy_menu">
                        <? foreach( $parts as $part_key=>$part ) : ?>
                            <? if( !empty( $part['title'] ) ) : ?>
                                <p class="tcs-and-privacy-policy_menu-title">
                                    <? if( !empty( $part['sub_title'] ) ) : ?>
                                        <span><?= $part['sub_title']; ?></span>
                                    <? endif; ?>
                                    <?= $part['title']; ?>
                                </p>
                            <? endif; ?>
                            <? if( !empty( $part['items'] ) ) : ?>
                                <? foreach($part['items'] as $item_key=>$item) : ?>
                                    <li class="tcs-and-privacy-policy_menu-item" data-part="<?= $part_key; ?>" data-item="<?= $item_key; ?>">
                                        <?= $item['title']; ?>
                                        <div class="tcs-and-privacy-policy_menu-item-content"><?= $item['content']; ?></div>
                                    </li>
                                <? endforeach; ?>
                            <? endif; ?>
                        <? endforeach; ?>
                    </ol>
                <? endif; ?>
            </div>
            <div class="col-md-7">
                <div class="tcs-and-privacy-policy_content">
                    <p class="tcs-and-privacy-policy_content-title" id="privacyPolicyTitle"></p>
                    <div id="privacyPolicyContent"></div>
                </div>
            </div>
        </div>
        <div data-tab="compliance" class="tcs-and-privacy-policy_row tcs-and-privacy-policy_compliance">

            <? $top_text = get_sub_field('top_text') ? get_sub_field('top_text') : false; ?>
            <? if( !empty( $top_text ) ) : ?>
                <div class="tcs-and-privacy-policy_compliance-toptext"><?= $top_text; ?></div>
            <? endif; ?>

            <div class="row tcs-and-privacy-policy_compliance-panels">
                <div class="col-md-6">
                    <? $left_panel = get_sub_field('left_panel') ? get_sub_field('left_panel') : false; ?>
	                <? if( !empty( $left_panel ) ) : ?>
                        <div class="tcs-and-privacy-policy_compliance-panel"><?= $left_panel; ?></div>
	                <? endif; ?>
                </div>
                <div class="col-md-6">
		            <? $right_panel = get_sub_field('right_panel') ? get_sub_field('right_panel') : false; ?>
		            <? if( !empty( $right_panel ) ) : ?>
                        <div class="tcs-and-privacy-policy_compliance-panel"><?= $right_panel; ?></div>
		            <? endif; ?>
                </div>
            </div>

	        <? $middle_text = get_sub_field('middle_text') ? get_sub_field('middle_text') : false; ?>
	        <? if( !empty( $middle_text ) ) : ?>
                <div class="tcs-and-privacy-policy_compliance-middletext"><?= $middle_text; ?></div>
	        <? endif; ?>

            <div class="row">
                <? $colums = get_sub_field('colums') ? get_sub_field('colums') : false; ?>
                <? if( !empty( $colums ) ) : ?>
                    <? foreach( $colums as $column ) : ?>
                        <div class="col-lg-4 tcs-and-privacy-policy_compliance-column">
                            <? if( !empty( $column['title'] ) ) : ?>
                                <p class="tcs-and-privacy-policy_compliance-column-title"><?= $column['title']; ?></p>
                            <? endif; ?>
                            <? if( !empty( $column['text'] ) ) : ?>
                                <div class="tcs-and-privacy-policy_compliance-column-text">
                                    <?= $column['text']; ?>
                                </div>
                            <? endif; ?>
                        </div>
                    <? endforeach; ?>
                <? endif; ?>
            </div>

	        <? $bottom_text = get_sub_field('bottom_text') ? get_sub_field('bottom_text') : false; ?>
	        <? if( !empty( $bottom_text ) ) : ?>
                <div class="tcs-and-privacy-policy_compliance-bottomtext"><?= $bottom_text; ?></div>
	        <? endif; ?>

        </div>
        <div data-tab="disclaimer" class="tcs-and-privacy-policy_row tcs-and-privacy-policy_disclaimer">
	        <div class="row">
		        <? $left_text = get_sub_field('left_text') ? get_sub_field('left_text') : false; ?>
		        <? if( !empty( $left_text ) ) : ?>
                    <div class="col-lg-6"><?= $left_text; ?></div>
		        <? endif; ?>
		        <? $right_text = get_sub_field('right_text') ? get_sub_field('right_text') : false; ?>
		        <? if( !empty( $right_text ) ) : ?>
                    <div class="col-lg-6"><?= $right_text; ?></div>
		        <? endif; ?>
            </div>

        </div>

	</div>
</section>