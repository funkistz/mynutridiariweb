<?php
class LabController extends AdmController {
    public function actionUpdateUuid() {
        $foods = Foodmal::model()->findAll();
        foreach ($foods as $food) {
            $f = Foodmal::model()->findBySql("SELECT uuid() as uuid");
            //echo $f->uuid.'<br>';
            $uuid = $f->uuid;
            $food->server_id = $uuid;
            $food->save();
        }
    }
    
    public function actionUpdateUuid2() {
        $foods = Foodmoh::model()->findAll();
        foreach ($foods as $food) {
            $f = new Foodmoh();
            $f2 = $f->findBySql("SELECT uuid() as uuid");
            //echo $f->uuid.'<br>';
            $uuid = $f2->uuid;
            //echo $uuid.'<br>'.$food->id;
            $food->server_id = $uuid;
            echo $food->server_id;
            if($food->save()) {
            	echo 'good'.$food->server_id.' '.$uuid.'<br>';
            } else {
            	echo 'ko';
            }
        }
    }
}