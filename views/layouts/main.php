<?php
/* @var $this \yii\web\View */
/* @var $content string */

\humhub\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= strip_tags($this->pageTitle); ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php $this->head() ?>
        <?= $this->render('head'); ?>

        <!--JS-->
        <?php $this->registerJsFile($this->theme->getBaseUrl() . '/js/cookie.js'); ?>
        <?php $this->registerJsFile($this->theme->getBaseUrl() . '/js/styleswitch.js'); ?>
    </head>
    <body class="easycontrast">
        <?php $this->beginBody() ?>

        <!-- start: first top navigation bar -->
        <div id="topbar-first" class="topbar">
            <div class="space-auto-h-xs container row row-between-xs">
                <div class="space-in-left-zero-md space-auto-right-xs col-xs-shrink topbar-brand hidden-xs">
                    <?= \humhub\widgets\SiteLogo::widget(); ?>
                </div>

                <div class="col-md notifications">
                    <div class="notifications-frame">
                        <!-- load space chooser widget -->
                        <?= \humhub\modules\space\widgets\Chooser::widget(); ?>
                        <!-- bell -->
                        <?= \humhub\widgets\NotificationArea::widget(); ?>
                        <!-- load navigation from widget -->
                        <?= \humhub\widgets\TopMenu::widget(); ?>
                        <!-- search -->
                        <?= \humhub\widgets\TopMenuRightStack::widget(); ?>

                        <div class="topbar-bth styleswitch">
                            <a href="" id="switch"><i class="turnoff fa fa-moon-o"></i><i class="turnon fa fa-sun-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="space-auto-left-xs space-in-right-zero-xs col-xs-shrink topbar-actions">
                    <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                </div>

            </div>
        </div>
        <!-- end: first top navigation bar -->

        <?= $content; ?>

        <!--JS-->
        <?php $this->registerJsFile($this->theme->getBaseUrl() . '/js/theme.js'); ?>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
