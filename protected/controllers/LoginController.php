<?php
class LoginController extends Controller {
    
    public function actionAuth() {
        //$id = new AdminIdentity($_POST['uname'], md5($_POST['passwd']));
        $id = new AdminIdentity($_POST['uname'], $_POST['passwd']);
        $id->authenticate();
        
        if ($id->errorCode === AdminIdentity::ERROR_NONE) {
            Yii::app()->user->login($id);
            Yii::app()->session['menu'] = 'xm1';
            $this->redirect('index.php?r=home');
        } else {
            Yii::app()->user->setFlash('err', 'Wrong combination of User Id and Password');
            $this->redirect('index.php?r=login');
        }
    }
    
    public function actionIndex() {
        Yii::app()->session['menu'] = 'xm6';
        $this->render('form');
    }
    
    public function actionWelcome() {
        $this->render('welcome');
    }
    
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect('index.php');
    }
}