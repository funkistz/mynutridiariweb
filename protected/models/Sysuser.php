<?php
class Sysuser extends CActiveRecord {
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        return "sys_user";
    }
    
    public function rules() {
        return array(
            //array('title', 'required'),
            //array('parent_id, level,sort,cat_type', 'numerical', 'integerOnly'=>true),
            array('user_id,password,role,create_dt', 'safe'),
        );
    }
}