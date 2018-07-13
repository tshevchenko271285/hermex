<? $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : ''; ?>
<? $section_id = get_sub_field('section_id') ? ' id="' . get_sub_field('section_id') . '" ' : ''; ?>
<section class="info-two-column" <?= $image; ?> <?= $section_id; ?> >
	<div class="container">
		<? $icon = get_sub_field('icon') ? get_sub_field('icon') : false; ?>
		<? if($icon) : ?>
			<div class="info-two-column_icon">
				<img src="<?= $icon; ?>" alt="HermexFX" title="HermexFX">
			</div>
		<? endif; ?>

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>
		<div class="row">
			<? $left_text = get_sub_field('left_text') ? get_sub_field('left_text') : false; ?>
			<? if($left_text) : ?>
				<div class="col-lg-6 info-two-column_border">
					<p class="info-two-column_text"><?= $left_text; ?></p>
				</div>
			<? endif; ?>
			<? $right_text = get_sub_field('right_text') ? get_sub_field('right_text') : false; ?>
			<? if($right_text) : ?>
				<div class="col-lg-6 info-two-column_border">
					<p class="info-two-column_text"><?= $right_text; ?></p>
				</div>
			<? endif; ?>
		</div>
	</div>
</section>