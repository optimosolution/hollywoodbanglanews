<?php
$this->breadcrumbs = array(
    'News' => array('admin'),
    'Create',
);
$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'active' => true, 'icon' => 'icon-home'),
);
?>
<div class="form-actions">
    <h2>New</h2>
</div>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
<?php
$form2 = $this->beginWidget('CActiveForm', array(
    'id' => 'image-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
        'onsubmit' => "return false;", /* Disable normal form submit */
//        'onkeypress' => " if(event.keyCode == 13){ upload(); } " /* Do ajax call when user presses enter key */
    ),
        ));
?>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form2->textField($model_images, 'title', array('class' => 'span12', 'maxlength' => 255, 'placeholder' => 'Image title')); ?>
    </div>
    <div class="span4">
        <?php echo $form2->fileField($model_images, 'content_image', array('class' => 'span12')); ?>
    </div>
    <div class="span2">
        <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary btn-small', 'onclick' => 'upload();')); ?>
    </div>
</div>
<?php $this->endWidget(); ?>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'image-grid',
    'dataProvider' => $modelmore->search($model->id),
    'columns' => array(
        array(
            'name' => 'title',
            'type' => 'raw',
            'value' => '$data->title',
            'htmlOptions' => array('style' => "text-align:center;width:100px;", 'title' => 'title'),
        ),
        array(
            'name' => 'content_image',
            'type' => 'html',
            'value' => 'CHtml::image(Yii::app()->baseUrl . "/uploads/images/" . $data->content_image, "Picture", array("style" => "width:50px;"))',
        ),
        array(
            'header' => 'Path',
            'type' => 'html',
            'value' => 'Yii::app()->getBaseUrl(true)."/uploads/images/" . $data->content_image',
        ),
        array(
            'header' => 'Actions',
            'template' => '{delete}',
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'buttons' => array(
                'delete' => array(
                    'label' => '',
                    'imageUrl' => '',
                    'url' => 'Yii::app()->createUrl("/news/remove", array("id"=>(int)$data["id"]))',
                    'options' => array('class' => ''),
                ),
            ),
        ),
    ),
));
?>
<script type="text/javascript">
    function upload()
    {
        //var data = $("#document-form").serialize();
        var formData = new FormData($('#image-form')[0]);
        $.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->createAbsoluteUrl("news/image"); ?>',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert("succes:" + data);
                if (data != "false")
                {
                    $("#image-form")[0].reset();
                    $.fn.yiiGridView.update('image-grid', {
                    });
                }
            },
            error: function (data) { // if error occured
                alert("Error occured. Please try again");
                //alert(data);
            },
            dataType: 'html'
        });

    }
</script>