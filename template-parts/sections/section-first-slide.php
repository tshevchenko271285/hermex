<? $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : ''; ?>
<section class="first-slide" <?= $image; ?> >
	<div class="container">
		<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
		<? if($text) : ?>
		<div class="first-slide_title">
			<?= $text; ?>
		</div>
		<? endif; ?>
		<? $icons = get_sub_field('icons') ? get_sub_field('icons') : false; ?>
		<? if($icons) : ?>
			<div class="row first-slide_icons">
				<? foreach($icons as $item) : ?>
					<div class="col-6 col-lg-3 first-slide_icon">
						<? if( $item['icon'] ) : ?>
						<div class="first-slide_icon-image">
							<img src="<?= $item['icon']; ?>" alt="HermexFx" title="HermexFx">
						</div>
						<? endif; ?>
						<? if( $item['title'] ) : ?>
							<p class="first-slide_icon-title"><?= $item['title'];?></p>
						<? endif; ?>
						<? if( $item['description'] ) : ?>
							<p><?= $item['description'];?></p>
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
