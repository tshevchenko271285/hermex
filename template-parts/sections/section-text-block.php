<section class="text-block">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $title_image = get_sub_field('title_image') ? get_sub_field('title_image') : false; ?>
		<? if($title_image) : ?>
			<div class="text-block_image">
				<img src="<?= $title_image; ?>" alt="HermexFX" title="HermexFX">
			</div>
		<? endif; ?>

		<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
		<? if($text) : ?>
			<div class="text-block_text"><?= $text; ?></div>
		<? endif; ?>
	</div>
</section>