<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span12 banner_bg">
        <div class="row-fluid">
            <div class="span8">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/banner.png', 'Banner', array('title' => 'Hollywood bangla news', 'alt' => 'Hollywood bangla news')); ?>
            </div>
            <div class="span4">
                <?php $this->get_advertisement_370(33); ?>
            </div>
        </div>        
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            ));
            ?><!-- breadcrumbs -->
        <?php endif ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <ul class="breadcrumbs breadcrumb">
            <li>
                <div style="float: left; width: 110px; margin-top: 5px;">
                    <span class="marquee_news_title"><?php echo $this->get_menu_name(51); ?></span>
                </div>
                <div style="float: left; width: 1030px;">
                    <marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()"><?php $this->get_marquee_news(); ?></marquee>
                </div>            
            </li>
        </ul>
    </div>
</div>
<div class="row-fluid">
    <div class="span8">        
        <div class="row-fluid">
            <div class="span12">
                <?php echo $content; ?>
            </div>
        </div>        
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_latest_news(); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_max_hits_news(); ?>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_cat_latest_news($_GET['id']); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhollywoodbangla&amp;width=370&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=623963124283493" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:370px; height:290px;" allowTransparency="true"></iframe>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <iframe width="370" height="215" src="//www.youtube.com/embed/<?php echo $this->get_youtube_video(); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>  
        <div class="row-fluid">
            <div class="span12">
                <?php $this->get_advertisement_370(32); ?>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <hr>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'pills', // '', 'tabs', 'pills' (or 'list')
            'stacked' => false, // whether this is a stacked menu
            'items' => array(
                array('label' => $this->get_menu_name(27), 'url' => array('/content/view', 'id' => 1)),
                array('label' => $this->get_menu_name(28), 'url' => array('/news/index', 'id' => 71)),
                array('label' => $this->get_menu_name(29), 'url' => array('/content/view', 'id' => 2)),
            ),
            'htmlOptions' => array('style' => 'font-size:18px;height:20px;'),
        ));
        ?>
    </div>
</div>
<?php $this->endContent(); ?>