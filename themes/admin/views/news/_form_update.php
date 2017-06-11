<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'news-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
<div class="row-fluid">
    <div class="span8"><?php echo $form->textFieldRow($model, 'title', array('class' => 'span12', 'maxlength' => 255)); ?></div>
    <div class="span4"><?php echo $form->fileFieldRow($model, 'images', array('maxlength' => 255, 'class' => 'span12')); ?></div>
</div>
<div class="row-fluid">
    <div class="span6"><?php echo $form->DropDownListRow($model, 'sectionid', CHtml::listData(NewsSections::model()->findAll(array('condition' => 'published=1', "order" => "title")), 'id', 'title'), array('empty' => '--please select--', 'class' => 'span12', 'options' => array('1' => array('selected' => true)))); ?>    </div>
    <div class="span6">
        <?php //echo $form->DropDownListRow($model, 'catid', CHtml::listData(NewsCategory::model()->findAll(array('condition' => 'published=1', "order" => "title")), 'id', 'title'), array('empty' => '--please select--', 'class' => 'span12')); ?>
        <?php echo $form->labelEx($model, 'catid'); ?>
        <?php News::getCategoryUpdate($model->catid); ?>
    </div>
</div>
<?php echo $form->labelEx($model, 'introtext'); ?>
<?php
//$this->widget('application.extensions.yii-ckeditor.CKEditorWidget', array(
//    'model' => $model,
//    'attribute' => 'introtext',
//    // editor options http://docs.ckeditor.com/#!/api/CKEDITOR.config
//    'config' => array(
//        'language' => 'en',
//    //'toolbar' => 'Basic',
//    ),
//));
?>
<?php
$this->widget(
        'ext.widgets.redactorjs.Redactor', array(
    'editorOptions' => array(
        'imageUpload' => Yii::app()->createAbsoluteUrl('/news/upload'),
        'imageGetJson' => Yii::app()->createAbsoluteUrl('/news/listimages')
    ),
    'model' => $model,
    'attribute' => 'introtext'));
?>
<?php
/*
  $this->widget('application.extensions.tinymce.ETinyMce', array(
  'model' => $model,
  'attribute' => 'introtext',
  'useSwitch' => false,
  'editorTemplate' => 'full'
  )
  );
 */
?>
<div class="row-fluid">
    <div class="span3"><?php echo $form->DropDownListRow($model, 'state', array('1' => 'Yes', '0' => 'No'), array('class' => 'span12')); ?></div>
    <div class="span3"><?php echo $form->DropDownListRow($model, 'home_page', array('1' => 'Yes', '0' => 'No'), array('class' => 'span12')); ?></div>
</div>
<?php //echo $form->textAreaRow($model, 'fulltext', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>
<?php //echo $form->textFieldRow($model, 'created_by_alias', array('class' => 'span5', 'maxlength' => 255)); ?>
<?php //echo $form->textAreaRow($model, 'metakey', array('rows' => 2, 'cols' => 50, 'class' => 'span5')); ?>
<?php //echo $form->textAreaRow($model, 'metadesc', array('rows' => 2, 'cols' => 50, 'class' => 'span5')); ?>
<?php //echo $form->labelEx($model, 'publish_up'); ?>
<?php /*
  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
  'model' => $model,
  'attribute' => 'publish_up',
  'options' => array(
  'showAnim' => 'fold',
  'dateFormat' => 'yy-mm-dd', // save to db format
  'showOtherMonths' => true,
  'selectOtherMonths' => true,
  'changeMonth' => true,
  'changeYear' => true,
  //'altField' => '#self_pointing_id',
  'altFormat' => 'yy-mm-dd', // show to user format
  ),
  'htmlOptions' => array(
  'style' => 'height:20px;',
  'class' => 'span2',
  ),
  )); */
?>
<?php //echo $form->labelEx($model, 'publish_down'); ?>
<?php /*
  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
  'model' => $model,
  'attribute' => 'publish_down',
  'options' => array(
  'showAnim' => 'fold',
  'dateFormat' => 'yy-mm-dd', // save to db format
  'showOtherMonths' => true,
  'selectOtherMonths' => true,
  'changeMonth' => true,
  'changeYear' => true,
  //'altField' => '#self_pointing_id',
  'altFormat' => 'yy-mm-dd', // show to user format
  ),
  'htmlOptions' => array(
  'style' => 'height:20px;',
  'class' => 'span2',
  ),
  )); */
?>
<?php //echo $form->textFieldRow($model, 'ordering', array('class' => 'span2')); ?>
<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
