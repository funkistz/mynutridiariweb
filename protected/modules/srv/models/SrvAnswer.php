<?php
class SrvAnswer extends CActiveRecord {
    public function tableName() {
        return 'srv_answer';
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}