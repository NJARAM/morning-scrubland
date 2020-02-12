<?php

namespace staffportal\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
		'css/bootstrap.css',
		'css/boardstyle.css',
		'css/tooltipster.bundle.min.css',
		'fonts/font-awesome-4.2.0/css/font-awesome.min.css',
		//'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800',
		'DataTables/datatables.min.css',

        //KEPTAP
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
         'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',        
        'css/map.css',
        'css/form.css',       
        'css/AdminLTE.min.css',

           
       
    ];
    public $js = [
		   // 'js/jquery-2.1.3.min.js',
            'js/bootstrap.min.js',
			'DataTables/datatables.min.js',
			
    ];
    public $depends = [
        //'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
}
