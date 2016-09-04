<?php 
class CreateAction extends CAction{
    public function run(){
        if(Yii::app()->request->isPostRequest){
            $name = Yii::app()->request->getParam('name');
            $picture = Yii::app()->request->getParam('picture');
            $price = Yii::app()->request->getParam('price');
            
            $data = array(
                'name' => $name,
                'picture' => $picture,
                'price' => $price,
            );
            $result = GoodProxy::goodCreate($data);
            if($result['code'] == 200){
                $this->controller->redirect('/good/list');
            }
        } else {
            $this->controller->render('edit');
        }
    }
}