<?php
get_header();
?>
    <!-- Start Content-->
    <?php
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
        endwhile; // End of the loop.
    ?>
    <!-- End Content-->

<?php
get_footer();
