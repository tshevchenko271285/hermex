<? $id = get_sub_field('id') ? ' id="' . get_sub_field('id') . '" ' : ''; ?>
<section class="info-two-column-light-and-desc" <?= $id; ?>>
	<div class="container">
		<? $icon = get_sub_field('icon') ? get_sub_field('icon') : false; ?>
		<? if($icon) : ?>
			<div class="info-two-column-light-and-desc_icon">
				<img src="<?= $icon; ?>" alt="HermexFX" title="HermexFX">
			</div>
		<? endif; ?>

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
			<p class="info-two-column-light-and-desc_description"><?= $description; ?></p>
		<? endif; ?>

		<div class="row">
			<? $left_text = get_sub_field('left_text') ? get_sub_field('left_text') : false; ?>
			<? if($left_text) : ?>
				<div class="col-lg-6 info-two-column-light-and-desc_border">
					<p class="info-two-column-light-and-desc_text"><?= $left_text; ?></p>
				</div>
			<? endif; ?>
			<? $right_text = get_sub_field('right_text') ? get_sub_field('right_text') : false; ?>
			<? if($right_text) : ?>
				<div class="col-lg-6 info-two-column-light-and-desc_border">
					<p class="info-two-column-light-and-desc_text"><?= $right_text; ?></p>
				</div>
			<? endif; ?>
		</div>
	</div>
</section>