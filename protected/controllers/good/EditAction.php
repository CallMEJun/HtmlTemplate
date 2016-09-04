<?php 
class EditAction extends CAction{
    public function run(){
        $id = Yii::app()->request->getParam('id');
        $result = GoodProxy::goodInfo($id);
        if(Yii::app()->request->isAjaxRequest){
            $name = Yii::app()->request->getParam('name');
            $picture = Yii::app()->request->getParam('picture');
            $price = Yii::app()->request->getParam('price');

            $data = array(
                'name' => $name,
                'picture' => $picture,
                'id' => $id,
                'price' => $price,
            );
            $data = GoodProxy::goodUpdate($data);
            echo CJSON::encode($data);
        } else {
            $this->controller->render('edit',array('data'=>$result));
        }
    }
}