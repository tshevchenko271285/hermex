<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hermex
 */
get_header();
    while ( have_posts() ) : the_post();
        // check if the flexible content field has rows of data
        if( have_rows('sections') ):
            // loop through the rows of data
            while ( have_rows('sections') ) : the_row();
                hermex_route( get_row_layout() );
            endwhile;
        else :
            // no layouts found
        endif;
	/*  Google Rating   */
	if(function_exists('the_google_rating')) { echo the_google_rating();}
	if ( class_exists( 'Google_Rating' ) ) {
		$rating = new Google_Rating(get_queried_object_id() );
		?>
		<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Webpage",
		  "aggregateRating": {
		    "@type": "AggregateRating",
		    "ratingValue": "<?= $rating->avg; ?>",
		    "bestRating": "<?= $rating->best_rating; ?>",
		    "worstRating": "<?= $rating->worst_rating; ?>",
		    "ratingCount": "<?= $rating->total_count; ?>"
		  }
		}
		</script>
		<?
	}
    endwhile; // End of the loop.
get_footer();
