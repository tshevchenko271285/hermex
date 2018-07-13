<section class="market-watch-first-slide">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h1><?= $title; ?></h1>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
			<p class="market-watch-first-slide_description"><?= $description; ?></p>
		<? endif; ?>

		<div class="row">
			<? $left_text = get_sub_field('left_text') ? get_sub_field('left_text') : false; ?>
			<? if($left_text) : ?>
				<div class="col-lg-6 market-watch-first-slide_border">
					<p class="market-watch-first-slide_text"><?= $left_text; ?></p>
				</div>
			<? endif; ?>
			<? $right_text = get_sub_field('right_text') ? get_sub_field('right_text') : false; ?>
			<? if($right_text) : ?>
				<div class="col-lg-6 market-watch-first-slide_border">
					<p class="market-watch-first-slide_text"><?= $right_text; ?></p>
				</div>
			<? endif; ?>
		</div>

		<? $bottom_text = get_sub_field('bottom_text') ? get_sub_field('bottom_text') : false; ?>
		<? if($bottom_text) : ?>
			<p class="market-watch-first-slide_bottom-text"><?= $bottom_text; ?></p>
		<? endif; ?>
	</div>
</section>