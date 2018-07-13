<?php
if( !is_admin() ) {
    if( isset($_COOKIE['used_cookie']) ) {
        setcookie("used_cookie", 'agree', strtotime( '+30 days' ), '/' );
    } else {
        add_action( 'wp_footer', function () {
            $text = get_field('used_cookies_text', 'options') ? get_field('used_cookies_text', 'options') : '';
            $url = get_field('cookies_read_more_url', 'options') ? get_field('cookies_read_more_url', 'options') : '#';
            ?>
            <div class="use-cookie" >
                <p><?= $text; ?></p>
                <div id="agreeUsedCookie" class="button-blue">OK</div>
                <a href="<?= $url; ?>" class="use-cookie_read-more">Read More</a>
            </div >
        <?php } );
    }
}