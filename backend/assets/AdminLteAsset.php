<?php
namespace backend\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
	public $sourcePath = '@bower/AdminLTE';
    public $jsOptions=['position'=>3];
    public $css = [
        'bootstrap/css/bootstrap.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/skin-blue.min.css'
    ];
    public $js = [
    	'plugins/jQuery/jquery-2.2.3.min.js',
    	'bootstrap/js/bootstrap.min.js',
    	'dist/js/app.min.js'
    ];
}