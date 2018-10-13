<?php
use humhub\modules\content\widgets\richtext\RichText;

/* @var $post \humhub\modules\post\models\Post */

?>
<div data-ui-widget="post.Post" data-ui-init id="post-content-<?= $post->id; ?>" style="overflow: hidden; margin-bottom: 5px;">
    <div data-ui-markdown>
        <?= RichText::output($post->message, ['record' => $post]) ?>
    </div>
</div>
