<? $indent = get_sub_field('indent') ? ' style="height: ' . get_sub_field('indent') . 'px;" ' : 0; ?>
<? $negative_indent = get_sub_field('negative_indent') ? ' style="margin-top: ' . get_sub_field('negative_indent') . 'px;" ' : ''; ?>
<div class="indent" <?= $indent; ?> <?= $negative_indent; ?> ></div>