<?php
class HomeController extends AdmController {
    public function actionIndex() {
        $this->render('index');
    }
}