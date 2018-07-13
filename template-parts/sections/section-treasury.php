<? $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : ''; ?>
<? $section_id = get_sub_field('section_id') ? ' id="' . get_sub_field('section_id') . '" ' : ''; ?>
<section class="treasury" <?= $image; ?> <?= $section_id; ?> >
	<div class="container">

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
			<p class="treasury_description"><?= $description; ?></p>
		<? endif; ?>

		<div class="row">
			<? $left_text = get_sub_field('text_left') ? get_sub_field('text_left') : false; ?>
			<? if($left_text) : ?>
				<div class="col-lg-6">
					<div class="treasury_text"><?= $left_text; ?></div>
				</div>
			<? endif; ?>
			<? $right_text = get_sub_field('text_right') ? get_sub_field('text_right') : false; ?>
			<? if($right_text) : ?>
				<div class="col-lg-6">
					<div class="treasury_text"><?= $right_text; ?></div>
				</div>
			<? endif; ?>
		</div>

	</div>
</section>