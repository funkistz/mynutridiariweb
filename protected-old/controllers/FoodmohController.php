<?php
class FoodmohController extends AdmController {
    public function actionIndex() {
        $foods = Foodmoh::model()->findAll();
        //var_dump($foods);exit;
        $this->render('index', array('foods' => $foods));
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