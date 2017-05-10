<?php

class SiteController extends Controller {

    public $layout = '//layouts/column1';

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'contact', 'login', 'logout'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin', 'delete', 'logout'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('create', 'update', 'admin', 'delete', 'logout'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $this->pageTitle = Yii::app()->name;
        Yii::app()->clientScript->registerMetaTag(Yii::app()->name . ' - Bengali online newspaper published from Hollywood.', 'description');
        Yii::app()->clientScript->registerMetaTag("hollywoodbangla.com,hollywoodbangla,hollywood,newspaper,news paper,bd newspaper, bangla news, bangla newspaper, bengali newspaper,bangladesh newspaper,bangla news paper,bangladeshi newspaper,news paper bangladesh,daily news paper in bangladesh,daily newspapers of bangladesh,daily newspaper,Daily newspaper,Current News,current news,bengali daily newspaper,daily News,The Daily Prothom Alo, Prothom Alo, Prothom Alo, prothom-alo.net, Portal, portal, Bangla, bangla, News, news, Bangladesh, bangladesh, Bangladeshi, bangladeshi, Bengali, Culture, Portal Site, Dhaka, textile, garments, micro credit, Bangladesh News, phone cards, business news, Free Advertisement, free Ad, free Ad on the net, buy-sell, buy &amp; sell, buy and sell, Advertisement on the Net, Horoscope, horoscope, IT, ICT, Business, Health, health, Media, TV, Radio, Dhaka News, World News, National News, Bangladesh Media, Betar, Current News, Weather, weather, foreign exchange rate, Foreign Exchange Rate, Education, Foreign Education,Higher Education, Family, Relationship, Sports, sports, Bangladesh Sports, Bangladesh, Bangladesh Politics, Bangladesh Business,Hollywood Bangla Newspaper, News, Bangladesh, Bangla, Bengali, হলিউড বাংলা নিউজ,  হলিউড, বাংলা, নিউজ, Khabor, khabor, Portal, portal, Bangla, bangla, News, news, Bangladesh, bangladesh, Bangladeshi, bangladeshi, Bengali, Culture, Portal Site, Dhaka, textile, garments, micro credit, Bangladesh News, phone cards, business news, Free Advertisement, free Ad, free Ad on the net, buy-sell, buy &amp; sell, buy and sell, Advertisement on the Net, Horoscope, horoscope, IT, ICT, Business, Health, health, Media, TV, Radio, Dhaka News, World News, National News, Bangladesh Media, Betar, Current News, Weather, weather, foreign exchange rate, Foreign Exchange Rate, Education, Foreign Education,Higher Education, Family, Relationship, Sports, sports, Bangladesh Sports, Bangladesh, Bangladesh Politics, Bangladesh Business", 'keywords');

        $criteria = new CDbCriteria(array(
            'order' => 'created DESC, id DESC',
            'condition' => 'state = 1 AND home_page=1',
            'limit' => '50',
        ));
        $dataProvider = new CActiveDataProvider('News', array(
            'criteria' => $criteria,
            'pagination' => false,
        ));

        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));

        //$this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginFormUser;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginFormUser'])) {
            $model->attributes = $_POST['LoginFormUser'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}