<section id="poweredByFxPro" class="powered-by">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $top_text = get_sub_field('top_text') ? get_sub_field('top_text') : false; ?>
		<? if($top_text) : ?>
            <p class="powered-by_top-text"><?= $top_text; ?></p>
		<? endif; ?>

		<? $image = get_sub_field('image') ? get_sub_field('image') : false; ?>
		<? if($image) : ?>
            <div class="powered-by_image">
                <img src="<?= $image; ?>" alt="Hermex Time Line" title="Hermex Time Line">
            </div>
		<? endif; ?>

        <div class="row">
            <div class="col-md-6">
	            <? $bottom_left_text = get_sub_field('bottom_left_text') ? get_sub_field('bottom_left_text') : false; ?>
	            <? if($bottom_left_text) : ?>
                    <p class="powered-by_column-text"><?= $bottom_left_text; ?></p>
	            <? endif; ?>
            </div>
            <div class="col-md-6">
	            <? $bottom_right_text = get_sub_field('bottom_right_text') ? get_sub_field('bottom_right_text') : false; ?>
	            <? if($bottom_right_text) : ?>
                    <p class="powered-by_column-text"><?= $bottom_right_text; ?></p>
	            <? endif; ?>
            </div>
        </div>
	</div>
</section>