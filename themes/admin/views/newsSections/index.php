<?php
$this->breadcrumbs=array(
	'News Sections',
);

$this->menu=array(
	array('label'=>'Create NewsSections','url'=>array('create')),
	array('label'=>'Manage NewsSections','url'=>array('admin')),
);
?>

<h1>News Sections</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
