<?php
/**
* @copyright Copyright &copy; Saranga Abeykoon, nterms.com, 2014
* @package yii2-mediaelement-widget
* @version 1.0.0
*/
namespace nterms\mediaelement;


use yii\web\AssetBundle;

/**
 * @author Saranga Abeykoon <amisaranga@gmail.com>
 */
class MediaElementAsset extends AssetBundle
{
    public $sourcePath = '@vendor/nterms/yii2-mediaelement-widget/assets/';
    public $js = [
        'http://mediaelementjs.com/js/mejs-2.9.2/mediaelement-and-player.min.js',
    ];
	public $css = [
		'http://mediaelementjs.com/js/mejs-2.9.2/mediaelementplayer.css',
	];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];
}
