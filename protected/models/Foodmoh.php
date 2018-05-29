<?php
class Foodmoh extends CActiveRecord {
    var $uuid;
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        return "food_moh";
    }
    
    public function rules() {
        return array(
            //array('title', 'required'),
            //array('parent_id, level,sort,cat_type', 'numerical', 'integerOnly'=>true),
            array('NAME,BARCODE,PLACE_BOUGHT,MANUFACTURER,INGREDIENTS,MEASUREMENT,WEIGHT,CALORIES,CARBOHYDRATE,PROTEIN,FAT,MUFA,PUFA,CHOLESTEROL,SAT,TRANS,FIBER,SUGAR,SODIUM,VITA,VITC,CALCIUM,IRON,server_id', 'safe'),
        );
    }
    
    protected function beforeSave() {
        $f = $this->findBySql("SELECT uuid() as uuid");
        $this->server_id = $f->uuid;
        return parent::beforeSave();
    }
}