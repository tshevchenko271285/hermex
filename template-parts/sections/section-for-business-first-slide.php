<section class="for-business-first-slide">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
            <h1><?= $title; ?></h1>
		<? endif; ?>

		<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
		<? if( $text ) : ?>
            <p class="for-business-first-slide_text"><?= $text; ?></p>
		<? endif; ?>
		<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
		<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : '#'; ?>
		<? if( $btn_text ) : ?>
            <a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
		<? endif; ?>
	</div>
</section>