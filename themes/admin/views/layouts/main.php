<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        <?php Yii::app()->bootstrap->register(); ?>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>        
    </head>
    <body>
        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'type' => '', // null or 'inverse'
            //'brand' => Yii::app()->name,
            'brand' => CHtml::image(Yii::app()->baseUrl . '/images/optimosolution_logo.png', 'Logo', array('style' => 'width:120px;')),
            'brandUrl' => array('/site/index'),
            'collapse' => true, // requires bootstrap-responsive.css
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => 'Home', 'icon' => 'home', 'url' => array('/site/index'), 'items' => array(
                                array('label' => 'View Site', 'icon' => 'icon-hand-right', 'url' => Yii::app()->request->baseUrl), array('target' => '_blank'),
                            )),
                        array('label' => 'Modules', 'icon' => 'icon-th-large', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                array('label' => 'Users', 'icon' => 'icon-user', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                        array('label' => 'Admin User', 'icon' => 'icon-play', 'url' => array('/userAdmin/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => 'Site User', 'icon' => 'icon-play', 'url' => array('/user/admin'), 'visible' => !Yii::app()->user->isGuest),
                                    )),
                                array('label' => 'Content', 'icon' => 'icon-book', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                        array('label' => 'Category', 'icon' => 'icon-play', 'url' => array('/contentCategory/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => 'Content', 'icon' => 'icon-play', 'url' => array('/content/admin'), 'visible' => !Yii::app()->user->isGuest),
                                    )),
                                array('label' => 'News', 'icon' => 'icon-th', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                        array('label' => 'News Section', 'icon' => 'icon-play', 'url' => array('/newsSections/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => 'News Category', 'icon' => 'icon-play', 'url' => array('/newsCategory/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => 'News', 'icon' => 'icon-play', 'url' => array('/news/admin'), 'visible' => !Yii::app()->user->isGuest),
                                    )),
                                array('label' => 'Download', 'icon' => 'icon-arrow-down', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                        array('label' => 'Category', 'icon' => 'icon-play', 'url' => array('/documentCategory/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => 'Documents', 'icon' => 'icon-play', 'url' => array('/document/admin'), 'visible' => !Yii::app()->user->isGuest),
                                    )),
                                array('label' => 'Banner', 'icon' => 'icon-th-large', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                        array('label' => 'Category', 'icon' => 'icon-play', 'url' => array('/bannerCategory/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => 'Banner', 'icon' => 'icon-play', 'url' => array('/banner/admin'), 'visible' => !Yii::app()->user->isGuest),
                                    )),
                                array('label' => 'Youtube Video', 'icon' => 'icon-th-large', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                        array('label' => 'Youtube', 'icon' => 'icon-play', 'url' => array('/youtube/admin'), 'visible' => !Yii::app()->user->isGuest),
                                    )),
                                array('label' => 'Weblinks', 'icon' => 'icon-th-large', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                        array('label' => 'Weblink Category', 'icon' => 'icon-play', 'url' => array('/weblinkCategory/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => 'Weblinks', 'icon' => 'icon-play', 'url' => array('/weblink/admin'), 'visible' => !Yii::app()->user->isGuest),
                                    )),
                                array('label' => 'Menu Items', 'icon' => 'icon-th-large', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                        array('label' => 'Menu Item', 'icon' => 'icon-play', 'url' => array('/menuItem/admin'), 'visible' => !Yii::app()->user->isGuest),
                                    )),
                                array('label' => 'Subscriber', 'icon' => 'icon-th-large', 'url' => array('/subscriber/admin'), 'visible' => !Yii::app()->user->isGuest),
                            )),
                        array('label' => 'Settings', 'icon' => 'cog', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
                                array('label' => 'Country', 'icon' => 'icon-play', 'url' => array('/country/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'State', 'icon' => 'icon-play', 'url' => array('/state/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'City', 'icon' => 'icon-play', 'url' => array('/city/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Currency', 'icon' => 'icon-play', 'url' => array('/currency/admin'), 'visible' => !Yii::app()->user->isGuest),
                                '---',
                                array('label' => 'User Group', 'icon' => 'icon-play', 'url' => array('/userGroup/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'User Status', 'icon' => 'icon-play', 'url' => array('/userStatus/admin'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'ACL Controllers', 'icon' => 'icon-lock', 'url' => array('/aclController/admin'), 'visible' => !Yii::app()->user->isGuest),
                            //array('label' => 'ACL Actions', 'icon' => 'icon-lock', 'url' => array('/aclAction/admin'), 'visible' => !Yii::app()->user->isGuest),
                            //array('label' => 'ACL', 'icon' => 'icon-lock', 'url' => array('/acl/admin'), 'visible' => !Yii::app()->user->isGuest),
                            )),
                    ),
                ),
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'htmlOptions' => array('class' => 'pull-right'),
                    'items' => array(
                        array('label' => $this->getUserName() ? $this->getUserName() : 'Guest', 'icon' => 'icon-user', 'url' => '#', 'items' => array(
                                array('label' => 'Profile Edit', 'icon' => 'icon-edit', 'url' => array('/userAdmin/update', 'id' => Yii::app()->user->id), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Change Password', 'icon' => 'icon-refresh', 'url' => array('/userAdmin/edit', 'id' => Yii::app()->user->id), 'visible' => !Yii::app()->user->isGuest),
                                '---',
                                array('label' => 'Login', 'icon' => 'icon-ok', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'icon' => 'icon-off', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                            )),
                    ),
                ),
            ),
        ));
        ?>

        <div class="container" id="page">
            <?php
            $this->widget('bootstrap.widgets.TbAlert', array(
                'block' => true,
                'fade' => true,
                'closeText' => '&times;',
            ));


            if (isset($this->breadcrumbs)):
                ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>
            <?php echo $content; ?>
            <div class="clear"></div>
            <div id="footer">
                &copy; <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>
            </div><!-- footer -->
        </div><!-- page -->
    </body>
</html>
