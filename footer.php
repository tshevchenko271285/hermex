<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hermex
 */

?>
<footer class="footer">
    <div class="container">
        <div class="footer_top">
            <?php $footer_logo = get_field('footer_logo', 'options') ? get_field('footer_logo', 'options') : false; ?>
            <?php if( $footer_logo ) : ?>
                <a href="<?= home_url(); ?>" class="footer_logo"><img src="<?= $footer_logo; ?>" alt="HermexFX" title="HermexFX Logo"></a>
            <?php endif; ?>
            &copy; 2006 - <?= date('Y');?> <?= get_bloginfo( 'name' );?>
            <?php $socials = get_field('footer_socials', 'options') ? get_field('footer_socials', 'options') : false; ?>
            <? if( $socials ) : ?>
                <div class="footer_socials">
                    <? foreach ($socials as $social) : ?>
                        <a href="<?= $social['url'];?>" class="footer_social">
                            <i class="fab <?= $social['icon']; ?>"></i>
                        </a>
                    <? endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php $footer_text = get_field('footer_text', 'options') ? get_field('footer_text', 'options') : false; ?>
        <?php if( $footer_text ) : ?>
            <div class="footer_text">
                <? echo $footer_text; ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-4 footer_column">
                <? $left_column = get_field('left_column', 'option') ? get_field('left_column', 'option') : false; ?>
                <? if( !empty( $left_column ) ) : ?>
                    <?= $left_column; ?>
                <? endif; ?>
            </div>
            <div class="col-md-4 footer_column">
                <? $center_column = get_field('center_column', 'option') ? get_field('center_column', 'option') : false; ?>
                <? if( !empty( $center_column ) ) : ?>
                    <?= $center_column; ?>
                <? endif; ?>
            </div>
            <div class="col-md-4 footer_column">
                <? $right_column = get_field('right_column', 'option') ? get_field('right_column', 'option') : false; ?>
                <? if( !empty( $right_column ) ) : ?>
                    <?= $right_column; ?>
                <? endif; ?>
            </div>
        </div>
    </div>
</footer>
<?//= do_shortcode("[uptolike]"); ?>
<script type="application/ld+json">{ "@context" : "http://schema.org","@type" : "Organization","url" : "https://hermexfx.com","name" : "Hermex", "logo": "https://hermexfx.com/wp-content/themes/site_assets/img/pages/logo-white2.png","contactPoint" : [{ "@type" : "ContactPoint","telephone" : "+44-0-203-026-4030","contactType" : "customer support","areaServed" : ["en"],"availableLanguage" : ["English"]} ] ,"sameAs" : ["https://twitter.com/hermexfx","http://www.facebook.com/hermexfx"]}</script>
<?php wp_footer(); ?>
</body>
</html>
