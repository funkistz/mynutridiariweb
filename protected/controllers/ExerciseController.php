<?php
class ExerciseController extends AdmController {
    public function actionTest() {
        $str = '"azman zakaria"|"Juliana Sim"';
        $arr = MyString::explode($str);
        var_dump($arr);
    }
    
    public function actionIndex() {
        $excercise = Exercise::model()->findAll();
        $this->render('index', array('excercise'=>$excercise));
    }
    
    public function actionNew() {
        $data['title'] = 'New';
        $this->render('form', $data);
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            $excercise = new Exercise();
            $data['title'] = 'New';
        } else {
            $excercise = Exercise::model()->findByPk($_POST['id']);
            $data['title'] = 'Update';
        }
       
        $name = '"'.$_POST['name_bm'].'"|"'.$_POST['name_en'];
        $excercise->exercise_name = $name;
        $info = '"'.$_POST['info_bm'].'"|"'.$_POST['info_en'];
        $excercise->exercise_info = $info;
        $excercise->exercise_calories = $_POST['exercise_calories'];
        $excercise->updated = date('Ymd');
        $data['excercise'] = $excercise;
        
        if ($excercise->save()) {
            $this->redirect('index.php?r=exercise');
        } else {
            $this->render('form', $data);
        }
    }
    
    public function actionUpdate($id) {
        $data['title'] = 'Update';
        $exercise = Exercise::model()->findByPk($id);
        $aName = MyString::explode($exercise->exercise_name);
        $data['name_bm'] = $aName[0];
        $data['name_en'] = $aName[1];
        $aInfo = MyString::explode($exercise->exercise_info);
        $data['info_bm'] = $aInfo[0];
        $data['info_en'] = $aInfo[1];
        $data['exercise'] = $exercise;
        $this->render('form', $data);
    }
    
    public function actionDelete($id) {
        $excercise = Exercise::model()->findByPk($id);
        $excercise->delete();
        $this->redirect('index.php?r=exercise');
    }
}