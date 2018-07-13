<section class="open-account">
	<div class="container">
		<? $icon = get_sub_field('icon') ? get_sub_field('icon') : false; ?>
		<? if($icon) : ?>
			<div class="open-account_icon">
				<img src="<?= $icon; ?>" alt="Hermex Open Account" title="Hermex Open Account">
			</div>
		<? endif; ?>

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
			<p class="open-account_description"><?= $description; ?></p>
		<? endif; ?>

		<div class="row">
			<div class="col-md-6">
				<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
				<? if($text) : ?>
					<div class="open-account_text"><?= $text; ?></div>
				<? endif; ?>
			</div>
			<div class="col-md-6">
				<div class="open-account_panel">
					<? $right_desc = get_sub_field('right_desc') ? get_sub_field('right_desc') : false; ?>
					<? if($right_desc) : ?>
						<p class="open-account_panel-desc"><?= $right_desc; ?></p>
					<? endif; ?>

					<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
					<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : '#'; ?>
					<? if( $btn_text ) : ?>
                        <a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
					<? endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>