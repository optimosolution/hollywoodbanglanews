<?php
$this->breadcrumbs = array(
    'Cities' => array('admin'),
    $model->city_name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'active' => true, 'icon' => 'icon-home'),
    array('label' => 'New', 'url' => array('create'), 'active' => true, 'icon' => 'icon-file'),
    array('label' => 'Details', 'url' => array('view', 'id' => $model->id), 'active' => true, 'icon' => 'icon-th-large'),
);
?>

<div class="form-actions">
    <h2><?php echo $model->city_name; ?></h2>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>