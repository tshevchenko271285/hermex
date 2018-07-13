<section class="three-icons-and-button">
	<div class="container">
		<? $icons = get_sub_field('icons') ? get_sub_field('icons') : false; ?>
		<? if( !empty( $icons ) ) : ?>
			<div class="row">
				<? foreach($icons as $icon) : ?>
					<div class="col-md-4">
						<? if( !empty( $icon['icon'] ) ) : ?>
							<div class="three-icons-and-button_icon">
								<img src="<?= $icon['icon']; ?>" alt="HermexFX" title="HermexFX">
							</div>
						<? endif; ?>
						<? if( !empty( $icon['text'] ) ) : ?>
							<p class="three-icons-and-button_title"><?= $icon['text']; ?></p>
						<? endif; ?>
					</div>
				<? endforeach; ?>
			</div>
		<? endif; ?>
		<? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
		<? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : false; ?>
		<? if( $btn_text && $btn_url ) : ?>
			<a href="<?= $btn_url; ?>" class="button-blue"><?= $btn_text; ?></a>
		<? endif; ?>
	</div>
</section>