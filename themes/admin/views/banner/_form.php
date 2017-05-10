<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'banner-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
?>
<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
<?php echo $form->DropDownListRow($model, 'catid', CHtml::listData(BannerCategory::model()->findAll(array('condition' => 'published=1', "order" => "title")), 'id', 'title'), array('empty' => '--please select--', 'class' => 'span5')); ?>
<?php echo $form->textFieldRow($model, 'name', array('class' => 'span5', 'maxlength' => 255)); ?>
<?php echo $form->textFieldRow($model, 'alias', array('class' => 'span5', 'maxlength' => 255)); ?>
<?php echo $form->fileFieldRow($model, 'banner', array('class' => 'span5')); ?>
<?php echo $form->textFieldRow($model, 'clickurl', array('class' => 'span5', 'maxlength' => 200)); ?>
<?php echo $form->textAreaRow($model, 'description', array('rows' => 3, 'cols' => 50, 'class' => 'span5')); ?>
<?php echo $form->textFieldRow($model, 'ordering', array('class' => 'span3')); ?>
<?php echo $form->DropDownListRow($model, 'published', array('1' => 'Yes', '0' => 'No'), array('class' => 'span3')); ?>
<?php echo $form->DropDownListRow($model, 'sticky', array('1' => 'Yes', '0' => 'No'), array('class' => 'span3')); ?>
<?php echo $form->labelEx($model, 'publish_up'); ?>
<?php
echo $form->widget('zii.widgets.jui.CJuiDatePicker', array(
    'language' => 'en',
    'model' => $model, // Model object
    'attribute' => 'publish_up',
    'options' => array(
        'mode' => 'date',
        'changeYear' => true,
        'changeMonth' => true,
        'yearRange' => '1900:2200',
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => '',
        'showTimepicker' => false,
    ),
    'htmlOptions' => array(
        'placeholder' => 'Register Date',
        //'style' => 'width:460px !important;',
        'class' => 'span3',
        'class' => 'input' . ( $model->getError('registerDate') ? ' error' : '')
    ),
        ), true);
?>
<?php echo $form->labelEx($model, 'publish_down'); ?>
<?php
echo $form->widget('zii.widgets.jui.CJuiDatePicker', array(
    'language' => 'en',
    'model' => $model, // Model object
    'attribute' => 'publish_down',
    'options' => array(
        'mode' => 'date',
        'changeYear' => true,
        'changeMonth' => true,
        'yearRange' => '1900:2200',
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => '',
        'showTimepicker' => false,
    ),
    'htmlOptions' => array(
        'placeholder' => 'Register Date',
        //'style' => 'width:460px !important;',
        'class' => 'span3',
        'class' => 'input' . ( $model->getError('registerDate') ? ' error' : '')
    ),
        ), true);
?>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
        'icon' => 'icon-plus icon-white',
        'htmlOptions' => array(),
    ));
    ?>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'label' => 'Reset',
        'type' => 'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size' => '', // null, 'large', 'small' or 'mini'
        'buttonType' => 'reset', //link, button, submit, submitLink, reset, ajaxLink, ajaxButton and ajaxSubmit
        'icon' => 'icon-refresh icon-white',
        'htmlOptions' => array(),
    ));
    ?>
</div>
<?php $this->endWidget(); ?>