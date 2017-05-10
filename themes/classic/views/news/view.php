<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    $this->get_category_name($model->catid) => array('/news/index', 'id' => $model->catid),
    $model->title,
);
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=623963124283493";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<h2><?php echo $model->title; ?></h2>
<p class="news_date"><?php echo date("F j, Y, g:i A", strtotime($model->created)); ?>, Hits: <?php echo $model->hits; ?></p>
<p>
    <?php
    $this->widget('application.extensions.addThis.addThis', array(
        'id' => 'addThis',
        'username' => 'saidurwd@gmail.com',
        'defaultButtonCaption' => 'Share',
        'showDefaultButton' => true,
        'showDefaultButtonCaption' => true,
        'separator' => '|',
        'htmlOptions' => array(),
        'linkOptions' => array(),
        'showServices' => array('facebook', 'twitter', 'myspace', 'email', 'print'),
        'showServicesTitle' => false,
        'config' => array('ui_language' => 'en'),
        'share' => array(),
            )
    );
    ?>
</p>
<p>
    <span class="thumbnail" style="margin: 0px 15px 15px 0px; float: left;"><?php echo CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $model->images, $model->title, array("width" => 370, 'title' => $model->title, 'alt' => $model->title)); ?></span>
    <span><?php echo $model->introtext; ?></span>
</p>
<div style="clear: both;">&nbsp;</div>
<div class="fb-comments" data-href="<?php echo 'http://www.hollywoodbangla.com/' . Yii::app()->request->url; ?>" data-width="780" data-num-posts="10"></div>
<div class="row-fluid">
    <div class="span12">
        <?php $this->get_advertisement_770(31); ?>
    </div>
</div>