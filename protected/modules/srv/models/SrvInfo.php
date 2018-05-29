<?php
class SrvInfo extends CActiveRecord {
    public function tableName() {
        return 'srv_qinfo';
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}