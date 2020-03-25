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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin/plugins/fontawesome-free/css/all.min.css',
        'admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css',
        'admin/dist/css/adminlte.css',
        'admin/plugins/summernote/summernote-bs4.css',
    ];
    public $js = [
        'admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'admin/plugins/datatables/jquery.dataTables.js',
        'admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js',
        'admin/js/datatables.js',
        'admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js',
        'admin/dist/js/adminlte.js',
        'admin/dist/js/demo.js',
        'admin/plugins/summernote/summernote-bs4.min.js',
        'admin/plugins/jquery-mousewheel/jquery.mousewheel.js',
        'admin/plugins/raphael/raphael.min.js',
        'admin/plugins/jquery-mapael/jquery.mapael.min.js',
        'admin/plugins/jquery-mapael/maps/usa_states.min.js',
        'admin/plugins/chart.js/Chart.min.js',
        'admin/dist/js/pages/dashboard2.js',
        'admin/plugins/flot/jquery.flot.js',
        'admin/plugins/flot-old/jquery.flot.resize.min.js',
        'admin/plugins/flot-old/jquery.flot.pie.min.js',
        'admin/js/scripts.js',
    ];
    public $depends = [
        'app\assets\JqueryAsset',
    ];
}
