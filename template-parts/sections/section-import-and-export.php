<? $section_id = get_sub_field('section_id') ? ' id="' . get_sub_field('section_id') . '" ' : ''; ?>
<section class="import-and-export" <?= $section_id; ?> >
	<div class="container">

		<? $icon = get_sub_field('icon') ? get_sub_field('icon') : false; ?>
		<? if($icon) : ?>
			<div class="import-and-export_icon">
				<img src="<?= $icon; ?>" alt="Hermex Import and Export" title="Hermex Import and Export">
			</div>
		<? endif; ?>

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
		<? if($text) : ?>
			<p class="import-and-export_text"><?= $text; ?></p>
		<? endif; ?>

		<div class="row">
			<div class="col-md-6">
				<? $image = get_sub_field('image') ? get_sub_field('image') : false; ?>
				<? if($image) : ?>
					<div class="import-and-export_image">
						<img src="<?= $image; ?>" alt="Hermex Import and Export" title="Hermex Import and Export">
					</div>
				<? endif; ?>
			</div>
			<div class="col-md-6">
				<? $second_text = get_sub_field('second_text') ? get_sub_field('second_text') : false; ?>
				<? if($second_text) : ?>
                    <p class="import-and-export_second-text"><?= $second_text; ?></p>
                <? endif; ?>
			</div>
		</div>

	</div>
</section>