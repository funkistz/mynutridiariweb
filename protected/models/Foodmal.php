<?php
class Foodmal extends CActiveRecord {
    var $uuid;
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        return "food_malaysia";
    }
    
    public function rules() {
        return array(
            //array('title', 'required'),
            //array('parent_id, level,sort,cat_type', 'numerical', 'integerOnly'=>true),
            array('food_name,food_info,food_measurement,food_weight,food_calorie,food_carbo,food_protein,food_fat,food_cholesterol,food_sugar,food_salt,food_type,food_calorie_level,food_icon', 'safe'),
        );
    }
    
    protected function beforeSave() {
        $this->server_id = Yii::app()->session->sessionID;
        return parent::beforeSave();
    }
}