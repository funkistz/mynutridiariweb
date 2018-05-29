<?php
class ProductController extends AdmController {
    public function actionIndex() {
        $prod = Product::model()->findAll();
        $this->render('index', array('prod'=>$prod));
    }
    
    public function actionNew() {
        $data['title'] = 'New';
        $this->render('form', $data);
    }
    
    public function actionSave() {
        if ($_POST['id'] === '') {
            $prod = new Product();
            $data['title'] = 'New';
        } else {
            $prod = Product::model()->findByPk($_POST['id']);
            $data['title'] = 'Update';
        }
       
        $title = '"'.$_POST['title_bm'].'"|"'.$_POST['title_en'];
        $prod->product_title = $title;
        $info = '"'.$_POST['info_bm'].'"|"'.$_POST['info_en'];
        $prod->product_info = $info;
        $prod->product_price = $_POST['price'];
        $prod->product_currency = $_POST['currency'];
        $prod->product_category = $_POST['category'];
        $excercise->updated = date('Ymd');
        $data['excercise'] = $excercise;
        
        if ($prod->save()) {
            $this->redirect('index.php?r=product');
        } else {
            $this->render('form', $data);
        }
    }
    
    public function actionUpdate($id) {
        $data['title'] = 'Update';
        $prod = Product::model()->findByPk($id);
        $aTitle = MyString::explode($prod->product_title);
        $data['title_bm'] = $aTitle[0];
        $data['title_en'] = $aTitle[1];
        $aInfo = MyString::explode($prod->product_info);
        $data['info_bm'] = $aInfo[0];
        $data['info_en'] = $aInfo[1];
        $data['prod'] = $prod;
        $this->render('form', $data);
    }
    
    public function actionDelete($id) {
        $prod = Product::model()->findByPk($id);
        $prod->delete();
        $this->redirect('index.php?r=product');
    }
}