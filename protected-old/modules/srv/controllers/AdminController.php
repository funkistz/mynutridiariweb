<?php
class AdminController extends AdmController {  
    public function actionIndex() {
        $info = SrvInfo::model()->findAll("sid=1");
        $this->render('index', array('qinfo' => $info));
    }
}