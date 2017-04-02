<?php

namespace dench\sortable\assets;

use yii\web\AssetBundle;

class SortableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/dench/yii2-sortable/assets';

    public $js = [
        'js/sortable.js',
    ];

    public $css = [
        'css/sortable.css',
    ];

    public $depends = [
        'dench\sortable\assets\RubaxaAsset',
    ];
}
