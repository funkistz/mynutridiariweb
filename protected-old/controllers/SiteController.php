<?php
class SiteController extends Controller {
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
    
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     * 
     */
    
    public function actionIndex() {
        Yii::app()->session['menu'] = 'xm1';
        $this->layout = '//layouts/column1';
        $bul = Bul::model()->findByPk(133);
        $contents = $bul->content;
        $str = '';
        foreach ($contents as $c) {
            $str .= $c->content;
        }
        $this->render('index', array('str'=>$str));
    }
}
