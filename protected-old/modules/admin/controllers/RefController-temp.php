<?php
class RefController extends Controller {
    public function actionIndex() {
        $ref = new Ref();
        $refs = $ref->findAll();
        foreach ($refs as $r) {
            echo $r->code;
        }
    }
}
