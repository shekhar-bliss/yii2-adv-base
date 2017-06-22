<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * AdminLTE Custom frontend application asset bundle.
 */
class AdminLteCustomAsset extends AssetBundle
{
	public $sourcePath = '@app/themes/AdminLteCustom';
    public $css = [
        'css/custom-style.css',
    ];
}
