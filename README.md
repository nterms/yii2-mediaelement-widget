yii2-mediaelement-widget
========================

MediaElement.js widget for Yii2

## Usage

~~~php

<?= \nterms\mediaelement\MediaElement::widget([
  'id' => 'video-id',
  'sources' => [
    ['src' => 'rtmp://stream.server.domain:1935/stream-name/mp4:video-file.mp4', 'type' => 'video/rtmp'],
    ['src' => 'http://stream.server.domain:1935/stream-name/mp4:video-file.mp4/playlist.m3u8', 'type' => 'application/x-mpegURL'],
    // Other source files goes here
    // ['type'=>"video/ogg", 'src'=>"myvideo.ogv"],
    // ['type'=>"video/webm", 'src'=>"myvideo.webm"],
    // ['type'=>"video/mp4", 'src'=>"myvideo.mp4"],
  ],
  'tracks' => [
    ['kind'=>"chapters", 'src'=>"chapters.srt", 'srclang'=>"en"],
    ['kind'=>"subtitles", 'src'=>"subtitles.srt", 'srclang'=>"en"]
  ],
  'width' => 320,
  'height' => 180,
  'poster' => 'http://image.url/sample.png',
]); ?>

~~~
