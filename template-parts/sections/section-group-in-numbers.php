<section id="groupInNumbers" class="group-in-numbers">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>

		<? $numbers = get_sub_field('numbers') ? get_sub_field('numbers') : false; ?>
		<? if( $numbers ) : ?>
			<div class="row">
				<? foreach ($numbers as $key=>$number) : ?>
					<? if( $key == 4 ): ?>
						</div>
							<div class="group-in-numbers_separator">
								<span class="group-in-numbers_separator-item"></span>
								<span class="group-in-numbers_separator-item"></span>
								<span class="group-in-numbers_separator-item"></span>
							</div>
						<div class="row">
					<? endif; ?>
					<div class="col-6 col-lg-3">
						<div class="group-in-numbers_item">
							<? $num = $number['number'] ? $number['number'] : false; ?>
							<? if( !empty( $num ) ): ?>
								<p class="group-in-numbers_item-number"><?= $num; ?></p>
							<? endif; ?>

							<? $text = $number['text'] ? $number['text'] : false; ?>
							<? if( !empty( $text ) ): ?>
								<p class="group-in-numbers_item-text"><?= $text; ?></p>
							<? endif; ?>
						</div>
					</div>
				<? endforeach; ?>
			</div>
		<? endif; ?>
	</div>
</section>