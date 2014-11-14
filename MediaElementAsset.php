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
        'mediaelement/mediaelement-and-player.min.js',
    ];
	public $css = [
		'mediaelement/mediaelementplayer.css',
	];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];
}
