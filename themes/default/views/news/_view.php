<div class="view" style="margin-bottom: 20px; clear: both;">
    <?php
    if ($data->images) {
        echo '<div>' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $data->images, $data->title, array("width" => 570, 'title' => $data->title, 'style' => '')) . '</div>';
    }
    ?>
    <?php echo '<p class="news_title">' . CHtml::link(CHtml::encode($data->title), array('/news/view', 'id' => $data->id)) . '</p>'; ?>    
    <p><?php echo '<p>' . $this->text_cut(htmlspecialchars_decode(CHtml::encode($data->introtext)), 1500) . '...</p>'; ?></p>
</div>