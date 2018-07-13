<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hermex
 */

get_header();
?>
    <div class="page404">
        <div class="page404_image"></div>
        <p class="page404_text">The Page cannot be found. Please check your URL.</p>
        <a href="<?= get_home_url(); ?>" class="button-blue">Go to the homepage</a>
    </div>
<?php
get_footer();
