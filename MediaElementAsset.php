<?php
/**
* @copyright Copyright &copy; Saranga Abeykoon, nterms.com, 2014
*
* @version 1.0.0
*/
namespace nterms\mediaelement;

use yii\web\AssetBundle;

/**
 * @author Saranga Abeykoon <amisaranga@gmail.com>
 */
class MediaElementAsset extends AssetBundle
{
    public $sourcePath = '@bower/mediaelement/build';
    public $js = [
        'mediaelement-and-player.min.js',
    ];
    public $css = [
        'mediaelementplayer.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];
}
