<? $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : ''; ?>
<section class="for-personal-first-slide" <?= $image; ?> >
	<div class="container">

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h1><?= $title; ?></h1>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
			<p class="for-personal-first-slide_description"><?= $description; ?></p>
		<? endif; ?>

		<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
		<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : '#'; ?>
		<? if( $btn_text ) : ?>
            <a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
		<? endif; ?>

		<? $icon = get_sub_field('icon') ? get_sub_field('icon') : false; ?>
		<? if($icon) : ?>
			<div class="for-personal-first-slide_icon" id="buyingPropertyOverseas">
				<img src="<?= $icon; ?>" alt="Hermex For Business" title="Hermex For Business">
			</div>
		<? endif; ?>

		<? $sub_title = get_sub_field('sub_title') ? get_sub_field('sub_title') : false; ?>
		<? if($sub_title) : ?>
			<h2><?= $sub_title; ?></h2>
		<? endif; ?>

		<div class="row">
			<? $text_left = get_sub_field('text_left') ? get_sub_field('text_left') : false; ?>
			<? if($text_left) : ?>
				<div class="col-lg-6 for-personal-first-slide_border">
					<p class="for-personal-first-slide_text"><?= $text_left; ?></p>
				</div>
			<? endif; ?>
			<? $text_right = get_sub_field('text_right') ? get_sub_field('text_right') : false; ?>
			<? if($text_right) : ?>
				<div class="col-lg-6 for-personal-first-slide_border">
					<p class="for-personal-first-slide_text"><?= $text_right; ?></p>
				</div>
			<? endif; ?>
		</div>

	</div>
</section>