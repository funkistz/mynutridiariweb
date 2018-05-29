<?php
class Ref extends CActiveRecord {
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        //return 'sys_ref';
        return 'ref';
    }
    
    public function rules() {
        return array(
            array('code,descr', 'required'),
            array('sort', 'numerical', 'integerOnly'=>true),
            array('cat', 'safe'),
        );
    }
    
    public function listRef($cat, $default=true) {
        $models = $this->findAll("cat='$cat'");
        
        if ($default)
            return array(''=>'--Sila Pilih--') + CHtml::listData($models, 'code', 'descr');
        else
            return CHtml::listData($models, 'code', 'descr');
    }
    
    public function listRefName($cat, $default=true) {
        $models = $this->findAll("cat='$cat'");
        
        if ($default)
            return array(''=>'--Sila Pilih--') + CHtml::listData($models, 'descr', 'descr');
        else
            return CHtml::listData($models, 'descr', 'descr');
    }
    
    public function listRefSelection($cat, $selection,$default=true) {
        $models = $this->findAll("cat='$cat' $selection");
        
        if ($default)
            return array(''=>'--Sila Pilih--') + CHtml::listData($models, 'code', 'descr');
        else
            return CHtml::listData($models, 'code', 'descr');
    }
}