<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hermex
 */

get_header();
?>
<div style="height: 250px;"></div>
<div class="container">
	<?php
	$args = array(
		'post_type'   => 'advantages',
		'posts_per_page' => -1,
	);
	$posts = get_posts( $args );
	if ( $posts ) : ?>
        <div class="row">
			<?php foreach($posts as $post) { setup_postdata( $post ); ?>
                <div class="col-md-3 advantages_item">
					<? if( has_post_thumbnail() ) : ?>
                        <div class="advantages_item-icon">
							<?php the_post_thumbnail([175, 75], ['title' => 'Hermex Advanteges'])?>
                        </div>
					<? endif; ?>
                    <p class="advantages_item-text">
						<?php the_title(); ?>
                    </p>
                </div>
			<?php } ?>
        </div>
	<?php endif;
	wp_reset_postdata(); // сброс
	?>
</div>
<div style="height: 250px;"></div>
<?php
get_footer();
