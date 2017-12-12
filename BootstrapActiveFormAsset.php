<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 12.12.17
 * Time: 16:57
 */

namespace yii\bootstrap;


use yii\web\AssetBundle;

class BootstrapActiveFormAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yiisoft/yii2-bootstrap/assets';
    public $js = [
        'yii.bootstrapActiveForm.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\PopperAsset',
    ];
}