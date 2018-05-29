<?php
class Srv extends CActiveRecord {
    public function tableName() {
        return 'srv';
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}