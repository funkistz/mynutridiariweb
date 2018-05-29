<?php
class ContentController extends AdmController {
    public function actionIndex() {
        $content = Content::model()->findAll();
        $this->render('index', array('content'=>$content));
    }
    
    public function actionNew() {
        $data['title'] = 'New';
        $this->render('form', $data);
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            $content = new Content();
            $content->content_datetime = date('Y-m-d H:i:s');
            $data['title'] = 'New';
        } else {
            $content = Content::model()->findByPk($_POST['id']);
            $data['title'] = 'Update';
        }
       
        $content->setAttributes($_POST['content']);
        $content->updated = date('Ymd');
        $data['content'] = $content;
        if ($content->save()) {
            $this->redirect('index.php?r=content');
        } else {
            $this->render('form', $data);
        }
    }
    
    public function actionUpdate($id) {
        $data['title'] = 'Update';
        $content = Content::model()->findByPk($id);
        $data['content'] = $content;
        $this->render('form', $data);
    }
    
    public function actionDelete($id) {
        $content = Content::model()->findByPk($id);
        $content->delete();
        $this->redirect('index.php?r=content');
    }
}