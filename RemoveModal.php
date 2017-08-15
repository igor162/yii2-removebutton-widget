<?php

namespace igor162\JsTreeWidget\widgets;

use Yii;
use yii\base\Widget;
use igor162\RemoveButton\RemoveButtonAsset;

/**
 * Created by PhpStorm.
 * User: igor
 * Date: 15.08.17
 * Time: 9:31
 *
 * @property string $menuLabelsTranslationCategory
 * @property string $defaultTranslationCategory
 * @property string $headerMessage
 * @property string $buttonRemoveConfig
 * @property string $buttonCancelConfig
 * @property string $bodyTemplate

 */
class RemoveModal extends Widget
{
    /**
     * Translation category for Yii::t() which will be applied to labels.
     * If translation is not needed - use false.
     */
    public $menuLabelsTranslationCategory = false;

    /** @var string Default labels translation category */
    private $defaultTranslationCategory = 'app.remove';

    /** @var string Default message for the header*/
    private $headerMessage;

    /** @var array Default config for the remove button*/
    public $buttonRemoveConfig = [
        'class' => 'btn btn-danger',
        'data-action' => 'confirm',
        'data-dismiss' => 'modal',
    ];

    /** @var array Default config for the cancel button*/
    public $buttonCancelConfig = [
        'class' => 'btn btn-default',
        'data-dismiss' => 'modal',
    ];

    public $bodyTemplate = <<< HTML
        <div id="{bodyName}" class="{bodyClass}">
            {body}
        </div>
HTML;

    /**
     * @inheritdoc
     */
    public function init()
    {
//        if (false === $this->menuLabelsTranslationCategory) {
//            $this->menuLabelsTranslationCategory = $this->defaultTranslationCategory;
//        }
//        self::registerTranslations();
        parent::init();
    }

    public static function registerTranslations()
    {
        Yii::$app->i18n->translations['jstw*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'messages',
        ];
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        RemoveButtonAsset::register($this->getView());
        parent::run();


        return $this->render(
            '_form_remove',
            [
                'modelNameId' => $this->treeConfig,
                'buttonRemoveMessage' => $this->treeConfig,
                'buttonRemoveConfig' => $this->multiple,
                'buttonCancelMessage' => $this->selectIcon,
                'buttonCancelConfig' => $this->selectText,
                'headerMessage' => $this->treeConfig,
                'bodyHTML' => $this->clickToOpen,
            ]
        );

    }
}