<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <meta name="author" content="Optimo Solution - S.M. Saidur Rahman">
        <meta name="generator" content="Hollywood bangla online newspaper" />
        <meta name="google-site-verification" content="google68d4f23bf24154d2" />
        <meta name="y_key" content="6ac8ff25a6ec76f0" />
        <meta name="msvalidate.01" content="314BB9FEB7B6B8349B2A52B0E3D852DD" />
        <meta name="alexaverifyid" content="BPLJG3G45pMKCaxnTCSLcNE2qlw" />
        <?php Yii::app()->bootstrap->register(); ?>
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/unicorn.main.css" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>  
        <?php $this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget', array('account' => 'UA-5001125-5', 'domainName' => '.hollywoodbangla.com')); ?>
    </head>
    <body>
        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'type' => '', // null or 'inverse'
            'brand' => '',
            //'brand' => CHtml::image(Yii::app()->theme->baseUrl . '/images/logo.png', 'Logo', array('style' => 'width:120px;')),
            'brandUrl' => array('/site/index'),
            'collapse' => true, // requires bootstrap-responsive.css
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => $this->get_menu_name(26), 'url' => array('/site/index'),
                            'items' => array(
                                array('label' => $this->get_menu_name(27), 'url' => array('/content/view', 'id' => 1)),
                                array('label' => $this->get_menu_name(28), 'url' => array('/news/index', 'id' => 71)),
                                array('label' => $this->get_menu_name(29), 'url' => array('/content/view', 'id' => 2)),
                            ),
                        ),
                        array('label' => $this->get_menu_name(30), 'url' => array('/weblink/index')),
                        array('label' => $this->get_menu_name(31), 'url' => '#',
                            'items' => array(
                                array('label' => $this->get_menu_name(2), 'url' => array('/news/index', 'id' => 52)),
                                array('label' => $this->get_menu_name(3), 'url' => array('/news/index', 'id' => 46)),
                                array('label' => $this->get_menu_name(4), 'url' => array('/news/index', 'id' => 41)),
                                array('label' => $this->get_menu_name(5), 'url' => array('/news/index', 'id' => 58)),
                                array('label' => $this->get_menu_name(6), 'url' => array('/news/index', 'id' => 31)),
                                array('label' => $this->get_menu_name(7), 'url' => array('/news/index', 'id' => 28)),
                                array('label' => $this->get_menu_name(8), 'url' => array('/news/index', 'id' => 32)),
                                array('label' => $this->get_menu_name(9), 'url' => array('/news/index', 'id' => 34)),
                                array('label' => $this->get_menu_name(10), 'url' => array('/news/index', 'id' => 67)),
                                array('label' => $this->get_menu_name(11), 'url' => array('/news/index', 'id' => 32)),
                            ),
                        ),
                        array('label' => $this->get_menu_name(32), 'url' => '#',
                            'items' => array(
                                array('label' => $this->get_menu_name(39), 'url' => array('/news/index', 'id' => 75)),
                                array('label' => $this->get_menu_name(40), 'url' => array('/news/index', 'id' => 76)),
                                array('label' => $this->get_menu_name(41), 'url' => array('/news/index', 'id' => 77)),
                                array('label' => $this->get_menu_name(42), 'url' => array('/news/index', 'id' => 78)),
                                array('label' => $this->get_menu_name(43), 'url' => array('/news/index', 'id' => 79)),
                                array('label' => $this->get_menu_name(44), 'url' => array('/news/index', 'id' => 80)),
                                array('label' => $this->get_menu_name(45), 'url' => array('/news/index', 'id' => 81)),
                                array('label' => $this->get_menu_name(46), 'url' => array('/news/index', 'id' => 82)),
                            ),
                        ),
                        array('label' => $this->get_menu_name(33), 'url' => array('/document/admin')),
                        array('label' => $this->get_menu_name(34), 'url' => array('/youtube/index')),
                        array('label' => $this->get_menu_name(35), 'url' => '#',
                            'items' => array(
                                array('label' => $this->get_menu_name(13), 'url' => array('/news/index', 'id' => 35)),
                                array('label' => $this->get_menu_name(14), 'url' => array('/news/index', 'id' => 36)),
                                array('label' => $this->get_menu_name(15), 'url' => array('/news/index', 'id' => 37)),
                                array('label' => $this->get_menu_name(16), 'url' => array('/news/index', 'id' => 40)),
                                array('label' => $this->get_menu_name(17), 'url' => array('/news/index', 'id' => 42)),
                                array('label' => $this->get_menu_name(18), 'url' => array('/news/index', 'id' => 42)),
                                array('label' => $this->get_menu_name(19), 'url' => array('/news/index', 'id' => 56)),
                                array('label' => $this->get_menu_name(20), 'url' => array('/news/index', 'id' => 65)),
                            ),
                        ),
                        array('label' => $this->get_menu_name(36), 'url' => '#'),
                        array('label' => $this->get_menu_name(37), 'url' => array('/content/view', 'id' => 3)),
                        array('label' => $this->get_menu_name(38), 'url' => array('/site/contact')),
                    ),
                ),
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'htmlOptions' => array('class' => 'pull-right'),
                    'items' => array(
                        array('label' => Yii::app()->user->name, 'icon' => 'icon-user', 'url' => '#', 'items' => array(
                                array('label' => 'Login', 'icon' => 'icon-ok', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'icon' => 'icon-off', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                            )),
                    ),
                ),
            ),
        ));
        ?>
        <?php $this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget', array('account' => 'WW-DDDDDDD-DD', 'domainName' => '.example.com')); ?>
        <div id="wrap">
            <div class="container" style="margin-top: 50px;">                    
                <?php echo $content; ?>                    
            </div>
            <div id="push"></div>
        </div>
        <div id="footer" style="height: 220px; border-top: 10px solid #D1E8F5; color: #000;">
            <div class="container">
                <p class="muted credit" style="font-size: 20px;"><?php echo $this->get_menu_name(48); ?>, CEO & Publisher: Syed Abed Nipu</p>
                <p class="muted credit" style="font-size: 20px;"><?php echo $this->get_menu_name(49); ?>, Chief Editor: Mamun Reazi</p>
                <p class="muted credit" style="font-size: 16px;"><?php echo $this->get_menu_name(50); ?></p>
                <p class="muted credit">E-Mail: hollywoodbangla@gmail.com, Hollywood , California, USA, Phone : (562) 688-1911</p>      
                <p class="muted credit">Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::app()->params['copyrightName']; ?>. All rights reserved. Website designed and developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?></p>                 
            </div>
        </div>        
    </body>
</html>
