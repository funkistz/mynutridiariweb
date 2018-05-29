<?php
class DiariController extends AdmController {
    public function actionIndex($id) {
        $user = User::model()->findByPk($id);
        $diari1 = Diari::model()->findAll("username = '{$user->username}' AND type = 'CALORIE' ORDER BY diaridate DESC");
        $diari2 = Diari::model()->findAll("username = '{$user->username}' AND type = 'WEIGHT' ORDER BY diaridate DESC");
        $data['diari1'] = $diari1;
        $data['diari2'] = $diari2;
        $data['user'] = $user;
        $this->render('index', $data);
    }
}