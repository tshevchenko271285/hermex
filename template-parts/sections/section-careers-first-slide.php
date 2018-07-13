<? $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : ''; ?>
<section class="careers-first-slide" <?= $image; ?> >
    <div class="container">

        <? $title = get_sub_field('title') ? get_sub_field('title') : false; ?>
        <? if($title) : ?>
            <h1><?= $title; ?></h1>
        <? endif; ?>

        <? $description = get_sub_field('description') ? get_sub_field('description') : false; ?>
        <? if( $description ) : ?>
            <p class="careers-first-slide_description"><?= $description; ?></p>
        <? endif; ?>

	    <? $btn_text = get_sub_field('button_text') ? get_sub_field('button_text') : false; ?>
	    <? $btn_url = get_sub_field('button_url') ? get_sub_field('button_url') : '#'; ?>
	    <? if( $btn_text ) : ?>
            <a href="<?= $btn_url; ?>" class="botton-border-blue"><?= $btn_text; ?></a>
	    <? endif; ?>

    </div>
</section>