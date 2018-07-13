<section class="text-block-two-column">
	<div class="container">

		<? $icon = get_sub_field('icon') ? get_sub_field('icon') : false; ?>
		<? if($icon) : ?>
			<div class="text-block-two-column_icon">
				<img src="<?= $icon; ?>" alt="HermexFX" title="HermexFX">
			</div>
		<? endif; ?>

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<div class="row">
			<div class="col-md-6 text-block-two-column_text">
				<? $text_left = get_sub_field('text_left') ? get_sub_field('text_left') : false; ?>
				<? if($text_left) : ?>
					<?= $text_left; ?>
				<? endif; ?>
			</div>
			<div class="col-md-6 text-block-two-column_text">
				<? $text_right = get_sub_field('text_right') ? get_sub_field('text_right') : false; ?>
				<? if($text_right) : ?>
					<?= $text_right; ?>
				<? endif; ?>
			</div>
		</div>
	</div>
</section>
