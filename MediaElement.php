<?php
/**
* @copyright Copyright &copy; Saranga Abeykoon, nterms.com, 2014
* @package yii2-mediaelement-widget
* @version 1.0.0
*/

namespace nterms\mediaelement;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\base\InvalidConfigException;
use yii\base\Widget;

class MediaElement extends Widget
{
	/**
	 * @var array the HTML attributes (name-value pairs) for the container tag.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $options = [];
	
	/**
	 * @var string the media type video or audio
	 */
	public $media = 'video';
	
	/**
	 * @var array the HTML attributes (name-value pairs) for the media (`<video>` or `<audio>`) tag.
	 */
	public $mediaOptions = [];
	
	/**
	 * @var array the list of sources to be played with the media element
	 */
	public $sources = [];
	
	/**
	 * @var array the list of tracks for the media element
	 * Read [this](http://www.w3schools.com/tags/tag_track.asp) for more info on `<track>` tag
	 */
	public $tracks = [];
	
	/**
	 * @var string the placeholder image of the video
	 */
	public $poster;
	
	/**
	 * @var integer the height of the player in pixels
	 */
	public $height = 240;
	
	/**
	 * @var integer the width of the player in pixels
	 */
	public $width = 320;
	
	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		//parent::init();
		
		if(!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
		
		if(!isset($this->mediaOptions['height'])) {
			$this->mediaOptions['height'] = $this->height;
		}
		
		if(!isset($this->mediaOptions['width'])) {
			$this->mediaOptions['width'] = $this->width;
		}
		
		if(!isset($this->mediaOptions['poster'])) {
			$this->mediaOptions['poster'] = $this->poster;
		}
	}
	
	/**
	 * Runs the widget.
	 */
	public function run()
	{
		$view = $this->getView();
		
		MediaElementAsset::register($view);
		
		$js = '$("video,audio").mediaelementplayer();';
		
		//$view->registerJs($js, $view::POS_READY);
		
		$sources = [];
		if(!empty($this->sources)) {
			foreach($this->sources as $source) {
				$sources[] = Html::tag('source', null, $source);
			}
		}
		
		$tracks = [];
		if(!empty($this->tracks)) {
			foreach($this->tracks as $track) {
				$tracks[] = Html::tag('track', null, $track);
			}
		}
		
		$content = Html::tag($this->media, implode("\n", $sources) . "\n" . implode("\n", $tracks), $this->mediaOptions);
		
		echo Html::tag('div', $content, $this->options);
	}
}