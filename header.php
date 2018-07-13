<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hermex
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <meta name="description" content="<?php bloginfo( 'description'  ); ?>" />
    <!--OGP-->
    <meta property="og:image" content="https://hermexfx.com/wp-content/themes/site_assets/img/pages/logo-white2.png"/>
    <meta property="og:robots" content="index, follow"/>
    <meta property="og:site_name" content="<?php bloginfo( 'name'  ); ?>"/>
    <meta property="og:locale" content="en"/>
    <meta property="og:type" content="website"/>
    <!--Guide-->
    <meta name="application-name" content="Hermex"/>
    <meta name="msapplication-window" content="width=device-width;height=device-height"/>
    <meta name="msapplication-TileColor" content="#000000"/>
    <meta name="msapplication-square70x70logo" content="/*/logos/Hermex-Logo-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="/*/logos/Hermex-Logo-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="/*/logos/Hermex-Logo-310x510.png"/>
    <meta name="msapplication-square310x310logo" content="/*/logos/Hermex-Logo-310x310.png"/>
    <meta name="msapplication-starturl" content="./?utm_source=ie9&utm_medium=web&utm_campaign=pinned-ie9"/>
    <meta name="msapplication-tooltip" content="<?php bloginfo( 'name'  ); ?>"/>
    <meta name="msapplication-navbutton-color" content="#ed1c24"/>
    <!--Android Guide-->
    <link rel="icon" type="image/png" href="/*/logos/Hermex-Logo-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/*/logos/Hermex-Logo-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/*/logos/Hermex-Logo-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/*/logos/Hermex-Logo-192x192.png" sizes="192x192">
    <!--Apple Guide-->
    <link rel="apple-touch-icon" href="/*/logos/Hermex-Logo-60x60.png"/>
    <link rel="apple-touch-icon" href="/*/logos/Hermex-Logo-76x76.png" sizes="76x76"/>
    <link rel="apple-touch-icon" href="/*/logos/Hermex-Logo-120x120.png" sizes="120x120"/>
    <link rel="apple-touch-icon" href="/*/logos/Hermex-Logo-152x152.png" sizes="152x152"/>
    <!--Twitter card-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@hermexfx" />
    <meta name="twitter:image" content="https://hermexfx.com/*/logo.png?ver=1.1" />
    <!--The Web App Manifest-->
    <link rel="manifest" href="/manifest.json">
<? if ( is_front_page() ) { ?>
    <meta name="twitter:url" content="https://hermexfx.com" /> <!--home-->
    <meta name="twitter:description" content="<?php bloginfo( 'description'  ); ?>" /> <!--home-->
    <meta name="twitter:title" content="Hermex" /> <!--home-->
    <meta property="og:description" content="<?php bloginfo( 'description'  ); ?>"/> <!--home-->
    <meta property="og:url" content="<?= home_url(); ?>"/> <!--home-->
    <meta property="og:title" content="Hermex"/> <!--home-->
<? } else { ?>
    <meta property="og:url" content="<?= get_page_link(); ?>"/> <!--pages-->
    <meta property="og:title" content="<?= wp_title(); ?>"/><!--pages-->
    <meta name="twitter:url" content="<?= get_page_link(); ?>" /><!--pages-->
    <meta name="twitter:title" content="<?= wp_title(); ?>" /><!--pages-->
    <? $description = get_field('description') ? get_field('description') : 'Hermex'; ?><!--pages-->
    <meta property="og:description" content="<?= $description; ?>"/><!--pages-->
    <meta name="twitter:description" content="<?= $description; ?>" /><!--pages-->
<? } ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TRFNJKW');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRFNJKW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
    $page_theme = get_field('page_theme') ? get_field('page_theme') : false;
    $header_class = '';
    if($page_theme == 'dark') {
        $header_class = 'header__light';
    }
?>
<header class="header <?= $header_class; ?>">
    <div class="container d-flex flex-lg-row flex-md-column flex-row justify-content-between justify-content-md-start">
        <div class="header_boorger"></div>
        <div class="header_menu_close"></div>
        <div class="header_logo">
	        <?php $desktop_logo = get_field('desktop_logo', 'options') ? get_field('desktop_logo', 'options') : false; ?>
            <?php if( $desktop_logo ) : ?>
            <?php endif;?>
            <a href="<?= home_url(); ?>" class="header_logo-desktop"><img src="<?= $desktop_logo; ?>" alt="HermexFX Logo" title="HermexFX Logo"></a>
            <?php $mobile_logo = get_field('mobile_logo', 'options') ? get_field('mobile_logo', 'options') : false; ?>
	        <?php if( $mobile_logo ) : ?>
                <a href="<?= home_url(); ?>" class="header_logo-mobile"><img src="<?= $mobile_logo; ?>" alt="HermexFX Logo" title="HermexFX Logo"></a>
	        <?php endif;?>
        </div>
        <div class="header_inner">
            <nav class="header_menu">
                <?php
                wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class'      => 'menu',
                        'container'       => false,
                ) );
                ?>
            </nav>
            <div class="header_buttons-group">
<!--                <div class="header_buttons-group-left">-->
<!--                    <a href="#" class="sign-in">Hello.Sign In</a>-->
<!--                    <a href="#" class="your-account">Your Account</a>-->
<!--                </div>-->
	            <?php $header_button_text = get_field('header_button_text', 'options') ? get_field('header_button_text', 'options') : false; ?>
	            <?php $header_button_url = get_field('header_button_url', 'options') ? get_field('header_button_url', 'options') : false; ?>
                <?php $btn_url = $header_button_url['url'] ? $header_button_url['url'] : '#'; ?>
                <? if( $header_button_text ) : ?>
                    <a href="<?= esc_attr($btn_url); ?>" class="button-register"><?= esc_html($header_button_text); ?></a>
                <? endif; ?>
                <a href="<?= wp_login_url(); ?>" class="sign-mobile">Sign up for free</a>
            </div>
        </div>
    </div>
</header>