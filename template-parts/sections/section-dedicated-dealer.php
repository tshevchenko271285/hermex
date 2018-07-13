<? $section_id = get_sub_field('section_id') ? ' id="' . get_sub_field('section_id') . '" ' : ''; ?>
<section class="dedicated-dealer" <?= $section_id; ?> >
	<div class="container">
		<? $icon = get_sub_field('icon') ? get_sub_field('icon') : false; ?>
		<? if($icon) : ?>
			<div class="dedicated-dealer_icon">
				<img src="<?= $icon; ?>" alt="Hermex Import and Export" title="Hermex Import and Export">
			</div>
		<? endif; ?>

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<div class="row">
			<? $left_text = get_sub_field('left_text') ? get_sub_field('left_text') : false; ?>
			<? if($left_text) : ?>
				<div class="col-lg-6 dedicated-dealer_border">
					<div class="dedicated-dealer_text"><?= $left_text; ?></div>
				</div>
			<? endif; ?>
			<? $right_text = get_sub_field('right_text') ? get_sub_field('right_text') : false; ?>
			<? if($right_text) : ?>
				<div class="col-lg-6 dedicated-dealer_border">
					<div class="dedicated-dealer_text"><?= $right_text; ?></div>
				</div>
			<? endif; ?>
		</div>

		<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
		<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : false; ?>
		<? if( $btn_text && $btn_url ) : ?>
			<a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
		<? endif; ?>
	</div>
</section>