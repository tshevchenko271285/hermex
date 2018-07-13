<section class="list-and-button">
	<div class="container">
		<div class="row">
			<? $list = get_sub_field('list') ? get_sub_field('list') : false; ?>
			<? if($list) : ?>
				<? foreach ($list as $item) : ?>
					<div class="col-lg-6">
						<p class="list-and-button_item">
							<?= $item['text']; ?>
						</p>
					</div>
				<? endforeach; ?>
			<? endif; ?>
		</div>

		<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
		<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : '#'; ?>
		<? if( $btn_text ) : ?>
			<a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
		<? endif; ?>
	</div>
</section>