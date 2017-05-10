<?php
$this->breadcrumbs = array(
    'Documents' => array('admin'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('document-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<p class="news_heading">Download</p>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'document-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'catid',
        'title',
        'doc_file',
        'doc_type',
        'doc_size',
    ),
));
?>
