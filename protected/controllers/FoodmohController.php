<?php
class FoodmohController extends AdmController {
    public function actionIndex() {
        $criteria = new CDbCriteria();
        
        if (isset($_POST['fname'])) {
            $fname = $_POST['fname'];
            Yii::app()->session['fname'] = $fname;
            $criteria->addSearchCondition('NAME', "%$fname%", false);
        } else {
            $fname = '';
            if (isset(Yii::app()->session['fname'])) {
                $fname = Yii::app()->session['fname'];
            }
            $criteria->addSearchCondition('NAME', "%$fname%", false);
        }
        
        $count = Foodmoh::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 20;
        $pages->applyLimit($criteria);
        $data['foods'] = Foodmoh::model()->findAll($criteria);
        $data['pages'] = $pages;
        $data['fname'] = $fname;
        
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
            $food = new Foodmoh(); // create a new model
        } else {
            // update
            $food = Foodmoh::model()->findByPk($_POST['id']);
        }
       
        $food->setAttributes($_POST['food']);
        //var_dump($model);exit;
        if ($food->save()) {
            $this->redirect('index.php?r=foodmoh');
        } else {
            $this->render('form', array('food'=>$food));
        }
    }
    
    public function actionUpdate($id) {
        $food = Foodmoh::model()->findByPk($id);
        $this->render('form', array('food'=>$food));
    }
    
    public function actionDelete($id) {
        $food = Foodmoh::model()->findByPk($id);
        $food->delete();
        $this->redirect('index.php?r=foodmoh');
    }
}