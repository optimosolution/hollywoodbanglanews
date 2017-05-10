<div class="view" style="margin-bottom: 20px; clear: both;">
    <?php
    if ($data->images) {
        echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $data->images, $data->title, array("width" => 560, 'title' => $data->title, 'style' => '')) . '</div>';
    }
    ?>
    <?php echo '<p class="news_title" style="margin:10px 0px 20px 0px;">' . CHtml::link(CHtml::encode($data->title), array('/news/view', 'id' => $data->id)) . '</p>'; ?>       
</div>