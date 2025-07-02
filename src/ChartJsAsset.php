<?php

/*
 * This file is part of the 2amigos/yii2-chartjs-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace neoacevedo\chartjs;

use yii\web\AssetBundle;

/**
 * ChartJsAsset is the asset bundle for the ChartJs library.
 * It includes the ChartJs JavaScript file and its dependencies.
 */
class ChartJsAsset extends AssetBundle
{
    public $sourcePath = '@npm/chart.js/dist';

    public $js = [
        'chart.umd.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
