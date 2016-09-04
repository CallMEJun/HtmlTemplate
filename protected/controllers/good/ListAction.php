<?php 
class ListAction extends CAction{
    public function run(){
        $start = Yii::app()->request->getParam('start');
        
        $result = GoodProxy::goodList($start,10);

        if(Yii::app()->request->isAjaxRequest){
            $data = array(
                'recordsTotal' => $result['count'],
                'recordsFiltered' => $result['count'],
                'data' => $result['data']
            );            
            echo CJSON::encode($data);
        } else {
            $this->controller->render('list',array('count'=>$result['count']));
        }
    }
}