<section class="advantages">
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>
		<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
		<? if($text) : ?>
			<p class="advantages_text"><?= $text; ?></p>
		<? endif; ?>

		<?php
            $button_to_archive = get_sub_field('button_to_archive') ? get_sub_field('button_to_archive') : false;

            if( $button_to_archive ) {
			    $post_per_page = 3;
            } else {
				$post_per_page = 4;
            }

		    $icons = get_sub_field('icons') ? get_sub_field('icons') : false;
			if ( $icons ) : ?>
			<div class="row">
				<?php foreach($icons as $key=>$icon) { $key++; ?>
					<div class="col-md-3 advantages_item">
						<? if( $icon['image'] ) : ?>
							<div class="advantages_item-icon">
                                <img src="<?= $icon['image'] ?>" alt="Hermex Advanteges" title="Hermex Advanteges">
							</div>
						<? endif; ?>
						<div class="advantages_item-text">
							<?= $icon['text'] ?>
						</div>
					</div>
                    <? if( $key == $post_per_page ) break; ?>
				<?php } ?>
                <? if($button_to_archive) : ?>
	                <? $archive_url = get_sub_field('archive_url')['url'] ? get_sub_field('archive_url')['url'] : '#'; ?>
                    <a href="<?= $archive_url; ?>" class="col-md-3 advantages_item advantages_archive">
                        <? $archive_icon = get_sub_field('archive_icon') ? get_sub_field('archive_icon') : false; ?>
                        <?php if($archive_icon) : ?>
                            <div class="advantages_item-icon">
                                <img src="<?= $archive_icon; ?>" alt="Archive Advantages" title="Archive Advantages">
                            </div>
                        <? endif; ?>

                        <? $archive_text = get_sub_field('archive_text') ? get_sub_field('archive_text') : false; ?>
                        <?php if($archive_text) :?>
                            <div class="advantages_item-text"><?= $archive_text; ?></div>
                        <? endif; ?>
                    </a>
                <? endif; ?>
			</div>
		<?php endif;
		?>
	</div>
</section>