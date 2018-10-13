<?php

use humhub\modules\space\widgets\Header;
use humhub\modules\space\widgets\Menu;
use humhub\modules\space\widgets\SpaceContent;
use humhub\widgets\FooterMenu;

/**
 * @var \humhub\modules\ui\view\components\View $this
 * @var \humhub\modules\space\models\Space $space
 * @var string $content
 */

/** @var \humhub\modules\content\components\ContentContainerController $context */
$context = $this->context;
$space = $context->contentContainer;

?>
<div class="container space-layout-container">
    <div class="row">
        <div class="col-xs-12">
            <?= Header::widget(['space' => $space]); ?>
        </div>
    </div>
    <div class="row space-content">
        <div class="col-xs-12 col-md-4">
            <div class="layout-nav-container">
                <?= Menu::widget(['space' => $space]); ?>
                <br>
            </div>
            <?php if ($this->hasSidebar()): ?>
                <div class="layout-sidebar-container">
                    <?= $this->getSidebar() ?>
                    <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_SIDEBAR]); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-md-8 layout-content-container">
            <?= SpaceContent::widget(['contentContainer' => $space, 'content' => $content]) ?>
        </div>
    </div>

    <?php if (!$this->hasSidebar()): ?>
        <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_FULL_PAGE]); ?>
    <?php endif; ?>
</div>
