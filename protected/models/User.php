<?php
class User extends CActiveRecord {
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        return "users";
    }
    
    public function rules() {
        return array(
            array('email', 'required'),
            //array('parent_id, level,sort,cat_type', 'numerical', 'integerOnly'=>true),
            array('password,fullname,status', 'safe'),
        );
    }
}