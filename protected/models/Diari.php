<?php
class Diari extends CActiveRecord {
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        return "diaridata";
    }
    
    public function rules() {
        return array(
            //array('title', 'required'),
            //array('parent_id, level,sort,cat_type', 'numerical', 'integerOnly'=>true),
            //array('password,user_fullname,username', 'safe'),
        );
    }
}