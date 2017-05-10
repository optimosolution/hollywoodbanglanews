<?php
$this->pageTitle = 'Hollywood Bangla Tube - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Hollywood Bangla Tube',
);
?>

<p class="news_heading">Hollywood Bangla Tube</p>

<?php

$this->widget('bootstrap.widgets.TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
