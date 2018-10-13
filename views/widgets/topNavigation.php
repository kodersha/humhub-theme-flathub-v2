<?php

use yii\helpers\Html;

?>
<?php foreach ($this->context->getItems() as $item) : ?>
    <div class="topbar-bth visible-md visible-lg <?php if ($item['isActive']): ?>active<?php endif; ?> <?php
    if (isset($item['id'])) {
        echo $item['id'];
    }
    ?>">
        <?php echo Html::a($item['icon'], $item['url'], $item['htmlOptions']); ?>
</div>
<?php endforeach; ?>

<div class="topbar-bth dropdown visible-xs visible-sm">
    <a href="#" id="top-dropdown-menu" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-align-justify"></i>
        <b class="caret"></b></a>
    <ul class="dropdown-menu">

        <?php foreach ($this->context->getItems() as $item) : ?>
            <li class="<?php if ($item['isActive']): ?>active<?php endif; ?>">
                <?php echo Html::a($item['label'], $item['url'], $item['htmlOptions']); ?>
            </li>
        <?php endforeach; ?>

    </ul>
</div>