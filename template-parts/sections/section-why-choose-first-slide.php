<section class="why-choose-first-slide">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h1><?= $title; ?></h1>
		<? endif; ?>

		<? $left_panel = get_sub_field('left_panel') ? get_sub_field('left_panel') : false; ?>
		<? $right_panel = get_sub_field('right_panel') ? get_sub_field('right_panel') : false; ?>
		<div class="why-choose-first-slide_mobile-images">
			<? if( !empty($left_panel['image']) ) : ?>
				<div class="why-choose-first-slide_mobile-image">
					<img src="<?= $left_panel['image']; ?>" alt="HermexFX" title="HermexFX">
				</div>
			<? endif; ?>
			<? if( !empty($right_panel['image']) ) : ?>
				<div class="why-choose-first-slide_mobile-image">
					<img src="<?= $right_panel['image']; ?>" alt="HermexFX" title="HermexFX">
				</div>
			<? endif; ?>
		</div>
		<div class="row">
			<div class="col-md-6 why-choose-first-slide_panel">
				<? if($left_panel) : ?>
					<div class="why-choose-first-slide_panel-content">
						<? if( !empty($left_panel['text']) ) : ?>
							<div class="why-choose-first-slide_panel-text">

								<?= $left_panel['text']; ?>

								<? if( !empty($left_panel['button_text']) ) : ?>
									<? $button_url = $left_panel['button_url'] ? $left_panel['button_url'] : '#'; ?>
									<a href="<?= $button_url; ?>" class="why-choose-first-slide_panel-btn"><?= $left_panel['button_text']; ?></a>
								<? endif; ?>

							</div>
							<? if( !empty($left_panel['image']) ) : ?>
								<div class="why-choose-first-slide_panel-image">
									<img src="<?= $left_panel['image']; ?>" alt="HermexFX" title="HermexFX">
								</div>
							<? endif; ?>
						<? endif; ?>
					</div>
				<? endif; ?>
			</div>
			<div class="col-md-6 why-choose-first-slide_panel">
				<? if($right_panel) : ?>
					<div class="why-choose-first-slide_panel-content">
						<? if( !empty($right_panel['text']) ) : ?>
							<div class="why-choose-first-slide_panel-text">

								<?= $right_panel['text']; ?>

								<? if( !empty($right_panel['button_text']) ) : ?>
									<? $button_url = $right_panel['button_url'] ? $right_panel['button_url'] : '#'; ?>
									<a href="<?= $button_url; ?>" class="why-choose-first-slide_panel-btn"><?= $right_panel['button_text']; ?></a>
								<? endif; ?>

							</div>
							<? if( !empty($right_panel['image']) ) : ?>
								<div class="why-choose-first-slide_panel-image">
									<img src="<?= $right_panel['image']; ?>" alt="HermexFX" title="HermexFX">
								</div>
							<? endif; ?>
						<? endif; ?>
					</div>
				<? endif; ?>
			</div>
		</div>
	</div>
</section>