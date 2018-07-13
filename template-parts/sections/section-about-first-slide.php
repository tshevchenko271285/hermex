<? $image = get_sub_field('bg_image') ? 'style="background-image:url(' . get_sub_field('bg_image') . ')"' : ''; ?>
<section class="about-first-slide" <?= $image; ?>>
	<div class="container">
		<? $page_title = get_sub_field('page_title') ? get_sub_field('page_title') : false; ?>
		<? if($page_title) : ?>
			<h1><?= $page_title; ?></h1>
		<? endif; ?>

		<? $page_description = get_sub_field('page_description') ? get_sub_field('page_description') : false; ?>
		<? if($page_description) : ?>
			<p class="about-first-slide_page-description"><?= $page_description; ?></p>
		<? endif; ?>

		<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
		<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : '#'; ?>
		<? if( $btn_text ) : ?>
            <a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
		<? endif; ?>

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
		<? if($text) : ?>
			<p class="about-first-slide_text"><?= $text; ?></p>
		<? endif; ?>

		<? $image = get_sub_field('image') ? get_sub_field('image') : false; ?>
		<? if($image) : ?>
			<div class="about-first-slide_image">
				<img src="<?= $image; ?>" alt="Hermex FCA" title="Hermex FCA">
			</div>
		<? endif; ?>
	</div>
</section>