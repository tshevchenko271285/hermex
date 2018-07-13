<section class="faq">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h1><?= $title; ?></h1>
		<? endif; ?>

		<? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
		<? if($description) : ?>
			<p class="faq_description"><?= $description; ?></p>
		<? endif; ?>

		<? $list = get_sub_field('list') ? get_sub_field('list') : false; ?>
		<? wp_localize_script( 'hermex-custom-script', 'faqs', $list );?>
		<div class="row">
			<div class="col-lg-6">
				<? if( !empty( $list ) ) : ?>
					<ul class="faq_menu">
						<? foreach( $list as $key=>$item ) : ?>
							<li class="faq_menu-item" data-id="<?= $key; ?>">
                                <?= $item['title']; ?>
                                <div class="faq_menu-item-content">
	                                <?= $item['text']; ?>
                                </div>
                            </li>

						<? endforeach; ?>
					</ul>
				<? endif; ?>
			</div>
			<div class="col-lg-6">
				<div class="faq_content">
                    <p class="faq_content-title" id="faqTitle"></p>
                    <div class="faq_text" id="faqText"></div>
				</div>
			</div>
		</div>
	</div>
</section>