<? $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : ''; ?>
<section class="partner-support" <?= $image; ?> >
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>
		<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
		<? if($text) : ?>
			<p class="partner-support_text"><?= $text; ?></p>
		<? endif; ?>
		<? $icons = get_sub_field('items') ? get_sub_field('items') : false; ?>
		<? if($icons) : ?>
			<div class="row">
				<? foreach($icons as $key=>$item) : ?>
					<? if( $key >= 6 ) break; ?>
					<div class="col-6 col-md-4 partner-support_icon">
						<? if($item['icon']) : ?>
							<div class="partner-support_icon-image">
								<img src="<?= $item['icon']; ?>" alt="HermexFX Partner Support" title="HermexFX Partner Support">
							</div>
						<? endif; ?>
						<? if($item['text']) : ?>
							<p class="partner-support_icon-text"><?= $item['text']; ?></p>
						<? endif; ?>
					</div>
				<? endforeach; ?>
			</div>
		<? endif; ?>
	</div>
</section>