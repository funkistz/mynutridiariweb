<?php
class PubController extends Controller {
    public function actionIndex() {
        $qinfo = SrvInfo::model()->findAll("sid=1");
        $this->render('index', array('qinfo' => $qinfo));
    }
    
    public function actionSave() {
        $qid = $_POST['qid'];
        foreach ($qid as $id) {
            $question = SrvQuestion::model()->findByPk($id);
            $info = SrvInfo::model()->findByPk($question->iid);
            $answer = new SrvAnswer();
            $answer->qid = $id;
            $answer->answered_by = Yii::app()->user->name;
            if ($info->qcat == 'opn') {
                $answer->txt = $_POST[$id];
            } else {
                $answer->oid = $_POST[$id];
            }
            $answer->save();
        }
        $this->render('msg');
    }
}