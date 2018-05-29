<?php
class SocialController extends AdmController {
    // list all users
    public function actionIndex() {
        $social = Social::model()->findAll();
        $this->render('index', array('social'=>$social));
    }
    
    public function actionSave() {
        $social = Social::model()->findByPk($_POST['social_id']);
        $social->reply = $_POST['reply'];
        $social->updated = date('Ymd');
        if ($social->save()) {
            $this->redirect('index.php?r=social');
        } else {
            $this->render('form', array('social'=>$social));
        }
    }
    
    public function actionUpdate($id) {
        $social = Social::model()->findByPk($id);
        $this->render('form', array('social'=>$social));
    }
    
    public function actionDelete($id) {
        $model = Social::model()->findByPk($id);
        $model->delete();
        $this->redirect('index.php?r=social');
    }
}