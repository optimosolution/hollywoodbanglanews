<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    $model->title,
);

?>
<h2><?php echo $model->title; ?></h2>
<p class="news_date"><?php echo date("F j, Y, g:i A", strtotime($model->created)); ?></p>
<p><?php echo $model->introtext; ?></p>
<p><?php echo $model->fulltext; ?></p>
