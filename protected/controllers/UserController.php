<?php
class UserController extends AdmController {
    // list all users
    public function actionIndex() {
    	$criteria = new CDbCriteria();
    	
    	 if (isset($_POST['fullname'])) {
            $fname = $_POST['fullname'];
            Yii::app()->session['fullname'] = $fname;
            $criteria->addSearchCondition('fullname', "%$fname%", false);
        } else {
            $fname = '';
            if (isset(Yii::app()->session['fullname'])) {
                $fname = Yii::app()->session['fullname'];
            }
            $criteria->addSearchCondition('fullname', "%$fname%", false);
        }
        
        if (isset($_POST['email'])) {
            $femail= $_POST['email'];
            Yii::app()->session['email'] = $femail;
            $criteria->addSearchCondition('email', "%$femail%", false);
        } else {
            $fname = '';
            if (isset(Yii::app()->session['email'])) {
                $fname = Yii::app()->session['email'];
            }
            $criteria->addSearchCondition('email', "%$femail%", false);
        }
        
        //$users = User::model()->findAll();
        $count = User::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 20;
        $pages->applyLimit($criteria);
        $users = User::model()->findAll($criteria);
        
        if (isset($_GET['page']))
            $i = ($_GET['page'] - 1) * $pages->pageSize + 1;
        else
            $i = 1;
            
        $this->render('index', array('users'=>$users, 'pages'=>$pages, 'i'=>$i));
    }
    
    public function actionNew() {
        $this->render('form');
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            // insert
            $model = new User(); // create a new model
            $model->activation = md5(date('dmYHis'));
        } else {
            // update
            $model = User::model()->findByPk($_POST['id']);
        }
       
        //$model->setAttributes($_POST['User']);
        //var_dump($model);exit;
        $model->fullname = $_POST['fullname'];
        $model->password = $_POST['password'];
        $model->status   = $_POST['status'];
        $model->email    = $_POST['email'];
        if ($model->save()) {
            $this->redirect('index.php?r=user');
        } else {
            $errors = $model->getErrors(); 
            $this->render('form', array('user'=>$model, 'errors'=>$errors));
        }
    }
    
    public function actionUpdate($id) {
        $user = User::model()->findByPk($id);
        $this->render('form', array('user'=>$user));
    }
    
    public function actionDelete($id) {
        $model = User::model()->findByPk($id);
        $model->delete();
        $this->redirect('index.php?r=user');
    }
}