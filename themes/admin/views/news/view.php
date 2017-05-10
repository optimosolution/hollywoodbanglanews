<?php
$this->breadcrumbs = array(
    'News' => array('admin'),
    $model->title,
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'active' => true, 'icon' => 'icon-home'),
    array('label' => 'New', 'url' => array('create'), 'active' => true, 'icon' => 'icon-file'),
    array('label' => 'Edit', 'url' => array('update', 'id' => $model->id), 'active' => true, 'icon' => 'icon-pencil'),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?'), 'active' => true, 'icon' => 'icon-remove'),
);
?>
<div class="form-actions">
    <h2><?php echo $model->title; ?></h2>
</div>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'title',
        'alias',
        'title_alias',
        array(
            'name' => 'images',
            'type' => 'raw',
            'value' => CHtml::image('uploads/news/' . $model->images),
        ),
        array(
            'name' => 'introtext',
            'type' => 'raw',
            'value' => $model->introtext,
            'htmlOptions' => array('style' => "text-align:left;"),
        ),
        array(
            'name' => 'fulltext',
            'type' => 'raw',
            'value' => $model->fulltext,
            'htmlOptions' => array('style' => "text-align:left;"),
        ),
        array(
            'name' => 'state',
            'value' => $model->state ? "Yes" : "No",
        ),
        array(
            'name' => 'home_page',
            'value' => $model->home_page ? "Yes" : "No",
        ),
        array(
            'name' => 'sectionid',
            'type' => 'raw',
            'value' => NewsCategory::getSectionName($model->sectionid),
        ),
        array(
            'name' => 'catid',
            'type' => 'raw',
            'value' => NewsCategory::getCategoryName($model->catid),
        ),
        'mask',
        array(
            'name' => 'created',
            'type' => 'raw',
            'value' => date("F j, Y, g:i A", strtotime($model->created)),
        ),
        array(
            'name' => 'created_by',
            'type' => 'raw',
            'value' => News::getUserName($model->created_by),
        ),
        'created_by_alias',
        array(
            'name' => 'modified',
            'type' => 'raw',
            'value' => date("F j, Y, g:i A", strtotime($model->modified)),
        ),
        array(
            'name' => 'modified_by',
            'type' => 'raw',
            'value' => News::getUserName($model->modified_by),
        ),
        'checked_out',
        array(
            'name' => 'checked_out_time',
            'type' => 'raw',
            'value' => date("F j, Y, g:i A", strtotime($model->checked_out_time)),
        ),
        array(
            'name' => 'publish_up',
            'type' => 'raw',
            'value' => date("F j, Y, g:i A", strtotime($model->publish_up)),
        ),
        array(
            'name' => 'publish_down',
            'type' => 'raw',
            'value' => date("F j, Y, g:i A", strtotime($model->publish_down)),
        ),        
        'urls',
        'attribs',
        'version',
        'parentid',
        'ordering',
        'metakey',
        'metadesc',
        'access',
        'hits',
        'metadata',
    ),
));
?>
