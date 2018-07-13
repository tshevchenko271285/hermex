<?php
function hermex_route($str) {
	switch($str) {
		case 'indent' : get_template_part( 'template-parts/sections/section', 'indent' ); break;
		case 'first_slide' : get_template_part( 'template-parts/sections/section', 'first-slide' ); break;
		case 'working_with_you' : get_template_part( 'template-parts/sections/section', 'working-with-you' ); break;
		case 'partner_support' : get_template_part( 'template-parts/sections/section', 'partner-support' ); break;
		case 'advantages' : get_template_part( 'template-parts/sections/section', 'advantages' ); break;
		case 'testimonials' : get_template_part( 'template-parts/sections/section', 'testimonials' ); break;
		case 'about_first_slide' : get_template_part( 'template-parts/sections/section', 'about-first-slide' ); break;
		case 'text_block' : get_template_part( 'template-parts/sections/section', 'text-block' ); break;
		case 'text_block_two_column' : get_template_part( 'template-parts/sections/section', 'text-block-two-column' ); break;
		case 'powered_by' : get_template_part( 'template-parts/sections/section', 'powered-by' ); break;
		case 'group_in_numbers' : get_template_part( 'template-parts/sections/section', 'group-in-numbers' ); break;
		case 'company_profile' : get_template_part( 'template-parts/sections/section', 'company-profile' ); break;
		case 'security' : get_template_part( 'template-parts/sections/section', 'security' ); break;
		case 'for_business_first_slide' : get_template_part( 'template-parts/sections/section', 'for-business-first-slide' ); break;
		case 'import_and_export' : get_template_part( 'template-parts/sections/section', 'import-and-export' ); break;
		case 'info_two_column' : get_template_part( 'template-parts/sections/section', 'info-two-column' ); break;
		case 'info_two_column_light' : get_template_part( 'template-parts/sections/section', 'info-two-column-light' ); break;
		case 'info_two_column_light_and_desc' : get_template_part( 'template-parts/sections/section', 'info-two-column-light-and-desc' ); break;
		case 'three_column_for_business' : get_template_part( 'template-parts/sections/section', 'three-column-for-business' ); break;
		case 'open_account' : get_template_part( 'template-parts/sections/section', 'open-account' ); break;
		case 'for_personal_first_slide' : get_template_part( 'template-parts/sections/section', 'for-personal-first-slide' ); break;
		case 'careers_first_slide' : get_template_part( 'template-parts/sections/section', 'careers-first-slide' ); break;
		case 'list_and_button' : get_template_part( 'template-parts/sections/section', 'list-and-button' ); break;
		case 'why_choose_first_slide' : get_template_part( 'template-parts/sections/section', 'why-choose-first-slide' ); break;
		case 'our_services' : get_template_part( 'template-parts/sections/section', 'our-services' ); break;
		case 'three_icons_and_button' : get_template_part( 'template-parts/sections/section', 'three-icons-and-button' ); break;
		case 'treasury' : get_template_part( 'template-parts/sections/section', 'treasury' ); break;
		case 'dedicated_dealer' : get_template_part( 'template-parts/sections/section', 'dedicated-dealer' ); break;
		case 'privacy_policy_first_slide' : get_template_part( 'template-parts/sections/section', 'privacy-policy-first-slide' ); break;
		case 'faq' : get_template_part( 'template-parts/sections/section', 'faq' ); break;
		case 'tcs_and_privacy_policy' : get_template_part( 'template-parts/sections/section', 'tcs-and-privacy-policy' ); break;
		case 'register' : get_template_part( 'template-parts/sections/section', 'register' ); break;
		case 'contact_us' : get_template_part( 'template-parts/sections/section', 'contact-us' ); break;
		case 'market_watch_first_slide' : get_template_part( 'template-parts/sections/section', 'market-watch-first-slide' ); break;
		default : echo 'Not template for ' . $str;
	}
}