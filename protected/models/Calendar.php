<?php
class Calendar extends CActiveRecord {
    public function tableName() {
        return "calendar";
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}