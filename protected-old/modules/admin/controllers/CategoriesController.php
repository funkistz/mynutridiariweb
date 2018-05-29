<?php
class CategoriesController extends AdmController {
    public function actionGetDescription($code) {
        //echo "Decription for $code is testing";
        $arr = array(
            'nama'=>'Azman Zakaria', 
            'alamat'=>'Puchong Selangor');
        $this->render('get_description', $arr);
    }
    
    public function actionCatList() {
        // panggil model dan minta model return semua data dlm table
        //$model = new Categories();
        //$arr = $model->getCatList();
        $arr = Categories::model()->findAll(array('order'=>'parent_id, sort  '));
        $this->render('cat_list', array('rows'=>$arr));
    }
    
    public function actionCatForm($id='') {
        if ($id === '') {
            // new
            $model = new Categories(); // empty model Ref
        } else {
            // update
            $model = Categories::model()->findByPk($id); // load data ke model Ref
        }
        $ref = new Ref();
        $parent = $model->getParentList();
        $this->render('cat_form', array('model'=>$model, 'ref'=>$ref, 'parent'=>$parent));
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            // insert
            $model = new Categories(); // create a new model
        } else {
            // update
            $model = Categories::model()->findByPk($_POST['id']);
        }

        $model->setAttributes($_POST['Categories']);
        
        $parentModel = Categories::model()->findByPk($model->parent_id);
        $model->level = $parentModel->level + 1;
        
        if ($model->save())
            $this->redirect('index.php?r=admin/categories/catList');
        else {
            $err = $model->getErrors();
            $this->render('cat_form', array('model'=>$model, 'err'=>$err));
        }
    }
    
    public function actionDelete($id) {
        $model = Categories::model()->findByPk($id);
        $model->delete();
        $this->redirect('index.php?r=admin/categories/catList');
    }
            
}