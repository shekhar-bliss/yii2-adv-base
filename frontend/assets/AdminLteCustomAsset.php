<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * AdminLTE Custom frontend application asset bundle.
 */
class AdminLteCustomAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/custom-style.css',
    ];
}
