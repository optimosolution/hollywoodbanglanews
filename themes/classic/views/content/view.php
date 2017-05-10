<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
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
<div class="row-fluid">
    <div class="span8">
        <fieldset>
            <legend><?php echo $model->title; ?></legend>
            <p class="news_date"><?php echo date("F j, Y, g:i A", strtotime($model->created)); ?></p>
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
            <p><?php echo $model->introtext; ?></p>
        </fieldset>
        <div style="clear: both;">&nbsp;</div>
        <div class="fb-comments" data-href="<?php echo 'http://www.hollywoodbangla.com/' . Yii::app()->request->url; ?>" data-width="780" data-num-posts="10"></div>
    </div>
    <div class="span4">
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_latest_news(); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhollywoodbangla&amp;width=370&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=623963124283493" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:370px; height:290px;" allowTransparency="true"></iframe>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                
            </div>
        </div>               
    </div>
</div>
