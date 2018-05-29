<?php
class SrvOptions extends CActiveRecord {
    public function tableName() {
        return 'srv_options';
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}