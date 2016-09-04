<?php
class ViewAction extends CAction{
	public function run(){
		$id = Yii::app()->request->getParam('id');
		$result = GoodProxy::goodInfo($id);
		$this->controller->renderPartial('view',array('data'=>$result));
	}
}