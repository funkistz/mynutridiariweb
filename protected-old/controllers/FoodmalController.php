<?php
class FoodmalController extends AdmController {
    public function actionIndex() {
        $foods = Foodmal::model()->findAll();
        //var_dump($foods);exit;
        $this->render('index', array('foods' => $foods));
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