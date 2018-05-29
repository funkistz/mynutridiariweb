<?php
class FoodmalController extends AdmController {
    public function actionIndex() {
        $criteria = new CDbCriteria();
        
        if (isset($_POST['food_name'])) {
            $fname = $_POST['food_name'];
            Yii::app()->session['food_name'] = $fname;
            $criteria->addSearchCondition('food_name', "%$fname%", false);
        } else {
            $fname = '';
            if (isset(Yii::app()->session['food_name'])) {
                $fname = Yii::app()->session['food_name'];
            }
            $criteria->addSearchCondition('food_name', "%$fname%", false);
        }
        
        $count = Foodmal::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 20;
        $pages->applyLimit($criteria);
        $data['foods'] = Foodmal::model()->findAll($criteria);
        $data['pages'] = $pages;
        $data['food_name'] = $fname;
        
        if (isset($_GET['page']))
            $data['i'] = ($_GET['page'] - 1) * $pages->pageSize + 1;
        else
            $data['i'] = 1;
        
        $this->render('index', $data);
    }
    
    public function actionNew() {
        $this->render('form');
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            // insert
            $food = new Foodmal(); // create a new model
        } else {
            // update
            $food = Foodmal::model()->findByPk($_POST['id']);
        }
       
        $food->setAttributes($_POST['food']);
        //var_dump($model);exit;
        if ($food->save()) {
            $this->redirect('index.php?r=foodmal');
        } else {
            $this->render('form', array('food'=>$food));
        }
    }
    
    public function actionUpdate($id) {
        $food = Foodmal::model()->findByPk($id);
        $this->render('form', array('food'=>$food));
    }
    
    public function actionDelete($id) {
        $food = Foodmal::model()->findByPk($id);
        $food->delete();
        $this->redirect('index.php?r=foodmal');
    }
}