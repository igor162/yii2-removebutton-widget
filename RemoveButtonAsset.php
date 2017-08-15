<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 12.03.17
 * Time: 22:37
 */

namespace igor162\RemoveButton;

use Yii;
use yii\web\AssetBundle;

/**
 * Class RemoveButtonAsset
 * @package igor162\grid
 *
 * @property string $sourcePath
 * @property array $js
 * @property array $css
 */
class RemoveButtonAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/js/';

        $this->js = [
            'RemoveModal.js'
        ];
        parent::init();
    }
}
