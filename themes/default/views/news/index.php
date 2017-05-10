<?php
$this->pageTitle = $this->get_category_name($_GET['id']) . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(   
    $this->get_category_name($_GET['id']),    
);
?>
<p class="news_heading"><?php echo $this->get_category_name($_GET['id']); ?></p>
<?php
$this->widget('bootstrap.widgets.TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
