<section id="security" class="security">
	<div class="container">

		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $items = get_sub_field('items') ? get_sub_field('items') : false; ?>
		<? if ($items) : ?>
			<div class="security_items">
				<div class="row">
					<? foreach($items as $item) : ?>
						<div class="col-md-6">

							<? if ($item['image']) : ?>
								<div class="security_items-image">
									<img src="<?= $item['image']; ?>" alt="Hermex Security" title="Hermex Security">
								</div>
							<? endif; ?>

							<? if ($item['title']) : ?>
								<h3><?= $item['title']; ?></h3>
							<? endif; ?>

							<? if ($item['text']) : ?>
								<div class="security_items-text">
									<?= $item['text']; ?>
								</div>
							<? endif; ?>

						</div>
					<? endforeach; ?>
				</div>
			</div>
		<? endif; ?>
		<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
		<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : '#'; ?>
		<? if( $btn_text ) : ?>
            <a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
		<? endif; ?>
	</div>
</section>