<? $section_id = get_sub_field('section_id') ? ' id="' . get_sub_field('section_id') . '" ' : ''; ?>
<section class="three-column-for-business" <?= $section_id; ?> >
	<div class="container">
		<div class="row">
			<? $colums = get_sub_field('colums') ? get_sub_field('colums') : false; ?>
			<? if($colums) : ?>
				<? foreach( $colums as $column ) : ?>
					<div class="col-lg-4">
						<div class="three-column-for-business_column">
							<? if( !empty( $column['icon'] ) ) : ?>
								<div class="three-column-for-business_icon">
									<img src="<?= $column['icon']; ?>" alt="HermexFX" title="HermexFX">
								</div>
							<? endif; ?>

							<? if( !empty( $column['title'] ) ) : ?>
								<p class="three-column-for-business_title"><?= $column['title']; ?></p>
							<? endif; ?>

							<? if( !empty( $column['text'] ) ) : ?>
								<p class="three-column-for-business_text">
									<?= $column['text']; ?>
								</p>
							<? endif; ?>
						</div>
					</div>
				<? endforeach; ?>
			<? endif; ?>
		</div>
	</div>
</section>