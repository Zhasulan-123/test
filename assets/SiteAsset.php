<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin/plugins/fontawesome-free/css/all.min.css',
        'admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css',
        'admin/dist/css/adminlte.min.css',
    ];
    public $js = [
        'admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'admin/plugins/datatables/jquery.dataTables.js',
        'admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js',
        'admin/js/datatable.js',
        'admin/dist/js/adminlte.min.js',
    ];
    public $depends = [
        'app\assets\JqueryAsset',
    ];
}
