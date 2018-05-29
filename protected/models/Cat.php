<?php
class Cat extends CActiveRecord {
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        return 'cat';
    }
    
    public function rules() {
        return array(
            array('title', 'required'),
            array('parent_id, level,sort,cat_type', 'numerical', 'integerOnly'=>true),
            array('published, target,access,img_src,menu_loc', 'safe'),
        );
    }
    
    public function listRef($cat) {
        $models = $this->findAll("cat='$cat'");
        return CHtml::listData($models, 'code', 'descr');
    }
    
    public function printCat($id) {
        $model = $this->findByPk($id);
        return $model->title;
    }
    
    /**
     * return all data sort by parent_id and level suitable for table display
     * @return array
     */
    public function getCatList($level=0) {
        $arr = array();
        $rows = $this->findAll($level);
        
        foreach ($rows as $row) {
            array_push($arr, $row);
            $this->getCat($row->id, $arr);
        }
        return $arr;
    }
    
    private function getCat($parent_id, &$arr) {
        $rows = $this->findAll("parent_id=$parent_id");
        foreach ($rows as $row) {
            array_push($arr, $row);
            $rows2 = $this->getCat($row->id, $arr);
        }
    }
    
    public function relations()
    {
            // NOTE: you may need to adjust the relation name and the related
            // class name for the relations automatically generated below.
            return array('modul' => array(self::BELONGS_TO, 'Categories', 'parent_id',),
            );
    }

    /**
     * return all data sort by parent id and level suitable for dropdown box
     * @return string
     */
    public function getParentList() {
        $arr = array();
        $rows = $this->getCatList();
        foreach ($rows as $row) {
            $arr[$row->id] = $this->marker($row->level) .' '. $row->title;
        }
        return $arr;
    }
    
    private function marker($level) {
        $str = '.';
        for ($i=0; $i<$level; $i++) {
            $str .= '-';
        }
        return $str;
    }
}