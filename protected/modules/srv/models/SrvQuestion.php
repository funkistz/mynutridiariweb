<?php
class SrvQuestion extends CActiveRecord {
    public function tableName() {
        return 'srv_question';
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}