<section class="testimonials">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>
		<? $subtitle_image = get_sub_field('subtitle_image') ? get_sub_field('subtitle_image') : false; ?>
		<? if($subtitle_image) : ?>
			<div class="testimonials_subtitle-image">
				<img src="<?= $subtitle_image; ?>" alt="HermexFX" title="HermexFX">
			</div>
		<? endif; ?>
        <div class="row">
            <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type'   => 'testimonials',
                );

                $posts = get_posts( $args );

                foreach($posts as $post){ setup_postdata($post); ?>

                    <div class="col-lg-4 testimonials_column">
                        <div class="testimonials_item">
	                        <? $author = get_field('author') ? get_field('author') : false; ?>
                            <? if($author) : ?>
                                <p class="testimonials_column-author"><?= $author; ?></p>
                            <? endif; ?>
	                        <? $stars = get_field('stars') ? (INT) get_field('stars') : 0; ?>
                            <? if($stars) : ?>
                                <div class="testimonials_item-stars">
                                    <? for($i = 1; $i <= $stars; $i++) { ?>
                                        <span class="testimonials_item-star"></span>
                                    <? } ?>
                                </div>
                            <? endif; ?>
                            <? if( get_the_title() ) : ?>
                                <p class="testimonials_column-title"><? the_title(); ?></p>
                            <? endif; ?>
	                        <? $text = get_field('text') ? get_field('text') : false; ?>
	                        <? if($text) : ?>
                                <p class="testimonials_item-text"><?= $text; ?></p>
	                        <? endif; ?>
                        </div>
                    </div>

                <?php }
                wp_reset_postdata(); // сброс
            ?>
        </div>
		<? $icons = get_sub_field('icons') ? get_sub_field('icons') : false; ?>
		<? if($icons) : ?>
            <div class="testimonials_icons">
                <div class="row">
                    <? foreach ( $icons as $icon ) : ?>
                        <div class="col-md-4">
	                        <? if( $icon['icon'] ) : ?>
                            <div class="testimonials_icons-image">
                                <img src="<?= $icon['icon']; ?>" alt="HermexFX" title="HermexFX">
                            </div>
	                        <? endif; ?>
	                        <? if( $icon['text'] ) : ?>
                                <p class="testimonials_icons-text"><?= $icon['text']; ?></p>
	                        <? endif; ?>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>

		<? endif; ?>

		<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
		<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : '#'; ?>
		<? if( $btn_text ) : ?>
            <a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
		<? endif; ?>
	</div>
</section>