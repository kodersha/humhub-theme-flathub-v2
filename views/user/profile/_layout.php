<?php

use humhub\modules\user\widgets\ProfileHeader;
use humhub\modules\user\widgets\ProfileMenu;
use humhub\widgets\FooterMenu;


$user = $this->context->contentContainer;

?>
<div class="container profile-layout-container">
    <div class="row">
        <div class="col-xs-12">
            <?= ProfileHeader::widget(['user' => $user]); ?>
        </div>
    </div>
    <div class="row profile-content">
        <div class="col-xs-12 col-md-4">
            <div class="layout-nav-container">
                <?= ProfileMenu::widget(['user' => $user]); ?>
            </div>
            <?php if ($this->hasSidebar()): ?>
                <div class="layout-sidebar-container">
                    <?= $this->getSidebar() ?>
                    <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_SIDEBAR]); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-md-8 layout-content-container">
            <?= $content; ?>
            <?php if (!$this->hasSidebar()): ?>
                <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_FULL_PAGE]); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
