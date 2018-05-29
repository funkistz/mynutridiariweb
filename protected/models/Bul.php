<?php
class Bul extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'bul';
    }

    public function rules() {
        return array(
            array('hits', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 255),
            array('create_by', 'length', 'max' => 25),
            array('status', 'length', 'max' => 2),
            array('cat, pub_cat', 'length', 'max' => 5),
            array('summary, create_dt, update_dt', 'safe'),
        );
    }

    public function relations() {
        return array(
            'content' => array(self::HAS_MANY, 'BulContent', 'bul_id'),
            'cat' => array(self::HAS_ONE, 'Cat', 'cat'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Tajuk',
            'summary' => 'Ringkasan',
            'content' => 'Kandungan',
            'create_dt' => 'Create Dt',
            'update_dt' => 'Update Dt',
            'create_by' => 'Create By',
            'status' => 'Status',
            'cat' => 'Kategori',
            'dept' => 'Dept',
            'hits' => 'Hits',
            'pub_cat' => 'Pub Cat',
        );
    }

    public function beforeSave() {
        if ($this->isNewRecord)
            $this->create_dt = new CDbExpression('NOW()');
        else
            $this->update_dt = new CDbExpression('NOW()');

        return parent::beforeSave();
    }
}