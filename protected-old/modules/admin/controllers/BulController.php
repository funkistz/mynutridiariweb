<?php
class BulController extends AdmController {    
    public function actionView($id) {
        $this->render('view', array('model'=>$this->loadModel($id),));
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            // insert
            $model = new Bul(); // create a new model
            $model2 = new BulContent();
        } else {
            // update
            $model = Bul::model()->findByPk($_POST['id']);
            $model2 = BulContent::model()->findByAttributes(array('bul_id'=>$model->id));
        }

        $model->setAttributes($_POST['Bul']);
        //$model->status = $_POST['status'];
        //$model->cat = $_POST['cat'];
       
        if ($model->save()) {
            $model2->bul_id = $model->id;
            $model2->page = 1;
            $model2->content = $_POST['content'];
            $model2->save();
            $this->redirect('index.php?r=admin/bul/list');
        } else {
            $err = $model->getErrors();
            $ref = new Ref();
            $cat = new Categories();
            $parent = $cat->getParentList();
            $this->render('form', array('model'=>$model, 'err'=>$err, 'ref'=>$ref, 'parent'=>$parent));
        }
    }

    public function actionForm() {
        if(isset($_GET['id'])) {
            // update case
            $id = $_GET['id'];
            $model = Bul::model()->findByPk($id);
            $model2 = BulContent::model()->findByAttributes(array('bul_id'=>$id));
        } else {
            // new case
            $model = new Bul;
            $model2 = new BulContent();
        }
        
        $ref = new Ref();
        $cat = new Cat();
        $parent = $cat->getParentList();
        $this->render('form',array('model'=>$model,'model2'=>$model2, 'ref'=>$ref, 'parent'=>$parent));
    }


    public function actionDelete() { 
        $this->loadModel($_GET['id'])->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }
    
    public function actionList() {
        // panggil model dan minta model return semua data dlm table
        $rows = Bul::model()->findAll();
        $this->render('list', array('rows'=>$rows));
    }

    public function loadModel($id) {
        $model = Bulletin::model()->findByPk($id);

        if($model === null)
            throw new CHttpException(404,'The requested page does not exist.');

        return $model;
    }
}