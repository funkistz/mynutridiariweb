<?php
class UserController extends AdmController {
    // list all users
    public function actionIndex() {
        $users = Sysuser::model()->findAll();
        $this->render('index', array('users'=>$users));
    }
    
    public function actionNew() {
        $this->render('form');
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            // insert
            $user = new Sysuser(); // create a new model
            $user->create_dt = date('Y-m-d');
        } else {
            // update
            $user = Sysuser::model()->findByPk($_POST['id']);
        }
        
        $user->setAttributes($_POST['Users']);
        if ($user->save()) {
            $this->redirect('index.php?r=admin/user');
        } else {
            //$ref = new Ref();
            $this->render('form', array('user'=>$user));
        }
    }
    
    public function actionUpdate($id) {
        $user = Sysuser::model()->findByPk($id);
        $this->render('form', array('user'=>$user));
    }
    
    public function actionDelete($id) {
        $model = Sysuser::model()->findByPk($id);
        $model->delete();
        $this->redirect('index.php?r=admin/user');
    }
}