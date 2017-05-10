<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span12 banner_bg">
        <div class="row-fluid">
            <div class="span8">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/banner.png', 'Banner', array('title' => 'Hollywood bangla news', 'alt' => 'Hollywood bangla news')); ?>
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
    <div class="span12">
        <?php echo $content; ?>
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
