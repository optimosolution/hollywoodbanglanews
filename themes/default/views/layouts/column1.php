<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span12">
        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/banner.jpg', 'Banner', array('title' => 'Banner', 'alt' => 'Banner', 'width' => '1170')); ?>
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
    <div class="span2">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th style="font-size: 20px;"><?php echo $this->get_menu_name(1); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr><td><?php echo CHtml::link($this->get_menu_name(2), array('/news/index', 'id' => 52), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(3), array('/news/index', 'id' => 46), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(4), array('/news/index', 'id' => 41), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(5), array('/news/index', 'id' => 58), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(6), array('/news/index', 'id' => 31), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(7), array('/news/index', 'id' => 28), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(8), array('/news/index', 'id' => 32), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(9), array('/news/index', 'id' => 34), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(10), array('/news/index', 'id' => 67), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(11), array('/news/index', 'id' => 32), array()); ?></td></tr>
            </tbody>
        </table>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th style="font-size: 20px;"><?php echo $this->get_menu_name(12); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr><td><?php echo CHtml::link($this->get_menu_name(13), array('/news/index', 'id' => 35), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(14), array('/news/index', 'id' => 36), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(15), array('/news/index', 'id' => 37), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(16), array('/news/index', 'id' => 40), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(17), array('/news/index', 'id' => 42), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(18), array('/news/index', 'id' => 43), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(19), array('/news/index', 'id' => 56), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(20), array('/news/index', 'id' => 65), array()); ?></td></tr>                
            </tbody>
        </table>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th style="font-size: 20px;"><?php echo $this->get_menu_name(21); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr><td><?php echo CHtml::link($this->get_menu_name(22), array('/news/index', 'id' => 85), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(23), array('/document/admin'), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(24), array('/weblink/index'), array()); ?></td></tr>
                <tr><td><?php echo CHtml::link($this->get_menu_name(25), array('/news/index', 'id' => 83), array()); ?></td></tr>                
            </tbody>
        </table>
        <?php $this->get_advertisement(1); ?>
        <div>
            <?php echo $this->get_max_hits_news(); ?>
        </div>
        <div>
            <?php echo $this->get_category_news(42); ?>
        </div>
        <div>
            <?php echo $this->get_category_news(37); ?>
        </div>
        <div>
            <?php echo $this->get_category_news(56); ?>
        </div>
    </div>
    <div class="span6">
        <?php echo $content; ?>
    </div>
    <div class="span4">
        <div class="row-fluid">
            <div class="span12">
                <?php $this->getCategoryNewsImage(73); ?>
            </div>
        </div>       
        <div class="row-fluid">
            <div class="span12">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhollywoodbangla&amp;width=370&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=623963124283493" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:370px; height:290px;" allowTransparency="true"></iframe>
            </div>
        </div>            
        <div class="row-fluid">
            <div class="span12">
                <?php $this->getCategoryNewsImage(86); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <iframe width="370" height="215" src="//www.youtube.com/embed/<?php echo $this->get_youtube_video(); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <div><?php $this->get_advertisement(3); ?></div>
                <div><?php $this->get_advertisement(4); ?></div>
            </div>
            <div class="span6">
                <div><?php $this->get_advertisement(2); ?></div>
                <div><?php $this->get_advertisement(5); ?></div>
            </div>            
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNewsImage(67); ?></div>
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNewsImage(58); ?></div>
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNews(71); ?></div>
        </div>  
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNews(87); ?></div>
        </div> 
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNewsImage(88); ?></div>
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNews(89); ?></div>
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNewsImage(42); ?></div>
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNews(56); ?></div>
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNews(43); ?></div>
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNewsImage(90); ?></div>
        </div>
        <div class="row-fluid">
            <div class="span12"><?php $this->getCategoryNews(91); ?></div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
