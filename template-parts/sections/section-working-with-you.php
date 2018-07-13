<? $section_id = get_sub_field('section_id') ? ' id="' . get_sub_field('section_id') . '" ' : ''; ?>
<section class="working-with-you" <?= $section_id; ?> >
	<div class="container">
		<? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
		<? if($title) : ?>
			<h2><?= $title; ?></h2>
		<? endif; ?>
		<? $text = get_sub_field('text') ? get_sub_field('text') : false; ?>
		<? if($text) : ?>
			<p class="working-with-you_text"><?= $text; ?></p>
		<? endif; ?>
		<? $icons = get_sub_field('icons') ? get_sub_field('icons') : false; ?>
		<? if($icons) : ?>
			<div class="row">
                <? foreach($icons as $key=>$item) : ?>
                    <? if( $key >= 3 ) break; ?>
                    <div class="col-md-4 working-with-you_icon">
                        <? if($item['icon']) : ?>
                            <div class="working-with-you_icon-image">
                                <img src="<?= $item['icon']; ?>" alt="working with you" title="working with you">
                            </div>
                        <? endif; ?>
                        <? if($item['text']) : ?>
                            <p class="working-with-you_icon-text"><?= $item['text']; ?></p>
                        <? endif; ?>
                    </div>
                <? endforeach; ?>
			</div>
		<? endif; ?>
	</div>
</section>