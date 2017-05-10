<?php

/**
 * This is the model class for table "{{news}}".
 *
 * The followings are the available columns in table '{{news}}':
 * @property string $id
 * @property string $title
 * @property string $alias
 * @property string $title_alias
 * @property string $introtext
 * @property string $fulltext
 * @property integer $state
 * @property string $sectionid
 * @property string $mask
 * @property string $catid
 * @property string $created
 * @property string $created_by
 * @property string $created_by_alias
 * @property string $modified
 * @property string $modified_by
 * @property string $checked_out
 * @property string $checked_out_time
 * @property string $publish_up
 * @property string $publish_down
 * @property string $images
 * @property string $urls
 * @property string $attribs
 * @property string $version
 * @property string $parentid
 * @property integer $ordering
 * @property string $metakey
 * @property string $metadesc
 * @property string $access
 * @property string $hits
 * @property string $metadata
 * @property integer $home_page
 */
class News extends CActiveRecord {

    public $file;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return News the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{news}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, introtext, sectionid, catid, state, home_page', 'required'),
            array('state, ordering', 'numerical', 'integerOnly' => true),
            array('title, alias, title_alias, created_by_alias', 'length', 'max' => 255),
            array('file', 'file', 'types' => 'jpg, jpeg, gif, png', 'allowEmpty' => true, 'minSize' => 2, 'maxSize' => 1024 * 1024 * 5, 'tooLarge' => 'The file was larger than 500KB. Please upload a smaller file.', 'wrongType' => 'File format was not supported.', 'tooSmall' => 'File size was too small or empty.'),
            array('sectionid, mask, catid, created_by, modified_by, checked_out, version, parentid, access, hits', 'length', 'max' => 11),
            array('fulltext, images, urls, attribs, metakey, metadesc, metadata, created, modified, checked_out_time, publish_up, publish_down,home_page', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, alias, title_alias, introtext, fulltext, state, sectionid, mask, catid, created, created_by, created_by_alias, modified, modified_by, checked_out, checked_out_time, publish_up, publish_down, images, urls, attribs, version, parentid, ordering, metakey, metadesc, access, hits, metadata,home_page', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'News Title',
            'alias' => 'Alias',
            'title_alias' => 'Title Alias',
            'introtext' => 'News',
            'fulltext' => 'Fulltext',
            'state' => 'Published',
            'sectionid' => 'Section',
            'mask' => 'Mask',
            'catid' => 'Category',
            'created' => 'Created On',
            'created_by' => 'Created By',
            'created_by_alias' => 'Created By Alias',
            'modified' => 'Modified',
            'modified_by' => 'Modified By',
            'checked_out' => 'Checked Out',
            'checked_out_time' => 'Checked Out Time',
            'publish_up' => 'Publish Up',
            'publish_down' => 'Publish Down',
            'images' => 'Images',
            'urls' => 'Urls',
            'attribs' => 'Attribs',
            'version' => 'Version',
            'parentid' => 'Parentid',
            'ordering' => 'Ordering',
            'metakey' => 'Metakey',
            'metadesc' => 'Metadesc',
            'access' => 'Access',
            'hits' => 'Hits',
            'metadata' => 'Metadata',
            'home_page' => 'Show on Homepage',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('alias', $this->alias, true);
        $criteria->compare('title_alias', $this->title_alias, true);
        $criteria->compare('introtext', $this->introtext, true);
        $criteria->compare('fulltext', $this->fulltext, true);
        $criteria->compare('state', $this->state);
        $criteria->compare('sectionid', $this->sectionid);
        $criteria->compare('mask', $this->mask, true);
        $criteria->compare('catid', $this->catid);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('created_by', $this->created_by, true);
        $criteria->compare('created_by_alias', $this->created_by_alias, true);
        $criteria->compare('modified', $this->modified, true);
        $criteria->compare('modified_by', $this->modified_by, true);
        $criteria->compare('checked_out', $this->checked_out, true);
        $criteria->compare('checked_out_time', $this->checked_out_time, true);
        $criteria->compare('publish_up', $this->publish_up, true);
        $criteria->compare('publish_down', $this->publish_down, true);
        $criteria->compare('images', $this->images, true);
        $criteria->compare('urls', $this->urls, true);
        $criteria->compare('attribs', $this->attribs, true);
        $criteria->compare('version', $this->version, true);
        $criteria->compare('parentid', $this->parentid, true);
        $criteria->compare('ordering', $this->ordering);
        $criteria->compare('metakey', $this->metakey, true);
        $criteria->compare('metadesc', $this->metadesc, true);
        $criteria->compare('access', $this->access, true);
        $criteria->compare('hits', $this->hits, true);
        $criteria->compare('metadata', $this->metadata, true);
        $criteria->compare('home_page', $this->home_page);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 50,
            ),
            'sort' => array('defaultOrder' => 'created DESC, id DESC')
        ));
    }

    /**
     * Retrieves User name by ID.
     * @return string.
     */
    public static function getUserName($id) {
        $returnValue = Yii::app()->db->createCommand()
                ->select('name')
                ->from('{{user_admin}}')
                ->where('id=:id', array(':id' => $id))
                ->queryScalar();

        return $returnValue;
    }

    public static function getMetaTagDesc($id) {
        $returnValue = Yii::app()->db->createCommand()
                ->select('metadesc')
                ->from('{{judgment}}')
                ->where('id=:id', array(':id' => $id))
                ->queryScalar();

        return $returnValue;
    }

    public static function getMetaTagKey($id) {
        $returnValue = Yii::app()->db->createCommand()
                ->select('metakey')
                ->from('{{judgment}}')
                ->where('id=:id', array(':id' => $id))
                ->queryScalar();

        return $returnValue;
    }

    //get judgment category name from judgment id
    public static function getCategoryJudgmentID($id) {
        $cid = Judgment::model()->findByAttributes(array('id' => $id));
        $catname = JudgmentCategory::model()->findByAttributes(array('id' => $cid->category_id));
        return $catname->title;
    }

    //get judgment category name from judgment id
    public static function getCategoryID($id) {
        $cid = Judgment::model()->findByAttributes(array('id' => $id));
        return $cid->category_id;
    }

    public static function getCategory() {
        $return = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{news_sections}}')
                ->where('published=1')
                ->order('title')
                ->queryAll();
        echo '<select id="News_catid" name="News[catid]" class="span5">';
        echo '<option value="">--select--</option>';
        foreach ($return as $key => $values) {
            echo '<optgroup label="' . $values["title"] . '">';
            $returns = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('{{news_category}}')
                    ->where('published=1 AND section=' . $values["id"])
                    ->order('title')
                    ->queryAll();
            foreach ($returns as $key => $valuess) {
                echo '<option value="' . $valuess["id"] . '">' . $valuess["title"] . '</option>';
            }
            echo '</optgroup>';
        }
        echo '</select>';
    }

    public static function getCategoryUpdate($catid) {
        $return = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{news_sections}}')
                ->where('published=1')
                ->order('title')
                ->queryAll();
        echo '<select id="News_catid" name="News[catid]" class="span5">';
        echo '<option value="">--select--</option>';
        foreach ($return as $key => $values) {
            echo '<optgroup label="' . $values["title"] . '">';
            $returns = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('{{news_category}}')
                    ->where('published=1 AND section=' . $values["id"])
                    ->order('title')
                    ->queryAll();
            foreach ($returns as $key => $valuess) {
                if ($catid == $valuess["id"]) {
                    echo '<option selected="selected" value="' . $valuess["id"] . '">' . $valuess["title"] . '</option>';
                } else {
                    echo '<option value="' . $valuess["id"] . '">' . $valuess["title"] . '</option>';
                }
            }
            echo '</optgroup>';
        }
        echo '</select>';
    }

    /**
     * Retrieves Category name by ID.
     * @return string.
     */
    public static function getCategoryName($id) {
        $cid = NewsCategory::model()->findByAttributes(array('id' => $id));
        return $cid->title;
    }

    /**
     * Retrieves Section name by ID.
     * @return string.
     */
    public static function getSectionName($id) {
        $sid = NewsSections::model()->findByAttributes(array('id' => $id));
        return $sid->title;
    }

}