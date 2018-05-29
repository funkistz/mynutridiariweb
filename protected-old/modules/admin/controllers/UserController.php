<?php
class UserController extends AdmController {
    // list all users
    public function actionIndex() {
        $users = User::model()->findAll();
        $this->render('index', array('users'=>$users));
    }
    
    public function actionNew() {
        $this->render('form');
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            // insert
            $model = new User(); // create a new model
        } else {
            // update
            $model = User::model()->findByPk($_POST['id']);
        }
        
        $model->setAttributes($_POST['Users']);
        
        if ($model->save()) {
            $this->redirect('index.php?r=admin/user');
        } else {
            //$ref = new Ref();
            $this->render('form', array('model'=>$model));
        }
    }
    
    public function actionUpdate($id) {
        $user = User::model()->findByPk($id);
        $this->render('form', array('user'=>$user));
    }
    
    public function actionDelete($id) {
        $model = User::model()->findByPk($id);
        $model->delete();
        $this->redirect('index.php?r=admin/user');
    }
}