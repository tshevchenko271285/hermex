<? $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : ''; ?>
<? $section_id = get_sub_field('section_id') ? ' id="' . get_sub_field('section_id') . '" ' : ''; ?>
<section class="our-services" <?= $image; ?> <?= $section_id; ?> >
	<div class="container">

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
			<p class="our-services_description"><?= $description; ?></p>
		<? endif; ?>

		<div class="row">
			<? $left_text = get_sub_field('left_text') ? get_sub_field('left_text') : false; ?>
			<? if($left_text) : ?>
				<div class="col-lg-6 our-services_border">
					<div class="our-services_text"><?= $left_text; ?></div>
				</div>
			<? endif; ?>
			<? $right_text = get_sub_field('right_text') ? get_sub_field('right_text') : false; ?>
			<? if($right_text) : ?>
				<div class="col-lg-6 our-services_border">
					<div class="our-services_text"><?= $right_text; ?></div>
				</div>
			<? endif; ?>
		</div>

		<? $bottom_text = get_sub_field('bottom_text') ? get_sub_field('bottom_text') : false; ?>
		<? if($bottom_text) : ?>
			<p class="our-services_bottom-text"><?= $bottom_text; ?></p>
		<? endif; ?>

	</div>
</section>