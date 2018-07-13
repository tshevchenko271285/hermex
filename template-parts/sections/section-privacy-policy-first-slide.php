<section class="privacy-policy-first-slide">
	<div class="container">

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h1><?= $title; ?></h1>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
			<p class="privacy-policy-first-slide_description"><?= $description; ?></p>
		<? endif; ?>

	</div>
</section>