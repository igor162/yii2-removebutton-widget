<?php
/** @var yii\web\View $this  */

use yii\helpers\Html;
use kartik\icons\Icon;
use yii\bootstrap\Modal;

/**
 * @var string $modelNameId
 * @var string $buttonRemoveMessage
 * @var array $buttonRemoveConfig
 * @var string $buttonCancelMessage
 * @var array $buttonCancelConfig
 * @var string $headerMessage
 * @var string $bodyHTML
 */
?>

<?php \yii\bootstrap\Modal::begin(
    [
        'id' => $modelNameId,
        'footer' =>
            Html::button(
                $buttonRemoveMessage,
                $buttonRemoveConfig
/*                [
                    'class' => 'btn btn-danger',
                    'data-action' => 'confirm',
                    'data-dismiss' => 'modal',
                ]*/
            )
            . Html::button(
                $buttonCancelMessage,
                $buttonCancelConfig
/*                Yii::t('app', 'Cancel'),
                [
                    'class' => 'btn btn-default',
                    'data-dismiss' => 'modal',
                ]*/
            ),
//        'header' => Yii::t('app', 'Are you sure you want to delete a selected category?'),
        'header' => $headerMessage,
//        'footer' => Yii::t('app', 'Are you sure you want to delete a selected category?'),
    ]
);?>

<?= $bodyHTML ?>

<!--    <div id="modalContent-delete_data" class="alert alert-warning  alert-dismissable">-->
<!--        --><?//= Icon::show('exclamation-triangle', ['class' => 'fa-lg']) ?><!--При удалении категории, удалятся все подкатегории и вложенния.-->
<!--    </div>-->

<?php \yii\bootstrap\Modal::end() ?>