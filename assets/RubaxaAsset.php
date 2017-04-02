<?php

namespace dench\sortable\assets;

use yii\web\AssetBundle;

class RubaxaAsset extends AssetBundle
{
    public $sourcePath = '@bower/rubaxa/sortablejs';

    public $js = [
        'Sortable.min.js',
        'jquery.binding.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
