<?php

use yii\helpers\Html;
use yii\helpers\Url;

print Html::a('<i class="fa fa-cog" aria-hidden="true"></i>' . Yii::t('UserModule.widgets_views_profileEditButton', ''), Url::toRoute('/user/account/edit'), ['class' => 'btn btn-default edit-account']);