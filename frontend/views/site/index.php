<?php
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => ['label' => 'click me'],
]);

echo 'Say hello...';

Modal::end();
?>
