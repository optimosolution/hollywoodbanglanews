<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    public $userData;

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = 'application.views.layouts.column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('*'),
                'actions' => array('login'),
            ),
            array('allow',
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function init() {
        //Yii::app()->theme = Yii::app()->user->getCurrentTheme();
        //Yii::app()->theme = 'teacher';
        //parent::init();
    }

    public function firstNwords($str, $n) {
        return preg_replace('/((\b\w+\b.*?){' . $n . '}).*$/s', '$1', $str);
    }

    public function strip_html_tags($string) {

        $string = str_replace("\r", ' ', $string);
        $string = str_replace("\n", ' ', $string);
        $string = str_replace("\t", ' ', $string);
        $pattern = '/<[^>]*>/';
        $string = preg_replace($pattern, ' ', $string);
        $string = trim(preg_replace('/ {2,}/', ' ', $string));

        return $string;
    }

    public function text_cut($text, $length = 200, $dots = true) {
        $text = trim(preg_replace('#[\s\n\r\t]{2,}#', ' ', $text));
        $text_temp = $text;
        while (substr($text, $length, 1) != " ") {
            $length++;
            if ($length > strlen($text)) {
                break;
            }
        }
        $text = substr($text, 0, $length);
        return $text . ( ( $dots == true && $text != '' && strlen($text_temp) > $length ) ? '...' : '');
    }

    public function get_advertisement_170($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('published=1 AND catid=' . $catid . ' AND publish_up <= NOW()  AND publish_down >= NOW()')
                ->order('created_on DESC')
                ->queryAll();

        foreach ($array as $key => $values) {
            echo '<div style="margin-bottom:5px;">';
            $banner = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'], $values['name'], array("width" => 170, 'title' => $values['name']));
            echo CHtml::link($banner, $values['clickurl'], array('target' => '_blank'));
            echo '</div>';
        }
    }

    public function get_advertisement_270($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('published=1 AND catid=' . $catid . ' AND publish_up <= NOW()  AND publish_down >= NOW()')
                ->order('created_on DESC')
                ->queryAll();

        foreach ($array as $key => $values) {
            echo '<div style="margin-bottom:5px;">';
            $banner = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'], $values['name'], array("width" => 270, 'title' => $values['name'], 'class' => 'img-polaroid'));
            echo CHtml::link($banner, $values['clickurl'], array('target' => '_blank'));
            echo '</div>';
        }
    }

    public function get_advertisement_370($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('published=1 AND catid=' . $catid . ' AND publish_up <= NOW()  AND publish_down >= NOW()')
                ->order('created_on DESC')
                ->queryAll();

        foreach ($array as $key => $values) {
            echo '<div style="margin-bottom:5px 0px;">';
            $banner = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'], $values['name'], array("width" => 370, 'title' => $values['name']));
            echo CHtml::link($banner, $values['clickurl'], array('target' => '_blank'));
            echo '</div>';
        }
    }

    public function get_advertisement_370swf($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('published=1 AND catid=' . $catid . ' AND publish_up <= NOW()  AND publish_down >= NOW()')
                ->order('created_on DESC')
                ->queryAll();

        foreach ($array as $key => $values) {
            //$filename = $values['banner'];
            //$ext = pathinfo($filename, PATHINFO_EXTENSION);
            //if (!empty($values['banner']) && $ext == 'swf') {
                $this->widget('application.extensions.flash.EJqueryFlash', array(
                    'name' => $values['name'],
                    'text' => 'You need Flash Player',
                    'htmlOptions' => array(
                        'src' => Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'],
                        'width' => 370,
                        'height' => 140,
                        'style' => 'margin:0px;')
                ));
            /*} else {
                echo '<div style="margin-bottom:5px 0px;">';
                $banner = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'], $values['name'], array("width" => 370, 'title' => $values['name']));
                echo CHtml::link($banner, $values['clickurl'], array('target' => '_blank'));
                echo '</div>';
            }*/
        }
    }

    public function get_advertisement_425($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('published=1 AND catid=' . $catid . ' AND publish_up <= NOW()  AND publish_down >= NOW()')
                ->order('created_on DESC')
                ->queryAll();

        foreach ($array as $key => $values) {
            echo '<div style="margin-bottom:5px 0px;">';
            $banner = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'], $values['name'], array("width" => 425, 'title' => $values['name']));
            echo CHtml::link($banner, $values['clickurl'], array('target' => '_blank'));
            echo '</div>';
        }
    }

    public function get_advertisement_770($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('published=1 AND catid=' . $catid . ' AND publish_up <= NOW()  AND publish_down >= NOW()')
                ->order('created_on DESC')
                ->queryAll();

        foreach ($array as $key => $values) {
            echo '<div style="margin-bottom:5px 0px;">';
            $banner = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'], $values['name'], array("width" => 770, 'title' => $values['name']));
            echo CHtml::link($banner, $values['clickurl'], array('target' => '_blank'));
            echo '</div>';
        }
    }

    public function get_advertisement_870($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('published=1 AND catid=' . $catid . ' AND publish_up <= NOW()  AND publish_down >= NOW()')
                ->order('created_on DESC')
                ->queryAll();

        foreach ($array as $key => $values) {
            echo '<div style="margin:5px 0px;">';
            $banner = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'], $values['name'], array("width" => 870, 'title' => $values['name']));
            echo CHtml::link($banner, $values['clickurl'], array('target' => '_blank'));
            echo '</div>';
        }
    }

    public function get_category_name($id) {
        $value = Yii::app()->db->createCommand()
                ->select('title')
                ->from('{{news_category}}')
                ->where('id=' . $id)
                ->queryScalar();
        return $value;
    }

    public function getNewsByCategory($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images,introtext')
                ->from('{{news}}')
                ->where('catid=' . $catid . ' AND state=1')
                ->limit('1')
                ->order('created DESC, id DESC')
                ->queryAll();

        $oDbConnection = Yii::app()->db;
        $oCommand = $oDbConnection->createCommand('SELECT id, title FROM {{news}} WHERE state = 1 AND catid=' . $catid . ' ORDER BY created DESC, id DESC LIMIT 1,5');
        $oCDbDataReader = $oCommand->queryAll();

        echo '<h3 style="border-bottom:2px solid #999;">' . CHtml::link($this->get_category_name($catid), array('/news/index', 'id' => $catid), array('class' => '')) . '</h3>';

        foreach ($array as $key => $values) {
            echo '<div>' . CHtml::link($values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'home_top_news')) . '</div>';
            echo '<div class="hr_border">&nbsp;</div>';
            echo '<p><span style="float:left; margin:5px;">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 80, "height" => 70, 'title' => $values['title'])) . '...</span>';
            echo '<span>' . $this->text_cut(htmlspecialchars_decode(CHtml::encode($this->strip_html_tags($values["introtext"]))), 200) . '...</span></p>';
        }

        echo '<ul>';
        foreach ($oCDbDataReader as $key => $values) {
            echo '<li>' . CHtml::link($values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'home_news')) . '</li>';
        }
        echo '</ul>';
    }

    public function getCategoryNewsImage($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                ->where('catid=' . $catid . ' AND state=1')
                ->limit('5')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<h3 style="border-bottom:2px solid #999;">' . CHtml::link($this->get_category_name($catid), array('/news/index', 'id' => $catid), array('class' => '')) . '</h3>';
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 260, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
            echo '<div class="hr_border">&nbsp;</div>';
        }
    }

    public function getCategoryNews($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                ->where('catid=' . $catid . ' AND state=1')
                ->limit('5')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<h3 class="category_news">' . CHtml::link($this->get_category_name($catid), array('/news/index', 'id' => $catid), array('class' => '')) . '</h3>';
        foreach ($array as $key => $values) {
            echo '<div style="clear:both;border-bottom: 1px dotted #999;">' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
        }
    }

    public function get_menu_name($id) {
        $value = Yii::app()->db->createCommand()
                ->select('title')
                ->from('{{menu_item}}')
                ->where('id=' . $id)
                ->queryScalar();
        return $value;
    }

    public function get_youtube_video() {
        $value = Yii::app()->db->createCommand()
                ->select('youtube_id')
                ->from('{{youtube}}')
                ->limit('1')
                ->order('created_on DESC')
                ->queryScalar();
        return $value;
    }

    public function get_youtube_video_byid($id) {
        $value = Yii::app()->db->createCommand()
                ->select('youtube_id')
                ->from('{{youtube}}')
                ->where('id=' . $id)
                ->queryScalar();
        return $value;
    }

    public function get_latest_news() {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                ->where('state=1 AND sectionid=1')
                ->limit('10')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<div class="latest_news_title">' . $this->get_menu_name(53) . '</div>';
        foreach ($array as $key => $values) {
            echo '<div style="clear:both;border-bottom: 1px dotted #999;">' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
        }
    }

    public function get_max_hits_news() {
        $date = new DateTime('30 days ago');
        $pre_sev = $date->format('Y-m-d H:i:s');

        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                ->where('created >="' . $pre_sev . '" AND state=1 AND sectionid=1')
                ->limit('10')
                ->order('hits DESC, id DESC')
                ->queryAll();
        echo '<div class="latest_news_title">' . $this->get_menu_name(47) . '</div>';
        foreach ($array as $key => $values) {
            echo '<div style="clear:both;border-bottom: 1px dotted #999;">' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
        }
    }

    public function get_catid_bynewsid($id) {
        $value = Yii::app()->db->createCommand()
                ->select('catid')
                ->from('{{news}}')
                ->where('id=' . $id)
                ->queryScalar();
        return $value;
    }

    public function get_cat_latest_news($catid) {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND catid=' . $catid . ' ORDER BY created DESC, id DESC LIMIT 1,10')->queryAll();
        echo '<div class="latest_news_title">' . $this->get_menu_name(54) . '</div>';
        foreach ($array as $key => $values) {
            echo '<div style="clear:both;border-bottom: 1px dotted #999;">' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
        }
    }

    public function get_category_news($catid) {
        $date = new DateTime('30 days ago');
        $pre_sev = $date->format('Y-m-d');
        $array = Yii::app()->db->createCommand()
                ->select('id,title')
                ->from('{{news}}')
                ->where('created >' . $pre_sev . ' AND state=1 AND catid=' . $catid)
                ->limit('10')
                ->order('hits DESC, id DESC')
                ->queryAll();
        echo '<ul class="nav nav-tabs nav-stacked">';
        echo '<li style="font-size:16px; line-height:40px;">' . $this->get_category_name($catid) . '</li>';
        foreach ($array as $key => $values) {
            echo '<li>';
            echo CHtml::link($values['title'], array('/news/view', 'id' => $values['id']));
            echo '</li>';
        }
        echo '</ul>';
    }

    public function get_marquee_news() {
        $array = Yii::app()->db->createCommand()
                ->select('id,title')
                ->from('{{news}}')
                ->where('state=1')
                ->limit('20')
                ->order('created DESC, id DESC')
                ->queryAll();
        foreach ($array as $key => $values) {
            echo '<span>';
            echo CHtml::link($values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'home_marquee_news', 'target' => '_blank'));
            echo '</span>';
            echo '<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>';
        }
    }

    public function local_main_news() {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                ->where('state=1 AND home_page=1')
                ->limit('2')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<h2 class="local_main_news">' . $this->get_menu_name(52) . '</h2>';
        echo '<div class="row-fluid">';
        foreach ($array as $key => $values) {
            echo '<div class="span6">';
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 415, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news')) . '</div>';
            echo '</div>';
        }
        echo '</div>';
    }

    public function local_main_news1() {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=1 ORDER BY created DESC, id DESC LIMIT 2,1')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 270, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news2')) . '</div>';
        }
    }

    public function local_main_news2() {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=1 ORDER BY created DESC, id DESC LIMIT 3,1')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 270, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news2')) . '</div>';
        }
    }

    public function local_main_news3() {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=1 ORDER BY created DESC, id DESC LIMIT 4,1')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 270, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news2')) . '</div>';
        }
    }

    public function local_main_news4() {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=1 ORDER BY created DESC, id DESC LIMIT 5,1')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 270, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news2')) . '</div>';
        }
    }

    public function local_main_news5() {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=1 ORDER BY created DESC, id DESC LIMIT 6,1')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 270, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news2')) . '</div>';
        }
    }

    public function local_main_news6() {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=1 ORDER BY created DESC, id DESC LIMIT 7,1')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 270, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news2')) . '</div>';
        }
    }

    public function local_main_news7() {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=1 ORDER BY created DESC, id DESC LIMIT 8,5')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div style="clear:both;border-bottom: 1px dotted #999;">' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
        }
    }

    public function local_main_news8() {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=1 ORDER BY created DESC, id DESC LIMIT 13,5')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div style="clear:both;border-bottom: 1px dotted #999;">' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
        }
    }

    public function get_interviews_title($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                //->where('state=1 AND home_page=0 AND catid=' . $catid)
                ->where('state=1 AND catid=' . $catid)
                ->limit('1')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<h3 class="category_news">' . CHtml::link($this->get_category_name($catid), array('/news/index', 'id' => $catid), array('class' => '', 'target' => '_blank')) . '</h3>';
        foreach ($array as $key => $values) {
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news')) . '</div>';
            $filePath = Yii::app()->basePath . '/../uploads/news/' . $values["images"];
            if ((is_file($filePath)) && (file_exists($filePath))) {
                echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 270, 'title' => $values['title'])) . '</div>';
            }
        }
    }

    public function get_interviews_list($catid) {
        //$array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND home_page=0 AND catid=' . $catid . ' ORDER BY created DESC, id DESC LIMIT 1,5')->queryAll();
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE state=1 AND catid=' . $catid . ' ORDER BY created DESC, id DESC LIMIT 1,5')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div style="clear:both;border-bottom: 1px dotted #999;">' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
        }
    }

    public function get_interviews($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                //->where('state=1 AND home_page=0 AND catid=' . $catid)
                ->where('state=1 AND catid=' . $catid)
                ->limit('1')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<h3 class="category_news">' . CHtml::link($this->get_category_name($catid), array('/news/index', 'id' => $catid), array('class' => '', 'target' => '_blank')) . '</h3>';
        foreach ($array as $key => $values) {
            echo '<div>' . CHtml::link($values['title'], array('news/view', 'id' => $values['id']), array('class' => 'local_news')) . '</div>';
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 415, 'title' => $values['title'])) . '</div>';
        }
    }

    public function getCategoryNewsList_image($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                //->where('catid=' . $catid . ' AND state=1 AND home_page=0')
                ->where('catid=' . $catid . ' AND state=1')
                ->limit('10')
                ->order('created DESC, id DESC')
                ->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 200, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
            echo '<div class="hr_border">&nbsp;</div>';
        }
    }

    public function get_scroll_image($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,images')
                ->from('{{news}}')
                ->where('catid=' . $catid . ' AND state=1')
                ->limit('10')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<marquee onmouseout="this.start()" onmouseover="this.stop()" behavior="scroll" direction="up">';
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 260, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link($values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
            echo '<div class="hr_border">&nbsp;</div>';
        }
        echo '</marquee>';
    }

    public function getLosAngelseNewsImage($catid) {
        $array = Yii::app()->db->createCommand('SELECT id,title,images FROM {{news}} WHERE catid=' . $catid . ' AND state=1 ORDER BY created DESC, id DESC LIMIT 10,10')->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="thumbnail">' . CHtml::image(Yii::app()->baseUrl . '/uploads/news/' . $values["images"], $values['title'], array("width" => 200, 'title' => $values['title'])) . '</div>';
            echo '<div>' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
            echo '<div class="hr_border">&nbsp;</div>';
        }
    }

    public function getCategoryNewsList($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title')
                ->from('{{news}}')
                //->where('catid=' . $catid . ' AND state=1 AND home_page=0')
                ->where('catid=' . $catid . ' AND state=1')
                ->limit('10')
                ->order('created DESC, id DESC')
                ->queryAll();
        foreach ($array as $key => $values) {
            echo '<div style="clear:both;border-bottom: 1px dotted #999;">' . CHtml::link('&CircleDot; ' . $values['title'], array('/news/view', 'id' => $values['id']), array('class' => 'latest_news')) . '</div>';
        }
    }

}