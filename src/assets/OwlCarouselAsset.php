<?php
namespace onix\assets;

use yii\web\AssetBundle as YiiAssetBundle;

class OwlCarouselAsset extends YiiAssetBundle
{
    public $sourcePath = '@bower/owl.carousel/dist';

    public $css = [
        'assets/owl.carousel.css',
        'assets/owl.theme.default.css',
    ];

    public $js = [
        'owl.carousel.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
